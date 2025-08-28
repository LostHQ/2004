<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    The mining skill is used to get ores and metals from rocks. The ores can then either be sold or made into different objects using the smithing and crafting skills. 
    <table>
        <tr>
            <td>To mine, the only object you will need is a pickaxe. These can be bought at the pickaxe shop in the Dwarf Mines. Rocks can be found at the various mining sites in the RuneScape world.<br><br>If you right click on a rock, you will get the option to prospect it. When you prospect a rock, you will be told what sort of ores you are able to mine from it.</td>
            <td><img src="img/skillguides/mining/prospect.gif"></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td><img src="img/skillguides/mining/mining.gif"></td>
            <td>To mine a rock simply click the "Mine" option on the rock, the first on in the list. If there is an ore in that rock there is a chance you will extract it, provided your mining is high enough to mine that particular ore.<br><br>Ore is quite hard to get out of rocks - it might take quite a few attempts before you meet with success.</td>
        </tr>
    </table>
    <br>
     As your mining level gets higher it will become slowly easier. Once someone has mined a rock there will be no ore available to get from it for a short while; wait a bit and you will be able to mine ore from it again.
    <h3>The Mining Guild</h3>
    If you are level 60 or above in your mining skill then you can enter the Mining Guild which is in Falador.
    <br><br>
    The mining guild contains a number of items useful for miners, including coal rocks and mithril rocks. You will also have access to the main dwarven mines from here.
    <h3>Pickaxes</h3>
    The following is a table showing at what level you can wield the different Pickaxes. The better the Pickaxe, the more chance you have of sucessfully mining the ore.<!-- (added later) A similar table to the one below can be opened in the game by clicking the mining skill icon in the stats menu.-->
    <br><br>
    <table class="calculators">
        <tr>
            <th>Pickaxe</th>
            <th>Level required</th>
            <th>Price to Buy</th>
        </tr>
        <tr>
            <td><canvas data-itemname="bronze_pickaxe" data-show-label="true"></canvas></td>
            <td>1</td>
            <td>1 gp*</td>
        </tr>
        <tr>
            <td><canvas data-itemname="iron_pickaxe" data-show-label="true"></canvas></td>
            <td>1</td>
            <td>137 gp</td>
        </tr>
        <tr>
            <td><canvas data-itemname="steel_pickaxe" data-show-label="true"></canvas></td>
            <td>6</td>
            <td>500 gp</td>
        </tr>
        <tr>
            <td><canvas data-itemname="mithril_pickaxe" data-show-label="true"></canvas></td>
            <td>21</td>
            <td>1,300 gp</td>
        </tr>
        <tr>
            <td><canvas data-itemname="adamant_pickaxe" data-show-label="true"></canvas></td>
            <td>31</td>
            <td>3,200 gp</td>
        </tr>
        <tr>
            <td><canvas data-itemname="rune_pickaxe" data-show-label="true"></canvas></td>
            <td>41</td>
            <td>32,000 gp</td>
        </tr>
    </table>
    *Bronze pickaxes spawn in a few locations across RuneScape: Barbarian Village - house with spinning wheel and Lumbridge Castle gatehouse (<span data-floors="US">3rd floor</span>)
    <br>
    <table>
        <tr>
            <td>Players who have completed the <a href="?p=questguides&quest=shilovillage" class="c">Shilo Village</a> quest will have access to some special rocks solely for mining gems from. These rocks contain Sapphires, Rubies, Emeralds, Diamonds, Red Topaz, Opals and Jade gems.</td>
            <td><img src="img/skillguides/mining/gemrocks.gif"></td>
        </tr>
    </table>
    <h3>Mining levels</h3>
    <table class="calculators">
        <tr>
            <th>Ore</th>
            <th>Level required</th>
            <th>Common Locations</th>
        </tr>
        <tr>
            <td><canvas data-itemname="blankrune" data-show-label="true"></canvas></td>
            <td>1</td>
            <td>Rune essence mine (Varrock teleport)<br>Rune essence mine (Yanille teleport)</td>
        </tr>
        <tr>
            <td><canvas data-itemname="clay" data-show-label="true"></canvas></td>
            <td>1</td>
            <td>Southwest Varrock Mine<br>Southeast Varrock Mine<br>Rimmington Mine</td>
        </tr>
        <tr>
            <td><canvas data-itemname="copper_ore" data-show-label="true"></canvas></td>
            <td>1</td>
            <td rowspan="2">Southwest Varrock Mine<br>Southeast Varrock Mine<br>Dwarven Mine</td>
        </tr>
        <tr>
            <td><canvas data-itemname="tin_ore" data-show-label="true"></canvas></td>
            <td>1</td>
        </tr>
        <tr>
            <td><canvas data-itemname="blurite_ore" data-show-label="true"></canvas></td>
            <td>10</td>
            <td>Asgarnian Ice Dungeon</td>
        </tr>
        <tr>
            <td><canvas data-itemname="iron_ore" data-show-label="true"></canvas></td>
            <td>15</td>
            <td>Southeast Varrock Mine<br>Fight Arena Mine<br>Al Kharid Mine<br>Mining Guild</td>
        </tr>
        <tr>
            <td><canvas data-itemname="silver_ore" data-show-label="true"></canvas></td>
            <td>20</td>
            <td>Al Kharid Mine<br>Southwest Varrock Mine<br>Crafting Guild</td>
        </tr>
        <tr>
            <td><canvas data-itemname="coal" data-show-label="true"></canvas></td>
            <td>30</td>
            <td>Dwarven Mine<br>Coal Trucks<br>Barbarian Village<br>Mining Guild</td>
        </tr>
        <tr>
            <td><canvas data-itemname="gold_ore" data-show-label="true"></canvas></td>
            <td>40</td>
            <td>North Brimhaven Mine<br>Crafting Guild</td>
        </tr>
        <tr>
            <td><img src="img/skillguides/mining/shilo_gems.gif" height="28"><br>Gem rocks</td>
            <td>40</td>
            <td>Shilo Village</td>
        </tr>
        <tr>
            <td><canvas data-itemname="mithril_ore" data-show-label="true"></canvas></td>
            <td>55</td>
            <td>Al Kharid Mine<br>Fight Arena Mine<br>West Lumbridge Swamp Mine<br>Mining Guild</td>
        </tr>
        <tr>
            <td><canvas data-itemname="adamantite_ore" data-show-label="true"></canvas></td>
            <td>70</td>
            <td>Al Kharid Mine<br>West Lumbridge Swamp Mine<br>Grand Tree Mine<br>Desert Mining Camp (underground)</td>
        </tr>
        <tr>
            <td><canvas data-itemname="runite_ore" data-show-label="true"></canvas></td>
            <td>85</td>
            <td>Lava Maze Runite Mine<br>Heroes Guild</td>
        </tr>
    </table>    
</p>
HTML; }