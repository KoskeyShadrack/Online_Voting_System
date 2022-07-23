<?php
include('dbcon.php'); 
$id=$_POST['id'];


mysqli_query($conn,"update voters set VoterID='$id'");
?>