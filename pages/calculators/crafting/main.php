<?php
function getPageTitle() { return 'Crafting'; }
function getPageMetaIcon() { return 'img/skillicons/crafting.webp'; }
function onBodyLoad() { return 'runCalc()'; }
function getCalcContent() { return <<<HTML
<h2>Crafting Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username</label>
        <input type="text" id="username">
        <button onclick="fetchXP(13)">Fetch XP</button>
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
        <button onclick="setMode('needle_thread')">Needle & Thread</button>
        <button onclick="setMode('jewellery')">Jewellery</button>
        <button onclick="setMode('pottery_glass')">Pottery/Glass</button>
        <button onclick="setMode('spinning')">Spinning</button>
    </div>
    <br>
    <table id="resultsTable" class="table">
        <thead>
            <tr>
                <th>Level</th>
                <th>Item</th>
                <th>Exp per Item</th>
                <th>Total Needed</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
HTML.getJS('js/calculators/crafting.js'); }