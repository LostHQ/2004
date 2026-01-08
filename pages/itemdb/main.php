<?php
function getExtraHeaderContent() { return getCSS('css/calculators.css'); }
function getPageContent() {
    global $meta_data, $siteOptStyle;
    $meta_data['title'] = 'Item Database';
    $meta_data['og:title'] = $meta_data['title'];
    $meta_data['og:image'] = 'img/skillicons/stats.webp';
    return <<<HTML
<style>
#search1, #search2 {
    box-sizing: border-box;
    background-color: #474747;
    color: white;
    border: 1px solid #666;
    appearance: none;
    position: relative;
}
</style>
<h2>Item Database</h2>
<p>Typing in the search box will open a dropdown with the first 15 matching Items.</p>
<div class="row">
    <div class="stone-box b">
        <b>Search for an Item</b><br>
        <input type="text" id="search1" list="items-list" placeholder="Search..."><br>
    </div>
</div>
<div class="row">
    <div class="stone-box b">
        <b>Search for an Item to compare (Optional)</b><br>
        <input type="text" id="search2" list="items-list" placeholder="Search..."><br>
    </div>
</div>
<br>
<datalist id="items-list"></datalist>
<div id="items-container"></div>
HTML.getJS(filename: 'js/itemdb/itemdb.js');
}
