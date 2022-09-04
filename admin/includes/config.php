<?php
define('DB_SERVER','webblog.mysql.database.azure.com');
define('DB_USER','adminblog');
define('DB_PASS' ,'@Aakarshit132@');
define('DB_NAME','bmsdb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
