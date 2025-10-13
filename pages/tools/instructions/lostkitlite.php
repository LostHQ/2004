<?php
function getGuideContent($guide) {
    return <<<HTML
    <h2>LostKit Lite</h2>
    <h3>Installing the Chrome Extension (.zip)</h3>
    The LostKit extension is distributed as a <code>.zip</code> file rather than through the Chrome Web Store, you must install it manually by loading it as an unpacked extension. Follow the steps below:
    <ol>
        <li><b>Download</b> the LostKit extension <code>.zip</code> file to your computer.</li>
        <li><b>Unzip</b> the file to a convenient location — for example, your Downloads folder or desktop. You should now have a folder containing files like manifest.json, background.js, etc.</li>
        <li>Open Google Chrome and navigate to: chrome://extensions/</li>
        <li>In the top-right corner of the Extensions page, <b>enable "Developer mode."</b></li>
        <li>Click the <b>"Load unpacked"</b> button that appears in the toolbar.</li>
        <li>Browse to the folder where you extracted the LostKit extension, select that folder, and click <b>Select Folder</b>.</li>
        <li>The extension should now appear in your list with its icon visible. Make sure it's toggled <b>on</b>.</li>
    </ol>
  Once installed, you can pin the extension to Chrome's toolbar for quick access by clicking the puzzle-piece icon (<b>Extensions</b>) and then clicking the pin icon next to LostKit.
  <br><br>
HTML; }