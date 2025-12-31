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

$guildlist = array(
    "championsguild" => "Champions' Guild",
    "cooksguild" => "Cook's Guild",
    "craftingguild" => "Crafting Guild",
    "fishingguild" => "Fishing Guild",
    "herosguild" => "Hero's Guild",
    "legendsguild" => "Legends Guild",
    "magicguild" => "Magic Guild",
    "miningguild" => "Mining Guild",
    "prayerguild" => "Prayer Guild",
    "rangingguild" => "Rangers Guild"
);

$minigameslist = array(
    // "agilityarena" => "Brimhaven Agility Arena",
    // "castlewars" => "Castle Wars",
    //+ "duelarena" => "Duel Arena",
    "fishingtrawler" => "Fishing Trawler",
    // "gamesroom" => "Burthorpe Games Room",
    "gnomeball" => "Gnome Ball",
    // "shadesofmort" => "Shades of Mort'ton"
);

function getExtraHeaderContent() { 
    return getJS('js/equipment_interface.js'); 
}

function getPageContent() {
    global $meta_data, $siteOptStyle, $speciallist, $minigameslist, $guildlist;
    ob_start();

    $guide = $_GET['guide'] ?? null;
    $guilds = $_GET['guilds'] ?? null;
    $minigame = $_GET['minigames'] ?? null;

    if (!$guide && !$minigame && !$guilds) {
        $meta_data['title'] = 'Special Guides';
        $meta_data['og:title'] = $meta_data['title'];
        $meta_data['og:image'] = 'img/genie.png';
        echo '<h3>Select the guide you would like to view a guide for:</h3>';
        echo renderSpecialList($speciallist);
        echo '<br>';
        echo renderGuildsList($guildlist);
        echo '<br>';
        echo renderMiniGamesList($minigameslist);
        echo '<br>';
    } elseif ($guide) {
        $currSpecialGuide = htmlspecialchars($guide);
        $filePath = 'pages/specialguides/guides/' . $currSpecialGuide . '.php';

        if (file_exists($filePath)) {
            include $filePath;
            $guideName = $speciallist[$currSpecialGuide] ?? ucfirst($currSpecialGuide);
            $meta_data['title'] = 'Special Guides > ' . $guideName;
            $meta_data['og:title'] = $meta_data['title'];
            $meta_data['og:image'] = 'img/genie.png';

            echo getSpecialGuide($guideName);
        } else {
            $stopload = true;
            redirect("404");
            exit;
        }
    } elseif ($guilds) {
        $currGuild = htmlspecialchars($guilds);
        $filePath = 'pages/specialguides/guilds/' . $currGuild . '.php';
    
        if (file_exists($filePath)) {
            include $filePath;
            $guildName = $guildlist[$currGuild] ?? ucfirst($currGuild);
            $meta_data['title'] = 'Special Guides > ' . $guildName;
            $meta_data['og:title'] = $meta_data['title'];
            $meta_data['og:image'] = 'img/genie.png';
    
            echo getSpecialGuide($guildName);
        } else {
            $stopload = true;
            redirect("404");
            exit;
        }
    } elseif ($minigame) {
        $currMiniGame = htmlspecialchars($minigame);
        $filePath = 'pages/specialguides/minigames/' . $currMiniGame . '.php';

        if (file_exists($filePath)) {
            include $filePath;
            $gameName = $minigameslist[$currMiniGame] ?? ucfirst($currMiniGame);
            $meta_data['title'] = 'Special Guides > ' . $gameName;
            $meta_data['og:title'] = $meta_data['title'];
            $meta_data['og:image'] = 'img/genie.png';

            echo getSpecialGuide($gameName);
        } else {
            $stopload = true;
            redirect("404");
            exit;
        }
    }

    return ob_get_clean();
}

function renderSpecialList(array $speciallist): string {
    $html = '<table class="table" style="width: 40%;">';
    $html .= '<thead><tr><th>Guides</th></tr></thead><tbody>';

    foreach ($speciallist as $specialKey => $specialName) {
        $url = "?p=specialguides&guide=" . urlencode($specialKey);
        $html .= '<tr><td><a href="' . $url . '">' . htmlspecialchars($specialName) . '</a></td></tr>';
    }

    $html .= '</tbody></table>';
    return $html;
}

function renderGuildsList(array $guildlist): string {
    $html = '<table class="table" style="width: 40%;">';
    $html .= '<thead><tr><th>Guilds</th></tr></thead><tbody>';

    foreach ($guildlist as $guildKey => $guildName) {
        $url = "?p=specialguides&guilds=" . urlencode($guildKey);
        $html .= '<tr><td><a href="' . $url . '">' . htmlspecialchars($guildName) . '</a></td></tr>';
    }

    $html .= '</tbody></table>';
    return $html;
}

function renderMiniGamesList(array $minigameslist): string {
    $html = '<table class="table" style="width: 40%;">';
    $html .= '<thead><tr><th>Mini-Games</th></tr></thead><tbody>';

    foreach ($minigameslist as $minigameKey => $minigameName) {
        $url = "?p=specialguides&minigames=" . urlencode($minigameKey);
        $html .= '<tr><td><a href="' . $url . '">' . htmlspecialchars($minigameName) . '</a></td></tr>';
    }

    $html .= '</tbody></table>';
    return $html;
}