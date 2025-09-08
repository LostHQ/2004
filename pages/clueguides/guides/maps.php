<?php
function getGuideContent($guide) { return <<<HTML
<h2>Treasure Trails $guide Guide</h2>
<h3>Maps</h3>
<p>Sometimes you might get a clue scroll, and when you open it up to read it, all you see is a map. Your task is now to find out where that place is, and then, like the pirates always do, take the steps shown on your map, and dig where X marks the spot ;) To dig, you'll need your trusty spade. Here's a list of the different maps:
<table class="table" width="100%">
  <tr>
    <th colspan=2>Easy Clues</th>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/easy/champ_guild.png" style="width:200px;" alt="champ_guild"></td>
    <td>Champions Guild Map<br><br>West of Champions Guild</td>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/easy/varrock_mine.png" style="width:200px;" alt="varrock_mine"></td>
    <td>Varrock Mine Map<br><br>Dig at the fence at the south-east Varrock mine</td>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/easy/falador_mine.png" style="width:200px;" alt="falador_mine"></td>
    <td>Falador Useless Rock Area Map<br><br>Fenced area north-east of Falador, south-west of Barbarian Village; full of useless rocks</td>
  </tr>
</table>
<hr>
<table class="table" width="100%">
  <tr>
    <th colspan=2>Medium Clues</th>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/medium/draynor_fishing.png" style="width:200px;" alt="dranyor_fishing"></td>
    <td>Draynor Fish Spot Map<br><br>South of Draynor Village's bank</td>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/medium/observatory.png" style="width:200px;" alt="observatory"></td>
    <td>Observatory Map<br><br>West of Tree Gnome Village</td>
  </tr>
</table>
<hr>
<table class="table" width="100%">
  <tr>
    <th colspan=2>Hard Clues</th>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/hard/varrock_lumber.png" style="width:200px;" alt="varrock_lumber.png"></td>
    <td>Varrock Lumberyard Map<br><br>Lumberyard, north-east of Varrock</td>
  </tr>
  <!--<tr> 
    <td><img src="img/clue_guides/clue_black_warriors_fortress_wildy.png" style="width:200px;" alt="clue_black_warriors_fortress_wildy.png"></td>
    <td>Black warriors fortress in the Wilderness. Search the crate in the southwest corner of the area inside.</td>
  </tr>
 <tr> 
    <td><img src="img/clue_guides/clue_brother_galahad.jpg" style="width:200px;" alt="clue_brother_galahad.jpg"></td>
    <td>Brother Galahad's house across the river from Coal Trucks.</td>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/clue_goblins_near_observatory.jpg" style="width:200px;" alt="clue_goblins_near_observatory.jpg"></td>
    <td>Search crate in the house with range at goblin area near Observatory</td>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/clue_necromancer.png" style="width:200px;" alt="clue_necromancer.png"></td>
    <td>At the Necromancer peninsula south of East Ardougne. 2 squares west of the small tree as indicated on the clue map.</td>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/clue1.jpg" style="width:200px;" alt="clue1.jpg"></td>
    <td>In Yanille, south east corner</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/clue_Rimmington_chemists.png" style="width:200px;" alt="Chemist's house"></td>
    <td>West of the Chemist's house west of Rimmington (South of Falador below the Crafting Guild).</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/clue_hobgoblin_peninsula.png" style="width:200px;" alt="Hobgoblin peninsula"></td>
    <td>It's on the Hobgoblin peninsula that sticks out west of the Crafting Guild (below the Make over Mage - found directly west after exiting Falador by the south entrance).</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/clue_McGrubors_wood.png" style="width:200px;" alt="McGrubor's wood"></td>
    <td>Inside McGrubor's wood, which is west of Seer's village.</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/clue_clock_tower.jpg" style="width:200px;" alt="Pic missing, but coming soon!"></td>
    <td>Search a crate on the west side of the Clock Tower, which is south of Ardougne.</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/clue_west_ardougne.jpg" style="width:200px;" alt="clue_west_ardougne.jpg"></td>
    <td>Northwest corner of West Ardougne</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/wiztowermap.gif" style="width:200px;" alt="wiztowermap.gif"></td>
    <td>Behind the Wizard's Tower</td>
  </tr>-->
</table>
<hr>
<h3>Puzzles</h3>
<table class="table" width="100%">
  <tr>
    <th colspan=2>Castle Puzzle Box Solver</th>
  </tr>
  <tr> 
    <td colspan=2>
    <canvas id="puzzleCanvasCastle" width="220" height="220"></canvas><br><br>
    <button id="castleSolveButton">Solve</button>
    <button id="castleNextButton">Next Move</button>
    <button id="castlePrevButton">Previous Move</button>
    <button id="castleAutoButton">Auto Play</button><br>
    <div id="movesCounterCastle">Moves to solve: 0</div>
    </td>
  </tr>
  <!--<tr>
    <th>Grand Tree Puzzle Box</th>
    <th>Solution</th>
  </tr>
  <tr> 
    <td>
      <canvas id="puzzleCanvasTree" width="220" height="220"></canvas>
      <button id="treeSolveButton">Solve</button>
      <div id="movesCounterTree">Moves to solve: 0</div>
    </td>
    <td>
      <img src="img/clue_guides/solvedtree.jpg" style="width:220px;" alt="Pic missing, but coming soon!">
    </td>
  </tr>
  <tr>
    <th>Troll Puzzle Box</th>
    <th>Solution</th>
  </tr>
  <tr> 
    <td>
      <canvas id="puzzleCanvasTroll" width="220" height="220"></canvas>
      <button id="trollSolveButton">Solve</button>
      <div id="movesCounterTroll">Moves to solve: 0</div>
    </td>
    <td>
      <img src="img/clue_guides/trollpuzzlebox.gif" style="width:220px;" alt="trollpuzzlebox.gif">
    </td>
  </tr>-->
</table>
</p>
<script src="js/clue_puzzle/puzzle_solver.js"></script>
<script>
  const castleBox = new PuzzleBox('puzzleCanvasCastle', 'castleSolveButton', puzzleSetCastle, 
    'movesCounterCastle', 'castleNextButton', 'castlePrevButton', 'castleAutoButton');
  //const treeBox = new PuzzleBox('puzzleCanvasTree', 'treeSolveButton', puzzleSetTree, 
  //  'movesCounterTree', 'trollNextButton', 'trollPrevButton', 'trollAutoButton');
  //const trollBox = new PuzzleBox('puzzleCanvasTroll', 'trollSolveButton', puzzleSetTroll,
  //  'movesCounterTroll', 'trollNextButton', 'trollPrevButton', 'trollAutoButton');
</script>
HTML; }