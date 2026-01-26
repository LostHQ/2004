<?php
$questlist = array(
    //String questKey => [String questName => int type] (0 = free, 1 = members, 2 = miniquest)
    "blackknightsfortress" => ["Black Knight's Fortress", 0],
    "cooksassistant" => ["Cook's Assistant", 0],
    "demonslayer" => ["Demon Slayer", 0],
    "dorics" => ["Doric's Quest", 0],
    "dragonslayer" => ["Dragon Slayer", 0],
    "ernestthechicken" => ["Ernest the Chicken", 0],
    "goblindiplomacy" => ["Goblin Diplomacy", 0],
    "impcatcher" => ["Imp Catcher", 0],
    "knightssword" => ["The Knight's Sword", 0],
    "piratestreasure" => ["Pirate's Treasure", 0],
    "princealirescue" => ["Prince Ali Rescue", 0],
    "restlessghost" => ["The Restless Ghost", 0],
    "romeojuliet" => ["Romeo & Juliet", 0],
    "runemysteries" => ["Rune Mysteries Quest", 0],
    "sheepshearer" => ["Sheep Shearer", 0],
    "shieldofarrav" => ["Shield of Arrav", 0],
    "vampireslayer" => ["Vampire Slayer", 0],
    "witchspotion" => ["Witch's Potion", 0],
    "bigchompybirdhunting" => ["Big Chompy Bird Hunting", 1], 
    "biohazard" => ["Biohazard", 1],
    "clocktower" => ["Clock Tower", 1],
    "deathplateau" => ["Death Plateau", 1],
    "digsite" => ["Digsite Quest", 1],
    "druidicritual" => ["Druidic Ritual", 1], 
    "dwarfcannon" => ["Dwarf Cannon", 1],
    "elementalworkshop" => ["Elemental Workshop", 1],
    "familycrest" => ["Family Crest", 1],
    "fightarena" => ["Fight Arena", 1],
    "fishingcontest" => ["Fishing Contest", 1],
    "gertrudescat" => ["Gertrude's Cat", 1],
    "grandtree" => ["The Grand Tree", 1],
    "hazeelcult" => ["Hazeel Cult", 1],
    "holygrail" => ["Holy Grail", 1],
    "heros" => ["Hero's Quest", 1],
    "junglepotion" => ["Jungle Potion", 1],
    "legends" => ["Legends Quest", 1],
    "lostcity" => ["Lost City", 1],
    "merlinscrystal" => ["Merlin's Crystal", 1],
    "monksfriend" => ["Monk's Friend", 1],
    "murdermystery" => ["Murder Mystery", 1],
    "naturespirit" => ["Nature Spirit", 1],
    "observatory" => ["Observatory Quest", 1],
    "plaguecity" => ["Plague City", 1],
    "priestinperil" => ["Priest in Peril", 1],
    "scorpioncatcher" => ["Scorpion Catcher", 1],
    "seaslug" => ["Sea Slug Quest", 1],
    "sheepherder" => ["Sheep Herder", 1],
    "shilovillage" => ["Shilo Village", 1],
    "templeofikov" => ["Temple of Ikov", 1],
    "touristtrap" => ["The Tourist Trap", 1],
    "treegnomevillage" => ["Tree Gnome Village", 1],
    "trollstronghold" => ["Troll Stronghold", 1],
    "tribaltotem" => ["Tribal Totem", 1],
    "undergroundpass" => ["Underground Pass", 1],
    "watchtower" => ["Watch Tower", 1],
    "waterfall" => ["Waterfall Quest", 1],
    "witchshouse" => ["Witches House", 1],
    "barcrawl" => ["Alfred Grimhand's Barcrawl", 2],
    "magearena" => ["Mage Arena", 2],
);
ksort($questlist);

function getExtraHeaderContent() { return getJS('js/fonts.js'); }

