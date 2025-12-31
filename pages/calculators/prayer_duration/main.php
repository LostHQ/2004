<?php
function getPageTitle() { return 'Prayer Duration'; }
function getPageMetaIcon() { return 'img/skillicons/prayer.webp'; }
function getCalcContent() { return <<<HTML
<h2>Prayer Duration Calculator</h2>
<div class="container">
    <div class="input-group">
        <label>Username:</label>
        <input type="text" id="username">
        <button onclick="fetchPrayerLevel()">Fetch Level</button>
    </div>
    <div class="input-group">
        <label>Prayer Level:</label>
        <input type="number" id="prayerLevel" min="1" max="99" value="1">
    </div>
    <div id="monasteryBonus">
        <div class="input-group">
            <label for="monasteryAltar">Monastery Altar:</label>
            <select id="monasteryAltar" onchange="runCalc()">
                <option value="0">No</option>
                <option value="2">Yes (+2 to prayer)</option>
            </select>
        </div>
    </div>
    <h3>Prayer Bonus</h3>
    <div class="input-group">
        <label>Necklace:</label>
        <select id="necklace">
            <option value="0">None</option>
            <option value="1">Amulet of Power (+1)</option>
            <option value="3">Amulet of Glory (+3)</option>
            <option value="8">Holy Symbol (+8)</option>
            <option value="8">Unholy Symbol (+8)</option>
        </select>
        <label>Weapon:</label>
        <select id="weapon">
            <option value="0">None</option>
            <option value="1">Bronze Mace (+1)</option>
            <option value="1">Iron Mace (+1)</option>
            <option value="2">Steel Mace (+2)</option>
            <option value="2">Black Mace (+2)</option>
            <option value="3">Mithril Mace (+3)</option>
            <option value="3">Adamant Mace (+3)</option>
            <option value="4">Rune Mace (+4)</option>
            <option value="5">Dragon Mace (+5)</option>
        </select>
    </div>
    <div class="input-group">
        <label>Body:</label>
        <select id="body">
            <option value="0">None</option>
            <option value="3">Priest Gown (+3)</option>
            <option value="3">Zamorak Monk Top (+3)</option>
            <option value="4">Druid's Robe Top (+4)</option>
            <option value="5">Shade Robe Top (+5)</option>
            <option value="6">Monk's Robe Top (+6)</option>
        </select>
        <label>Legs:</label>
        <select id="legs">
            <option value="0">None</option>
            <option value="3">Priest Gown (+3)</option>
            <option value="3">Zamorak Monk Bottom (+3)</option>
            <option value="4">Druid's Robe (+4)</option>
            <option value="4">Shade Robe (+4)</option>
            <option value="5">Monk's Robe Bottom (+5)</option>
        </select>
    </div>
    <div class="input-group">
        <label>Prayer Bonus:</label>
        <input type="number" id="prayerBonus" min="0" max="24" value="0">
    </div>
    <h3>Click on the prayers you want to activate:</h3>
    <div class="prayer-grid-container">
        <div class="prayer-grid"></div>
    </div>
    <br><br>
    <div class="input-group justify-center">
        <button onclick="runCalc()">Calculate!</button>
    </div>
    <hr>
    <h2>Prayer will last: <span id="prayerDuration" class="gold-text"></span></h2>
    <!-- Special message for Rapid Heal -->
    <div id="rapidHealDiv" style="display: none">
        <h2>Rapid Heal HP restored: <span id="rapidHealText" class="gold-text"></span></h2>
        <h2>Total HP restored: <span id="totalHpRestoredText" class="gold-text"></span></h2>
    </div>
</div>
HTML.getJS('js/calculators/prayer_duration.js'); }