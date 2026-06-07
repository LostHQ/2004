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
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0000north.png">00 deg 00 min North<br>
      07 deg 13 min West</a>
    </td>
    <td>** Regicide area, Northeast of Tyras Camp (near the entrance to his camp, before the thick forest pass) past a stick trap, dig near the stone towards the back of the pond.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0124north.png">01 deg 24 min North<br>
      08 deg 05 min West</a>
    </td>
    <td>In Regicide area, go in the direction North of the tracker heading to the elves past the leaf trap, look for a path to the West of the leaf trap, there is a stick trap, South of the stick trap dig to the West of the first tree. The Saradomin wizard will appear, so be prepared!</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0246north.png">02 deg 46 min North<br>
      29 deg 11 min East</a>
    </td>
    <td>Al Kharid obstacle Duel Arena. You must challenge a player and set it to obstacles. The place where to do could be described as, near the corner of an 'L' shaped wall with a vertical line attached to the bottom</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0345south.png">03 deg 45 min South<br>
      22 deg 45 min East</a>
    </td>
    <td>** In the Bedabin Encampment, located in the Desert South of Al Kharid; digging spot is North of the small pond near the guarded tent. A Saradomin wizard will attack!</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0403south.png">04 deg 03 min South<br>
      03 deg 11 min East</a>
    </td>
    <td>In the Ogre city of Gu'Tanoth. You must have completed the Watchtower Quest to have access to this one</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0405south.png">04 deg 05 min South<br>
      04 deg 24 min East</a>
    </td>
    <td>** On the Ogre island South of Yanille.<br>To gain access to it, you must go through the tunnel South of the ogre city.<br> The clue is on the far East side of the island, inbetween a spear wall and a grouping of three roots.<br>A Saradomin Wizard (Level 108) will spawn and attack you. Kill it and dig again.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0416south.png">04 deg 16 min South<br>
      16 deg 16 min East</a>
    </td>
    <td>** Inside the Karamja Shipyard, Southernmost house.  Dig at the window between 2 bookshelves and a Level 108 Saradomin Wizard will attack!  (See the Grand Tree Quest Guide)</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0537north.png">05 deg 37 min North<br>
      31 deg 15 min East</a>
    </td>
    <td>Right behind the Nature Spirit's tree in Mort Myre swamp</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0550south.png">05 deg 50 min South<br>
      10 deg 05 min East</a>
    </td>
    <td>On Cairn Isle, by the Saradomin wizard</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0611south.png">06 deg 11 min South<br>
      15 deg 07 min East</a>
    </td>
    <td>East part of Karamja just North of the stepping stones you can balance on which leads to a Jungle Forester</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0743south.png">07 deg 43 min South<br>
        12 min 26 deg East</a>
    </td>
    <td>** In the Kharazi Jungle. You must have started the Legends Quest in order to get in.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0803north.png">08 deg 03 min North<br>
      31 min 16 deg East</a>
    </td>
    <td>In the Mort Myre swamp. Almost directly South of the gate leading into it. Head down, it was the second lake South of the gates.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0805south.png">08 deg 05 min South<br>
      15 deg 56 min East</a>
    </td>
    <td>** The Southeastern corner of Kharazi jungle (Legends Quest area), dig at the brown spot.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0826south.png">08 deg 26 min South<br>
      10 min 28 deg East</a></td>
    <td>** In the Kharazi Jungle, all the way South from the cave you did legends in, dig near a corpse, near the shore.</td>
  </tr>
  <tr>
   <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1603north.png">16 deg 03 min North<br>
      14 deg 07 min East</a>
    </td>
    <td>Just above the entrance to Mad Eadgar's cave on Trollheim mountain</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1607north.png">16 deg 07 min North<br>
      22 deg 45 min East</a>
    </td>
    <td>* In the Graveyard of Shadows in the level 20 wilderness - Starting from 
      the East entrance, follow the curly road until you see a dead tree right 
      next to it. Dig directly North of it to find the casket. </td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1631north.png">16 deg 31 min North<br>
      12 deg 54 min East</a>
    </td>
    <td>** Northern part of Troll Stronghold, 3 steps West of Mushroom the sleeping troll. A Saradomin wizard will attack!</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1643north.png">16 deg 43 min North<br>
      19 deg 13 min East</a>
    </td>
    <td>* At the Bandits Camp in the level 23 wilderness - Through the house and 
      outside with the rats, in the corner by the lake, as much East as possible, in the broken wall. </td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1850north.png">18 deg 50 min North<br>
      20 deg 26 min East</a>
    </td>
    <td>* Just West of the Easternmost rocks of Hobgoblin Mine in Wilderness.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1900north.png">19 deg 00 min North<br>
      27 deg 13 min East</a>
    </td>
    <td>* The steel dagger spawn in the Black Knight area (South from Demonic Ruins). To the west of the dagger. </td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1943north.png">19 deg 43 min North<br>
      25 deg 07 min East</a>
    </td>
    <td>* The Chaos Dwarf area in the level 35 wilderness - Go to the Big Bone 
      respawn. From that point, go directly North until you see some chaos dwarves 
      and rocks. You have to dig exactly in the middle of the large, white rocks. </td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/2005north.png">20 deg 05 min North<br>
      21 deg 52 min East</a>
    </td>
    <td>* Near the plant with the Moss Giants in the level 36 wilderness, West 
      of the Red Dragon island.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/2033north.png">20 deg 33 min North<br>
      15 deg 48 min East</a>
    </td>
    <td>* Just South of the Zamorak Altar in the level 38 wilderness. Dig at the West-southwest corner of the building. </td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/2124north.png">21 deg 24 min North<br>
      17 deg 54 min East</a>
    </td>
    <td>* The caged Lesser Demon cage in the level 41 wilderness.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/2235north.png">22 deg 35 min North<br>
      19 deg 18 min East</a>
    </td>
    <td>* Between the rune rocks in level 46 Wilderness, North of the Lava Maze.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/2245north.png">22 deg 45 min North<br>
      26 deg 33 min East</a>
    </td>
    <td>* At the Greater Demon ruins in the level 47 wilderness - You have to 
      dig on the most Northeast pentagram (the red star on the ground).</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/2424north.png">24 deg 24 min North<br>
      26 deg 24 min East</a>
    </td>
    <td>Level 53 Wilderness at the Rogues Castle. On the inside, the most Northeast point.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/2456north.png">24 deg 56 min North<br>
      22 deg 28 min East</a>
    </td>
    <td>* North of the Deserted Keep in the Wilderness - Use the Ardougne lever 
      to teleport to deep Wilderness, go North and slash the web. You should see 
      3 small craters in front of you. Dig between the east and middle crater.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/2458north.jpg">24 deg 58 min North<br>
      18 deg 43 min East</a>
    </td>
    <td>* Behind the Pirates hut  in the level 56 wilderness - You have to dig 
      directly North of the Pirate's bar - the casket is near the Northwestern corner.</td>
  </tr>
  <tr>
     <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/2503north1.png">25 deg 03 min North<br>
      17 deg 05 min East</a>
    </td>
    <td>* West of Agility Camp in the Wilderness - all the way North, close to agility course fence. </td>
  </tr>
  <tr>
     <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/2503north2.png">25 deg 03 min North<br>
       23 deg 24 min East</a>
      </td>
    <td>* Northeast of Mage Arena, North of the building with the magic axes 2 spaces West of the back door. </td>
  </tr>
