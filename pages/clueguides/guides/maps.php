<?php
function getGuideContent($guide) { return <<<HTML
<h2>Treasure Trails $guide Guide</h2>

<hr>
<table class="table" width="100%">
  <tr>
    <th colspan=2>Hard Clues</th>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/hard/varrock_lumber.png" style="width:200px;" alt="varrock_lumber.png"></td>
    <td>Varrock Lumberyard Map<br><br>Lumberyard, north-east of Varrock</td>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/hard/clue_black_warriors_fortress_wildy.png" style="width:200px;" alt="clue_black_warriors_fortress_wildy.png"></td>
    <td>Black warriors fortress in the Wilderness. Search the crate in the southwest corner of the area inside.</td>
  </tr>
  <tr>
  <tr> 
    <td><img src="img/clue_guides/maps/hard/clue1.jpg" style="width:200px;" alt="clue1.jpg"></td>
    <td>In Yanille, south east corner</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/maps/hard/clue_west_ardougne.png" style="width:200px;" alt="clue_west_ardougne.png"></td>
    <td>Northwest corner of West Ardougne</td>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/hard/clue_goblins_near_observatory.jpg" style="width:200px;" alt="clue_goblins_near_observatory.jpg"></td>
    <td>Search crate in the house with range at goblin area near Observatory</td>
  </tr>
</table>
<hr>
<h3>Puzzles</h3>
<table class="table" width="100%">
  <tr>
    <th>Castle Puzzle Box Solver</th>
  </tr>
  <tr> 
    <td>
        <canvas id="puzzleCanvasCastle" width="220" height="220"></canvas><br><br>
        <button id="castleSolveButton">Solve</button>
        <button id="castleNextButton">Next Move</button>
        <button id="castlePrevButton">Previous Move</button>
        <button id="castleAutoButton">Auto Play</button><br>
        <div id="movesCounterCastle">Moves to solve: 0</div>
    </td>
  </tr>
  <tr>
    <th>Grand Tree Puzzle Box</th>
  </tr>
  <tr> 
    <td>
      <canvas id="puzzleCanvasTree" width="220" height="220"></canvas><br><br>
      <button id="treeSolveButton">Solve</button>
      <button id="treeNextButton">Next Move</button>
      <button id="treePrevButton">Previous Move</button>
      <button id="treeAutoButton">Auto Play</button><br>
      <div id="movesCounterTree">Moves to solve: 0</div>
    </td>
  </tr>
  <tr>
    <th>Troll Puzzle Box</th>
  </tr>
  <tr> 
    <td>
      <canvas id="puzzleCanvasTroll" width="220" height="220"></canvas><br><br>
      <button id="trollSolveButton">Solve</button>
      <button id="trollNextButton">Next Move</button>
      <button id="trollPrevButton">Previous Move</button>
      <button id="trollAutoButton">Auto Play</button><br>
      <div id="movesCounterTroll">Moves to solve: 0</div>
    </td>
  </tr>
</table>
</p>
<script src="/js/clue_puzzle/puzzle_solver.js"></script>
<script>
  const castleBox = new PuzzleBox('puzzleCanvasCastle', 'castleSolveButton', puzzleSetCastle, 'movesCounterCastle', 'castleNextButton', 'castlePrevButton', 'castleAutoButton');
  const treeBox = new PuzzleBox('puzzleCanvasTree', 'treeSolveButton', puzzleSetTree, 'movesCounterTree', 'treeNextButton', 'treePrevButton', 'treeAutoButton');
  const trollBox = new PuzzleBox('puzzleCanvasTroll', 'trollSolveButton', puzzleSetTroll, 'movesCounterTroll', 'trollNextButton', 'trollPrevButton', 'trollAutoButton');
</script>
HTML; }