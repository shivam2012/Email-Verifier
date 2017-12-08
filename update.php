<?php
session_start();
include "db.php";
$email=$_SESSION['username'];
$fn=$_POST["fn"];
$ln=$_POST["last_name"];
$em=$_POST["email"];
$password=$_POST["password"];
$c_password=$_POST["c_password"];
$q="update users set first_name='$fn',last_name='$ln',email_id='$em',password='$password' where email_id='$email'";
if($password==$c_password)
{
  if(mysqli_query($dbc,$q))
  {
    echo "Record is updated successfully!!";
  }
  else {
    echo "Something is wrong!";
    var_dump(mysqli_error($dbc));
  }
}
else {
  echo "password dosen't match with the confirm password";
}
//$d="delete from users where email_id=$email";
?>
