<?php
function getPageTitle() { return 'Shades of Mort\'ton'; }
function getPageMetaIcon() { return 'img/skillicons/prayer.webp'; }
function onBodyLoad() { return 'runCalc()'; }
function getCalcContent() { return <<<HTML
<h2>Shades of Mort'ton Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username</label>
        <input type="text" id="username">
        <button onclick="fetchShadesXP()">Fetch XP</button>
    </div>
    <h3>Firemaking</h3>
    <div class="input-group">
        <label>Current Firemaking XP</label>
        <input type="number" id="currentFMXP" min="0" max="200000000" value="0">
    </div>
    <div class="input-group">
        <label>Goal Level</label>
        <input type="number" id="targetFMLevel" min="2" max="99" value="2" onchange="updateFMGoalXP()">
        <label>Goal XP</label>
        <input type="number" id="targetFMXP" min="0" max="200000000" value="83">
    </div>
    <br><br>
    <h3>Prayer</h3>
    <div class="input-group">
        <label>Current Prayer XP</label>
        <input type="number" id="currentPRXP" min="0" max="200000000" value="0">
    </div>
    <div class="input-group">
        <label>Goal Level</label>
        <input type="number" id="targetPRLevel" min="2" max="99" value="2" onchange="updatePRGoalXP()">
        <label>Goal XP</label>
        <input type="number" id="targetPRXP" min="0" max="200000000" value="83">
    </div>
    <hr>
    <div>
        <button onclick="setMode('oil')">Oiling Logs</button>
        <button onclick="setMode('remains')">Burn Remains</button>
        <button onclick="setMode('banked')">Banked XP</button>
    </div>
    <br><br>
        <div class="input-group" id="remainsSelection" style="display: none">
        <label for="remainsType">
            <span class="tooltip">
                Remains:
                <span class="tooltip-text">
                This is for the Shades of Mort'ton mini game.<br>Prayer XP is determined by both the type of logs used and the remains burnt.
                </span>
            </span>
        </label>
        <select id="remainsType" onchange="runCalc()">
            <option value="shade_bones1">Loar Remains</option>
            <option value="shade_bones2">Phrin Remains</option>
            <option value="shade_bones3">Riyl Remains</option>
            <option value="shade_bones4">Asyn Remains</option>
            <option value="shade_bones5">Fiyr Remains</option>
        </select>
    </div>
    <br>
    <div id="results"></div>
</div>
HTML.getJS('js/calculators/shades.js'); }