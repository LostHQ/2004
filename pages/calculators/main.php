<?php
class CalculatorType {
    private ?string $calcName = null;
    private const VALID_CALCULATORS = [
        'agility',
        'cooking',
        'crafting',
        'firemaking',
        'fishing',
        'fletching',
        'herblore',
        'mining',
        'prayer',
        'runecraft',
        'smithing',
        'thieving',
        'woodcutting',
        'combat_xp',
        'combat_level',
        'high_alch',
        'max_hit',
        'prayer_duration',
        'run_energy',
        'magic'
    ];

    public function getName(): ?string { return $this->calcName; }

    public function __construct() {
        $calc = htmlspecialchars($_GET['calc'] ?? '');
        if (in_array($calc, self::VALID_CALCULATORS, true)) {
            $this->calcName = $calc;
        }
    }
}
function getExtraHeaderContent() { return
    getCSS('css/calculators.css') .
    getJS('js/calculators.js');
}
function getPageContent(): string {
    global $meta_data, $siteOptStyle;
    ob_start();
    if (empty($_GET['calc'])) {
        $meta_data['title'] = 'Calculators';
        $meta_data['og:title'] = $meta_data['title'];
        $meta_data['og:image'] = 'img/skillicons/stats.webp';
        return generateCalculatorLinks();
    } else {
        $currSkill = htmlspecialchars($_GET['calc']);
        $filePath = 'pages/calculators/' . $currSkill . '/main.php';

        if (file_exists($filePath)) {
            include $filePath;
            // - getPageTitle()
            // - getPageMetaIcon()
            $meta_data['title'] = 'Calculators > ' . getPageTitle();
            $meta_data['og:title'] = $meta_data['title'];
            $meta_data['og:image'] = getPageMetaIcon();

            echo getCalcContent();
        } else {
            $stopload = true;
            redirect("404");
            exit;
        }
    }
    return ob_get_clean();
}

function generateCalculatorLinks(): string {
    global $siteOptStyle;
    $miscCalculators = [
        'combat_level',
        'combat_xp',
        'high_alch',
        'max_hit',
        'prayer_duration',
        'run_energy'
    ];

    $generateLinks = function (array $calculators) {
        $rows = '';
        foreach ($calculators as $calc) {
            $linkText = ucwords(str_replace('_', ' ', $calc));
            $rows .= '<a href="?p=calculators&calc=' . $calc . '"><button>' . $linkText . ' Calculator</button></a><br>';
        }
        return $rows;
    };

    $miscRows = $generateLinks($miscCalculators);

    return (
        getCSS('css/calculators.css').<<<HTML
        <table width="90%" class="table">
            <tr>
                <th>Skill Calculators</th>
            </tr>
            <tr>
                <td>
                    Select a skill below to get to the calculator for that skill.<br>
                    <canvas data-skills="skillTree" data-width="188" data-style="$siteOptStyle"></canvas>
        HTML.getJS('js/skillgrid.js').<<<HTML
                        </td>
                    </tr>
        </table><br>
        <table width="90%" class="table">
            <tr>
                <th>Misc Calculators</th>
            </tr>
            <tr>
                <td style="padding-top: 1em;">
                    $miscRows
                </td>
            </tr>
        </table><br>
        <div class="xp-table"></div>
        <script>renderXpTable();</script>
        HTML
    );
}