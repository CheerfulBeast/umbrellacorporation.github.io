
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/png" href="img/umbrella.png">
    <link rel="stylesheet" type="text/css" href="loginc.css"></li>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="blurr">
		<img class="logo" src="img/bg.png" alt="logo">
	</div>
	<div class="swsw">
    <h2>Sign Up</h2>
        <form class="" action="register.php" method="post" autocomplete="off">
                <div id="d-input">
                
                <input id="name" class="namefield" placeholder="First Name" type="text" name="firstname" required value="">

                <input id="pass" class="namefield" placeholder="Last Name" type="text" name="lastname" required value=""><br><br>
                </div>
               
                <br>
                <input class="field" placeholder="Email Address" type="email" name="email" required value=""> <br><br>

                <input class="field" placeholder="Password" type="password" name="password" required value=""> <br><br>

                <input class="field" placeholder="sex" type="text" name="sex" required value=""> <br><br>
                <p style="color: white; width: 90%; margin: auto; font-family: sans-serif; padding-bottom: 20px;">By clicking Sign Up, you agree to our terms, Data policy, and Cookies policy</p>
                <button class="button" type="submit" name="submit">REGISTER</button>
            </form>
            <br><br>
            <a href="index.php">Go Back</a>   <br><br>   
    </div>


</body>
    <?php
     $conn = mysqli_connect("localhost", "root", "", "umbrella");
            if(isset($_POST['submit']))
                {
                    if (!empty($_POST['firstname']) && !empty($_POST['lastname'])
                        && !empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['sex']))
                    {
                        $firstName      = $_POST['firstname'];
                        $lastName       = $_POST['lastname'];
                        $email          = $_POST['email'];
                        $pass           = $_POST['password'];
                        $sex            = $_POST['sex'];

                        $dupeQuery = mysqli_query($conn, "SELECT * FROM account WHERE email = '$email'");
                        if (mysqli_num_rows($dupeQuery) > 0) {
                            echo 'EMAIL ALREADY EXIST';
                        } else {
                            $query = "CALL spRegister('$firstName', '$lastName', '$email', '$pass', '$sex')";
                            $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
    
                            $query2 = mysqli_query($conn, "SELECT * from account WHERE email = '$email'");
                            $result = mysqli_fetch_row($query2);
    
                            if($run && $query2) {
                                echo 'alert("YOU HAVE REGISTERED SUCCESSFULLY")';
                            }
                        }
                    } else {
                        echo '<script>alert("error")</script>';
                    }
                }
    ?>      
</html>