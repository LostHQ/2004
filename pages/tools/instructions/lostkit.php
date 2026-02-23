<?php
function getGuideContent($guide) {
    return <<<HTML
    <div class="lightbox-overlay" id="lightbox" onclick="closeLightbox()">
        <img id="lightbox-img" src="">
    </div>
    <h2>LostKit</h2>
    <i>LostKit is a standalone utility for managing and launching Lost City related tools.</i>
    <br><br>
    <b><font color="Red">Note:</font></b> This version is no longer maintained. If you wish to receive the latest updates, use <a href="?p=tools">LostKit 2</a>.
    <br><br>
    <img src="img/tools/LostKit.png" width="475" onclick="openLightbox(this.src)">
    <br><br>
    You can either download the Windows executable or run the Python version directly.
    <hr>
    <h3>.EXE Version (Windows)</h3>
    Follow these steps to download and run the LostKit executable:
    <br><br>
    Download the latest release of LostKit.exe from <a href="https://github.com/Razgals/LostKit/releases">GitHub</a>.
    <br><br>
    If Chrome warns that the file may be unsafe, click "Download unverified file".
    <br><br>
    <img src="img/tools/LostKit1.png">
    <br><br>
    After the file finishes downloading, navigate to your downloads folder and locate LostKit.exe. Double click the .exe to launch the program.
    <br><br>
    Windows Defender may block the program. If prompted, click "More info" then "Run anyway".
    <br><br>
    <img src="img/tools/LostKit2.gif" width="475" onclick="openLightbox(this.src)">
    <br><br>
    If you'd like to verify the program's safety, you can inspect the <a href="https://github.com/Razgals/LostKit">source code</a>. This program has been verified safe by the Lost City staff.
    <br><br>
    <hr>
    <h3>Python Version</h3>
    If you prefer to run LostKit through Python instead of the Windows executable, follow the setup instructions below.
    <h4>Requirements/Dependencies</h4>
    <ul>
        <li>Python 3.8+</li>
        <li>pip (Python package manager)</li>
        <li>PyQt6</li>
        <li>PyQt6-WebEngine</li>
    </ul>
    <h4>Running</h4>
    Download the latest source code (zip) release of LostKit from <a href="https://github.com/Razgals/LostKit/releases">GitHub</a>.
    <br><br>
    After the file finishes downloading, navigate to your downloads folder and locate LostKit.zip. Extract the files, then navigate into the extracted directory.
    <br><br>
    Windows users can just double click the .bat file.
    <br><br>
    On Linux or macOS, open a terminal in the extracted directory and run LostKit with: <i>python3 main.py</i>
    <br><br>
    <hr>
    <h3>Usage</h3>
    <h4>IRC</h4>
    LostKit includes an integrated IRC client that connects to the original SwiftKit IRC server &mdash; the same network used for RuneScape-related communities.
    <br><br>
    When prompted, choose a nickname to identify yourself on the server. The default nickname is LCPlayer. Setting a password is optional, but recommended if you'd like to keep the same nickname between sessions.
    <br><br>
    Currently, the two IRC channels for LostKit are #2004Scape and #LostHQ.
    <ul>
        <li><b>#2004Scape</b> - The primary global RuneScape chat channel.</li>
        <li><b>#LostHQ</b> - The official LostHQ staff and community channel.</li>
    </ul>
    The #LostHQ channel is also bridged with the LostHQ Discord server. Messages sent in the Discord game-chat channel appear on IRC, and vice versa which allow real-time cross-platform conversation.
    <br><br>
    <h4>Open Tools Externally</h4>
    This setting controls how LostKit displays its individual tools:
    <br><br>
    <img src="img/tools/LostKit3.png" alt="LostKit Open Tools Externally setting">
    <ul>
        <li><b>Enabled:</b> Tools will open in separate windows outside the main program.</li>
        <li><b>Disabled:</b> Tools will open as tabs within the main LostKit window.</li>
    </ul>
    Choose the option that best fits your workflow. For example, enabling external windows can help if you like arranging multiple tools on different monitors.
    <br><br>
HTML; }