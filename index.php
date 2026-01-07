<?php
if ($_SERVER['REQUEST_URI'] !== strtolower($_SERVER['REQUEST_URI'])) {
    $lowercaseURL = strtolower($_SERVER['REQUEST_URI']);
    header('Location: ' . $lowercaseURL, true, 301);
    exit;
}
include 'config.php';

$p = htmlspecialchars($_GET['p'] ?? '');

switch ($p) {
    case 'droptables':
        include 'pages/npcdb/main.php';
        break;
    case 'skillguides':
    case 'cluetables':
    case 'clueguides':
    case 'calculators':
    case 'questguides':
    case 'itemdb':
    case 'npcdb':
    case 'wallpapers':
    case 'specialguides':
    case 'tools':
    case 'playerinfo':
        include 'pages/'.$p.'/main.php';
        break;

    case '404':
    case '403':
        include 'pages/main/error/'.$p.'.php';
        break;

    case 'changelog':
        include 'pages/main/changelog.php';
        break;

    case '': // No ?p= value (homepage)
        include 'pages/main/homepage.php';
        break;

    /*case 'updatecluetables':
        include 'pages/api/updatecluetables.php';
        break;*/

    default: // All other unknown pages
        header('Location: ?p=404') ;
        break;
}

switch (date("n")) {
    case 12:
        $holiday = true;
        $theme = 'christmas';
        $edge_a = "img/themes/christmas/2004/edge_a.jpg";
        $edge_d = "img/themes/christmas/2004/edge_d.jpg";
        $background = "img/themes/christmas/2004/background2.jpg";
        break;
    default:
        $holiday = false;
        break;
}

if (!$stopload) {
    $pageHTML = getPageContent();
    include 'template/header.php';
    include 'template/body.php';
    echo $pageHTML;
    include 'template/footer.php';
}
?>