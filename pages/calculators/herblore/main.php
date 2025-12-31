<?php
function getPageTitle() { return 'Herblore'; }
function getPageMetaIcon() { return 'img/skillicons/herblore.webp'; }
function onBodyLoad() { return 'runCalc()'; }
function getCalcContent() { return <<<HTML
<h2>Herblore Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username</label>
        <input type="text" id="username">
        <button onclick="fetchXP(16)">Fetch XP</button>
    </div>
    <div class="input-group">
        <label>Current XP</label>
        <input type="number" id="currentXP" min="0" max="200000000" value="0">
    </div>
    <div class="input-group">
        <label>Goal Level</label>
        <input type="number" id="targetLevel" min="2" max="99" value="2">
        <label>Goal XP</label>
        <input type="number" id="targetXP" min="0" max="200000000" value="83">
    </div>
    <div class="progress-bar-root" id="progress-bar-root"></div>
    <hr>
    <div>
        <button onclick="setMode('potions')">Mixing Potions</button>
        <button onclick="setMode('cleaning_herbs')">Identifying Herbs</button>
        <button onclick="setMode('banked')">Banked XP</button>
    </div>
    <br>
    <div id="results"></div>
</div>
HTML.getJS('js/calculators/herblore.js'); }