<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> The Imperial Guards have had struggle with the troll army, The trolls have taken Hostages, Godric and Mad Eadgar, find your way into the stronghold and save them.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>Able to hold your own against trolls (can have a max hit of 42), Protect from Missiles if you wish to fight the trolls</div><br></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>Prayer 43+ is helpful, Prayer potion, good armour/weapon</div><br></li>
</ul>
<b>Starting Location:</b> Imperial Guard's Tent, Speak to Denulth
<br><br>
<b>Reward:</b> 1 Quest point, a Law Talisman, and once you have freed the captured man you can trade him logs for stews up on the hill
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>
    Speak to Denulth of Burthrope he will tell you about the backfire of thier planned raid.<br>
    Ask him if theres anything you can do to help, he will tell you of a captured soldier, Godric. Tell him you'll go up to the Troll Stronghold to save Godric.
</div>
<br><br>
<div data-progress>
    Grab your Climbing boots, or 12 gp if you lost them, head to the secret pass up the mountain from the last quest,<br>
    Death Plateau, Speak to Tenzing if you lost your boots, continue up the path once you have them.
</div>
<br><br>
<div data-progress>
    A way up the path will fork off, climb over the rocks and head east, go inside the Arena Gate and speak to "Dad" he will tell you need to fight him to continue on, accept his challenge.
</div>
<br><br>
<div data-progress>
    Turn on protect from melee, and fight him, use your best attacks on him up until you kill him, he will hit you hard if you don't have protect from melee on.<br>
    He smashes you and you'll go flying into a wall nearby, he hits you from 7-11 and from flying into the wall he hits you 15-25.<br>
    There is a couple safe places to use range or magic, one is near the gate, although it doesn't always work.
</div>
<br><br>
<div data-progress>
    Once he's nearly dead he will forfeit. I highly recommend you go back and charge your prayer points, or use a prayer potion.<br>
    Just make sure you have full prayer.
</div>
<hr>
<div data-progress>
    After defeating dad, (and you have full prayer) continue out the exit, and scurry into a cave, nothing much in here, three mountain trolls level 71, go by, don't waste your hit points.<br>
    Leave the cave.
</div>
<br><br>
<div data-progress>
    Now you be in a huge thing that looks like a spiral on the outside.<br>
    Stay on the outer part of the spiral, don't get curious and go up it.<br>
    Once you go so far, you will see a group of thrower trolls, turn protect from missiles on and run by.
</div>
<br><br>
<img src="/img/questimages/trollstronghold_1.png" width="400">
<br><br>
<img src="/img/questimages/trollstronghold_2.png" width="400">
<br><br>
<div data-progress>
    Enter the next area, it looks like a troll market place.<br>
    Run all the way north and go inside the stronghold.
</div>
<br><br>
<div data-progress>
    Go all the way South and once you see a wooden door walk inside and prepare for a major fight... kill one of the troll generals.
</div>
<br><br>
<img src="/img/questimages/trollstronghold_3.png" width="400">
<br><br>
<div data-progress>
    Before you go in, turn on protect from melee, then charge in, if you don't turn protect from melee on, you will be hit.... hard....it hit me with a 44,<br>
    I saw the troll kill a level 120 player in three hits.(he wasn't using prayer) This is when prayer potions come in handy.<br>
    Outside of the area each general is in, there is a safe spot to range or mage, just stay out of the inner part (its out of their wander zone)<br>
</div>
<br><br>
<img src="/img/questimages/trollstronghold_4.png" width="400">
<br><br>
<div data-progress>
    Once you have killed it quickly grab a key that he drops, (hurry one second spawn rate)
</div>
<br><br>
<div data-progress>
    Go back through the wooden door and go all the way north and go down a stone staircase.<br>
    You will see a cell door, with a stone staircase inside, unlock the door and go down now your in a big blank seeming room pickpocket or kill the two trolls, berry and twig, or kill them, pick up the cell keys, and unlock both cells.<br>
    Follow Godric and Mad Eadgar outside.
</div>
<br><br>
<img src="/img/questimages/trollstronghold_5.png" width="400">
<br><br>
<div data-progress>
    You will appear at a secret entrance, which you can re-enter for reasons of your own.<br>
    Follow the path east then south, you'll know where you are, head back to Burthrope and go to smithy, and speak to Dunstan for your reward.
</div>
$questComplete
This quest guide was written by greatgecko,mhoi, and DRAVAN. Thanks to Penneepster for corrections.
<br><br>
This quest guide was entered into the database on Tue, Aug 31, 2004, at 10:20:22 PM by DRAVAN and was last updated on Mon, Dec 06, 2004, at 10:18:36 PM by MrStormy.
HTML; }