<?php
function getGuideContent($guide) { return <<<HTML
<h2>$guide Guide</h2>
<p>Quick Links:<br><a href="#maps">Maps</a> | <a href="#riddles">Riddles</a> | <a href="#speakto">Speak to...</a></p>
<hr>
<h3>Maps</h3>
<a name="maps"></a>
<p>
    Sometimes you might get a clue scroll, and when you open it up to read it, all you see is a map. Your task is now to find out where that place is, and then, like the pirates always do, take the steps shown on your map, and dig where X marks the spot ;) To dig, you'll need your trusty spade. Here's a list of the different maps:
</p>
<table class="table" width="100%">
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
  <tr>
    <td><img src="img/clue_guides/maps/easy/clue_brother_galahad.jpg" style="width:200px;" alt="clue_brother_galahad.jpg"></td>
    <td>Brother Galahad's house across the river from Coal Trucks.</td>
  </tr>
  <tr>
    <td><img src="img/clue_guides/maps/easy/wiztowermap.gif" style="width:200px;" alt="wiztowermap.gif"></td>
    <td>Behind the Wizard's Tower</td>
  </tr>
</table>
<hr>
<h3>Riddles</h3>
<a name="riddles"></a>
<p>
    Riddles are primarily to test your Runescape knowledge. If you remember most of the stuff you learned through quests and other information, you shouldn't have a problem with these.
