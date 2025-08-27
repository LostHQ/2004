<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    <h3>Woodcutting - The Basics</h3>
    <b>Introduction</b><br>
    <br>One of the simplest ways in which people make a living in RuneScape, is through the woodcutters trade. <br><br>The woodcutting skill can benefit you in many ways, many of which involves using your logs for Firemaking, or members can use them to fletch items.<br><br><img style="display: inline;display: block; margin: 0 auto 0 auto;" src="img/skillguides/woodcuting_main.jpg" alt="[image]"><br><br>To chop down a tree, just click on a tree and select chop down tree. If you have an axe in your inventory and sufficient woodcutting level, you will attempt to chop down the tree. Although woodcutting is not a member skill, some items that can be cut using this skill require member status.
    <br><br>
    The symbol below indicates the location of the rarer trees on your maps:
    <br><br>
    <img style="display: inline;display: block; margin: 0 auto 0 auto;" src="img/skillguides/rare_trees.gif" alt="[image]">
    <hr>
    <h3>Trees</h3>
    There are several types of trees all over the RuneScape world, the table below shows the types of trees available and where to cut them.
    <br><br>
    <table class="calculators">
        <tr class="row_a">
            <th>Tree</td>
            <th>Level required</td>
            <th>Common woodcutting locations</td>
        </tr>
        <tr class="row_b">
            <td><canvas data-itemname="logs"></canvas><br>Tree</td>
            <td>1</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px;"><li>The area around Draynor bank.<li>South of Seers bank.</ul></td>
        </tr>
        <tr class="row_a">
            <td><canvas data-itemname="oak_logs"></canvas><br>Oak tree</td>
            <td>15</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px;"><li>Directly East of Draynor bank.<li>South of Seers bank.</ul></td>
        </tr>
        <tr class="row_b">
            <td><canvas data-itemname="willow_logs"></canvas><br>Willow tree</td>
            <td>30</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px;"><li>Directly Southwest of Draynor bank.<li>North-west of Seers Bank.</ul></td>
        </tr>
        <tr class="row_a">
            <td><canvas data-itemname="maple_logs"></canvas><br>Maple tree</td>
            <td>45</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px;"><li>North of Seers bank.<li>South of Seers bank.</ul></td>
        </tr>
        <tr class="row_b">
            <td><canvas data-itemname="yew_logs"></canvas><br>Yew tree</td>
            <td>60</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px;"><li>In the cemetery South of Seers bank.<li>South of Edgeville bank.</ul></td>
        </tr>
        <tr class="row_a">
            <td><canvas data-itemname="magic_logs"></canvas><br>Magic tree</td>
            <td>75</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px;"><li>South of the Sorceror's Tower.<li>Gnome's Stronghold.</ul></td>
        </tr>
    </table>
    <hr>
    <h3>Axes</h3>
    Woodcutters need to be familiar with the tools of their trade. Below is a table that shows the types of woodcutting axes available. Axes can be obtained in either of the following ways:
    <br><br>
    *A bug currently exists in-game that you can use any axe at any level!<br>
    The value noted below is what the requirement is supposed to be.<br>
    <table class="calculators">
        <tr class="row_a">
            <th>Axe</td>
            <th>Level required*</td>
            <th>Obtained From</td>
        </tr>
        <tr class="row_b">
            <td><canvas data-itemname="bronze_axe" data-show-label="true"></canvas></td>
            <td>1</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Stuck in a tree stump in the chicken pen, south-east of the Lumbridge windmill.<li>Bought from Bob's axe shop in Lumbridge.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
        <tr class="row_a">
            <td><canvas data-itemname="iron_axe" data-show-label="true"></canvas></td>
            <td>1</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Bought from Bob's axe shop in Lumbridge.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
        <tr class="row_b">
            <td><canvas data-itemname="steel_axe" data-show-label="true"></canvas></td>
            <td>6</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Bought from Bob's axe shop in Lumbridge.<li>Dropped by the Tree Spirit random event.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
        <tr class="row_a">
            <td><canvas data-itemname="black_axe" data-show-label="true"></canvas></td>
            <td>6</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Dropped by Black Demons and the King Black Dragon.<li>Bought from other players.</ul></td>
        </tr>
        <tr class="row_b">
            <td><canvas data-itemname="mithril_axe" data-show-label="true"></canvas></td>
            <td>21</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Dropped by the Tree Spirit random event.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
        <tr class="row_a">
            <td><canvas data-itemname="adamant_axe" data-show-label="true"></canvas></td>
            <td>31</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Dropped by the Tree Spirit random event.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
        <tr class="row_b">
            <td><canvas data-itemname="rune_axe" data-show-label="true"></canvas></td>
            <td>41</td>
            <td style="text-align: left;"><ul style="margin-top: 0px; margin-bottom: 0px; "><li>Dropped by the Tree Spirit random event.<li>You can make one using the Smithing skill.</ul></td>
        </tr>
    </table>
</p>
HTML; }