<?php

function getPageContent() {
    global $meta_data;
    $meta_data['title'] = 'Tools';
    $meta_data['og:title'] = $meta_data['title'];
    $meta_data['og:image'] = 'img/rune_kite.png';

    return <<<HTML
    <h2>Tools</h2>
    <p style="font-style:italic;">Tools for Lost City</p>
    <hr>
    <div class="lightbox-overlay" id="lightbox" onclick="closeLightbox()">
        <img id="lightbox-img" src="">
    </div>
    <h3>2004Kit</h3>
    SwiftSwitch/SwiftKit inspired toolkit for Lost City, brought to you by Akg.
    <br><br>
    <img src="img/tools/2004kit.png" width="450" onclick="openLightbox(this.src)">
    <br><br>
    Chat with other players via IRC and access all your favorite LostHQ guides and calculators directly in one streamlined app, giving you everything you need for Lost City in one place.
    <br><br>
    Downloads: <a href="downloads/2004kit/2004Kit.exe">Windows Executable</a>&nbsp;|&nbsp;<a href="">Linux AppImage</a>&nbsp;|&nbsp;<a href="">Source Code</a>
    <br><br>
HTML; }