<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
Description: Veronica is very worried. Her fiancee went into the big spooky manor house to ask for directions. An hour later and he's still not out yet.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="spade" data-size="25"></canvas>&nbsp;&nbsp;Spade (can be obtained during the quest)</div><br></li>
<li><div data-progress><canvas data-itemname="fish_food" data-size="25"></canvas>&nbsp;&nbsp;Fish food (can be obtained during the quest)</div><br></li>
<li><div data-progress><canvas data-itemname="poison" data-size="25"></canvas>&nbsp;&nbsp;Poison (can be obtained during the quest)</div><br></li>
</ul>
<b>Starting Location:</b> South of Draynor Manor
<br><br>
<b>Reward:</b> 4 Quest points, 300 coins
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Veronica outside the Mansion in Draynor. She will tell you about Ernest. He has gone into the house for an hour and hasn't come out yet. Tell her that you will help her to find Ernest.</div>
<br><br>
<div data-progress>Go inside the house and to the top floor where you'll find Professor Oddenstein. Talk to him and ask about Ernest. He will explain that he accidentally changed Ernest into a chicken and that his machine is broken. To fix it, you must retrieve three items: an oil can, rubber tubing, and a pressure gauge.</div>
<br><br>
<div data-progress>Go to the basement, which is a mini maze.</div>
<br><br>
<img src="img/questimages/ernest1.png">
<br><br>
Use the following lever sequence:
<br>
<div data-progress>Pull levers B then A down. Enter door 1.</div>
<br>
<div data-progress>Pull lever D down. Enter doors 2, then 3.</div>
<br>
<div data-progress>Pull levers B, then A up. Enter doors 3, 4, and 5.</div>
<br>
<div data-progress>Pull levers E, then F down. Enter doors 6 and 7.</div>
<br>
<div data-progress>Pull lever C down. Enter doors 7 and 6.</div>
<br>
<div data-progress>Pull lever E up. Enter doors 6, 8, and 3.</div>
<br>
<div data-progress>Go through door 9 and grab the oil can.</div>
<br><br>
<div data-progress>Make your way to the <span data-floors="US">2nd floor</span>, and then go to the southeast room and pick up fish food. Go to the west room and grab poison. Use poison on fish food.</div>
<br><br>
<div data-progress>Go to the <span data-floors="US">1st floor</span> east room and grab the spade. Head outside, then north, west, and south to find a pile of compost. Use the spade on the compost to get a key.</div>
<br><br>
<div data-progress>Then go southwest outside to the fountain, use the poisoned fish food on it, and search the fountain to get the pressure gauge.</div>
<br><br>
<div data-progress>Return inside and unlock the door with the skeleton inside (it won't attack) behind the main stairs. Grab the rubber tube.</div>
<br><br>
<div data-progress>Return to Professor Oddenstein with all three items. He will fix the machine and turn Ernest back into a human. Ernest will thank and reward you.</div>
$questComplete
This quest guide was written on RuneHQ by Henry-X. Thanks to Weezy for corrections.
<br><br>
This quest guide was entered into the database on Thu, Feb 19, 2004, at 02:33:04 PM by Weezy and was last updated on Wed, Mar 31, 2004, at 05:09:01 PM.
HTML; }