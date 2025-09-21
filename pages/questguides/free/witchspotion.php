<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> Become one with your darker side. Tap into your hidden depths of magical potential by making a potion with the help of Hetty the Rimmington witch.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Green">Short</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="burnt_meat" data-size="25"></canvas>&nbsp;&nbsp;Burnt meat (can be obtained during quest)</div><br></li>
<li><div data-progress><canvas data-itemname="eye_of_newt" data-size="25"></canvas>&nbsp;&nbsp;Eye of newt (or 3 coins to purchase)</div><br></li>
<li><div data-progress><canvas data-itemname="onion" data-size="25"></canvas>&nbsp;&nbsp;Onion (can be obtained during quest)</div><br></li>
</ul>
<b>Starting Location:</b> Rimmington's local witch
<br><br>
<b>Reward:</b> 1 Quest point, 325 Magic XP
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to the witch, Hetty, and she will tell you about getting the ingredients for the cauldron. You will need four items: an onion, burnt meat, an eye of newt, and a rat's tail.</div>
<br><br>
<div data-progress>Head to the Magic Shop in Port Sarim, Betty's Magic Emporium, and buy one eye of newt for 3gp.</div>
<br><br>
<div data-progress>Head south to the Food store and buy raw beef for 1gp. Buy one more if you think you may accidentally eat it. Alternatively, you may go east of the village and kill some big rats to obtain some meat.</div>
<br><br>
<div data-progress>Head west to the onion farm next to Melzar's Maze and grab an onion. Return to the village.</div>
<br><br>
<div data-progress>Find a small rat somewhere in the village and kill it for a Rat's Tail. (You must have started the quest to receive the tail)</div>
<br><br>
<div data-progress>Go to the house north of Hetty's. Use the meat on the range. If you have cooked it successfully, right click and use the cooked meat on the range again. You will get a burnt meat.</div>
<br><br>
<div data-progress>After getting the ingredients, return to Hetty's house and talk to her. She will tell you the cauldron is done and ask you to drink it. Click on the cauldron to drink it, and the quest is finished.</div>
$questComplete
This quest guide was written on RuneHQ by Henry-X. Thanks to Weezy, Corruptus, and Fran 2004 for corrections.
<br><br>
This quest guide was entered into the database on Sat, Feb 07, 2004, at 12:00:31 PM by Chownuggs and was last updated on Sun, Sep 21, 2025, at 07:44:28 PM by Halogod35.
HTML; }