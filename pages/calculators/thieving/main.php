<?php
function getPageTitle() { return 'Thieving'; }
function getPageMetaIcon() { return 'img/skillicons/thieving.webp'; }
function onBodyLoad() { return 'runCalc()'; }
function getCalcContent() { return <<<HTML
<h2>Thieving Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username</label>
        <input type="text" id="username">
        <button onclick="fetchXP(18)">Fetch XP</button>
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
    <button onclick="setMode('npcs')">NPCs</button>
    <button onclick="setMode('stalls')">Stalls</button>
    <button onclick="setMode('chests')">Chests</button>
    <button onclick="setMode('pickabledoors')">Doors</button>
    <br><br>
    <table id="resultsTable" class="table">
        <thead>
            <tr>
                <th>Level</th>
                <th>Source</th>
                <th>XP per Action</th>
                <th>Actions Needed</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
HTML.getJavaScriptVersion('js/calculators/thieving.js'); }