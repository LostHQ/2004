<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> Doric the dwarf is happy to let you use his anvils but first he would like you to run an errand for him.
<br><br>
<b>Difficulty Level: <font color="Green">Easy</font></b>
<br><br>
<b>Length: <font color="Green">Short</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="clay" data-size="25"></canvas>6 clay (not soft clay)</div><br></li>
<li><div data-progress><canvas data-itemname="copper_ore" data-size="25"></canvas>4 copper ores</div><br></li>
<li><div data-progress><canvas data-itemname="iron_ore" data-size="25"></canvas>2 iron ores</div><br></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>15 Mining</div></li>
<li><div data-progress><canvas data-itemname="bronze_pickaxe" data-size="25"></canvas>Any pickaxe</div><br></li>
</ul>
<br>
<b>Starting Location:</b> Doric's Anvil (north of Falador)
<br><br>
<b>Reward:</b> 1 quest point, 1,300 Mining XP, 180 coins, permission to use Doric's anvils
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>First, talk to Doric, who is located northwest of Falador. He'll tell you that to use his anvils, he needs 6 Clay, 4 Copper ore, and 2 Iron ore.</div>
<br><br>
<div data-progress>If you already have a pickaxe, skip this step. If you don't, walk over to Barbarian Village. In one of the buildings, you'll find a Bronze pickaxe on a table. Pick it up.</div>
<br><br>
<div data-progress>With your pickaxe in hand, head to the northern entrance of the Dwarven Mines, which is located northeast of Falador.</div>
<br><br>
<div data-progress>Once there, go down the trapdoor and head south until you see some iron and copper rocks. Mine 2 Iron ore and 4 Copper ore from them. Then go a little farther south to find some clay rocks, and mine 6 Clay.</div>
<br><br>
<div data-progress>Now that you have 6 Clay, 4 Copper ore, and 2 Iron ore in your inventory, return to Doric and give him the ores. He'll appreciate it very much and reward you with 1 Quest Point, 180 coins, and 1,300 Mining XP.</div>
<br><br>
<div data-progress>Congratulations! You've just completed Doric's Quest and can now use his anvils.</div>
$questComplete
This quest guide was written on RuneHQ by Stormer and Ghou Lies. Thanks to Nitr021, Weezy, and Pirate Bob49 for corrections.
<br><br>
This quest guide was entered into the database on Mon, Feb 16, 2004, at 03:38:33 PM by Chownuggs and CJH and was last updated on Sat, Feb 05, 2005, at 06:26:44 AM by nitro21.
HTML; }