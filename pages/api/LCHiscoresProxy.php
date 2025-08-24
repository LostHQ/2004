<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

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
        "header" => "User-Agent: CORS-Bypass-Proxy\r\n"
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
