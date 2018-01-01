<?php
$dbhost = $_SERVER['RDS_HOSTNAME'];
$dbport = $_SERVER['RDS_PORT'];
$dbname = $_SERVER['RDS_DB_NAME'];
$username = $_SERVER['RDS_USERNAME'];
$password = $_SERVER['RDS_PASSWORD'];

/*$con = mysqli_connect($dbhost, $username, $password, $dbname);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
*/

$con = new mysqli($dbhost, $username, $password, $dbname);
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}

?>