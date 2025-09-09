<?php
function getPageContent() { return <<<HTML
<table class="main-page" style="padding-top: 15px;">
    <tbody>
        <tr>
            <td width="100">
                <a href="?p=questguides">
                    <img src="img/questicon.png">
                </a>
            </td>
            <td width="120">
                Quest Guides<br>
                <a href="?p=questguides">Click Here</a>
            </td>
            <td width="10"></td>
            <td width="100">
                <a href="?p=skillguides">
                    <img src="img/stats.png">
                </a>
            </td>
            <td width="120">
                Skill Guides<br>
                <a href="?p=skillguides">Click Here</a>
            </td>
        </tr>
        <tr>
            <td width="100">
                <a href="?p=specialguides">
                    <img src="img/genie.png">
                </a>
            </td>
            <td width="120">
                Special Guides<br>
                <a href="?p=specialguides">Click Here</a>
            </td>
            <td width="10"></td>
            <td width="100">
                <a href="?p=itemdb">
                    <img src="img/mm2_rs2b.jpg">
                </a>
            </td>
            <td width="120">
                Item Database<br>
                <a href="?p=itemdb">Click Here</a>
            </td>
        </tr>
        <tr>
            <td width="100">
                <a href="?p=droptables">
                    <img src="img/skeleton.png">
                </a>
            </td>
            <td width="120">
                Monster Drop Tables<br>
                <a href="?p=droptables">Click Here</a>
            </td>
            <td width="10"></td>
            <td width="100">
                <a href="?p=calculators">
                    <img src="img/swordicon.png">
                </a>
            </td>
            <td width="120">
                Calculators<br>
                <a href="?p=calculators">Click Here</a>
            </td>
        </tr>
        <tr>
            <td width="100">
                <a href="?p=cluetables">
                    <img src="img/casket1.png">
                </a>
            </td>
            <td width="120">
                Clue Casket<br>Tables<br>
                <a href="?p=cluetables">Click Here</a>
            </td>
            <td width="10"></td>
            <td width="100">
                <a href="?p=clueguides">
                    <img src="img/clueicon.png">
                </a>
            </td>
            <td width="120">
                Treasure Trail Guides<br>
                <a href="?p=clueguides">Click Here</a>
            </td>
        </tr>
        <tr>
            <td width="100">
                <a href="?p=wallpapers">
                    <img src="img/picture.png">
                </a>
            </td>
            <td width="120">
                Wallpapers<br>
                <a href="?p=wallpapers">Click Here</a>
            </td>
            <td width="10"></td>
            <td width="100">
                <a href="?p=">
                    <img src="img/wip.png">
                </a>
            </td>
            <td width="120">
                Work In Progress<br>
                <a href="?p=">Click Here</a>
            </td>
        </tr>
    </tbody>
</table>
<br>
HTML; }
