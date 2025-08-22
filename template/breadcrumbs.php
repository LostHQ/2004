<?php
$breadcrumbMap = [
    'Skill Guides' => '?p=skillguides',
    'Quest Guides' => '?p=questguides',
    'Calculators' => '?p=calculators',
    'Drop Tables' => '?p=droptables',
    'Clue Tables' => '?p=clueptables',
    'Street Prices' => '?p=streetprices',
    'Treasure Trails' => '?p=clueguides',
    'Item Database' => '?p=itemdb',
    'Player Lookup' => '?p=playerinfo',
    'Wallpapers' => '?p=wallpapers',
    'Changelog' => '?p=changelog',
    'Special Guides' => '?p=specialguides'
];

function renderBreadcrumbs() {
    global $meta_data, $breadcrumbMap;
    $parts = explode(' > ', 'LostHQ > '.$meta_data['title']);
    $breadcrumbs = [];
    $breadcrumbs[] = '<a href="?">LostHQ</a>';

    if (isset($parts[1]) && isset($breadcrumbMap[$parts[1]])) {
        $breadcrumbs[] = '<a href="' . htmlspecialchars($breadcrumbMap[$parts[1]]) . '">' . htmlspecialchars($parts[1]) . '</a>';
    }

    if (isset($parts[2])) {
        $breadcrumbs[] = '<a href="?' . $_SERVER['QUERY_STRING'] . '">' . htmlspecialchars($parts[2]) . '</a>';
    }

    return implode(' &gt; ', $breadcrumbs);
}

$breadcumbOut = renderBreadcrumbs();

if ($breadcumbOut != '<a href="?">LostHQ</a>') {
    echo <<<HTML
    <table style="background-color:black;text-align:center;align-items:center;" class="main-menu">
        <tbody>
            <tr>
                <td class="e">
                    $breadcumbOut
                </td>
            </tr>
        </tbody>
    </table>
    <div style="height:5px;"></div>
    HTML;
}

?>