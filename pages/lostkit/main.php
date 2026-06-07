<?php
global $meta_data;
$meta_data['title'] = 'LostKit';
$meta_data['og:title'] = $meta_data['title'];
$meta_data['og:image'] = 'img/tools/LostKit_2.png';
$guideLookup = [
    'lostkit' => 'LostKit',
    'lostkitlite' => 'LostKit Lite'
];

function getPageContent() {
    global $meta_data, $siteOptStyle, $guideLookup;
    ob_start();
    if (empty($_GET['instructions'])) {
        echo getSelectionMenu();
    } else {
        $instructionGuide = htmlspecialchars($_GET['instructions']);
        $filePath = 'pages/tools/instructions/' . $instructionGuide . '.php';
        if (file_exists($filePath)) {
            include $filePath;
            $meta_data['title'] = 'LostKit > ' . $guideLookup[$instructionGuide];
            $meta_data['og:title'] = $meta_data['title'];
            echo getGuideContent($guideLookup[$instructionGuide]);
        } else {
            $stopload = true;
            redirect("404");
            exit;
        }
    }
    return ob_get_clean();
}

function getSelectionMenu() { 
    global $guideLookup;
return <<<HTML
    <h2>LostKit</h2>
    <p style="font-style:italic;">A central hub for all the tools and utilities designed to enhance your<br>Lost City experience, made by and for the community.</p>
    <hr>
    <div class="lightbox-overlay" id="lightbox" onclick="closeLightbox()">
        <img id="lightbox-img" src="">
    </div>
    <h3>LostKit 2</h3>
    SwiftSwitch/SwiftKit inspired toolkit for Lost City, brought to you by Akg.
    <br><br>
    <img src="img/tools/LostKit_2.png" width="475" onclick="openLightbox(this.src)">
    <br><br>
    Chat with other players via IRC and access all your favorite LostHQ guides and calculators directly in one streamlined app, giving you everything you need for Lost City in one place.
    <br><br>
    Download: <a href="https://github.com/LostHQ/LostKit-Electron/releases">Windows / Linux</a>
    <br>
    <a href="https://github.com/LostHQ/LostKit-Electron">Instructions/Source Code</a>
    <hr>
    <h3>LostKit Lite</h3>
    Chrome/Firefox extension version of LostKit, brought to you by Akg.
    <br><br>
    <img src="img/tools/LostKitLite.png" width="475" onclick="openLightbox(this.src)">
    <br><br>
    LostKit Lite is a lightweight version of LostKit, keeping all the essential features while being fully integrated into Google Chrome. It's fast, browser-friendly, and gives adventurers easy access to Lost City tools wherever they roam in a lightweight package.
    <br><br>
    Download: <a href="https://github.com/Razgals/LostKit-Lite/releases/">Chrome Extension</a>
    <br>
    <a href="?p=lostkit&instructions=lostkitlite">Instructions</a>&nbsp;|&nbsp;<a href="https://github.com/Razgals/LostKit-Lite">Source Code</a>
    <br><br>
HTML; }