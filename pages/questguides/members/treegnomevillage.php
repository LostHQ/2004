<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<a href="#zombiemusiq" class="c">ZombieMusiq Video Guide at bottom of page!</a>
<br><br>
<b>Description:</b> The tree gnomes are in trouble. General Khazard's forces are hunting them to extinction. Find you way through the hedge maze to the gnomes secret treetop village. Then help the gnomes fight Khazard and retrieve the orbs of protection.
<br><br>
<b>Difficulty: <font color="Yellow">Intermediate</font></b>
<br><br>
<b>Length: <font color="Red">Long</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="logs" data-size="25"></canvas>&nbsp;&nbsp;6 logs</div><br></li>
<li><div data-progress>The ability to defeat a level 112 Khazard Warlord</div><br></li>
</ul>
<b>Starting Location:</b> King Bolren, next to the huge spirit tree in the middle of the Tree Gnome Maze
<br><br>
<b>Reward:</b> 2 Quest points, 11,500 Attack XP, a gnome amulet, the ability to use the spirit trees to travel
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Find Elkoy near the northwest corner of the maze. He invites you to try the maze. Once you conquer it, talk to King Bolren. He'll ask you to help their cause by retrieving 1 of 3 orbs of protection. Agree and you'll be led to battlefield.</div>
<br><br>
<div data-progress>Talk to Commander Montai to get the latest update with the battle. He'll ask for 6 loads of wood to repair defences. Assuming you have your 6 logs with you, talk to him again. He will thank you. Speak to him once more, and he'll ask you to find the coordinates from his trackers to fire the ballista at the Khazard stronghold.</div>
<br><br>
<div data-progress>Head north to find the first tracker. He's in an oblong building in the northeast part of the Khazard camp. You'll learn that the Y-coordinate is 5.</div>
<br><br>
<div data-progress>Head west, above the long building. The second gnome should be just along the wall. You'll find that the height coordinate is 4.</div>
<br><br>
<div data-progress>Head south on the outskirts of the camp to find the 3rd tracker. He's a little "off" and gives you a strange riddle to decipher the X-coordinate. Luckily, I'm a master riddler and figured it out.</div>
<br><br>
<div data-progress>"More than me" — Higher than 1, "Less than our feet" — Less than 4, "More than we" — More than 2, and "Khazard's men are beat" — This obviously refers to me as beating the men, NOT, well anyway he means 3 because thats the only number left. Return to the Gnome camp.</div>
<br><br>
<div data-progress>Go directly to the ballista and use the coordinates you have learned.<br>
Height=4 X=3 Y=5</div>
<br><br>
<div data-progress>Assuming you entered these in right, go the main building and climb over the wall. It's the northwest building. Be prepared to get rid of a level 48 Khazard commander, one downstairs and one up.</div>
<br><br>
<div data-progress>Upon their defeat, open the chest on the <span data-floors="US">2nd floor</span> to get the orb. Return to Elkoy at the maze entrance and he'll lead you back in.</div>
<br><br>
<div data-progress>Speak to Bolren again. He is briefly thankful for your return, but you'll find that his family has been killed, and the other two orbs were taken by Khazard's troops. Elkoy will guide you out, go north past the Khazard camp, then northwest and past level 64 wolves to face the Warlord who holds the orbs.</div>
<br><br>
<div data-progress>Run past his guards and attack him. You should have food, which you should run and eat if your health gets low. Ranging and maging work well on him, since he cannot leave a certain zone. Weaken him until you run out or he's fairly weak, then charge him and kill him.</div>
<br><br>
<div data-progress>Once he is dead (congratulations!), you'll receive the orbs. Return once again to Elkoy, then to Bolren. He'll tell you about the Spirit Trees and give you your reward.</div>
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/ZZ3Mrs8-39Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written by Gnat88.
<br><br>
This quest guide was entered into the database on Tue, Mar 02, 2004, at 10:20:57 PM by Weezy and CJH and was last updated on Sat, Oct 09, 2004, at 12:09:17 AM.
HTML; }