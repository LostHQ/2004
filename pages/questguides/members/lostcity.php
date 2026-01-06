<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<br><br>
<b>Description:</b> Legends tell of a magical lost city hidden in the swamps. Many adventurers have tried to find this city, but it is proving difficult. Can you unlock the secrets of the city of Zanaris?
<br><br>
<b>Difficulty: <font color="Red">Experienced</font></b>
<br><br>
<b>Length: <font color="Red">Long</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>31 Crafting</div><br></li>
<li><div data-progress>36 Woodcutting</div><br></li>
<li><div data-progress><canvas itemname="bronze_axe" icon-size="25"></canvas>&nbsp;&nbsp;Any hatchet</div><br></li>
<li><div data-progress><canvas itemname="knife" icon-size="25" show-label="inline"></canvas></div><br></li>
<li><div data-progress>Ability to kill a level 101 Tree spirit with limited armour and weapons (can be safespotted)</div></li>
</ul>
<b>Starting Location:</b> Speak to Adventurers in the Lumbridge Swamp, south of Lumbridge/Draynor forest
<br><br>
<b>Reward:</b> 3 Quest points, access to Zanaris, the ability to wield the Dragon Longsword and Dragon Dagger
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Head to the forest south of Draynor untill you find several characters gathered around a campfire. Several of them won't talk to you, however the Warrior will. Trick him into revealing why they are camping here and what they are looking for. He tell you to find the tree a leprechaun is hiding in.</div>
<br><br>
<img src="img/questimages/lostcity1.png" height="300" width="350">
<br><br>
<div data-progress>Directly west of the camp are a bunch of trees. Look for a tree that has the option "chop tree" instead of "chop down tree". When you attempt to chop it a leprechaun called Shamus will flee out of it. Run after him and ask him how you can find Zanaris. He'll tell you that you need a Dramen staff to enter the city.</div>
<br><br>
<img src="img/questimages/lostcity2.png" height="300" width="350">
<br><br>
<div data-progress>Prepare yourself at Draynor bank for the fight with a level 101 spirit without armor or a weapon. Bring good food and runes or jewellery to teleport; otherwise you will have to teleport to level 32 wilderness.</div>
<br><br>
You can also bring crafting materials to create leather armor<!-- or snelms-->. Other supplies depend on whether you will be using melee/magic/ranged.
<br><br>
Melee: Prayer potions<br>
Magic: Runes for strike/bolt/blast/wave spell or crumble undead<br>
Ranged: Arrows, unfinished bow, and bowstring
<br><br>
Armor and items allowed on Entrana includes: jewellery, capes, robes, hats, potions, and a knife.
<br><br>
<div data-progress>Head to Port Sarim <!--and right-click and select the quick travel option to get --> and talk to the Monks of Entrana to travel to Entrana (you will be searched<!-- when you click this still-->). They will only take you to Entrana if you have no weapons or armour with you.</div>
<br><br>
<div data-progress>Once on the Island go northeast to the bridge. Cross it and head west to the ladder. A Cave monk will warn you that once you go down the ladder, you can't go back up. The only exit will bring you to level 32 of the wilderness just north of the Boneyard.</div>
<br><br>
<img src="img/questimages/lostcity3.png" height="300" width="350">
<br><br>
<div data-progress>Go down the ladder and kill zombies (level 25) until you get a Bronze axe.</div>
<br><br>
<div data-progress>Run past the Greater demons (level 92) into the room south of them. If you have a high combat level and plan on using melee on the spirit, you could kill Greater demons (level 92) to get better weapons and armor. When you attempt to cut down the Dramen tree a Tree spirit (level 101) will pop up, which you have to kill in order to cut branches from the tree.</div>
<br><br>
<img src="img/questimages/lostcity4.png" height="300" width="350">
<br><br>
Strategy:
<br><br>
Melee: Wield the bronze axe, drink a Prayer potion if needed, and turn on "Protect from Melee".
<br><br>
Ranged and Magic: There is one safe spot in the room.
<br><br>
<img src="img/questimages/lostcity5.png" height="300" width="350">
<br><br>
<div data-progress>Once you have killed the Tree spirit, chop the Dramon tree to get a Dramen branch. Use a knife on the branch to make the "Dramen staff".</div>
<br><br>
<img src="img/questimages/lostcity8.gif" height="100" width="100">
<br><br>
<div data-progress>Teleport out or head into the room with the Greater demons to use the Magic door that brings you to level 32 of the wilderness just north of the Boneyard.</div>
<br><br>
<img src="img/questimages/lostcity6.png" height="300" width="350">
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/9tmB1Gz4y3M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written by Gnat88, Galalad, and Alfawarlord. Thanks to Jakesterwars, Lilroo503, and Khaaveren for corrections.
<br><br>
This quest guide was entered into the RuneHQ database on Tue, Mar 02, 2004, at 10:24:00 PM by Wiz-Master and CJH and was last updated on Thu, Oct 25, 2007, at 08:26:39 AM by Jakesterwars.
HTML; }