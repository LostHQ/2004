<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> The black knights are up to no good. You are hired by the white knights to spy on them and uncover their evil scheme.
<br><br>
<b>Difficulty: <font color="Yellow">Intermediate</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>12 Quest points</div><br></li>
<li><div data-progress><canvas data-itemname="cabbage" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="bronze_med_helm" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="iron_chainbody" data-size="25" data-show-label="inline"></canvas></div><br></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>Food and/or equipment to run past aggressive level 33 Black Knights</div></li>
</ul>
<b>Starting Location:</b> <span data-floors="US">3rd floor</span> of White Knights' Castle in Falador
<br><br>
<b>Reward:</b> 3 Quest points, 2,500 coins
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Sir Amik Varze. He will tell you that the Black knights are planning to destroy the White knights. He will ask you to spy on them. Accept his challenge.</div>
<br><br>
<div data-progress>The next place you need to go is the Monastery. It is located east of Ice Mountain. Once there, go north and you will see some Cabbages. Pick one (or two in case you misclick and eat a cabbage) up.</div>
<br><br>
<div data-progress>Now it's time to start your mission. Go to the Black Knights Fortress which is located on the north side of Ice Mountain. If you have the Bronze medium helmet and the Iron chainmail right now, wear them.</div>
<br><br>
<div data-progress>After donning them, open the sturdy door in the central part of the fortress, facing the south. Push the wall just behind the door and go up the ladder.</div>
<br><br>
<div data-progress>After you push the wall, climb the 2 ladders to get to the top floor. Climb down the ladder on your southeast side.</div>
<br><br>
<div data-progress>Open the door on your east side. Open the other door and climb up the ladder. This room has two cannons and a Black knight.</div>
<br><br>
<div data-progress>Climb down the ladder on your east side. You will now be in a room with a Zamorak altar. Open the door and a Black knight will attack you. Either kill him or ignore him, then keep going. Climb the ladder on your southwest. Now you will be in a small room.</div>
<br><br>
<div data-progress>Now we will start spying. Click the 'Listen-at grill' option. The witch will say that the secret weapon is almost ready. She will need the last ingredient which is a Cabbage that grew in Draynor Manor. She will say that if the goblin fetches the wrong Cabbage, the secret weapon will be destroyed. That's how you'll sabotage the weapon!</div>
<br><br>
<div data-progress>Go back downstairs to the main floor and push the wall.</div>
<br><br>
<div data-progress>Now it's time to open the door on your east. One of the guards will say that the Black knights are having an important meeting and they will kill everyone who gets in. Say that you are brave and go in.</div>
<br><br>
<div data-progress>One of the Black knights will attack you. Either kill him or go up the ladder. Walk east and south and push the wall. You will see a hole. Remember the Cabbage you picked earler? Use that Cabbage on the hole. The Cabbage will fall into the cauldron and destroy the weapon. Now your job is done.</div>
<br><br>
<div data-progress>Go back and talk to Sir Amik Varze. He will reward you.</div>
$questComplete
This quest guide was written on RuneHQ by Henry-x. Thanks to DNKevin, Weezy patgil2003, MarilynManson, Nitr021, Ozzy, and pokemama for corrections.
<br><br>
This quest guide was entered into the database on Sat, Feb 07, 2004, at 10:08:20 PM by Chownuggs and CJH and was last updated on Sat, Feb 05, 2005, at 06:17:02 AM by nitro21.
HTML; }