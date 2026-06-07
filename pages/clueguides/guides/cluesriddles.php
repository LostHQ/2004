<?php
function getGuideContent($guide) { return <<<HTML
<h2>Treasure Trails $guide Guide</h2>
<table class="table">
  <tr>
    <th width="50%">Clue/Riddle</th>
    <th>Solution</th>
  </tr>
  <tr>
    <td>Often examined by learners of what has past, find me where words of wisdom speak volumes.</td>
    <td>Examiner at Digsite, always gives puzzle boxes</td>
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
  <tr>
    <td>There is no "worthier" lord.</td>
    <td>Lord Eirworth in the Elf camp</td>
  </tr>
  <tr>
    <td>Identify the back of this<br>over-acting brother.<br>(He's a long way from home.)</td>
    <td>Hamid the monk by the Duel Arena altar</td>
  </tr>
  <tr>
    <td>Mine was the strangest birth under the sun.<br>I left the crimson sack, yet life had not begun.<br>Entered the world, and yet was seen by none.</td>
    <td>Lesser cave, Karamja volcano - pick up red spider eggs and dig.</td>
  </tr>
  <tr>
    <td>When no weapons are at hand, then is the time to reflect. In Saradomin's name, redemption draws closer... </td>
    <td>Entrana in a drawer in the house with a glass blowing pipe.</td>
  </tr>
  <tr>
    <td>'Small shoe.' Often found with rod on mushroom.</td>
    <td>Speak to the trainer in the Gnome Stronghold agility arena.</td>
  </tr>
  <tr>
    <td>Must be full of railings.</td>
    <td>Search the crate outside the house with the broken multicannon (near where you start the Dwarf Cannon quest.) It's the first crate to the west with the 'X' on it.</td>
  </tr>
  <tr>
    <td>A great view - watch the rapidly drying hides get splashed. Check the box you are sitting on.</td>
    <td>The house near Baxtorian Falls. Go upstairs and search the boxes.</td>
  </tr>
  <tr>
    <td>Read 'How to breed scorpions.' by O.W.Thathurt.</td>
    <td>Go to the <span data-floors="US">2nd floor</span> of the wizards tower south-southwest of the Seers' Village, search the bookcase on the northern wall. </td>
  </tr>
  <tr>
    <td>This aviator is at the peak of his profession.</td>
    <td>Speak to gnome pilot at the top of White Wolf Mountain.</td>
  </tr>
  <tr> 
    <td>Citric Cellar</td>
    <td>Speak to Heckel Funch in the Grand Tree, 2nd floor southeast path </td>
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
  <tr>
    <td>City of thieves</td>
    <td>Ardougne</td>
  </tr>
  </table>
</p>
HTML; }