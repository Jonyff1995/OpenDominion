# Changelog
All notable changes relevant to players in this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/). This project uses its own versioning system.
## [Unreleased]
### Added
- Undo button in protection
- Every realm now has a pre-made Discord server
- NPDs begin to train/explore/etc on day 5
- Additional resources displayed in header overview
- Realm page shows usernames of players who share advisors
- Added spending statistics to production advisor
- Military modifier breakdown displayed on advisors/invade pages
- Rezone page now shows current percentage of each land type

### Changed
- Op Center now shows current land/networth
- Military advisor improved and portions moved to military page
- Construction advisor moved to construction page
- Land advisor moved to explore page
- Tech/Castle advisors removed
- Technology page and Vision ops now show the total number of techs unlocked
- Rankings advisor now links to overall rankings pages
- Improved dominion history logs

## [1.2.5] - 2021-01-20
### Changed
- Replace networth with land in overview top banner

### Fixed
- Updated infamy tooltip
- Bug with spy ops damage calculation
- Prevent mousewheel events in input fields

## [1.2.4] - 2021-01-17
### Added
- Show spy/wizard strength recovery rates in statistics advisor

### Fixed
- Nox racial was not being applied to the bonus invasion RP from schools
- Survivalist Mentality prestige perk was incorrect

## [1.2.3] - 2021-01-12
### Changed
- RPs from invasion decreased to 1000 (from 1100), but schools generate 130 per 1% owned up to a maximum of 2600 at 20% (from 39 per 1%, max 1560)
- Dwarf/Gnome: Racial spell now protects ore from earthquake
- Goblin Hobgoblin: -25p
- Orc: gains 10% additional prestige from invasions
- Lightning bolt damage increased to 0.41% (from 0.40%)
- Lightning bolt now damages Science instead of Towers (Harbor is also excluded)
- Masonries now protect 1% castle per 1% owned (from 0.75% per 1%), max remains at 25%
- War bonus to land/prestige gains reduced to 10% (from 15%), mutual war remains at 20%
- Infamy now boosts gem/ore/lumber production to a max of 3% (from 5% to gems only) in addition to platinum
- Infamy decay slightly reduced to 0.5% of current + 20 (from 25)
- Black op damage reduction is capped at 80% from all sources

### Fixed
- Draftees now included in RCL count
- RPs from invasion should not become negative on multiple previous invades

## [1.2.2] - 2021-01-05
### Added
- Added realm number to status page and ops center header
- Added racial perks to status page and ops center info pane

### Fixed
- Tributary System was incorrectly applying a flat 60% food production
- Removed troop cost abbreviations
- Battle reports now show additional information to realmies
- Notifications when land arrives after troops are home no longer display '0 units returned'

## [1.2.1] - 2021-01-03
### Added
- Show calculated damage reduction from resilience on status page and ops center
- Show calculated production bonuses from infamy on production advisor page

### Changed
- Removed black ops damage reduction based on war duration
- Removed wizard strength recovery bonus below 25% strength

## [1.2.0] - 2021-01-01
### Added
- New Stat: Infamy
  - Temporarily boosts platinum production (max 7.5%) and gem production (max 5%)
  - Gained when performing war operations
    - Increased by 5 per op
    - Bonus for targeting 75% (+10)
    - Bonus for higher ratio targets (+15-40)
  - Scales from 0 to 1000
  - Decays by 25 each hour
- New Stats: Spy Resilience, Wizard Resilience
  - Temporarily reduces damage taken by war operations (max 76%)
  - Gained when targeted by war operations
    - Spy Resilience is increased by 8 per op
    - Wizard Resilience is increased by 11 per op
  - Scales from 0 to 1000
  - Decays by 8 each hour
- New Stats: Spy Mastery, Wizard Mastery
  - Replaces Spy Prestige and Wizard Prestige rankings
  - Gained when performing war operations (Infamy / 10)
    - No gain when outclassing your target by 500 or more
    - Bonus when outclassed by your target (+1, -1 for your target)
    - Additional bonus when within 100pts of your target (+1, -1 for your target)
- New Tech Perks:
  - Tributary System, increases food production bonus from prestige by 60%
  - Anti-Magic Sigils, decreases duration of enemy spells by 1 hour
  - Menace, range-based infamy gain bonus expanded to 60%
- Many other techs have had their values adjusted or changed position in the tree
- Additional submit button at the top of the Technology page
- Timestamps in Op Center advisor

### Changed
- Removed prestige gain from war operations (replaced with Infamy)
- Dock protection now scales by 0.05/day after day 25 (from 0.1/day)
- Sabotage Boats damage increased to 2.25% (from 2%)
- Fireball damage increased to 2.65% from (2.5%)
- Magic Snare damage changed to 3.5% of current, min 1.5 (from flat 2%)
- Simplified the black ops success formula to a single variable
- Changed min/max success rates on black ops to 1%/95% (from 3%/97%)
- Changed min/max success rates on info/theft ops to 1%/99% (from 3%/97%)
- Spy losses from info ops limited to 0.006x LAND (0.003x LAND for Chameleon / Master Thief)
- Cyclone now has a 100% success rate
- Cyclone damage reduced to 1.5x wizards (from 3.5x) and 0.75% of max wonder health (from 2%)
- Cyclone no longer contributes toward wonder prestige gain (only attacking)
- Rebuilding a neutral wonder will no longer grant prestige
- Destroying a neutral wonder without rebuilding it will incur a penalty of 25 prestige to contributors in the realm that destroyed it
- Halls of Knowledge to spawn only in the first 14 days of the round
- Only one of the following wonders pairs spawn in a given round
  - Ancient Library/ Halls of Knowledge
  - Ivory Tower / Wizard Academy
- Ivory Tower and Wizard Academy no longer protect themselves from cyclone
- Imperial Armada now also grants -1% platinum tax from royal guard
- Horn of Plenty increased to +2% production to all resources (from +1%)
- Factory of Legends reduced to -20% construction platinum cost (from -25%)
- Base prestige gain on attacks increased to 22.5 (from 20)
- Maximum prestige decreased to 90% of land size (from 100%) or 250 whichever is higher
- Dark Elf Adept: Wizard Guild requirement increased to 9% (from 8%) per point to a maximum of +4/+4 (from +5/+5)

### Fixed
- War declarations in the town crier will now display the realm names as they were at that exact time

## [1.1.8] - 2020-12-10
### Fixed
- Destroying a neutral wonder while you already control a wonder no longer rewards prestige
- Using the calculator from in-realm advisors no longer sometimes uses your own info instead

## [1.1.7] - 2020-12-01
### Added
- Status advisor replaced with Op Center advisor
  - View all of you or your realm mates' info on a single page
  - Copy ops button for in-realm dominions
  - Load in-realm dominions into the calculator

### Fixed
- Offensive power tech bonuses corrected in calculator
- Urg Smash Technique destruction refund is now based on raw cost

## [1.1.6] - 2020-11-25
### Changed
- The displayed out-of-realm Wonder HP is now approximate (rounded to the nearest 10,000)

