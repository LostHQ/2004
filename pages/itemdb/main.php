<?php
function getExtraHeaderContent() { return getCSS('css/calculators.css'); }
function getPageContent() {
    global $meta_data, $siteOptStyle;
    $meta_data['title'] = 'Item Database';
    $meta_data['og:title'] = $meta_data['title'];
    $meta_data['og:image'] = 'img/skillicons/stats.webp';

    return <<<HTML
<link rel="stylesheet" type="text/css" href="pages/itemdb/itemlist.css" />
<h2>Item Database</h2>
<div class="input-group">
  <div id="item-search-container">
    <label for="search1">Item Search</label>
    <input type="text" id="search1" list="items-list" placeholder="Search term"><br><br>
    <label for="search2">Second Item</label>
    <input type="text" id="search2" list="items-list" placeholder="(optional) to compare">
  </div>
</div>
<hr>
<datalist id="items-list"></datalist>

<div id="item-tables-container"></div>

<script src="js/itemdb/itemdb.js"></script>

HTML;
}
