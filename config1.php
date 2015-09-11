<?php

$con = mysqli_connect('sql113.byetcluster.com', 'b15_16620145@192.168.0.6', '13423139', 'b15_16620145_user') or die(mysqli_error());

if(! $con){
	echo "enable to connect to database: " . mysqli_error();
	exit;
}


?>