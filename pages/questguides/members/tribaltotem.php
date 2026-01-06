<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<br><br>
<b>Description:</b> Lord Handelmort of Ardougne is a collector of exotic artifacts. A recent addition to his private collection is a strange looking totem from Karamja. The Rantuki tribe are not happy about the recent disaperance of their totem.
<br><br>
<b>Difficulty: <font color="Yellow">Intermediate</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>21 Thieving</div></li>
<li><div data-progress><canvas itemname="coins_25" icon-size="25" show-label="inline" name-replace="60 coins"></canvas></div></li>
</ul>
<b>Starting Location:</b> Brimhaven
<br><br>
<b>Reward:</b> 1 Quest point, 1,250 Thieving XP, 5 cooked swordfish
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Kangai in the Shrimp and Parrot pub. He will tell you that his totem was stolen by Lord Handelmort.</div>
<br><br>
<div data-progress>Go to the house with a garden—the house with the gardener is just west of the Ardougne market, and there are guard dogs inside. Talk to the gardener, and he will tell you about the house's security. Try to open the door—you'll find that you can't enter through the front.</div>
<br><br>
<div data-progress>Go and talk to Wizard Cromperty, who is in a blue-colored house in the northeast part of Ardougne. Talk to him and ask him to teleport you—you will be teleported to the RPDT depot.</div>
<br><br>
<div data-progress>Search a box that is to be delivered to the mansion. You will get a label. Use the label on the next box, which is to be sent to the Wizard Tower. Then, talk to the RPDT employee and ask him to deliver the box. The boxes will be delivered.</div>
<br><br>
<div data-progress>Search the houses in the northwest—one of them contains a guide book. Pick it up and read it.</div>
<br><br>
<div data-progress>Return to the house where Wizard Cromperty is. Ask him to teleport you again—this time, you'll be teleported inside the mansion.</div>
<br><br>
<div data-progress>Pick the lock on the door. You will need to enter a password. The password is K U R T (not B R A D), and the door will open. Search the trap on the stairs, and go up.</div>
<br><br>
<div data-progress>Open the chest and search it—you will obtain the totem.</div>
<br><br>
<div data-progress>Return to Kangai, and he will reward you.</div>
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/KzpFuTFwL_Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written by Henry-X and Matty98. Thanks to Weezy, patgil2003, Mage101, and DRAVAN for corrections.
<br><br>
This quest guide was entered into the database on Fri, Feb 06, 2004, at 08:56:39 PM by Chownuggs and CJH and was last updated on Mon, Aug 02, 2004, at 08:51:07 AM.
HTML; }