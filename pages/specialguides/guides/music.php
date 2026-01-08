<?php
function getSpecialGuide($currSpecialGuide) { return <<<HTML
<h2>$currSpecialGuide</h2>
Quick Links<br>
<a href="#a">A</a> 
<a href="#b">B</a> 
<a href="#c">C</a> 
<a href="#d">D</a> 
<a href="#e">E</a> 
<a href="#f">F</a> 
<a href="#g">G</a> 
<a href="#h">H</a> 
<a href="#i">I</a> 
<a href="#j">J</a> 
<a href="#k">K</a> 
<a href="#l">L</a> 
<a href="#m">M</a> 
<a href="#n">N</a> 
<a href="#o">O</a> 
<a href="#p">P</a> 
<a href="#q">Q</a> 
<a href="#r">R</a> 
<a href="#s">S</a> 
<a href="#t">T</a> 
<a href="#u">U</a> 
<a href="#v">V</a> 
<a href="#w">W</a>  
<a href="#y">Y</a> 
<a href="#z">Z</a>
<br><br>
<table class="table">
    <tr>
        <th>Song</th>
        <th>Location</th>
    </tr>
    <tr>
        <th colspan="2"><span id="a"></span>A</th>
    </tr>
    <tr><td>Adventure</td><td>North of the North Entrance to Varrock</td></tr>
    <tr><td>Al Kharid</td><td>In Al Kharid</td></tr>
    <tr><td>Alone</td><td>Ice Mountain and the Monastary area</td></tr>
    <tr><td>Ambient Jungle</td><td>In Shilo Village</td></tr>
    <!-- <tr><td>Anywhere</td><td>By the Ape Atoll Archer pass</td></tr> -->
    <tr><td>Arabian</td><td>By the Al Kharid toll gate</td></tr>
    <tr><td>Arabian2</td><td>By the Al Kharid mining canyon</td></tr>
    <tr><td>Arabian3</td><td>North Middle part of the Shantay Pass Desert</td></tr>
    <tr><td>Arabique</td><td>At the start of Taverly Dungeon</td></tr>
    <tr><td>Army Of Darkness</td><td>Skeleton Coal Mine and Wilderness Castle area and in the Chaos Altar Temple</td></tr>
    <tr><td>Arrival</td><td>Area south of Taverly between lake and member fence</td></tr>
    <!-- <tr><td>Artistry</td><td>Mime Random Event</td></tr> -->
    <tr><td>Attack1</td><td>Around the Khazard Battlefield</td></tr>
    <tr><td>Attack2</td><td>In Karamja/Crandor Dungeon</td></tr>
    <tr><td>Attack3</td><td>Poison spider-filled teleport area to the KBD Lair</td></tr>
    <tr><td>Attack4</td><td>Khazard Fight Arena</td></tr>
    <tr><td>Attack5</td><td>Temple of Ikov ice cave and the KBD lair</td></tr>
    <tr><td>Attack6</td><td>Ogre City cave where the Ogre Shamans are</td></tr>
    <tr><td>Attention</td><td>East Karamja Dock and North of the Blurite Mine</td></tr>
    <tr><td>Autumn Voyage</td><td>Northeast of Lumbridge by livestock and farms</td></tr>
    <tr><td>Aztec</td><td>Brimhaven Agility Arena</td></tr>
    <tr>
        <th colspan="2"><span id="b"></span>B</th>
    </tr>
    <tr><td>Background2</td><td>On Entrana</td></tr>
    <tr><td>Ballad Of Enchantment</td><td>Around Clock Tower</td></tr>
    <tr><td>Bandit Camp</td><td>In The Bebadin Camp</td></tr>
    <!-- <tr><td>Barbarianism</td><td>Barbarian Village</td></tr> -->
    <tr><td>Baroque</td><td>Ardougne Market</td></tr>
    <tr><td>Beyond</td><td>Underground Dwarf passage under White Wolf Mountain including the Ice Queen's cave</td></tr>
    <tr><td>Big Chords</td><td>Around the Yanille Watchtower and West Yanille</td></tr>
    <tr><td>Book Of Spells</td><td>Lumbridge Swamp and west of the Mage Arena</td></tr>
    <!-- <tr><td>Borderland</td><td>East of Relleka</td></tr> -->
    <!-- <tr><td>Breeze</td><td>Within the Elven nation</td></tr> -->
    <tr>
        <th colspan="2"><span id="c"></span>C</th>
    </tr>
    <tr><td>Camelot</td><td>Around Camelot Castle</td></tr>
    <!-- <tr><td>Castlewars</td><td>Castle Wars minigame</td></tr> -->
    <tr><td>Cave Background1</td><td>Dwarf Mines</td></tr>
    <tr><td>Cavern</td><td>Yanille Agility Dungeon and High Level Wilderness Dungeon also at the level 26 Wilderness Red Spider Ruins</td></tr>
    <tr><td>Cellar Song1</td><td>Varrock West Bank Vault</td></tr>
    <tr><td>Chain Of Command</td><td>Temple of Ikov</td></tr>
    <tr><td>Chompy Hunt</td><td>Southeast of Ogre Village at "Big Chompy Bird Hunting" quest start</td></tr>
    <tr><td>Close Quarters</td><td>Red Spider ruins at level 26-29 Wilderness</td></tr>
    <!-- <tr><td>Competition</td><td>Burthorpe Game Room</td></tr> -->
    <!-- <tr><td>Complication</td><td>Chaos Rune Altar</td></tr> -->
    <tr><td>Contest</td><td>Death Plateau</td></tr>
    <!-- <tr><td>Courage</td><td>Start of Taverly Dungeon</td></tr> -->
    <!-- <tr><td>Crystal Castle</td><td>Near Prifddinas Gate</td></tr> -->
    <tr><td>Crystal Cave</td><td>Water Rune Altar</td></tr>
    <tr><td>Crystal Sword</td><td>Low Level Wilderness North of Varrock and also in the East Ardougne Dungeon</td></tr>
    <tr><td>Cursed</td><td>Right when you enter the Underground Passage</td></tr>
    <tr>
        <th colspan="2"><span id="d"></span>D</th>
    </tr>
    <tr><td>Dangerous</td><td>Around the Wilderness Poison Wood</td></tr>
    <!-- <tr><td>Dangerous Road</td><td>Karamja Volcano Dungeon, Karamja side Dark - At the giants in Edgeville Dungeon also around the Giants pass around level 25 East Wilderness</td></tr> -->
    <tr><td>Dark2</td><td>Wilderness at Ghosts And Giants</td></tr>
    <tr><td>Dead Quiet</td><td>Entrance to Mort Myre</td></tr>
    <!-- <tr><td>Deadlands</td><td>East of Canifis</td></tr> -->
    <tr><td>Deep Wildy</td><td>Around the level 38 Wilderness Evil Altar and North of Edgeville</td></tr>
    <tr><td>Desert Voyage</td><td>Around the Tourist Trap Mining Camp</td></tr>
    <tr><td>Doorways</td><td>North Varrock Forest</td></tr>
    <!-- <tr><td>Down to Earth</td><td>In the Earth Rune Altar</td></tr> -->
    <tr><td>Dream1</td><td>Between Lumbridge and Draynor</td></tr>
    <tr><td>Duel Arena</td><td>Duel Arena</td></tr>
    <tr><td>Dunjun</td><td>Taverly Dungeon right after the Magic Axe room</td></tr>
    <tr>
        <th colspan="2"><span id="e"></span>E</th>
    </tr>
    <tr><td>Egypt</td><td>The Shantay Pass Desert</td></tr>
    <!-- <tr><td>Elven Mist</td><td>Somewhere in Isafdar</td></tr> -->
    <tr><td>Emotion</td><td>Inside Gnome Maze</td></tr>
    <tr><td>Emperor</td><td>Around Melzars Maze</td></tr>
    <tr><td>Escape</td><td>In the Hellhounds dungeon East of Ardougne (Family Crest)</td></tr>
    <!-- <tr><td>Everywhere</td><td>West of the South entrance to Prifddinas</td></tr> -->
    <tr><td>Expanse</td><td>West of the split off of NE Lumbridge farmland to Varrock and North Al Kharid entrance also around the magic axe hut in the Wilderness</td></tr>
    <tr><td>Expecting</td><td>West of the Khazard Battlefield at the Zamorak site</td></tr>
    <tr><td>Expedition</td><td>Observatory dungeon</td></tr>
    <!-- <tr><td>Exposed</td><td>Near the Coal-Tar swamp in Isafdar</td></tr> -->
    <tr>
        <th colspan="2"><span id="f"></span>F</th>
    </tr>
    <tr><td>Fairie</td><td>West Zanaris</td></tr>
    <!-- <tr><td>Faithless</td><td>Chaos Altar Temple at Level 12 Wilderness</td></tr> -->
    <tr><td>Fanfare</td><td>North Falador and by East Falador Bank</td></tr>
    <tr><td>Fanfare2</td><td>East Karamja Jungle Shipyard</td></tr>
    <tr><td>Fanfare3</td><td>Port Khazard</td></tr>
    <!-- <tr><td>Find My Way</td><td>Ape Atoll Dungeon</td></tr> -->
    <tr><td>Fishing</td><td>Catherby Fishing Spots and at the Fishing Platform</td></tr>
    <tr><td>Flute Salad</td><td>Lumbridge West Farmlands</td></tr>
    <tr><td>Forbidden</td><td>Low level Wilderness north of Varrock Lumber Yard</td></tr>
    <!-- <tr><td>Forest</td><td>Past the first leaf trap in the Elvin area</td></tr> -->
    <tr><td>Forever</td><td>Around the Cooking Guild and around the KBD entrance cage and along the Member wilderness fence and at Edgeville</td></tr>
    <!-- <tr><td>Frogland</td><td>When you get the frog random event, ignore them and get teleported to the place where this plays</td></tr> -->
    <!-- <tr><td>Fruits de Mer</td><td>Fishing Platform (Sea Slug quest)</td></tr> -->
    <tr>
        <th colspan="2"><span id="g"></span>G</th>
    </tr>
    <tr><td>Gaol</td><td>Gu'Tanoth, the Ogre City south of Yanille</td></tr>
    <tr><td>Garden</td><td>Near Varrock Square</td></tr>
    <tr><td>Gnome King</td><td>Around and in the Grand Tree</td></tr>
    <tr><td>Gnome Theme</td><td>Around the Ice Mountain Dwarf Mine Entrance</td></tr>
    <tr><td>Gnome Village</td><td>Near the Spirit Tree in Stronghold and around</td></tr>
    <tr><td>Gnome Village2</td><td>Southwestern area with tree houses in Gnome Stronghold</td></tr>
    <tr><td>Gnome</td><td>Around Goblin Village</td></tr>
    <tr><td>Gnomeball</td><td>Around the gnomeball field</td></tr>
    <!-- <tr><td>Goblin Game</td><td>Goblin Cave near the Fishing Guild</td></tr> -->
    <tr><td>Greatness</td><td>Around the Champion's Guild</td></tr>
    <tr><td>Grotto</td><td>Grotto's Nature altar in its' second form, after you finish Nature Spirit quest</td></tr>
    <tr><td>Grumpy</td><td>By the frogs for the Big Chompy Bird Hunting quest</td></tr>
    <tr>
        <th colspan="2"><span id="h"></span>H</th>
    </tr>
    <tr><td>Harmony</td><td>In Lumbridge by the Goblin house</td></tr>
    <tr><td>Harmony2</td><td>In Lumbridge Castle basement</td></tr>
    <!-- <tr><td>Have a Blast</td><td>Blast Furnace</td></tr> -->
    <tr><td>Heart and Mind</td><td>In the Body Rune Altar</td></tr>
    <tr><td>High Seas</td><td>At Brimhaven</td></tr>
    <tr><td>Horizon</td><td>At Taverly</td></tr>
    <tr>
        <th colspan="2"><span id="i"></span>I</th>
    </tr>
    <tr><td>Iban</td><td>Past the door in the Underground Pass after the Flames of Zamorak Well</td></tr>
    <tr><td>Ice Melody</td><td>White Wolf Mountain</td></tr>
    <tr><td>In The Manor</td><td>Ogre Island east of the Ogre City</td></tr>
    <tr><td>Insect Queen</td><td>Kalphite Tunnels</td></tr>
    <tr><td>Inspiritation</td><td>Wilderness North of the Monastary</td></tr>
    <!-- <tr><td>Into the Abyss</td><td>Abyssal Space</td></tr> -->
    <tr><td>Intrepid</td><td>In the cavern in the Underground Pass that is below the Iban temple where the dwarfs are</td></tr>
    <!-- <tr><td>Island Life</td><td>Non-City part of Ape Atoll</td></tr> -->
    <tr>
        <th colspan="2"><span id="j"></span>J</th>
    </tr>
    <tr><td>Jolly-R</td><td>The Ardougne Karamja Dock</td></tr>
    <tr><td>Jungle Island</td><td>Around Karamja Volcano</td></tr>
    <tr><td>Jungly1</td><td>North of the island that has the agility bridge to it</td></tr>
    <tr><td>Jungly2</td><td>NorthWest Karamja at the Holy Grail whistle-blowing area</td></tr>
    <tr><td>Jungly3</td><td>SouthWest of Tai Bwo Wannai</td></tr>
    <tr>
        <th colspan="2"><span id="k"></span>K</th>
    </tr>
    <tr><td>Kingdom</td><td>On the way to the Death Plateau</td></tr>
    <tr><td>Knightly</td><td>Ardougne Courtyard</td></tr>
    <tr>
        <th colspan="2"><span id="l"></span>L</th>
    </tr>
    <!-- <tr><td>Lair</td><td>The Shade Tombs of Mort'ton</td></tr> -->
    <!-- <tr><td>La Mort</td><td>Death Altar</td></tr> -->
    <tr><td>Landlubber</td><td>SouthWest of Brimhaven near the Gold rocks</td></tr>
    <tr><td>Lasting</td><td>Around Ranging Guild and Hemenster</td></tr>
    <!-- <tr><td>Legend</td><td>Northwest of Sinclair Mansion</td></tr> -->
    <tr><td>Legion</td><td>Barbarian Outpost and the Wilderness Bandit Camp</td></tr>
    <!-- <tr><td>Lighthouse</td><td>At the Lighthouse north of Barbarian Outpost</td></tr> -->
    <tr><td>Lightness</td><td>Around the Charred Crater West of the Wilderness Castle</td></tr>
    <tr><td>Lightwalk</td><td>Catherby and southwest</td></tr>
    <tr><td>Lonesome</td><td>Prison Camp Mine in the Tourist Trap Desert</td></tr>
    <tr><td>Long Ago</td><td>Peninsula East of Yanille that has the gnome (Hazelmere) on it</td></tr>
    <tr><td>Long Way Home</td><td>Around Rimmington</td></tr>
    <!-- <tr><td>Lost Soul</td><td>South of the Elf tracker in the Elf area</td></tr> -->
    <tr><td>Lullaby</td><td>Northwest of the Sinclair Mansion and at some of the Digsite</td></tr>
    <tr>
        <th colspan="2"><span id="m"></span>M</th>
    </tr>
    <tr><td>Mad Eadgar</td><td>Mad Eadgar's home, atop Trollheim</td></tr>
    <tr><td>Mage Arena</td><td>Around the Mage Arena and in the bank and worship room</td></tr>
    <tr><td>Magic Dance</td><td>Around Yanille</td></tr>
    <tr><td>Magical Journey</td><td>Around Thormac the Sorcerer's Tower</td></tr>
    <tr><td>March2</td><td>Around King Lathas's Training Area</td></tr>
    <!-- <tr><td>Marooned</td><td>Crash Island before you get to Ape Atoll (Monkey Madness quest)</td></tr> -->
    <tr><td>Marzipan</td><td>Around Trollheim</td></tr>
    <tr><td>Mausoleum</td><td>Temple guardian's place, near the Sarodomin's Shrine (Priest in Peril)</td></tr>
    <tr><td>Medieval</td><td>By the mostly Member's Area of Varrock</td></tr>
    <tr><td>Mellow</td><td>Between Dwarf base and Fishing Guild</td></tr>
    <!-- <tr><td>Melodrama</td><td>Castle Wars waiting room</td></tr> -->
    <!-- <tr><td>Meridian</td><td>In the Troll Stronghold, the cells of Mad Eadgar and Godric's cells</td></tr> -->
    <tr><td>Miles Away</td><td>Around the Crafting Guild</td></tr>
    <tr><td>Miracle Dance</td><td>Mind Rune Altar</td></tr>
    <tr><td>Monarch Waltz</td><td>Sinclair Mansion area</td></tr>
    <!-- <tr><td>Monkey Madness</td><td>City section of Ape Atoll</td></tr> -->
    <tr><td>Moody</td><td>West section of West Ardougne and south of the Graveyard of Shadows in the Wilderness</td></tr>
    <tr><td>Morytania</td><td>the new kingdom just as you walk up the stairs to Sarodomin's Shrine (taken over by Zamorak - Priest in Peril quest)</td></tr>
    <tr>
        <th colspan="2"><span id="n"></span>N</th>
    </tr>
    <!-- <tr><td>Narnode's Theme</td><td>Gnome Mine beneath Grand Tree</td></tr> -->
    <tr><td>Natural</td><td>Outside of the island for Nature spirit quest</td></tr>
    <tr><td>Neverland</td><td>Around the entrance to the Gnome Stronghold</td></tr>
    <tr><td>Newbie Melody</td><td>In Lumbridge Castle</td></tr>
    <tr><td>Nightfall</td><td>South of Falador and East Member Wilderness</td></tr>
    <tr><td>Nomad</td><td>Around Tai Bwo Wannai</td></tr>
    <tr>
        <th colspan="2"><span id="o"></span>O</th>
    </tr>
    <tr><td>Oriental</td><td>In the Temple of Ah-Za-Rhoom in Karamja Jungle</td></tr>
    <!-- <tr><td>Out of the Deep</td><td>Dungeon underneath the Lighthouse</td></tr> -->
    <!-- <tr><td>Overpass</td><td>The secret way into the elven nation</td></tr> -->
    <tr><td>Overture</td><td>Seers Village</td></tr>
    <tr>
        <th colspan="2"><span id="p"></span>P</th>
    </tr>
    <tr><td>Parade</td><td>By the Jolly Boar Inn</td></tr>
    <!-- <tr><td>Pirates of Peril</td><td>Pirate House in Member's Wilderness</td></tr> -->
    <tr><td>Principality</td><td>Burthorpe</td></tr>
    <tr>
        <th colspan="2"><span id="q"></span>Q</th>
    </tr>
    <tr><td>Quest</td><td>Fire Rune Altar</td></tr>
    <!-- <tr><td>Quizmaster</td><td>Quizmaster Random Event</td></tr> -->
    <tr>
        <th colspan="2"><span id="r"></span>R</th>
    </tr>
    <!-- <tr><td>Ready for Battle</td><td>Tunnels below Castle Wars</td></tr> -->
    <tr><td>Regal2</td><td>At the Rogues Hideout in Member's Wilderness</td></tr>
    <tr><td>Reggae</td><td>Jungle West of Brimhaven and East Kharazi Jungle</td></tr>
    <tr><td>Reggae2</td><td>East Karamja on East side of the river</td></tr>
    <!-- <tr><td>Relleka</td><td>In the Viking town of Relleka</td></tr> -->
    <tr><td>Righteousness</td><td>In the Law Rune Altar</td></tr>
    <tr><td>Riverside</td><td>Mining area east of Ardougne</td></tr>
    <tr><td>Royale</td><td>Black Knight Hideout in Taverly Dungeon</td></tr>
    <tr><td>Rune Essence</td><td>At the Rune Essence</td></tr>
    <tr>
        <th colspan="2"><span id="s"></span>S</th>
    </tr>
    <tr><td>Sad Meadow</td><td>East section of West Ardougne and the Wilderness Ice plateau</td></tr>
    <!-- <tr><td>Saga</td><td>Northwest of Sinclair Mansion</td></tr> -->
    <tr><td>Scape Cave</td><td>Varrock Sewers and part of Edgeville Dungeon</td></tr>
    <tr><td>Scape Main</td><td>Login screen</td></tr>
    <tr><td>Scape Sad1</td><td>Around the Greater Demon ruins and the Hazeel Sewers</td></tr>
    <!-- <tr><td>Scape Scared</td><td>Automatic song, it's from Halloween 2004 title screen</td></tr> -->
    <tr><td>Scape Soft</td><td>On the trails north of Falador</td></tr>
    <tr><td>Scape Wild1</td><td>North of the Chaos Altar and west of the Demon Ruins also at the level 22 Wilderness Death Crater</td></tr>
    <tr><td>Sea Shanty</td><td>Karamja around the Banana Plantation</td></tr>
    <tr><td>Sea Shanty2</td><td>Port Sarim</td></tr>
    <tr><td>Serenade</td><td>Around the Observatory</td></tr>
    <tr><td>Serene</td><td>Around the Wilderness Agility course and the Air Rune Altar</td></tr>
    <tr><td>Shine</td><td>Duel Arena Hospital and the Wilderness above the Lumber Yard</td></tr>
    <tr><td>Shining</td><td>Bone Yard at level 26-29 wilderness</td></tr>
    <!-- <tr><td>Showdown</td><td>Arena where you fight the Jungle Demon in Monkey Madness Quest</td></tr> -->
    <tr><td>Sojourn</td><td>TrollHeim Maze</td></tr>
    <tr><td>Soundscape</td><td>South of Ogre City</td></tr>
    <tr><td>Spirit</td><td>West Varrock</td></tr>
    <tr><td>Splendour</td><td>North of Taverly</td></tr>
    <tr><td>Spooky2</td><td>Around Draynor Manor</td></tr>
    <tr><td>Spooky Jungle</td><td>NorthEast Karamja Jungle</td></tr>
    <tr><td>Stagnant</td><td>North East of the Nature island in Mort Myre swamp</td></tr>
    <tr><td>Start</td><td>North side of Draynor</td></tr>
    <tr><td>Starlight</td><td>In the Blurite Mine</td></tr>
    <tr><td>Still Night</td><td>North of Lumbridge by the North enterance into Al Kharid</td></tr>
    <tr><td>Stratosphere</td><td>Cosmic Rune Altar</td></tr>
    <!-- <tr><td>Sunburn</td><td>West of the Desert Mining Camp</td></tr> -->
    <!-- <tr><td>Superstition</td><td>Legends Quest Cave in the Kharazi Jungle</td></tr> -->
    <!-- <tr><td>Suspicious</td><td>During Monkey Madness Quest cutscenes</td></tr> -->
    <tr>
        <th colspan="2"><span id="t"></span>T</th>
    </tr>
    <tr><td>Talking Forest</td><td>McGrubor's Wood</td></tr>
    <!-- <tr><td>Technology</td><td>Gnome Glider Hangar (Monkey Madness quest)</td></tr> -->
    <!-- <tr><td>Temple</td><td>Beneath the Ape Atoll Monkey's Temple</td></tr> -->
    <tr><td>The Desert</td><td>West part of Shantay Pass Desert</td></tr>
    <!-- <tr><td>The Navigator</td><td>Swensen's Portal Maze in Relleka</td></tr> -->
    <tr><td>The Shadow</td><td>On Crandor Isle</td></tr>
    <tr><td>The Tower</td><td>Chaos Druid Tower</td></tr>
    <tr><td>Theme</td><td>Around the Dwarf base with the Coal Trucks and in Baxtorian Waterfall cave</td></tr>
    <!-- <tr><td>Throne of the Demon</td><td>Golem Quest Portal area.</td></tr> -->
    <tr><td>Time Out</td><td>Random Event Maze</td></tr>
    <!-- <tr><td>Time to Mine</td><td>Using the golden cannonball in "Between a rock..."</td></tr> -->
    <!-- <tr><td>Tiptoe</td><td>Draynor Manor basement where Count Draynor's coffin is</td></tr> -->
    <tr><td>Tomorrow</td><td>By the Blurite Mine entrance</td></tr>
    <tr><td>Trawler</td><td>In the Trawler boat</td></tr>
    <tr><td>Trawler Minor</td><td>When you sink on the Trawler</td></tr>
    <tr><td>Tree Spirits</td><td>West of the Gnome Stronghold entrance</td></tr>
    <tr><td>Tremble</td><td>Secret way to Death Plateau</td></tr>
    <tr><td>Tribal Background</td><td>East of Tai Bwo Wannai</td></tr>
    <tr><td>Tribal</td><td>At the Nature Altar ruins</td></tr>
    <tr><td>Tribal2</td><td>East of the Shilo Village Ah-Za-Rhoom Temple Entrance</td></tr>
    <tr><td>Trinity</td><td>Around the Legends Guild</td></tr>
    <tr><td>Troubled</td><td>Feldip Hills and the West Wilderness Ruins</td></tr>
    <tr><td>Twilight</td><td>In the workshop for the Elemental Workshop quest</td></tr>
    </tr>
    <tr>
        <th colspan="2"><span id="u"></span>U</th>
    </tr>
    <tr><td>Undercurrent</td><td>Battle plains at level 23 wilderness</td></tr>
    <tr><td>Underground</td><td>By the Chaos Altar at level 11 wilderness and at the Black Demons in Taverly Dungeon and Entrana Dungeon</td></tr>
    <tr><td>Understanding</td><td>Nature Rune Altar</td></tr>
    <tr><td>Unknown Land</td><td>Around the Prince Ali jail and South Draynor</td></tr>
    <tr><td>Underground Pass</td><td>Underground Pass area from the grill section and on for a ways</td></tr>
    <tr><td>Upcoming</td><td>South of Ardougne Zoo</td></tr>
    <tr>
        <th colspan="2"><span id="v"></span>V</th>
    </tr>
    <tr><td>Venture</td><td>Around the Digsite and in its caves</td></tr>
    <tr><td>Venture2</td><td>Digsite cave</td></tr>
    <tr><td>Village</td><td>Canifis (Werewolf village)</td></tr>
    <tr><td>Vision</td><td>At the Wizards Tower</td></tr>
    <tr><td>Voodoo Cult</td><td>Legends Cave and also the lowest level of the Ah-Za-Rhoom ruins with the gallows in it</td></tr>
    <tr><td>Voyage</td><td>North of Baxtorian Waterfall</td></tr>
    <tr>
        <th colspan="2"><span id="w"></span>W</th>
    </tr>
    <tr><td>Wander</td><td>South of Falador Farmlands</td></tr>
    <tr><td>Waterfall</td><td>Close to Baxtorian Waterfall and at Glarial's Tomb</td></tr>
    <tr><td>Waterlogged</td><td>Midway south in Mort Myre</td></tr>
    <!-- <tr><td>Well of Voyage</td><td>In the well of voyage</td></tr> -->
    <tr><td>Wilderness2</td><td>West of the Red Spider Ruins in Wilderness</td></tr>
    <tr><td>Wilderness3</td><td>South of the Red Spider Ruins in Wilderness</td></tr>
    <tr><td>Wilderness4</td><td>The Graveyard north of the West Wilderness Ruins</td></tr>
    <!-- <tr><td>Wildwood</td><td>Level 12 Wilderness north of the Chaos Altar</td></tr> -->
    <tr><td>Witching</td><td>South of the Wilderness Poison Wood</td></tr>
    <tr><td>Wolf Mountain</td><td>At the Ice Plateau South of Red Dragon Isle and also at the Chaos Marsh</td></tr>
    <tr><td>Wonder</td><td>Around the level 3 Wilderness Dark Wizards</td></tr>
    <tr><td>Wonderous</td><td>Around the North entrance to Ardougne</td></tr>
    <!-- <tr><td>Woodland</td><td>At the Elf Camp in Isafdar</td></tr> -->
    <tr><td>Workshop</td><td>East Falador and Mining Guild above ground area</td></tr>
    <tr>
        <th colspan="2"><span id="y"></span>Y</th>
    </tr>
    <tr><td>Yesteryear</td><td>Lumbridge Swamp Mine to graveyard and area around</td></tr>
    <tr>
        <th colspan="2"><span id="z"></span>Z</th>
    </tr>
    <tr><td>Zealot</td><td>At the Water Rune Altar</td></tr>
</table>
<hr>
This special report was written by Gnat88. Thanks to Monkeymatt, Fatass120387, Ender, BoyBoy126, DarkWiz, Gustav Graves, Loser3k, Kgbspy, runescape freak, E-junkie, Fireball0236, Zero_Rulez, Mage101, Dr Acula, stormer, runescape freak, Kyse, Tibur, Foxhunt, Keystone, IglooGuy, EVILWITHIN10, and DRAVAN for corrections.
<br><br>
This special report was entered into the database on Wed, Apr 07, 2004, at 07:36:25 PM by DRAVAN and was last updated on Sat, Nov 05, 2005, at 04:18:11 PM by DRAVAN.
HTML; }