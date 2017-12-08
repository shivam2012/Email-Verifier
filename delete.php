<?php
session_start();
include "db.php";
$email=$_SESSION['username'];
$sql="delete from users where email_id='$email'";
var_dump(mysqli_query($dbc,$sql));
?>
