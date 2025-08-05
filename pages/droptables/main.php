<?php
function getPageContent() { 
    global $meta_data;
    $meta_data['title'] = 'Drop Tables';
    $meta_data['og:title'] = $meta_data['title'];
    $meta_data['og:image'] = 'img/skeleton.webp';
    ob_start();
    echo <<<HTML
<style>
select, #itemSearch {
    box-sizing: border-box;
    background-color: #474747;
    color: white;
    border: 1px solid #666;
    appearance: none;
    position: relative;
}
</style>
<h2>NPC Drop Tables</h2>
<p>Typing in the search box will filter the NPCs shown in the dropdown.</p>
<hr>
<table width="100%">
    <tr>
        <td>
            <table width="300px" height="90px" cellpadding="4px">
                <tr>
                    <td class="b" bgcolor="#474747" background="img/stoneback.gif">
                        <div class="stone-box">
                            <b>Select an NPC</b><br>
                            <select id="npcSelect">
                                <option value="">Select NPC...</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <table width="180px" height="90px" cellpadding="4px">
                <tr>
                    <td class="b" bgcolor="#474747" background="img/stoneback.gif">
                        <div class="stone-box">
                            <canvas data-itemname="ring_of_wealth" data-show-label="inline"></canvas> Equipped
                            <label style="color: white;">
                                <input type="checkbox" id="ringOfWealthCheckbox" style="margin-right: 5px;"><br>
                            </label>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <table width="480px" height="70px" cellpadding="4px">
                <tr>
                    <td class="b" bgcolor="#474747" background="img/stoneback.gif">
                        <div class="stone-box">
                            <b>Search for an item</b><br>
                            <input type="text" id="itemSearch" placeholder="Search..."><br>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<br>
<div id="dropTableContainer"></div>

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
HTML.getJavaScriptVersion('js/droptables/droptables.js');
    return ob_get_clean();
}