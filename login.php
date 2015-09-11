<?php

  require_once 'config.php';

  session_start();

  
    $name = $_POST['name'];
    $qry = "SELECT usrid, username, Regiao FROM user WHERE username='".$name."'";
    $res = mysqli_query($con, $qry);
    $num_rows = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);
    if($num_rows == 1){
    	echo 'true';
    	$_SESSION['user'] = $row['username'];
        $_SESSION['regiao'] = $row['Regiao'];
  }else{
  	echo 'false';
  }
