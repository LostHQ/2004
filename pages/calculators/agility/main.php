<?php
function getPageTitle() { return 'Agility'; }
function getPageMetaIcon() { return 'img/skillicons/agility.webp'; }
function onBodyLoad() { return 'runCalc()'; }
function getCalcContent() { return <<<HTML
<h2>Agility Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username</label>
        <input type="text" id="username">
        <button onclick="fetchXP(17)">Fetch XP</button>
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
    <button onclick="setMode('courses')">Courses</button>
    <button onclick="setMode('shortcuts')">Shortcuts</button>
    <button onclick="setMode('arena')">Agility Arena</button>
    <br><br>
    <table id="resultsTable" class="table" width="100%">
        <thead>
            <tr>
                <th>Level</th>
                <th>Shortcut/Course</th>
                <th>XP per Lap</th>
                <th>Actions Needed</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <div id="arenaMapsContainer" style="display:none;"></div>
</div>
HTML.getJS('js/calculators/agility.js'); }