<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    <h3>Using magic spells</h3>
    <table>
        <tr>
            <td>
                Pointing at the spell book item brings up the magic menu. From here you can select spells to cast.
                <br><br>
                This will bring up a screen of all spells available to you within the game. If the picture of a spell is darkened, it means that you do not yet have a high enough level to cast it or you do not have the runes in your inventory to do so. If a spell is lit up on this screen, then it means that you are a high enough level to cast it and you have enough runes in your inventory.
                <br><br>
                To cast the spell just click on the spell picture, and then click on your desired target in the main game window. Some spells can only be cast on hostile monsters, other spells can only be cast on yourself or inventory items, so experiment to see what targets are valid for each spell.
            </td>
            <td><img src="img/skillguides/magic/magictab2.gif"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>For more information on a spell move your mouse cursor over the spell. A description of the spell and a list of which are runes are required is shown at the bottom of the window. Each required rune has 2 numbers shown below a picture of it. The 1st number indicates how many of that rune you have, and the 2nd number indicates how many you require. The numbers will be drawn in red for runes which you do not have a sufficient number of to cast the spell. Runes can be obtained in a number of ways. Mages can make their own runes using the runecraft skill (see the <a href="?p=skillguides&skill=runecraft">runecraft</a> guide). Other ways to get runes include buying them in magic shops in towns such as Varrock and Port Sarim or by killing monsters.</td>
            <td><img src="img/skillguides/magic/magictab3.gif"></td>
        </tr>
    </table>
    <h3>Rune Types</h3>
    To cast spells in the game you need the correct runes. Each of the runes has a different power, and is used for a different category of spell. Information about each of the runes is shown below:
    <br><br>
    <table class="table">
        <tr>
            <th colspan="2">Runes</th>
        </tr>
        <tr>
            <td width="29%"><canvas itemname="airrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>One of the 4 elemental runes.<br>Can be replaced by a staff of air.</td>
        </tr>
        <tr>
            <td><canvas itemname="waterrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>One of the 4 elemental runes.<br>Can be replaced by a staff of water.</td>
        </tr>
        <tr>
            <td><canvas itemname="earthrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>One of the 4 elemental runes.<br>Can be replaced by a staff of earth.</td>
        </tr>
        <tr>
            <td><canvas itemname="firerune" show-label="inline" hide-amount="true"></canvas></td>
            <td>One of the 4 elemental runes.<br>Can be replaced by a staff of fire.</td>
        </tr>
        <tr>
            <td><canvas itemname="mindrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>Required for strike spells.</td>
        </tr>
        <tr>
            <td><canvas itemname="bodyrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>Required for curse spells.</td>
        </tr>
        <tr>
            <td><canvas itemname="chaosrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>Required for bolt spells.</td>
        </tr>
        <tr>
            <td><canvas itemname="cosmicrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>Required for jewellery enchant spells.</td>
        </tr>
        <tr>
            <td><canvas itemname="naturerune" show-label="inline" hide-amount="true"></canvas></td>
            <td>Required for object conversion spells.</td>
        </tr>
        <tr>
            <td><canvas itemname="deathrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>Required for blast spells.</td>
        </tr>
        <tr>
            <td><canvas itemname="lawrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>Required for teleport spells.</td>
        </tr>
        <tr>
            <td><canvas itemname="soulrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>Required for high level curse spells.</td>
        </tr>
        <tr>
            <td><canvas itemname="bloodrune" show-label="inline" hide-amount="true"></canvas></td>
            <td>Required for high level wave spells.</td>
        </tr>
    </table>
    <br>
    <h3>Staffs</h3>
    <table>
        <tr>
            <td>
                If you want to cast many spells against opponents without clicking repeatedly, then you should use a staff. Staffs have a "recast" option as one of their combat styles.
                <br><br>
                If you wield a staff and select the combat style menu (the crossed sword icon on the player interface) you will see a book in the bottom left corner.
                <br><br>
                Clicking on that will allow you to chose any of the elemental spells you are able to cast and tie them to your staff. If you then select the "attack with" combat style on your staff you will automatically fight by casting that spell when you enter combat.
            </td>
            <td><img src="img/skillguides/magic/staff.gif"></td>
        </tr>
    </table>
    <h3>Notes about Magic</h3>
    <ul>
        <li>Heavy armour is very conductive of magic. Mages will often find themselves more effective against a hand to hand fighter in full armour than other enemies. You will notice enemies in full metal armour will be hit hard by spells, but also wearing heavy metal armour will affect your ability to cast spells successfully. The recommended equipment for Mages is light robes, to allow magical power to flow from you freely.</li>
        <br>
        <li>Sometimes spells will fail to work. If a spell fails, you will still gain the experience from casting the spell, and you will still use the runes required to cast it, but you will see a 'splash' effect on your opponent showing the failure of the spell. The higher level spells are more likely to fail, but as your magic ability improves you will cast spells successfully more of the time.</li>
    </ul>
    <h3>The Magic Guild</h3>
    Members who have a magic level of 66 or greater may enter the Magic Guild which is located in Yanille.
    <br>
    Inside the Magic Guild you will find a useful magic shop which sells a variety of runes and staffs for mages, including the extremely rare soul runes. There is also a small training area filled with zombies, as well as magical portals to various other parts of the RuneScape world all accessible from within this guild.
    <br><br>
    <h3>Enchanting Jewellery</h3>
    Players of the correct magic level will be able to enchant various items of jewellery that can be bought from shops or other players, or make them using the <a href="?p=skillguides&skill=crafting">crafting</a> skill.
    <br><br>
    Below is a table showing at what level you can enchant each item of jewellery, and what the effects of enchanting them are.
    <br><br>
    <table class="table">
        <tr>
            <th>Item name</th>
            <th>Level to enchant</th>
            <th>Effect when equipped</th>
            <th>Number of uses</th>
        </tr>
        <tr>
            <td><canvas itemname="ring_of_recoil" show-label="true"></canvas></td>
            <td>7</td>
            <td>Will deal the enemy you are fighting 10% of any damage you receive</td>
            <td>Allows a total damage of 40 to be done</td>
        </tr>
        <tr>
            <td><canvas itemname="amulet_of_magic" show-label="true"></canvas></td>
            <td>7</td>
            <td>While worn players Magic attack is boosted by 10</td>
            <td>Permanent.<br>Works whenever it is equipped</td>
        </tr>
        <!-- disabled until november 24, 2004
        <tr>
            <td><canvas itemname="games_necklace" show-label="true"></canvas></td>
            <td>7</td>
            <td>Allows the player to teleport to the Burthorpe Games Rooms</td>
            <td>Each necklace allows 8 teleports in total</td>
        </tr>
        -->
        <tr>
            <td><canvas itemname="ring_of_dueling_8" show-label="true" name-replace="Ring of dueling"></canvas></td>
            <td>27</td>
            <td>Allows the player to teleport to the entrance of the Duel Arena</td>
            <td>Each ring allows 8 teleports in total</td>
        </tr>
        <tr>
            <td><canvas itemname="amulet_of_defence" show-label="true"></canvas></td>
            <td>27</td>
            <td>While worn the players defence will be boosted by 7</td>
            <td>Permanent.<br>Works whenever it is equipped</td>
        </tr>
        <tr>
            <td><canvas itemname="ring_of_forging" show-label="true"></canvas></td>
            <td>49</td>
            <td>While smelting Iron ore the player will have a 100% success rate</td>
            <td>Allows 140 iron ores to be smelted in total</td>
        </tr>
        <tr>
            <td><canvas itemname="amulet_of_strength" show-label="true"></canvas></td>
            <td>49</td>
            <td>While worn players strength is boosted by 10</td>
            <td>Permanent.<br>Works whenever it is equipped</td>
        </tr>
        <tr>
            <td><br><canvas itemname="ring_of_life" show-label="true"></canvas></td>
            <td>57</td>
            <td>If your hitpoints drop below 10% without killing you, you will be teleported to Lumbridge</td>
            <td>Allows one teleport</td>
        </tr>
        <tr>
            <td><canvas itemname="amulet_of_power" show-label="true"></canvas></td>
            <td>57</td>
            <td>While worn the players attack, strength and defence will be boosted by 6</td>
            <td>Permanent.<br>Works whenever it is equipped</td>
        </tr>
        <tr>
            <td><canvas itemname="ring_of_wealth" show-label="true"></canvas></td>
            <td>68</td>
            <td>While equipped the chance of getting rare items from monsters is increased</td>
            <td>Permanent.<br>Works whenever it is equipped</td>
        </tr>
        <tr>
            <td><canvas itemname="amulet_of_glory" show-label="true"></canvas></td>
            <td>68</td>
            <td>Boosts attack, strength, magic, ranged and defence when worn. Can also be charged in the Heroes Guild to allow teleporting and to increase the chances of getting a gem when mining.</td>
            <td>Permanent.<br>Works whenever it is equipped</td>
        </tr>
    </table>
</p>
HTML; }