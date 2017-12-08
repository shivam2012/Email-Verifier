<?php
session_start();
include "db.php";
$name= $_FILES['file']['name'];
echo $name;
$_SESSION['file']=$name;
echo "<br>";
$size= $_FILES['file']['size'];
echo $size;
echo "<br>";
$type= pathinfo($name,PATHINFO_EXTENSION);
echo $type;
echo "<br>";
$tmp_name= $_FILES['file']['tmp_name'];
echo $tmp_name;
echo "<br>";
$target_dir="uploads/";
$upload=1;
$sql="insert into table user_files('file_name') values('$name')";
if(mysqli_query($dbc,$sql))
{
  echo "recorded";
}
else {
  echo "not recorded";
}
mysqli_close($dbc);
if(empty($name))
  {
    $upload=0;
   echo "please choose a file";
   die;
  }
if($type !="csv" && $type !="txt")
{
  $upload=0;
  echo "<br>"."Please upload either a text file or a csv file";
  echo "<br>"."Upload variable: ".$upload."<br>";
  die;
}
if($size>5000)
{
  $upload=0;
  echo "File size is too big. Please upload upto 5 KB";
  die;
}
if($upload==1)
{
  if(move_uploaded_file($tmp_name,$target_dir.$name))
    {
       echo "<br>"."the file named &nbsp".$name."&nbsp has uploaded successfully";
       echo "<br>"."Upload variable: ".$upload."<br>";

     }
}
else{
     echo "Not uploaded";
     die;
   }

if($type=="txt")
{
  $file= fopen($target_dir.$name,"r") or die("unable to open file");
while(!feof($file)){
  $temp= fgets($file);
}
  fclose($file);
}
if($type=="csv")
{
  $file = fopen($target_dir.$name,"r");
  $temp=fgetcsv($file);
  fclose($file);
}
$api_url = "https://neutrinoapi.com/email-validate";
header('Content-type: text/csv');
header('Content-Disposition: attachment; filename=demo.csv');
$file_new = fopen("php://output", "w");
fputcsv($file_new, array('valid','domain-error','domain','is-freemail','syntax-error','email','is-disposable'));
/*$data = array(
    array('Data 11', 'Data 12', 'Data 13', 'Data 14', 'Data 15'),
    array('Data 21', 'Data 22', 'Data 23', 'Data 24', 'Data 25'),
    array('Data 31', 'Data 32', 'Data 33', 'Data 34', 'Data 35'),
    array('Data 41', 'Data 42', 'Data 43', 'Data 44', 'Data 45'),
    array('Data 51', 'Data 52', 'Data 53', 'Data 54', 'Data 55')
);*/

// foreach ($data as $row)
// {
//     fputcsv($file_new, $row);
// }
foreach ($temp as $key=>$value)
{
  $json = curl_post_request($api_url,$value);
  $result = json_decode($json, true);
//  print_r($result);
  foreach($result as $data){
    $data= array($result['valid'],$result['domain-error'],$result['domain'],$result['is-freemail'],$result['syntax-error'],$result['email'],$result['is-disposable']);
    fputcsv($file_new, $data);
  }
}

  function curl_post_request($url, $mail_id){

  	$curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array("user-id" => "sushmita","api-key" => "2DJdrrqLz3SXOWhaXp4CtWny7E7XtiHAN9G4IMPnwTL7ir7g","email" => $mail_id)));
    curl_setopt($curl, CURLOPT_URL, $url);
    $content = curl_exec($curl);
    curl_close($curl);
    return $content;
  }



exit();


//$json = curl_post_request($api_url, $mail_id);
//var_dump($json);
/*
echo "Validity: ".$result['valid']."<br>";
echo "Email: ".$result['email']."<br>";
echo "syntax-error: ".$result['syntax-error']."<br>";
echo "domain-error: ".$result['domain-error']."<br>";
//echo "domain: ".$result['domain']."<br>";
echo "is-freemail: ".$result['is-freemail']."<br>";
echo "is-disposable: ".$result['is-disposable']."<br>";
//echo "typos-fixed:".$result['typos-fixed']."<br>";
*/
?>
