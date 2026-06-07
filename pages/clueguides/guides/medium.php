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
    <th colspan="2">Medium Clues</th>
  </tr>
  <tr>
    <th width="150px">Coordinate:</th>
    <th>Location:</th>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0005south.png">00 deg 05 min South<br>
      01 deg 13 min East</a>
    </td>
    <td>East opposite the Observatory, West of Tree Gnome Village - Dig on the South West 
      side of the Lonely Willow Tree</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0013south.png">00 deg 13 min South<br>
      13 deg 58 min East</a>
    </td>
    <td>On Karamja between two small lakes, just past the mud path by the banana plantation.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0018south.png">00 deg 18 min South<br>
      09 min 28 deg East</a>
    </td>
    <td>South-west of Brimhaven, two paces South of the Northwestern most gold rock</td>
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
    <td>Southeast of Ardougne Zoo, on a small cape - Dig by the NorthEast side of the group of 3 willow trees</td>
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
    <td>Just south of the Champions' Guild, opposite side of the River Lum in Lumbridge - Go directly to the Northernmost part from the gate</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0631north.png">06 deg 31 min North<br>
      01 deg 46 min West</a>
    </td>
    <td>At a grouping of 3 ponds Southwest of the Tree Gnome Stronghold - dig between 
      the 2 most Eastern ponds.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0705north.png">07 deg 05 min North<br>
      30 deg 56 min East</a>
    </td>
    <td>In Mort Myre swamp, substantially Northwest of the island where the Nature Spirit is; dig near a tree</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0733north.png">07 deg 33 min North<br>
      15 min 00 deg East</a>
    </td>
    <td>Lady of the Lake, SouthWest of the gate leading to Taverley - Dig on top 
      of some leaves</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0833north.png">08 deg 33 min North<br>
      01 min 39 deg West</a>
    </td>
    <td>South-west corner of the Gnome Stronghold, cross a bridge to the terrorbird pen, exit the East-northeast gate of the pen and dig near the water.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/0933north.png">09 deg 33 min North<br>
      02 deg 15 min East</a>
    </td>
    <td>Baxtorian Falls, Second island on the Waterfall - You will need to bring 
      a rope, Dig right before the dead tree on the edge of the waterfall</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1103north.png">11 deg 03 min North<br>
      31 deg 20 min East</a>
    </td>
    <td>It's Northwest of Canifis (the werewolf town) in the swamps, just above the river portal (must have completed Priest in Peril quest to get there). Go North to gate to new area, proceed slightly East. The spot is on the North side of the path, South of some large roots.</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1105north.png">11 deg 05 min North<br>
      00 deg 45 min West</a>
    </td>
    <td>Between two swamps Northwest of the Grand Tree</td>
  </tr>
  <tr>
    <td><a href="#" class="image-link" data-image="img/clue_guides/coordinates/1141north.png">11 deg 41 min North<br>
      14 deg 58 min East</a>
    </td>
    <td>An area surrounded by a fence next to the pub in Burthorpe</td>
  </tr>
</table>
<hr>
<h3>Maps</h3>
<p>
    Sometimes you might get a clue scroll, and when you open it up to read it, all you see is a map. Your task is now to find out where that place is, and then, like the pirates always do, take the steps shown on your map, and dig where X marks the spot ;) To dig, you'll need your trusty spade. Here's a list of the different maps:
