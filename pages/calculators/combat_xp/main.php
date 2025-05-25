<?php
function getPageTitle() { return 'Combat XP'; }
function getPageMetaIcon() { return 'img/skillicons/attack.webp'; }
function getExtraHeaderContent() { return
    '<link rel="stylesheet" href="css/calculators.css">
    <script src="js/calculators.js"></script>';
}
function getCalcContent() { return <<<HTML
<h2>Combat XP Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username:</label>
        <input type="text" id="username">
        <button onclick="fetchXP()">Fetch XP</button>
    </div>
    <div class="input-group">
        <label>NPC Search:</label>
        <input type="text" id="itemSearch" placeholder="Search NPC...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">
        <div id="searchResults" style="width:400px;"></div>
    </div>
    <div class="input-group">
        <label>Hitpoints of Monster:</label>
        <input type="number" id="monsterHP" min="1" value="1">
        <label>Number of Monsters:</label>
        <input type="number" id="numMonsters" min="1" value="1">
    </div>
    <div class="input-group">
        <label>Current Attack XP:</label>
        <input type="number" id="attackXP" min="0" value="0">
        <label>Current Strength XP:</label>
        <input type="number" id="strengthXP" min="0" value="0">
    </div>
    <div class="input-group">
        <label>Current Defence XP:</label>
        <input type="number" id="defenceXP" min="0" value="0">
        <label>Current Hitpoints XP:</label>
        <input type="number" id="hitpointsXP" min="1154" value="1154">
    </div>
    <div class="input-group">
        <label>Current Ranged XP:</label>
        <input type="number" id="rangedXP" min="0" value="0">
        <label>Current Prayer XP:</label>
        <input type="number" id="prayerXP" min="0" value="0">
    </div>
    <div class="input-group">
        <label>Attack Style:</label>
        <select id="attackStyle">
            <option value="accurate">Accurate</option>
            <option value="aggressive">Aggressive</option>
            <option value="defensive">Defensive</option>
            <option value="controlled">Controlled</option>
            <option value="rapid">Accurate/Rapid</option>
            <option value="longrange">Longrange</option>
        </select>

        <label>Bury Every Bone?</label>
        <select id="buryBones">
            <option value="no">No</option>
            <option value="yes">Yes</option>
        </select>
    </div>
    <div class="input-group justify-center">
        <button onclick="runCalc()">Calculate!</button>
    </div>
    <hr>
    <h2>Updated XP:</h2>
    <p id="newXP" class="gold-text"></p>
</div>
<script type="text/javascript" src="js/calculators/combat_xp.js"></script>
HTML; }