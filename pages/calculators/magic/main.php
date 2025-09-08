<?php
function getPageTitle() { return 'Magic'; }
function getPageMetaIcon() { return 'img/skillicons/magic.webp'; }
function onBodyLoad() { return 'runCalc()'; }
function getCalcContent() { return <<<HTML
<h2>Magic Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username</label>
        <input type="text" id="username">
        <button onclick="fetchXP(7)">Fetch XP</button>
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
    <button onclick="setMode('combat')">Combat Spells</button>
    <button onclick="setMode('noncombat')">Non-Combat Spells</button>
    <br><br>
    <table id="resultsTable" class="table" width="100%">
        <thead>
            <tr>
                <th>Level</th>
                <th>Spell Type</th>
                <th>XP per Cast</th>
                <th>Casts Needed</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
HTML.getJavaScriptVersion('js/calculators/magic.js'); }