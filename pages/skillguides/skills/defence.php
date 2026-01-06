<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<h3 style="display: inline;">Melee Armour:</h3>
<br><br>
<b>Helmets</b>
<br>
<table style="text-align: center;" align="center">
    <tr>
        <td><canvas itemname="bronze_med_helm"></canvas><canvas itemname="iron_med_helm"></canvas><canvas itemname="steel_med_helm"></canvas><canvas itemname="black_med_helm"></canvas><canvas itemname="mithril_med_helm"></canvas><canvas itemname="adamant_med_helm"></canvas><canvas itemname="rune_med_helm"></canvas><canvas itemname="dragon_med_helm"></canvas><br><canvas itemname="bronze_full_helm"></canvas><canvas itemname="iron_full_helm"></canvas><canvas itemname="steel_full_helm"></canvas><canvas itemname="black_full_helm"></canvas><canvas itemname="mithril_full_helm"></canvas><canvas itemname="adamant_full_helm"></canvas><canvas itemname="rune_full_helm"></canvas></td>
    </tr>
    <tr>
        <td>There are two types of helmet: full helms and medium helms. Full helms offer better protection than medium helms, but casting magic or using a ranged weapon is more difficult when using a full helm, since your vision is partially obstructed.</td>
    </tr>
    </table><br><br><b>Chainmail</b><br><table style="text-align: center;" align="center">
    <tr>
        <td><canvas itemname="bronze_chainbody"></canvas><canvas itemname="iron_chainbody"></canvas><canvas itemname="steel_chainbody"></canvas><canvas itemname="black_chainbody"></canvas><canvas itemname="mithril_chainbody"></canvas><canvas itemname="adamant_chainbody"></canvas><canvas itemname="rune_chainbody"></canvas><canvas itemname="dragon_chainbody"></canvas></td>
    </tr>
    <tr>
        <td>Chainmail is made up of small rings connected together. It is particularly useful for deflecting slashing weapons and absorbing the impact of crush attacks. Chainmail is weak against stabbing weapons as small pointy blades can pierce the rings.  Chainmail is quite flexible and so does not cause any disadvantages while using ranged weapons. Mages will tend to find the armour gets slightly in the way of some of the finer spell casting techniques.</td>
    </tr>
</table>
<br><br>
<b>Plate Armour</b>
<br>
<table style="text-align: center;" align="center">
    <tr>
    <td><canvas itemname="bronze_platebody"></canvas><canvas itemname="iron_platebody"></canvas><canvas itemname="steel_platebody"></canvas><canvas itemname="black_platebody"></canvas><canvas itemname="mithril_platebody"></canvas><canvas itemname="adamant_platebody"></canvas><canvas itemname="rune_platebody"></canvas></td>
    </tr>
    <tr>
        <td>Plate armour is much heavier and stronger than chain. Rangers and mages find it incredibly difficult to use plate armour in conjunction with firing arrows or casting spells. Plate armour is weakest against crushing damage as it cannot absorb the impact as well as it can absorb slashing or stabbing attacks.</td>
    </tr>
</table>
<br><br>
<b>Shields</b>
<br>
<table style="text-align: center;" align="center">
    <tr>
        <td>
            <canvas itemname="bronze_sq_shield"></canvas><canvas itemname="iron_sq_shield"></canvas><canvas itemname="steel_sq_shield"></canvas><canvas itemname="black_sq_shield"></canvas><canvas itemname="mithril_sq_shield"></canvas><canvas itemname="adamant_sq_shield"></canvas><canvas itemname="rune_sq_shield"></canvas><canvas itemname="dragon_sq_shield"></canvas><br>
            <canvas itemname="bronze_kiteshield"></canvas><canvas itemname="iron_kiteshield"></canvas><canvas itemname="steel_kiteshield"></canvas><canvas itemname="black_kiteshield"></canvas><canvas itemname="mithril_kiteshield"></canvas><canvas itemname="adamant_kiteshield"></canvas><canvas itemname="rune_kiteshield"></canvas><br>
            <canvas itemname="granite_shield"></canvas>
        </td>
    </tr>
    <tr>
        <td>Both varieties of shield feature excellent defences against slashing attacks. However, the kite shield is weak against stabbing attacks, and, the square shield is weak against crush attacks. Using the shield while casting magic or ranging is very difficult as it restricts the user's movement.</td>
    </tr>
    <tr>
        <td>
            <canvas itemname="antidragonbreathshield"></canvas><br>
            Invaluable in the fight against all fire-breathing dragons, the anti-dragonfire shield reduces the damage from dragon fire considerably, and is strongly recommended every time you fight dragons.
        </td>
    </tr>
</table>
<hr>
<b>Prayer Enhancing Armour</b>
<br>
<table style="text-align: center;" align="center">
    <tr>
        <td><canvas itemname="zamrobetop"></canvas><canvas itemname="druidrobetop"></canvas><canvas itemname="monkrobetop"></canvas><br>
    <canvas itemname="zamrobebottom"></canvas><canvas itemname="druidrobebottom"></canvas><canvas itemname="monkrobebottom"></canvas></td>
    </tr>
    <tr>
        <td>There are many items of armour in game that will boost prayer. With the support of the Gods, you can wear these items to ensure your prayer will be maintained for a longer amount of time. Such items include the Priest, Monk, Shade, Druid, and Zamorak robe sets.</td>
    </tr>
