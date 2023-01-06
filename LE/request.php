<?php

include 'connect.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$age=$_POST['age'];
	$contact=$_POST['contact'];
	$type=$_POST['type'];
    $date=$_POST['date'];
	$sql="insert into `requests` (name,age,contact,type,date)
	values('$name','$age','$contact','$type','$date')";

	$result=mysqli_query($con,$sql);
	if($result){
		echo "Data inserted successfully";
	}else{
		die(mysqli_error($con));
	
		}
}
		?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="shortcut icon" type="image/png" href="img/umbrella.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="requestc.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>REQUEST BLOOD</title>
  </head>
  
  <body>
  	<div class="navigation">
            <ul>
                <li><a href="home.php" style="text-decoration:none;">Home</a></li>
                <li><a href="donate.php" style="text-decoration:none;">Donate Blood</a></li>
                <li><a href="request.php" style="text-decoration:none;">Request Blood</a></li>
            </ul>
        </div>
      <div class="head">
      <h2>REQUEST BLOOD FILL UP FORM</h2>
      </div>

	<div class="container">
		<form method="post">
			<div class="form-group">
			<label>Full Name of Requestor</label>
			<input type="text" class="form-control"
			placeholder="NAME" 
			name="name" autocomplete="off">
	</div>
		<form method="post">
			<div class="form-group">
			<label>Age of Requestor</label>
			<input type="age" class="form-control"
			placeholder="AGE" 
			name="age" autocomplete="off">
	</div>
		<form method="post">
			<div class="form-group">
			<label>Contact Number</label>
			<input type="contact" class="form-control"
			placeholder="CONTACT" 
			name="contact" autocomplete="off">
	        </div>
        <form method="post">
			<div class="form-group">
			<label>Blood Type Request</label>
			<input type="type" class="form-control"
			placeholder="TYPE" 
			name="type" autocomplete="off">
	        </div>
        <form method="post">
			<div class="form-group">
			<label>Date of Request</label>
			<input type="date" class="form-control"
			placeholder="Date" 
			name="date" autocomplete="off">
	        </div>
		<button type="submit" class="btn 
		btn-primary" name="submit">Submit</button>
		</form>
	</div>

  </body>
</html>