### Fixed
- Typo in Goblin gem investment racial bonus
- Additional significant digit in range calculations within dropdowns/op center
- The Maelstrom tech now also increases the max health cap on cyclone damage
- Fool's gold no longer protects lumber/ore unless you have the Trick of the Light tech

## [1.1.5] - 2020-11-15
### Fixed
- Nox racial tech bonus no longer applies to the portion of RP generated by attacks that is based on hourly school production
- A flawed code cleanup will no longer cause defensive casualties to sometimes be reduced to zero
- Corrected order of operations in NPD defense calculation

## [1.1.4] - 2020-11-11
### Changed
- New artwork on the homepage!
- Updated links to the wiki
- Military Culture tech changed to +10% (from 5%)
- Prestige gains on attack are now reduced by 10% per recent invasion, to a minimum of 20 prestige
- Attacks against targets 75%+ your size now generate 150% of your hourly research point production in addition to 1100 base (from flat 1000)
- Research point gains on attack are reduced if _you_ have been invaded many times recently (20% less for each invasion after the 2nd)

### Fixed
- Wrong prerequisite for Ares' Favor tech

## [1.1.3] - 2020-11-05
### Fixed
- Errors during invasion (related to RP/boat refactor)
- Missing perk on Urg Smash Technique tech
- Missing description for Night Watch tech
- Fearless Adventurers tech no longer sets morale to zero
- Update prerequisite text

## [1.1.2] - 2020-10-31
### Added
- Visual Tech Tree for selected dominion added to Technology Page
- Direct registration link on homepage
- Halloween icon/achievement

### Fixed
- Op Center archive no longer redirects to status page
- Missing perk for the Night Watch tech

## [1.1.1] - 2020-10-30
### Fixed
- Bug with exploration draftee cost
- Bug with RP production from schools
- Quickstarts updated with the new research point totals
- Morale generation is now +6 below 80% (from +6 below 70%)

## [1.1.0] - 2020-10-29
### Added
- Brand new Tech system!
  - Number of techs increased from 27 to 66 (with smaller bonuses)
  - Tech cost changed to a flat 10,000
  - Platinum bonus now rewards 750 RPs
  - Schools now generate 26 RP/hour per 1% owned (max 40%)
  - RPs from invasion changed to MAX(1000, daysInRound/0.03), halved for hits under 75%, none for hits under 60%
- Three new wonders:
  - Hanging Gardens: +20% food production
  - Gnomish Mining Machine: +10% ore production
  - Horn of Plenty: +1% platinum/lumber/ore/food/mana/gem production
- Threads with new posts will be displayed in bold on the first page load
- Added additional data to incoming land/building display in advisors/ops

### Changed
- Maximum pack size changed to 4 (from 5)
- Maximum packed players per realm changed to 6 (from 7)
- Cooldown before redeclaring war on same realm increased to 48 hours (from 24)
- Prestige gain is no longer reduced due to recent invasions
- NPD defense above 525 acres reduced slightly
- Wonder power on respawn is now rounded to the nearest 10,000
- Rebuilding neutral wonders now provide 25 prestige for the entire realm
- Destroying a wonder when you already have one only awards 25 prestige
- Neutral wonders will now have an HP cap of daysInRound*25000 (min 175k, max 500k)
- Most Wonders Destroyed title removed
- Max wonders available changed to: Realms * 0.4 (from 0.5)
- Cyclone damage now capped at 2% of a wonders max HP (from 1.5%)
- Base cyclone damage changed to 3.5x max(wizards,Acres) (from 5x)
- Wonder invasion casualties reduced to to 3.5% casualties (from 5%)
- Energy Mirror: mana cost increased to 4.5x (from 4x), reflection chance increased to 30% (from 20%)
- Vision: mana cost decreased to 0.5x (from 1x)
- Goblin: +5 population from barren acres removed, +10 gem production bonus removed, castle improvement bonus changed to +20% for gems only (from +10% for all)
- Kobold: +5 pop on barren acres removed, population growth bonus reduced to +10% (from +20%)
- Human Cavalry: +25p
- Human Knight: +25p
- Icekin: +5% platinum production, AM cost reduction reduced to -100p (from -175p)
- Lizardfolk Chameleon: +25p
- Lizardfolk Lizardman: -50p
- Lycanthrope: maximum population increased to +7.5% (from +5%)
- Nox Nightshade: -40r, +1 DP, DP increased by 1 per 12% swamp max +3 (from 1 per 10% max +4)
- Sylvan Centaur: -35r
- Troll Basher: +1 OP, +150p, loses race-targeting bonuses
- Troll Smasher: -25p, loses race-targeting bonuses
- Wood Elf Druid: +25p
- Wood Elf Longbowman: +30p

### Fixed
- Wonder prestige gains and damage are now rounded to the nearest integer

## [1.0.10] - 2020-10-07
### Added
- Additional messageboard and improved some rankings icons
- Pagination added to council/forum/board threads

## [1.0.9] - 2020-10-03
### Added
- New Message Boards tied to user accounts
- Able to select an avatar based on previous rounds' rankings
- Pagination added to council and forum index

### Changed
- Renamed Global Forum to Round Forum

### Fixed
- Recently invaded calculation required 25 hours to clear instead of 24
- Attacking wonders under certain conditions no longer breaks the town crier
- Wonders now appear in alphabetical order in the dropdown
- Race name no longer interferes with search in dominion dropdowns

## [1.0.8] - 2020-09-24
### Added
- Disclaimer on calculators page

### Changed
- Race name added to op center json data

### Fixed
- Boat protection from docks was being calculated incorrectly
- Small tweaks to automated stat export and moderator tools

## [1.0.7] - 2020-09-22
### Added
- Status advisor for realmies
- Most recent invasions for a dominion are visible in the op center
- Copy op center data in JSON format
- Sidebar menu indicator for unbuilt land
- Sidebar menu indicator for unseen town crier events
- Sidebar menu indicator for unseen wonders
- Button to load your temples into defense calculator

### Changed
- The recently invaded message in clear sights will now show the exact number of invasions

## [1.0.6] - 2020-09-17
### Changed
- Added more boats to quick starts, removed Ares from hour 61 versions

## [1.0.5] - 2020-09-08
### Added
- Offensive actions warning on the last day of the round 
- Show wonder in realm info box

### Changed
- Remove 'beta' from new round names
- The dashboard now shows dominion land/networth

### Fixed
- Several errors when attacking wonders
- Onyx Mausoleum perk was negative
- Reduced db queries on calculators page
- Adjusted Discord widget positioning

## [1.0.4] - 2020-09-07
### Changed
- Mindswell removed
- Tech cost will now increase if 50% of your total conquered acres is greater than highest land achieved (from 35%)
- Increased maximum prestige gain from destroying wonders to 125 (from 100)
- Halls of Knowledge will no longer spawn on Day 6
- Reduced defense for NPDs under 500 acres
- Cyclone damage capped at 2.5%
- Updated README

### Fixed
- Nightly backups are now running correctly
- Adjustments to StyleCI integration

