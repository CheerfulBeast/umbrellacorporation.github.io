	<?php
	$conn = mysqli_connect('localhost', 'root', '', 'umbrella') or die ('Unable to connect');


	?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="shortcut icon" type="image/png" href="img/umbrella.png">
		<link rel="stylesheet" type="text/css" href="loginc.css"></li>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			.field{
				margin-bottom: 20px;
			}
		</style>
		<title></title>
	</head>
	<body>
		
		<?php
				if (isset($_POST['login'])) {
					$email = $_POST['email'];
					$password = $_POST['password'];

					$select =mysqli_query($conn, "SELECT * FROM `staff` WHERE email = '$email' AND password = '$password'");

					$row =mysqli_fetch_array($select);

					if (is_array($row)) {
						$_SESSION["email"] = $row ['email'];
						$_SESSION["password"] = $row ['password'];

					}
					else{
						echo '<script type = "text/javascript">';
						echo 'alert("Invalid Email or Password")';
						echo 'window.location.href = "logins.php"';
						echo '</script>';

				}
			}
				if (isset($_SESSION['email'])) {
					header("Location:main.php");
				}


				?>
				<div class="blurr">
					<img class="logo" src="img/bg.png" alt="logo">
					</div>
					<div class="swsw">
						<h2>Save lives, Donate Blood</h2>
						<form action="main.php" method="post">
							<input type="text" aria-placeholder="email" class = "field" name="email" placeholder="email" required = ""> <br/>
							<input type="password" aria-placeholder="password" class = "field" name="password" placeholder="password" required = ""> <br/>
							<input type="submit" class = "button" name="login" value="Login">
						</form>

						<div style="margin-top: 20px;">
							<a href="" style="margin-right: 20px;">Forgot password</a>
							<a href="">Not yet a member?</a>
						</div>
							<a href="">sign in using</a>

						
						<div style="margin-top: 20px;">
							<img style="margin-right: 50px;" id="logo" src="img\googlelogo.png" alt="google logo">
							<img id="logo" src="img\facebooklogo.png" alt="facebook logo">
						</div>

					</div>
		</div>
	</body>
	</html>