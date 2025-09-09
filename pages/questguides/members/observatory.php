<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<br><br>
<b>Description:</b> The observatory in South West Ardougne has been ransacked by a family of nearby goblins. Can you help the professors to rebuild it? Use your skills at crafting to make the various parts, and fight your way through the cavern under the observatory. Use the telescope and the stars hold a secret for you.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Green">Short</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>10 Crafting</div><br></li>
<li><div data-progress><canvas data-itemname="bronze_bar" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="molten_glass" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="woodplank" data-size="25"></canvas>&nbsp;&nbsp;3 planks</div><br></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="3doseantipoison" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress>Food or armor to run past a level 42 Goblin guard</div><br></li>
</ul>
<b>Starting Location:</b> West across the river from the gnome maze, just next to the small goblin town
<br><br>
<b>Reward:</b> 2 Quest points, 2,250 Crafting XP, an Uncut Sapphire, a random reward depending on the constellation you see
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to the professor in the square building north of the observatory. He explains that the pesky goblins next door (don't you just hate rude neighbors?) have broken his telescope, and he needs parts to fix it. He suggests talking to his assistant, but if you already have the required items, you can skip that for now.</div>
<br><br>
<div data-progress>After giving him all the items, he'll say he needs a lens to craft the glass. Go find it in the dungeon down the ladder. All you have to do is take the south way, then once you see the most southeastern room, click in it and the auto pathfinding will take you to it. Open the chest upon arrival and search it for a keep key. (Any other chest contains a poison spider! There is a cure poison near the observatory ladder.)</div>
<br><br>
<div data-progress>Head back the way you came—it shouldn't be too difficult. Don't walk away during auto pathfinding, though, because you'll need to make another stop on the way out. When you see a little room with a bed sign in it (High resolution required to see.)</div>
<br><br>
<div data-progress>Use the key on the gate. Go in quickly and search the western sacks to discover the mould. Go out of the keep and head generally east until you come back to the ladder.</div>
<br><br>
<div data-progress>The professor will give you a lame excuse about not being able to make the lens because his Crafting level isn't high enough (pathetic wimp). Use your superior skills to make it for him. Then talk to him again.</div>
<br><br>
<div data-progress>Now go back into the dungeon to meet the professor in the observatory.</div>
<br><br>
<div data-progress>Go a little south, and you should see three dead-end passages in a row on the map. Click on the southernmost one to auto pathfind again. Go up the ladder when you get there.</div>
<br><br>
<div data-progress>Look through the telescope to see a constellation. Your prize depends on what you see and is RANDOM—which is very unfortunate if you get something like three cooked tunas... ahem, like I did. See the complete list of rewards below. You will automatically talk to the professor and finish the quest.</div>
<br><br>
<font color="red">NOTE:</font> If you want a different reward, click somewhere else while viewing the constellation. Then look through the telescope again until you get a constellation you want.</div>
<br><br>
<div data-progress>Once you find your way out, grab some wine from the assistant for fun. Then visit the Zamorak worship site to the northeast. As a special bonus for those who have completed the quest, you can get an unholy Zamorak symbol mould from the Spirit of Scorpius. (Congratulations—I now officially declare you done!)</div>
<br><br>
Here are the possible rewards:<br>
Aries: 875 Attack XP<br>
Taurus: Super Strength Potion<br>
Gemini: Black 2-Handed Sword<br>
Cancer: Amulet of Defence<br>
Leo: 875 Hitpoints XP<br>
Virgo: 875 Defence XP<br>
Libra: 3 Law Runes<br>
Scorpio: Weapon Poison<br>
Sagittarius: Maple Longbow<br>
Capricorn: 875 Strength XP<br>
Aquarius: 25 Water Runes<br>
Pisces: 3 Cooked Tunas
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/2UIpS9vLBNE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written by Gnat88 and pj. Thanks to DRAVAN and Nickseemann for corrections.
<br><br>
This quest guide was entered into the database on Tue, Mar 02, 2004, at 09:14:37 PM by Wiz-Master and CJH and was last updated on Mon, Aug 02, 2004, at 08:32:41 AM.
HTML; }