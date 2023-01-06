<?php
 $con=mysqli_connect('localhost', 'root','','umbrella');
 $sql="call getDonorsInfo(1);";
 $res=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($res);
 echo '<pre>';
 print_r($row);

?>