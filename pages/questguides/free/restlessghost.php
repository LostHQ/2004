<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> A ghost is haunting Lumbridge graveyard. The priest of the Lumbridge church of Saradomin wants you to find out how to get rid of it.
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Yellow">Medium</font></b>
<br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>None</div></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>The ability to kill or run away from a level 13 skeleton</div></li>
<li><div data-progress><canvas itemname="lawrune" icon-size="25" show-label="inline" name-replace="Runes for 2x Teleport to Lumbridge"></canvas></div></li>
</ul>
<b>Starting Location:</b> Lumbridge Chapel
<br><br>
<b>Reward:</b> 1 Quest point, 1,125 Prayer XP
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Father Aerick and he'll inform you of the situation. He wants you to visit Father Urhney, who is meditating in the swamps (how boring would that be?), and ask him how to get rid of the ghost.</div>
<br><br>
<div data-progress>Go north around the castle, then west until you reach the edge of a fence. Head south of it and proceed east to the southeast corner of the swamp.</div>
<br><br>
<div data-progress>Talk to Urhney and he'll give you an Amulet of Ghostspeak, along with some info on what the ghost might want.</div>
<br><br>
<div data-progress>Head back to the church graveyard and talk to the ghost. He'll be surprised that you can understand him. After getting over himself, he'll explain that a warlock stole his skull from his coffin and took it to an island — the Wizard's Tower Island.</div>
<br><br>
<div data-progress>Head over there and go into the basement. Look for a skull and take it. A skeleton will pop out — kill it, or just grab the skull and hightail it out of there.</div>
<br><br>
<div data-progress>Go back to the tomb and use the skull on the ghost's coffin. The ghost will vanish and whisper "thank you." Of course, a minor thank you isn't going to cut it — so naturally, the ghost also gives you your reward. Quest complete.</div>
$questComplete
This quest guide was written on RuneHQ by Gnat88. Thanks to Urger and Weezy for corrections.
<br><br>
This quest guide was entered into the database on Sat, Feb 28, 2004, at 04:46:45 PM by Monkeychris and was last updated on Wed, Mar 31, 2004, at 05:00:31 PM.
HTML; }
