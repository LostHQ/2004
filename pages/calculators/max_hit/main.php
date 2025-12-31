<?php
function getPageTitle() { return 'Max Hit'; }
function getPageMetaIcon() { return 'img/skillicons/attack.webp'; }
function onBodyLoad() { return 'switchCombat(\'melee\'); runCalc();'; }
function getCalcContent() { return <<<HTML
<h2>Max Hit Calculator</h2>
<div>
    <button onclick="switchCombat('melee'); runCalc()">Melee</button>
    <button onclick="switchCombat('ranged'); runCalc()">Ranged</button>
    <button onclick="switchCombat('magic'); runCalc()">Magic</button>
</div>
<div class="container">
    <div id="meleeOptions">
        <h2>Melee</h2>
        <div class="input-group">  
            <label>Strength Level:</label>
            <input type="number" id="strengthLevel" min="1" max="99" value="1">
            <label>Strength Bonus:</label>
            <input type="number" id="strengthBonus" min="0" max="99" value="0"><br>
        </div>
        <div class="input-group">
            <label>Fighting Style:</label>
            <select id="meleeFightingStyle">
                <option value="0">Accurate / Defensive (+0)</option>
                <option value="1">Controlled (+1)</option>
                <option value="3">Aggressive (+3)</option>
            </select>
        </div>
        <div class="input-group">
            <label>Potion:</label>
            <select id="meleePotion">
                <option value="0,0">None</option>
                <option value="3,0.10">Strength (3 + 10%)</option>
                <option value="5,0.15">Super Strength (5 + 15%)</option>
            </select>
        </div>
        <div class="input-group">
            <label>Prayer:</label>
            <select id="meleePrayer">
                <option value="1">None</option>
                <option value="1.05">Burst of Strength (5%)</option>
                <option value="1.1">Superhuman Strength (10%)</option>
                <option value="1.15">Ultimate Strength (15%)</option>
            </select>
        </div>
        <h3>Equipment</h3>
        <div class="input-group">
            <label>Weapon:</label>
            <select id="meleeWeaponBonus">
                <option value="0">None</option>
                
                <!-- Bronze -->
                <option value="3">Bronze Dagger (+3)</option>
                <option value="5">Bronze Mace (+5)</option>
                <option value="5">Bronze Sword (+5)</option>
                <option value="6">Bronze Scimitar (+6)</option>
                <option value="7">Bronze Longsword (+7)</option>
                <option value="8">Bronze Warhammer (+8)</option>
                <option value="9">Bronze Battleaxe (+9)</option>
                <option value="10">Bronze 2h Sword (+10)</option>

                <!-- Iron -->
                <option value="4">Iron Dagger (+4)</option>
                <option value="7">Iron Mace (+7)</option>
                <option value="7">Iron Sword (+7)</option>
                <option value="9">Iron Scimitar (+9)</option>
                <option value="10">Iron Longsword (+10)</option>
                <option value="11">Iron Warhammer (+11)</option>
                <option value="13">Iron Battleaxe (+13)</option>
                <option value="14">Iron 2h Sword (+14)</option>

                <!-- Steel -->
                <option value="7">Steel Dagger (+7)</option>
                <option value="11">Steel Mace (+11)</option>
                <option value="12">Steel Sword (+12)</option>
                <option value="14">Steel Scimitar (+14)</option>
                <option value="16">Steel Longsword (+16)</option>
                <option value="16">Steel Warhammer (+16)</option>
                <option value="20">Steel Battleaxe (+20)</option>
                <option value="22">Steel 2h Sword (+22)</option>

                <!-- Black -->
                <option value="7">Black Dagger (+7)</option>
                <option value="12">Black Sword (+12)</option>
                <option value="13">Black Mace (+13)</option>
                <option value="14">Black Scimitar (+14)</option>
                <option value="16">Black Longsword (+16)</option>
                <option value="22">Black Warhammer (+22)</option>
                <option value="24">Black Battleaxe (+24)</option>
                <option value="26">Black 2h Sword (+26)</option>

                <!-- Mithril -->
                <option value="10">Mithril Dagger (+10)</option>
                <option value="16">Mithril Mace (+16)</option>
                <option value="17">Mithril Sword (+17)</option>
                <option value="20">Mithril Scimitar (+20)</option>
                <option value="22">Mithril Longsword (+22)</option>
                <option value="27">Mithril Warhammer (+27)</option>
                <option value="29">Mithril Battleaxe (+29)</option>
                <option value="31">Mithril 2h Sword (+31)</option>

                <!-- Adamant -->
                <option value="14">Adamant Dagger (+14)</option>
                <option value="23">Adamant Mace (+23)</option>
                <option value="24">Adamant Sword (+24)</option>
                <option value="28">Adamant Scimitar (+28)</option>
                <option value="31">Adamant Longsword (+31)</option>
                <option value="39">Adamant Warhammer (+39)</option>
                <option value="41">Adamant Battleaxe (+41)</option>
                <option value="44">Adamant 2h Sword (+44)</option>

                <!-- Rune -->
                <option value="24">Rune Dagger (+24)</option>
                <option value="36">Rune Mace (+36)</option>
                <option value="39">Rune Sword (+39)</option>
                <option value="44">Rune Scimitar (+44)</option>
                <option value="49">Rune Longsword (+49)</option>
                <option value="62">Rune Warhammer (+62)</option>
                <option value="64">Rune Battleaxe (+64)</option>
                <option value="70">Rune 2h Sword (+70)</option>

                <!-- Dragon -->
                <option value="40" data-special="1.15">Dragon Dagger (+40)</option>
                <option value="55" data-special="1.50">Dragon Mace (+55)</option>
                <option value="60">Dragon Spear (+60)</option>
                <option value="71" data-special="1.25">Dragon Longsword (+71)</option>
                <option value="85">Dragon Battleaxe (+85)</option>

                <!-- Misc -->
                <option value="10">Blurite Sword (+10)</option>
                <option value="10">Silverlight (+12)</option>
                <option value="25">Excalibur (+25)</option>
                <option value="-10">Flowers (-10)</option>
            </select>
        </div>
        <div class="input-group">
            <label>Amulet:</label>
            <select id="amuletBonus">
                <option value="0">None</option>
                <option value="6">Amulet of Power (+6)</option>
                <option value="6">Amulet of Glory (+6)</option>
                <option value="10">Amulet of Strength (+10)</option>
            </select>
        </div>
        <div class="input-group">
            <label>Gloves:</label>
            <select id="glovesBonus">
                <option value="0">None</option>
                <option value="2">Cooking Gauntlets (+2)</option>
                <option value="2">Chaos Gauntlets (+2)</option>
                <option value="2">Goldsmith Gauntlets (+2)</option>
                <option value="2">Klank's Gauntlets (+2)</option>
                <option value="2">Steel Gauntlets (+2)</option>
            </select>
        </div>
        <div class="input-group justify-center">
            <button onclick="runCalc()">Calculate!</button>
        </div>
    </div>
    <div id="rangedOptions" class="hidden">
        <h2>Ranged</h2>
        <div class="input-group">
            <label>Ranged Level:</label>
            <input type="number" id="rangedLevel" min="1" max="99" value="1">
            <label>Ranged Strength Bonus:</label>
            <input type="number" id="rangedBonus" min="0" max="99" value="0">
        </div>
        <div class="input-group">
            <label>Fighting Style:</label>
            <select id="rangedFightingStyle">
                <option value="3">Accurate (+3)</option>
                <option value="1">Rapid/Longrange (+0)</option>
            </select>
        </div>
        <div class="input-group">
            <label>Potion:</label>
            <select id="rangedPotion">
                <option value="0,0">None</option>
                <option value="4,0.10">Ranged Potion (4 + 10%)</option>
            </select>
        </div>
        <h3>Equipment</h3>
        <div class="input-group">
            <label>Weapon:</label>
            <select id="rangedWeaponBonus">
                <option value="0" id="bowAndArrow">Bow & Arrow</option>
                <option value="0" id="crossbowAndBolt">Crossbow & Bolt</option>
                <option value="3">Bronze Knife</option>
                <option value="4">Iron Knife</option>
                <option value="7">Steel Knife</option>
                <option value="8">Black Knife</option>
                <option value="10">Mithril Knife</option>
                <option value="14">Adamant Knife</option>
                <option value="24">Rune Knife</option>
                <option value="1">Bronze Dart</option>
                <option value="2">Iron Dart</option>
                <option value="3">Steel Dart</option>
                <option value="9">Mithril Dart</option>
                <option value="17">Adamant Dart</option>
                <option value="26">Rune Dart</option>
                <option value="5">Bronze Thrownaxe</option>
                <option value="7">Iron Thrownaxe</option>
                <option value="11">Steel Thrownaxe</option>
                <option value="16">Mithril Thrownaxe</option>
                <option value="23">Adamant Thrownaxe</option>
                <option value="26">Rune Thrownaxe</option>
                <option value="6">Bronze Javelin</option>
                <option value="10">Iron Javelin</option>
                <option value="12">Steel Javelin</option>
                <option value="18">Mithril Javelin</option>
                <option value="28">Adamant Javelin</option>
                <option value="42">Rune Javelin</option>
            </select>
        </div>
        <div  id="arrowOptions">
            <div class="input-group">
                <label>Arrows:</label>
                <select id="arrowBonus">
                    <option value="7">Bronze Arrows</option>
                    <option value="10">Iron Arrows</option>
                    <option value="16">Steel Arrows</option>
                    <option value="22">Ogre Arrows</option>
                    <option value="22">Mithril Arrows</option>
                    <option value="31">Adamant Arrows</option>
                    <option value="49">Rune Arrows</option>
                </select>
            </div>
        </div>
        <div class="hidden" id="boltOptions">
            <div class="input-group">
                <label>Bolts:</label>
                <select id="boltBonus">
                    <option value="10">Bolt</option>
                    <option value="19">Pearl Bolt</option>
                    <option value="28">Opal Bolt</option>
                    <option value="46">Barbed Bolt</option>
                </select>
            </div>
        </div>
        <div class="input-group justify-center">
            <button onclick="runCalc()">Calculate!</button>
        </div>
    </div>
    <div id="magicOptions" class="hidden">
        <h2>Magic</h2>
        <div class="input-group">
            <label>Spell:</label>
            <select id="spell">
                <option value="2">Wind Strike</option>
                <option value="4">Water Strike</option>
                <option value="6">Earth Strike</option>
                <option value="8">Fire Strike</option>
                <option value="9">Wind Bolt</option>
                <option value="10">Water Bolt</option>
                <option value="11">Earth Bolt</option>
                <option value="12">Fire Bolt</option>
                <option value="8">Crumble Undead</option>
                <option value="13">Wind Blast</option>
                <option value="14">Water Blast</option>
                <option value="25">Iban Blast</option>
                <option value="15">Earth Blast</option>
                <option value="16">Fire Blast</option>
                <option value="20">God Spells</option>
                <option value="17">Wind Wave</option>
                <option value="18">Water Wave</option>
                <option value="19">Earth Wave</option>
                <option value="20">Fire Wave</option>
            </select>
        </div>
        <div class="input-group">
            <label>Chaos Gauntlets:</label>
            <select id="chaosGauntlets">
                <option value="0">No</option>
                <option value="3">Yes (+3 to Bolt Spells)</option>
            </select>
        </div>
        <div class="input-group justify-center">
            <button onclick="runCalc()">Calculate!</button>
        </div>
    </div>
    <hr>
    <h2>Your Max Hit: <span id="maxHit" class="gold-text"></span></h2>
    <div id="specialDiv" style="display:none;">
        <h3>Max Hit with Special Attack: <span id="specialResult" class="gold-text"></span></h3>
    </div>
</div>
HTML.getJS('js/calculators/max_hit.js'); }