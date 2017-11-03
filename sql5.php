<?php

$link = mysql_connect("sql1.njit.edu", "sm2555", "tzw8bjLL");
mysql_select_db("sm2555", $link);

$result = mysql_query("SELECT * FROM accounts", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows Rows\n";

?>
