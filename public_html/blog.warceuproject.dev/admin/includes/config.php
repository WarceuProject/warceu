<?php
define('DB_SERVER','localhost');
define('DB_USER','warceu');
define('DB_PASS' ,'warungceuri16');
define('DB_NAME','warceu_blog');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>