</p>
<table class="table" width="100%">
  <tr> 
    <td><img src="img/clue_guides/maps/medium/draynor_fishing.png" style="width:200px;" alt="dranyor_fishing"></td>
    <td>Draynor Fish Spot Map<br><br>South of Draynor Village's bank</td>
  </tr>
  <!-- unobtainium
  <tr>
    <td><img src="img/clue_guides/maps/medium/rangerguild.png" style="width:200px;" alt="rangerguild"></td>
    <td>Rangers Guild Map<br><br>East of the Ranger's Guild</td>
  </tr>-->
  <tr>
    <td><img src="img/clue_guides/maps/medium/clue_McGrubors_wood.png" style="width:200px;" alt="McGrubor's wood"></td>
    <td>Inside McGrubor's wood, which is west of Seer's village.</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/maps/medium/clue_hobgoblin_peninsula.png" style="width:200px;" alt="Hobgoblin peninsula"></td>
    <td>It's on the Hobgoblin peninsula that sticks out west of the Crafting Guild (below the Make over Mage - found directly west after exiting Falador by the south entrance).</td>
  </tr>
  <tr> 
    <td><img src="img/clue_guides/maps/medium/clue_necromancer.png" style="width:200px;" alt="clue_necromancer.png"></td>
    <td>At the Necromancer peninsula south of East Ardougne. 2 squares west of the small tree as indicated on the clue map.</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/maps/medium/clue_Rimmington_chemists.png" style="width:200px;" alt="Chemist's house"></td>
    <td>West of the Chemist's house west of Rimmington (South of Falador below the Crafting Guild).</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/maps/medium/clue_clock_tower.jpg" style="width:200px;" alt="clock tower"></td>
    <td>Search a crate on the west side of the Clock Tower, which is south of Ardougne.</td>
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
    <td>You'll need to look for<br>a town with a central<br>fountain. Look for a locked<br>chest in the town's chapel.</td>
    <td>Varrock, and the chest says 'property of Black Heather' --&gt; in Bandit camp in wild, slay her for key.</td>
  </tr>
  <tr>
    <td>In a town where the guards<br>are armed with maces search<br>the upstairs rooms of the<br>Public House.</td>
    <td>Ardougne Tavern on the west side of the river, north of the palace. Search the drawers. If it is locked, right-click on it and find out why. You need to kill a guard dog at the nearby Handelmort Mansion for a key.</td>
  </tr>
  <tr>
    <td>In a town where thieves<br>steal from stalls, search for<br>some drawers in the upstairs<br>of a house near the bank.</td>
    <td>East side of river in East Ardougne - Jerico's house on the <span data-floors="US">2nd floor</span>. You will need to kill a guard to get a key.</td>
  </tr>
  <tr>
    <td>Look for some locked drawers<br>in the house opposite a<br>workshop in a town where<br>everyone has perfect vision.</td>
    <td>Go to the house in Seers' Village south of the house with the anvils. The drawers will be locked, follow the road north to the Sinclair Mansion or south-west to the Ranging Guild. Kill a chicken to get the key for the drawer.</td>
  </tr>
  <tr>
    <td>In a town where wizards are<br>known to gather, search<br>upstairs in a large<br>house to the north.</td>
    <td><span data-floors="US">2nd floor</span> of a house in Yanille - North of Magic Guild. You will need to kill a man to get a key for the chest.</td>
  </tr>
  <tr>
    <td>In a village made of bamboo,<br>look for some crates<br>under one of the houses.</td>
    <td>Karamja, in Tai Bwo Wannai, south of Brimhaven</td>
  </tr>
  <tr>
    <td>Search the upstairs drawers<br>of a house in a village where<br>pirates are known to have a good time.</td>
    <td>Across the street from the bar in Brimhaven (2 houses south of Agility Arena, south of the house with a cooking pot symbol.) Go upstairs in that house and search the drawers. It will say "Shiver me timbers" and not allow you to open the chest. Kill the pirate near that house, he will drop a key. Use the key on the drawers.</td>
  </tr>
  <tr>
    <td>Go to the village being<br>attacked by trolls, search the<br>drawers in one of the houses.</td>
    <td>Burthorpe, house with anvils up north. When you try to open the drawers it says "wait til I get my hands on Penda, he's nicked the key again." Go to pub in Burthorpe and kill Penda for key.</td>
  </tr>
  <tr>
    <td>A town with a different sort of<br>night-life is your destination.<br>Search for some crates<br>in one of the houses.</td>
    <td>In the clothes shop of Canifis, Morytania.</td>
  </tr>
  <tr>
    <td>Find a crate close to the<br>monks that like to paaarty!</td>
    <td>Search the crates in the building with monks south of Ardougne.</td>
  </tr>
</table>
<hr>
<h3>Anagrams</h3>
<p>
    An anagram is a word where the letters of the original word are rearranged to make a new word. If you get an anagram clue, it will say so on it. There aren't many anagrams in treasure trails, and they aren't hard to figure out. Here's the list:
