<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> Sir Vyvin's squire is in trouble. He has accidentally lost Sir Vyvin's ceremonial sword. Help him find a replacement without Sir Vyvin finding out.
<br><br>
<b>Difficulty: <font color="Yellow">Intermediate</font></b>
<br><br>
<b>Length: <font color="Red">Long</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>10 Mining</div></li>
<li><div data-progress><canvas data-itemname="redberry_pie" data-size="25"></canvas>Redberry pie (level 10 Cooking to make)</div><br></li>
<li><div data-progress><canvas data-itemname="iron_bar" data-size="25"></canvas>2 iron bars (level 15 Smithing to make)</div><br></li>
<li><div data-progress><canvas data-itemname="bronze_pickaxe" data-size="25"></canvas>Any pickaxe</div><br></li>
<li><div data-progress>The ability to run past level 57 ice warriors and level 53 ice giants</div></li>
</ul>
<b>Starting Location:</b> The courtyard of the White Knight's Castle
<br><br>
<b>Reward:</b> 1 Quest point, 12,725 Smithing XP, blurite sword (if you got Thurgo to make you an extra one)
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to the squire about his mishap. He'll direct you to Reldo at the Varrock Castle Library.</div>
<br><br>
<div data-progress>Reldo will give you the location of the last Incamdo Dwarf in RuneScape. (If you accidentally say you need a quest, you will start the Shield of Arrav quest. Until you find the book on one of the bookshelves, you won't be able to ask about the quest you actually want to work on.)</div>
<br><br>
<div data-progress>Head southwest of Port Sarim to the cliff below which Thurgo lives. Give him your pie, and he'll get talkative. He needs a picture, so head back to the castle.</div>
<br><br>
<div data-progress>Speak to the squire in the courtyard, then go up to the east side of the <span data-floors="US">3rd floor</span>. Search the cupboard in his bedroom while Sir Vyvin is not in the room.</div>
<br><br>
<div data-progress>Go back to Thurgo. Bring the iron bars, armor, etc., if you want to save yourself a trip later. Talk to Thurgo and he'll say you need blurite ore.</div>
<br><br>
<div data-progress>Go into the cave above his house. Head deep into the cave until you reach the ice room. Run past the Ice Warriors and Ice Giants to the back wall, mine some blurite quickly, and get out of there.</div>
<br><br>
<div data-progress>Take the 2 iron bars and the blurite to Thurgo, and he'll make the sword. Take it back to the squire for your reward. I had trouble parting with my sword because it looked so cool... lol.</div>
$questComplete
This quest guide was written on RuneHQ by Gnat88. Thanks to Urger, noob hunters, Weezy, IglooGuy, and stormer for corrections.
<br><br>
This quest guide was entered into the database on Sat, Feb 28, 2004, at 06:03:08 PM by Monkeychris and was last updated on Tue, Apr 20, 2004, at 11:17:05 PM.
HTML; } ?>