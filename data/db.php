<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "sante";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

