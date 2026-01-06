<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<br><br>
<b>Description:</b> For several years now the dwarven black guard have been developing the lastest in projectile warfare. Now with the constant attack of goblin renegades, the dwarven troops who protect the mines need to put this secret weapon into action. Only with your help can the true power of this cannon be harnessed!
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Green">Short</font></b><br>
<h3>Items & Skills Needed:</h3>
None
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas itemname="lawrune" icon-size="25" show-label="inline" name-replace="Runes for Teleport to Falador"></canvas></div></li>
<li><div data-progress><canvas itemname="lawrune" icon-size="25" show-label="inline" name-replace="Runes for Teleport to Camelot"></canvas></div></li>
<li><div data-progress>20 Agility is required to cross the log bridge</div></li>
<li><div data-progress>Food at very low combat levels</div></li>
</ul>
<b>Starting Location:</b> Talk to the dwarf commander across the log bridge from Seers' Village
<br><br>
<b>Reward:</b> 1 Quest point, 750 Crafting XP, the ability to buy a multicannon for 750k (or individual pieces for 200k each), the ability to make cannonballs
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Get 6 railings from the commander after agreeing to help him fix the fence to keep out those pesky goblins.</div>
<br><br>
<div data-progress>Walk along the fence, searching each section, and repair each broken fence. (These are not the same locations as in RS1.) Below is a map of where the broken fences are located.</div>
<br><br>
<img src="img/questimages/dwarfcannon1.png">
<br><br>
<div data-progress>After quite a while of searching &mdash; and praying you didn't miss one &mdash; go back and talk to the commander. He'll reveal that his watchtower, just south of the base, has stopped communications. Go and investigate.</div>
<br><br>
<div data-progress>Grab the dwarf remains in the tower (poor little guy), and walk back to the commander with the bad news...</div>
<br><br>
<div data-progress>After informing the commander, he'll say that the dwarf who was killed had a son, Gilob. Now it's time to track down the dwarf kid and his captors.</div>
<br><br>
<div data-progress>Head southeast around the Fishing Guild to a cave &mdash; it's right by the windmill to Ardougne. Enter and go northwest to the corner room.</div>
<br><br>
<div data-progress>Search the crate. The child will jump out, talk for a brief moment, and run back to the commander. Head back to the commander.</div>
<br><br>
<div data-progress>Upon your return, you learn that the base cannon needs fixing. Take the toolkit and go into the shed. Inspect each part until you finally fix all of them. You MAY fail MULTIPLE times.</div>
<br><br>
<div data-progress>Talk to the commander once again. He sends you to South Ice Mountain, to the dwarf base there, to get vital information about the cannons. These guys are real organized, aren't they?</div>
<br><br>
<div data-progress>A Falador teleport is really handy right here. Make your way to the Ice Mountain. In the west building is a dwarf named Nulodion. He'll give you the ammo mould and instructions that he forgot to send before.</div>
<br><br>
<div data-progress>If you have the runes, teleport to Camelot. Once you get there by your chosen mode of transportation, return to the commander. Talk to him once more, and at long last, you receive your reward.</div>
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/yB4V1deH2WQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written on RuneHQ by Gnat88. Thanks to DNKevin and Neo 9001 for corrections.
<br><br>
This quest guide was entered into the database on Tue, Mar 02, 2004, at 10:05:02 PM by Weezy and was last updated on Thu, Apr 15, 2004, at 11:24:33 AM.
HTML; }