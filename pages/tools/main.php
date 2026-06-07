<?php
global $meta_data;
$meta_data['title'] = 'Tools';
$meta_data['og:title'] = $meta_data['title'];
$meta_data['og:image'] = 'img/tools.png';

function getPageContent() { 
    global $meta_data, $siteOptStyle;
return <<<HTML
    <h2>Tools</h2>
    Coming Soon
    <br><br>
HTML; }