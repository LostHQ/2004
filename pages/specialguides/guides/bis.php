<?php
function getSpecialGuide($currSpecialGuide) { return <<<HTML
<h2>$currSpecialGuide</h2>
<b>Quick Links</b>
<br>
<a href="#defence-crush">Crush Defence</a> | <a href="#defence-stab">Stab Defence</a> | <a href="#defence-slash">Slash Defence</a><br>
<a href="#defence-ranged">Ranged Defence</a> | <a href="#defence-magic">Magic Defence</a><br>
<a href="#offence-crush">Crush Offence</a> | <a href="#offence-stabslash">Stab/Slash Offence</a><br>
<a href="#offence-ranged">Ranged Offence</a> | <a href="#offence-magic">Magic Offence</a><br>
<a href="#prayer">Prayer</a><br>
<hr>
<h3>Equipment Builder</h3>
<p>Use this interactive equipment interface to experiment with different gear combinations. Click on any equipment slot to search for and equip different items!</p>
<table>
    <tr>
        <td>
            <div id="equipment-interface-main"></div>
        </td>
        <td>
            <div id="equipment-interface-main-stats"></div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;">
            <button onclick="clearAllEquipment()" style="margin: 5px; padding: 8px 12px; background: #222222; color: white; border: none; border-radius: 4px; cursor: pointer;">
                Clear All
            </button>
        </td>
    </tr>
</table>
<script>
function clearAllEquipment() {
    loadEquipInterfaceWithStats('equipment-interface-main', 'equipment-interface-main-stats', true,
        null, null, null, null, null, null, null, null, null, null, null
    );
}
clearAllEquipment();
</script>
<b>Protip:</b> Rune plateskirts offer the same stats as platelegs but are 1kg lighter. If you're managing weight (e.g., for running or agility), consider using a plateskirt instead.
<hr>
<h3 id="defence-crush">Crush Defence</h3>
<table>
    <td>
        <div id="equipment-interface-crushdefence"></div>
    </td>
    <td>
        <div id="equipment-interface-crushdefence-stats"></div>
    </td>
</table>
<script>loadEquipInterfaceWithStats('equipment-interface-crushdefence', 'equipment-interface-crushdefence-stats', false,
    'dragon_med_helm',
    'cape_of_legends',
    'gnome_amulet',
    'dragon_longsword',
    'dragon_chainbody',
    'dragon_sq_shield',
    'rune_platelegs',
    'steel_gauntlets',
    'boots_ranger',
    null,
    null
);</script>
<table class="table">
    <tr>
        <th>Slot</th>
        <th>Item</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>Head</td>
        <td><canvas itemname="dragon_med_helm" show-label="inline"></canvas></td>
        <td>+32 Crush Defence</td>
    </tr>
    <tr>
        <td>Cape</td>
        <td><canvas itemname="cape_of_legends" show-label="inline"></canvas></td>
        <td>+7 Crush Defence</td>
    </tr>
    <tr>
        <td>Neck</td>
        <td><canvas itemname="gnome_amulet" show-label="inline"></canvas></td>
        <td>+13 Crush Defence</td>
    </tr>
    <tr>
        <td>Weapon</td>
        <td><canvas itemname="dragon_longsword" show-label="inline"></canvas></td>
        <td>+2 Crush Defence</td>
    </tr>
    <tr>
        <td>Chest</td>
        <td><canvas itemname="dragon_chainbody" show-label="inline"></canvas></td>
        <td>+98 Crush Defence</td>
    </tr>
    <tr>
        <td>Shield</td>
        <td><canvas itemname="dragon_sq_shield" show-label="inline"></canvas></td>
        <td>+48 Crush Defence</td>
    </tr>
    <tr>
        <td>Legs</td>
        <td><canvas itemname="rune_platelegs" show-label="inline"></canvas></td>
        <td>+47 Crush Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Gloves</td>
        <td><canvas itemname="steel_gauntlets"></canvas><canvas itemname="gauntlets_of_chaos"></canvas><canvas itemname="gauntlets_of_cooking"></canvas><canvas itemname="gauntlets_of_goldsmithing"></canvas><br>Any Family Crest Gauntlets</td>
        <td rowspan="2">+7 Crush Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="klanks_gauntlets" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td>Boots</td>
        <td><canvas itemname="boots_ranger" show-label="inline"></canvas></td>
        <td>+4 Crush Defence</td>
    </tr>
</table>
<hr>
<h3 id="defence-stab">Stab Defence</h3>
<table>
    <td>
        <div id="equipment-interface-stabdefence"></div>
    </td>
    <td>
        <div id="equipment-interface-stabdefence-stats"></div>
    </td>
</table>
<script>loadEquipInterfaceWithStats('equipment-interface-stabdefence', 'equipment-interface-stabdefence-stats', false,
    'dragon_med_helm',
    'cape_of_legends',
    'gnome_amulet',
    'dragon_mace',
    'rune_platebody',
    'dragon_sq_shield',
    'rune_platelegs',
    'steel_gauntlets',
    'boots_ranger',
    null,
    null
);</script>
<table class="table">
    <tr>
        <th>Slot</th>
        <th>Item</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>Head</td>
        <td><canvas itemname="dragon_med_helm" show-label="inline"></canvas></td>
        <td>+33 Stab Defence</td>
    </tr>
    <tr>
        <td>Cape</td>
        <td><canvas itemname="cape_of_legends" show-label="inline"></canvas></td>
        <td>+7 Stab Defence</td>
    </tr>
    <tr>
        <td>Neck</td>
        <td><canvas itemname="gnome_amulet" show-label="inline"></canvas></td>
        <td>+13 Stab Defence</td>
    </tr>
    <tr>
        <td>Weapon</td>
        <td><canvas itemname="dragon_mace" show-label="inline"></canvas></td>
        <td>+5 Prayer bonus</td>
    </tr>
    <tr>
        <td>Chest</td>
        <td><canvas itemname="rune_platebody" show-label="inline"></canvas></td>
        <td>+82 Stab Defence</td>
    </tr>
    <tr>
        <td>Shield</td>
        <td><canvas itemname="dragon_sq_shield" show-label="inline"></canvas></td>
        <td>+50 Stab Defence</td>
    </tr>
    <tr>
        <td>Legs</td>
        <td><canvas itemname="rune_platelegs" show-label="inline"></canvas></td>
        <td>+51 Stab Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Gloves</td>
        <td><canvas itemname="steel_gauntlets"></canvas><canvas itemname="gauntlets_of_chaos"></canvas><canvas itemname="gauntlets_of_cooking"></canvas><canvas itemname="gauntlets_of_goldsmithing"></canvas><br>Any Family Crest Gauntlets</td>
        <td rowspan="2">+8 Stab Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="klanks_gauntlets" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td>Boots</td>
        <td><canvas itemname="boots_ranger" show-label="inline"></canvas></td>
        <td>+2 Stab Defence</td>
    </tr>
</table>
<hr>
<h3 id="defence-slash">Slash Defence</h3>
<table>
    <td>
        <div id="equipment-interface-slashdefence"></div>
    </td>
    <td>
        <div id="equipment-interface-slashdefence-stats"></div>
    </td>
</table>
<script>loadEquipInterfaceWithStats('equipment-interface-slashdefence', 'equipment-interface-slashdefence-stats', false,
    'dragon_med_helm',
    'cape_of_legends',
    'gnome_amulet',
    'dragon_longsword',
    'dragon_chainbody',
    'dragon_sq_shield',
    'rune_platelegs',
    'steel_gauntlets',
    'boots_ranger',
    null,
    null
);</script>
<table class="table">
    <tr>
        <th>Slot</th>
        <th>Item</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>Head</td>
        <td><canvas itemname="dragon_med_helm" show-label="inline"></canvas></td>
        <td>+35 Slash Defence</td>
    </tr>
    <tr>
        <td>Cape</td>
        <td><canvas itemname="cape_of_legends" show-label="inline"></canvas></td>
        <td>+7 Slash Defence</td>
    </tr>
    <tr>
        <td>Neck</td>
        <td><canvas itemname="gnome_amulet" show-label="inline"></canvas></td>
        <td>+13 Slash Defence</td>
    </tr>
    <tr>
        <td>Weapon</td>
        <td><canvas itemname="dragon_longsword" show-label="inline"></canvas></td>
        <td>+3 Slash Defence</td>
    </tr>
    <tr>
        <td>Chest</td>
        <td><canvas itemname="dragon_chainbody" show-label="inline"></canvas></td>
        <td>+93 Slash Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Shield</td>
        <td><canvas itemname="dragon_sq_shield" show-label="inline"></canvas></td>
        <td>+52 Slash Defence</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="antidragonbreathshield" show-label="inline"></canvas>*</div></td>
        <td>Anti-dragonbreath</td>
    </tr>
    <tr>
        <td>Legs</td>
        <td><canvas itemname="rune_platelegs" show-label="inline"></canvas></td>
        <td>+49 Slash Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Gloves</td>
        <td><canvas itemname="steel_gauntlets"></canvas><canvas itemname="gauntlets_of_chaos"></canvas><canvas itemname="gauntlets_of_cooking"></canvas><canvas itemname="gauntlets_of_goldsmithing"></canvas><br>Any Family Crest Gauntlets</td>
        <td rowspan="2">+9 Slash Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="klanks_gauntlets" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td>Boots</td>
        <td><canvas itemname="boots_ranger" show-label="inline"></canvas></td>
        <td>+3 Slash Defence</td>
    </tr>
</table>
*Dragons deal slash damage in melee, making this slash-defence build ideal when combined with a Dragonfire shield.
<hr>
<h3 id="defence-ranged">Ranged Defence</h3>
<table>
    <td>
        <div id="equipment-interface-rangedefence"></div>
    </td>
    <td>
        <div id="equipment-interface-rangedefence-stats"></div>
    </td>
</table>
<script>loadEquipInterfaceWithStats('equipment-interface-rangedefence', 'equipment-interface-rangedefence-stats', false,
    'dragon_med_helm',
    'cape_of_legends',
    'amulet_of_defence',
    'dragon_mace',
    'dragon_chainbody',
    'dragon_sq_shield',
    'rune_platelegs',
    'ice_gloves',
    'boots_ranger',
    null,
    null
);</script>
<table class="table">
    <tr>
        <th>Slot</th>
        <th>Item</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>Head</td>
        <td><canvas itemname="dragon_med_helm" show-label="inline"></canvas></td>
        <td>+34 Ranged Defence</td>
    </tr>
    <tr>
        <td>Cape</td>
        <td><canvas itemname="cape_of_legends" show-label="inline"></canvas></td>
        <td>+7 Ranged Defence</td>
    </tr>
    <tr>
        <td>Neck</td>
        <td><canvas itemname="amulet_of_defence" show-label="inline"></canvas></td>
        <td>+7 Ranged Defence</td>
    </tr>
    <tr>
        <td>Weapon</td>
        <td><canvas itemname="dragon_mace" show-label="inline"></canvas></td>
        <td>+5 Prayer bonus</td>
    </tr>
    <tr>
        <td>Chest</td>
        <td><canvas itemname="dragon_chainbody" show-label="inline"></canvas></td>
        <td>+82 Ranged Defence</td>
    </tr>
    <tr>
        <td>Shield</td>
        <td><canvas itemname="dragon_sq_shield" show-label="inline"></canvas></td>
        <td>+50 Ranged Defence</td>
    </tr>
    <tr>
        <td>Legs</td>
        <td><canvas itemname="rune_platelegs" show-label="inline"></canvas></td>
        <td>+49 Ranged Defence</td>
    </tr>
    <tr>
        <td>Gloves</td>
        <td><canvas itemname="ice_gloves" show-label="inline"></canvas></td>
        <td>+2 Ranged Defence</td>
    </tr>
    <tr>
        <td>Boots</td>
        <td><div class="centered-content"><canvas itemname="leather_boots"></canvas>&nbsp;&nbsp;Any boots</td></div>
        <td>All give +0 Ranged Defence</td>
    </tr>
</table>
<hr>
<h3 id="defence-magic">Magic Defence</h3>
<table>
    <td>
        <div id="equipment-interface-magicdefence"></div>
    </td>
    <td>
        <div id="equipment-interface-magicdefence-stats"></div>
    </td>
</table>
<script>loadEquipInterfaceWithStats('equipment-interface-magicdefence', 'equipment-interface-magicdefence-stats', false,
    'robinhoodhat',
    'zamorak_cape',
    'amulet_of_defence',
    'crossbow',
    'black_dragonhide_body',
    'elemental_shield',
    'black_dragonhide_chaps',
    'black_dragon_vambraces',
    'boots_wizard',
    null,
    'pearl_bolt'
);</script>
<table class="table">
    <tr>
        <th>Slot</th>
        <th>Item</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>Head</td>
        <td><canvas itemname="robinhoodhat" show-label="inline"></canvas></td>
        <td>+4 Magic Defence</td>
    </tr>
    <tr>
        <td>Cape</td>
        <td><canvas itemname="zamorak_cape"></canvas><canvas itemname="guthix_cape"></canvas><canvas itemname="saradomin_cape"></canvas><br>God cape</td>
        <td>+10 Magic Defence</td>
    </tr>
    <tr>
        <td>Neck</td>
        <td><canvas itemname="amulet_of_defence" show-label="inline"></canvas></td>
        <td>+7 Magic Defence</td>
    </tr>
    <tr>
        <td rowspan="3">Weapon</td>
        <td><canvas itemname="crossbow" show-label="inline"></canvas></td>
        <td>Excellent with Pearl Bolts</td>
    </tr>
    <tr>
        <td><canvas itemname="rune_dart_p" show-label="inline"></canvas></td>
        <td>Fast Tick + Poison damage</td>
    </tr>
    <tr>
    <td><canvas itemname="mystic_air_staff"></canvas><canvas itemname="mystic_water_staff"></canvas><canvas itemname="mystic_earth_staff"></canvas><canvas itemname="mystic_fire_staff"></canvas><br>Any Elemental Staff*</td>
        <td>+10 Magic Defence</td>
    </tr>
    <tr>
        <td>Chest</td>
        <td><canvas itemname="black_dragonhide_body" show-label="inline"></canvas></td>
        <td>+45 Magic Defence</td>
    </tr>
    <tr>
        <td>Shield</td>
        <td><canvas itemname="elemental_shield" show-label="inline"></canvas></td>
        <td>+6 Magic Defence</td>
    </tr>
    <tr>
        <td>Legs</td>
        <td><canvas itemname="black_dragonhide_chaps" show-label="inline"></canvas></td>
        <td>+23 Magic Defence</td>
    </tr>
    <tr>
        <td>Gloves</td>
        <td><canvas itemname="black_dragon_vambraces" show-label="inline"></canvas></td>
        <td>+8 Magic Defence</td>
    </tr>
    <tr>
        <td>Boots</td>
        <td><canvas itemname="boots_wizard" show-label="inline"></canvas></td>
        <td>+4 Magic Defence</td>
    </tr>
    <tr>
        <td>Ammo</td>
        <td><canvas itemname="pearl_bolt" show-label="inline"></canvas></td>
        <td>+48 Ranged Strength Bonus</td>
    </tr>
</table>
*If a player wants to maximize Magic defence for whatever reason, all staffs provide a +10 Magic defence bonus. Keep in mind, their Magic attack bonuses are too low to be practical for casting combat spells. Battle and Mystic staffs, give higher melee bonuses than regular staffs, making them somewhat better for physical combat.
<hr>
<h3 id="offence-crush">Crush Offence</h3>
<table>
    <td>
        <div id="equipment-interface-crushoffence"></div>
    </td>
    <td>
        <div id="equipment-interface-crushoffence-stats"></div>
    </td>
</table>
<script>loadEquipInterfaceWithStats('equipment-interface-crushoffence', 'equipment-interface-crushoffence-stats', false,
    'dragon_med_helm',
    'cape_of_legends',
    'amulet_of_glory',
    'dragon_mace',
    'rune_platebody',
    'dragon_sq_shield',
    'rune_platelegs',
    'steel_gauntlets',
    'death_climbingboots',
    null,
    null
);</script>
<table class="table">
    <tr>
        <th>Slot</th>
        <th>Item</th>
        <th>Description</th>
    </tr>
    <tr>
        <td rowspan="2">Head</td>
        <td><canvas itemname="dragon_med_helm" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="robinhoodhat" show-label="inline"></canvas></td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Cape</td>
        <td><canvas itemname="cape_of_legends" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="zamorak_cape"></canvas><canvas itemname="guthix_cape"></canvas><canvas itemname="saradomin_cape"></canvas><br>God cape</td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td>Neck</td>
        <td><canvas itemname="amulet_of_glory" show-label="inline"></canvas></td>
        <td>+10 Crush Attack<br>+6 Strength Bonus<br>+3 Prayer Bonus</td>
    </tr>
    <tr>
        <td>Weapon</td>
        <td><canvas itemname="dragon_mace" show-label="inline"></canvas></td>
        <td>+60 Crush Attack<br>+55 Strength Bonus<br>+5 Prayer Bonus</td>
    </tr>
    <tr>
        <td rowspan="2">Chest</td>
        <td><canvas itemname="rune_platebody" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="black_dragonhide_body" show-label="inline"></canvas></td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Shield</td>
        <td><canvas itemname="dragon_sq_shield" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="elemental_shield" show-label="inline"></canvas></td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Legs</td>
        <td><canvas itemname="rune_platelegs" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="black_dragonhide_chaps" show-label="inline"></canvas></td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Gloves</td>
        <td><canvas itemname="steel_gauntlets"></canvas><canvas itemname="gauntlets_of_chaos"></canvas><canvas itemname="gauntlets_of_cooking"></canvas><canvas itemname="gauntlets_of_goldsmithing"></canvas><br>Any Family Crest Gauntlets</td>
        <td rowspan="2">+2 Crush Attack<br>+2 Strength Bonus</td>
    </tr>
    <tr>
        <td><canvas itemname="klanks_gauntlets" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td>Boots</td>
        <td><canvas itemname="death_climbingboots" show-label="inline"></canvas></td>
        <td>+2 Strength</td>
    </tr>
</table>
<hr>
<h3 id="offence-stabslash">Stab/Slash Offence</h3>
<table>
    <td>
        <div id="equipment-interface-stabslashoffence"></div>
    </td>
    <td>
        <div id="equipment-interface-stabslashoffence-stats"></div>
    </td>
</table>
<script>loadEquipInterfaceWithStats('equipment-interface-stabslashoffence', 'equipment-interface-stabslashoffence-stats', false,
    'dragon_med_helm',
    'cape_of_legends',
    'amulet_of_glory',
    'dragon_longsword',
    'rune_platebody',
    'dragon_sq_shield',
    'rune_platelegs',
    'steel_gauntlets',
    'death_climbingboots',
    null,
    null
);</script>
<table class="table">
    <tr>
        <th>Slot</th>
        <th>Item</th>
        <th>Description</th>
    </tr>
    <tr>
        <td rowspan="2">Head</td>
        <td><canvas itemname="dragon_med_helm" show-label="inline"></canvas></td>
        <td>More Melee Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="robinhoodhat" show-label="inline"></canvas></td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Cape</td>
        <td><canvas itemname="cape_of_legends" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="zamorak_cape"></canvas><canvas itemname="guthix_cape"></canvas><canvas itemname="saradomin_cape"></canvas><br>God cape</td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td>Neck</td>
        <td><canvas itemname="amulet_of_glory" show-label="inline"></canvas></td>
        <td>+10 Stab/Slash Attack<br>+6 Strength Bonus<br>+3 Prayer Bonus</td>
    </tr>
    <tr>
        <td>Weapon</td>
        <td><canvas itemname="dragon_longsword" show-label="inline"></canvas></td>
        <td>+69 Slash Attack<br>+71 Strength Bonus</td>
    </tr>
    <tr>
        <td rowspan="2">Chest</td>
        <td><canvas itemname="rune_platebody" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="black_dragonhide_body" show-label="inline"></canvas></td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Shield</td>
        <td><canvas itemname="dragon_sq_shield" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="elemental_shield" show-label="inline"></canvas></td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Legs</td>
        <td><canvas itemname="rune_platelegs" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="black_dragonhide_chaps" show-label="inline"></canvas></td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td rowspan="2">Gloves</td>
        <td><canvas itemname="steel_gauntlets"></canvas><canvas itemname="gauntlets_of_chaos"></canvas><canvas itemname="gauntlets_of_cooking"></canvas><canvas itemname="gauntlets_of_goldsmithing"></canvas><br>Any Family Crest Gauntlets</td>
        <td rowspan="2">+2 Stab/Slash Attack<br>+2 Strength Bonus</td>
    </tr>
    <tr>
        <td><canvas itemname="klanks_gauntlets" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td>Boots</td>
        <td><canvas itemname="death_climbingboots" show-label="inline"></canvas></td>
        <td>+2 Strength</td>
    </tr>
</table>
<hr>
<h3 id="offence-ranged">Ranged Offence</h3>
<table>
    <td>
        <div id="equipment-interface-rangeoffence"></div>
    </td>
    <td>
        <div id="equipment-interface-rangeoffence-stats"></div>
    </td>
</table>
<script>loadEquipInterfaceWithStats('equipment-interface-rangeoffence', 'equipment-interface-rangeoffence-stats', false,
    'robinhoodhat',
    'zamorak_cape',
    'amulet_of_glory',
    'magic_shortbow',
    'black_dragonhide_body',
    null,
    'black_dragonhide_chaps',
    'black_dragon_vambraces',
    'boots_ranger',
    null,
    'rune_arrow_p'
);</script>
<table class="table">
    <tr>
        <th>Slot</th>
        <th>Item</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>Head</td>
        <td><canvas itemname="robinhoodhat" show-label="inline"></canvas></td>
        <td>+8 Ranged Attack</td>
    </tr>
    <tr>
        <td rowspan="2">Cape</td>
        <td><canvas itemname="cape_of_legends" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="zamorak_cape"></canvas><canvas itemname="guthix_cape"></canvas><canvas itemname="saradomin_cape"></canvas><br>God cape</td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td>Neck</td>
        <td><canvas itemname="amulet_of_glory" show-label="inline"></canvas></td>
        <td>+8 Ranged Attack<br>+3 Prayer Bonus</td>
    </tr>
    <tr>
        <td rowspan="2">Weapon</td>
        <td><canvas itemname="magic_shortbow" show-label="inline"></canvas></td>
        <td rowspan="2">+69 Ranged Attack</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="magic_longbow" show-label="inline"></canvas>*</div></td>
    </tr>
    <tr>
        <td>Chest</td>
        <td><canvas itemname="black_dragonhide_body" show-label="inline"></canvas></td>
        <td>+30 Ranged Attack</td>
    </tr>
    <tr>
        <td>Legs</td>
        <td><canvas itemname="black_dragonhide_chaps" show-label="inline"></canvas></td>
        <td>+17 Ranged Attack</td>
    </tr>
    <tr>
        <td>Gloves</td>
        <td><canvas itemname="black_dragon_vambraces" show-label="inline"></canvas></td>
        <td>+11 Ranged Attack</td>
    </tr>
    <tr>
        <td>Boots</td>
        <td><canvas itemname="boots_ranger" show-label="inline"></canvas></td>
        <td>+8 Ranged Attack</td>
    </tr>
    <tr>
        <td>Ammo</td>
        <td><canvas itemname="rune_arrow_p" show-label="inline"></canvas></td>
        <td>+49 Ranged Strength Bonus</td>
    </tr>
</table>
*Magic Longbows should only be used for engaging monsters at a further distances. In the case of high defence opponents, the special attack of the Longbow is more consistent than the Shortbow. Otherwise, Magic Shortbows should be used as their faster attack rates deal more DPS overall.
<hr>
<h3 id="offence-magic">Magic Offence</h3>
<table>
    <td>
        <div id="equipment-interface-magicoffence"></div>
    </td>
    <td>
        <div id="equipment-interface-magicoffence-stats"></div>
    </td>
</table>
<script>loadEquipInterfaceWithStats('equipment-interface-magicoffence', 'equipment-interface-magicoffence-stats', false,
    'gnome_hat_blue',
    'zamorak_cape',
    'amulet_of_glory',
    'mystic_air_staff',
    'wizards_robe',
    'antidragonbreathshield',
    'zamrobebottom',
    'gauntlets_of_chaos',
    'boots_wizard',
    null,
    null
);</script>
<table class="table">
    <tr>
        <th>Slot</th>
        <th>Item</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>Head</td>
        <td><canvas itemname="gnome_hat_blue"></canvas><canvas itemname="gnome_hat_pink"></canvas><canvas itemname="gnome_hat_green"></canvas><canvas itemname="gnome_hat_cream"></canvas><canvas itemname="gnome_hat_turquoise"></canvas><br>Any Tree Gnome Hat</td>
        <td>+3 Magic Attack</td>
    </tr>
    <tr>
        <td>Cape</td>
        <td><canvas itemname="zamorak_cape"></canvas><canvas itemname="guthix_cape"></canvas><canvas itemname="saradomin_cape"></canvas><br>God cape</td>
        <td>+10 Magic Attack</td>
    </tr>
    <tr>
        <td>Neck</td>
        <td><canvas itemname="amulet_of_glory" show-label="inline"></canvas></td>
        <td>+10 Magic Attack<br>+3 Prayer Bonus</td>
    </tr>
    <tr>
        <td>Weapon</td>
        <td><canvas itemname="mystic_air_staff"></canvas><canvas itemname="mystic_water_staff"></canvas><canvas itemname="mystic_earth_staff"></canvas><canvas itemname="mystic_fire_staff"></canvas><br>Any Elemental Staff*</td>
        <td>+10 Magic Attack</td>
    </tr>
    <tr>
        <td>Chest</td>
        <td><canvas itemname="wizards_robe"></canvas><canvas itemname="black_robe"></canvas><br>Wizards or Black Robe</td>
        <td>+3 Magic Attack</td>
    </tr>
    <tr>
        <td rowspan="2">Shield</td>
        <td><canvas itemname="antidragonbreathshield" show-label="inline"></canvas></td>
        <td>More General Defence</td>
    </tr>
    <tr>
        <td><canvas itemname="elemental_shield" show-label="inline"></canvas></td>
        <td>More Magic Defence</td>
    </tr>
    <tr>
        <td>Legs</td>
        <td><canvas itemname="zamrobebottom" show-label="inline"></canvas></td>
        <td>+2 Magic Attack<br>+3 Prayer Bonus</td>
    </tr>
    <tr>
        <td>Gloves</td>
        <td><canvas itemname="gauntlets_of_chaos" show-label="inline"></canvas></td>
        <td>+3 Max Hit to Bolt Spells</td>
    </tr>
    <tr>
        <td>Boots</td>
        <td><canvas itemname="boots_wizard" show-label="inline"></canvas></td>
        <td>+4 Magic Attack</td>
    </tr>
</table>
*While all staffs offer +10 magic bonus, Battle and Mystic Staffs offer more melee bonuses than normal staffs.
<hr>
<h3 id="prayer">Prayer Bonus</h3>
<table>
    <td>
        <div id="equipment-interface-prayer"></div>
    </td>
    <td>
        <div id="equipment-interface-prayer-stats"></div>
    </td>
</table>
<script>loadEquipInterfaceWithStats('equipment-interface-prayer', 'equipment-interface-prayer-stats', false,
    null,
    null,
    'blessedsnake',
    'dragon_mace',
    'monkrobetop',
    null,
    'monkrobebottom',
    null,
    null,
    null,
    null
);</script>
<table class="table">
    <tr>
        <th>Slot</th>
        <th>Item</th>
        <th>Description</th>
    </tr>
    <tr>
        <td rowspan="2">Neck</td>
        <td><div class="centered-content"><canvas itemname="blessedsnake" show-label="inline"></canvas>*</div></td>
        <td>+8 Prayer Bonus<br>+2 to all Attack Bonuses</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="blessedstar" show-label="inline"></canvas>*</div></td>
        <td>+8 Prayer Bonus<br>+2 to all Defence Bonuses</td>
    <tr>
        <td>Weapon</td>
        <td><canvas itemname="dragon_mace" show-label="inline"></canvas></td>
        <td>+5 Prayer Bonus</td>
    </tr>
    <tr>
        <td>Chest</td>
        <td><canvas itemname="monkrobetop"></canvas><canvas itemname="blackrobetop"></canvas><br>Monk or Black Robe Top</td>
        <td>+5 Prayer Bonus</td>
    </tr>
    <tr>
        <td>Legs</td>
        <td><canvas itemname="monkrobebottom" show-label="inline"></canvas></td>
        <td>+6 Prayer Bonus</td>
    </tr>
</table>
*Use the Unholy Symbol instead of the Holy Symbol when overhead prayers are active, as the former provides better offensive stats.
<hr>
This special report was written on LostHQ by Fallnight. Thanks to Geerin, Fran 2004, and Timondg for corrections.
<br><br>
This special report was entered into the database on Wed, Jul 30, 2025, at 11:51:20 PM by Halogod35 and was last updated on Sat, Sept 6, 2025, at 11:25:02 AM by Halogod35.
HTML; }