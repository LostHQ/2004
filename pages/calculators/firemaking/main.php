<?php
function getPageTitle() { return 'Firemaking'; }
function getPageMetaIcon() { return 'img/skillicons/firemaking.webp'; }
function onBodyLoad() { return 'runCalc()'; }
function getCalcContent() { return <<<HTML
<h2>Firemaking Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username</label>
        <input type="text" id="username">
        <button onclick="fetchXP(12)">Fetch XP</button>
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
    <button onclick="setMode('logs')">Normal Logs</button>
    <button onclick="setMode('pyre')">Pyre Logs</button>
    <br><br>
    <div class="input-group" id="pyreSelection" style="display: none">
        <label for="completeIncomplete">
            <span class="tooltip">
                Oiling/Burning:
                <span class="tooltip-text">
                "Oil + Burn" includes all steps of pyre logs (i.e. oiling the log and then burning them).<br>"Oiling" means oiling the logs without burning them.<br>"Already Oiled" means burning logs that are already oiled.
                </span>
            </span>
        </label>
        <select id="pyreType" onchange="runCalc()">
            <option value="oilBurn">Oil + Burn</option>
            <option value="oil">Oiling</option>
            <option value="burn">Already Oiled</option>
        </select>
    </div>

    <table id="resultsTable" class="table">
        <thead>
            <tr>
                <th>Level</th>
                <th>Log Type</th>
                <th>XP per Log</th>
                <th>Actions Needed</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
HTML.getJS('js/calculators/firemaking.js'); }