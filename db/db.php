<?php
$servername = "localhost:8888";
$username = "root";
$password = "root";

try {
 $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		
	?> 
		
 