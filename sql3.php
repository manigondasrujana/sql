<?php
echo "<table style='border: solid 1px black;'>";
echo
"<tr><th>id</th><th>email</th><th>fname</th><th>lname</th><th>phone</th><th>birthday</th><th>gender</th><th>password</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
function __construct($it) { 
parent::__construct($it, self::LEAVES_ONLY); 
}
function current() {
return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
}
function beginChildren() { 
echo "<tr>"; 
} 
function endChildren() { 
echo "</tr>" . "\n";
} 
}
$servername = "sql1.njit.edu";
$username = "sm2555";
$password = "tzw8bjLL";
$dbname = "sm2555";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully"."<br>";
	echo "<br>";
//$conn->beginTransaction();
//$conn->exec("SELECT COUNT(id) FROM accounts WHERE id<6");
//$conn->exec("SELECT * FROM accounts where id<6");
//$conn->commit();	
	//$sql = "SELECT COUNT(id) FROM `accounts`";
	
	$stmt = $conn->prepare("SELECT * FROM accounts where id<6"); 
	$num_rows = mysql_num_rows(mysql_query("SELECT * FROM accounts", $link));
	echo "$num_rows"."<br>";
	$stmt->execute();
	     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	         foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
		 { 
		 echo $v;
			     }

			     }
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    ?>
