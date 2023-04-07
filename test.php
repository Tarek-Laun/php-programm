<?php
$testCases = 20;
$output = array_fill(0, $testCases, array("input" => 0, "output" => ""));
$url = "http://127.0.0.1/php-programm/";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
        array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

for ($i = 0; $i < 20; $i++) {
    $input = random_int(0, 100);
    $data = json_encode(array("input" => $input));
    $output[$i]["input"] = $input;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $output[$i]["output"] = curl_exec($curl);
}
header('Content-Type: application/json; charset=utf-8');
echo json_encode($output);