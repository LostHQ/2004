<?php
function getSpecialGuide($currSpecialGuide) { return <<<HTML
<h2>$currSpecialGuide</h2>
Some weapons in RuneScape have special attacks available for them. There are many types of special attacks, from temporary boosts in stats, to strikes dealing extra damage.
<br><br>
<img src="img/special_guides/specialattacks/special_attack_bar.gif">
<br><br>
They are activated by the player by clicking on the special attack bar under the Combat Options interface. Special attacks have an energy bar that is drained when you use the attack; this is drained of varying amounts according to which weapon is used. The special energy bar regenerates at rate of 10% every 30 seconds, requiring 5 minutes to regenerate from empty to full.
<br><br>
<table class="calculators" width="100%">
    <tr>
        <th colspan="4"><canvas data-itemname="dragon_battleaxe" data-show-label="inline"></canvas></th>
    </tr>
    <tr>
        <th width="25%">Special Attack required</th>
        <td width="25%">100%</td>
        <td colspan="2" rowspan="4"><img src="img/special_guides/specialattacks/dragonbattleaxe.gif"></td>
    </tr>
    <tr>
        <th width="25%">Attack Name</th>
        <td width="25%">Rampage</td>
    </tr>
    <tr><th colspan="2">Official Description</th></tr>
    <tr>
        <td colspan="2">This attack will lower your attack, ranged, defence, and magic stats while boosting your strength stat.</td>
    </tr>
    <tr><th colspan="4">Effect when used</th></tr>
    <tr>
        <td colspan="4">-10% Attack, Defence, Magic, and Ranged levels. Boosts Strength by the average of these drained stats + 10.</td>
    </tr>
</table>
<br><br>
<table class="calculators" width="100%">
    <tr>
        <th colspan="4"><canvas data-itemname="dragon_dagger" data-show-label="inline"></canvas></th>
    </tr>
    <tr>
        <th width="25%">Special Attack required</th>
        <td width="25%">25%</td>
        <td colspan="2" rowspan="4"><img src="img/special_guides/specialattacks/dragondagger.gif"></td>
    </tr>
    <tr>
        <th width="25%">Attack Name</th>
        <td width="25%">Puncture</td>
    </tr>
    <tr><th colspan="2">Official Description</th></tr>
    <tr>
        <td colspan="2">This attack consists of two quick strikes at your opponent, with slightly increased accuracy and damage.</td>
    </tr>
    <tr><th colspan="4">Effect when used</th></tr>
    <tr>
        <td colspan="4">2 Quick Strikes, adds +15% max hit and accuracy.</td>
    </tr>
</table>
<br><br>
<table class="calculators" width="100%">
    <tr>
        <th colspan="4"><canvas data-itemname="dragon_longsword" data-show-label="inline"></canvas></th>
    </tr>
    <tr>
        <th width="25%">Special Attack required</th>
        <td width="25%">25%</td>
        <td colspan="2" rowspan="4"><img src="img/special_guides/specialattacks/dragonlongsword.gif"></td>
    </tr>
    <tr>
        <th width="25%">Attack Name</th>
        <td width="25%">Cleave</td>
    </tr>
    <tr><th colspan="2">Official Description</th></tr>
    <tr>
        <td colspan="2">This attack is more powerful and so inflicts increased damage to your opponent.</td>
    </tr>
    <tr><th colspan="4">Effect when used</th></tr>
    <tr>
        <td colspan="4">Adds +25% max hit.</td>
    </tr>
</table>
<br><br>
<table class="calculators" width="100%">
    <tr>
        <th colspan="4"><canvas data-itemname="dragon_mace" data-show-label="inline"></canvas></th>
    </tr>
    <tr>
        <th width="25%">Special Attack required</th>
        <td width="25%">25%</td>
        <td colspan="2" rowspan="4"><img src="img/special_guides/specialattacks/dragonmace.gif"></td>
    </tr>
    <tr>
        <th width="25%">Attack Name</th>
        <td width="25%">Shatter</td>
    </tr>
    <tr><th colspan="2">Official Description</th></tr>
    <tr>
        <td colspan="2">This attack is much more powerful, but it also has a reduced chance to hit.</td>
    </tr>
    <tr><th colspan="4">Effect when used</th></tr>
    <tr>
        <td colspan="4">Adds +50% max hit and +25% accuracy.*</td>
    </tr>
</table>
*Contrary to the official description, this attack has increased accuracy.
<br><br>
<table class="calculators" width="100%">
    <tr>
        <th colspan="4"><canvas data-itemname="dragon_spear" data-show-label="inline"></canvas></th>
    </tr>
    <tr>
        <th width="25%">Special Attack required</th>
        <td width="25%">25%</td>
        <td colspan="2" rowspan="4"><img src="img/special_guides/specialattacks/dragonspear.gif"></td>
    </tr>
    <tr>
        <th width="25%">Attack Name</th>
        <td width="25%">Shove</td>
    </tr>
    <tr><th colspan="2">Official Description</th></tr>
    <tr>
        <td colspan="2">This attack deals no damage to your opponent, it simply forces them back away from you and stuns them for a short time.</td>
    </tr>
    <tr><th colspan="4">Effect when used</th></tr>
    <tr>
        <td colspan="4">Stuns opponent for 4 seconds and also pushes them back a square.</td>
    </tr>
</table>
<br><br>
<table class="calculators" width="100%">
    <tr>
        <th colspan="4"><canvas data-itemname="excalibur" data-show-label="inline"></canvas></th>
    </tr>
    <tr>
        <th width="25%">Special Attack required</th>
        <td width="25%">100%</td>
        <td colspan="2" rowspan="4"><img src="img/special_guides/specialattacks/excalibur.gif"></td>
    </tr>
    <tr>
        <th width="25%">Attack Name</th>
        <td width="25%">Sanctuary</td>
    </tr>
    <tr><th colspan="2">Official Description</th></tr>
    <tr>
        <td colspan="2">This attack protects you from harm by increasing your defence stat.</td>
    </tr>
    <tr><th colspan="4">Effect when used</th></tr>
    <tr>
        <td colspan="4">+8 Defence boost.</td>
    </tr>
</table>
<br><br>
<table class="calculators" width="100%">
    <tr>
        <th colspan="4"><canvas data-itemname="magic_shortbow" data-show-label="inline"></canvas></th>
    </tr>
    <tr>
        <th width="25%">Special Attack required</th>
        <td width="25%">35%</td>
        <td colspan="2" rowspan="4"><img src="img/special_guides/specialattacks/magicshortbow.gif"></td>
    </tr>
    <tr>
        <th width="25%">Attack Name</th>
        <td width="25%">Snap-Shot</td>
    </tr>
    <tr><th colspan="2">Official Description</th></tr>
    <tr>
        <td colspan="2">This attack allows you to fire two rapid shots at your opponent, however the speed reduces your accuracy.</td>
    </tr>
    <tr><th colspan="4">Effect when used</th></tr>
    <tr>
        <td colspan="4">2 Rapid Shots, +10 to Ranged for the attack, +43% accuracy.*</td>
    </tr>
</table>
*Contrary to the official description, this attack has increased accuracy.
<br><br>
<table class="calculators" width="100%">
    <tr>
        <th colspan="4"><canvas data-itemname="magic_longbow" data-show-label="inline"></canvas></th>
    </tr>
    <tr>
        <th width="25%">Special Attack required</th>
        <td width="25%">35%</td>
        <td colspan="2" rowspan="4"><img src="img/special_guides/specialattacks/magiclongbow.gif"></td>
    </tr>
    <tr>
        <th width="25%">Attack Name</th>
        <td width="25%">Powershot</td>
    </tr>
    <tr><th colspan="2">Official Description</th></tr>
    <tr>
        <td colspan="2">This attack uses the full power of the longbow so that you are guarenteed to hit your opponent.</td>
    </tr>
    <tr><th colspan="4">Effect when used</th></tr>
    <tr>
        <td colspan="4">Adds +10 to Ranged for the attack, 100% accuracy.</td>
    </tr>
</table>
<br><br>
<table class="calculators" width="100%">
    <tr>
        <th colspan="4"><canvas data-itemname="rune_thrownaxe" data-show-label="inline"></canvas></th>
    </tr>
    <tr>
        <th width="25%">Special Attack required</th>
        <td width="25%">10%</td>
        <td colspan="2" rowspan="4"><img src="img/special_guides/specialattacks/runethrownaxe.gif"></td>
    </tr>
    <tr>
        <th width="25%">Attack Name</th>
        <td width="25%">Chain-Hit</td>
    </tr>
    <tr><th colspan="2">Official Description</th></tr>
    <tr>
        <td colspan="2">In a multiway combat area this attack bounces the projectile between several targets, dealing damage to each of them.</td>
    </tr>
    <tr><th colspan="4">Effect when used</th></tr>
    <tr>
        <td colspan="4">Adds +10 Ranged for the attack, hits up to 5 enemies within 3 game squares that are within line of sight.</td>
    </tr>
</table>
HTML; }