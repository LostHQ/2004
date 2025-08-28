<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    The ranged skill is used for attacking players or monsters from a distance with weapons such as bows and arrows, throwing knives and many others. This skill is useful if you prefer to fight a foe from a distance, using hit and run tactics to avoid damage yourself. Range is also particularly effective against Mages, so is a useful skill when fighting magic users.
    <br><br>
    To use a bow you need to wield it. You must also wield some appropriate arrows or bolts.
    <table cellpadding="3">
        <tr>
            <td>Click to attack a monster or player and you will shoot your arrows/bolts until you do something else or are attacked. You cannot shoot a player or monster if you do not have a direct line of sight. (For example, if there is wall or tree between you and the monster.)</td>
        <td><img src="img/skillguides/ranging/ranging.gif"></td>
        </tr>
    </table>
    Enemies attacked by ranging will attempt to run directly to attack you in hand to hand combat. If you shoot at a monster from the other side of a fence or piece of furniture then the monster will not be able to get to you. If the monster does not have any ranged attacks then you can continue to hit it without receiving any damage yourself.  A ranger will use the terrain he is in to gain advantage over an enemy, as they are relatively weak in hand to hand combat.
    <br><br>
    A number of your arrows will land on the ground by your target so you can go and use them again, however some will be lost as they are damaged upon impact.
    <br><br>
    For further information on the selection of bows available to make please see our <a href="?p=skillguides&skill=fletching" class="c">fletching</a> guide.
    <!-- released later
    <br><br>
    A similar table to the one below can be opened in the game by clicking the ranging skill icon in the stats menu.
    -->
    <h3>Ranging Guild</h3>
    Experienced rangers (level 40) may enter the Ranging Guild in the Seers' Village, where they may practice shooting at targets and live foes of various levels. The Guild also offers a selection of items for sale, including a wide range of thrown weapons.
    <h3>Bow wield Requirements</h3>
    <table class="calculators">
    <tr>
        <th>Bow Type</th>
        <th>Ranged level</th>
        <th>Arrow Types</th>
    </tr>
    <tr>
        <td>
            <canvas data-itemname="shortbow"></canvas>
            <canvas data-itemname="longbow"></canvas><br>
            Regular Bows
        </td>
        <td>1</td>
        <td>
            <canvas data-itemname="bronze_arrow"></canvas>
            <canvas data-itemname="iron_arrow"></canvas><br>
            Bronze & Iron
        </td>
    </tr>
    <tr>
        <td>
            <canvas data-itemname="oak_shortbow"></canvas>
            <canvas data-itemname="oak_longbow"></canvas><br>
            Oak Bows
        </td>
        <td>5</td>
        <td>
            <canvas data-itemname="bronze_arrow"></canvas>
            <canvas data-itemname="iron_arrow"></canvas>
            <canvas data-itemname="steel_arrow"></canvas><br>
            Bronze, Iron, & Steel
        </td>
    </tr>
    <tr>
        <td>
            <canvas data-itemname="willow_shortbow"></canvas>
            <canvas data-itemname="willow_longbow"></canvas><br>
            Willow Bows
        </td>
        <td>20</td>
        <td>
            <canvas data-itemname="bronze_arrow"></canvas>
            <canvas data-itemname="iron_arrow"></canvas>
            <canvas data-itemname="steel_arrow"></canvas>
            <canvas data-itemname="mithril_arrow"></canvas><br>
            All Arrows up to Mithril
        </td>
    </tr>
    <tr>
        <td>
            <canvas data-itemname="maple_shortbow"></canvas>
            <canvas data-itemname="maple_longbow"></canvas><br>
            Maple Bows
        </td>
        <td>30</td>
        <td>
            <canvas data-itemname="bronze_arrow"></canvas>
            <canvas data-itemname="iron_arrow"></canvas>
            <canvas data-itemname="steel_arrow"></canvas>
            <canvas data-itemname="mithril_arrow"></canvas>
            <canvas data-itemname="adamant_arrow"></canvas><br>
            All Arrows up to Adamant
        </td>
    </tr>
    <tr>
        <td>
            <canvas data-itemname="yew_shortbow"></canvas>
            <canvas data-itemname="yew_longbow"></canvas><br>
            Yew Bows
        </td>
        <td>40</td>
        <td>
            <canvas data-itemname="bronze_arrow"></canvas>
            <canvas data-itemname="iron_arrow"></canvas>
            <canvas data-itemname="steel_arrow"></canvas>
            <canvas data-itemname="mithril_arrow"></canvas>
            <canvas data-itemname="adamant_arrow"></canvas>
            <canvas data-itemname="rune_arrow"></canvas><br>
            All Arrows up to Rune
        </td>
    </tr>
    <tr>
        <td>
            <canvas data-itemname="magic_shortbow"></canvas>
            <canvas data-itemname="magic_longbow"></canvas><br>
            Magic Bows
        </td>
        <td>50</td>
        <td>
            <canvas data-itemname="bronze_arrow"></canvas>
            <canvas data-itemname="iron_arrow"></canvas>
            <canvas data-itemname="steel_arrow"></canvas>
            <canvas data-itemname="mithril_arrow"></canvas>
            <canvas data-itemname="adamant_arrow"></canvas>
            <canvas data-itemname="rune_arrow"></canvas><br>
            All Arrows up to Rune
        </td>
    </tr>
    </table>

    <h3>Ranging Armour wield Requirements</h3>
    
    <table class="calculators">
        <tr>
            <th>Armour Type</td>
            <th>Ranged to wield</th>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="leather_cowl"></canvas>
                <canvas data-itemname="leather_body"></canvas>
                <canvas data-itemname="leather_chaps"></canvas>
                <canvas data-itemname="leather_vambraces"></canvas><br>
                Cowl, Leather body, chaps, & vambraces
            </td>
            <td>1</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="hardleather_body"></canvas><br>
                Hard Leather Body
            </td>
            <td>1<br>(10 Defence)</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="studded_body"></canvas><br>
                Studded Leather Body
            </td>
            <td>20<br>(20 Defence)</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="studded_chaps"></canvas><br>
                Studded chaps
            </td>
            <td>20</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="coif"></canvas><br>
                Coif
            </td>
            <td>20</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="dragonhide_body"></canvas><br>
                Green Dragonhide body
            </td>
            <td>40<br>(40 defence +<br>Dragon Slayer)</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="dragon_vambraces"></canvas>
                <canvas data-itemname="dragonhide_chaps"></canvas><br>
                Green Dragonhide chaps & vambraces
            </td>
            <td>40</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="robinhoodhat"></canvas><br>
                Robin Hood hat
            </td>
            <td>40</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="boots_ranger"></canvas><br>
                Rangers Boots
            </td>
            <td>40</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="blue_dragonhide_body"></canvas><br>
                Blue Dragonhide body
            </td>
            <td>50<br>(40 defence)</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="blue_dragon_vambraces"></canvas>
                <canvas data-itemname="blue_dragonhide_chaps"></canvas><br>
                Blue Dragonhide chaps & vambraces
            </td>
            <td>50</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="red_dragonhide_body"></canvas><br>
                Red Dragonhide body
            </td>
            <td>60<br>(40 defence)</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="red_dragon_vambraces"></canvas>
                <canvas data-itemname="red_dragonhide_chaps"></canvas><br>
                Red Dragonhide chaps & vambraces
            </td>
            <td>60</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="black_dragonhide_body"></canvas><br>
                Black Dragonhide body
            </td>
            <td>70<br>(40 defence)</td>
        </tr>
        <tr>
            <td>
                <canvas data-itemname="black_dragon_vambraces"></canvas>
                <canvas data-itemname="black_dragonhide_chaps"></canvas><br>
                Black Dragonhide chaps & vambraces
            </td>
            <td>70</td>
        </tr>
    </table>
    
</p>
HTML; }