</table>
<hr>
<h3 style="display: inline;">Ranger Armour:</h3>
<br><br>
<b>Leather</b>
<br>
<table style="text-align: center;" align="center">
    <tr>
        <td><canvas itemname="leather_armour"></canvas><canvas itemname="hardleather_body"></canvas><canvas itemname="studded_body"></canvas></td>
    </tr>
    <tr>
        <td>Leather tends to be very weak armour, but can be improved by studding the leather or hardening it. Leather is more resistant to crush attacks and weaker against stab attacks. However, its flexibility makes it ideal for use by rangers.</td>
    </tr>
</table>
<br><br>
<b>Dragonhide</b>
<br>
<table style="text-align: center;" align="center">
    <tr>
        <td><canvas itemname="dragonhide_body"></canvas><canvas itemname="blue_dragonhide_body"></canvas><canvas itemname="red_dragonhide_body"></canvas><canvas itemname="black_dragonhide_body"></canvas><br><canvas itemname="dragonhide_chaps"></canvas><canvas itemname="blue_dragonhide_chaps"></canvas><canvas itemname="red_dragonhide_chaps"></canvas><canvas itemname="black_dragonhide_chaps"></canvas></td>
    </tr>
    <tr>
        <td>The same applies for Dragonhide armour as to leather armour, although it is much stronger. The magic of dragons makes it very useful when defending against spells and magical effects. However, this tends to interfere with the wearer's ability to cast magic.</td>
    </tr>
</table>
<hr>
<h3 style="display: inline;">Mage Armour:</h3>
<br><br>
<b>Mage Robes</b>
<br>
<table style="text-align: center;" align="center">
    <tr>
        <td><canvas itemname="wizards_robe"></canvas><canvas itemname="black_robe"></canvas></td>
    </tr>
    <tr>
        <td>Mage robes offer no extra defence against ranged or melee combat, but do give an advantage for spell casting and defending against magic.</td>
    </tr>
</table>
<hr>
<h3>Level up table</h3>
<table class="table">
    <tr>
        <th>Armor</th>
        <th>Level required</th>
        <th>Additional requirements</th>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="bronze_platebody"></canvas>&nbsp;&nbsp;Bronze armour</div></td>
        <td rowspan="8">1</td>
        <td>&mdash;</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="iron_platebody"></canvas>&nbsp;&nbsp;Iron armour</div></td>
        <td>&mdash;</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="leather_armour"></canvas>&nbsp;&nbsp;Leather armour</div></td>
        <td>&mdash;</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="wizards_robe"></canvas>&nbsp;&nbsp;Wizard robes</div></td>
        <td>&mdash;</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="dragonhide_chaps"></canvas>&nbsp;&nbsp;Green d'hide armour*</div></td>
        <td>*excluding the body<br>Requires 40 ranged</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="blue_dragonhide_chaps"></canvas>&nbsp;&nbsp;Blue d'hide armour*</div></td>
        <td>*excluding the body<br>Requires 50 ranged</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="red_dragonhide_chaps"></canvas>&nbsp;&nbsp;Red d'hide armour*</div></td>
        <td>*excluding the body<br>Requires 60 ranged</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="black_dragonhide_chaps"></canvas>&nbsp;&nbsp;Black d'hide armour*</div></td>
        <td>*excluding the body<br>Requires 70 ranged</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="steel_platebody"></canvas>&nbsp;&nbsp;Steel armour</div></td>
        <td>5</td>
        <td>&mdash;</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="black_platebody"></canvas>&nbsp;&nbsp;Black armour</div></td>
        <td rowspan="2">10</td>
        <td>&mdash;</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="hardleather_body" show-label="inline"></canvas></div></td>
        <td>&mdash;</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="mithril_platebody"></canvas>&nbsp;&nbsp;Mithril armour</div></td>
        <td rowspan="2">20</td>
        <td>&mdash;</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="studded_body" show-label="inline"></canvas></div></td>
        <td>Requires 20 Ranged</td>
    <tr>
        <td><div class="centered-content"><canvas itemname="adamant_platebody"></canvas>&nbsp;&nbsp;Adamant armour</div></td>
        <td>30</td>
        <td>&mdash;</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="rune_platebody"></canvas>&nbsp;&nbsp;Rune armour</div></td>
        <td rowspan="5">40</td>
        <td>Rune platebody requires the completion of <a style="display: contents" href="?p=questguides&quest=dragonslayer">Dragon Slayer</a></td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="dragonhide_body" show-label="inline"></canvas></div></td>
        <td>Requires 40 Ranged and the completion of <a style="display: contents" href="?p=questguides&quest=dragonslayer">Dragon Slayer</a></td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="blue_dragonhide_body" show-label="inline"></canvas></div></td>
        <td>Requires 50 Ranged</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="red_dragonhide_body" show-label="inline"></canvas></div></td>
        <td>Requires 60 Ranged</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="black_dragonhide_body" show-label="inline"></canvas></div></td>
        <td>Requires 70 Ranged</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="granite_shield" show-label="inline"></canvas></div></td>
        <td>50</td>
        <td>&mdash;</td>
    </tr>
    <tr>
        <td><div class="centered-content"><canvas itemname="dragon_chainbody"></canvas>&nbsp;&nbsp;Dragon armour</div></td>
        <td>60</td>
        <td>&mdash;</td>
    </tr>
</table>
HTML; }