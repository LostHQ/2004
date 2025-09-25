<?php
$meta_data['title'] = 'Treasure Trails';
$meta_data['og:title'] = $meta_data['title'];
$meta_data['og:image'] = 'img/sextant.png';
$guideLookup = [
  'anagrams' => 'Anagrams',
  'challenges' => 'Challenges',
  'coordinates' => 'Coordinates',
  'maps' => 'Maps & Puzzles',
  'cluesriddles' => 'Clues/Riddles',
  'speakto' => 'Speak To...',
];
function getGuideList($guideList) {
  $output = '';
  foreach ($guideList as $key => $label) {
    $output .= "<tr><td colspan='2'><a href=\"?p=clueguides&guide={$key}\">" . htmlspecialchars($label) . "</a></td></tr>\n";
  }
  return $output;
}
function getPageContent() {
  global $meta_data, $siteOptStyle, $guideLookup;
  ob_start();
  if (empty($_GET['guide'])) {
      echo getSelectionMenu();
  } else {
      $clueGuide = htmlspecialchars($_GET['guide']);
      $filePath = 'pages/clueguides/guides/' . $clueGuide . '.php';
      if (file_exists($filePath)) {
          include $filePath;
          $meta_data['title'] = 'Treasure Trails > ' . $guideLookup[$clueGuide];
          $meta_data['og:title'] = $meta_data['title'];
          echo getGuideContent($guideLookup[$clueGuide]);
      } else {
          $stopload = true;
          redirect("404");
          exit;
      }
  }
  return ob_get_clean();
}

function getSelectionMenu() { 
  global $guideLookup;
return <<<HTML
<h2>LostHQ Treasure Trails Guides</h2>
<h3>WARNING:</h3>
This guides below obviously contains spoilers on how to solve the clues. Don't look 
if you want to figure this stuff out for yourself.  For the coordinate clues, 
a spade is necessary for the solution. Simply use a spade where the solution 
states.  Note that you are still required to carry your Sextant, Chart and Watch for 
Coordinate clues with you or your treasure will not be revealed.<br>
<br>
<hr>
<h3>Clue Guides</h3>
<table class="table">
  <thead>
    <tr>
      <th colspan=2>Select your clue type to see<br>the relevant guides for that clue.</th>
    </tr>
  </thead>
  <tbody>
HTML.getGuideList($guideLookup).<<<HTML
  </tbody>
</table>
<br>
<hr>
<h3>Treasure Trails Standard Tips</h3>
So, you got your first clue, congratulations. Now you must be off to get your treasure! Remember sometimes when the clue gives a coordinate, you get to the place,
realizing that you forgotten to bring your watch or chart? Never fear, with this comprehensive guide, what you need to bring is all listed here!<br>
<br>
<h3>Things to bring</h3>
Every time you go treasure hunting, you must<br>
<b>ALWAYS</b> bring the following to save loads of time:
<ul>
    <li>Watch</li>
    <li>Sextant</li>
    <li>Chart</li>
    <li>Spade</li>
    <li>Clue Scroll</li>
</ul>
The other items are best to make the trip as smooth as possible:
<ul>
    <li>Rope (mainly for waterfall, I see that it is one of the most common coordinates)</li>
    <li>About 100-500gp (for expenses, e.g. traveling to Karamja/Brimhaven)</li>
    <li>Any weapon (just in case for any reason)</li>
    <li>Runes, recommended runes; 5 Law, 3 earth, 3 fire, 3-4 water (Ardougne teleport) and an air staff/battlestaff</li>
    <li>Wizard's Mind Bomb if your magic is too low to cast certain teleport spells</li>
    <li>Amulet of Glory(4) (easy teleportation)</li>
    <li>Some food, you may need to run past enemies</li>
    <li>Boots of Lightness (reduces your weight)</li>
    <li>Anti-poison pots (you never know)</li>
    <li>On level 3 clues you will be attacked by a level 108 Saradomin wizard or level 75 Zamorak wizard (in wilderness) as you dig, so be prepared to fight: bring an antipoison, use prayer; it is advisable to turn on magic protection!</li>
</ul>
<br>
Treasure trails is for RS Members only. It is sort of a small mini-quest in which 
you can get rare unique pieces of equipment or other things. <br>
<br>
Note: Do note that even though the list says an enemy drops a clue, it may 
take a long while before you actually get one from the enemy. <br>
<br>
To increase chances of getting a clue, a Ring of Wealth may help. Your best chance 
however is to just find a good area for whatever enemy it is, and hope there isn't 
a lot of people in that area. <br>
<br>
There are a lot of solutions in this guide and you might not even find yours if 
looking manually. Simply use the "CTRL + F" feature and search for keywords. 
For example "halt us" or "under cook".<br>
<br>
<hr>
<h3>Aquiring Sextant, Watch, and Chart</h3>
In order to aquire a sextant, watch, and chart, you first must have a <a href="?p=clueguides&guide=coordinates">coordinate clue</a> and have either started or completed the <a href="?p=questguides&quest=observatory">Observatory Quest</a>. Once you have met these requirements, the steps are as follows:
<ol>
  <li>With the coordinate clue in your inventory, talk to the Observatory professor about Treasure Trails.</li>
  <li>Head over to Port Khazard and speak to Murphy to obtain a sextant.</li>
  <li>Speak with Brother Kojo in the Clock Tower for a watch.</li>
  <li>Finally, go back to the Observatory and speak with the assistant for the chart.</li>
  <li>Speak to the Observatory professor for the last and final time. Now you can do coordinate scrolls!</li>
</ol>
<br>
<hr>
<h3>Clue Droppers</h3>
For clue droppers you can check our <a href="?p=droptables">Drop Tables page</a>.<br>
Search for "Clue Scroll"
<br><br>
<h3>Common Farming Locations</h3>
Here is a list of commonly farmed NPCs and their locations.
<table class="table">
  <tr>
    <th>Scroll</th>
    <th>NPC/Location</th>
    <th>Notes</th>
  </tr>
  <tr>
    <td rowspan="2">Easy</td>
    <td>Thugs - Edgeville dungeon level 2 wilderness</td>
    <td>In the wilderness, thugs are aggressive to all combat levels. Watch for PKers within 2 levels.</td>
  </tr>
  <tr>
    <td>Men - All over RuneScape</td>
    <td>Men can be killed very quickly, thus improving the speed of obtaining a clue scroll.</td>
  </tr>
  <tr>
    <td>Medium</td>
    <td>Guards - Falador</td>
    <td>Guards can be safespotted from behind the fences.</td>
  </tr>
  <tr>
    <td>Hard</td>
    <td>Hellhounds - Taverly dungeon</td>
    <td>A Dwarf Multicannon can be used here to greatly speed up farming.</td>
  </tr>
</table>
<br>
<hr>
<h3>Trail Levels and Rewards</h3>
For clue rewards you can check our <a href="?p=cluetables">Clue Tables page</a>.<br>
Select the clue tier you wish to view drops for<br>
<br>
</div>
HTML; }