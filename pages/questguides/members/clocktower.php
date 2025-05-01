<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> Help the confused Brother Kojo find the missing cogs and fix his watch tower. Search the dungeon using brawn and brains to correctly place the four cogs.
<br><br>
<b>Difficulty: <font color="Yellow">Intermediate</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="bucket_water" data-size="25"></canvas>Bucket of water or <canvas data-itemname="ice_gloves" data-size="25"></canvas>Ice gloves</div><br></li>
<li><div data-progress>A good weapon and armour to get past some level 53 ogres</div><br></li>
</ul>
<br>
<b>Starting Location:</b> Southwest of Ardougne Zoo
<br><br>
<b>Reward:</b> 1 quest point, 500 coins
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Brother Kojo; he should be in the clock tower just southwest of Ardougne Zoo.</div>
<br><br>
You need to get all four cogs. Remember, you can only carry one at a time.
<br><br>
<div data-progress>Go down the ladder, and you should be in a dungeon. In the next room, you will see colored blocks on the floor representing the general direction of each cog.</div>
<br><br>
Black Cog:
<br><br>
<div data-progress>Use the colored block to see where to go. Go down the path to a door. Behind the door, you will see level 2 giant spiders and the black cog surrounded by fires.</div>
<br><br>
<img src="img\questimages\clocktower1.png" height="200" width="200">
<br><br>
<div data-progress>Use the bucket of water or wear your ice gloves and pick it up. Now go back up the ladder to the <span data-floors="US">1st floor</span>.</div>
<br><br>
<div data-progress>On the <span data-floors="US">1st floor</span>, use your black cog on the black pole.</div>
<br><br>
Red Cog:
<br><br>
<div data-progress>Go to the colored bricks in the next room and go through the door. The red brick represents southeast.</div>
<br><br>
<div data-progress>Go through the door, and you'll reach a room with three level 53 ogres and the red cog.</div>
<br><br>
<img src="img\questimages\clocktower2.png" height="200" width="200">
<br><br>
<div data-progress>Go back to the ladder, go up to the <span data-floors="US">2nd floor</span>, and use the red cog on the red pole.</div>
<br><br>
White Cog:
<br><br>
<div data-progress>Go down the ladder to the dungeon and go to the room with the colored bricks. Now go through the door where the white brick represents northwest.</div>
<br><br>
<div data-progress>Continue going northwest to get the rat poison. After you've picked it up, go east to the rat cage.</div>
<br><br>
<div data-progress>At the rat cage, you will see two levers to open the two doors. Pull the levers to get into the cage.</div>
<br><br>
<img src="img\questimages\clocktower3.png" height="200" width="200">
<br><br>
<div data-progress>Inside the cage, you will see the rats' food trough. Use the rat poison on it, and the rats will eat from it and die. Then the room with the white cog will open.</div>
<br><br>
<img src="img\questimages\clocktower4.png" height="200" width="200">
<br><br>
<div data-progress>Pick up the white cog, go up the ladder, and you will appear outside the clock tower. Go inside and use the white cog on the white pole near the ladder, on the <span data-floors="US">3rd floor</span>.</div>
<br><br>
Blue Cog:
<br><br>
<div data-progress>Go down to the dungeon and to the room with the colored bricks. Go through the door where the blue brick represents southwest.</div>
<br><br>
<div data-progress>After going in, you'll reach a room with some monsters locked in cages, but unfortunately, the blue cog is locked in as well, with no doors. So you'll need to find another entrance to the blue cog.</div>
<br><br>
<img src="img\questimages\clocktower5.png" height="200" width="200">
<br><br>
<div data-progress>Go up the ladder in the room, and you will appear outside the clock tower. Now go northeast to where Brother Cedric is. Just west of him is a ladder.</div>
<br><br>
<img src="img\questimages\clocktower6.png" height="200" width="200">
<br><br>
<div data-progress>Go down the ladder and follow the passage to a wall. Go through the door and pick up the blue cog. Go up the ladder, go inside the clock tower, up the staircase to the <span data-floors="US">2nd floor</span>, and use the blue cog on the blue pole.</div>
<br><br>
<div data-progress>Now that all of the cogs have been placed, talk to Brother Kojo to receive your reward.</div>
$questComplete
This quest guide was written on RuneHQ by Firkløver. Thanks to patgil2003, Dravan, and wacp for corrections.
<br><br>
This quest guide was entered into the database on Sun, Apr 25, 2004, at 12:58:11 PM by stormer and CJH and was last updated on Fri, Nov 19, 2004, at 09:34:39 PM by MrStormy.
HTML; }