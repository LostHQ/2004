<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    Crafting is rumoured to be a slow, useless, and boring skill, but once you get into it there's lots to do! You can make everything from pots to collect flour in, to dragonhide armour for rangers. Crafting can be found all over the RuneScape world. In the amulets people wear, the vials you use in herblore and the Mystic Staves Magicians battle with. These items are all made in crafting.
    <br><br>
    <table class="table">
        <tr>
            <th>Crafting Level</th>
            <th>Ingredients</th>
            <th>Tools</th>
            <th>Product</th>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas itemname="uncut_opal" show-label="true"></canvas></td>
            <td><canvas itemname="chisel" show-label="true"></canvas></td>
            <td><canvas itemname="opal" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas itemname="wool" show-label="true"></canvas></td>
            <td>
                <img src="img/skillguides/spinning_wheel.png" width=32px><br>
                Spinning Wheel
            </td>
            <td><canvas itemname="ball_of_wool" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas itemname="leather" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="leather_gloves" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <canvas itemname="softclay" show-label="true"></canvas>
            </td>
            <td>
                <img src="img/skillguides/potters_wheel.png" width=32px><br>
                Potter's wheel
            </td>
            <td><canvas itemname="pot_unfired" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas itemname="pot_unfired" show-label="true"></canvas></td>
            <td>
                <img src="img/skillguides/pottery_oven.png" width=32px><br>
                Pottery Oven
            </td>
            <td><canvas itemname="pot_empty" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas itemname="molten_glass" show-label="true"></canvas></td>
            <td><canvas itemname="glassblowingpipe" show-label="true"></canvas></td>
            <td><canvas itemname="beer_glass" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>5</td>
            <td>
                <canvas itemname="gold_bar" show-label="true"></canvas>
            </td>
            <td>
                <canvas itemname="ring_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="gold_ring" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>6</td>
            <td>
                <canvas itemname="gold_bar" show-label="true"></canvas>
            </td>
            <td>
                <canvas itemname="necklace_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="gold_necklace" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>7</td>
            <td>
                <canvas itemname="softclay" show-label="true"></canvas>
            </td>
            <td>
                <img src="img/skillguides/potters_wheel.png" width=32px><br>
                Potter's wheel
            </td>
            <td><canvas itemname="piedish_unfired" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>7</td>
            <td><canvas itemname="piedish_unfired" show-label="true"></canvas></td>
            <td>
                <img src="img/skillguides/pottery_oven.png" width=32px><br>
                Pottery Oven
            </td>
            <td><canvas itemname="piedish" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>7</td>
            <td><canvas itemname="leather" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="leather_boots" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>8</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="ball_of_wool" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="amulet_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="strung_gold_amulet" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>8</td>
            <td>
                <canvas itemname="softclay" show-label="true"></canvas>
            </td>
            <td>
                <img src="img/skillguides/potters_wheel.png" width=32px><br>
                Potter's wheel
            </td>
            <td><canvas itemname="bowl_unfired" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>8</td>
            <td><canvas itemname="bowl_unfired" show-label="true"></canvas></td>
            <td>
                <img src="img/skillguides/pottery_oven.png" width=32px><br>
                Pottery Oven
            </td>
            <td><canvas itemname="bowl_empty" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>9</td>
            <td><canvas itemname="leather" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="leather_cowl" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>10</td>
            <td><canvas itemname="flax" show-label="true"></canvas></td>
            <td>
                <img src="img/skillguides/spinning_wheel.png" width=32px><br>
                Spinning Wheel
            </td>
            <td><canvas itemname="bow_string" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>11</td>
            <td><canvas itemname="leather" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="leather_vambraces" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>13</td>
            <td><canvas itemname="uncut_jade" show-label="true"></canvas></td>
            <td><canvas itemname="chisel" show-label="true"></canvas></td>
            <td><canvas itemname="jade" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>14</td>
            <td><canvas itemname="leather" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="leather_armour" show-label="true"></canvas></td>
        </tr>
        <!-- <tr>
            <td>15</td>
            <td><canvas itemname="chisel" show-label="true"></canvas></td>
            <td><canvas itemname="snailshell1" show-label="true"></canvas></td>
        </tr> -->
        <tr>
            <td>16</td>
            <td>
                <canvas itemname="silver_bar" show-label="inline"></canvas>
                <canvas itemname="ball_of_wool" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="holy_symbol_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="stringstar" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>16</td>
            <td><canvas itemname="uncut_red_topaz" show-label="true"></canvas></td>
            <td><canvas itemname="chisel" show-label="true"></canvas></td>
            <td><canvas itemname="red_topaz" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>17</td>
            <td>
                <canvas itemname="silver_bar" show-label="inline"></canvas>
                <canvas itemname="ball_of_wool" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="unholy_symbol_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="stringsnake" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>18</td>
            <td><canvas itemname="leather" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="leather_chaps" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>18</td>
            <td><canvas itemname="silver_bar" show-label="true"></canvas></td>
            <td>
                <canvas itemname="sickle_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
            </td>
            <td><canvas itemname="silver_sickle" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>20</td>
            <td><canvas itemname="uncut_sapphire" show-label="true"></canvas></td>
            <td><canvas itemname="chisel" show-label="true"></canvas></td>
            <td><canvas itemname="sapphire" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>20</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="sapphire" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="ring_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="sapphire_ring" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>22</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="sapphire" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="necklace_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="sapphire_necklace" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>24</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="sapphire" show-label="inline"></canvas>
                <canvas itemname="ball_of_wool" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="amulet_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="strung_sapphire_amulet" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>27</td>
            <td><canvas itemname="uncut_emerald" show-label="true"></canvas></td>
            <td><canvas itemname="chisel" show-label="true"></canvas></td>
            <td><canvas itemname="emerald" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>27</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="emerald" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="ring_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="emerald_ring" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>28</td>
            <td><canvas itemname="hard_leather" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="hardleather_body" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>29</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="emerald" show-label="inlinr"></canvas>
            </td>
            <td>
                <canvas itemname="necklace_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="emerald_necklace" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>31</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="emerald" show-label="inline"></canvas>
                <canvas itemname="ball_of_wool" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="amulet_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="strung_emerald_amulet" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>33</td>
            <td><canvas itemname="molten_glass" show-label="true"></canvas></td>
            <td><canvas itemname="glassblowingpipe" show-label="true"></canvas></td>
            <td><canvas itemname="vial_empty" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>34</td>
            <td><canvas itemname="uncut_ruby" show-label="true"></canvas></td>
            <td><canvas itemname="chisel" show-label="true"></canvas></td>
            <td><canvas itemname="ruby" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>34</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="ruby" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="ring_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="ruby_ring" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>38</td>
            <td><canvas itemname="leather" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="coif" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>40</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="ruby" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="necklace_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="ruby_necklace" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>41</td>
            <td>
                <canvas itemname="leather_armour" show-label="inline"></canvas>
                <canvas itemname="studs" show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas itemname="studded_body" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>43</td>
            <td><canvas itemname="uncut_diamond" show-label="true"></canvas></td>
            <td><canvas itemname="chisel" show-label="true"></canvas></td>
            <td><canvas itemname="diamond" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>43</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="diamond" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="ring_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="diamond_ring" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>44</td>
            <td>
                <canvas itemname="leather_chaps" show-label="inline"></canvas>
                <canvas itemname="studs" show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas itemname="studded_chaps" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>46</td>
            <td><canvas itemname="molten_glass" show-label="true"></canvas></td>
            <td><canvas itemname="glassblowingpipe" show-label="true"></canvas></td>
            <td><canvas itemname="stafforb" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>50</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="ruby" show-label="inline"></canvas>
                <canvas itemname="ball_of_wool" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="amulet_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="strung_ruby_amulet" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>54</td>
            <td>
                <canvas itemname="water_orb" show-label="inline"></canvas>
                <canvas itemname="battlestaff" show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas itemname="water_battlestaff" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>55</td>
            <td><canvas itemname="uncut_dragonstone" show-label="true"></canvas></td>
            <td><canvas itemname="chisel" show-label="true"></canvas></td>
            <td><canvas itemname="dragonstone" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>55</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="dragonstone" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="ring_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="dragonstone_ring" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>56</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="diamond" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="necklace_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="diamond_necklace" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>57</td>
            <td><canvas itemname="dragon_leather" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="dragon_vambraces" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>58</td>
            <td>
                <canvas itemname="earth_orb" show-label="inline"></canvas>
                <canvas itemname="battlestaff" show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas itemname="earth_battlestaff" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>60</td>
            <td>
                <canvas itemname="dragon_leather"></canvas>
                <canvas itemname="dragon_leather" show-label="true"></canvas>
            </td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="dragonhide_chaps" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>62</td>
            <td>
                <canvas itemname="fire_orb" show-label="inline"></canvas>
                <canvas itemname="battlestaff" show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas itemname="fire_battlestaff" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>63</td>
            <td>
                <canvas itemname="dragon_leather"></canvas>
                <canvas itemname="dragon_leather"></canvas>
                <canvas itemname="dragon_leather" show-label="true"></canvas>
            </td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="dragonhide_body" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>66</td>
            <td>
                <canvas itemname="air_orb" show-label="inline"></canvas>
                <canvas itemname="battlestaff" show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas itemname="air_battlestaff" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>66</td>
            <td><canvas itemname="dragon_leather_blue" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="blue_dragon_vambraces" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>68</td>
            <td>
                <canvas itemname="dragon_leather_blue"></canvas>
                <canvas itemname="dragon_leather_blue" show-label="true"></canvas>
            </td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="blue_dragonhide_chaps" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>70</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="diamond" show-label="inline"></canvas>
                <canvas itemname="ball_of_wool" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="amulet_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="strung_diamond_amulet" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>71</td>
            <td>
                <canvas itemname="dragon_leather_blue"></canvas>
                <canvas itemname="dragon_leather_blue"></canvas>
                <canvas itemname="dragon_leather_blue" show-label="true"></canvas>
            </td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="blue_dragonhide_body" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>72</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="dragonstone" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="necklace_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="dragonstone_necklace" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>73</td>
            <td><canvas itemname="dragon_leather_red" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="red_dragon_vambraces" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>75</td>
            <td>
                <canvas itemname="dragon_leather_red"></canvas>
                <canvas itemname="dragon_leather_red" show-label="true"></canvas>
            </td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="red_dragonhide_chaps" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>77</td>
            <td>
                <canvas itemname="dragon_leather_red"></canvas>
                <canvas itemname="dragon_leather_red"></canvas>
                <canvas itemname="dragon_leather_red" show-label="true"></canvas>
            </td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="red_dragonhide_body" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>79</td>
            <td><canvas itemname="dragon_leather_black" show-label="true"></canvas></td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="black_dragon_vambraces" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>80</td>
            <td>
                <canvas itemname="gold_bar" show-label="inline"></canvas>
                <canvas itemname="dragonstone" show-label="inline"></canvas>
                <canvas itemname="ball_of_wool" show-label="inline"></canvas>
            </td>
            <td>
                <canvas itemname="amulet_mould" show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas itemname="strung_dragonstone_amulet" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>82</td>
            <td>
                <canvas itemname="dragon_leather_black"></canvas>
                <canvas itemname="dragon_leather_black" show-label="true"></canvas>
            </td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="black_dragonhide_chaps" show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>84</td>
            <td>
                <canvas itemname="dragon_leather_black"></canvas>
                <canvas itemname="dragon_leather_black"></canvas>
                <canvas itemname="dragon_leather_black" show-label="true"></canvas>
            </td>
            <td>
                <canvas itemname="needle" show-label="inline" hide-amount="true"></canvas>
                <canvas itemname="thread" show-label="inline" hide-amount="true"></canvas>
            </td>
            <td><canvas itemname="black_dragonhide_body" show-label="true"></canvas></td>
        </tr>
    </table>
    <br>
    <h3>Pottery</h3>
    Bowls, pots and pie dishes can all be made by crafting. Clay is obtained by <a href="?p=skillguides&skill=mining">mining</a>.<br>To make the clay workable it needs to be softened first. Use a jug of water with the clay and it will be turned into soft clay. Take the clay to a potter's wheel. There is one in the barbarian village.
    <br><br>
    <table>
        <tr>
            <td>Use the clay on the potter's wheel and select what object you would like to make. If you have the correct crafting level you will make an unfired piece of pottery. If you want to make several of the same object, simply right-click and select the number you wish to produce. Use it on the pottery oven and as long as it doesn't crack upon heating, you will have made yourself a nice new piece of pottery.</td>
            <td><img src="img/skillguides/crafting/pottery.gif"></td>
        </tr>
    </table>
    <h3>Leather</h3>
    Leather is made from cow hides, so you will need to find a cow field and kill some cows.
    <br><br>
    <table>
        <tr>
            <td><img src="img/skillguides/crafting/leather.gif"></td>
            <td>Once you have a cow hide, take it to the tannery in Al Kharid. You can then craft your leather into leather armour, boots or gloves. You will need to get a needle and some thread from a crafting shop. Right-click the needle in your inventory and use it on a piece of leather, then as long as you have some thread the screen below will be opened, and you will be given a choice of leather objects to make.</td>
        </tr> 
    </table>
    <br>
    Simply click on the item you want to make and if you have enough thread you will craft it. If you want to make several of the same object, simply right-click and select the number you wish to produce.
    <br><br>
    <img src="img/skillguides/crafting/leather.jpg">
    <br><br>
    There are 3 types of leather - normal, hard and dragon. You are given the choice of either normal or hard leather when you get your cow hides converted by the tanner. Expect to pay a little more for hardened leather. Dragon leather is made in the same way as normal leather, except dragon hides are used instead of cow hides.
    <br><br>
    Kill a dragon to collect it's hide, then speak to a tanner in the same way, and you get the option to make dragon leather if you have any dragonhides in your inventory. The cost for converting dragonhides is more expensive than hardened leather however. Use a needle and thread again and a smaller crafting display is shown with the items that you can craft from dragon leather.
    <br><br>
    Adding studs to a leather body or chaps increases it's strength. Studs can be smithed from steel, then used with the leather item to make it studded. Studs can only be used on normal leather.
    <br><br>
    <h3>Gems</h3>
    Gems are rare objects you will occasionally find, they can be made more valuable by cutting them. Once a gem is cut it can also be used when you are making gold jewelry.
    <br><br>
    You will need to buy a chisel from a general store or a crafting shop. Select the chisel from your inventory and then the gem you wish to cut. If you find your crafting level is not high enough to cut the gem you may want to make a bit more pottery or leather to raise your crafting level first.
    <br><br>
    <h3>Holy and Unholy symbols</h3>
    You need a crafting level of 16 to craft silver bars. To make silver bars see the <a href="?p=skillguides&skill=mining">mining</a> and <a href="?p=skillguides&skill=smithing">smithing</a> guides.
    <br><br>
    <table>
        <tr>
            <td><img src="img/skillguides/crafting/spinning.gif"></td>
            <td>You will need a holy symbol mould which can be bought from a crafting shop. Then use your silver bar on a furnace and you will be able to make a holy symbol of Saradomin.<!-- (added later) If you want to make several of the same object, simply right-click and select the number you wish to produce.--><br>You can either sell your holy symbol to the general store or you can make it into an object that makes your prayers last longer. If you want to use your holy symbol you will need some string. To make string, buy a pair of shears from a general store. Use the shears on a sheep to get some wool.</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>Use the wool on a spinning wheel to spin it into a ball. Then you can use your ball of wool on your holy symbol to give it a string. Finally you will need to get your holy symbol blessed. This can only be done by taking it to a monk called Brother Jered or by using a completed prayer book. Brother Jered is upstairs in the monastery. You will need a prayer level of 31 to get in to talk to him.</td>
            <td><img src="img/skillguides/crafting/monk.gif"></td>
        </tr>
    </table>
    <br>
    Runescape members may also come across an unholy symbol mould which can be used to make unholy symbols in the same way and requires a crafting level of 17 to use. When they get the mould they will also be told how to get their unholy symbols enchanted.
    <h3>Jewelery and amulets</h3>
    <table>
        <tr>
            <td><img src="img/skillguides/crafting/furnace.gif"></td>
            <td>To make gold bars see the <a href="?p=skillguides&skill=mining">mining</a> and <a href="?p=skillguides&skill=smithing">smithing</a> guides. You can make amulets, necklaces, and rings from gold bars. Buy the appropriate moulds from a crafting shop.<br><br>Use a gold bar on a furnace and select the object you would like to make.</td>
        </tr>
    </table>
    <br>
    Putting gems in your gold jewelry can increase the smithing level required quite a lot, but it also increases the value of what you are making.
    <br><br>
    All the gold jewelry can be sold for a good price, but amulets and rings with jewels in them can also be <a href="?p=skillguides&skill=magic">enchanted at a high enough magic level</a> to give various bonuses. First of all your amulet will need a string, this is made in the same way as the string for the holy amulets of Saradomin. Then it can be enchanted using the magic skill.
    <br><br>
    <h3>Glassmaking</h3>
    <table>
        <tr>
            <td>To make some glass, you will first need to get some seaweed. This can be obtained by big net fishing, or found on Entrana Island. Heat the seaweed to get soda ash.<br><br>Then use a bucket on a sandpit, to get a bucket of sand. With both soda ash and sand in your inventory, you can then use a furnace on either one to make molten glass.</td>
            <td><img src="img/skillguides/crafting/sandpit.gif"></td>
        </tr>
    </table>
    <br>
    Use this molten glass with a glass-blowing pipe, which can also be found on Entrana. You will then be asked what object you would like to make. If you want to make several of the same object, simply right-click and select the number you wish to produce.
    <br><br>
    <h3>Bowstrings</h3>
    You can make bowstrings by using flax on a spinning wheel. If you want to make several of the same object, simply right-click and select the number you wish to produce.
    <br><br>
    Making bow strings gives a good amount of crafting experience and the bowstrings are useful for making bows (see the <a href="?p=skillguides&skill=fletching">fletching guide</a>.)
    <br><br>
    <h3>Battlestaffs</h3>
    First get an unpowered orb (see glassmaking).
    <br><br>
    You will need to enchant the orb. You can make fire orbs, earth orbs, water orbs and air orbs. Take an orb to a magic obelisk (either the obelisk of air, the obelisk of earth, the obelisk of water or the obelisk of fire) and cast the appropriate orb enchantment spell on the obelisk. This requires a high magic level (see magic guide). The obelisks are not in easily accesible areas.
    <br><br>
    Then buy a battlestaff from a staff shop on a members server. Use the battlestaff with a charged orb to make an elemental battlestaff.
    <br><br>
    The crafting levels needed to attach the orbs to the staffs are shown in the table at the top of this page.
    <br><br>
    <h3>Crafting Guild</h3>
    The crafting Guild can be entered by players who have a crafting level of at least 40 and who are wearing a brown apron. It is located west of Port Sarim and north of Rimmington.
    <br><br>
    Inside the guild players will find a number of things to help them craft, including a pottery oven, potter's wheels, spinning wheels, a sink, a number of gold and silver rocks, as well as a tanner.
</p>
HTML; }