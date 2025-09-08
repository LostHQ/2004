<?php
function getGuideContent($guide) { return <<<HTML
<h2>Treasure Trails $guide Guide</h2>
<p>Riddles are primarily to test your Runescape knowledge. If you remember most of the stuff you learned through quests and other information, you shouldn't have a problem with these. However, since there's one or two things that might have slipped your mind, here's a list of the current riddles:
<table class="table">
  <tr>
    <th colspan="2">Easy Clues</th>
  </tr>
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
    <td>It's the building just north of the northern bank.</td>
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
    <td>A crate found in the<br>tower of a church is<br>your next location.</td>
    <td>Upstairs in the church of East Ardougne, check the crate in the corner.</td>
  </tr>
  <tr>
    <td>Look in the ground floor<br>crates of houses in Falador.</td>
    <td>The house east of Falador east bank. First crate on right.</td>
  </tr>
</table>
<hr>
<table class="table">
  <tr>
    <th colspan="2">Medium Clues</th>
  </tr>
  <tr>
    <th width="50%">Clue/Riddle</th>
    <th>Solution</th>
  </tr>
  <tr>
    <td>You'll need to look for<br>a town with a central<br>fountain. Look for a locked<br>chest in the town's chapel.</td>
    <td>Varrock, and the chest says 'property of Black Heather' --&gt; in Bandit camp in wild, slay her for key.</td>
  </tr>
  <tr>
    <td>In a town where the guards<br>are armed with maces, search<br>the upstairs rooms of the<br>Public House.</td>
    <td>Ardougne Tavern on the west side of the river, north of the palace. Search the drawers. If it is locked, right-click on it and find out why (usually need to kill something to get a key).</td>
  </tr>
  <tr>
    <td>In a town where thieves<br>steal from stalls, search for<br>some drawers in the upstairs<br>of a house near the bank.</td>
    <td>East side of river in East Ardougne - Jerico's house on the <span data-floors="US">2nd floor</span>. You will need to kill a guard to get a key.</td>
  </tr>
  <tr>
    <td>In a town where everyone has<br>perfect vision, seek some<br>locked drawers in a house that<br>sits opposite a workshop.</td>
    <td>Go to the house in Seers' Village south of the house with the anvils. The drawers will be locked, follow the road north to the Sinclair Mansion or south-west to the Ranging Guild. Kill a chicken to get the key for the drawer.</td>
  </tr>
  <tr>
    <td>In a town where wizards are<br>known to gather, search<br>upstairs in a large<br>house to the north.</td>
    <td><span data-floors="US">2nd floor</span> of a house in Yanille - North of Magic Guild. You will need to kill a man to get a key for the chest.</td>
  </tr>
</table>
<hr>
<table class="table">
  <tr>
    <th colspan="2">Hard Clues</th>
  </tr>
  <tr>
    <th width="50%">Clue/Riddle</th>
    <th>Solution</th>
  </tr>
  <tr>
    <td>You will need to under-cook<br>to solve this one.</td>
    <td>Go to Lumbridge basement under the kitchen and search one of the crates.</td>
  </tr>
  <tr>
    <td>Come to the evil ledge,<br>Yew know yew want to.<br>Try not to get stung.</td>
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
    <td>The beasts to my east<br>snap claws and tails,<br>The rest to my west<br>can slide and eat fish.<br>The force to my north<br>will jump and they'll wail,<br>Come dig by my fire<br>and make a wish.</td>
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
    <td>'A bag belt only?'<br>He asked his balding brothers.</td>
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
</table>
<hr>
<table class="table">
  <tr>
    <th colspan="2">Notes/Inscriptions</th>
  </tr>
  <tr>
    <th width="50%">Clue/Riddle</th>
    <th>Solution</th>
  </tr>
  <tr>
    <td>Beware of the dog!</td>
    <td>Run over to the mansion in East Ardougne and kill a dog to get the key.</td>
  </tr>
  <tr>
    <td>Don't forget to feed the chickens.</td>
    <td>Just kill any chicken to get the drawer key.</td>
  </tr>
  <tr>
    <td>It's a guard's life.</td>
    <td>Kill a guard to get the key.</td>
  </tr>
  <tr>
    <td>Property of Black Heather.</td>
    <td>Kill Black Heather in the Bandit Camp in the Wilderness.</td>
  </tr>
  <tr>
    <td>Stand by your man.</td>
    <td>Kill the level 2 Man downstairs to get a key.</td>
  </tr>
  </table>
</p>
<!-- Unadded Clues/Riddles/Notes/Inscriptions
  <tr>
    <td>A great view - watch the rapidly drying hides get splashed. Check the box your say on.</td>
    <td>The house near Baxtorian Falls. Go upstairs and search the boxes.</td>
  </tr>
  <tr>
    <td>A town with a different sort of night life is your destination.<br>Search for some crates in one of the houses.</td>
    <td>In the clothes shop of Canifis, Morytania.</td>
  </tr>
  <tr>
    <td>City of thieves</td>
    <td>Ardougne</td>
  </tr>
  <tr>
    <td>Dig near some giant mushrooms behind the giant tree.</td>
    <td>Dig behind the large mushroom behind the Grand Tree in Gnome Stronghold. </td>
  </tr>
  <tr>
    <td>Find a crate close to the monk's that like to paaarty!</td>
    <td>Search the crates in the building with monks south of Ardougne.</td>
  </tr>
  <tr>
    <td>Go to a village being attacked by trolls, search the drawers in one of the houses.</td>
    <td>Burthorpe, house with anvils up north. When you try to open the drawers it says "wait til I get my hands on Penda, he's nicked the key again." Go to pub in Burthorpe and kill Penda for key.</td>
  </tr>
  <tr>
    <td>Identify the back of this<br>over-acting brother.<br>(He's a long way from home.)</td>
    <td>Hamid the monk by the Duel Arena altar</td>
  </tr>
  <tr>
    <td>In a village made of bamboo look for some crates under one of the houses.</td>
    <td>Karamja, in Tai Bwo Wannai, south of Brimhaven</td>
  </tr>
  <tr>
    <td>Must have lots of railings.<br>or<br>Must be full of railings.</td>
    <td>Search the crate outside the house with the broken multicannon (near where you start the Dwarf Cannon quest.) It's the first crate to the west with the 'X' on it.</td>
  </tr>
  <tr>
    <td>Mine was the strangest birth under the sun.<br>I left the crimson sack, yet life had not begun.<br>Entered the world yet seen by none.</td>
    <td>Lesser cave, Karamja volcano - pick up red spider eggs and dig.</td>
  </tr>
  <tr>
    <td>Often examined by learners of what has passed, find me where words of wisdom speak volumes.</td>
    <td>Examiner at Digsite, always gives puzzle boxes</td>
  </tr>
  <tr>
    <td>One of the sailors in Port Sarim is your next destination.</td>
    <td>Talk to Captain Tobias in Port Sarim.</td>
  </tr>
  <tr>
    <td>Read "How to breed scorpions" by O.W. Thathurt.</td>
    <td>Go to the <span data-floors="US">2nd floor</span> of the wizards tower south-southwest of the Seer's Village, search the bookcase on the northern wall. </td>
  </tr>
  <tr>
    <td>Search for a box in one of the tents in Al Kharid.</td>
    <td>Head east from the Silk trader into a tent.</td>
  </tr>
  <tr>
    <td>Search for a crate in Varrock Castle.</td>
    <td>It's one of the crates in the kitchen.</td>
  </tr>
  <tr>
    <td>Search for a crate in a building in Hemenster.</td>
    <td>Simply search all crates in Hemenster (City between Fishing guild and Ranging guild.)</td>
  </tr>
  <tr>
    <td>Search for some drawers in the upstairs of a house in Rimmington.</td>
    <td>Search drawers upstairs in the house just north of the one with a range in Rimmington.</td>
  </tr>
  <tr>
    <td>Search the boxes in a shop in Taverley.</td>
    <td>Two-handed sword shop.</td>
  </tr>
  <tr>
    <td>Search the chests in the dwarven mines.</td>
    <td>The small place across the hall from the General Store inside the mines.</td>
  </tr>
  <tr>
    <td>Search the crate near a cart in Port Khazard.</td>
    <td>Search the crate south of where the Trawler starts.</td>
  </tr>
  <tr>
    <td>Search the crates in Draynor Manor</td>
    <td>Search all possible crates and boxes on the third floor in the room to the left of the professor and machine, north end of room, in Draynor Manor.</td>
  </tr>
  <tr>
    <td>Search the crates in a house in Yanille with a Piano.</td>
    <td>As you enter Yanille, it should be the first building you come to that's adjacent to the north wall.</td>
  </tr>
  <tr>
    <td>Search the crates in the shed just north of east Ardougne.</td>
    <td>North of the NorthWest bank by the diseased sheep - Inside the building that the wood cutter used to be in. </td>
  </tr>
  <tr>
    <td>Search the drawers on the first floor of a building overlooking the Ardougne market.</td>
    <td>House north of Ardougne market; look upstairs (British 1st floor is upstairs; the bottom is the "ground floor").</td>
  </tr>
  <tr>
    <td>Search the drawers upstairs in a house in a village where the pirates have a good time.</td>
    <td>Across the street from the bar in Brimhaven (2 houses south of Agility Arena, south of the house with a cooking pot symbol.) Go upstairs in that house and search the drawers. It will say "Shiver me timbers" and not allow you to open the chest. Kill the pirate near that house, he will drop a key. Use the key on the drawers.</td>
  </tr>
  <tr>
    <td>"Small shoe" often found with rod on mushroom.</td>
    <td>Speak to the trainer in the Gnome Stronghold agility arena.</td>
  </tr>
  <tr>
    <td>Someone watching the fights in the Duel Arena is your next destination.</td>
    <td>Talk to Jeed.</td>
  </tr>
  <tr>
    <td>The crate in the ground<br>floor of a church <br>is your next location</td>
    <td>Ardougne church - Next to ladder</td>
  </tr>
  <tr>
    <td>There is no "worthier" lord.</td>
    <td>Lord Eirworth in the Elf camp</td>
  </tr>
  <tr>
    <td>This aviator is at the peak of his profession.</td>
    <td>Speak to gnome pilot at the top of White Wolf Mountain.</td>
  </tr>
  <tr>
    <td>When no weapons are at hand, now is the time to reflect in Saradomins name! redemption draws closer. </td>
    <td>Entrana in a drawer in the house with a glass blowing pipe.</td>
  </tr>
-->
HTML; }