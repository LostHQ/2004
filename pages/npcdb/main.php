<?php
function getPageContent() { 
    global $meta_data;
    $meta_data['title'] = 'NPC Database';
    $meta_data['og:title'] = $meta_data['title'];
    $meta_data['og:image'] = 'img/skeleton.webp';
    return <<<HTML
<style>
.shared-table-toggle { 
    cursor: pointer;
    color: #0066cc;
    text-decoration: underline;
}
.shared-table-toggle:hover {
    color: #004499;
}
</style>
<h2>NPC Database</h2>
<p>Typing in the search box will open a dropdown with the first 15 matching NPCs.</p>
<div class="row">
    <div class="stone-box">
        <b>Search for an NPC</b><br>
        <input type="text" id="npcSearch" placeholder="Search for an NPC..."><br>
    </div>
</div>
<div class="row">
    <div class="stone-box" style="height:100px;">
        <input type="checkbox" id="droppableOnlyCheckbox" checked>
        <label for="droppableOnlyCheckbox">
            Search only NPCs which drop items
        </label>
    </div>
    <div class="stone-box">
        <label for="ringOfWealthCheckbox">
            <input type="checkbox" id="ringOfWealthCheckbox" style="top:-10px;">
            <canvas itemname="ring_of_wealth" show-label="true" name-append=" equipped"></canvas>
        </label>
    </div>
</div>
<br>
<div id="npc-container"></div>
HTML.getJS(filename: 'js/npcdb/npcdb.js');
}