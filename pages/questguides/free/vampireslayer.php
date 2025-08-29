<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> The people of Draynor village live in constant terror. Their numbers are dwindling, all due to the foul creature lurking in the manor to the north known as a vampire.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="hammer" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="beer" data-size="25"></canvas>&nbsp;&nbsp;Beer (or 2 coins to buy during quest)</div><br></li>
<li><div data-progress>Decent armor and weapon to defeat a combat level 34 vampire</div></li>
</ul>
<b>Starting Location:</b> Draynor Village
<br><br>
<b>Reward:</b> 3 Quest points, 4,825 Attack XP
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Find Morgan in Draynor. It's not that hard; it's just a small village. He'll tell you about the vampire and ask you to kill it. He'll also tell you to go find his friend Dr. Harlow at the Jolly Boar Inn.</div>
<br><br>
<div data-progress>First, go upstairs and search the wall cupboard for a clove of garlic. Then go northeast of Varrock to the inn.</div>
<br><br>
<div data-progress>Talk to him and get him the beer he asks for. He'll tell you how to beat it and give you a stake.</div>
<br><br>
<div data-progress>Get everything you need and go to Draynor Manor. Head to the stairs that go down. Open the coffin and the Count should jump out and start attacking you.</div>
<br><br>
<div data-progress>Attack him until he has a full red bar, and the stake should automatically stab him. If not, make sure you have a hammer and the stake with you. If it still doesn't work, try using garlic on him or manually stabbing him with the stake.</div>
<br><br>
Once he's dead, you have finished the quest. (Congratulations!)
$questComplete
This quest guide was written on RuneHQ by Gnat88. Thanks to Weezy and stormer for corrections.
<br><br>
This quest guide was entered into the database on Sat, Feb 28, 2004, at 06:37:37 PM by Monkeychris and was last updated on Sun, Apr 11, 2004, at 02:25:25 PM.
HTML; }