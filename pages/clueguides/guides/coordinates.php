<?php
function getGuideContent($guide) { return <<<HTML
<h2>Treasure Trails $guide Guide</h2>
<p>When you get a coordinate clue, it will say something like "04 degrees, 13 minutes North, 12 degrees, 45 minutes East".
<br><br>
<h3>Note: When you follow a clue with coordinates, you will need to have the sextant, watch, chart, and clue in your inventory to dig up the treasure.</h3>
<br>
<div style="display:flex;justify-content: center;">
    <canvas itemname="trail_watch" show-label="inline"></canvas>&nbsp;&nbsp;&nbsp;&nbsp;
    <canvas itemname="trail_sextant" show-label="inline"></canvas>&nbsp;&nbsp;&nbsp;&nbsp;
    <canvas itemname="trail_chart" show-label="inline"></canvas>
</div>
<br><br>
In order to aquire a sextant, watch, and chart, you first must have a coordinate clue and have either started or completed the <a href="?p=questguides&quest=observatory">Observatory Quest</a>. Once you have met these requirements, the steps are as follows:
<ol>
  <li>With the coordinate clue in your inventory, talk to the Observatory professor about Treasure Trails.</li>
  <li>Head over to Port Khazard and speak to Murphy to obtain a sextant.</li>
  <li>Speak with Brother Kojo in the Clock Tower for a watch.</li>
  <li>Finally, go back to the Observatory and speak with the assistant for the chart.</li>
  <li>Speak to the Observatory professor for the last and final time. Now you can do coordinate scrolls!</li>
</ol>
<br>
<hr>
<table class="table">
  <tr>
    <th colspan="2">Hard Clues</th>
  </tr>
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
</table><br>
* For Wilderness Clues: A Zamorak wizard will appear. Kill him and then dig again to get a casket.<br>
** For hard clues: A Saradomin wizard will appear. Same as above.
</p>
HTML; }