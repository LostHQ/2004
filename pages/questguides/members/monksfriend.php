<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<div id="narrowscroll">
    <h2>$questName</h2>
    <b>Description:</b> A monk's child has had their blanket stolen. Find the thieves' den and return the blanket, then help Brother Omad organise the drinks for the child's birthday party.
    <br><br>
    <b>Difficulty: <font color="Green">Novice</font></b>
    <br><br>
    <b>Length: <font color="Green">Short</font></b>
    <br><br>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
    <li><div data-progress><canvas itemname="jug_water" icon-size="25" show-label="inline"></canvas></div></li>
    <li><div data-progress>
        <canvas itemname="logs" icon-size="25" show-label="inline"></canvas> or
        <canvas itemname="steel_axe" icon-size="25" show-label="inline" name-replace="Any hatchet"></canvas>
    </div></li>
    <li><div data-progress>Food or armor to run past some thieves (level 14 and 26)</div></li>
    </ul>
    <b>Starting Location:</b> The monastery south of Ardougne Zoo
    <br><br>
    <b>Reward:</b> 1 Quest point, 2,000 Woodcutting XP, 8 Law Runes
</div>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Omad and learn of his sleepless nights due to the crying child. He tells you that the thieves (level 14s and a 26) who stole the blanket are hiding in a secret cave.</div>
<br><br>
<div data-progress>Go northwest to a ring of stones (just east of the Gnome Battlefield). A ladder will appear—climb down into the den.</div>
<br><br>
<div data-progress>Take the first turn inside. Fight the thieves if necessary, then head to the table and retrieve the blanket. Return to Brother Omad.</div>
<br><br>
<div data-progress>Talk to him twice to learn that Brother Cedric hasn't returned with the wine for the child's party. Omad assumes Cedric probably got drunk and lost in the forest. (Poor guy.)</div>
<br><br>
<div data-progress>Go just north to find Cedric. He needs a drink of water, so use your jug with a sink in one of the Khazard guardhouses south of the monastery. Then return and use the jug on Cedric.</div>
<br><br>
<div data-progress>He'll ask you for wood to fix his broken cart—hopefully you already have it. Give him the wood and return to Omad one last time.</div>
<br><br>
<div data-progress>Talk to him and he'll give you the runes. Then, you party. Unfortunately, you can't burst the party balloons, but those monks really know how to get down, party, and boogie like there's no tomorrow.</div>
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/RGtFydVFvac" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written on RuneHQ by Gnat88.
<br><br>
This quest guide was entered into the database on Tue, Mar 02, 2004, at 10:10:53 PM by Weezy and was last updated on Wed, Mar 31, 2004, at 05:20:06 PM.
HTML; }