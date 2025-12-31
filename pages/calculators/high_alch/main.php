<?php
function getPageTitle() { return 'High Alch'; }
function getPageMetaIcon() { return 'img/skillicons/magic.webp'; }
function getCalcContent() { return <<<HTML
<h2>High Alchemy Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Item Search:</label>
        <input type="text" id="itemSearch" placeholder="Search item...">
        <div id="searchResults"></div>
    </div>
    <div class="input-group">
        <label>Quantity:</label>
        <input type="number" id="quantity" min="1" max="2147483647" value="1"><br>
    </div>
    <div class="input-group">
        <label title="Enter the value of an item">Item Value:</label>
        <input type="number" id="itemValue" min="0" max="2147483647" value="0"><br>
    </div>
    <div class="input-group">
        <label title="Enter the high alchemy value of an item">High Alch Value:</label>
        <input type="number" id="haValue" min="0" max="2147483647" value="0"><br>
    </div>
    <div class="input-group">
        <label title="If you're using your own runes, enter 0">Nature Rune Price:</label>
        <input type="number" id="natureRunePrice" min="0" max="2147483647" value="0"><br>
    </div>
    <div class="input-group justify-center">
        <button onclick="runCalc()">Calculate!</button>
    </div>
    <hr>
    <h3>Total Profit: <span id="totalProfit" class="gold-text"></span></h3>
    <h3>Profit from Alch: <span id="profitFromAlch" class="green-text"></span></h3>
    <h3>Cost of Nature Runes: <span id="costOfNatures" class="red-text"></span></h3>
    <h3>Total Magic XP: <span id="totalMagicXP" class="gold-text"></span></h3>
</div>
HTML.getJS('js/calculators/high_alch.js'); }