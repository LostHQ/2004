<?php
function getGuideContent($guide) { return <<<HTML
<h2>Treasure Trails $guide Guide</h2>
<p>Challenges will not be in a clue scroll like all the other clues, they will be in challenge scrolls. When you get a challenge scroll you will need to figure out the answer, return to who ever gave you the challenge, and give him/her the answer. Currently, there are only very few challenges, here's a list:
<table class="table">
  <tr> 
    <th>Challenge Clue:</th>
    <th>Solution</th>
  </tr>
  <tr> 
    <td>How many animals in total<br>are there in the zoo?</td>
    <td>32</td>
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
</p>
HTML; }