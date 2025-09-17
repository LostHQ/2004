<?php
function getGuideContent($guide) { return <<<HTML
<h2>Treasure Trails $guide Guide</h2>
<p>When you get a co-ordinate clue, it will say something like "04 degrees, 13 minutes North, 12 degrees, 45 minutes East".
<br><br>
<b>Note:</b> When you follow a clue with co-ordinates, you will need to have the sextant, watch, chart, and clue in your inventory to dig up the treasure.
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
<table class="table">
  <tr>
    <th colspan="2">Medium Clues</th>
  </tr>
  <tr>
    <th width="150px">Coordinate:</th>
    <th>Location:</th>
  </tr>
  <!--
  <tr>
    <td>00 deg 00 min North<br>
      07 deg 13 min West
    </td>
    <td>** Regicide area, Northeast of Tyras Camp (near the entrance to his camp, before the thick forest pass) past a stick trap, dig near the stone towards the back of the pond.</td>
  </tr>
  <tr>
    <td>00 deg 13 min South<br>
      13 deg 58 min East
    </td>
    <td>On Karamja between two small lakes, just past the mud path by the banana plantation.</td>
  </tr>
  <tr>
    <td>00 deg 18 min South<br>
      09 min 28 deg East
    </td>
    <td>South-west of Brimhaven, two paces South of the Northwestern most gold rock</td>
  </tr>
  <tr>
    <td>01 deg 24 min North<br>
      08 deg 05 min West
    </td>
    <td>In Regicide area, go in the direction North of the tracker heading to the elves past the leaf trap, look for a path to the West of the leaf trap, there is a stick trap, South of the stick trap dig to the West of the first tree. The Saradomin wizard will appear, so be prepared!</td>
  </tr>
  <tr>
    <td>02 deg 46 min North<br>
      29 deg 11 min East
    </td>
    <td>Al Kharid obstacle Duel Arena. You must challenge a player and set it to obstacles. The place where to do could be described as, near the corner of an 'L' shaped wall with a vertical line attached to the bottom</td>
  </tr>
  <tr>
    <td>03 deg 45 min South<br>
      22 deg 45 min East
    </td>
    <td>** In the Bedabin Encampment, located in the Desert South of Al Kharid; digging spot is North of the small pond near the guarded tent. A Saradomin wizard will attack!</td>
  </tr>
  <tr>
    <td>04 deg 03 min South<br>
      03 deg 11 min East
    </td>
    <td>In the Ogre city of Gu'Tanoth. You must have completed the Watchtower Quest to have access to this one</td>
  </tr>
  <tr>
    <td>04 deg 05 min South<br>
      04 deg 24 min East
    </td>
    <td>** On the Ogre island South of Yanille.<br>To gain access to it, you must go through the tunnel South of the ogre city.<br> The clue is on the far East side of the island, inbetween a spear wall and a grouping of three roots.<br>A Saradomin Wizard (Level 108) will spawn and attack you. Kill it and dig again.</td>
  </tr>
  <tr>
    <td>04 deg 16 min South<br>
      16 deg 16 min East
    </td>
    <td>** Inside the Karamja Shipyard, Southernmost house.  Dig at the window between 2 bookshelves and a Level 108 Saradomin Wizard will attack!  (See the Grand Tree Quest Guide)</td>
  </tr>
  <tr>
    <td>05 deg 37 min North<br>
      31 deg 15 min East
    </td>
    <td>Right behind the Nature Spirit's tree in Mort Myre swamp</td>
  </tr>
  <tr>
    <td>05 deg 50 min South<br>
      10 deg 05 min East
    </td>
    <td>On Cairn Isle, by the Saradomin wizard</td>
  </tr>
  <tr>
    <td>06 deg 11 min South<br>
      15 deg 07 min East
    </td>
    <td>East part of Karamja just North of the stepping stones you can balance on which leads to a Jungle Forester</td>
  </tr>
    <tr>
    <td>07 deg 05 min North<br>
      30 deg 56 min East
    </td>
    <td>In Mort Myre swamp, substantially Northwest of the island where the Nature Spirit is; dig near a tree</td>
  </tr>
  <tr>
      <td>07 deg 43 min South<br>
        12 min 26 deg East
      </td>
      <td>** In the Kharazi Jungle. You must have started the Legends Quest in order to get in.</td>
  </tr>
  <tr>
    <td>08 deg 03 min North<br>
      31 min 16 deg East
    </td>
    <td>In the Mort Myre swamp. Almost directly South of the gate leading into it. Head down, it was the second lake South of the gates.</td>
  </tr>
  <tr>
    <td>08 deg 05 min South<br>
      15 deg 56 min East
    </td>
    <td>** The Southeastern corner of Kharazi jungle (Legends Quest area), dig at the brown spot.</td>
  </tr>
  <tr>
    <td>08 deg 26 min South<br>
      10 min 28 deg East</td>
    <td>** In the Kharazi Jungle, all the way South from the cave you did legends in, dig near a corpse, near the shore.</td>
  </tr>
  <tr>
    <td>08 deg 33 min North<br>
      01 min 39 deg West
    </td>
    <td>South-west corner of the Gnome Stronghold, cross a bridge to the terrorbird pen, exit the East-northeast gate of the pen and dig near the water.</td>
  </tr>
  <tr>
    <td>11 deg 03 min North<br>
      31 deg 20 min East
    </td>
    <td>It's Northwest of Canifis (the werewolf town) in the swamps, just above the river portal (must have completed Priest in Peril quest to get there). Go North to gate to new area, proceed slightly East. The spot is on the North side of the path, South of some large roots.</td>
  </tr>
  <tr>
    <td>11 deg 05 min North<br>
      00 deg 45 min West
    </td>
    <td>Between two swamps Northwest of the Grand Tree</td>
  </tr>
  <tr>
    <td>11 deg 41 min North<br>
      14 deg 58 min East
    </td>
    <td>An area surrounded by a fence next to the pub in Burthorpe</td>
  </tr>
  <tr>
   <td>16 deg 03 min North<br>
      14 deg 07 min East
    </td>
    <td>Just above the entrance to Mad Eadgar's cave on Trollheim mountain</td>
  </tr>
  <tr>
    <td>18 deg 50 min North<br>
      20 deg 26 min East
    </td>
    <td>* Just West of the Easternmost rocks of Hobgoblin Mine in Wilderness.</td>
  </tr>
  <tr>
    <td>24 deg 24 min North<br>
      26 deg 24 min East
    </td>
    <td>Level 50 Wilderness at the Rogues Castle. On the inside, the most Northeast point.</td>
  </tr>
  <tr>
    <td>16 deg 31 min North<br>
      12 deg 54 min East
    </td>
    <td>** Northern part of Troll Stronghold, 3 steps West of Mushroom the sleeping troll. A Saradomin wizard will attack!</td>
  </tr>
  -->
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0005south.png">00 deg 05 min South<br>
      01 deg 13 min East</a>
    </td>
    <td>East opposite the Observatory, West of Tree Gnome Village - Dig on the South West 
      side of the Lonely Willow Tree</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0030north.png">00 deg 30 min North<br>
      24 deg 16 min East</a>
    </td>
    <td>Lumbridge swamps - From the shack to the Lost City, head North East until you see an open area with rocks on the ground, proceed to dig there</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0031south.png">00 deg 31 min South<br>
      17 deg 43 min East</a>
    </td>
    <td>South of the Church located South of Rimmington, West of Port Sarim - Near the entrance to the Ice Caves </td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0126north.png">01 deg 26 min North<br>
      08 deg 01 min East</a>
    </td>
    <td>In the middle of the Moss Giant Island at its highest point, West of 
      Brimhaven - You will need agility to get there.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0135south.png">01 deg 35 min South<br>
      07 deg 28 min East</a>
    </td>
    <td>The Green Spider island East of Yanille </td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0248north.png">02 deg 48 min North<br>
      22 deg 30 min East</a>
    </td>
    <td>Behind Lumbridge Castle - On the path behind the spider hut</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0250north.png">02 deg 50 min North<br>
      06 deg 20 min East</a>
    </td>
    <td>South of Ardougne, North of the Necromancer - Dig by the NorthEast side 
      of the group of 3 willow trees</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0400south.png">04 deg 00 min South<br>
      12 deg 46 min East</a>
    </td>
    <td>It's the Mining area North of Shilo Village. Middle of the spot. It's 
      *NOT* the gem rocks. Look at world map. </td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0413north.png">04 deg 13 min North<br>
      12 deg 45 min East</a>
    </td>
    <td>Crandor island area with the King scorpions - Go to the Northernmost part, 
      East of mines</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0543north.png">05 deg 43 min North<br>
      23 deg 05 min East</a>
    </td>
    <td>The Lumbridge cow pen by the river - North of the Windmill between Draynor 
      and Lumbridge</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0631north.png">06 deg 31 min North<br>
      01 deg 46 min West</a>
    </td>
    <td>At a grouping of 3 ponds Southwest of the Tree Gnome Stronghold - dig between 
      the 2 most Eastern ponds.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0733north.png">07 deg 33 min North<br>
      15 min 00 deg East</a>
    </td>
    <td>Lady of the Lake, SouthWest of the gate leading to Taverley - Dig on top 
      of some leaves</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0933north.png">09 deg 33 min North<br>
      02 deg 15 min East</a>
    </td>
    <td>Baxtorian Falls, Second island on the Waterfall - You will need to bring 
      a rope, Dig right before the dead tree on the edge of the waterfall</td>
  </tr>
</table>
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
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1607north.png">16 deg 07 min North<br>
      22 deg 45 min East</a>
    </td>
    <td>* In the Graveyard of Shadows in the level 20 wilderness - Starting from 
      the East entrance, follow the curly road until you see a dead tree right 
      next to it. Dig directly North of it to find the casket. </td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1643north.png">16 deg 43 min North<br>
      19 deg 13 min East</a>
    </td>
    <td>* At the Bandits Camp in the level 23 wilderness - Through the house and 
      outside with the rats, in the corner by the lake, as much East as possible, in the broken wall. </td>
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
* For Wilderness Clues: A Zamorak wizard will appear. Kill him and then dig again to get a casket.
</p>
HTML; }