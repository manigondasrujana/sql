<?php
$servername = "sql1.njit.edu";
$username = "sm2555";
$password = "tzw8bjLL";
$dbname = "sm2555";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "SELECT * FROM accounts";
	$conn->exec($sql);
	echo "new";
	
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;
    ?>
