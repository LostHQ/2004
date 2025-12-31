<?php
function getPageTitle() { return 'Combat Level'; }
function getPageMetaIcon() { return 'img/skillicons/attack.webp'; }
function getCalcContent() { return <<<HTML
<h2>Combat Level Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username:</label>
        <input type="text" id="username">
        <button onclick="fetchCombatLevels()">Fetch Levels</button>
    </div>
    <div class="input-group">
        <label>Attack:</label>
        <input type="number" id="attack" min="1" max="99" value="1">
        <label>Strength:</label>
        <input type="number" id="strength" min="1" max="99" value="1">
    </div>
    <div class="input-group">
        <label>Defence:</label>
        <input type="number" id="defence" min="1" max="99" value="1">
        <label>Hitpoints:</label>
        <input type="number" id="hitpoints" min="10" max="99" value="10">
    </div>
    <div class="input-group">
        <label>Ranged:</label>
        <input type="number" id="ranged" min="1" max="99" value="1">
        <label>Magic:</label>
        <input type="number" id="magic" min="1" max="99" value="1">
    </div>
    <div class="input-group">
        <label>Prayer:</label>
        <input type="number" id="prayer" min="1" max="99" value="1">
    </div>
    <hr>
    <h2>Combat Level: <span id="combatLevel" class="gold-text">3</span></h2>
    <div id="levelUpInfo" class="gold-text"></div>
    <br>
</div>
HTML.getJS('js/calculators/combat_level.js'); }