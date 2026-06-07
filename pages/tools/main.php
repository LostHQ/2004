<?php
global $meta_data;
$meta_data['title'] = 'Tools';
$meta_data['og:title'] = $meta_data['title'];
$meta_data['og:image'] = 'img/tools.png';

function getPageContent() { 
    global $meta_data, $siteOptStyle;
return <<<HTML
    <h2>Tools</h2>
    <p>
        Below is a list of tools created and maintained by the Lost HQ team. If you have any suggestions for tools to add, or would like to contribute, please contact us on our Discord server (Link in the top menu).
    </p>
    <ul>
        <li><a href="/?p=lostkit">LostKit</a> - SwiftSwitch/SwiftKit inspired toolkit for Lost City, brought to you by Akg.</li>
        <li><a href="https://tools.losthq.rs/cluecoordinator" target="_blank">Clue Coordinator</a> - Coordinate Clue Tool</li>
        <li><a href="https://tools.losthq.rs/map" target="_blank">World Map</a> - Original Lost City world map, but with major QOL improvements.</li>
    </ul>

    <hr>
    <h3>Community tools</h3>
    <p>
        Below is a list of other community tools that we have found to be useful. These tools are not created nor maintained by the Lost HQ team, but we have found them to be helpful.
    </p>
    <ul>
        <li><a href="https://www.lostcitylabs.com" target="_blank">Lost City Labs</a> - EHP and hiscore tracking tool created by Anders.</li>
    </ul>
    
HTML; }