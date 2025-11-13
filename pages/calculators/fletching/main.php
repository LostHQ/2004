<?php
function getPageTitle() { return 'Fletching'; }
function getPageMetaIcon() { return 'img/skillicons/fletching.webp'; }
function onBodyLoad() { return 'runCalc()'; }
function getCalcContent() { return <<<HTML
<h2>Fletching Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username</label>
        <input type="text" id="username">
        <button onclick="fetchXP(10)">Fetch XP</button>
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

    <button onclick="setMode('complete')">Cut & String</button>
    <button onclick="setMode('unstrung')">Cut Only</button>
    <button onclick="setMode('stringing')">String Only</button>
    <button onclick="setMode('arrows')">Arrows/Bolts/Darts</button>
    <br><br>
    <div class="input-group" id="arrowSelection" style="display: none">
        <label for="arrowType">
            <span class="tooltip">
                Complete/Incomplete:
                <span class="tooltip-text">
                "Complete" includes all steps of fletching (e.g., cutting shafts, feathering, and adding heads).<br>"Incomplete" assumes materials are partly prepared and XP is only for the current step.
                </span>
            </span>
        </label>
        <select id="arrowType" onchange="runCalc()">
            <option value="completeArrows">Complete</option>
            <option value="incompleteArrows">Incomplete</option>
        </select>
    </div>
    <table id="resultsTable" class="table">
        <thead>
            <tr>
                <th>Level</th>
                <th>Item</th>
                <th>XP per Action</th>
                <th>Amount Needed</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
HTML.getJavaScriptVersion('js/calculators/fletching.js'); }