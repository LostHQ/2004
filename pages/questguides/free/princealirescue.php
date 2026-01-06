<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> Prince Ali of Al Kharid has been kidnapped by the scheming Lady Keli. You are hired to stage a rescue mission.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Red">Long</font></b><br>
<h3>Items & Skills Needed:</h3>
(All items can be obtained during the quest)
<ul style="list-style-type: none;">
<li><div data-progress><canvas itemname="softclay" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="ball_of_wool" icon-size="25" show-label="inline" name-replace="3 Balls of wool"></canvas></div></li>
<li><div data-progress><canvas itemname="yellowdye" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="ashes" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress>
    <canvas itemname="jug_water" icon-size="25" show-label="inline" name-append=" (obtainable during quest)"></canvas> or
    <canvas itemname="bucket_water" icon-size="25" show-label="inline"></canvas>
</div></li>
<li><div data-progress><canvas itemname="pot_flour" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="bronze_bar" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="pink_skirt" icon-size="25" show-label="inline"></canvas></div></li>
<li><div data-progress><canvas itemname="beer" icon-size="25" show-label="inline" name-replace="3 beers"></canvas></div></li>
<li><div data-progress><canvas itemname="rope" icon-size="25" show-label="inline"></canvas></div></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>
    <canvas itemname="coins_5" icon-size="25" show-label="inline" name-replace="20 coins"></canvas> or a
    <canvas itemname="ring_of_dueling_8" icon-size="25" show-label="inline" name-replace="Ring of Dueling for the Al Kharid toll gate"></canvas>
</div></li>
</ul>
<b>Starting Location:</b> Talk to Hassan in the Al Kharid palace
<br><br>
<b>Reward:</b> 3 Quest points, 700 coins, free passage through the Al Kharid gate
<br><br>
<hr>
<h3>Instructions:</h3>
<div data-progress>Start the quest by talking to Hassan in the southern room of Al Kharid Palace. He'll tell you to speak with Osman. Talk to him again and complain about the heat, and he will hand you a jug of water. Keep it for later.</div>
<br><br>
<div data-progress>Go north west outside the palace and talk to Osman. Tell him Hassan sent you and you need instructions. He'll tell you Lady Keli has captured the prince, and you need to stage a rescue. Ask him about the two things you must do. One is to make a disguise and the other is to make an imprint of a key.</div>
<br><br>
WARNING: Do not AFK around the jail as the guards can easily kill you.
<br><br>
<h3>The Disguise</h3>
<div data-progress>Head over towards Draynor Village, find Leela. Just east of Ned and northwest of the Jail, you will find Leela. You'll tell her you are there to help her free the prince, then she will tell you all that she knows so far and tips on how to get all the materials together.</div>
<br><br>
<div data-progress>Find and talk to Aggie the witch in the middle courtyard or in her house. She can make you the skin paste and yellow dye. You will need 2 onions, pot of flour, redberries, jug/bucket of water, ashes, and 5 coins.</div>
<br><br>
<div data-progress>Talk to Ned, bring him 3 balls of wool he can make you a wig for the disguise. Use your yellow dye on the wig.</div>
<br><br>
<div data-progress>If you do not already have a rope, Ned can make rope for 4 balls of wool or you can purchase one from him for 15 coins.</div>
<br><br>
<h3>The Key</h3>
<div data-progress>Make sure you have the soft clay in your inventory, head east of Draynor village to the jail, and talk to Lady Keli.</div>
<br><br>
<div data-progress>Tell her you've heard of her; she's famous all over RuneScape.</div>
<br><br>
<div data-progress>Then ask her what her latest plan is, then she will tell you about the prisoner.</div>
<br><br>
<div data-progress>Ask her how she is so sure no one will break him out. She will tell you about the key around her neck.</div>
<br><br>
<div data-progress>Ask her if you can see the key, then ask if you can touch it for a moment. You'll make an imprint of the key in the clay.</div>
<br><br>
<div data-progress>Go back to Osman in Al Kharid with the key imprint and a bronze bar. He will tell you to pick up the key from Leela.</div>
<br><br>
<div data-progress>Head back towards Draynor Village and talk to Leela to obtain the jail key.</div>
<br><br>
<h3>Rescuing Prince Ali</h3>
<div data-progress>Go into the jail nearby, close the door to trap the guards/jailers outside. Make sure Joe, the Guard, is inside and the other guards are outside for an easier time.</div>
<br><br>
<div data-progress>Talk to Joe, the guard near the cell, and tell him you have a beer. "Fancy one?" You'll then ask him if he wants another and automatically hand them to him, and he will drink all 3 and get drunk.</div>
<br><br>
<div data-progress>Use a rope on Lady Keli to tie her up, then use your key on the cell door and talk to the prince. He will take the disguise and run off.</div>
<br><br>    
<div data-progress>Return to Hassen in Al Kharid and talk to him... congratz! You're now a friend of Al Kharid and can pass through the gate for free.</div>
$questComplete
This quest guide was written on RuneHQ by xxteargodxx. Thanks to Fran 2004 for corrections.
<br><br>
This quest guide was entered into the database on Thu, Mar 04, 2004, at 12:28:14 AM by Weezy and was last updated on Thu, Sep 25, 2025, at 04:14:03 AM by Halogod35.
HTML; }