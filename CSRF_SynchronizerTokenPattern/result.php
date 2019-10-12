<?php

if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'pass'){
		echo '*Login successful';
	
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CSRF - Synchronizer Token Pattern</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="CSS/result_style.css">

		<script>
	
			$(document).ready(function(){
	
			var xhttp;
			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
				}
	
	
			};
	
			xhttp.open("GET", "csrf_token_generator.php", true);
			xhttp.send();
	
			});

		</script>
	</head>

	<body>
		<div class="insert-box">
            <form class="form" action="home.php" method="post">
            <h1>Insert Data</h1>
            <div class="textbox">
                <input type="text" name="updatepost" id="username" class="form-control">
            </div>

            <div id="div1">
				<input type="hidden" name="token" value="" id="token_to_be_added"/>
			</div>

            <input class="btn" type="submit" name="submit" value="Submit">
            </form>
        </div>

	</body> 
</html>
