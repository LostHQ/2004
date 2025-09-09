<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<!-- <a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a> 
<br><br> -->
<b>Description:</b> After saving the holy man Drezel, he's seeking some assistance again.
This time he has a special request for any adventurous sorts to search for the Druid 'Filliman Tarlock' and brave the terrors that infest the swamp of Mort Myre.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b><br>
<h3>Required Quests:</h3>
<ul style="list-style-type: none;">
    <li><div data-progress>Priest In Peril</div><br></li>
    <li><div data-progress>Restless Ghost</div><br></li>
</ul>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
    <li><div data-progress>18 Crafting</div><br></li>
    <li><div data-progress><canvas data-itemname="amulet_of_ghostspeak" data-size="25" data-show-label="inline"></canvas></div><br></li>
    <li><div data-progress><canvas data-itemname="silver_bar" data-size="25" data-show-label="inline"></canvas></div><br></li>
    <li><div data-progress><canvas data-itemname="sickle_mould" data-size="25" data-show-label="inline"></canvas></div><br></li>
    <li><div data-progress>The ability to defeat a level 30 monster</div><br></li>
</ul>
<b>Starting Location:</b> Underground passageway of Sarodomin Temple (where you finish the Priest in Peril Quest)
<br><br>
<b>Reward:</b> 2 Quest points, 2,000 Defence XP, 2,000 Hitpoints XP, 3,000 Crafting XP, a Blessed Silver Sickle, and a Druid Pouch (and with it, the ability to kill Ghasts in swamp)
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Drezel (in the underground section entrence to Morytania).</div>
<br><br>
<div data-progress>He will explain that his friend, Filliman, has been missing and needs to be able to help out travelers.</div>
<br><br>
<div data-progress>Go south to the gate and click "No, just go through the gate".</div>
<br><br>
<div data-progress>Run (or walk, easier to have 100% energy) all the way down south-west until you see a small circular island. Run around to the end of it and click "Jump Bridge". If you fail, you will take some damage. (Note: higher agility seems to help you cross without falling, as with all other agility obstacles.)</div>
<br><br>
<div data-progress>Pick up the Washbowl and there will be a mirror under it, searching in the Grotto will allow you to find the Journal, sorry, I left this out!</div>
<br><br>
<div data-progress>Click on the black part of the grotto (so when enter grotto is selected) and Filiman comes out. You have to have your ammy of ghostspeak on. You have to convince him that he is a ghost, wich is finally done by using the mirror on him.</div>
<br><br>
<div data-progress>After he finishes talking, use the Journal (or "give" it to him) with him and he'll explain he wants to become a Nature Spirit and will need 3 things.</div>
<br><br>
<div data-progress>He will give you a spell and tell you that you need to be blessed. Go up to Drezel (where he is at the entrance to Morytania) and ask him to bless you. Note that he mentions that you have "Something of the Faith" about you.</div>
<br><br>
<div data-progress>Once you are blessed, go back down to the Grotto (Filliman's Home) and talk to him.</div>
<br><br>
<div data-progress>Walk north-west until you see some rotten logs on ground. Note that these are not items. Click "Cast Druid Spell" on the scroll Filiman gave to you when you are standing right next to a log and some fungi will appear on the log. Examine the used spell to solve the last of the puzzles.</div>
<br><br>
<div data-progress>Take the Fungi and go back to Filliman.</div>
<br><br>
<div data-progress>Use the Fungi with the west stone, the Used Druid Spell with the East Stone, and place yourself on the south stone. He will then ask you to enter the grotto (right-click the black part and click Enter Grotto).</div>
<br><br>
<div data-progress>Search the grotto and Filliman comes out. He will transform himself into a nature spirit. Then he will explain how to kill the Ghasts, by using a filled druid pouch on them, to materialize them. After that you can kill them normally. He will tell you that you need to make a Silver Sickle so he can bless it for you.</div>
<br><br>
<div data-progress>Go to Al Kharid Crafting Shop and buy a Silver Sickle Mould.</div>
<br><br>
<div data-progress>Use a Silver Bar with the Furnace and make the Silver Sickle. Making the Silver Sickle gives you 50 Crafting Exp. (thanks to Ltangel).</div>
<br><br>
<div data-progress>Go back to Filliman and talk to him in his Grotto.</div>
<br><br>
<div data-progress>He will bless the sickle and give you a Druid Pouch, telling you that you need to defeat three Ghasts to help him.</div>
<br><br>
<div data-progress>Make sure your Sickle is un-equipped, as you can now use it to cast the Bloom Spell.</div>
<br><br>
<div data-progress>Go get three more fungi, branch cuttings or golden pears and prepare to fight some Ghasts.</div>
<br><br>
<div data-progress>Kill three Ghasts and go back and talk to him.</div>
<br><br>
Quest Completed!
$questComplete
<!-- <span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/UjPa7n7Ymj8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr> -->
This quest guide was written by Rekeri. Thanks to Sporhund, Stormer, ossie000, the_peleton, Ju Juitsu, Cricket55416, malku_raj, DRAVAN, trekkie, and SchmackyEvil for corrections.
<br><br>
This quest guide was entered into the RuneHQ.com database on Tue, Jul 13, 2004, at 02:18:08 PM by Pirate Bob49 and CJH and was last updated on Wed, Nov 02, 2005, at 08:37:48 PM by DRAVAN.
HTML; }