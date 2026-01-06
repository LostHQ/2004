<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> The Wizard Grayzag has summoned hundreds of little imps. They have stolen a lot of things belonging to the Wizard Mizgog including his magic beads.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas itemname="black_bead" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="red_bead" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="white_bead" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="yellow_bead" icon-size="25" show-label="inline"></canvas></div></li>
</ul>
<b>Starting Location:</b> <span data-floors="US">3rd floor</span> of the Wizard's Tower south of Draynor Village
<br><br>
<b>Reward:</b> 1 Quest point, 375 Magic XP, Amulet of Accuracy (+4 weapon accuracy)
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Wizard Mizgog. He will tell you that he has lost his beads — red, white, black, and yellow. He will also tell you that Wizard Grayzag's imp stole the beads. Tell him that you will return them.</div>
<br><br>
<div data-progress>You can find some imps near the room where you are. Kill them to get the beads. Be patient — imps don't usually drop them. If you don't want to kill imps, don't worry — you can also buy the beads from other players. That will save you a lot of time.</div>
<br><br>
<div data-progress>After you have collected all the beads, return to Wizard Mizgog. He will reward you.</div>
$questComplete
This quest guide was written on RuneHQ by henry-x.
<br><br>
This quest guide was entered into the database on Tue, Mar 02, 2004, at 10:25:33 PM by Weezy and was last updated on Wed, Mar 31, 2004, at 05:13:34 PM.
HTML; }