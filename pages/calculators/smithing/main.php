<?php
function getPageTitle() { return 'Smithing'; }
function getPageMetaIcon() { return 'img/skillicons/smithing.webp'; }
function onBodyLoad() { return 'runCalc()'; }
function getCalcContent() { return <<<HTML
<h2>Smithing Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username</label>
        <input type="text" id="username">
        <button onclick="fetchXP(14)">Fetch XP</button>
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
        <button onclick="setMode('smelting')">Smelting</button>
        <button onclick="setMode('smithing')">Smithing</button>
        <button onclick="setMode('smelting_smithing')">Smelting & Smithing</button>
    </div>
    <br>
    
    <div class="input-group justify-center" id="metalSelection" style="display: none;">
        <label for="metalType">Select Metal:</label>
        <select id="metalType" onchange="runCalc()">
            <option value="bronze">Bronze</option>
            <option value="iron">Iron</option>
            <option value="steel">Steel</option>
            <option value="mithril">Mithril</option>
            <option value="adamant">Adamant</option>
            <option value="rune">Rune</option>
        </select>
    </div>
    
    <table id="resultsTable" class="table">
        <thead>
            <tr>
                <th>Level</th>
                <th>Item</th>
                <th>XP per Smelt</th>
                <th>Total Bars</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
HTML.getJS('js/calculators/smithing.js'); }