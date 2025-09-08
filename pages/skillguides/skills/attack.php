<?php
function getSkillContent($skill) { return <<<HTML
<h2>$skill Skill Guide</h2>
<p>
    Attack level dictates how often you hit an enemy. In short, the higher your attack level, the less 0's you hit.
    <br><br>
    Attack level also dictates what weapons a player can wield. The higher your attack level, the stronger weapons you have the ability to wield.
    <table cellpadding="1" cellspacing="0" class="table">
        <tbody><tr>
            <th>Level</th>
            <th>Metal</th>
        </tr>
        <tr>
            <td>1</td>
            <td><div class="centered-content"><canvas data-itemname="bronze_mace"></canvas>Bronze</div></td>
        </tr>
        <tr>
            <td>1</td>
            <td><div class="centered-content"><canvas data-itemname="iron_mace"></canvas>Iron</div></td>
        </tr>
        <tr>
            <td>5</td>
            <td><div class="centered-content"><canvas data-itemname="steel_mace"></canvas>Steel</div></td>
        </tr>
        <tr>
            <td>10</td>
            <td><div class="centered-content"><canvas data-itemname="black_mace"></canvas>Black</div></td>
        </tr>
        <tr>
            <td>20</td>
            <td><div class="centered-content"><canvas data-itemname="mithril_mace"></canvas>Mithril</div></td>
        </tr>
        <tr>
            <td>30</td>
            <td><div class="centered-content"><canvas data-itemname="adamant_mace"></canvas>Adamant</div></td>
        </tr>
        <tr>
            <td>40</td>
            <td><div class="centered-content"><canvas data-itemname="rune_mace"></canvas>Rune</div></td>
        </tr>
        <tr>
            <td>60</td>
            <td><div class="centered-content"><canvas data-itemname="dragon_mace"></canvas>Dragon</div></td>
        </tr></tbody>
    </table>
    <br><br>
    To advance your Attack level, you must fight with the style Accurate. When fighting in Accurate mode, you will be given 4 experience for every hit you deal to the enemy.
    <br><br>
    Weapons are what you will use in the game to attack your enemies. Certain Attack levels are required to wield the different kinds of weapons. To see the stats of individual weapons, please use the <a href="?p=itemdb">Items DB</a>.
</p>
HTML; }