## [1.0.3] - 2020-09-03
### Added
- Active spell counter in sidebar
- Town crier tooltips now include the target's race

### Changed
- Maximum prestige gain from destroying wonders increased to 125 (from 100)
- Minimum defense changed to 3x LAND unmodded (from 5x LAND-150 plus mods)
- Defense required to OOP under 600 acres is now 3x LAND
- Defense required to OOP at or above 600 acres is now 5x LAND (from 5x LAND-150 plus mods)
- Halls of Knowledge will no longer be guaranteed to spawn on Day 6

### Fixed
- The Onyx Mausoleum now has the correct perk
- Cyclone error messages
- The Graveyard can no longer have a monarch, participate in wars, or attack wonders

## [1.0.2] - 2020-08-31
### Added
- Show effect of morale on invasion page

### Fixed
- 5:4 calculation for wonders no longer uses OP mods
- Plunder will no longer remove the target's resources
- Adjusted wording in town crier/incoming resources

## [1.0.1] - 2020-08-30
### Added
- Range tooltips in town crier
- Date dividers in town crier

### Fixed
- Errors in recently invaded calculation
- Errors on Calculators page
- A problem where NPDs were spawning in realm 0
- Problems with several quickstart files

## [1.0.0] - 2020-08-27
### Added
- Wonders of the World: Capture wonders to gain bonuses for your realm
  - The first wave of wonders will spawn on Day 6
  - An additional wonder will spawn every 48 hours after the first wave
  - Deal damage using your military or wizards
  - After a wonder is rebuilt by a realm, its current power is visible to all players; otherwise you will only see its maximum power
- Quick Start: Create your dominion from a template. You can customize the final 12 ticks of protection or skip it entirely
- Non-Player Dominions: Two additional bots will be added to each realm (for a total of 4)
- New Spell: Mindswell - generates research points when attacking a wonder
- New Spell: Cyclone - deals damage to wonders
- New Rankings/Titles: The Demolisher (wonder attack damage), The Aeromancer (wonder spell damage), The Opportunist (wonders destroyed)
- War Bonus status is now displayed on the government and realm pages
- New table under Military Advisor for incoming resources (prestige, research points, platinum, gems and boats)

### Changed
- Recently invaded is now calculated using ticks instead of hours
- Generated land, prestige, and research points will no longer be awarded after the 2nd hit by your dominion on the same target within 8 hours
- Attacks required a minimum of 80% morale (from 70%)
- Research Points gained on attack down to 15 OR daysInRound/2, whichever is HIGHER (from 17)
- Tech cost will now increase if 35% of your total conquered acres is greater than highest land achieved
- Snare damage reduced to 2% (from 2.5%)
- The damage of war spells and operations will slowly decrease after 60 hours of war (to a minimum of 65% damage after 96 hours)
- One-way War: war operations now have a 25% chance to gain 1 prestige
- Mutual War: war operations yield +2 prestige for success, -1 for failure (from +2 only)
- Docks: boat protection is increased by 0.1 each day after Day 25 (from 2.5)
- Forest Havens: now produce 20 lumber per hour
- Wizard Guilds: wizard power bonus no longer affects Dark Elves
- Dark Elf: +10% wizard power
- Dwarf: Ore investment bonus increased to +15% (from +10%)
- Dwarf Miner: -5r
- Gnome: Racial spell changed back to Miner's Sight (from Mechanical Genius)
- Gnome Juggernaut: Offense reduced to 6, +0.5 vs 75%, +1 vs 85% (from 7)
- Goblin Hobgoblin: Plunder now steals an hour of platinum/gem production of the target, max 20p/5g per surviving unit (from 2% of stockpiled resources, max 50p/20g)
- Human Cavalry: -25p
- Human Knight: +25p
- Kobold Grunt: +10p, +5r
- Lizardfolk Chameleon: -25p
- Lizardfolk Lizardman: +100p
- Lycanthrope: maximum population reduced to +5% (from +10%)
- Lycanthrope Werewolf: Offense reduced to 3 (from 4)
- Nomad Valkyrie: -25p
- Nomad Blademaster: +25p
- Orc Bone Breaker: Offense decreased by 1 for every 10% guard tower of the target, max -1 (from max -2), +25p

### Fixed
- Improvement success message now properly displays the contribution to your castle
- Updated table column widths on a number of pages
- Most Land Conquered and Explored rankings are now reduced by land lost
- Rankings will now update each dominion's realm name

## [0.10.0-8] - 2020-08-11
### Added
- Difficulty ratings added to race selection

### Changed
- The Town Crier is no longer be limited to 7 days
- Calculate from Op Center will no longer include outdated barracks spies

## [0.10.0-7] - 2020-07-31
### Added
- Advisors can now be shared with realmies outside of your pack from the government page
- You can now set a 'preferred resource' as the default for investment

## [0.10.0-6] - 2020-07-30
### Added
- Improvements fields can now be pre-populated with max resources

### Fixed
- National bank input will no longer prepopulate with 0
- National bank success message now shows the types/amounts exchanged

## [0.10.0-5] - 2020-07-28
### Added
- Added button to load op center data into Calculators

## [0.10.0-4] - 2020-07-24
### Added
- New Castle Advisor shows improvements and techs (visible to packmates)
- Info Ops will now display the day of the round that they were taken

### Fixed
- Realm counts corrected in Town Crier dropdown and Realm select input box
- Server time ticker will no longer appear behind other elements on mobile
- Any link to a packmate's ops center will redirect to their advisors page

## [0.10.0-3] - 2020-07-10
### Fixed
- Several adjustments to moderator tools
- National bank will no longer throw javascript errors

## [0.10.0-2] - 2020-07-08
### Changed
- Magic snare damage reduced to 2.5% per op (from 3%)

### Fixed
- Round timer hours will display correctly when over 99 hours remaining
- Dashboard will now correctly show days remaining for registration
- Report a Problem window restyled in the classic dark skin

## [0.10.0-1] - 2020-07-04
### Added
- Sidebar now shows tick count until daily bonuses reset
- Dominions that remain inactive and under protection for three days will be moved to realm 0
- Dominions over 600 acres may no longer leave protection with less than the minimum defense
- Added footer link for reporting bugs/abuse
- Additional tools to detect cheating

### Changed
- Default draft rate set to 35%
- Round timer now counts down to OOP (start of day 4)

## [0.10.0] - 2020-06-25
### Added
- Two new Titles: the Indomitable (defending success) and the Defeated (defending failure)!

