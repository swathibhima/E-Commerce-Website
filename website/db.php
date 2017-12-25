<?php
//connect to mysql_affected_rows


$con =mysqli_connect("localhost","root","root","website");

//Test connection_aborted


if(mysqli_connect_errno()){
	
	echo "failed to connect to mysql:" .mysqli_connect_errno();
	
	
}




?>