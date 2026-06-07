<?php
function getGuideContent($guide) { return <<<HTML
<h2>$guide Guide</h2>
<hr>
<h3>Coordinate Clues</h3>
<p>
    Note: When you follow a clue with coordinates, you will need to have the sextant, watch, chart, spade, and clue in your inventory to dig up the treasure.
</p>
<br>
<div style="display:flex;justify-content: center;">
    <canvas itemname="trail_watch" show-label="inline"></canvas>&nbsp;&nbsp;&nbsp;&nbsp;
    <canvas itemname="trail_sextant" show-label="inline"></canvas>&nbsp;&nbsp;&nbsp;&nbsp;
    <canvas itemname="trail_chart" show-label="inline"></canvas>&nbsp;&nbsp;&nbsp;&nbsp;
    <canvas itemname="spade" show-label="inline"></canvas>&nbsp;&nbsp;&nbsp;&nbsp;
    <canvas itemname="trail_clue_easy_simple001" show-label="inline"></canvas>
</div>
<p>
    In order to aquire a sextant, watch, and chart, you first must have a coordinate clue and have either started or completed the <a href="?p=questguides&quest=observatory">Observatory Quest</a>. Once you have met these requirements, the steps are as follows:
</p>
<ol>
  <li>With the coordinate clue in your inventory, talk to the Observatory professor about Treasure Trails.</li>
  <li>Head over to Port Khazard and speak to Murphy to obtain a sextant.</li>
  <li>Speak with Brother Kojo in the Clock Tower for a watch.</li>
  <li>Finally, go back to the Observatory and speak with the assistant for the chart.</li>
  <li>Speak to the Observatory professor for the last and final time. Now you can do coordinate scrolls!</li>
</ol>
<table class="table">
  <tr>
    <th width="150px">Coordinate:</th>
    <th>Location:</th>
  </tr>
</table>
<hr>
<h3>Maps</h3>
<p>
    Sometimes you might get a clue scroll, and when you open it up to read it, all you see is a map. Your task is now to find out where that place is, and then, like the pirates always do, take the steps shown on your map, and dig where X marks the spot ;) To dig, you'll need your trusty spade. Here's a list of the different maps:
</p>
<table class="table" width="100%">

</table>
<hr>
<h3>Riddles</h3>
<p>
    Riddles are primarily to test your Runescape knowledge. If you remember most of the stuff you learned through quests and other information, you shouldn't have a problem with these.
</p>
<table class="table">
  <tr>
    <th width="50%">Clue/Riddle</th>
    <th>Solution</th>
  </tr>
</table>
<hr>
<h3>Speak to...</h3>
<p>
    In treasure trails you will some times get a clue saying something like "Speak to ....". This is a list of the different NPC's that we find on hard treasure trails.
</p>
<table class="table">
  <tr> 
    <th>Speak to ...</th>
    <th>Location they are found:</th>
  </tr>
</table>
HTML; }