	<?php
	$conn = mysqli_connect('localhost', 'root', '', 'umbrella') or die ('Unable to connect');


	?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="shortcut icon" type="image/png" href="img/umbrella.png">
		<link rel="stylesheet" type="text/css" href="login.css"></li>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			*{
				box-sizing: border-box;
				margin: 0;
				padding: 0;
			}
			body{
				width: 100%;
				background-image: url('line.gif');
				background-size: cover;
			}
			.login-container{
				width: 400px;
				height: 250px;
				color: #00FFAB;
				text-align: center;
				border: 1px solid rgba(255, 255, 255, 0.3);    
				border-radius: 25px;     
				position: absolute;
				top:0;
				bottom: 0;
				left: 0;
				right: 0;
   				margin: auto;
				padding: 15px;
			}
			h2{
				font-size: 2rem;
			}
			input{
				padding: 8px;
				margin: 5px;
			}
			button{
				margin-top: 5px;
				padding: 8px;
				background-color: #019267;
				color: #000;
			}
			a{
				text-decoration: none;
				color: #B8F1B0;
			}
		</style>
		<title>Login</title>
	</head>
	<body>	
	<div class="login-container">
            <form action="home.php" method="post">
                <h1>Login</h1>
                <label>Email:</label>
                <input type="email" name="email" class="email"><br>
                <label>Password:</label>
                <input type="password" name="password"><br>
                <button type="submit"> Login </button>
				<p>If you are a member of the staff, please <span> <a href="login.php">click here.</a></span></p>
				<p>Don't have an account?, please <span> <a href="user-register.php">click here.</a></span></p>
            </form>
        </div>
	</body>
	</html>