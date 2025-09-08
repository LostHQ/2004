<?php
function getExtraHeaderContent() { return getCSSVersion('css/droptables.css'); }
function getPageContent() {
    global $meta_data;
    $meta_data['title'] = 'Clue Tables';
    $meta_data['og:title'] = $meta_data['title'];
    $meta_data['og:image'] = 'img/clueicon.png';

    return <<<HTML
<h2>Clue Tables</h2>
<p>Please note that the rates listed here are per casket opened, not per roll.</p>
<hr>
<table>
    <tr>
        <td>
            <table width="200px" height="70px" cellpadding="4px">
                <tr>
                    <td class="b" bgcolor="#474747">
                        <div class="stone-box">
                            <b>Select a Clue Tier</b>
                            <label><input type="radio" name="clueTier" value="easy" checked> Easy</label>
                            <label><input type="radio" name="clueTier" value="medium"> Medium</label>
                            <label><input type="radio" name="clueTier" value="hard"> Hard</label>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <table width="280px" height="70px" cellpadding="4px">
                <tr>
                    <td class="b" bgcolor="#474747">
                        <div class="stone-box">
                            <b>Search for an item</b><br>
                            <input type="text" id="searchInput" placeholder="Search..." autocomplete="off" disabled>
                            <div id="searchResults" class="search-results"></div>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<div class="easyTable">
    <br><br>
    <table width="100%" class="table">
        <thead>
            <tr>
                <th colspan="3">Easy Casket Rewards</th>
            </tr>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Rate</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<div class="mediumTable">
    <br><br>
    <table width="100%" class="table">
        <thead>
            <tr>
                <th colspan="3">Medium Casket Rewards</th>
            </tr>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Rate</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<div class="hardTable">
    <br><br>
    <table width="100%" class="table">
        <thead>
            <tr>
                <th colspan="3">Hard Casket Rewards</th>
            </tr>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Rate</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script src="pages/cluetables/cluetables.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("searchInput");

        if (!listenersInitialized) {

            searchInput.disabled = false;
            searchInput.addEventListener("input", loadDropTable);


            const radios = document.querySelectorAll('input[name="clueTier"]');
            radios.forEach(radio => {
                radio.addEventListener("change", loadDropTable);
            });

            listenersInitialized = true;

            loadDropTable();
        }
    });
</script>

HTML;}