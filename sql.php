<?php
$hostname = "sql1.njit.edu";
$username = "sm2555";
$password = "tzw8bjLL";
$conn = NULL;
try 
{
    $conn = new PDO("mysql:host=$hostname;dbname=sm2555",$username, $password);
	echo "connected seccessfully";
	}
	catch(PDOException $e)
	{
		 echo "Connection failed: " . $e->getMessage();
		}
			?>
