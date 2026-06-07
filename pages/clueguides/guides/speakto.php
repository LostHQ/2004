<?php
function getGuideContent($guide) { return <<<HTML
<h2>Treasure Trails $guide Guide</h2>
<p>In treasure trails you will some times get a clue saying something like "Speak to ....". This is a little list of the different NPC's that we find on treasure trails.
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
    <td>Black Heather</td>
    <td>Bandit's Camp in the Wilderness </td>
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
    <td>General Bentnoze </td>
    <td>Goblin Village north of Falador</td>
  </tr>
  <tr>
    <td>Hans</td>
    <td>Lumbridge Castle - Usually walking inside the courtyard</td>
  </tr>
  <tr>
    <td>Keeper of Melzar's</td>
    <td>Oziach, rune plate seller - Outside of Edgeville</td>
  </tr>
  <tr>
    <td>Murphey</td>
    <td>Pier in Port Khazard </td>
  </tr>
  <tr>
    <td>Monk</td>
    <td>Ardougne Clock Tower </td>
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
    <td>Squire</td>
    <td>White Knights Castle in Falador</td>
  </tr>
  <tr>
    <td>Staff in the Sinclair Mansion</td>
    <td>The mansion is north of Seers' Village and Camelot, speak to the Maid</td>
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
</p>
HTML; }