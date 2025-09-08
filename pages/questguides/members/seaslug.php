<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<h2>$questName</h2>
<a href="#zombiemusiq" class="c">ZombieMusiq Video Guide at bottom of page!</a>
<br><br>
<b>Description:</b> Something strange is happening on the fishing platform. Missing fishermen and the presence of dozens of strange sea creatures gives cause for concern. Investigate the platform, discover the truth before it's too late.
<br><br>
<b>Difficulty: <font color="Yellow">Intermediate</font></b>
<br><br>
<b>Length: <font color="Green">Short</font></b><br>
<h3>Items & Skills Needed:</h3>
<ul style="list-style-type: none;">
<li><div data-progress>30 Firemaking</div></li>
<li><div data-progress><canvas data-itemname="swamppaste" data-size="25" data-show-label="inline"></canvas></div><br></li>
</ul>
<b>Starting Location:</b> South of the Legends' Guild and southeast of Ardougne
<br><br>
<b>Reward:</b> 1 Quest point, 7,175 Fishing XP, Oyster Pearls, access to the Fishing Platform
<br><br>
<hr>
<h3>Instructions:</h3>
<br>
<div data-progress>Talk to Caroline, she'll tell you of her plight. She tells you that her friend Holgart can take you to the platform.</div>
<br><br>
<div data-progress>Talk to Holgart and find out his rowboat isn't seaworthy. He needs swamp paste to fix it, so give him some and you'll soon be at the fishing platform.</div>
<br><br>
<div data-progress>Walk west and talk to Bailey. He will tell you about his son, Kennith, who is hiding upstairs, and Kent, who left to find help days ago.</div>
<br><br>
<div data-progress>Go upstairs using the ladder on the northeast part of the platform, then head west to the building to talk to Kennith about the situation. Shout across the crates to him, then go find Kent by talking to Holgart.</div>
<br><br>
<div data-progress>You arrive on a small island, talk to Kent, and learn the history of what happened five days ago. Kent saves you from a sea slug's control. You thank him and return to the platform via Holgart to save Kennith.</div>
<br><br>
<div data-progress>Upon arriving, the fishermen won't let you up the ladder, so talk to Bailey to learn the weakness of the slugs: heat. He gives you a torch, but you have to light it yourself. Get the broken glass from the corner, and pick up some damp sticks from the northeast section.</div>
<br><br>
<div data-progress>Use your glass with the damp sticks to get dry sticks. Rub them together, and your torch should light. Climb up the ladder with your torch.</div>
<br><br>
<div data-progress>Talk to Kennith, then kick the loose panels on the outside of the building he's in. Talk to him again, and then rotate the crane. He'll jump on and into the rowboat below.</div>
<br><br>
<div data-progress>Go back to Holgart and return to land. Talk to Caroline to claim your reward.</div>
$questComplete
<span id="zombiemusiq"></span>
<iframe width="450" height="253" src="https://www.youtube.com/embed/yUiI6nQBxio" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<hr>
This quest guide was written by Gnat88, warfangmage, and super_dude. Thanks to Weezy and DRAVAN for corrections.
<br><br>
This quest guide was entered into the database on Tue, Mar 02, 2004, at 09:30:16 PM by Wiz-Master and CJH and was last updated on Mon, Aug 02, 2004, at 08:37:38 AM.
HTML; }