<?php
include('session.php');
include('dbcon.php');


$login_query=mysqli_query($conn,"select * from users where User_id=$id_session");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
$f=$row['FirstName'];
$l=$row['LastName'];
$type=$row['User_Type'];



mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Logout', NOW(),'$type')")or die(mysqli_error());




session_destroy();
header('location:index.php');
?>