<?php

namespace OpenDominion\Helpers;

class MiscHelper
{
    public function getResourceHelpString(string $resource): ?string {
        $helpStrings = [
            'platinum' => 'Produced via alchemies and peasants paying taxes.',
            'food' => 'Produced via farms and docks.<br>Each citizen (peasants and military) eats 0.25 bushels per hour',
            'lumber' => 'Produced via lumberyards.<br>Used for constructing buildings.',
            'mana' => 'Produced via towers.<br>Used for casting spells.',
            'ore' => 'Produced via ore mines.<br>Used to train <i>some</i> units.',
            'gems' => 'Produced via diamond mines.<br>Only used for improvements.',
            'tech' => 'Produced via schools or invasions.<br>Used to gain techs.',
            'boats' => 'Produced via docks.<br>Used by <i>most</i> races during invasions.<br>Each boat carries 30 units (40 for Kobold).',
        ];

        return $helpStrings[$resource] ?: null;
    }

    public function getGeneralHelpString(string $type) {
        $helpStrings = [
            'peasants' => 'Peasants are the non-military part of your population. They pay taxes and get drafted into military service.',
            'employment' => 'Each employed peasant pays 2.7p/h in taxes.',
            'networth' => 'Used to determine power of a dominion.<br>Buildings, land, and units give networth.',
            'prestige' => 'Gained via invasion.<br>Increases offensive power, maximum population, and food production.',
            'morale' => 'Morale below 100% gives a defensive penalty.<br>Morale is lowered by exploring and invading.',
            'infamy' => 'Gained via war operations.<br>Increases platinum production and gem production.',
            'spy_mastery' => 'Gained and lost via war operations.<br>Used for spy rankings.',
            'wizard_mastery' => 'Gained and lost via war operations.<br>Used for wizard rankings.',
            'spy_resilience' => 'Gained by victims of war operations.<br>Reduces damage taken from spy ops.',
            'wizard_resilience' => 'Gained by victims of war operations.<br>Reduces damage taken from wizard ops.',
        ];

        return $helpStrings[$type] ?: null;
    }
}
