<?php
$data = json_decode(file_get_contents('php://input'), true);
$input = $data["input"];

function findString($k) {
    $resultString = "abcdefghijklmnopqrstuvwxyz";
    $baseString = "abcdefghijklmnopqrstuvwxyz";
    $baselength = strlen($baseString);

    while ($k > $baselength) {
        $k = $k - $baselength;
    }

    for ($i = 0; $i < $baselength; $i++) {
        if ($i < $k) {
            continue;
        }

        $substring = substr($baseString, 0, $i + 1);

        if (strlen($resultString) > strlen($substring)) {
            $resultString = $substring;
        }
    }

    return strrev($resultString);
}

echo findString($input);