</table>
<hr>
<h3>Maps</h3>
<p>
    Sometimes you might get a clue scroll, and when you open it up to read it, all you see is a map. Your task is now to find out where that place is, and then, like the pirates always do, take the steps shown on your map, and dig where X marks the spot ;) To dig, you'll need your trusty spade. Here's a list of the different maps:
</p>
<table class="table" width="100%">
  <tr> 
    <td><img src="img/clue_guides/maps/hard/varrock_lumber.png" style="width:200px;" alt="varrock_lumber.png"></td>
    <td>Varrock Lumberyard Map<br><br>Lumberyard, north-east of Varrock</td>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/hard/clue_black_warriors_fortress_wildy.png" style="width:200px;" alt="clue_black_warriors_fortress_wildy.png"></td>
    <td>Black warriors fortress in the Wilderness. Search the crate in the southwest corner of the area inside.</td>
  </tr>
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
<h3>Riddles</h3>
<p>
    Riddles are primarily to test your Runescape knowledge. If you remember most of the stuff you learned through quests and other information, you shouldn't have a problem with these.
</p>
<table class="table">
  <tr>
    <th width="50%">Clue/Riddle</th>
    <th>Solution</th>
  </tr>
  <tr>
    <td>You will need to under-cook<br>to solve this one.</td>
    <td>Go to Lumbridge basement under the kitchen and search one of the crates.</td>
  </tr>
  <tr>
    <td>Come to the <span style="color:orange;">evil ledge</span><br><span style="color:grey;">Yew know you want to</span><br>Try not to get stung.</td>
    <td>Edgeville yew tree - Dig around it.</td>
  </tr>
  <tr>
    <td>I am a token of the strongest love.<br>My middle is empty, I have no<br>beginning or end. My eye is red yet<br>I can fit like a glove. Go to the<br>place where money they lend, And<br>dig by the gate to be my friend.</td>
    <td>Dig next to the gate, under the west bank of Varrock.</td>
  </tr>
  <tr>
    <td>If a man carried my burden,<br>he would break his back.<br>I am not rich,<br>but leave silver in my track.<br>Speak to the keeper of my trail.</td>
    <td>Talk to Gerrant in the fish shop in Port Sarim.</td>
  </tr>
  <tr>
    <td>Aggie I see.<br>Lonely and southern I feel.<br>I am neither inside nor outside<br>the house, yet no house would<br>be complete without me.<br>Your treasure waits beneath me!</td>
    <td>At Aggie the Witch's house in Draynor Village, dig under the window in the south side of the house, south of cauldron.</td>
  </tr>
  <tr>
    <td>My home is grey, and made of stone;<br>A castle with a search for a meal.<br>Hidden in some drawers I am,<br>across from a wooden wheel.</td>
    <td>Search the drawers on the <span data-floors="US">2nd floor</span> of Lumbridge Castle - Inside the room with a spinning wheel.</td>
  </tr>
  <tr>
    <td>The beasts to my east snap claws and<br>tails. The rest to my west can slide and<br>eat fish. The northern will jump and<br>wail. Dig by my fire and make a wish.</td>
    <td>Between the penguins and scorpions in the Ardougne Zoo - Dig by the torch.</td>
  </tr>
  <tr>
    <td>Four blades I have<br>yet I draw no blood.<br>But I mash and turn<br>my victims to powder.<br>Search in my head,<br>search in my rafters,<br>where my blades are louder.</td>
    <td>It's a crate in the top of Lumbridge/Draynor windmill.</td>
  </tr>
  <tr>
    <td>I lie lonely and forgotten<br>in mid wilderness,<br>where the dead rise from their beds.<br>Feel free to quarrel and wind me up,<br>and dig while you shoot their heads.</td>
    <td>Under the crossbow in Graveyard of Shadows in the Level 18 Wilderness. Pick up crossbow and dig under it.</td>
  </tr>
  <tr>
    <td>46 is my number.<br>My body is burnt orange colour<br>and crawls with those with eight.<br>3 mouths I have, yet I cannot eat.<br>My blinking blue eye<br>hides my grave.</td>
    <td>The blue eye is the sapphire in the spider nest in Level 46 Wilderness. Try to dig below it with a spade.</td>
  </tr>
  <tr>
    <td>My giant guardians below<br>the market streets would<br>be fans of rock and roll,<br>if only they could grab hold of it.<br>Dig near my green bubbles!</td>
    <td>Dig next to the cauldron with green bubbling liquid in the Varrock sewers by the Moss Giants.</td>
  </tr>
  <tr>
    <td>Snah? I feel all confused,<br>like one of those cakes...</td>
    <td>Talk to Hans in Lumbridge Castle.</td>
  </tr>
  <tr>
    <td><span style="color:orange;">'A bag belt only?'</span><br>He asked his balding brothers.</td>
    <td>Abbott Langley in the Monastery - Northeast from Dwarven Mine, northwest of Barbarian Village.</td>
  </tr>
  <tr>
    <td>The keeper of Melzars...<br>Spare? Skeleton? Anar?</td>
    <td>Talk to Oziach The Rune Plate seller - West of Edgeville</td>
  </tr>
  <tr>
    <td>Surprising? I bet he is....</td>
    <td>Sir Prysin on the first floor of Varrock castle.</td>
  </tr>
  <tr>
    <td>My name is like a tree,<br>yet it is spelt with a 'g'.<br>Come see the fur<br>which is right near me.</td>
    <td>Speak to the Child Wilough ("Willow") in the Varrock Market - Next to the fur merchant.</td>
  </tr>
  <tr>
    <td>Generally speaking,<br>his nose was very bent.</td>
    <td>General Bentnoze in the Goblin Village- North of Falador</td>
  </tr>
  <tr>
    <td>There is no 'worthier' lord.</td>
    <td>Lord Eirworth in the Elf camp</td>
  </tr>
  <tr>
    <td>Often examined by learners of<br>what has past, find me where<br>words of wisdom speak volumes.</td>
    <td>Examiner at Digsite, always gives puzzle boxes</td>
  </tr>
  <tr>
    <td>Identify the back of this<br>over-acting brother.<br><br>(He's a long way from home.)</td>
    <td>Hamid the monk by the Duel Arena altar</td>
  </tr>
  <tr>
    <td>This aviator is at the<br>peak of his profession.</td>
    <td>Speak to gnome pilot at the top of White Wolf Mountain.</td>
  </tr>
  <tr>
    <td>Read 'How to breed scorpions.'<br>by O.W.Thathurt.</td>
    <td>Go to the <span data-floors="US">2nd floor</span> of the wizards tower south-southwest of the Seers' Village, search the bookcase on the northern wall. </td>
  </tr>
  <tr>
    <td>A great view - watch<br>the rapidly drying<br>hides get splashed.<br>Check the box you are sitting on.</td>
    <td>The house near Baxtorian Falls. Go upstairs and search the boxes.</td>
  </tr>
  <tr>
    <td>Must be full of railings.</td>
    <td>Search the crate outside the house with the broken multicannon (near where you start the Dwarf Cannon quest.) It's the first crate to the west with the 'X' on it.</td>
  </tr>
  <tr> 
    <td>Citric cellar</td>
    <td>Speak to Heckel Funch in the Grand Tree, 2nd floor southeast path </td>
  </tr>
  <tr>
    <td>'Small shoe.'<br>Often found with<br>rod on mushroom.</td>
    <td>Speak to the trainer in the Gnome Stronghold agility arena.</td>
  </tr>
  <tr>
    <td>When no weapons are at hand,<br>then is the time to reflect.<br>In Saradomin's name,<br>redemption draws closer...</td>
    <td>Entrana in a drawer in the house with a glass blowing pipe.</td>
  </tr>
  <tr>
    <td>Mine was the strangest birth<br>under the sun. I left the<br>crimson sack, yet life had not<br>begun. Entered the world, and<br>yet was seen by none.</td>
    <td>Lesser cave, Karamja volcano - pick up red spider eggs and dig.</td>
  </tr>
</table>
<hr>
<h3>Puzzles</h3>
<table class="table" width="100%">
  <tr>
    <th>Castle Puzzle Box Solver</th>
    <th>Grand Tree Puzzle Box</th>
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
    <th colspan=2>Troll Puzzle Box</th>
  </tr>
  <tr> 
    <td colspan=2>
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