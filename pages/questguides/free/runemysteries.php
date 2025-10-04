<?php
$meta_data['title'] = 'Quest Guides > Rune Essentials';
$meta_data['og:title'] = $meta_data['title'];
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<b>Description:</b> Recent research at the Wizards Tower has found a way to create Runes for the first time in centuries. Assist the head wizard Sedridor in his research and he too may teach you these secrets!
<br><br>
<b>Difficulty: <font color="Green">Novice</font></b>
<br><br>
<b>Length: <font color="Green">Short</font></b><br>
<h3>Items & Skills Needed:</h3>
<!-- Items/Skills Needed To Start: Pick Axe to mine Rune Essentials -->
<ul style="list-style-type: none;">
<li><div data-progress>None</div><br></li>
</ul>
<h3>Recommended:</h3>
<ul style="list-style-type: none;">
<li><div data-progress><canvas data-itemname="lawrune" data-size="25"></canvas>&nbsp;&nbsp;Runes for Teleport to Lumbridge</div><br></li>
<li><div data-progress><canvas data-itemname="lawrune" data-size="25"></canvas>&nbsp;&nbsp;Runes for Teleport to Varrock</div><br></li>
</ul>
<b>Starting Location:</b> <span data-floors="US">2nd floor</span> of Lumbridge Castle
<br><br>
<b>Reward:</b> 1 Quest point, free teleport to the Rune Essence Mine by speaking to either Aubury or Sedridor
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>To start the quest, speak to Duke Horacio, who is located on the <span data-floors="US">2nd floor</span> of Lumbridge Castle.</div>
<br><br>
<div data-progress>He'll ask you to deliver a rare air talisman to the Head Wizard, who is located in the basement of the Wizard Tower.</div>
<br><br>
<div data-progress>He will give you an item that you must take to the rune shop seller in Varrock. He is located in southeast Varrock, behind the bank.</div>
<br><br>
<div data-progress>The rune seller, Aubury, will give you some findings to take back to the Head Wizard. Return to him once more.</div>
<br><br>
Congratulations — you have completed the first RS2-introduced quest!
$questComplete
This quest guide was written on RuneHQ by evadek. Thanks to Monkeychris, Rebelbeta, Sharker998, Archangel Malachi, Neek, Tomk4k, Therichsweede, and Poison for corrections.
<br><br>
This quest guide was entered into the database on Mon, Dec 01, 2003, at 06:12:25 PM by MrStormy and was last updated on Wed, Mar 31, 2004, at 05:01:06 PM.
HTML; }