<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    Woodcutting is a skill used to cut logs from trees. These logs can be used in <a href="?p=skillguides&skill=fletching">fletching</a> and <a href="?p=skillguides&skill=firemaking">firemaking</a>.
    <br>
    <table>
        <tr>
            <td>
                To chop down a tree, just left click on a tree to start chopping. If you have an axe in your inventory and sufficient woodcutting level, you will attempt to chop down the tree.
                <br>
                More powerful axes will increase your chance of cutting down the tree.
                <br><br>
                <div class="centered-content">This symbol indicates the location of the rarer trees on your maps:&nbsp;<img src="img/skillguides/woodcutting/rare_trees.gif" alt="[image]"></div>
            </td>
            <td><img src="img/skillguides/woodcutting/woodcutting.gif" alt="[image]"></td>
        </tr>
    </table>
    <br>
    <h3>Trees</h3>
    There are several types of trees all over the RuneScape world, the table below shows the types of trees available and where to cut them.
    <br><br>
    <table class="table">
        <tr>
            <th>Tree</td>
            <th>Level required</td>
            <th>Common woodcutting locations</td>
        </tr>
        <tr>
            <td><canvas itemname="logs"></canvas><br>Tree</td>
            <td>1</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px;"><li>The area around Draynor bank<li>South of Seers bank</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="achey_tree_logs"></canvas><br>Achey tree</td>
            <td>1</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px;"><li>Feldip Hills</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="oak_logs"></canvas><br>Oak tree</td>
            <td>15</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px;"><li>Directly East of Draynor bank<li>South of Seers bank</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="willow_logs"></canvas><br>Willow tree</td>
            <td>30</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px;"><li>Directly Southwest of Draynor bank<li>North-west of Seers Bank</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="maple_logs"></canvas><br>Maple tree</td>
            <td>45</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px;"><li>North of Seers bank<li>South of Seers bank</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="yew_logs"></canvas><br>Yew tree</td>
            <td>60</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px;"><li>In the cemetery South of Seers bank<li>South of Edgeville bank</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="magic_logs"></canvas><br>Magic tree</td>
            <td>75</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px;"><li>South of the Sorceror's Tower<li>Gnome's Stronghold</ul></td>
        </tr>
    </table>
    <br>
    <h3>Axes</h3>
    Woodcutters need to be familiar with the tools of their trade. Below is a table that shows the types of woodcutting axes available. Axes can be obtained in either of the following ways:
    <br><br>
    <table class="table">
        <tr>
            <th>Axe</td>
            <th>Level required*</td>
            <th>Obtained From</td>
        </tr>
        <tr>
            <td><canvas itemname="bronze_axe" show-label="true"></canvas></td>
            <td>1</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Stuck in a tree stump in the chicken pen, south-east of the Lumbridge windmill.<li>Bought from Bob's axe shop in Lumbridge.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="iron_axe" show-label="true"></canvas></td>
            <td>1</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Bought from Bob's axe shop in Lumbridge.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="steel_axe" show-label="true"></canvas></td>
            <td>6</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Bought from Bob's axe shop in Lumbridge.<li>Dropped by the Tree Spirit random event.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="black_axe" show-label="true"></canvas></td>
            <td>6</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Dropped by Black Demons and the King Black Dragon.<li>Bought from other players.</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="mithril_axe" show-label="true"></canvas></td>
            <td>21</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Dropped by the Tree Spirit random event.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="adamant_axe" show-label="true"></canvas></td>
            <td>31</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Dropped by the Tree Spirit random event.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
        <tr>
            <td><canvas itemname="rune_axe" show-label="true"></canvas></td>
            <td>41</td>
            <td><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Dropped by the Tree Spirit random event.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
    </table>
    *A bug currently exists in-game that you can use any axe at any level!<br>
    The value noted above is what the requirement is supposed to be.
</p>
HTML; }