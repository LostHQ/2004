<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<div id="narrowscroll">
    <h2>$questName</h2>
    <b>Description:</b> A young boy who lives in Taverley has kicked his ball into the garden of a scary old lady. He asks you to get it back for him. This proves more difficult than it first sounds.
    <br><br>
    <b>Difficulty: <font color="Yellow">Intermediate</font></b>
    <br><br>
    <b>Length: <font color="Yellow">Medium</font></b>
    <br><br>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
    <li><div data-progress><canvas itemname="cheese" icon-size="25" show-label="inline"></canvas></div></li>
    <li><div data-progress><canvas itemname="leather_gloves" icon-size="25" show-label="inline"></canvas></div></li>
    </ul>
    <b>Starting Location:</b> South of the witch's house, Taverley<br>
    <br>
    <b>Reward:</b> 4 Quest points, 6,325 Hitpoints XP
</div>
<h3>Instructions:</h3>
<br>
<div data-progress>After talking to the boy, go to the main door and search for a key under one of the pots next to the door.</div>
<br><br>
<div data-progress>Use the key to unlock the door and go in. Walk upstairs to the witch's bedroom and grab her diary. Read it.</div>
<br><br>
<div data-progress>Go back to the main floor and then go down to the basement. Go through the gate, open, and search the wall cupboard for a magnet.</div>
<br><br>
<div data-progress>Go into the small room between the main one and the yard. Put on your leather gloves. Use the cheese with the mouse hole in the corner. Then quickly use your magnet with the mouse.</div>
<br><br>
<div data-progress>Now go into the yard. ALWAYS WATCH THE WITCH ON THE MAP. You must stay behind the hedges as she walks by. Make sure you stay near the center of the hedge.</div>
<br><br>
<div data-progress>Keep moving along the fence until you come to the shed door. Try opening it to find it is locked. Then keep going along the wall to the fountain. Remember to stay hidden when the witch approaches.</div>
<br><br>
<div data-progress>Check the fountain. It should say something like, 'It looks scenic.' Read the diary again to learn about the fountain. Then check the fountain again. If you do not get the key after this, try opening the door again, then reread the diary. It should definitely work after that.</div>
<br><br>
<div data-progress>Now creep back to the door and unlock the door to go in. Try to grab the ball, and the 'Witch's Experiment' will attack you.</div>
<br><br>
<div data-progress>If you leave the shed you will have to start the battle over. So make sure you bring food to eat during the fight, a good weapon, and decent armor.
<br>
1st form: Level 19 experiment<br>
2nd form: Level 30 spider<br>
3rd form: Level 42 bear<br>
4th and final form: Level 53 wolf</div>
<br><br>
<div data-progress>After defeating the experiment (congratulations), grab the ball and open the door. For the last time, sneak toward the house, then exit and return the ball to the boy for your reward.</div>
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/rW1R9e0xDDI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written by Gnat88. Thanks to Weezy, Deano, and Keystone for corrections.
<br><br>
This quest guide was entered into the database on Sat, Feb 28, 2004, at 04:32:32 PM by Monkeychris and CJH and was last updated on Sat, Oct 09, 2004, at 12:12:15 AM.
HTML; }