</p>
<table class="table">
  <tr>
    <th>Anagram:</th>
    <th>Person:</th>
    <th>Town/Location:</th>
  </tr>
  <tr>
    <td>A BAS</td>
    <td>Saba</td>
    <td>A cave in Burthorpe </td>
  </tr>
  <tr>
    <td>AHA JAR</td>
    <td>Jaraah</td>
    <td>Al Kharid duel arena hospital</td>
  </tr>
  <tr>
    <td>ARE COL</td>
    <td><a href="#challenges" class="a">Oracle*</a></td>
    <td>Ice Mountain </td>
  </tr>
  <tr> 
    <td>BAIL TRIMS</td>
    <td><a href="#challenges" class="a">Brimstail*</a></td>
    <td>Southwest corner of the Gnome Stronghold in a "hollowed" cave</td>
  </tr>
  <tr>
    <td>BAR BELL SEEK</td>
    <td><a href="#challenges" class="a">Kebab Seller*</a></td>
    <td>Al Kharid</td>
  </tr>
  <tr>
    <td>EEK ZERO OP</td>
    <td><a href="#challenges" class="a">Zookeeper*</a></td>
    <td>East Ardougne - Southwest corner on the east side of river</td>
  </tr>
  <tr>
    <td>EL OW</td>
    <td>Lowe</td>
    <td>Archery Store in Varrock - Next to East Bank</td>
  </tr>
  <tr>
    <td>GOBLIN KERN</td>
    <td>King Bolren</td>
    <td>Gnome Maze - Usually close to the Spirit Tree</td>
  </tr>
  <tr>
    <td>HALT US</td>
    <td>Luthas</td>
    <td>Karamja - Inside the Banana Plantation</td>
  </tr>
  <tr>
    <td>ICY FE</td>
    <td>Fycie</td>
    <td>South of Yanille, Feldip Hills area, in a cave north of Rantz</td>
  </tr>
  <tr>
    <td>ME IF</td>
    <td>Femi the gnome</td>
    <td>By the big gate at the entrance to the Gnome Stronghold</td>
  </tr>
  <tr>
    <td>OK CO</td>
    <td><a href="#challenges" class="a">Cook*</a></td>
    <td>Lumbridge Castle</td>
  </tr>
  <tr>
    <td>PEATY PERT</td>
    <td>Party Pete</td>
    <td>Seers Village - South of the Bank</td>
  </tr>
</table>
<hr>
<h3>Speak to...</h3>
<p>
    In treasure trails you will some times get a clue saying something like "Speak to ....". This is a list of the different NPC's that we find on medium treasure trails.
</p>
<table class="table">
  <tr> 
    <th>Speak to ...</th>
    <th>Location they are found:</th>
  </tr>
  <tr> 
    <td>Donovan</td>
    <td>Sinclair Mansion Second floor - North of Camelot and Seer's Village</td>
  </tr>
  <tr> 
    <td>Hajedy</td>
    <td>Brimhaven - Usually walking by the North dock to Ardougne</td>
  </tr>
  <tr>
    <td>Hazelmere</td>
    <td>House on the green spiders island east of Yanille, second floor </td>
  </tr>
  <tr> 
    <td>Kangai Mau</td>
    <td>Inside the food store in Brimhaven</td>
  </tr>
  <tr> 
    <td><a href="#challenges" class="a">Referee*</a></td>
    <td>Gnome Stronghold in the Gnome-Ball course</td>
  </tr>
  <tr> 
    <td>Roavar</td>
    <td>In Canifis bar, Morytania</td>
  </tr>
  <tr>
    <td>Ulizius</td>
    <td>The monk at the gate of Mort Myre swamp</td>
  </tr>
</table>
<hr>
<h3>Challenge Scrolls</h3>
<p>
    * Some NPCs will give you a challenge scroll before letting you advance to the next step. Below are the solutions to these challenges.
</p>
<a name="challenges"></a>
<table class="table">
  <tr> 
    <th>Challenge Clue:</th>
    <th>Solution</th>
  </tr>
  <tr> 
    <td>How many animals in total<br>are there in the zoo?</td>
    <td>40</td>
  </tr>
  <tr> 
    <td>How many cannons does<br>Lumbridge Castle have?</td>
    <td>9</td>
  </tr>
  <tr> 
    <td>I have 16 kebabs, I eat one<br>myself and then share the rest<br>equally between 3 friends.<br>How many do they have each?</td>
    <td>5</td>
  </tr>
  <tr> 
    <td>If x is 15 and y is 3<br>What is 3x + y?</td>
    <td>48</td>
  </tr>
  <tr> 
    <td>What is 19 to the power of 3?</td>
    <td>6859</td>
  </tr>
  <tr> 
    <td>What is 57 x 89 + 23?</td>
    <td>5096</td>
  </tr>
</table>
HTML; }