<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<div id="narrowscroll">
    <h2>$questName</h2>
    <b>Description:</b> Farmer Fred's sheep are getting mighty woolly. He will pay you to shear them.
    <br><br>
    <b>Difficulty: <font color="Green">Novice</font></b>
    <br><br>
    <b>Length: <font color="Green">Short</font></b>
    <br><br>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
    <li><div data-progress><canvas itemname="shears" icon-size="25" show-label="inline" name-append=" (obtainable during quest)"></canvas></div></li>
    <li><div data-progress><canvas itemname="ball_of_wool" icon-size="25" show-label="inline" name-replace="20 Balls of wool (obtainable during quest)"></canvas></div></li>
    </ul>
    <b>Starting Location:</b> The house just west of the sheep, northwest of Lumbridge
    <br><br>
    <b>Reward:</b> 1 Quest point, 150 Crafting XP, 60 coins
</div>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Fred the Farmer, who is located north of Lumbridge in the little building by all the sheep. Tell him that you are in search of a quest. He'll respond by saying his sheep need to be sheared and will reward you if you bring back 20 balls of wool.</div>
<br><br>
<div data-progress>Go south until you see a general store and buy some shears. Walk back up to the sheep pen and start shearing away.</div>
<br><br>
<div data-progress>Once you've got 20 wool, go to Lumbridge Castle and head to the <span data-floors="US">2nd floor</span>, where you'll find a spinning wheel in the middle room. Use all your wool on it, and you should have 20 balls of wool.</div>
<br><br>
<div data-progress>Return to Fred with your 20 balls of wool and give them to him. He'll thank you and reward you for your help. You'll receive 1 Quest point, 60 gold coins, and 150 Crafting XP.</div>
$questComplete
This quest guide was written on RuneHQ by Stormer. Thanks to Weezy and tj for corrections.
<br><br>
This quest guide was entered into the database on Mon, Feb 16, 2004, at 03:26:27 PM by Chownuggs and was last updated on Fri, Apr 23, 2004, at 12:35:12 PM.
HTML; }