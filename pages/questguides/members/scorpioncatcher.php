<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> Thormac has lost his rare lesser kharid scorpions after leaving their cage door open. These scorpions have hidden in areas that are rather difficult to get into. You will have to overcome various challenges (and drink a lot of beer) to get all the scorpions back. If you manage to help him Thormac will improve your battle staffs.
<br><br>
<b>Difficulty: <font color="Red">Experienced</font></b>
<br><br>
<b>Length: <font color="Red">Long</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>31 Prayer</div></li>
<li><div data-progress>Completion of Alfred Grimhand's Barcrawl</div><br></li>
<li><div data-progress><canvas data-itemname="dusty_key" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress>The ability to go deep in to the Taverley Dungeon</div></li>
</ul>
<br>
<b>Starting Location:</b> Thormac the wizard in the Wizard Tower south of Seers Village
<br><br>
<b>Reward:</b> 1 quest point, 6,625 Strength XP, Thormac will enchant battlestaves into mystic staves for 40,000 coins
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<img src="img\questimages\scorp1.png" height="200" width="200">
<br><br>
<div data-progress>Speak to Thormac. He tells you that he has lost his scorpions and wants you to get them back. He will give you a cage and tell you that the Seer in Seers Village could help you in locating them. You don't have to go back to the Seer every time in RS2, but I recommend it so you get the full experience of the quest.</div>
<hr>
First Scorpion
<br><br>
<div data-progress>Speak to the Seer and he will tell you that the scorpion is between the Black Demons and Poison Spiders. This is in the Taverley Dungeon.</div>
<br><br>
<div data-progress>Go to the bank and get out armor, a weapon, the Dragonfire Shield, an antipoison potion, the scorpion cage, a Dusty Key if you already have it, and food. Head to Taverley and go South. If you are a low combat level you might want to save your energy so you can run past higher-level creatures in the dungeon.</div>
<br><br>
<img src="img\questimages\scorp2.png" height="200" width="200">
<br>
<img src="img\questimages\scorp3.png" height="200" width="200">
<br><br>
<div data-progress>Proceed to the part of the dungeon with the Poison Scorpions. If you need the Dusty Key, instead of going across the bridge to the Chaos Dwarf island continue down the little path to the area with a lot of Black Knights.</div>
<br><br>
<div data-progress>Take a left when you can and you will find a jail. Kill the Jail Guard and take his key. Unlock the cell with the explorer in it and talk to him. He will give you the Dusty Key. Go back out to the Poison Scorpions and this time cross the bridge and continue through the dungeon until you get to the door after the Lessers. Use the Dusty Key with the door and go through.</div>
<br><br>
<div data-progress>Run past the Blue Dragons if you need to and then continue until you get to Black Demo ns. Run past them and go into an area with Poison Spiders. Look for a wall you can push and come to a room with the scorpion. Use the cage with the scorpion and you've got the first scorpion.</div>
<br><br>
<img src="img\questimages\scorp4.png" height="200" width="200">
<hr>
Second Scorpion
<br><br>
<div data-progress>Run out of the dungeon and go to the bank and withdraw about 268 gp. The next scorpion is in the Barbarian Outpost. Go west and then north to get to the waterfall. Head north of here and you will find the Outpost. Try to open the gate and a barbarian will tell you only barbarians are allowed in. Tell him you are a barbarian and he will tell you to do the barcrawl.
<br>
Skip the next two steps if you already have completed the barcrawl.</div>
<br><br>
<img src="img\questimages\scorp5.png" height="200" width="200">
<br><br>
<div data-progress>Go back to Seers Village and go to the bar there. Use the barcrawl card with the bartender then drink what he gives you and leave. Go to Falador next. Do the same with the bar here. Next head east to Varrock. There are two bars here, one in town and one northeast of it near the wilderness. Next head south then west to Port Sarim. Get the bar here then get on a ship to Karamja. Once there get the bar from the Pirate Treasure quest and then cross over the volcano to Brimhaven. In southern Brimhaven, there is a bar. Then head to Ardougne by boat from northern Brimhaven. Get off the boat and go south to Yanille. Get the bar here then head back north on the other side of the river and get the bar in Ardougne where the Temple of Ikov start is.</div>
<br><br>
<img src="img\questimages\scorp6.jpg" height="200" width="200">
<br><br>
<div data-progress>Last is the bar in the Grand Tree. Go north to the Gnome Stronghold and up to the <span data-floors="US">2nd floor</span> of the Grand tree. Now you should be done go back to the Outpost and hand over your card.</div>
<br><br>
<img src="img\questimages\scorp7.bmp" height="200" width="200">
<br><br>
<div data-progress>The barbarian will let you in and in the building just infront of the gate, the scorpion is wandering around.</div>
<br><br>
<img src="img\questimages\scorp8.png" height="200" width="200">
<hr>
Third Scorpion
<br><br>
<div data-progress>The last scorpion is in the Monastery north of Falador. If you have the 31 Prayer, then go right away, go up the ladder and capture the scorpion. If not then train prayer and then go and get him.</div>
<br><br>
<img src="img\questimages\scorp9.png" height="200" width="200">
<br><br>
<div data-progress>When you have all of the Scorpions, head back to the Wizard and he will give you your reward.</div>
$questComplete
This quest guide was written by 70347, Firklover, and irish_buddha. Thanks to Funkymetal for corrections.
<br><br>
This quest guide was entered into the database on Sun, May 02, 2004, at 02:08:30 PM by Cav103 and CJH and was last updated on Mon, Aug 02, 2004, at 08:36:41 AM.
HTML; }