### Changed
- Maximum pack size increased to 5 (from 4)
- Maximum number of packed players per realm increased to 7 (from 5)
- Players in packs of maximum size must select 5 unique races
- Race changes are limited to 3 players of a specific race amongst all packed players in a realm
- NPDs per realm increased to 2, realm size increased
- You can no longer redeclare war on the same realm for 24 hours after canceling
- Prestige cap for invasion changed to a flat 150 (from 15% of current prestige)
- Spell mana costs: Revelation decreased to 1x (from 1.2x), Vision increased to 1x (from 0.5x), Fireball decreased to 3x (from 3.3x), Lightning Bolt decreased to 3.5x (from 4x)
- Harbor Improvement: bonuses are doubled for boat protection/production
- Forest Havens: now increase spy power by 2% per 1% owned (max +20% at 10%), training cost reduction increased to 4% per 1% owned (max -40% at 10%)
- Wizard Guilds: now increase wizard power by 2% per 1% owned (max +20% at 10%), training cost reduction increased to 4% per 1% owned (max -40% at 10%), spell cost reduction changed to 3% per 1% owned (max -30% at 10%)
- Dark Elf: Removed +10% wizard strength
- Dark Elf Adept: Wizard Guild requirement decreased to 8% (from 10%) per point
- Lycanthrope: Homes moved to forest (from cavern)
- Orc Voodoo Magi: Added reduces combat losses, prestige requirement decreased to 500 (from 600) per point, +30p
- Sylvan: Removed -10% rezone cost, Warsong removed, new spell Verdant Bloom: 35% of conquered acres are automatically rezoned to forest
- Sylvan Centaur: Offense increased to 5.5 (from 5)

## [0.9.0-11] - 2020-06-11
### Added
- Additional mechanisms for detecting cheating

### Fixed
- Rapidly triggering spy/wizard operations should no longer allow you to drop below 25% strength

## [0.9.0-10] - 2020-06-01
### Added
- Announcements section added to the global forum
- Ability to view packmates' advisors (can be disabled in settings)
- Tooltips on Status page and Op Center

## [0.9.0-9] - 2020-05-23
### Fixed
- Additional pageload optimizations
- Networth calculations will now be more reliable
- Daily land bonus will now properly increase tech cost
- Squashed several bugs related to Orc invade screen calculations
- Max population (raw) in statistics advisor now includes barracks

## [0.9.0-8] - 2020-05-15
### Added
- Offense Calculator added to Calculators page
- Town Crier is now paginated (100 per page)

### Fixed
- Improved the networth calculation from the previous update

## [0.9.0-7] - 2020-05-11
### Fixed
- Optimized networth calculation, greatly improving search/realm page performance

## [0.9.0-6] - 2020-05-10
### Fixed
- Range queries optimized on Search/Invade/Espionage/Magic pages
- Locked dominions can no longer view the Op Center

## [0.9.0-5] - 2020-05-06
### Added
- You can now change your dominion and ruler names when restarting

## [0.9.0-4] - 2020-05-05
### Added
- Added User Agreement at round registration
- Added rules enforcement mechanism

### Fixed
- Cleaned up some information display referencing round start time

## [0.9.0-3] - 2020-05-02
### Fixed
- Defense calculator will now treat wizard guilds correctly
- NPDs can no longer have negative incoming troops
- NPDs will no longer send notifications to other players
- Rankings update will now calculate correctly based only on the current round
- Attempting to leave protection during the lockout period no longer results in a 500 error

## [0.9.0-2] - 2020-05-01
### Added
- Added title icons to top ranked dominions in Rankings
- Added titles to Rankings Advisor

### Fixed
- Defense calculator will properly apply temples to final defense
- Restarting your account will now reset techs and notifications
- Daily bonuses will now reset when you finish your protection instead of waiting until OOP

## [0.9.0-1] - 2020-04-30
### Fixed
- Invade button will actually be disabled at round end
- Restarting your account no longer circumvents racial pack restrictions
- Display some missing ranking titles/icons
- Cleaned up various UI issues

## [0.9.0] - 2020-04-30
### Added
- Click-Through Protection!
- You can now perform all of your protection logins at your own pace during the first three days of the round
- You can now change your race when restarting your account during protection
- One non-player dominion will now be added to each realm on the third day of the round
- Added an experimental Defense Calculator!
- Daily rankings have been reworked! Most of the existing valhalla rankings will now be recorded during the round
- Players holding the top spot in certain rankings will now gain a new title and avatar when posting on the Global Forum!
- New Rankings Advisor page will show all of your current standings

### Changed
- Icekin Ice Elemental: offense increased by 1 for every WPA (from 0.85 for every WPA)
- Land loss/generation ratio changed to 90:60 (from 85:65)
- Base defensive casualties changed to 4.05% (from 3.825)
- Base conversion rate from casualties changed to 1.65x (from 1.75x)
- Construction discount from lost buildings no longer stacks with the discount gained from successful attacks
- Minimum defense increased to 5 x [Land - 150] (from 1.5 x Land)
- Adjusted font colors in Town Crier to better show in-realm events
- Pressing 'Enter' on the invasion page will no longer submit the form

### Fixed
- Increased the size of some input fields on mobile
- Fixed a bug where Bashers could kill Spirit/Undead
- Fixed a bug where Clerics didn't always kill Spirit/Undead with fewer casualties tech

## [0.8.1-7] - 2020-04-29
### Fixed
- After offensive actions have been disabled for the round, buttons for initiating these actions (invade, explore, hostile spells, and hostile spy ops) will be disabled

## [0.8.1-6] - 2020-03-29
### Fixed
- Improved pageload time
- Prevent exploits due to race conditions

## [0.8.1-5] - 2020-03-21
### Added
- Added unread count badge to the forum page menu item in the sidebar to indicate new messages since your last forum visit
- Added links to other realms in the war table on each realm page
- Dominion dropdowns will now show the target's race

## [0.8.1-4] - 2020-03-18
### Fixed
- Attempting to recast spells shortly after hour change no longer causes a 500 error
- Removed error message when attempting to send under 50% of target's defense

## [0.8.1-3] - 2020-03-18
### Fixed
- Links to Dominions without any ops no longer redirect to op center
- Battle reports for overwhelmed invasions no longer cause an error
- 33 percent rule no longer adds draftees to invasion force DP
- Fixed a bug where 33 percent rule could be ignored
- Prevent Dwarf Cleric 'kills_immortal' perk logic from affecting non-immortal unit casualties

## [0.8.1-2] - 2020-03-13
### Fixed
- Daily land bonus no longer overwrites research point total
- Self spells no longer increasing spell failure statistic

## [0.8.1-1] - 2020-03-11
### Fixed
- Removed 'Partially Implemented' tag from Towers improvement
- Prevent possible exploits due to race conditions

## [0.8.1] - 2020-03-08
### Added
- Spirit and Nomad are playable once again
- Global Forum for all dominions
- War information on each realm page
- New magic and espionage statistics
- Valhalla pages for each user
- A dominion can now be restarted prior to the first tick
- Late signups will now be awarded additional starting resources after the third day of the round
- Attacking/exploring/blackops will now be disabled 9-18 hours before the end of the round (from 1-16)
- Mass exploration restriction: you can no longer explore for more than 50% of your current land total
- Excessive release restriction: you can no longer release more than 15% of your defense within a 24 hour period

