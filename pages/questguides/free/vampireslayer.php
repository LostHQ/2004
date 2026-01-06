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
<li><div data-progress><canvas itemname="hammer" icon-size="25" show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas itemname="beer" icon-size="25"></canvas>&nbsp;&nbsp;Beer (or 2 coins to buy during quest)</div><br></li>
<li><div data-progress>Decent armor and weapon to defeat a combat level 34 vampire</div></li>
</ul>
<b>Starting Location:</b> Draynor Village
<br><br>
<b>Reward:</b> 3 Quest points, 4,825 Attack XP
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Find Morgan in Draynor; he has the quest symbol above his house. He'll tell you about the vampire and ask you to kill it. He'll also tell you to go find his friend, Dr. Harlow, at the Jolly Boar Inn.</div>
<br><br>
<div data-progress>Go upstairs in his house and search the west wall cupboard for a clove of garlic.</div>
<br><br>
<div data-progress>Head to Varrock and go to the Jolly Boar Inn, which is northeast outside the city walls.</div>
<br><br>
<div data-progress>Talk to Dr. Harlow and get him the beer that he asks for. He'll tell you how to defeat the vampire. He then hands you a stake to hammer it through the vampire's undead heart.</div>
<br><br>
<div data-progress>When you are ready, make sure you have the garlic, stake, and hammer in inventory, and go to Draynor Manor. Head to the stairs that go down on the east side of the manor.</div>
<br><br>
<div data-progress>Open the coffin, and the Count should jump out and start attacking you.</div>
<br><br>
<div data-progress>Attack him until he has a full red bar, and  then use the stake on him to stab him through the heart. If not, make sure you have a hammer and the stake with you.</div>
<br><br>
Once he's dead, you have finished the quest. (Congratulations!)
$questComplete
This quest guide was written on RuneHQ by Gnat88. Thanks to Weezy, stormer, Fran 2004 for corrections.
<br><br>
This quest guide was entered into the database on Sat, Feb 28, 2004, at 06:37:37 PM by Monkeychris and was last updated on Sun, Sep 21, 2025, at 06:42:25 PM by Halogod35.
HTML; }