<?php
include "db.php";
$fn= $_POST["fn"];
$ln= $_POST["ln"];
$em= $_POST["em"];
$pass= $_POST["pass"];
$email="select email_id from users where email_id='$em'";
  $var=mysqli_query($dbc,$email);
  if(mysqli_fetch_array($var))
  {
    echo"Email already exist!!";
  }
else {
  $sql="insert into users(first_name,last_name,email_id,password) values('$fn','$ln','$em','$pass')";
  if(mysqli_query($dbc,$sql))
  {
    echo "<br> New record has entered successfully";
    echo $_SERVER['PHP_SELF'];
    header("Location:dashboard.php");
  }
  else {
    echo "shit happens";
    var_dump(mysqli_error($dbc));
  }
  mysqli_close($dbc);
}
mysqli_close($dbc);
?>