### Changed
- Dominion names must contain 3 consecutive alphanumeric characters for searchability
- Maximum of 5 packed players per realm (4 packs no longer land with 2 packs)
- Info ops spy/wizard strength cost reverted to 2% (from 1%)
- Reduced damage and cost of Disband Spies to 1.5% and 4.3x (from 2% and 5x)
- War cannot declared during the first 5 days of the round (up from 3)
- Wizard strength refresh rate increased by 1% when below 30%
- Mana production bonus added to Towers improvement and increased rate of investment
- Wizard Guilds now reduce losses on failed black op spells by 3% per 1% owned up to a maximum of 30% at 10% owned
- Forest Havens reworked
  - Spy Strength refresh rate increased by 0.1% per 1% owned, up to a maximum of 2% at 20% owned
  - Spy training reduced by 2% per 1% owned, up to a maximum of 40% at 20% owned
  - Fireball protection increased to 10% per 1% owned
  - Platinum theft protection removed
  - Defense bonus removed
- Surreal Perception now applies to info ops, duration increased to 12 (from 8), cost reduced to 3x (from 4x)
- Energy Mirror duration increased to 12 (from 8), cost increased to 4x (from 3x)
- Fool's Gold cooldown reduced to 20 (from 22)
- Research points gained on invasion reduced to 17 per acre (from 20 per acre)
- Tech cost multiplier reduced to 6.4 (from 6.426)
- Land bonus now awards 128 research points
- Attacks that fail by 85% or more no longer cause double casualties
- Prestige gains reduced on first hit, but increased on subsequent hits
- Prestige gains capped at 15% of your current prestige (before multipliers and base gain)
- Nox: research point generation bonus reduced to 10% (from 15%)
- Sylvan: Added -10% rezone cost
- Sylvan: Dryad changed to 1/3 wizard on defense (from 1/2)
- Dark Elf: Adept changed to 1/3 wizard on defense (from 1/2)
- Dwarf: ore investments increased by 5%
- Dwarf: Clerics now kill spirits and the undead
- Undead: Mana production increased to +10% (from 5%)
- Spirit: Food consumption increased to -80% (from -90%)

### Fixed
- Generated land from invasion will now count toward total land conquered
- Total number of realms no longer visible before round start
- Unfilled pack slots are now considered during realm assignment

## [0.8.0-7] - 2020-02-17
### Fixed
- Assassinate wizards will no longer work against undead
- Disband spies will now add the correct number of draftees
- War ops buttons are no longer dimmed when targeting a dominion that recently invaded you
- Percentage calculations in archived survey dominion operations have been corrected

## [0.8.0-6] - 2020-01-19
### Fixed
- Fixed a bug where exploration platinum costs were higher than expected upon joining the Elite Guard
- Fixed a bug where Snare caused a server error upon dealing negative damage

## [0.8.0-5] - 2020-01-19
### Fixed
- Fixed a server error when stealing gems

## [0.8.0-4] - 2020-01-18
### Fixed
- Black ops spell buttons are now grayed out before day 8
- Spy losses tech perk is now multiplicative instead of additive
- Failed spy/wiz operations no longer count as a success in statistics advisor
- Draftees no longer counted as attacking DP when checking 33% rule

## [0.8.0-3] - 2020-01-16
### Fixed
- Fixed a bug that sometimes prevented building discounted land
- Fixed a bug where casualty reduction techs were too powerful

## [0.8.0-2] - 2020-01-14
## [0.8.0-1] - 2020-01-14
### Added
- Added techs to the Scribes

### Fixed
- Fixed an issue where the Town Crier dropdown excluded the last realm
- Fixed a server error on Master of Water Valhalla page
- Fixed an issue with decimals places on invasion page
- Fixed duplicate sentence periods at end of unit descriptions
- Fixed missing race perks on registration and scribes pages
- Fixed starvation casualties not killing off the intended unit types
- Fixed a bug regarding invading with mixed 9 and 12 hour returning units causing prestige and resource points to incorrectly return faster than intended

## [0.8.0]
### Added
- War & Black Ops!
- Monarchs may now declare WAR on other realms.
- War immediately allows the use of war-only black ops.
- After 24 hours, 5% OP is added to attacks between the two realms (10% for mutual war).
- Mutual war also awards prestige for successful black ops between the two realms.
- New Spell: Energy Mirror reflects spells back at the caster.
- Technological Advances!
- Schools and invasion now reward research points.
- Use research points to unlock bonuses from the tech tree (minimum cost based on highest land achieved).
- New Spell: Vision reveals your target's techs.

