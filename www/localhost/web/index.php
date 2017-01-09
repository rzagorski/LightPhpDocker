<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Connecting to Redis server on localhost
$redis = new Redis();
$redis->connect('redis', 6379);
//check whether server is running or not
echo "Server is running: ".$redis->ping() ."<br>";

$servername = "mysql";
$username = "root";
$password = "example";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to MySQL successfully";

phpinfo();