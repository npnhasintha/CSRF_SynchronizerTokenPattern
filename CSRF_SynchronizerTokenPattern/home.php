<?php

require_once 'token.php';


$val = $_POST["token"];


if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['SesT'])){
		echo "<h3> Valid request:  ".$_POST['updatepost']."</h3>";		
	}
	else{
	   echo "<h3> Invalid request - Tokens doesnot match :  ".$_POST['updatepost']."</h3>";
	}
}
?>