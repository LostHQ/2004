<?php
header("Access-Control-Allow-Origin: https://2004.lostcity.rs");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if (!isset($_GET['username']) || empty($_GET['username'])) {
    http_response_code(400);
    echo json_encode(["error" => "Missing username parameter."]);
    exit;
}

$username = urlencode($_GET['username']);
$remoteUrl = "https://2004.lostcity.rs/api/hiscores/player/$username";

$options = [
    "http" => [
        "method" => "GET",
        "header" => [
            "User-Agent: Mozilla/5.0 (compatible; 2004HQ-Proxy/1.0)",
            "Accept: application/json",
            "Referer: https://2004.lostcity.rs"
        ]
    ]
];
$context = stream_context_create($options);
$response = @file_get_contents($remoteUrl, false, $context);

if ($response === FALSE) {
    http_response_code(502);
    echo json_encode(["error" => "Failed to fetch data from API."]);
    exit;
}

echo $response;
