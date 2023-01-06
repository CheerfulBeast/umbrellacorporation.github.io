<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="img/umbrella.png">
<title>Request Table</title>
<style>
table {
		border-collapse: collapse;
		width: 100%;
		color: #588c7e;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
}
th {
	background-color: #588c7e;
	color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
.title{
	text-align: center;
}
.links{
	margin-top: 50px;
    margin-left: 30px;
}
.links ul{
    display: block;
}
.links li{
    list-style: none;
    display: inline-block;
}
.links a{
	font-family: monospace;
    color: green;
    font-size: 30px;
    margin: 5px;
    transition: 0.8s;
}
.links a:hover{
    color: orange;
    font-size: 30px;
    margin: 5px;
}
body{
    width: 100%;
    background-image: url(line.gif);
    background-repeat: no-repeat;
    background-size: 1362px;
    overflow: hidden;
}
.title{
	color: green;
}
</style>
</head>
<body>
	<div class="links">
		<li><a href="main.php" style="text-decoration:none;">Return</a></li>
	</div>
<div class = "title">
		<h2> Request Table</h2>
	</div>
<table>
<tr>
<th>Full Name</th>
<th>Age</th>
<th>Contact Number</th>
<th>Blood Type</th>
<th>Date</th>
</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "umbrella");
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT name, age, contact, type, date FROM requests";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["name"]. "</td><td>" . $row["age"] . "</td><td>"
	. $row["contact"]. "</td><td>" . $row["type"]. "</td><td>"
    . $row["date"]. "</td></tr>";
	}
	echo "</table>";
	} else { echo "0 results"; }
	$conn->close();
	?>
</table>
</body>
</html>