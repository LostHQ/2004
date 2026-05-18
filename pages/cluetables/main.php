<?php
function getExtraHeaderContent() { return getCSS('css/droptables.css'); }
function getPageContent() {
    global $meta_data;
    $meta_data['title'] = 'Clue Tables';
    $meta_data['og:title'] = $meta_data['title'];
    $meta_data['og:image'] = 'img/clueicon.png';

    return <<<HTML
<h2>Clue Tables</h2>
<div class="row">
    <div class="stone-box">
        <b>Select a Clue Tier</b>
        <label><input type="radio" name="clueTier" value="easy" checked> Easy</label>
        <label><input type="radio" name="clueTier" value="medium"> Medium</label>
        <label><input type="radio" name="clueTier" value="hard"> Hard</label>
    </div>
    <div class="stone-box">
        <b>Search for an item</b><br>
        <input type="text" id="searchInput" placeholder="Search..." autocomplete="off" disabled>
        <div id="searchResults" class="search-results"></div>
    </div>
</div>
<br>
<div class="easyTable"></div>
<div class="mediumTable"></div>
<div class="hardTable"></div>
<script src="pages/cluetables/cluetables.js"></script>
HTML;}