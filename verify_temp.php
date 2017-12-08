<?php
$em=$_POST['email'];
$api_url="https://neutrinoapi.com/email-validate";
function curl_post_request($url,$em)
{
  $ch=curl_init();
  curl_setopt($ch,CURLOPT_POST,true);
  curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query(array("user-id" => "emailio","api-key" => "7ZBs5WpImb1AHcwBTErAWyEFJXivCb1icpAepmyhYRYE04fK","email" => $em)));
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  curl_setopt($ch,CURLOPT_URL,$url);
  $ret=curl_exec($ch);
  curl_close($ch);
  return $ret;
}
$json= (curl_post_request($api_url,$em));
$result=json_decode($json,true);
print_r($result);
?>
