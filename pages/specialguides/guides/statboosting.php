<?php
function getSpecialGuide($currSpecialGuide) { return <<<HTML
<h2>$currSpecialGuide</h2>
This guide lists everything that can boost stats in RuneScape.
<br><br>
<h3>Stat Boosting Drinks</h3>
There are a bunch of drinks in RuneScape that boost stats. Most of them are different kinds of alcohol, though tea also counts here. Alcohol always lowers your Attack level (at the very least), but in return it can give small boosts to other skills. These boosts are usually weaker than potions, but they can still be useful in the right situations.
<br><br>
<table class="table">
    <tr>
        <th width="22%">Drink</th>
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
        <td><canvas data-itemname="cup_of_tea" data-show-label="true"></canvas></td>
        <td>+(2% + 2) Attack</td>
        <td><canvas data-itemname="coins_5" data-size="25"></canvas><br>10 coins</td>
        <td> Ye olde Tea Shoppe. (Varrock)</td>
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
Potions are the main way to raise your stats, and they're all made with Herblore. Each one gives a temporary boost to a specific skill. Here's a list of every potion you can make that boosts stats and its Herblore level required to make.
<br><br>
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
<h3>Poison Chalice</h3>
You can get the Poison Chalice for free from Stankers, who hangs out near the Coal Trucks. When you drink it, it has a completely random effect, but it won't ever drop your Hitpoints below 4. It's also the only item in the game that can randomly boost your Thieving and Crafting levels, which makes it pretty unique.
<br><br>
<table class="table" width="100%">
    <tr>
        <th>Response</th>
        <th>Effects</th>
        <th>Chance</th>
    </tr>
    <tr>
        <td><i>You feel a lot better.</i></td>
        <td>Heals by 15% of total Hitpoints; Thieving goes up by 1</td>
        <td>9/32</td>
    </tr>
    <tr>
        <td><i>You feel a little strange.</i></td>
        <td>Attack, Strength, Defence go down by 1, Crafting goes up by 1</td>
        <td>8/32</td>
    </tr>
    <tr>
        <td><i>It has a slight taste of apricot.</i></td>
        <td>No effect</td>
        <td>7/32</td>
    </tr>
    <tr>
        <td><i>It heals some health.</i></td>
        <td>Heals by 5% of total Hitpoints</td>
        <td>4/32</td>
    </tr>
    <tr>
        <td><i>That tasted a bit dodgy. You feel a bit ill.</i></td>
        <td>Take 5% of total Hitpoints in damage</td>
        <td>2/32</td>
    </tr>
    <tr>
        <td><i>That tasted very dodgy. You feel very ill.</i></td>
        <td>Take 50% of total Hitpoints in damage; Attack, Strength, and Defence go down by 1-3</td>
        <td>1/32</td>
    </tr>
    <tr>
        <td><i>Wow! That was amazing! You feel really invigorated.</i></td>
        <td>Heals by 30% of total Hitpoints; Attack, Strength, Defence go up by 4</td>
        <td>1/32</td>
    </tr>
</table>
<h3>Kebab</h3>
Kebabs are a bit unpredictable when eaten. They can heal you, do nothing, or even lower stats, but every once in a while they'll give a small boost to your melee stats. Because of that, they're not very reliable, but they do technically count as a stat-boosting item.
<br><br>
<table class="table" width="100%">
    <tr>
        <th>Response</th>
        <th>Effects</th>
        <th>Chance</th>
    </tr>
    <tr>
        <td><i>Wow, that was an amazing kebab! You feel really invigorated.</i></td>
        <td>Melee stats are increased by 2 and player is healed by 7 + 24% of Hitpoints level.</td>
        <td>1/32</td>
    </tr>
    <tr>
        <td><i>That was a good kebab. You feel a lot better.</i></td>
        <td>The player is healed by 6 + 14% of Hitpoints level.</td>
        <td>8/32</td>
    </tr>
    <tr>
        <td><i>It heals some health.</i></td>
        <td>The player is healed by 3 + 7% of Hitpoints level.</td>
        <td>20/32</td>
    </tr>
    <tr>
        <td><i>That kebab didn't seem to do a lot.</i></td>
        <td>There is no effect from eating the kebab.</td>
        <td>1/32</td>
    </tr>
    <tr>
        <td><i>That tasted a bit dodgy. You feel a bit ill.<br>Eating the kebab has damaged your [skill] stat.</i></td>
        <td>A random skill (except Hitpoints) is drained by 3.</td>
        <td>1/32</td>
    </tr>
    <tr>
        <td><i>That tasted very dodgy. You feel very ill.<br>Eating the kebab has done damage to some of your stats.</i></td>
        <td>Melee stats are drained by 3 and a random skill (except Hitpoints) is drained by 4.</td>
        <td>1/32</td>
    </tr>
</table>
<h3>Special Attacks</h3>
A few weapons in RuneScape have special attacks that can temporarily boost your stats. These boosts are unique because they come from using the special attack itself, rather than from food or drink.
<br><br>
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
This special report was written by Halogod35. Thanks to Sythion and Gerrin for corrections.
<br><br>
This special report was entered into the database on Mon, Sep 08, 2025, at 04:54:27 AM by Halogod35 and was last updated on Mon, Sep 16, 2025, at 12:05:09 PM by Halogod35.
HTML; }