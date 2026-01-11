<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

$remoteUrl = "https://2004.lostcity.rs/serverlist?method=0";
$cacheFile = __DIR__ . '/worlds_cache.json';
$cacheDir = dirname($cacheFile);
$cacheExpiry = 10; // seconds

if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
}

if (file_exists($cacheFile)) {
    $cacheTime = filemtime($cacheFile);
    $currentTime = time();
    $cacheAge = $currentTime - $cacheTime;
    if ($cacheAge < $cacheExpiry) {
        $cachedData = file_get_contents($cacheFile);
        echo $cachedData;
        exit;
    } else {
        unlink($cacheFile);
    }
}

$response = @file_get_contents($remoteUrl);

if ($response === false || empty($response)) {
    if (file_exists($cacheFile)) {
        $cachedData = file_get_contents($cacheFile);
        echo $cachedData;
        exit;
    } else {
        header("HTTP/1.1 503 Service Unavailable");
        echo json_encode(['error' => 'Unable to fetch world data']);
        exit;
    }
}

$dom = new DOMDocument();
@$dom->loadHTML($response);
$xpath = new DOMXPath($dom);

$worlds = [];
/** @var DOMElement[] $links */
$links = $xpath->query("//a[contains(@href, '/client?world=')]");

foreach ($links as $link) {
    /** @var DOMElement $link */
    $href = $link->getAttribute('href');
    $query = parse_url($href, PHP_URL_QUERY);
    parse_str($query, $params);
    $world = $params['world'];


    /** @var DOMElement $parent */
    $parent = $link->parentNode;
    $next = $parent->nextSibling;
    if ($next && $next->nodeType != XML_ELEMENT_NODE) $next = $next->nextSibling;
    if ($next instanceof DOMElement && $next->tagName == 'td') {
        $players_text = trim($next->textContent);
        $count = (int) str_replace(' players', '', $players_text);
    } else {
        $count = 0;
    }

    $location = '';

    $current = $link;
    while ($current && $current->tagName != 'tr') {
        $current = $current->parentNode;
    }
    
    if ($current) {
        $sibling = $current->previousSibling;
        while ($sibling) {
            if ($sibling->nodeType == XML_ELEMENT_NODE && $sibling instanceof DOMElement && $sibling->tagName == 'tr') {
                $locationCell = $xpath->query(".//td[@colspan='2']", $sibling)->item(0);
                if ($locationCell) {
                    $locationText = $locationCell->textContent;
                    $locationText = str_replace(["\u{00a0}", "&nbsp;"], '', $locationText);
                    $locationText = preg_replace('/\s+/', ' ', $locationText);
                    $location = trim($locationText);
                    break;
                }
            }
            $sibling = $sibling->previousSibling;
        }
    }
    
    $f2p_pos = strpos($response, 'Free Worlds below');
    $p2p_pos = strpos($response, 'Members Worlds below');
    $link_pos = strpos($response, $href);
    $type = ($link_pos > $f2p_pos && $link_pos < $p2p_pos) ? 'f2p' : 'p2p';

    $worlds[] = [
        'world' => $world,
        'location' => $location,
        'count' => $count,
        'p2p' => $type === 'p2p',
        'hd' => 'https://w'.$world.'-2004.lostcity.rs/rs2.cgi?plugin=0&world='.$world.'&lowmem=0',
        'ld' => 'https://w'.$world.'-2004.lostcity.rs/rs2.cgi?plugin=0&world='.$world.'&lowmem=1'
    ];
}

$jsonOutput = json_encode($worlds);
$writeResult = file_put_contents($cacheFile, $jsonOutput, LOCK_EX);
echo $jsonOutput;