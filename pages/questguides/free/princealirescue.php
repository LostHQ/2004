<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> Prince Ali of Al Kharid has been kidnapped by the scheming Lady Keli. You are hired to stage a rescue mission.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Red">Long</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="softclay" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="ball_of_wool" data-size="25"></canvas>&nbsp;&nbsp;3 balls of wool</div><br></li>
<li><div data-progress><canvas data-itemname="yellowdye" data-size="25"></canvas>&nbsp;&nbsp;Yellow dye (or<canvas data-itemname="onion" data-size="25"></canvas>&nbsp;2 onions and<canvas data-itemname="coins_5" data-size="25"></canvas>&nbsp;5 coins to obtain a yellow dye from Aggie)</div><br></li>
<li><div data-progress><canvas data-itemname="redberry" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="ashes" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="bucket_water" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="pot_flour" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="bronze_bar" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="pink_skirt" data-size="25" data-show-label="inline"></canvas></div><br></li>
<li><div data-progress><canvas data-itemname="beer" data-size="25"></canvas>&nbsp;&nbsp;3 beers</div><br></li>
<li><div data-progress><canvas data-itemname="rope" data-size="25"></canvas>&nbsp;&nbsp;Rope (or<canvas data-itemname="ball_of_wool" data-size="25"></canvas>&nbsp;4 balls of wool or<canvas data-itemname="coins_5" data-size="25"></canvas>&nbsp;15 coins to obtain rope from Ned)</div><br></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="coins_25" data-size="25"></canvas>&nbsp;&nbsp;30-40 coins for the Al Kharid toll gate</div><br></li>
</ul>
<b>Starting Location:</b> Talk to Hassan in the Al Kharid palace
<br><br>
<b>Reward:</b> 3 Quest points, 700 coins, free passage through the Al Kharid gate
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Start the quest by talking to Hassan in the palace, he'll tell you to speak with Osman.</div>
<br><br>
<div data-progress>Go North of the palace and talk to Osman. Tell him Hassan sent you, and you need instructions, he'll tell you Lady Keli has captured the prince and you need to stage a rescue, he'll then tell you that you need to do two things. One is to make a disguise, and the other is to make an imprint of a key.</div>
<br><br>
<div data-progress>Head over towards Draynor Village, find Leela. She is located east of Draynor Village just south of the wheat field. You'll tell her you are there to help her free the prince, then she'll check what items you have and tell you what else you still need.</div>
<br><br>
<div data-progress>Find Aggie the witch, she can make you the skin paste and yellow dye.</div>
<br><br>
<div data-progress>Talk to Ned, bring him 3 balls of wool he can make you a wig for the disguise. Use your yellow dye on the wig.</div>
<br><br>
<div data-progress>If you do not already have a rope, Ned can make rope for 4 balls of wool.</div>
<br><br>
<div data-progress>Talk to Lady Keli, tell her you've heard of her, she's famous all over RuneScape.</div>
<br><br>
<div data-progress>Then ask her what her latest plan is, then tell her she must have been very skillful.</div>
<br><br>
<div data-progress>Then ask her if she's sure they won't let the prisoner out.</div>
<br><br>
<div data-progress>Make sure you have the soft clay here and ask her if you can see the key. Then ask her if you can touch it for a moment then you'll make an imprint of the key in the clay.</div>
<br><br>
<div data-progress>Go back to Osman in Al Kharid with the key imprint and a bronze bar. He will tell you to pick up the key from Leela.</div>
<br><br>
<div data-progress>Head back towards Draynor Village and talk to Leela to obtain the jail key.</div>
<br><br>
<div data-progress>Go into the house nearby Lady Keli and talk to the guard and tell him you have a beer. “Fancy one?” You'll then ask him if he wants another and automatically hand them to him, he will drink them and get drunk.</div>
<br><br>
<div data-progress>Use the rope on Lady Keli to tie her up, then use your key on the door and talk to the prince. He will take the disguise and run off.</div>
<br><br>    
<div data-progress>Return to Hassen in Al Kharid and talk to him... congratz! You're now a friend of Al Kharid and can pass through the gate for free.</div>
$questComplete
This quest guide was written on RuneHQ by xxteargodxx.
<br><br>
This quest guide was entered into the database on Thu, Mar 04, 2004, at 12:28:14 AM by Weezy and was last updated on Wed, Mar 31, 2004, at 05:15:03 PM.
HTML; }