function getPageContent() {
    global $miniquestlist, $questlist, $meta_data, $siteOptStyle;
    ob_start();
    if (empty($_GET['quest'])) {
        $meta_data['title'] = 'Quest Guides';
        $meta_data['og:title'] = $meta_data['title'];
        $meta_data['og:image'] = 'img/questicon.webp';
        echo '<h3>Select the Quest you would like to view a Guide for:</h3>';
        if ($siteOptStyle === 'oldschool') {
            echo renderQuestListOldschool($questlist);
        } else {
            echo renderQuestList($questlist);
        }
        echo '<br><hr>
        <table class="table">
            <tr>
                <th>Required for all<br>Free Quests</th>
                <th>Required for all<br>Member\'s Quests</th>
            </tr>
            <tr>
                <td><canvas data-questreqs="free"></canvas></td>
                <td><canvas data-questreqs="members"></canvas></td>
            <tr/>
        </table>'.getJS('js/statcanvas.js');
    } else {
        $currQuest = htmlspecialchars($_GET['quest']);
        $found = false;

        foreach ($questlist as $key => $quest) {
            if ($key === $currQuest) {
                $questName = $quest[0];
                $questType = $quest[1];
                $found = true;
                break;
            }
        }

        if ($found) {
            $meta_data['title'] = 'Quest Guides > ' . $questName;
            $meta_data['og:title'] = $meta_data['title'];
            $meta_data['og:image'] = 'img/questIcons/' . $currQuest . '.webp';

            $fileLocation = 'pages/questguides/' .
                ($questType == 2 ? 'miniquest' : ($questType == 1 ? 'members' : 'free')) .
                '/' . $currQuest . '.php';

            if (!file_exists($fileLocation)) {
                $stopload = true;
                redirect("404");
                exit;
            }

            if ($questType == 2) {
                $questComplete = '<br><br><h2>Congratulations, Miniquest Complete!</h2><hr>';
            } else {
                $questComplete = '<br><br><h2>Congratulations, Quest Complete!</h2><br>
                <img src="img/questimages/quest_complete/' . $currQuest . '.png" alt="Quest Complete!" width="80%"><hr>';
            }



            include $fileLocation;
            echo getQuestGuide($questName, $questComplete);

        } else {
            $stopload = true;
            redirect("404");
            exit;
        }
    }
    return ob_get_clean();
}

function renderQuestList(array $questlist): string {
    $html = <<<HTML
        <div class="quest-container">
            <div class="quest-column">
                <div class="quest-header">FREE QUESTS:</div>
        HTML;

    // Free Quests
    foreach ($questlist as $questKey => $quest) {
        $questName = $quest[0];
        $questType = $quest[1];
        if ($questType == 0) {
            $url = "?p=questguides&quest=" . urlencode($questKey);
            $html .= '<div class="quest-entry"><a href="' . $url . '">' . htmlspecialchars($questName) . '</a></div>';
        }
    }

    $html .= <<<HTML
        </div>
        <div class="quest-column">
            <div class="quest-header">MEMBERS QUESTS:</div>
        HTML;

    // Members Quests
    foreach ($questlist as $questKey => $quest) {
        $questName = $quest[0];
        $questType = $quest[1];
        if ($questType == 1) {
            $url = "?p=questguides&quest=" . urlencode($questKey);
            $html .= '<div class="quest-entry"><a href="' . $url . '">' . htmlspecialchars($questName) . '</a></div>';
        }
    }

    $html .= <<<HTML
        </div>
        <div class="quest-column">
            <div class="quest-header">MINI QUESTS:</div>
        HTML;

    // Mini Quests
    foreach ($questlist as $questKey => $quest) {
        $questName = $quest[0];
        $questType = $quest[1];
        if ($questType == 2) {
            $url = "?p=questguides&quest=" . urlencode($questKey);
            $html .= '<div class="quest-entry"><a href="' . $url . '">' . htmlspecialchars($questName) . '</a></div>';
        }
    }

    $html .= '</div></div>';
    return $html;
}

function renderQuestListOldschool(array $questlist): string {
    // Separate the quests
    $freeQuests = [];
    $membersQuests = [];
    $miniQuests = [];

    foreach ($questlist as $questKey => $quest) {
        $questName = $quest[0];
        $questType = $quest[1];
        $url = "?p=questguides&quest=" . urlencode($questKey);
        switch ($questType) {
            case 0:
                $freeQuests[] = '<a href="' . $url . '">' . htmlspecialchars($questName) . '</a>';
                break;
            case 1:
                $membersQuests[] = '<a href="' . $url . '">' . htmlspecialchars($questName) . '</a>';
                break;
            case 2:
                $miniQuests[] = '<a href="' . $url . '">' . htmlspecialchars($questName) . '</a>';
                break;
        }
    }

    $maxRows = max(count($freeQuests), count($membersQuests), count($miniQuests));

    $html = '<table class="table">';
    $html .= '<thead><tr><th>Free Quests</th><th>Members Quests</th><th>Mini Quests</th></tr></thead><tbody>';

    for ($i = 0; $i < $maxRows; $i++) {
        $free = $freeQuests[$i] ?? '';
        $members = $membersQuests[$i] ?? '';
        $mini = $miniQuests[$i] ?? '';
        $html .= '<tr><td>' . $free . '</td><td>' . $members . '</td><td>' . $mini . '</td></tr>';
    }

    $html .= '</tbody></table>';
    return $html;
}
