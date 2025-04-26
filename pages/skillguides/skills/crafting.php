<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    <table class="calculators">
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
                <img src="https://oldschool.runescape.wiki/images/thumb/Spinning_wheel_%28Seers%27_Village%29.png/151px-Spinning_wheel_%28Seers%27_Village%29.png" width=32px><br>
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
                <canvas data-itemname="soft_clay" data-show-label="true"></canvas>
            </td>
            <td>
                <img src="https://oldschool.runescape.wiki/images/archive/20170727073604%21Potter%27s_Wheel.png" width=32px><br>
                Potter's wheel
            </td>
            <td><canvas data-itemname="unfired_pot" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas data-itemname="unfired_pot" data-show-label="true"></canvas></td>
            <td>
                <img src="https://oldschool.runescape.wiki/images/archive/20210830111523%21Pottery_Oven.png" width=32px><br>
                Pottery Oven
            </td>
            <td><canvas data-itemname="pot_empty" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>1</td>
            <td><canvas data-itemname="molten_glass" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="glassblowing_pipe" data-show-label="true"></canvas></td>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="gold_necklace" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>7</td>
            <td>
                <canvas data-itemname="soft_clay" data-show-label="true"></canvas>
            </td>
            <td>
                <img src="https://oldschool.runescape.wiki/images/archive/20170727073604%21Potter%27s_Wheel.png" width=32px><br>
                Potter's wheel
            </td>
            <td><canvas data-itemname="unfired_piedish" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>7</td>
            <td><canvas data-itemname="unfired_piedish" data-show-label="true"></canvas></td>
            <td>
                <img src="https://oldschool.runescape.wiki/images/archive/20210830111523%21Pottery_Oven.png" width=32px><br>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="gold_amulet" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>8</td>
            <td>
                <canvas data-itemname="soft_clay" data-show-label="true"></canvas>
            </td>
            <td>
                <img src="https://oldschool.runescape.wiki/images/archive/20170727073604%21Potter%27s_Wheel.png" width=32px><br>
                Potter's wheel
            </td>
            <td><canvas data-itemname="unfired_bowl" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>8</td>
            <td><canvas data-itemname="unfired_bowl" data-show-label="true"></canvas></td>
            <td>
                <img src="https://oldschool.runescape.wiki/images/archive/20210830111523%21Pottery_Oven.png" width=32px><br>
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
                <img src="https://oldschool.runescape.wiki/images/thumb/Spinning_wheel_%28Seers%27_Village%29.png/151px-Spinning_wheel_%28Seers%27_Village%29.png" width=32px><br>
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
                <canvas data-itemname="holy_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="unblessed_symbol" data-show-label="true"></canvas></td>
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
                <canvas data-itemname="unholy_mould" data-show-label="inline"></canvas>
                <div style="display: flex; align-items: center; gap: 6px; flex-direction: row; justify-content: center;">
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="unpowered_symbol" data-show-label="true"></canvas></td>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="sapphire_amulet" data-show-label="true"></canvas></td>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="emerald_ring" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>28</td>
            <td><canvas data-itemname="hardleather" data-show-label="true"></canvas></td>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="emerald_amulet" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>33</td>
            <td><canvas data-itemname="molten_glass" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="glassblowing_pipe" data-show-label="true"></canvas></td>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="ruby_necklace" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>41</td>
            <td>
                <canvas data-itemname="leather_body" data-show-label="inline"></canvas>
                <canvas data-itemname="steel_studs" data-show-label="inline"></canvas>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="diamond_ring" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>44</td>
            <td>
                <canvas data-itemname="leather_chaps" data-show-label="inline"></canvas>
                <canvas data-itemname="steel_studs" data-show-label="inline"></canvas>
            </td>
            <td>-</td>
            <td><canvas data-itemname="studded_chaps" data-show-label="true"></canvas></td>
        </tr>
        <tr>
            <td>46</td>
            <td><canvas data-itemname="molten_glass" data-show-label="true"></canvas></td>
            <td><canvas data-itemname="glassblowing_pipe" data-show-label="true"></canvas></td>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="ruby_amulet" data-show-label="true"></canvas></td>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
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
            <td><canvas data-itemname="dragonhide_vamb" data-show-label="true"></canvas></td>
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
            <td><canvas data-itemname="blue_dragonhide_vambraces" data-show-label="true"></canvas></td>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="diamond_amulet" data-show-label="true"></canvas></td>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
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
            <td><canvas data-itemname="red_dragonhide_vambraces" data-show-label="true"></canvas></td>
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
            <td><canvas data-itemname="black_dragonhide_vambraces" data-show-label="true"></canvas></td>
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
                    <img src="https://oldschool.runescape.wiki/images/thumb/Furnace.png/200px-Furnace.png" alt="Furnace" width=32px>
                    <div class="item-label" style="color: white;">Furnace</div>
                </div>
            </td>
            <td><canvas data-itemname="dragonstone_amulet" data-show-label="true"></canvas></td>
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
</p>
HTML; }