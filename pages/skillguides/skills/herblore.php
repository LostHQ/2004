<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    Herblore is used to make different sorts of potions and poisons. Before you can use herblore you will need to complete the <a href="?p=questguides&quest=druidicritual">Druidic Ritual</a> quest.
    <h3>Identifying Herbs</h3>
    A lot of the herbs you find in the game will be unidentified. To be able to use them you will first need to use your herblore skill to identify them. Just click on a herb to identify it and if you are high enough level it will then become an identified herb type. As your herblore level gets higher you will be able to identify more and more different herbs.
    <br><br>
    The following is a table showing at what level you will be able to identify each herb.
    <br><br>
    <table class="table">
        <tr>
            <th>Level<br>Requirement</th>
            <th>Unidentified<br>Herb</th>
            <th>Idenfitied<br>Herb</th>
            <th>XP for<br>Identifying</th>
        </tr>
        <tr>
            <td>3</td>
            <td><canvas data-itemname="unidentified_guam"></canvas><br>Herb</td>
            <td><canvas data-itemname="guam_leaf"></canvas><br>Guam Leaf</td>
            <td>2.5</td>
        </tr>
        <tr>
            <td>5</td>
            <td><canvas data-itemname="unidentified_marrentill"></canvas><br>Herb</td>
            <td><canvas data-itemname="marentill"></canvas><br>Marrentill</td>
            <td>3.8</td>
        </tr>
        <tr>
            <td>11</td>
            <td><canvas data-itemname="unidentified_tarromin"></canvas><br>Herb</td>
            <td><canvas data-itemname="tarromin"></canvas><br>Tarromin</td>
            <td>5</td>
        </tr>
        <tr>
            <td>20</td>
            <td><canvas data-itemname="unidentified_harralander"></canvas><br>Herb</td>
            <td><canvas data-itemname="harralander"></canvas><br>Harralander</td>
            <td>6.3</td>
        </tr>
        <tr>
            <td>25</td>
            <td><canvas data-itemname="unidentified_ranarr"></canvas><br>Herb</td>
            <td><canvas data-itemname="ranarr_weed"></canvas><br>Ranarr weed</td>
            <td>7.5</td>
        </tr>
        <tr>
            <td>40</td>
            <td><canvas data-itemname="unidentified_irit"></canvas><br>Herb</td>
            <td><canvas data-itemname="irit_leaf"></canvas><br>Irit Leaf</td>
            <td>8.8</td>
        </tr>
        <tr>
            <td>48</td>
            <td><canvas data-itemname="unidentified_avantoe"></canvas><br>Herb</td>
            <td><canvas data-itemname="avantoe"></canvas><br>Avantoe</td>
            <td>10</td>
        </tr>
        <tr>
            <td>54</td>
            <td><canvas data-itemname="unidentified_kwuarm"></canvas><br>Herb</td>
            <td><canvas data-itemname="kwuarm"></canvas><br>Kwuarm</td>
            <td>11.3</td>
        </tr>
        <tr>
            <td>65</td>
            <td><canvas data-itemname="unidentified_cadantine"></canvas><br>Herb</td>
            <td><canvas data-itemname="cadantine"></canvas><br>Cadantine</td>
            <td>12.5</td>
        </tr>
        <tr>
            <td>67</td>
            <td><canvas data-itemname="unidentified_lantadyme"></canvas><br>Herb</td>
            <td><canvas data-itemname="lantadyme"></canvas><br>Lantadyme</td>
            <td>13.1</td>
        </tr>
        <tr>
            <td>70</td>
            <td><canvas data-itemname="unidentified_dwarf_weed"></canvas><br>Herb</td>
            <td><canvas data-itemname="dwarf_weed"></canvas><br>Dwarf weed</td>
            <td>13.8</td>
        </tr>
        <tr>
            <td>75</td>
            <td><canvas data-itemname="unidentified_torstol"></canvas><br>Herb</td>
            <td><canvas data-itemname="torstol"></canvas><br>Torstol</td>
            <td>15</td>
        </tr>
    </table>
    <h3>Mixing Potions</h3>
    <!-- an image named mixpotion.gif goes on the right side of this wall of text if ever found -->
    You will need a vial. These can be bought from shops such as the herblore shop in Taverley or made using glassmaking (see the <a href="?p=skillguides&skill=crafting">crafting</a> guide).
    <br><br>
    Fill the vial with water from a sink or fountain.
    <br><br>
    To make potions you will need a combination of the unfinished potion and one other ingredient as shown in the table below.
    <br><br>
    You must add your herb to your vial of water first and then the other ingredient.
    <br><br>
    As you reach higher levels you will be able to make more types of potions.
    <h3>Potion Ingredients</h3>
    <table class="table">
        <tr>
            <th>Level<br>Requirement</th>
            <th>Herb and<br>Unf Potion</th>
            <th>Secondary<br>ingredient</th>
            <th>Potion</th>
            <th>XP for<br>Brewing</th>
        </tr>
        <tr>
            <td>3</td>
            <td>
                <canvas data-itemname="guam_leaf"></canvas>
                <canvas data-itemname="guamvial"></canvas><br>
                Guam Leaf
            </td>
            <td><canvas data-itemname="eye_of_newt"></canvas><br>Eye of Newt</td>
            <td><canvas data-itemname="3dose1attack"></canvas><br>Attack potion</td>
            <td>25</td>
        </tr>
        <tr>
            <td>5</td>
            <td>
                <canvas data-itemname="marentill"></canvas>
                <canvas data-itemname="marrentillvial"></canvas><br>
                Marrentill
            </td>
            <td><canvas data-itemname="unicorn_horn_dust"></canvas><br>Ground unicorn horn</td>
            <td><canvas data-itemname="3doseantipoison"></canvas><br>Antipoison potion</td>
            <td>37.5</td>
        </tr>
        <tr>
            <td>12</td>
            <td>
                <canvas data-itemname="tarromin"></canvas>
                <canvas data-itemname="tarrominvial"></canvas><br>
                Tarromin
            </td>
            <td><canvas data-itemname="limpwurt_root"></canvas><br>Limpwurt root</td>
            <td><canvas data-itemname="3dose1strength"></canvas><br>Strength potion</td>
            <td>50</td>
        </tr>
        <tr>
            <td>22</td>
            <td>
                <canvas data-itemname="harralander"></canvas>
                <canvas data-itemname="harralandervial"></canvas><br>
                Harralander
            </td>
            <td><canvas data-itemname="red_spiders_eggs"></canvas><br>Red spider's eggs</td>
            <td><canvas data-itemname="3dosestatrestore"></canvas><br>Stat restore potion</td>
            <td>62.5</td>
        </tr>
        <tr>
            <td>30</td>
            <td>
                <canvas data-itemname="ranarr_weed"></canvas>
                <canvas data-itemname="ranarrvial"></canvas><br>
                Ranarr weed
            </td>
            <td><canvas data-itemname="white_berries"></canvas><br>White Berries</td>
            <td><canvas data-itemname="3dose1defense"></canvas><br>Defence potion</td>
            <td>75</td>
        </tr>
        <tr>
            <td>38</td>
            <td>
                <canvas data-itemname="ranarr_weed"></canvas>
                <canvas data-itemname="ranarrvial"></canvas><br>
                Ranarr weed
            </td>
            <td><canvas data-itemname="snape_grass"></canvas><br>Snape Grass</td>
            <td><canvas data-itemname="3doseprayerrestore"></canvas><br>Restore prayer potion</td>
            <td>87.5</td>
        </tr>
        <tr>
            <td>45</td>
            <td>
                <canvas data-itemname="irit_leaf"></canvas>
                <canvas data-itemname="iritvial"></canvas><br>
                Irit Leaf
            </td>
            <td><canvas data-itemname="eye_of_newt"></canvas><br>Eye of newt</td>
            <td><canvas data-itemname="3dose2attack"></canvas><br>Super attack potion</td>
            <td>100</td>
        </tr>
        <tr>
            <td>48</td>
            <td>
                <canvas data-itemname="irit_leaf"></canvas>
                <canvas data-itemname="iritvial"></canvas><br>
                Irit Leaf
            </td>
            <td><canvas data-itemname="unicorn_horn_dust"></canvas><br>Ground unicorn horn</td>
            <td><canvas data-itemname="3dose2antipoison"></canvas><br>Super antipoison potion</td>
            <td>106.3</td>
        </tr>
        <tr>
            <td>50</td>
            <td>
                <canvas data-itemname="avantoe"></canvas>
                <canvas data-itemname="avantoevial"></canvas><br>
                Avantoe
            </td>
            <td><canvas data-itemname="snape_grass"></canvas><br>Snape Grass</td>
            <td><canvas data-itemname="3dosefisherspotion"></canvas><br>Fishing potion</td>
            <td>112.5</td>
        </tr>
        <tr>
            <td>55</td>
            <td>
                <canvas data-itemname="kwuarm"></canvas>
                <canvas data-itemname="kwuarmvial"></canvas><br>
                Kwuarm
            </td>
            <td><canvas data-itemname="limpwurt_root"></canvas><br>Limpwurt root</td>
            <td><canvas data-itemname="3dose2strength"></canvas><br>Super strength potion</td>
            <td>125</td>
        </tr>
        <tr>
            <td>60</td>
            <td>
                <canvas data-itemname="kwuarm"></canvas>
                <canvas data-itemname="kwuarmvial"></canvas><br>
                Kwuarm
            </td>
            <td><canvas data-itemname="dragon_scale_dust"></canvas><br>Ground dragon scale</td>
            <td><canvas data-itemname="weapon_poison"></canvas><br>Weapon poison</td>
            <td>127.5</td>
        </tr>
        <tr>
            <td>66</td>
            <td>
                <canvas data-itemname="cadantine"></canvas>
                <canvas data-itemname="cadantinevial"></canvas><br>
                Cadantine
            </td>
            <td><canvas data-itemname="white_berries"></canvas><br>White Berries</td>
            <td><canvas data-itemname="3dose2defense"></canvas><br>Super defence potion</td>
            <td>150</td>
        </tr>
        <tr>
            <td>69</td>
            <td>
                <canvas data-itemname="lantadyme"></canvas>
                <canvas data-itemname="lantadymevial"></canvas><br>
                Lantadyme
            </td>
            <td><canvas data-itemname="dragon_scale_dust"></canvas><br>Ground dragon scale</td>
            <td><canvas data-itemname="3dose1antidragon"></canvas><br>Anti-FireBreath potion</td>
            <td>157.5</td>
        </tr>
        <tr>
            <td>72</td>
            <td>
                <canvas data-itemname="dwarf_weed"></canvas>
                <canvas data-itemname="dwarfweedvial"></canvas><br>
                Dwarf weed
            </td>
            <td><canvas data-itemname="wine_of_zamorak"></canvas><br>Wine of Zamorak</td>
            <td><canvas data-itemname="3doserangerspotion"></canvas><br>Ranging potion</td>
            <td>162.5</td>
        </tr>
        <tr>
            <td>78</td>
            <td>
                <canvas data-itemname="torstol"></canvas>
                <canvas data-itemname="torstolvial"></canvas><br>
                Torstol
            </td>
            <td><canvas data-itemname="jangerberries"></canvas><br>Jangerberries</td>
            <td><canvas data-itemname="3dosepotionofzamorak"></canvas><br>Zamorak potion</td>
            <td>175</td>
        </tr>
    </table>
    <h3>Ground Ingredients</h3>
    The unicorn and dragon scale need to be ground before they can be used in the potions. To grind them use the pestle and mortar bought from the herblore shop.
    <br><br>
    <table width="98%" cellpadding="1" cellspacing="0" class="table">
        <tr>
            <th>Start</th>
            <th>Use with</th>
            <th>Result</th>
        </tr>
        <tr>
            <td><canvas data-itemname="unicorn_horn"></canvas><br>Unicorn Horn</td>
            <td><canvas data-itemname="pestle_and_mortar"></canvas><br>Pestle & Mortar</td>
            <td><canvas data-itemname="unicorn_horn_dust"></canvas><br>Unicorn horn dust</td>
        </tr>
        <tr>
            <td><canvas data-itemname="blue_dragon_scale"></canvas><br>Blue Dragon Scale</td>
            <td><canvas data-itemname="pestle_and_mortar"></canvas><br>Pestle & Mortar</td>
            <td><canvas data-itemname="dragon_scale_dust"></canvas><br>Ground dragon scale</td>
        </tr>
    </table>
    <h3>Weapon Poison</h3>
    <table>
        <tr>
            <td><canvas data-itemname="weapon_poison"></canvas></td>
            <td>The weapon poison can only be used only on certain weapons such as arrows and daggers. Players can be poisoned by other player's poisoned weapons or by a poisonous npc.</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>A player will slowly take damage from the poison until it either wears off or they drink an anti-poison potion. The potion also grants a small immunity so that the drinker cannot be poisoned for a short while.</td>
            <td><canvas data-itemname="3doseantipoison"></canvas></td>
        </tr>
    </table>
    
</p>
HTML; }