</p>
<table class="table">
  <tr>
    <th width="50%">Clue/Riddle</th>
    <th>Solution</th>
  </tr>
  <tr>
    <td>Search the chest in the<br>Duke of Lumbridge's bedroom.</td>
    <td>In Lumbridge castle, on the <span data-floors="US">2nd floor</span>.</td>
  </tr>
    <tr>
    <td>Search the crate in the left-<br>hand tower of Lumbridge Castle.</td>
    <td>Look upstairs in the guard tower in front of the castle.</td>
  </tr>
  <tr>
    <td>Search the boxes in the goblin<br>house near Lumbridge.</td>
    <td>Go across the bridge of Lumbridge Castle and search the boxes.</td>
  </tr>
  <tr>
    <td>Search the chests upstairs in<br>Al Kharid Palace.</td>
    <td>Upstairs, first one from the east.</td>
  </tr>
  <tr>
    <td>Search the crates in the<br>most north-western house in Al Kharid.</td>
    <td>Search the house with the range in the north-west corner of Al Kharid.</td>
  </tr>
  <tr>
    <td>Search the boxes in<br>the house near the<br>south entrance to Varrock.</td>
    <td>It's the crates inside the big grey building with nothing else inside except for a ladder.</td>
  </tr>
  <tr>
    <td>Search the drawers, upstairs<br>in the bank to<br>the East of Varrock.</td>
    <td>The bank is in Varrock itself, on the east side near the museum.</td>
  </tr>
  <tr>
    <td>Search the crates<br>in Horvik's armoury.</td>
    <td>Horvik is an armorsmith located northeast of the Varrock square.</td>
  </tr>
  <tr>
    <td>Search the drawers in<br>one of Gertrude's bedrooms.</td>
    <td>Search the drawers near Kanel's bedroom (south-eastern room), in Gertrude's house south of the Cooking Guild.</td>
  </tr>
  <tr>
    <td>Search the boxes in the<br>Barbarian Village helmet shop.</td>
    <td>Go to the shop Peksa owns and search some crates there.</td>
  </tr>
  <tr>
    <td>Search the drawers upstairs<br>in Falador's shield shop.</td>
    <td>The shop is located south-east of the north gates of Falador and north of the furnace.</td>
  </tr>
  <tr>
    <td>Search the boxes of<br>Falador's general store.</td>
    <td>The general store is located in the north-west of Falador.</td>
  </tr>
  <tr>
    <td>Search the drawers in<br>Falador's chain mail shop.</td>
    <td>The shop is located near the southern gate to the city, south of White Knights' Castle.</td>
  </tr>
  <tr>
    <td>Search the crates in the<br>Port Sarim Fishing shop.</td>
    <td>Search the crates at the door.</td>
  </tr>
  <tr>
    <td>Search the drawers in<br>Catherby's Archery shop.</td>
    <td>Search the drawers near Hickton's Archery Emporium in Catherby.</td>
  </tr>
  <tr>
    <td>Search the chest in the left-<br>hand tower of Camelot Castle.</td>
    <td>Go inside the south-west corner tower of Camelot Castle. Climb the ladders to the <span data-floors="US">2nd floor</span>, then the <span data-floors="US">3rd floor</span> and search the chest.</td>
  </tr>
  <tr>
    <td>Search the crates in the<br>guard house of the northern<br>gate of East Ardougne.</td>
    <td>It's inside the small building just slightly north of Handelmort Mansion, but not quite outside the gates.</td>
  </tr>
  <tr>
    <td>Search the boxes just<br>outside the Armour shop<br>in East Ardougne.</td>
    <td>South of the market, just next to the Spice stall and north of the Armour shop.</td>
  </tr>
  <tr>
    <td>Search the crates in East<br>Ardougne's general store.</td>
    <td>Located directly south of the church.</td>
  </tr>
  <tr>
    <td>Search the crates in the shed<br>just north of East Ardougne.</td>
    <td>North of the NorthWest bank by the diseased sheep - Inside the building that the wood cutter used to be in.</td>
  </tr>
  <tr>
    <td>Search the drawers<br>above Varrock's shops.</td>
    <td>Drawers in room above the clothes shop.</td>
  </tr>
  <tr>
    <td>Search the crates near<br>a cart in Varrock.</td>
    <td>This cart is NOT the one at the inner courtyard of Varrock Castle. South of the inner courtyard (and north of Varrock's central square), there is a double-loop path northeast of this intersection is a small cart, and the crates are nearby.</td>
  </tr>
  <tr>
    <td>Search the drawers found upstairs<br>in East Ardougne's houses.</td>
    <td>Go across the river. It's the first house there. (tavern?)</td>
  </tr>
  <tr>
    <td>A crate found in the ground<br>floor of a church is<br>your next location.</td>
    <td>Ardougne church - Next to ladder</td>
  </tr>
  <tr>
    <td>Look in the ground floor<br>crates of houses in Falador.</td>
    <td>The house east of Falador east bank. First crate on right.</td>
  </tr>
  <tr>
    <td>Search the drawers of<br>houses in Burthorpe.</td>
    <td>Drawers, house to the East of the blacksmith's house in Burthorpe.</td>
  </tr>
  <tr>
    <td>Search the crates in a house<br>in Yanille that has a piano.</td>
    <td>As you enter Yanille, it should be the first building you come to that's adjacent to the north wall.</td>
  </tr>
  <tr>
    <td>Search the drawers in<br>the ground floor of a<br>house in Yanille.</td>
    <td>Drawers, house to the East of the blacksmith's house in Burthorpe.</td>
  </tr>
  <tr>
    <td>Search the chests in<br>the Dwarven Mine.</td>
    <td>The small place across the hall from the General Store inside the mines.</td>
  </tr>
  <tr>
    <td>Search through some drawers<br>in the upstairs of a<br>house in Rimmington.</td>
    <td>Search drawers upstairs in the house just north of the one with a range in Rimmington.</td>
  </tr>
  <tr>
    <td>Search chests found in the<br>upstairs of shops in Port Sarim.</td>
    <td>Port Sarim Food Shop, upstairs.</td>
  </tr>
  <tr>
    <td>One of the sailors<br>in Port Sarim is your<br>next destination.</td>
    <td>Talk to Captain Tobias in Port Sarim.</td>
  </tr>
  <tr>
    <td>Search through chests found<br>in the upstairs of houses<br>in eastern Falador.</td>
    <td>Chest, upstairs in the house (the one with the range) North of the fountain in Eastern Falador.</td>
  </tr>
  <tr>
    <td>Search the drawers upstairs<br>of houses in the eastern<br>part of Falador.</td>
    <td>Drawers, upstairs in the first house East of the Mining Guild (the house South of the fountain) in Falador.</td>
  </tr>
  <tr>
    <td>Search the boxes in<br>a shop in Taverley.</td>
    <td>Two-handed sword shop.</td>
  </tr>
  <tr>
    <td>Search through some drawers<br>found in Taverley's houses.</td>
    <td>Eastern most circular house in the south west part of Taverley (just south of the Herblore Shop).</td>
  </tr>
  <tr>
    <td>Search the boxes in one<br>of the tents in Al Kharid.</td>
    <td>Head east from the Silk trader into a tent.</td>
  </tr>
  <tr>
    <td>Search the crates<br>in Draynor Manor</td>
    <td>Crate, top floor of Draynor Manor, near Professor Oddenstein from the Ernest the Chicken quest.</td>
  </tr>
  <tr>
    <td>Search the tents in the<br>Imperial Guard camp in<br>Burthorpe for some boxes.</td>
    <td>South part of Burthorpe, the most Northwestern tent where the Imperial Guards are training. Search the boxes.</td>
  </tr>
  <tr>
    <td>Search the crate near<br>a cart in Port Khazard.</td>
    <td>Search the crate south of where the Trawler starts.</td>
  </tr>
  <tr>
    <td>Search the drawers on<br>the first floor of a<br>building overlooking<br>Ardougne's Market.</td>
    <td>House north of Ardougne market; look upstairs (British 1st floor is upstairs; the bottom is the "ground floor").</td>
  </tr>
  <tr>
    <td>Search for a crate in a<br>building in Hemenster.</td>
    <td>Simply search all crates in Hemenster (City between Fishing guild and Ranging guild.)</td>
  </tr>
  <tr>
    <td>Search the drawers<br>in the upstairs of a<br>house in Catherby.</td>
    <td>House to the north west of the bank in Catherby.</td>
  </tr>
  <tr>
    <td>Search upstairs of<br>houses in Seers' Village<br>for some drawers.</td>
    <td>Go to the small building north of the opening to the fence surrounding the church. Search the drawers on the second floor.</td>
  </tr>
  <tr>
    <td>Search for a crate on<br>the ground floor of a<br>house in Seers' Village.</td>
    <td>There's a house just south west of the house where you start the Elemental Workshop Quest. The crate is by the sink.</td>
  </tr>
  <tr>
    <td>Dig near some giant mushrooms,<br>behind the Grand Tree.</td>
    <td>Dig behind the large mushroom behind the Grand Tree in Gnome Stronghold. </td>
  </tr>
  <tr>
    <td>Search the drawers in a<br>house in Draynor Village.</td>
    <td>As you first enter Draynor going through the lumbridge/draynor manor/falador intersection, go into the first house that you see.</td>
  </tr>
  <tr>
    <td>Someone watching the fights<br>in the Duel Arena is your<br>next destination.</td>
    <td>Talk to Jeed.</td>
  </tr>
  <tr>
    <td>Search for a crate<br>in Varrock Castle.</td>
    <td>It's one of the crates in the kitchen.</td>
  </tr>
</table>
<hr>
<h3>Speak to...</h3>
<a name="speakto"></a>
<p>
    In treasure trails you will some times get a clue saying something like "Speak to ....". This is a list of the different NPC's that we find on easy treasure trails.
</p>
<table class="table">
  <tr> 
    <th>Speak to ...</th>
    <th>Location they are found:</th>
  </tr>
  <tr>
    <td>Arhein</td>
    <td>The General Store person on the dock at Catherby</td>
  </tr>
  <tr>
    <td>Bartender</td>
    <td>Blue Moon Inn in Varrock - Across from the Sword shop</td>
  </tr>
  <tr>
    <td>Bartender</td>
    <td>Rusty Anchor in Port Sarim</td>
  </tr>
  <tr>
    <td>Doric</td>
    <td>At the house with anvils - along the road, East of the gate to Taverley</td>
  </tr>
  <tr>
    <td>Gaius</td>
    <td>2-Handed Sword dealer in Taverley </td>
  </tr>
  <tr>
    <td>Hans</td>
    <td>Lumbridge Castle - Usually walking inside the courtyard</td>
  </tr>
  <tr>
    <td>Ned</td>
    <td>Draynor Village - Usually walking next to the grain field</td>
  </tr>
  <tr>
    <td>Sir Kay</td>
    <td>Camelot Castle - Usually walking outside the castle by the door</td>
  </tr>
  <tr>
    <td>Staff in the Sinclair Mansion</td>
    <td>The mansion is north of Seers' Village and Camelot, speak to the Maid</td>
  </tr>
  <tr>
    <td>Squire</td>
    <td>White Knights Castle in Falador</td>
  </tr>
  <tr>
    <td>Tanner</td>
    <td>Tanner in Al Kharid, North of the furnace</td>
  </tr>
  <tr>
    <td>Zeke</td>
    <td>Scimitar shop in Al Kharid - East of the Tanner</td>
  </tr>
</table>
HTML; }