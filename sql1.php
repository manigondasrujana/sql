<?php
$servername = "sql1.njit.edu";
$username = "sm2555";
$password = "tzw8bjLL";

try {
    $conn = new PDO("mysql:host=$servername;dbname=sm2555", $username, $password);
       
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        echo "Connected successfully"; 
		    }
		    catch(PDOException $e)
		        {
			    echo "Connection failed: " . $e->getMessage();
			        }
				?>
