<?php
$mail_id = $_POST['email'];
$api_url = "https://neutrinoapi.com/email-validate";

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

$json = curl_post_request($api_url, $mail_id);
var_dump($json);

$result = json_decode($json, true);
print_r($result);
echo "Validity: ".$result['valid']."<br>";
echo "Email: ".$result['email']."<br>";
echo "syntax-error: ".$result['syntax-error']."<br>";
echo "domain-error: ".$result['domain-error']."<br>";
//echo "domain: ".$result['domain']."<br>";
echo "is-freemail: ".$result['is-freemail']."<br>";
echo "is-disposable: ".$result['is-disposable']."<br>";
//echo "typos-fixed:".$result['typos-fixed']."<br>";
?>
