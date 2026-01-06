<?php
function getPageTitle() { return 'Combat XP'; }
function getPageMetaIcon() { return 'img/skillicons/attack.webp'; }
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
        <label>NPC HP:</label>
        <input type="number" id="npcHP" min="1" value="1">
        <label>Number of NPCs:</label>
        <input type="number" id="numNpcs" min="1" value="1">
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
            <option value="yes" selected>Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="input-group justify-center">
        <button onclick="runCalc()">Calculate!</button>
    </div>
    <hr>
    <div id="output"></div>
</div>
HTML.getJS('js/calculators/combat_xp.js'); }