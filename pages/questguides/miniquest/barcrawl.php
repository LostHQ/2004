<?php
function getQuestGuide($questName) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> Complete this Fremennik 'rite of passage' to gain access to the Barbarian Outpost agility course.
<br><br>
<b>Difficulty: <font color="Green">Easy</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas itemname="coins_100" icon-size="25"></canvas>&nbsp;&nbsp;208 coins</div><br></li>
<li><div data-progress>Food for players with low HP</div></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas itemname="lawrune" icon-size="25"></canvas>&nbsp;&nbsp;Teleport to Camelot</div><br></li>
<li><div data-progress><canvas itemname="lawrune" icon-size="25"></canvas>&nbsp;&nbsp;Teleport to Falador</div><br></li>
<li><div data-progress><canvas itemname="lawrune" icon-size="25"></canvas>&nbsp;&nbsp;Teleport to Varrock</div><br></li>
<li><div data-progress><canvas itemname="lawrune" icon-size="25"></canvas>&nbsp;&nbsp;Teleport to Ardougne</div><br></li>
</ul>
<b>Starting Location:</b> Barbarian Outpost agility course
<br><br>
<b>Reward:</b> Access to the Barbarian Outpost agility course
<br><br>
<hr>
<h3>Instructions:</h3>
<div data-progress>Go to Barbarian Outpost and talk to the barbarian at the gate to recieve your barcrawl card.</div>
<br><br>
<div data-progress>Go to Seers Village and go to the bar there. Use the barcrawl card with the bartender then drink what he gives you and leave.</div>
<br><br>
<div data-progress>Go to Falador next. Do the same with the bar here.</div>
<br><br>
<div data-progress>Next head east to Varrock. There are two bars here, one in town and one northeast of it near the wilderness.</div>
<br><br>
<div data-progress>Next head south then west to Port Sarim. Get the bar here then get on a ship to Karamja.</div>
<br><br>
<div data-progress>Once there get the bar from the Pirate Treasure quest and then cross over the volcano to Brimhaven.</div>
<br><br>
<div data-progress>In southern Brimhaven, there is a bar.</div>
<br><br>
<div data-progress>Then head to Ardougne by boat from northern Brimhaven. Get off the boat and go south to Yanille. Get the bar here then head back north on the other side of the river and get the bar in Ardougne where the Temple of Ikov start is.</div>
<br><br>
<div data-progress>Last is the bar in the Grand Tree. Go north to the Gnome Stronghold and up to the <span data-floors="US">2nd floor</span> of the Grand tree. Now you should be done.</div>
<br><br>
<div data-progress>Go back to the Barbarian Outpost and hand over your card.</div>
<br><br>
HTML; }