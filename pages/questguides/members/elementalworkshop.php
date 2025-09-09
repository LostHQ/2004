<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<br><br>
<b>Description:</b> Hundreds of years ago a mineral was found that had the ability to change the property of magic. The magicians, fearing the effect this may have on there profession, sealed this workshop forever; or so they had hoped. See if you can rediscover the lost knowledge of elemental ore.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Green">Short</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>20 Mining</div><br></li>
<li><div data-progress>20 Smithing</div><br></li>
<li><div data-progress>20 Crafting</div><br></li>
<li><div data-progress>A sharp object like a knife or sword</div><br></li>
<li><div data-progress><canvas data-itemname="bronze_pickaxe" data-size="25"></canvas>&nbsp;&nbsp;Any pickaxe</div><br></li>
<li><div data-progress><canvas data-itemname="leather" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="needle" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="thread" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="coal" data-size="25"></canvas>&nbsp;&nbsp;4 coal</div><br></li>
<li><div data-progress><canvas data-itemname="hammer" data-size="25" data-show-label="inline"></canvas></div><br></li>
</ul>
<b>Starting Location:</b> Search the bookcase on the east wall in the house southwest of the bank in Seers' Village
<br><br>
<b>Reward:</b> 1 Quest point, 5,000 Crafting XP, 5,000 Smithing XP, access to the Elemental Workshop, Elemental Shield (+6 Magic Defence bonus), as well as the ability to make and wield them
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Go to the house southwest of the bank in Seers' Village.</div><br><br>
<img src="img/questimages/elemental1.png" height="200" width="200">
<br><br>
<div data-progress>Search the bookcase on the east wall.</div>
<br><br>
<img src="img/questimages/elemental2.png" height="200" width="350">
<br><br>
<div data-progress>After you read the Battered Book, use your knife on the book and you will get a Battered Key. Do not drop the Battered Book — you will need it later to make the Elemental Shield.</div>
<br><br>
<div data-progress>Go to the building north, which has an anvil in it, and use the key on the Odd Looking Wall. Then go down the stairs.</div>
<br><br>
<img src="img/questimages/elemental4.png" height="200" width="200">
<br><br>
A map of the places for some of the next steps:
<br><br>
<img src="img/questimages/elemental5.png" height="400" width="400">
<br><br>
<div data-progress>When you're in, go down the west path and try to mine a rock. You will be attacked by a level 35 Earth Elemental. Kill the Earth Elemental, and it will drop an Elemental Ore — pick it up.</div>
<br><br>
<img src="img/questimages/elemental6.png" height="200" width="200">
<br><br>
<div data-progress>Now go to the north passage from where you came in. Turn the valves so they are like this: First, you need to turn the right valve, then the left valve, to make the waterwheel move. Then pull the lever. (The right valve is the first, and the second is the left valve.)</div>
<br><br>
<img src="img/questimages/elemental7.png" height="200" width="350">
<br><br>
<div data-progress>After that, go to the east passage and fix the bellows. This is where the leather, thread, and needle come in. (Leather can be found randomly in one of the crates)</div>
<br><br>
<img src="img/questimages/elemental8.png" height="200" width="400">
<br><br>
<img src="img/questimages/elemental13.png" height="200" width="300">
<br><br>
<div data-progress>After that, search all the crates for a Stone Bowl (you only need to search each crate once). The location is different for each player. When you find it, go down the south passage.</div>
<br><br>
<div data-progress>Use the bowl on the lava, and you will get a Stone Bowl filled with lava. Then use the bowl with lava in it on the furnace.</div>
<br><br>
<img src="img/questimages/elemental9.png" height="200" width="350">
<br><br>
<div data-progress>Go back to the bellows and pull the switch.</div>
<br><br>
<div data-progress>Go back to the furnace and use your Elemental Ore and 4 Coal on the furnace.</div>
<br><br>
<img src="img/questimages/elemental10.gif" height="300" width="200">
<br><br>
<div data-progress>Then go back to the center and use your Elemental Metal on the workbench. You will need to have the Battered Book in your inventory to make the shield, or it will tell you that you need instructions.</div>
<br><br>
<img src="img/questimages/elemental11.png" height="200" width="300">
<br><br>
<div data-progress>When you've made the Elemental Shield, you've completed the quest.</div>
<br><br>
Note: You can make more Elemental Shields after you've finished the quest.
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/an8AqvLHCek" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written by pj. Thanks to IglooGuy, Hagge, Angelinblack, Shinraz, villike, Nitr021, wackyax16, jdude720, my_mulisha, Xjezusx1, beaverboy40, jakesterwars, cafetero, and Im4eversmart for corrections.
<br><br>
This quest guide was entered into the RuneHQ.com database on Wed, Jun 02, 2004, at 06:22:07 PM by Cav103 and CJH and was last updated on Mon, Oct 02, 2006, at 02:40:17 PM by Im4eversmart.
HTML; }