<?php
$speciallist = array(
    "bis" => "Best-in-Slot Gear",
    "chateffects" => "Chat Colors and Effects",
    "coaltrucks" => "Coal Trucks",
    "keys" => "Key Guide",
    "kittencare" => "Kitten Care",
    "music" => "Music Locations",
    "randomevents" => "Random Events",
    "specialattacks" => "Special Attacks",
    "statboosting" => "Stat Boosting"
);

function getExtraHeaderContent() { 
    return getJavaScriptVersion('js/equipment_interface.js'); 
}

function getPageContent() {
    global $meta_data, $siteOptStyle, $speciallist;
    ob_start();
    if (empty($_GET['guide'])) {
        $meta_data['title'] = 'Special Guides';
        $meta_data['og:title'] = $meta_data['title'];
        $meta_data['og:image'] = 'img/genie.png';
        echo '<h3>Select the guide you would like to view a guide for:</h3>';
        echo renderSpecialList($speciallist);
    } else {
        $currSpecialGuide = htmlspecialchars($_GET['guide']);
        $filePath = 'pages/specialguides/guides/' . $currSpecialGuide . '.php';

        if (file_exists($filePath)) {
            include $filePath;
            $guideName = $speciallist[$currSpecialGuide];
            $meta_data['title'] = 'Special Guides > ' . $guideName;
            $meta_data['og:title'] = $meta_data['title'];
            $meta_data['og:image'] = 'img/genie.png';

            echo getSpecialGuide($guideName);
        } else {
            $stopload = true;
            redirect("404");
            exit;
        }
    }

    return ob_get_clean();
}

function renderSpecialList(array $speciallist): string {
    $html = '<table class="calculators" style="width: 40%;">';
    $html .= '<thead><tr><th>Guides</th></tr></thead><tbody>';

    foreach ($speciallist as $specialKey => $specialName) {
        $url = "?p=specialguides&guide=" . urlencode($specialKey);
        $html .= '<tr><td><a href="' . $url . '">' . htmlspecialchars($specialName) . '</a></td></tr>';
    }

    $html .= '</tbody></table>';
    return $html;
}