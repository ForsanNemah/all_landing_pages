<?php
error_reporting(E_ERROR | E_PARSE);
$to=$_GET['to'];
$body=$_GET['body'];
$token=$_GET['token'];

$true_token="ecj7qt42s6e8cxq4";

if(isset($to)   and  isset($body) and  isset($token)    ){

$params=array(
'token' => $token,
'to' => $to,
'body' => $body
);
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ultramsg.com/instance50106/messages/chat",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}




}
else{


echo "invalid link format <br>";
echo "example : <br>";
echo "api_link..?to=966568430828&&body=this is message body&&20message%20body&&token=sdsds




}