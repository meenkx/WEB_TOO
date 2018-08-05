<?php
$servername = "localhost";
$username = "suttikan_meenkx";
$password = "123Qweasd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=suttikan_web", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>