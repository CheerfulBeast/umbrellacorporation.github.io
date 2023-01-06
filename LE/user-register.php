<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" type="image/png" href="img/umbrella.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register account</title>
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
			.register-container{
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
                color: #00FFAB;
                text-decoration: none;
            }
    </style>
</head>
<body>
<div class="register-container">
        <form action="userlogin.php" method="post">
            <h2>Register to comment</h2>
            <label>Email:</label>
            <input type="email" name="email" class="email" required><br>
            <label>Password: </label>
            <input type="password" name="password" required><br>
            <button type="submit">Register</button><br>
            Already have an account?<a href="userlogin.php"> Click here.</a>
        </form>
    </div>
</body>
</html>