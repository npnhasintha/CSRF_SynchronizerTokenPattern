<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
	<title>Synchronizer Token Pattern - Login</title>
    <link rel="stylesheet" href="CSS/style.css">
	</head>
    
	<body>
	    <div class="login-box">
            <form class="form" action="result.php" method="post">
            
            <h1>Login</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username" id="username" class="form-control">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="password" name="password" id="password" class="form-control">
            </div>

            <input class="btn" type="submit" name="Login" value="Login">
            </form>
        </div>
	</body> 
</html>