### Changed
- Gnome: Racial spell changed back to Mechanical Genius (from Miner's Sight)
- Merfolk: Added +5% offense racial
- Sylvan Centaur: -20o, casualty reduction increased to -25% (from -15%)
- Nox: Added +15% research point generation
- Info ops spy/wizard strength cost reduced to 1% (from 2%)
- Additional discounted land added when constructed buildings are lost to invasion
- Defensive casualties reduced by target's relative land size (below 100%)
- Prestige gain increased
- Packs with only two players may now be assigned to a realm with other packs

### Fixed
- Theft success formula adjusted
- Starvation will now correctly kill units proportionally
- Population growth will now stop while starving
- Fix for prestige returning with 9hr units
- Firewalker construction cost bonus with max factories adjusted

## [0.7.1-19]
### Added
- Releasing units with DP will be hindered when:
  - Invaded in the last 24hrs
  - Having troops returning

## [0.7.1-18]
### Added
- Sending out less than 50% of defenders DP will prevent an attack

### Fixed
- Mefolk does not sink boats on overwhelmed attacks
- Use new tooltip style for buildings from Survey Dominion

## [0.7.1-17]
### Fixed
- Fix an issue with the search page Limit values being flipped.
- Update daily bonuses in a single query and prevent a partial update in the event of an error.
 
## [0.7.1-16]
### Fixed
- Added validation for negative values in posts

## [0.7.1-15]
### Fixed
- Default ordering in Op Center should now be on last op

### Changed
- Town Crier
  - Will only show last 3 days
  - Can be filtered by realm, via dropdown
  - Realm numbers now redirect to realm page
- Search
  - Own realm are visible in results
  - Default filtering will be all results now

## [0.7.1-14] - 2019-11-16
### Fixed
- Incoming buildings will now only be counted once when calculating maximum population at HC
- Total production of gems did not display on statistics advisory

## [0.7.1-13] - 2019-11-12
### Added
- Skin selection with a new DC theme.

### Fixed
- Rankings on front page now reflects last round, as long as new round has not started yet. 

## [0.7.1] - 2019-11-06
### Added
- Added new races: Kobold and Orc
- Added monarchy: Each realm's elected monarch has the power to change the realm name, post a message of the day, and delete council posts.
- Added dominion search page
- Added new categories to statistics advisor and valhalla
- Added back spell mana cost of active spells to magic page
- Added spell recharge time to magic page
- Top 10 land rankings from current round will now be visible on start page.

### Changed
- Gnome Juggernaut: OP changed to 7 regardless of range
- Undead: Decreased max population bonus from +15% to +12.5%
- Undead Vampire: Now converts into elite dp at 65%+ (from 60%+) 
- Wood Elf Longbowman: +25p
- Wood Elf Mystic: +50p
- Wood Elf Druid: -50p
- Nomad: Removed
- Spirit: Removed
- Shrines: bonus increased to 5x (from 4x)
- Slightly increased prestige gains
- Reintroduce prestige loss for hits under 60% and multiple BF hits on the same dominon
- Cut spy losses in half for info ops
- Land generation changed to 85:65 (from 75:75)
- Base defensive casualties changed to 3.825% (from 3.375%)
- Conversion multiplier change to 1.75% (from 2%)
- Adjusted explore platinum cost formula
- Sending less than 85% of your target's defense will no longer cause defensive casualties
- Failed invasions when sending over 85% of the target's defense will now properly reduce defensive casualties for subsequent invasions
- Slightly tweaked starvation casualties to now kill off population types based on proportion
- Significantly increased the speed of the hourly tick (hour change)
- Scribes now contains more information. Construction, Espionage and Magic have now been added.
- Other realms are now hidden before the round starts
- Updated racial descriptions for a lot of races.

### Fixed
- Barracks Spy should now be more clear that draftees are inaccurate
- Fixed a bug when knocking a target outside of your applied guard range would reset your guard application
- Chameleons and Master Thieves now die on failed spy operations.
- Fixed a bug where Survey Dominion calculated percentages based on a dominion's current land total
- Fixed a bug where races with increased max population from barren land wasn't applied properly
- Fixed a bug where Erosion reduced land gains
- Fixed spell duration in success message
- Fixed a bug where you could leave a guard immediately after joining
- Reduced Combat Losses (RCL) unit perk now correctly triggers on offensive casualties based on RCL units which were sent out, instead of RCL units at home
- Minor text fixes

## [0.7.0-10] - 2019-08-20
### Fixed
- Surreal Perception now states it lasts for 8 hours
- Fixed Clairvoyances sometimes disappearing from the Op Center
- Fixed notifications not updating properly on settings page
- Fixed not being able to the Royal Guard at the intended day in the round
- Fixed being able to leave the Royal Guard while in the Elite Guard

## [0.7.0-9] - 2019-08-18
### Fixed
- Fixed Parasitic Hunger not properly giving the +50% conversions bonus

## [0.7.0-8] - 2019-08-18
### Fixed
- Fixed theft buttons being clickable before theft is enabled in the round

## [0.7.0-7] - 2019-08-17
### Fixed
- Minor bug fixes

## [0.7.0-6] - 2019-08-17
### Changed
- Slightly increased prestige gains for attackers. Prestige loss for defenders unchanged
- Offensive actions and exploration will now be randomly disabled at end of round (1 to 16 hours before round end)

## [0.7.0-5] - 2019-08-14
### Changed
- Temporarily changed so that new dominions always land in the most emptiest realm

## [0.7.0-4] - 2019-08-14
### Fixed
- Fixed Government page styling on mobile
- Fixed Op Center page being slow sometimes
- Fixed 33% rule sometimes not being applied correctly
- Fixed incorrect dominion placement in realms if a pack was already present in such realm
- Minor text fixes

## [0.7.0-3] - 2019-08-11
### Changed
- A bunch of empty realms now get created for each new round, to prevent people landing together when not packing
- Land lost from being invaded is now again proportional to land types, including constructed/constructed buildings
- Increased spy/wiz success rate
- Race pages on the Scribes now show the race's home land type

### Fixed
- Units in training now count towards max military population

## [0.7.0-2] - 2019-08-09
### Added
- Added link to scribes in the top navigation bar

### Changed
- Dwarf Cleric: -40p
- Gnome: Now has Miner's Sight as racial spell. Mechanical Genius has been removed
- Gnome Juggernaut: Increased max staggered OP to +2.5 at 90% land
- Icekin: Removed +5% platinum production, ArchMage -25p
- Lycanthrope Werewolf: -25p, +1 OP
- Nox Nightshade: +50p
- Nox Lich: -50p
- Spirit: Increased max population bonus from +12.5% to +15%
- Spirit Phantom: No longer needs boats 
- Spirit Banshee: No longer needs boats
- Spirit Spectre: Now converts into elite dp at 60%+ (from 65%+)
- Undead Skeleton: No longer needs boats
- Undead Ghoul: No longer needs boats
- Undead Vampire: Now converts into elite dp at 60%+ (from 65%+) 

## [0.7.0-1] - 2019-08-09
### Fixed
- Fixed some deploy-related stuff

## [0.7.0] - 2019-08-09
### Added
- Added new races: Lycanthrope, Merfolk, Nox*, Spirit, Undead, Wood Elf
- *Note: The Nox was a premiun race back in Dominion Classic. In OpenDominion it has been renamed to just 'Nox', and made available for everyone, without restrictions.
- Added missing Valhalla races, including the ones mentioned above
- Construction advisor now shows total amount of barren land
- Added info op archive, allowing you to view previously taken info ops
- Docks are now fully implemented, preventing a certain amount of boats from being sunk
- Notifications are now visible from the status screen in a 'Recent News' section
- Added theft espionage operations, allowing you to steal resources from your target
- Added magic spells: Fool's Gold and Surreal Perception
- Added Government page with Royal Guard and Elite Guard
- Added basic Scribes page with races and units

### Changed
- Condensed the items in the left navigation menu (except on mobile)
- Removed prestige penalty on invading targets below 66% your size
- Added prestige grab on invading targets above 120% your size
- Extended the Statistics Advisor with more useful information
- No more than two identical races can be in the same pack 
- Changed national bank icon
- Realms can now have mixed racial alignments
- Significantly reduced starvation casualties
- Slightly lowered overall exploration costs
- Significantly increased exploration cost at or above 4000 acres
- Reduced land lost and defensive casualties upon being on the receiving end on a successful invasion. Total land gains for attackers unchanged
- Reworked spy/wizard operations success chance to be more linear
- Significantly increased spy casualties for failed info gathering operations
- Spirit/Undead and Human/Nomad now count as identical races for pack race-uniqueness purposes

### Fixed
- Fixed newlines sometimes not being properly applied in council posts
- The server time/next tick tickers should now be slightly more accurate
- Fixed Gnome's racial spell Mechanical Genius, now properly granting the intended amount of rezoning cost reduction
- Realm spinner on realm page no longer allows for invalid input (eg negative numbers) which in turn displayed a server error page
- Barren land now correctly houses 10 population for Gnome and Halfling
- Fixed bug where spy strength was lowered when trying to perform op when you had no spies
- Land lost from being invaded now properly takes barren land away first
- Minor text fixes
- Gnomes now correctly do not gain any ore reduction, from any sources, on their units

## [0.6.2-9] - 2019-07-14
### Changed
- Slightly improved targeted espionage/magic spell success rate

### Fixed
- Fixed spell mana cost not being reduced by wizard guilds
- Fixed a race condition during tick, where more resources could be deducted than intended
- Fixed displayed WPA on statistics advisor page
- Fixed a bug where you could still conquer land upon bouncing
- Fixed unable to scroll op center page tables on mobile
- Fixed typo on Town Crier page

## [0.6.2-8] - 2019-06-23
### Changed
- Server and tick timers on pages are now based on server time, not browser time
- Changed texts and colors on Town Crier page

### Fixed
- Fixed race condition bug around hour change, sometimes resulting in loss of resources when performing actions on the hour change
- Changed invasions to calculate casualties before everything else, fixes bugs related to immortal range and Hobgoblin plunder
- Fixed missing Wizard Guild spell mana cost reduction
- Fixed missing text on Town Crier page where a realmie fended off an attack
- Removed 'target was recently invaded'-text on invasion report on failed invasions
- Fixed Clear Sight not including returning boats
- Fixed networth calculation to include dynamic unit power values (e.g. increased op/dp from land ratio based perks)

## [0.6.2-7] - 2019-06-16
### Fixed
- Fix Clairvoyance reports on Op Center page
- Fix 5:4 check on the invasion page

## [0.6.2-6] - 2019-06-16
### Fixed
- Fixed Ares call not working properly sometimes

## [0.6.2-5] - 2019-06-16
### Added
- Added unread count badge to the council page menu item in the sidebar to indicate new messages since your last council visit

### Fixed
- Fixed unit OP/DP on military training page to show with including certain bonuses
- Fixed error where military DP was counted twice
- Fixed code refactor with SPA/WPA perks
- Fixed error in Op Center with Clairvoyance

## [0.6.2-4] - 2019-06-12
### Fixed
- Fixed Firewalker's Phoenix immortal except vs Icekin perk
- Fixed ArchMage cost reduction for Icekin

## [0.6.2-3] - 2019-06-12
### Added
- Added ability to delete your pack once during registration

### Fixed
- Fixed server error when trying to join a pack with invalid credentials
- Fixed missing unit perk help texts
- Fixed Regeneration racial spell for trolls

## [0.6.2-2] - 2019-06-10
### Fixed
- Fixed error on construction page
- Fixed realms not filling up properly with new dominions

## [0.6.2-1] - 2019-06-10
### Added
- Added Clairvoyance spell
- Added new races: Dark Elf, Gnome, Halfling, Icekin, Sylvan, and Troll

### Changed
- Changed timestamp displays from relative server time (eg '13 hours ago') to absolute server time (eg '2019-06-19 13:33:37'). A setting will be added in the future for this, including round time (eg 'Day 12 Hour 23')

## [0.6.2] - 2019-06-05
### Changed
- Changed realm size to 6 (from 12)
- Changed max pack size to 3 (from 6)
- Only one pack can now exist per realm
- Changed invasion range from 60-166% to 75-166% (until guards are implemented)
- Invasion reports can now only be viewed by people in the same realm as the invader and defender
- Data in the Op Center is now shown to the whole realm, regardless of range
- Failing a spell/spy info operation now keeps the target selected in the dropdown
- Changed relative land size percentage colors to make more sense
- Discounted acres after invasion are now only gained upon hitting 75%+ targets
- Minor text changes

### Fixed
- Fixed unit OP/DP rounding display issue in case of non-integer numbers (Firewalker Phoenix)
- Fixed an issue where failing an info op tried to kill off more spies than you had
- Fixed text when last rankings are updated

## [0.6.1-5] - 2019-05-14
### Changed
- "Remember Me" on login page is now checked by default
- Spy losses from failed ops now fluctuate slightly based on relative land size

### Fixed
- Fix a bug with checking whether certain spells are active, fixes the notorious 'Ares Call/DP bug'
- Town Crier page now shows invasions from/to your own dominion
- Amount of boats on status page and Clear Sight now also include returning boats from invasion

## [0.6.1-4] - 2019-04-16
### Changed
- Reduced failed espionage operation spy casualties from 1% to 0.1%

### Fixed
- Fixed dominion sorting in realm page on land sizes larger than 1k
- Units returning from battle are now included in population calculations
- Units returning from battle are now included in networth calculations
- Units returning from battle are now included on the military page under the Trained column

## [0.6.1-3] - 2019-04-14
### Fixed
- Fix packie name on realm page

## [0.6.1-2] - 2019-04-14
### Added
- Added username to realm page for dominions you pack with

### Changed
- Rankings now update every 6 hours (down from 24 hours)
- Remove ruler name from realm page

### Fixed
- Fixed certain realms not getting filled properly
- Several last-minute invasion-related fixes

## [0.6.1-1] - 2019-04-11
### Added
- Added barren land column to explore page

### Changed
- The 'current hour' counter in at the bottom now displays 1-24, instead of 0-23. This should also help out with BR's OOP sim to match the hours
- Dominions on the realm page are now also sorted by networth if land sizes are the same
- Removed invasion morale drop for defenders
- Changed column label 'Player' to 'Ruler Name' on your own realm page
- Minor text changes

### Fixed
- Fixed a bug where packies can close the pack they're in. Now only the pack creator can close it

## [0.6.1] - 2019-04-09
### Added
- Added the following races to Valhalla: Dwarves, Goblins, Firewalkers, and Lizardmen
- Added largest/strongest packs to Valhalla

### Changed
- Moved the 'Join the Discord'-button from status page to daily bonuses page

### Fixed
- Removed "round not yet started"-alert from homepage
- Fixed a bug where creating a pack is placed in a new realm, instead of an already existing and eligible realm
- Minor text fixes

## [0.6.0-2] - 2019-04-09
### Changed
- Updated info box on the magic page
- Added indicator for racial spells on magic page

### Fixed
- Fixed error when registering to a round with duplicate dominion name
- Fixed several tables with data not displaying properly on mobile
- Fixed rankings change column not visible on mobile

## [0.6.0-1] - 2019-04-09
### Fixed
- Fixed an error when registering to a round and creating a new pack

## [0.6.0] - 2019-04-08
### Added
- Added invasions!
- Added Town Crier page
- Clear Sight now mentions if the target was invaded recently, plus roughly how severely 
- Military units now have a role icon next to them
- Temples are now fully implemented, also reducing DP bonuses of targets you're invading
- Added current round information to the home page

### Changed
- Unit and building tooltips have been moved from the question mark icon, to on the name itself

### Fixed
- Fixed not getting a notification when preventing a hostile spell or spy operation

## [0.5.2-1] - 2019-01-27
### Fixed
- Fixed racial spells for Firewalker and Lizardfolk

## [0.5.2] - 2019-01-27
### Added
- Added new races: Firewalker and Lizardfolk.

## [0.5.1-4] to [0.5.1-8] - 2018-10-04
### Fixed
- Fix user IP resolving when behind Cloudflare DNS with trusted proxies.
- Dominion numbering on the realm page now correctly starts at 1, instead of 0.

### Other
- Maintenance work.

## [0.5.0-9] to [0.5.1-3] - 2018-10-02
### Fixed
- Trying to fix deploy errors.

### Other
- Maintenance work.

## [0.5.0-8] - 2018-10-01
### Changed
- Info gathering ops on Op Center page now show exact time upon hover. ([#337](https://github.com/WaveHack/OpenDominion/issues/337))
- Significantly reduced spy losses on failed ops.

### Fixed
- Fixed networth sometimes showing incorrect values on realm page. ([#310](https://github.com/WaveHack/OpenDominion/issues/310))
- Fixed construction cost calculation. As a result, construction costs are significantly higher than before. Time to start building factories. ([#347](https://github.com/WaveHack/OpenDominion/issues/347))
- Barracks Spy now shows number of draftees. ([#331](https://github.com/WaveHack/OpenDominion/issues/331))
- Fixed an division by zero error if you have 0 peasants. ([#349](https://github.com/WaveHack/OpenDominion/issues/349))
- Various other issues.

### Other
- Documentation update.
- Refactoring.
- Queue refactor!
- More refactoring.
- Seriously, a lot of refactoring.

## [0.5.0-7] - 2018-08-26
### Other
- Maintenance work.

## [0.5.0-6] - 2018-08-26
### Changed
- Switched Information and Under Protection sections around on status page.([#313](https://github.com/WaveHack/OpenDominion/issues/313))

### Other
- Maintenance work.
- Documentation update.

## [0.5.0-5] - 2018-08-11
### Fixed
- Fixed cost rounding issues on wizard cost multiplier when wizard guilds were built.
- Fixed a bug regarding population growth. ([#176](https://github.com/WaveHack/OpenDominion/issues/176))

## [0.5.0-4] - 2018-08-07
### Fixed
- Council pages now show ruler name instead of user name.

## [0.5.0-3] - 2018-08-05
### Fixed
- Fixed creating a pack sometimes giving an error. ([#321](https://github.com/WaveHack/OpenDominion/issues/321))

## [0.5.0-2] - 2018-08-04
### Fixed
- Realm page now shows ruler name instead of user name. ([#309](https://github.com/WaveHack/OpenDominion/issues/309))
- Limit amount of rows of show on realm page in case realm size is less than 12. ([#308](https://github.com/WaveHack/OpenDominion/issues/308))

### Other
- Refactoring.

## [0.5.0-1] - 2018-08-04
### Fixed
- Fix deploy error.

## [0.5.0] - 2018-08-04
### Added
- Added new races: Dwarf and Goblin.
- Added ruler name for round registration. ([#254](https://github.com/WaveHack/OpenDominion/issues/254))
- Added packs. ([#280](https://github.com/WaveHack/OpenDominion/issues/280))
- Added racial spells. ([#157](https://github.com/WaveHack/OpenDominion/issues/157))
- Added Op Center. ([#24](https://github.com/WaveHack/OpenDominion/issues/24))
- Added Espionage with info gathering operations: Barracks Spy, Castle Spy, Survey Dominion, and Land Spy. ([#21](https://github.com/WaveHack/OpenDominion/issues/21))
- Added Clear Sight spell. ([#220](https://github.com/WaveHack/OpenDominion/issues/220))
- Added Revelation spell. ([#221](https://github.com/WaveHack/OpenDominion/issues/221))
- Added unit OP/DP stats on military page ([#234](https://github.com/WaveHack/OpenDominion/issues/234))
- Added NYI/PI indicator and help text icon on Construction Advisor page
- Added Wizard Guild building, reducing wizard/AM plat cost and increasing wizard strength regen per hour. ([#305](https://github.com/WaveHack/OpenDominion/issues/305))
- Added failed spy op losses reduction on Forest Havens. ([#306](https://github.com/WaveHack/OpenDominion/issues/306))

### Changed
- Updated round registration page with better help texts and racial descriptions.
- Employment percentage on status screen now shows 2 decimals.
- Updated Re-zone Land icon in the sidebar.
- Net OP/DP now scales with morale, down to -10% at 0% morale.

## [0.4.2] - 2018-06-03
### Fixed
- Fixed dashboard page sometimes showing incorrect duration for round start/end dates.
- Fixed internal server error on realm page using invalid realm number. ([#270](https://github.com/WaveHack/OpenDominion/issues/270))

## [0.4.1] - 2018-05-23
### Changed
- Updated `version:update` command to support Git tags.

## 0.4.0 - 2018-05-22
### Added
- This CHANGELOG file.

[Unreleased]: https://github.com/OpenDominion/OpenDominion/compare/1.2.5...HEAD
[1.2.5]: https://github.com/OpenDominion/OpenDominion/compare/1.2.4...1.2.5
[1.2.4]: https://github.com/OpenDominion/OpenDominion/compare/1.2.3...1.2.4
[1.2.3]: https://github.com/OpenDominion/OpenDominion/compare/1.2.2...1.2.3
[1.2.2]: https://github.com/OpenDominion/OpenDominion/compare/1.2.1...1.2.2
[1.2.1]: https://github.com/OpenDominion/OpenDominion/compare/1.2.0...1.2.1
[1.2.0]: https://github.com/OpenDominion/OpenDominion/compare/1.1.8...1.2.0
[1.1.8]: https://github.com/OpenDominion/OpenDominion/compare/1.1.7...1.1.8
[1.1.7]: https://github.com/OpenDominion/OpenDominion/compare/1.1.6...1.1.7
[1.1.6]: https://github.com/OpenDominion/OpenDominion/compare/1.1.5...1.1.6
[1.1.5]: https://github.com/OpenDominion/OpenDominion/compare/1.1.4...1.1.5
[1.1.4]: https://github.com/OpenDominion/OpenDominion/compare/1.1.3...1.1.4
[1.1.3]: https://github.com/OpenDominion/OpenDominion/compare/1.1.2...1.1.3
[1.1.2]: https://github.com/OpenDominion/OpenDominion/compare/1.1.1...1.1.2
[1.1.1]: https://github.com/OpenDominion/OpenDominion/compare/1.1.0...1.1.1
[1.1.0]: https://github.com/OpenDominion/OpenDominion/compare/1.0.10...1.1.0
[1.0.10]: https://github.com/OpenDominion/OpenDominion/compare/1.0.9...1.0.10
[1.0.9]: https://github.com/OpenDominion/OpenDominion/compare/1.0.8...1.0.9
[1.0.8]: https://github.com/OpenDominion/OpenDominion/compare/1.0.7...1.0.8
[1.0.7]: https://github.com/OpenDominion/OpenDominion/compare/1.0.6...1.0.7
[1.0.6]: https://github.com/OpenDominion/OpenDominion/compare/1.0.5...1.0.6
[1.0.5]: https://github.com/OpenDominion/OpenDominion/compare/1.0.4...1.0.5
[1.0.4]: https://github.com/OpenDominion/OpenDominion/compare/1.0.3...1.0.4
[1.0.3]: https://github.com/OpenDominion/OpenDominion/compare/1.0.2...1.0.3
[1.0.2]: https://github.com/OpenDominion/OpenDominion/compare/1.0.1...1.0.2
[1.0.1]: https://github.com/OpenDominion/OpenDominion/compare/1.0.0...1.0.1
[1.0.0]: https://github.com/OpenDominion/OpenDominion/compare/0.10.0-8...1.0.0
