<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<a href="#zombiemusiq">ZombieMusiq Video Guide at bottom of page!</a>
<br><br>
<b>Description:</b> The mountain Dwarves home would be an ideal way to get across White Wolf mountain safely. However, the Dwarves aren't too fond of strangers. They will let you through if you can bring them a trophy. The trophy is the prize for the annual Hemenster fishing competition.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>10 Fishing</div><br></li>
<li><div data-progress><canvas itemname="coins_5" icon-size="25"></canvas>&nbsp;&nbsp;5 coins</div><br></li>
<li><div data-progress><canvas itemname="fishing_rod" icon-size="25" show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas itemname="garlic" icon-size="25" show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas itemname="spade" icon-size="25" show-label="inline"></canvas></div><br></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>The ability to run past level 44 enemies</div></li>
<li><div data-progress><canvas itemname="lobster" icon-size="25"></canvas>&nbsp;&nbsp;Food at low combat levels</div></li>
</ul>
<b>Starting Location:</b> East or west of White Wolf Mountain, talk to the dwarf
<br><br>
<b>Reward:</b> 1 Quest point, 2,437 Fishing XP, access to the underground White Wolf Mountain passage
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to the Dwarf and say that you want to use the secret way to cross White Wolf Mountain. Also, tell him you want to become his friend. He will ask you to retrieve a trophy from the Hemenster Fishing Competition and will give you a Competition Pass.</div>
<br><br>
<div data-progress>Before entering Hemenster, go north of it and you will see McGrubor's Woods. Go further north and you'll find a loose fence. Push it, head to the west side, find a red vine, and use the spade on it. You should get a red worm, then leave the area.</div>
<br><br>
<div data-progress>Return to Hemenster and try to enter the fishing area. A man will say you need a Competition Pass&mdash;show it to him to get in.</div>
<br><br>
<div data-progress>Talk to the Sinister Stranger. He will say that he doesn't like sunlight. Tell him he's a vampire&mdash;he'll deny it and say something nonsensical, but trust me, he really is.</div>
<br><br>
<div data-progress>Talk to Bonzo and tell him you want to start the competition. Pay 5 gp, and he will tell you that your fishing spot is beside the oak tree.</div>
<br><br>
<div data-progress>Place a garlic clove in the pipes, and the vampire will complain about a bad smell. Bonzo will then tell you that your fishing spot is beside the pipes. Fish there and you should catch a carp. Talk to Bonzo afterward to win the competition.</div>
<br><br>
<div data-progress>Return to the dwarf and he will reward you.</div>
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/uP8JaMMnH7s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<p>Note: The video shows 21 Fishing requirement, it's actually 10.</p>
<hr>
This quest guide was written by Henry-x. Thanks to Weezy for corrections.
<br><br>
This quest guide was entered into the database on Sun, Feb 15, 2004, at 11:36:56 AM by Weezy and was last updated on Wed, Mar 31, 2004, at 05:18:30 PM.
HTML; }