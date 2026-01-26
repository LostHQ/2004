<?php
function getPageContent() { return <<<HTML
<div class="main-page">
    <div class="menu-item">
        <a href="/?p=questguides">
            <img src="/img/questicon.png"><br><br>
            Quest Guides
        </a>
    </div>
    <div class="menu-item">
        <a href="/?p=skillguides">
            <img src="/img/stats.png"><br><br>
            Skill Guides
        </a>
    </div>
    <div class="menu-item">
        <a href="/?p=npcdb">
            <img src="/img/skeleton.png"><br><br>
            NPC Database
        </a>
    </div>
    <div class="menu-item">
        <a href="/?p=itemdb">
            <img src="/img/itemdb.png"><br><br>
            Item Database
        </a>
    </div>
    <div class="menu-item">
        <a href="/?p=specialguides">
            <img src="/img/specialguides.png"><br><br>
            Special Guides
        </a>
    </div>
    <div class="menu-item">
        <a href="/?p=calculators">
            <img src="/img/swordicon.png"><br><br>
            Calculators
        </a>
    </div>
    <div class="menu-item">
        <a href="/?p=cluetables">
            <img src="/img/casket.png"><br><br>
            Treasure Trail<br>Rewards
        </a>
    </div>
    <div class="menu-item">
        <a href="/?p=clueguides">
            <img src="/img/clueicon.png"><br><br>
            Treasure Trail<br>Guides
        </a>
    </div>
    <div class="menu-item">
        <a href="/?p=wallpapers">
            <img src="/img/wallpapers.png"><br><br>
            Wallpapers
        </a>
    </div>
    <div class="menu-item">
        <a href="/?p=tools">
            <img src="/img/tools.png"><br><br>
            Tools
        </a>
    </div>
</div>

HTML; }
