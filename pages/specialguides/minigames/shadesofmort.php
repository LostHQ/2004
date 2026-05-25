<?php
function getSpecialGuide($currSpecialGuide) { return <<<HTML
<h2>$currSpecialGuide</h2>
<h3>Introduction</h3>
<p>
    Mort'ton shades are the shade floating around in Mort'ton and the tomb nearby. They can be killed and burned for various rewards. For information about the Mort'ton shades quest, click here (link to quest help, Mort'ton shades guide). You must have done this quest in order to burn shades and enter the tomb. Also, we recommend you to permanent cure the shopkeeper Razmire (use serum 207 on flaming fire altar with sanctity over 20% and do the "In search of the Myresque" quest, which provides you with an easier route to Mort'ton
</p>
<hr>
<h3>Pyre logs:</h3>
<p>
<p>
    To burn the different level shades, you need different types of pyre logs. To make pyre logs, buy olive oil in the Mort'ton shop and use it on the flaming fire altar in the temple. You need at least 10% sanctity for this, you can improve your sanctity by building the temple or killing the Loar shades (level 40) that are attacking the temple. This will get you sacred oil. Use the sacred oil on logs to create pyre logs. Different logs require different doses of sacred oil. Adding oil to a log gives you 10 firemaking experience.
</p>
<h3>Pyre log information:</h3>
<table class="table">
    <tr>
        <th>Log Type</th>
        <th>Level needed to burn</th>
        <th>Doses of sacred oil needed to make</th>
        <th>Can be used to burn</th>
        <th>Can be used to burn levels</th>
        <th>Firemaking experience per log</th>
    </tr>
    <tr>
        <td><canvas itemname="logs_pyre" show-label="true"></canvas></td>
        <td>5</td>
        <td>2</td>
        <td>
            <canvas itemname="shade_bones1" show-label="inline"></canvas>
        </td>
        <td>40</td>
        <td>60</td>
    </tr>
    <tr>
        <td><canvas itemname="oak_logs_pyre" show-label="true"></canvas></td>
        <td>15</td>
        <td>2</td>
        <td>
            <canvas itemname="shade_bones1" show-label="inline"></canvas>
            <canvas itemname="shade_bones2" show-label="inline"></canvas>
        </td>
        <td>60</td>
        <td>70</td>
    </tr>
    <tr>
        <td><canvas itemname="willow_logs_pyre" show-label="true"></canvas></td>
        <td>30</td>
        <td>3</td>
        <td>
            <canvas itemname="shade_bones1" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones2" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones3" show-label="inline"></canvas>
        </td>
        <td>40, 60, 80</td>
        <td>100</td>
    </tr>
    <tr>
        <td><canvas itemname="maple_logs_pyre" show-label="true"></canvas></td>
        <td>50</td>
        <td>3</td>
        <td>
            <canvas itemname="shade_bones1" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones2" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones3" show-label="inline"></canvas>
        </td>
        <td>40, 60, 80</td>
        <td>175</td>
    </tr>
    <tr>
        <td><canvas itemname="yew_logs_pyre" show-label="true"></canvas></td>
        <td>65</td>
        <td>4</td>
        <td>
            <canvas itemname="shade_bones1" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones2" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones3" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones4" show-label="inline"></canvas>
        </td>
        <td>40, 60, 80, 100</td>
        <td>255</td>
    </tr>
    <tr>
        <td><canvas itemname="magic_logs_pyre" show-label="true"></canvas></td>
        <td>80</td>
        <td>4</td>
        <td>
            <canvas itemname="shade_bones1" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones2" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones3" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones4" show-label="inline"></canvas><br>
            <canvas itemname="shade_bones5" show-label="inline"></canvas>
        </td>
        <td>40, 60, 80, 100, 120</td>
        <td>404.5</td>
    </tr>
</table>
<hr>
<h3>Killing shades:</h3>
<p>
    The level 40 shades can be found in the city of Mort'ton , but all others shades are located in the tomb. To enter, you need at least a bronze key, which can be obtained by burning a level 40 shade. Below is a home-made map of the tomb:
<p>
<img src="img/special_guides/shadesofmort/dungeonfinal.jpg">
<hr>
<h3>Burning shades:</h3>
<p>
    Once you have obtained shade remains, you will have to burn them at a funeral pyre; these are located around the city of Mort'ton . Use your required type of pyre log on the funeral pyre, add your shade remains to that and then left-click to light the funeral pyre.
</p>
<p>
    Doing this will get you firemaking experience, prayer experience and a reward. These will spawn on the little table next to the funeral pyre. This reward will hopefully be a shade key, or you have bad luck and get some coins.
</p>
<img src="img/special_guides/shadesofmort/tomb_01.jpg">
<hr>
<h3>The use of keys:</h3>
<p>
    There are 20 different keys you can get from shades. They vary in base metal and colour coding. The different kinds of metal bases will allow you to open doors of the same kind or lower metals. The colour and metal together shows what chest you can open with the key. The reward you get from a chest mostly depends on the metal. The metals are, from bottom to top: bronze, steel, black and silver. The 5 different colours are from low to high: brown, red, crimson, black and purple.
</p>
<h3>Chest loot:</h3>
<p>
    Below is listed the loot we know sure of that each chest gives. Please note: all chests can get you:
</p>
<ul>
    <li>Fine cloth, higher metals and colours have a higher chance on a fine cloth.</li>
    <li>Coins, higher metals and colours give more money, the amount is randomly chosen.</li>
    <li>Swamp paste, higher metals and colours give more swamp paste. You can sell it to the general store or keep it for building the temple later.</li>
</ul>
<table class="table">
    <tr>
        <th>Chest</th>
        <th>Key</th>
        <th>Always</th>
        <th>Loot</th>
    </tr>
    <tr>
        <td rowspan="5">Bronze</td>
        <td><canvas itemname="shadekey_bronze_bloodred" show-label="inline"></canvas></td>
        <td rowspan="5">
            <canvas itemname="coins" show-label="inline" amount="600" name-append=" (max)"></canvas>(Minus loot value,<br>can be zero)<br><br><br>
            <canvas itemname="swamppaste" show-label="inline" amount="10"></canvas>(Between 5-10)
        </td>
        <td rowspan="5">
            <canvas itemname="steel_axe" show-label="inline"></canvas>
            <canvas itemname="magic_staff" show-label="inline"></canvas>
            <canvas itemname="steel_mace" show-label="inline"></canvas>
            <canvas itemname="silver_bar" show-label="inline" amount="3"></canvas>
            <canvas itemname="amulet_of_defence" show-label="inline"></canvas>
            <canvas itemname="trail_clue_easy_vague001" show-label="inline" name-replace="Easy Clue Scroll"></canvas>
            <canvas itemname="black_dagger" show-label="inline"></canvas>
            <canvas itemname="black_dagger_p" show-label="inline"></canvas>
            <canvas itemname="mithril_dagger" show-label="inline"></canvas>
            <canvas itemname="mithril_dagger_p" show-label="inline"></canvas>
            <canvas itemname="steel_spear" show-label="inline"></canvas>
            <canvas itemname="steel_spear_p" show-label="inline"></canvas>
            <canvas itemname="steel_sword" show-label="inline"></canvas>
            <canvas itemname="steel_scimitar" show-label="inline"></canvas>
            <canvas itemname="black_mace" show-label="inline"></canvas>
            <canvas itemname="black_axe" show-label="inline"></canvas>
            <canvas itemname="steel_longsword" show-label="inline"></canvas>
            <canvas itemname="steel_spear" show-label="inline"></canvas>
            <canvas itemname="chaosrune" show-label="inline" amount="28" name-append=" (10-28)"></canvas>
            <canvas itemname="steel_med_helm" show-label="inline"></canvas>
            <canvas itemname="gold_bar" show-label="inline" amount="3"></canvas>
            <canvas itemname="mithril_bar" show-label="inline" amount="3"></canvas>
            <canvas itemname="sapphire_ring" show-label="inline"></canvas>
        </td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_bronze_brown" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_bronze_crimson" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_bronze_black" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_bronze_purple" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td rowspan="5">Steel</td>
        <td><canvas itemname="shadekey_steel_bloodred" show-label="inline"></canvas></td>
        <td rowspan="5">
            <canvas itemname="coins" show-label="inline" amount="1100" name-append=" (max)"></canvas>(Minus loot value,<br>can be zero)<br><br><br>
            <canvas itemname="swamppaste" show-label="inline" amount="30"></canvas>(Between 15-30)
        </td>
        <td rowspan="5">
            <canvas itemname="cert_willow_logs" show-label="inline" amount="14" name-append=" (5-14)"></canvas>
            <canvas itemname="chaosrune" show-label="inline" amount="29" name-append=" (10-29)"></canvas>
            <canvas itemname="naturerune" show-label="inline" amount="29" name-append=" (10-29)"></canvas>
            <canvas itemname="mithril_mace" show-label="inline"></canvas>
            <canvas itemname="black_sword" show-label="inline"></canvas>
            <canvas itemname="steel_kiteshield" show-label="inline"></canvas>
            <canvas itemname="amulet_of_strength" show-label="inline"></canvas>
            <canvas itemname="trail_clue_easy_vague001" show-label="inline" name-replace="Medium Clue Scroll"></canvas>
            <canvas itemname="black_scimitar" show-label="inline"></canvas>
            <canvas itemname="steel_warhammer" show-label="inline"></canvas>
            <canvas itemname="black_warhammer" show-label="inline"></canvas>
            <canvas itemname="steel_battleaxe" show-label="inline"></canvas>
            <canvas itemname="mithril_spear" show-label="inline"></canvas>
            <canvas itemname="mithril_spear_p" show-label="inline"></canvas>
            <canvas itemname="adamant_dagger" show-label="inline"></canvas>
            <canvas itemname="mithril_sword" show-label="inline"></canvas>
            <canvas itemname="black_longsword" show-label="inline"></canvas>
            <canvas itemname="steel_2h_sword" show-label="inline"></canvas>
            <canvas itemname="steel_spear" show-label="inline"></canvas>
            <!-- <canvas itemname="black_spear" show-label="inline"></canvas> -->
            <canvas itemname="adamant_dagger_p" show-label="inline"></canvas>
            <canvas itemname="black_med_helm" show-label="inline"></canvas>
            <canvas itemname="studded_chaps" show-label="inline"></canvas>
            <canvas itemname="steel_chainbody" show-label="inline"></canvas>
            <canvas itemname="mithril_med_helm" show-label="inline"></canvas>
            <canvas itemname="adamantite_bar" show-label="inline" amount="3"></canvas>
            <canvas itemname="emerald_ring" show-label="inline"></canvas>
            <canvas itemname="fine_cloth" show-label="inline"></canvas>
        </td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_steel_brown" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_steel_crimson" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_steel_black" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_steel_purple" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td rowspan="5">Black</td>
        <td><canvas itemname="shadekey_black_bloodred" show-label="inline"></canvas></td>
        <td rowspan="5">
            <canvas itemname="coins" show-label="inline" amount="2000" name-append=" (max)"></canvas>(Minus loot value,<br>can be zero)<br><br><br>
            <canvas itemname="swamppaste" show-label="inline" amount="40"></canvas>(Between 25-40)
        </td>
        <td rowspan="5">
            <canvas itemname="cert_willow_logs" show-label="inline" amount="10"></canvas>
            <canvas itemname="cert_yew_logs" show-label="inline" amount="10"></canvas>
            <canvas itemname="naturerune" show-label="inline" amount="29" name-append=" (10-29)"></canvas>
            <canvas itemname="deathrune" show-label="inline" amount="29" name-append=" (10-29)"></canvas>
            <canvas itemname="steel_plateskirt" show-label="inline"></canvas>
            <canvas itemname="ruby_ring" show-label="inline"></canvas>
            <canvas itemname="mithril_longsword" show-label="inline"></canvas>
            <canvas itemname="adamant_axe" show-label="inline"></canvas>
            <!--<canvas itemname="black_spear" show-label="inline"></canvas>-->
            <canvas itemname="black_battleaxe" show-label="inline"></canvas>
            <canvas itemname="mithril_scimitar" show-label="inline"></canvas>
            <canvas itemname="black_sq_shield" show-label="inline"></canvas>
            <canvas itemname="black_full_helm" show-label="inline"></canvas>
            <canvas itemname="amulet_of_magic" show-label="inline"></canvas>
            <canvas itemname="flamtaer_hammer" show-label="inline"></canvas>
            <canvas itemname="trail_clue_easy_vague001" show-label="inline" name-replace="Medium Clue Scroll"></canvas>
            <canvas itemname="mithril_mace" show-label="inline"></canvas>
            <canvas itemname="mithril_2h_sword" show-label="inline"></canvas>
            <canvas itemname="mithril_warhammer" show-label="inline"></canvas>
            <canvas itemname="mithril_battleaxe" show-label="inline"></canvas>
            <canvas itemname="adamant_scimitar" show-label="inline"></canvas>
            <canvas itemname="adamant_sword" show-label="inline"></canvas>
            <canvas itemname="black_2h_sword" show-label="inline"></canvas>
            <canvas itemname="black_kiteshield" show-label="inline"></canvas>
            <canvas itemname="mithril_full_helm" show-label="inline"></canvas>
            <canvas itemname="black_chainbody" show-label="inline"></canvas>
            <canvas itemname="mithril_sq_shield" show-label="inline"></canvas>
            <canvas itemname="black_platelegs" show-label="inline"></canvas>
            <canvas itemname="mithril_kiteshield" show-label="inline"></canvas>
            <canvas itemname="mithril_platelegs" show-label="inline"></canvas>
            <canvas itemname="mithril_chainbody" show-label="inline"></canvas>
            <canvas itemname="adamant_med_helm" show-label="inline"></canvas>
            <canvas itemname="staff_of_air" show-label="inline"></canvas>
            <canvas itemname="staff_of_water" show-label="inline"></canvas>
            <canvas itemname="staff_of_earth" show-label="inline"></canvas>
            <canvas itemname="staff_of_fire" show-label="inline"></canvas>
            <canvas itemname="fine_cloth" show-label="inline"></canvas>
        </td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_black_brown" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_black_crimson" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_black_black" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_black_purple" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td rowspan="5">Silver</td>
        <td><canvas itemname="shadekey_silver_bloodred" show-label="inline"></canvas></td>
        <td rowspan="5">
            <canvas itemname="coins" show-label="true" amount="7000" name-append=" (max)"></canvas>(Minus loot value,<br>can be zero)<br><br><br>
            <canvas itemname="swamppaste" show-label="true" amount="40"></canvas>(Between 25-40)
        </td>
        <td rowspan="5">
            <canvas itemname="cert_yew_logs" show-label="inline" amount="14" name-append=" (5-14)"></canvas>
            <canvas itemname="cert_magic_logs" show-label="inline" amount="14" name-append=" (5-14)"></canvas>
            <canvas itemname="steel_spear" show-label="inline"></canvas>
            <canvas itemname="adamant_spear" show-label="inline"></canvas>
            <canvas itemname="adamant_spear_p" show-label="inline"></canvas>
            <canvas itemname="mithril_plateskirt" show-label="inline"></canvas>
            <canvas itemname="deathrune" show-label="inline" amount="29" name-append=" (10-29)"></canvas>
            <canvas itemname="bloodrune" show-label="inline" amount="29" name-append=" (10-29)"></canvas>
            <canvas itemname="adamant_longsword" show-label="inline"></canvas>
            <canvas itemname="flamtaer_hammer" show-label="inline"></canvas>
            <canvas itemname="adamant_full_helm" show-label="inline"></canvas>
            <canvas itemname="diamond_ring" show-label="inline"></canvas>
            <canvas itemname="trail_clue_easy_vague001" show-label="inline" name-replace="Hard Clue Scroll"></canvas>
            <canvas itemname="amulet_of_power" show-label="inline"></canvas>
            <canvas itemname="adamant_sq_shield" show-label="inline"></canvas>
            <canvas itemname="black_platebody" show-label="inline"></canvas>
            <canvas itemname="adamnt_warhammer" show-label="inline"></canvas>
            <canvas itemname="adamant_battleaxe" show-label="inline"></canvas>
            <canvas itemname="adamant_chainbody" show-label="inline"></canvas>
            <canvas itemname="mithril_platebody" show-label="inline"></canvas>
            <canvas itemname="adamant_kiteshield" show-label="inline"></canvas>
            <canvas itemname="adamant_2h_sword" show-label="inline"></canvas>
            <canvas itemname="adamant_platelegs" show-label="inline"></canvas>
            <canvas itemname="adamant_plateskirt" show-label="inline"></canvas>
            <canvas itemname="battlestaff" show-label="inline"></canvas>
            <canvas itemname="adamant_full_helm" show-label="inline"></canvas>
            <canvas itemname="adamant_platebody" show-label="inline"></canvas>
            <canvas itemname="rune_med_helm" show-label="inline"></canvas>
            <canvas itemname="rune_sword" show-label="inline"></canvas>
            <canvas itemname="rune_scimitar" show-label="inline"></canvas>
            <canvas itemname="rune_longsword" show-label="inline"></canvas>
            <canvas itemname="rune_chainbody" show-label="inline"></canvas>
            <canvas itemname="fine_cloth" show-label="inline"></canvas>
        </td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_silver_brown" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_silver_crimson" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_silver_black" show-label="inline"></canvas></td>
    </tr>
    <tr>
        <td><canvas itemname="shadekey_silver_purple" show-label="inline"></canvas></td>
    </tr>
</table>
<br>
<h3>Fine cloth:</h3>
<p>
    The fine cloth gotten from the chests is what it is all about. You can sell them for 15-20k a piece or use them to make the special splitbark armour. Making this armour is considered expensive, but the armour itself is very useful.
</p>
<h3>Splitbark armour:</h3>
<p>
    The splitbark armour is the melee protection for mages. To make splitbark, you need to talk to the funny dressed mage in the mage tower south of Draynor. For splitbark armour you need a number of fine cloths, bark and money.
<p>
<p>
    The statistics for splitbark armour are as follows:
</p>
<table class="table">
    <tr>
        <td></td>
        <th><canvas itemname="splitbark_helm" show-label="true"></canvas></th>
        <th><canvas itemname="splitbark_body" show-label="true"></canvas></th>
        <th><canvas itemname="splitbark_legs" show-label="true"></canvas></th>
        <th><canvas itemname="splitbark_greaves" show-label="true"></canvas></th>
        <th><canvas itemname="splitbark_gauntlets" show-label="true"></canvas></th>
    </tr>
    <tr>
        <td>Coins needed to make:</td>
        <td>1,000</td>
        <td>1,000</td>
        <td>32,000</td>
        <td>37,000</td>
        <td>6,000</td>
    </tr>
    <tr>
        <td>Fine cloth & bark needed:</td>
        <td>1</td>
        <td>1</td>
        <td>3</td>
        <td>4</td>
        <td>2</td>
    </tr>
    <tr>
        <th colspan="6">Attack Bonuses</th>
    </tr>
    <tr>
        <td>Stab</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Slash</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Crush</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Magic</td>
        <td><font style="color:green;">+2</font></td>
        <td><font style="color:green;">+8</font></td>
        <td><font style="color:green;">+7</font></td>
        <td><font style="color:green;">+1</font></td>
        <td><font style="color:green;">+1</font></td>
    </tr>
    <tr>
        <td>Range</td>
        <td><font style="color:red;">-2</font></td>
        <td><font style="color:red;">-10</font></td>
        <td><font style="color:red;">-6</font></td>
        <td><font style="color:red;">-1</font></td>
        <td><font style="color:red;">-1</font></td>
    </tr>
    <tr>
        <td>Strength</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <th colspan="6">Defence Bonuses</th>
    </tr>
    <tr>
        <td>Stab</td>
        <td><font style="color:green;">+10</font></td>
        <td><font style="color:green;">+36</font></td>
        <td><font style="color:green;">+22</font></td>
        <td><font style="color:green;">+3</font></td>
        <td><font style="color:green;">+3</font></td>
    </tr>
    <tr>
        <td>Slash</td>
        <td><font style="color:green;">+9</font></td>
        <td><font style="color:green;">+26</font></td>
        <td><font style="color:green;">+20</font></td>
        <td><font style="color:green;">+2</font></td>
        <td><font style="color:green;">+2</font></td>
    </tr>
    <tr>
        <td>Crush</td>
        <td><font style="color:green;">+11</font></td>
        <td><font style="color:green;">+42</font></td>
        <td><font style="color:green;">+25</font></td>
        <td><font style="color:green;">+4</font></td>
        <td><font style="color:green;">+4</font></td>
    </tr>
    <tr>
        <td>Magic</td>
        <td><font style="color:green;">+3</font></td>
        <td><font style="color:green;">+15</font></td>
        <td><font style="color:green;">+10</font></td>
        <td><font style="color:green;">+2</font></td>
        <td><font style="color:green;">+2</font></td>
    </tr>
    <tr>
        <td>Range</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Prayer</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
</table>
<hr>
<h3>Shade descriptions:</h3>
<p>
    Below is a description of all the different shades and some more information about them.
</p>
<table class="table">
    <tr>
        <th>Shade</th>
        <th>Level</th>
        <th>Minimum log needed to burn</th>
        <th>Prayer xp for burning</th>
        <th>Keys given when burned</th>
        <th>Location</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>
            <canvas npcname="shade_level1" show-label="true" icon-size="80"></canvas><br>
            Loar Shade
        </td>
        <td>40</td>
        <td><canvas itemname="logs_pyre" show-label="true"></canvas></td>
        <td>33</td>
        <td>
            <canvas itemname="shadekey_bronze_brown" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_bronze_bloodred" show-label="inline"></canvas>
        </td>
        <td>All over the place in Mort'ton</td>
        <td>
            There green shades float around everywhere and are easy as pie. In world 2 you can pick their remains from the ground. No food needed to fight this, unless you are a low level.
        </td>
    </tr>
     <tr>
        <td>
            <canvas npcname="shade_level2" show-label="true" icon-size="80"></canvas><br>
            Phrin Shade
        </td>
        <td>60</td>
        <td>
            <canvas itemname="oak_logs_pyre" show-label="true"></canvas>
        </td>
        <td>46.5</td>
        <td>
            <canvas itemname="shadekey_bronze_black" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_bronze_purple" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_steel_brown" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_steel_bloodred" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_steel_crimson" show-label="inline"></canvas>
        </td>
        <td>In the small hallway just as you enter the tomb</td>
        <td>
            They float at the start of the tomb around as brown shadows, they are quite aggressive and will transform into a ghostly being when being attacked or when they attack. They can have a good hit, but mostly they're worthless fighters. You might need a bit food to get a full load.
        </td>
    </tr>
    <tr>
        <td>
            <canvas npcname="shade_level3" show-label="true" icon-size="80"></canvas><br>
            Riyl Shade
        </td>
        <td>80</td>
        <td>
            <canvas itemname="willow_logs_pyre" show-label="true"></canvas>
        </td>
        <td>59.5</td>
        <td>
            <canvas itemname="shadekey_steel_black" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_steel_crimson" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_steel_purple" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_black_brown" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_black_bloodred" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_black_crimson" show-label="inline"></canvas>
        </td>
        <td>They are found in the passage behind the steel door</td>
        <td>
            They float around like blood-red shadows, until they attack or are being attacked they become a pretty powerful shade. A bit of food is recommended when fighting these shades.
        </td>
    </tr>
    <tr>
        <td>
            <canvas npcname="shade_level4" show-label="true" icon-size="80"></canvas><br>
            Asyn Shade
        </td>
        <td>100</td>
        <td>
            <canvas itemname="yew_logs_pyre" show-label="true"></canvas>
        </td>
        <td>82.5</td>
        <td>
            <canvas itemname="shadekey_black_crimson" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_black_black" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_black_purple" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_silver_brown" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_silver_bloodred" show-label="inline"></canvas>
            
        </td>
        <td>They are found floating in a big area in the tombs behind the black door, left at the T-junction.</td>
        <td>
            They float around as little things, but don't underestimate them. They can hit a good 9 and will be very annoying. Good food or some prayer pots is highly recommended.
        </td>
    </tr>
    <tr>
        <td>
            <canvas npcname="shade_level5" show-label="true" icon-size="80"></canvas><br>
            Fiyr Shade
        </td>
        <td>120</td>
        <td>
            <canvas itemname="magic_logs_pyre" show-label="true"></canvas>
        </td>
        <td>100</td>
        <td>
            <canvas itemname="shadekey_silver_brown" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_silver_bloodred" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_silver_crimson" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_silver_black" show-label="inline"></canvas><br>
            <canvas itemname="shadekey_silver_purple" show-label="inline"></canvas>
        </td>
        <td>They can be found behind the silver door in the tomb</td>
        <td>
            The best of the best, these shades give a lot of good stuff as reward. That's why they're supposed to be hard. They can hit a painful 11 and will hit you a lot. Bring a lot of good food or prayer if you are planning to kill these.
        </td>
    </tr>
</table>
<hr>
<h3>Recommended strategy:</h3>
<p>
    First, you need olive oil to sacrify. Buy all the oil you need at Razmire in Mort'ton on an empty world. Don't forget to make 4 doses at the shop if you make yew or magic pyres. Then bring all the oils to Canifis bank by using the" In search of the Myresque" quest shortcut.
</p>
<p>
    When you have enough oils at the bank, switch to world 2. This is the only world where the temple is still being built. Bring your oil to Mort'ton by using the shortcut and get your sanctity up. You can do this by fighting the Loar shades (fighting xp.), this way you can bring more oils per trip, or by building the temple (crafting xp.); this is faster but you will have less room for oils. When you have enough sanctity, use the olive oil on the flaming fire altar to make sacred oil. After that, return to Canifis bank. When you have sacrified all your oils, use them on your logs to make pyre logs. This also gives firemaking experience.
</p>
<p>
    (The xp. gained depends on the logs used)
</p>
<p>
    Now you are ready to fight the shades. The items you will have to bring are: around 20000 gold coins, tinderbox, a key to each the shades of choice (None for 40, bronze for 60, steel for 80, black for 100 and silver for 120.) your noted pyre logs, good armour and a fine weapon; then you have to decide whether you will hi-alch your reward or sell it to the shop. The first option gives you magic xp, if you chose this bring fire runes (Staff of fire or fire battle-staff recommended) and nature runes, and the second option gives you more space for shades and rewards.
</p>
<p>
    The second choice is how you will protect yourself. The choices are food or melee protection. The first is good for low to medium level shades (lvl 60, 80), whilst prayer is better for higher levels (lvl 100, 120), since they can hit pretty hard.
</p>
<p>
    Option 1; bring noted food
</p>
<p>
    Option 2; bring noted prayer pots.
</p>
<p>
    Now, make you way to Mort'ton general store with all your items. Un-note (sell/buy) the needed protection items and enter the tomb. Inside, find your preferred shade and kill a bunch of them, picking up their remains afterwards. We suggest you get between 10 and 15 shade remains before you leave the tomb. Un-note as many pyre logs as you can carry, then burn the remains on a funeral pyre. Don't forget to pick up the reward! Repeat this until all remains are burned.
</p>
<p>
    *note: make sure you keep 1 key to make sure u can return to your shades.*
</p>
<p>
    For high-alchers: un-note the needed protection at the store and return to the tomb. Open the chests wit your keys and hi-alch your reward. Now you can kill shades for more remains, and this goes on and on and on.
</p>
<p>
    For shop-sellers: enter the tomb and open the chests with your keys. Leave the tomb and sell your rewards to the general store. Un-note your needed protection, enter the tomb and you can kill some more shades. Then it all starts over.
</p>
<hr>
This special report was written by odm666 and Dakmor shade. Thanks to cavedog911, matermine and havoc_cat for corrections.
<br><br>
This special report was entered into the database on Tue, Mar 15, 2005, at 05:47:06 PM by shane12088 and was last updated on Wed, Sep 14, 2005, at 01:20:13 PM by Fireball0236.
HTML; }