<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<br><br>
<b>Description:</b> To start using the herblore skill you will need to ask for some training from the druids. However, they require some help with a ritual before they will help you.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas itemname="raw_beef" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="raw_bear_meat" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="raw_rat_meat" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="raw_chicken" icon-size="25" show-label="inline"></canvas></div></li>
</ul>
<b>Starting Location:</b> Stone circle north of Taverley
<br><br>
<b>Reward:</b> 4 Quest points, 250 Herblore XP, access to the Herblore skill
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Kaqemeex, and he'll tell you what he needs to purify their cursed altar south of Varrock. He says to speak to Sanfew.</div>
<br><br>
<div data-progress>Find Sanfew on the <span data-floors="US">2nd floor</span> of the Herblore shop. He says you need the four meats to be dipped into the Cauldron of Thunder to complete a ritual. Hopefully, you already have these meats and can go there right away.</div>
<br><br>
<div data-progress>Head south and a little west to Taverley Dungeon. It's in a clump of dead trees. You won't need armor, but a good weapon to finish off some suits of armor (level 19) quickly will help.</div>
<br><br>
<div data-progress>Go in and head north a little until you come to the prison door and try to open it. One of the suits will attack you.</div>
<br><br>
<div data-progress>You have two options: defeat it and try to open the gate again. Then defeat the second suit of armor. Assuming both are dead, you should be able to go in now. Alternatively, you can open the door by spam-clicking it, avoiding the fight with the armor.</div>
<br><br>
<div data-progress>Use all the meats with the cauldron (they should turn blue), and head back to Sanfew at the Herblore shop. He'll be grateful and tell you to visit Kaqemeex for your Herblore skills training.</div>
<br><br>
<div data-progress>Kaqemeex will give you your reward and then explain some things about Herblore. He also refers you to the Scribe section of the website for more info.</div>
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/ts3kJNGIpBs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written on RuneHQ by Gnat88. Thanks to Weezy for corrections.<br><br>
This quest guide was entered into the database on Tue, Mar 02, 2004, at 10:06:05 PM by Wiz-Master and was last updated on Wed, Mar 31, 2004, at 04:58:22 PM.
HTML; }