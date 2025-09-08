<?php
if ($_SERVER['REQUEST_URI'] !== strtolower($_SERVER['REQUEST_URI'])) {
    $lowercaseURL = strtolower($_SERVER['REQUEST_URI']);
    header('Location: ' . $lowercaseURL, true, 301);
    exit;
}
include 'config.php';

$p = htmlspecialchars($_GET['p'] ?? '');

switch ($p) {
    case 'skillguides':
    case 'droptables':
    case 'cluetables':
    case 'clueguides':
    case 'calculators':
    case 'questguides':
    case 'itemdb':
    case 'wallpapers':
    case 'specialguides':
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

$month = date("n"); // returns numeric month
// $day   = date("j"); // returns numeric day
$isChristmas = ($month == 12);
// $isChristmas = ($month == 12 && $day >= 1 && $day <= 31); // if we want to use specific days instead of the whole month

if ($isChristmas) {
    $edge_a = "img/themes/christmas/2004/edge_a.jpg";
    $edge_d = "img/themes/christmas/2004/edge_d.jpg";
    $background = 'background-color: black; background: url("img/themes/christmas/2004/background.jpg"); background-repeat: repeat;';
} else {
    $edge_a = "img/edge_a.jpg";
    $edge_d = "img/edge_d.jpg";
    $background = 'background-color: black;';
}

if (!$stopload) {
    $pageHTML = getPageContent();
    include 'template/header.php';
    include 'template/body.php';
    echo $pageHTML;
    include 'template/footer.php';
}
?>