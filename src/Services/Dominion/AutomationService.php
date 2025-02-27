<?php

namespace OpenDominion\Services\Dominion;

use DB;
use OpenDominion\Exceptions\GameException;
use OpenDominion\Models\Dominion;
use OpenDominion\Models\Spell;
use OpenDominion\Services\Dominion\Actions\BankActionService;
use OpenDominion\Services\Dominion\Actions\ConstructActionService;
use OpenDominion\Services\Dominion\Actions\DailyBonusesActionService;
use OpenDominion\Services\Dominion\Actions\DestroyActionService;
use OpenDominion\Services\Dominion\Actions\ExploreActionService;
use OpenDominion\Services\Dominion\Actions\ImproveActionService;
use OpenDominion\Services\Dominion\Actions\Military\ChangeDraftRateActionService;
use OpenDominion\Services\Dominion\Actions\Military\TrainActionService;
use OpenDominion\Services\Dominion\Actions\ReleaseActionService;
use OpenDominion\Services\Dominion\Actions\RezoneActionService;
use OpenDominion\Services\Dominion\Actions\SpellActionService;
use OpenDominion\Services\Dominion\HistoryService;
use OpenDominion\Services\Dominion\TickService;

class AutomationService
{
    /** @var BankActionService */
    protected $bankActionService;

    /** @var ChangeDraftRateActionService */
    protected $changeDraftRateActionService;

    /** @var ConstructActionService */
    protected $constructActionService;

    /** @var DailyBonusesActionService */
    protected $dailyBonusesActionService;

    /** @var DestroyActionService */
    protected $destroyActionService;

    /** @var ExploreActionService */
    protected $exploreActionService;

    /** @var ImproveActionService */
    protected $improveActionService;

    /** @var ReleaseActionService */
    protected $releaseActionService;

    /** @var RezoneActionService */
    protected $rezoneActionService;

    /** @var SpellActionService */
    protected $spellActionService;

    /** @var TickService */
    protected $tickService;

    /** @var TrainActionService */
    protected $trainActionService;

    protected $lastAction;
    protected $lastHour;

    /**
     * AIService constructor.
     */
    public function __construct()
    {
        // Action Services
        $this->bankActionService = app(BankActionService::class);
        $this->changeDraftRateActionService = app(ChangeDraftRateActionService::class);
        $this->constructActionService = app(ConstructActionService::class);
        $this->dailyBonusesActionService = app(DailyBonusesActionService::class);
        $this->destroyActionService = app(DestroyActionService::class);
        $this->exploreActionService = app(ExploreActionService::class);
        $this->improveActionService = app(ImproveActionService::class);
        $this->releaseActionService = app(ReleaseActionService::class);
        $this->rezoneActionService = app(RezoneActionService::class);
        $this->spellActionService = app(SpellActionService::class);
        $this->tickService = app(TickService::class);
        $this->trainActionService = app(TrainActionService::class);
    }

    public function processLog(Dominion $dominion, array $protection)
    {
        try {
            $currentHour = 72 - $dominion->protection_ticks_remaining;

            foreach ($protection as $hour => $actions) {
                if ($hour >= $currentHour) {
                    DB::transaction(function () use ($dominion, $hour, $actions) {
                        foreach ($actions as $action) {
                            $this->lastAction = $action;
                            $this->lastHour = $hour + 1;
                            $processFunc = 'process' . ucfirst($action['type']);
                            $this->$processFunc($dominion, $action['data']);
                            $dominion->refresh();
                        }
                        if ($hour < 72) {
                            // TODO: De-deplicate from MiscController
                            $dominion->protection_ticks_remaining -= 1;
                            if ($dominion->protection_ticks_remaining == 48 || $dominion->protection_ticks_remaining == 24 || $dominion->protection_ticks_remaining == 0) {
                                if ($dominion->daily_land || $dominion->daily_platinum) {
                                    // Record reset bonuses
                                    $bonusDelta = [];
                                    if ($dominion->daily_land) {
                                        $bonusDelta['daily_land'] = false;
                                    }
                                    if ($dominion->daily_platinum) {
                                        $bonusDelta['daily_platinum'] = false;
                                    }
                                }
                                $dominion->daily_platinum = false;
                                $dominion->daily_land = false;
                            }
                            $dominion->save(['event' => HistoryService::EVENT_ACTION_PROTECTION_ADVANCE_TICK]);

                            $this->tickService->performTick($dominion->round, $dominion);
                        }
                    });
                }
            }
        } catch (GameException $e) {
            throw new GameException("Error processing hour {$this->lastHour} line {$this->lastAction['line']} - " . $e->getMessage());
        }
    }

    protected function processBank(Dominion $dominion, array $data)
    {
        foreach ($data as $action) {
            $this->bankActionService->exchange($dominion, $action['source'], $action['target'], $action['amount']);
        }
    }

    protected function processConstruction(Dominion $dominion, array $data)
    {
        $this->constructActionService->construct($dominion, $data);
    }

    protected function processDaily(Dominion $dominion, string $data)
    {
        if ($data == 'platinum') {
            $this->dailyBonusesActionService->claimPlatinum($dominion);
        } else {
            $this->dailyBonusesActionService->claimLand($dominion);
        }
    }

    protected function processDestruction(Dominion $dominion, array $data)
    {
        $this->destroyActionService->destroy($dominion, $data);
    }

    protected function processDraftrate(Dominion $dominion, int $data)
    {
        $this->changeDraftRateActionService->changeDraftRate($dominion, $data);
    }

    protected function processExplore(Dominion $dominion, array $data)
    {
        $this->exploreActionService->explore($dominion, $data);
    }

    protected function processInvest(Dominion $dominion, array $data) {
        $this->improveActionService->improve($dominion, $data['resource'], [$data['improvement'] => $data['amount']]);
    }

    protected function processMagic(Dominion $dominion, string $data)
    {
        $this->spellActionService->castSpell($dominion, $data);
    }

    protected function processRelease(Dominion $dominion, array $data)
    {
        $this->releaseActionService->release($dominion, $data);
    }

    protected function processRezone(Dominion $dominion, array $data)
    {
        $this->rezoneActionService->rezone($dominion, $data['remove'], $data['add']);
    }

    protected function processTrain(Dominion $dominion, array $data)
    {
        $this->trainActionService->train($dominion, $data);
    }
}
