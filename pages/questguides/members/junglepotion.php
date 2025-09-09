<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<br><br>
<b>Description:</b> Trufitus Shakaya of the Tai Bwo Wannai Village requires that you collect five special jungle herbs for a potion so he can commune with his Gods.
<br><br>
<b>Difficulty: <font color="Yellow">Intermediate</font></b>
<br><br>
<b>Length: <font color="Green">Short</font></b><br>
<h3>Required Quests:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>Druidic Ritual</div><br></li>
</ul>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>None</div></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="3doseantipoison" data-size="25"></canvas>&nbsp;&nbsp;1-2 Antipoison Potions</div><br></li>
<li><div data-progress>Weapon and armor to run past Jogres (level 48)</div></li>
</ul>
<b>Starting Location:</b> Tai Bwo Wannai's circular bamboo house
<br><br>
<b>Reward:</b> 1 Quest point, 775 Herblore XP
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>If you haven't already, consider buying an Antipoison potion from the nearby general store, Jiminua's Jungle Store., for 432 gold.</div>
<br><br>
<div data-progress>Talk to Trifitus about what he needs. He will tell you to go find an herb called Snake Weed. Head southwest through the village and cross the muddy land bridge. Go slightly west, look for a marshy jungle vine, and search it. Then, identify the herb. Go back to Trifitus.</div>
<br><br>
<div data-progress>The next herb he sends you after is called Ardrigal. Go northeast past the cliffs and follow the shore until you reach a small peninsula with palm trees. Search one of them to find and identify the herb. Head back to Trifitus.</div>
<br><br>
<div data-progress>The next herb is Sito Foil. Trifitus sends you south to where there's an ever-burning fire. Go around the semi-enclosed building and search the scorched earth just south of it. Obtain and identify the herb, then return.</div>
<br><br>
<div data-progress>The second-to-last herb is called Vocenia Moss. Head southeast to a small pile of rocks that is hard to miss. Search one of the plain rocks and id the moss. Go back for your final task.</div>
<br><br>
<div data-progress>The final herb is called Rogue's Purse. Of course the last is the hardest so make sure you have some armor and possibly food, then head north. You should see the entrance to a dungeon atop some cliffs. Head east around the cliffs, then back west and up until you reach the cave entrance.</div>
<br><br>
<div data-progress>Once you're inside, run past the Jogres or fight them as you head toward the southeast passage. Look for the fungus covered wall. Search it and identify the Rogue's Purse. Head back to Trifitus for the fifth and final time.</div>
<br><br>
<div data-progress>Once you return, Trifitus will thank you, reward you, and train you in Herblore. (Congratulations)</div>
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/SSZCkP2A3G4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written on RuneHQ by Gnat88.
<br><br>
This quest guide was entered into the database on Tue, Mar 02, 2004, at 10:16:05 PM by Weezy and was last updated on Wed, Mar 31, 2004, at 05:19:02 PM.
HTML; }