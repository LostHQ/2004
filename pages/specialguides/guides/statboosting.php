<?php
function getSpecialGuide($currSpecialGuide) { return <<<HTML
<h2>$currSpecialGuide</h2>
This guide lists everything that can boost stats in RuneScape.
<br><br>
<h3>Stat Boosting Alcohol</h3>
<table class="table">
    <tr>
        <th width="22%">Beer</th>
        <th width="29%">Effect</th>
        <th width="14%">Price</th>
        <th>Location</th>
    </tr>
    <tr>
        <td><canvas data-itemname="asgarnian_ale" data-show-label="true"></canvas></td>
        <td>-(5% + 2) Attack<br>+2 Strength</td>
        <td><canvas data-itemname="coins_3" data-size="25"></canvas><br>3 coins</td>
        <td>Rising Sun Inn (Falador)</td>
    </tr>
    <tr>
        <td><canvas data-itemname="beer" data-show-label="true"></canvas></td>
        <td>-(6% + 1) Attack<br>+(2% + 1) Strength</td>
        <td><canvas data-itemname="coins_2" data-size="25"></canvas><br>2 coins</td>
        <td>Can be found at most bars, such as Port Sarim, Varrock, and Jolly Bear Inn</td>
    </tr>
    <tr>
        <td><canvas data-itemname="dragon_bitter" data-show-label="true"></canvas></td>
        <td>-(5% + 2) Attack<br>+2 Strength</td>
        <td><canvas data-itemname="coins_2" data-size="25"></canvas><br>2 coins</td>
        <td>Dragon Inn (Yanille)</td>
    </tr>
    <tr>
        <td><canvas data-itemname="dwarven_stout" data-show-label="true"></canvas></td>
        <td>-(4% + 2) Attack<br>-(4% + 2) Strength<br>-(4% + 2) Defence<br>+1 Mining/Smithing</td>
        <td><canvas data-itemname="coins_3" data-size="25"></canvas><br>3 coins</td>
        <td>Rising Sun Inn (Falador)</td>
    </tr>
    <tr>
        <td><canvas data-itemname="greenmans_ale" data-show-label="true"></canvas></td>
        <td>-3 Attack<br>-3 Strength<br>-3 Defence<br>+1 Herblore</td>
        <td><canvas data-itemname="coins_5" data-size="25"></canvas><br>10 coins</td>
        <td>Dragon Inn (Yanille)</td>
    </tr>
    <tr>
        <td><canvas data-itemname="grog" data-show-label="true"></canvas></td>
        <td>-(5% + 3) Attack<br>+(4% + 1) Strength</td>
        <td><canvas data-itemname="coins_3" data-size="25"></canvas><br>3 coins</td>
        <td>Dead Man's Chest (Brimhaven)</td>
    </tr>
    <!-- 2 November 2004 (Rellekka; Beer Tankard is called Beer)
    <tr>
        <td><canvas data-itemname="keg_of_beer" data-show-label="true"></canvas></td>
        <td>-(50% + 5) Attack<br>+(10% + 2) Strength</td>
        <td><canvas data-itemname="coins_250" data-size="25"></canvas><br>325 coins</td>
        <td>Rellekka Longhall Bar<br></td>
    </tr>
    <tr>
        <td><canvas data-itemname="beer_tankard" data-show-label="true"></canvas></td>
        <td>-(10% + 2) Attack<br>+(4% + 2) Strength</td>
        <td><canvas data-itemname="coins_25" data-size="25"></canvas><br>26 coins</td>
        <td>Rellekka Longhall Bar<br></td>
    </tr>
    -->
    <tr>
        <td><canvas data-itemname="wizards_mind_bomb" data-show-label="true"></canvas></td>
        <td>-(5% + 1) Attack<br>-(5% + 1) Strength<br>-(5% + 1) Defence<br>+(2% + 2) Magic</td>
        <td><canvas data-itemname="coins_3" data-size="25"></canvas><br>3 coins</td>
        <td>Rising Sun Inn (Falador)</td>
    </tr>
</table>
<h3>Stat Boosting Potions</h3>
<table class="table" width="100%">
    <tr>
        <th>Potion</th>
        <th>Effect</th>
        <th>Herblore Level</th>
    </tr>
    <tr>
        <td><canvas data-itemname="3dose1attack" data-show-label="true"></canvas></td>
        <td>+(10% + 3) Attack</td>
        <td>3</td>
    </tr>
    <tr>
        <td><canvas data-itemname="3dose1strength" data-show-label="true"></canvas></td>
        <td>+(10% + 3) Strength</td>
        <td>12</td>
    </tr>
    <tr>
        <td><canvas data-itemname="3dose1defense" data-show-label="true"></canvas></td>
        <td>+(10% + 3) Defence</td>
        <td>30</td>
    </tr>
    <tr>
        <td><canvas data-itemname="3dose2attack" data-show-label="true"></canvas></td>
        <td>+(15% + 5) Attack</td>
        <td>45</td>
    </tr>
    <tr>
        <td><canvas data-itemname="3dosefisherspotion" data-show-label="true"></canvas></td>
        <td>+3 Fishing</td>
        <td>50</td>
    </tr>
    <tr>
        <td><canvas data-itemname="3dose2strength" data-show-label="true"></canvas></td>
        <td>+(15% + 5) Strength</td>
        <td>55</td>
    </tr>
    <tr>
        <td><canvas data-itemname="3dose2defense" data-show-label="true"></canvas></td>
        <td>+(15% + 5) Defence</td>
        <td>66</td>
    </tr>
    <tr>
        <td><canvas data-itemname="3doserangerspotion" data-show-label="true"></canvas></td>
        <td>+(10% + 4) Ranged</td>
        <td>72</td>
    </tr>
</table>
<h3>Special Attacks</h3>
<table class="table" width="100%">
    <tr>
        <th width="20%">Weapon</th>
        <th>Effect</th>
        <th>Requirements</th>
    </tr>
    <tr>
        <td><canvas data-itemname="dragon_battleaxe" data-show-label="true"></canvas></td>
        <td>-10% Attack, Defence, Magic, Ranged<br>+(avg stats drained + 10) Strength</td>
        <td>Hero's Quest<br>60 Attack</td>
    </tr>
    <tr>
        <td><canvas data-itemname="excalibur" data-show-label="true"></canvas></td>
        <td>+8 Defence</td>
        <td>Merlin's Crystal<br>20 Attack</td>
    </tr>
</table>
<hr>
This special report was written by Halogod35.
<br><br>
This special report was entered into the database on Mon, Sep 08, 2025, at 04:54:27 AM by Halogod35 and was last updated on Mon, Sep 08, 2025, at 12:12:54 PM by Halogod35.
HTML; }