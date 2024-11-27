<?php
$servername = "mysql";
$username = "tutorial";
$password = "secret";
$database = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed:  $conn->connect_error");
}
echo "Connected successfully to the database.";

