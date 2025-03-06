<?php
$serverName = "localhost";
$dbUsername = "Lakshika";
$dbPassword = "PK#laka#5299";
$dbName = "jayarathnabrothers_login";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
