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
            <td><canvas data-itemname="uncut_opal" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="chisel" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="opal" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas data-itemname="wool" data-show-label="true"></canvas></td>
            <td>
                <img src="img/skillguides/spinning_wheel.png" width=32px><br>
                Spinning Wheel
            </td>
            <td><canvas data-itemname="ball_of_wool" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas data-itemname="leather" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="leather_gloves" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <canvas data-itemname="softclay" data-show-label="true"></canvas>
            </td>
            <td>
                <img src="img/skillguides/potters_wheel.png" width=32px><br>
                Potter's wheel
            </td>
            <td><canvas data-itemname="pot_unfired" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas data-itemname="pot_unfired" data-show-label="true"></canvas></td>
            <td>
                <img src="img/skillguides/pottery_oven.png" width=32px><br>
                Pottery Oven
            </td>
            <td><canvas data-itemname="pot_empty" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas data-itemname="molten_glass" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="glassblowingpipe" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="beer_glass" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>5</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="true"></canvas>
            </td>
            <td>
                <canvas data-itemname="ring_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="gold_ring" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>6</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="true"></canvas>
            </td>
            <td>
                <canvas data-itemname="necklace_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="gold_necklace" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>7</td>
            <td>
                <canvas data-itemname="softclay" data-show-label="true"></canvas>
            </td>
            <td>
                <img src="img/skillguides/potters_wheel.png" width=32px><br>
                Potter's wheel
            </td>
            <td><canvas data-itemname="piedish_unfired" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>7</td>
            <td><canvas data-itemname="piedish_unfired" data-show-label="true"></canvas></td>
            <td>
                <img src="img/skillguides/pottery_oven.png" width=32px><br>
                Pottery Oven
            </td>
            <td><canvas data-itemname="piedish" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>7</td>
            <td><canvas data-itemname="leather" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="leather_boots" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>8</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="ball_of_wool" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="amulet_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="strung_gold_amulet" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>8</td>
            <td>
                <canvas data-itemname="softclay" data-show-label="true"></canvas>
            </td>
            <td>
                <img src="img/skillguides/potters_wheel.png" width=32px><br>
                Potter's wheel
            </td>
            <td><canvas data-itemname="bowl_unfired" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>8</td>
            <td><canvas data-itemname="bowl_unfired" data-show-label="true"></canvas></td>
            <td>
                <img src="img/skillguides/pottery_oven.png" width=32px><br>
                Pottery Oven
            </td>
            <td><canvas data-itemname="bowl_empty" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>9</td>
            <td><canvas data-itemname="leather" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="leather_cowl" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>10</td>
            <td><canvas data-itemname="flax" data-show-label="true"></canvas></td>
            <td>
                <img src="img/skillguides/spinning_wheel.png" width=32px><br>
                Spinning Wheel
            </td>
            <td><canvas data-itemname="bow_string" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>11</td>
            <td><canvas data-itemname="leather" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="leather_vambraces" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>13</td>
            <td><canvas data-itemname="uncut_jade" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="chisel" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="jade" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>14</td>
            <td><canvas data-itemname="leather" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="leather_body" data-show-label="true"></canvas></td>
        </tr>
        <!-- <tr>
            <td>15</td>
            <td><canvas data-itemname="chisel" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="snailshell1" data-show-label="true"></canvas></td>
        </tr> -->
        <tr>
            <td>16</td>
            <td>
                <canvas data-itemname="silver_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="ball_of_wool" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="holy_symbol_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="stringstar" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>16</td>
            <td><canvas data-itemname="uncut_red_topaz" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="chisel" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="red_topaz" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>17</td>
            <td>
                <canvas data-itemname="silver_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="ball_of_wool" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="unholy_symbol_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="stringsnake" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>18</td>
            <td><canvas data-itemname="leather" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="leather_chaps" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>20</td>
            <td><canvas data-itemname="uncut_sapphire" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="chisel" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="sapphire" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>20</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="sapphire" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="ring_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="sapphire_ring" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>22</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="sapphire" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="necklace_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="sapphire_necklace" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>24</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="sapphire" data-show-label="inline"></canvas>
                <canvas data-itemname="ball_of_wool" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="amulet_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="strung_sapphire_amulet" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>27</td>
            <td><canvas data-itemname="uncut_emerald" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="chisel" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="emerald" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>27</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="emerald" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="ring_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="emerald_ring" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>28</td>
            <td><canvas data-itemname="hard_leather" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="hardleather_body" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>29</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="emerald" data-show-label="inlinr"></canvas>
            </td>
            <td>
                <canvas data-itemname="necklace_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="emerald_necklace" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>31</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="emerald" data-show-label="inline"></canvas>
                <canvas data-itemname="ball_of_wool" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="amulet_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="strung_emerald_amulet" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>33</td>
            <td><canvas data-itemname="molten_glass" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="glassblowingpipe" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="vial_empty" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>34</td>
            <td><canvas data-itemname="uncut_ruby" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="chisel" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="ruby" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>34</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="ruby" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="ring_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="ruby_ring" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>38</td>
            <td><canvas data-itemname="leather" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="coif" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>40</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="ruby" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="necklace_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="ruby_necklace" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>41</td>
            <td>
                <canvas data-itemname="leather_body" data-show-label="inline"></canvas>
                <canvas data-itemname="studs" data-show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas data-itemname="studded_body" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>43</td>
            <td><canvas data-itemname="uncut_diamond" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="chisel" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="diamond" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>43</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="diamond" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="ring_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="diamond_ring" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>44</td>
            <td>
                <canvas data-itemname="leather_chaps" data-show-label="inline"></canvas>
                <canvas data-itemname="studs" data-show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas data-itemname="studded_chaps" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>46</td>
            <td><canvas data-itemname="molten_glass" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="glassblowingpipe" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="stafforb" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>50</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="ruby" data-show-label="inline"></canvas>
                <canvas data-itemname="ball_of_wool" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="amulet_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="strung_ruby_amulet" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>54</td>
            <td>
                <canvas data-itemname="water_orb" data-show-label="inline"></canvas>
                <canvas data-itemname="battlestaff" data-show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas data-itemname="water_battlestaff" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>55</td>
            <td><canvas data-itemname="uncut_dragonstone" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="chisel" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="dragonstone" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>55</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="dragonstone" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="ring_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="dragonstone_ring" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>56</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="diamond" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="necklace_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="diamond_necklace" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>57</td>
            <td><canvas data-itemname="dragon_leather" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="dragon_vambraces" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>58</td>
            <td>
                <canvas data-itemname="earth_orb" data-show-label="inline"></canvas>
                <canvas data-itemname="battlestaff" data-show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas data-itemname="earth_battlestaff" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>60</td>
            <td>
                <canvas data-itemname="dragon_leather"></canvas>
                <canvas data-itemname="dragon_leather" data-show-label="true"></canvas>
            </td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="dragonhide_chaps" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>62</td>
            <td>
                <canvas data-itemname="fire_orb" data-show-label="inline"></canvas>
                <canvas data-itemname="battlestaff" data-show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas data-itemname="fire_battlestaff" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>63</td>
            <td>
                <canvas data-itemname="dragon_leather"></canvas>
                <canvas data-itemname="dragon_leather"></canvas>
                <canvas data-itemname="dragon_leather" data-show-label="true"></canvas>
            </td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="dragonhide_body" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>66</td>
            <td>
                <canvas data-itemname="air_orb" data-show-label="inline"></canvas>
                <canvas data-itemname="battlestaff" data-show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas data-itemname="air_battlestaff" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>66</td>
            <td><canvas data-itemname="dragon_leather_blue" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="blue_dragon_vambraces" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>68</td>
            <td>
                <canvas data-itemname="dragon_leather_blue"></canvas>
                <canvas data-itemname="dragon_leather_blue" data-show-label="true"></canvas>
            </td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="blue_dragonhide_chaps" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>70</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="diamond" data-show-label="inline"></canvas>
                <canvas data-itemname="ball_of_wool" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="amulet_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="strung_diamond_amulet" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>71</td>
            <td>
                <canvas data-itemname="dragon_leather_blue"></canvas>
                <canvas data-itemname="dragon_leather_blue"></canvas>
                <canvas data-itemname="dragon_leather_blue" data-show-label="true"></canvas>
            </td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="blue_dragonhide_body" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>72</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="dragonstone" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="necklace_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="dragonstone_necklace" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>73</td>
            <td><canvas data-itemname="dragon_leather_red" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="red_dragon_vambraces" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>75</td>
            <td>
                <canvas data-itemname="dragon_leather_red"></canvas>
                <canvas data-itemname="dragon_leather_red" data-show-label="true"></canvas>
            </td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="red_dragonhide_chaps" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>77</td>
            <td>
                <canvas data-itemname="dragon_leather_red"></canvas>
                <canvas data-itemname="dragon_leather_red"></canvas>
                <canvas data-itemname="dragon_leather_red" data-show-label="true"></canvas>
            </td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="red_dragonhide_body" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>79</td>
            <td><canvas data-itemname="dragon_leather_black" data-show-label="true"></canvas></td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="black_dragon_vambraces" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>80</td>
            <td>
                <canvas data-itemname="gold_bar" data-show-label="inline"></canvas>
                <canvas data-itemname="dragonstone" data-show-label="inline"></canvas>
                <canvas data-itemname="ball_of_wool" data-show-label="inline"></canvas>
            </td>
            <td>
                <canvas data-itemname="amulet_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="img/skillguides/furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="strung_dragonstone_amulet" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>82</td>
            <td>
                <canvas data-itemname="dragon_leather_black"></canvas>
                <canvas data-itemname="dragon_leather_black" data-show-label="true"></canvas>
            </td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="black_dragonhide_chaps" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>84</td>
            <td>
                <canvas data-itemname="dragon_leather_black"></canvas>
                <canvas data-itemname="dragon_leather_black"></canvas>
                <canvas data-itemname="dragon_leather_black" data-show-label="true"></canvas>
            </td>
            <td>
                <canvas data-itemname="needle" data-show-label="inline"></canvas>
                <canvas data-itemname="thread" data-show-label="inline"></canvas>
            </td>
            <td><canvas data-itemname="black_dragonhide_body" data-show-label="true"></canvas></td>
        </tr>
    </table>
    <h3>Pottery</h3>
    Bowls, pots and pie dishes can all be made by crafting. Clay is obtained by <a href="?p=skillguides&skill=mining" class="c">mining</a>.<br>To make the clay workable it needs to be softened first. Use a jug of water with the clay and it will be turned into soft clay. Take the clay to a potter's wheel. There is one in the barbarian village.
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
    <h3>Gems</h3>
    Gems are rare objects you will occasionally find, they can be made more valuable by cutting them. Once a gem is cut it can also be used when you are making gold jewelry.
    <br><br>
    You will need to buy a chisel from a general store or a crafting shop. Select the chisel from your inventory and then the gem you wish to cut. If you find your crafting level is not high enough to cut the gem you may want to make a bit more pottery or leather to raise your crafting level first.
    <h3>Holy and Unholy symbols</h3>
    You need a crafting level of 16 to craft silver bars. To make silver bars see the <a href="?p=skillguides&skill=mining" class="c">mining</a> and <a href="?p=skillguides&skill=smithing" class="c">smithing</a> guides.
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
            <td>To make gold bars see the <a href="?p=skillguides&skill=mining" class="c">mining</a> and <a href="?p=skillguides&skill=smithing" class="c">smithing</a> guides. You can make amulets, necklaces, and rings from gold bars. Buy the appropriate moulds from a crafting shop.<br><br>Use a gold bar on a furnace and select the object you would like to make.</td>
        </tr>
    </table>
    <br>
    Putting gems in your gold jewelry can increase the smithing level required quite a lot, but it also increases the value of what you are making.
    <br><br>
    All the gold jewelry can be sold for a good price, but amulets and rings with jewels in them can also be <a href="?p=skillguides&skill=magic" class="c">enchanted at a high enough magic level</a> to give various bonuses. First of all your amulet will need a string, this is made in the same way as the string for the holy amulets of Saradomin. Then it can be enchanted using the magic skill.
    <h3>Glassmaking</h3>
    <table>
        <tr>
            <td>To make some glass, you will first need to get some seaweed. This can be obtained by big net fishing, or found on Entrana Island. Heat the seaweed to get soda ash.<br><br>Then use a bucket on a sandpit, to get a bucket of sand. With both soda ash and sand in your inventory, you can then use a furnace on either one to make molten glass.</td>
            <td><img src="img/skillguides/crafting/sandpit.gif"></td>
        </tr>
    </table>
    <br>
    Use this molten glass with a glass-blowing pipe, which can also be found on Entrana. You will then be asked what object you would like to make. If you want to make several of the same object, simply right-click and select the number you wish to produce.
    <h3>Bowstrings</h3>
    You can make bowstrings by using flax on a spinning wheel. If you want to make several of the same object, simply right-click and select the number you wish to produce.
    <br><br>
    Making bow strings gives a good amount of crafting experience and the bowstrings are useful for making bows (see the <a href="?p=skillguides&skill=fletching" class="c">fletching guide</a>.)
    <h3>Battlestaffs</h3>
    First get an unpowered orb (see glassmaking).
    <br><br>
    You will need to enchant the orb. You can make fire orbs, earth orbs, water orbs and air orbs. Take an orb to a magic obelisk (either the obelisk of air, the obelisk of earth, the obelisk of water or the obelisk of fire) and cast the appropriate orb enchantment spell on the obelisk. This requires a high magic level (see magic guide). The obelisks are not in easily accesible areas.
    <br><br>
    Then buy a battlestaff from a staff shop on a members server. Use the battlestaff with a charged orb to make an elemental battlestaff.
    <br><br>
    The crafting levels needed to attach the orbs to the staffs are shown in the table at the top of this page.
    <h3>Crafting Guild</h3>
    The crafting Guild can be entered by players who have a crafting level of at least 40 and who are wearing a brown apron. It is located west of Port Sarim and north of Rimmington.
    <br><br>
    Inside the guild players will find a number of things to help them craft, including a pottery oven, potter's wheels, spinning wheels, a sink, a number of gold and silver rocks, as well as a tanner.
</p>
HTML; }