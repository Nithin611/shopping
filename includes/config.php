<?php
define('DB_SERVER','shopping6.mysql.database.azure.com');
define('DB_USER','nithin');
define('DB_PASS' ,'pass@123456');
define('DB_NAME', 'shopping6');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
