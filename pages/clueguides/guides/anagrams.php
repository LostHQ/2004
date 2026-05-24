<?php
function getGuideContent($guide) { return <<<HTML
<h2>Treasure Trails $guide Guide</h2>
<p>An anagram is a word where the letters of the original word are rearranged to make a new word. If you get an anagram clue, it will say so on it. There aren't many anagrams in treasure trails, and they aren't hard to figure out. Here's the list:
<table class="table">
  <tr>
    <th>Clue Type:</th>
    <th>Anagram:</th>
    <th>Person:</th>
    <th>Town/Location:</th>
  </tr>
  <tr>
    <td rowspan="13">Medium</td>
    <td>ARE COL</td>
    <td>Oracle</td>
    <td>Ice Mountain </td>
  </tr>
  <tr> 
    <td>BAR BELL SEEK</td>
    <td> Kebab Seller</td>
    <td>Al Kharid</td>
  </tr>
  <tr> 
    <td>EEK ZERO OP</td>
    <td>Zookeeper</td>
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
    <td>OK CO</td>
    <td>Cook</td>
    <td>Lumbridge Castle</td>
  </tr>
  <tr> 
    <td>PEATY PERT</td>
    <td>Party Pete</td>
    <td>Seers Village - South of the Bank</td>
  </tr>
  <tr>
    <td>ME IF</td>
    <td>Femi the gnome </td>
    <td>By the big gate at the entrance to the Gnome Stronghold</td>
  </tr>
  <tr> 
    <td>BAIL TRIMS</td>
    <td> Brimstail</td>
    <td>Southwest corner of the Gnome Stronghold in a "hollowed" cave</td>
  </tr>
  <tr>
    <td>A BAS</td>
    <td>Saba</td>
    <td>A cave in Burthorpe </td>
  </tr>
  <tr> 
    <td>AHA JAR</td>
    <td> Jaraah</td>
    <td>Al Kharid duel arena hospital</td>
  </tr>
  <tr> 
    <td>ICY FE</td>
    <td>Fycie</td>
    <td>South of Yanille, Feldip Hills area, in a cave north of Rantz</td>
  </tr>
  <!-- <tr> 
    <td>Citric Cellar </td>
    <td>Henkel Funch </td>
    <td>Grand Tree </td>
  </tr> -->
</table>
</p>
HTML; }