<?php
error_reporting(E_ERROR | E_PARSE);
$to=$_GET['to'];
$body=$_GET['body'];
$token=$_GET['token'];
$image=$_GET['image'];
$video=$_GET['video'];
$doc=$_GET['doc'];
$filename=$_GET['filename'];
$true_token="ecj7qt42s6e8cxq4";
$message_type="https://api.ultramsg.com/instance50106/messages/";

$params;
if(isset($to)   and  isset($body)  and isset($token)   ){

    if(isset($image)){

        //echo "image";
        $params=array(
            'token' => $token,
            'to' => $to,
            'image' => $image,
            'caption' =>  $body,
           


            );

            $message_type=$message_type."image";

    }
    else{

if(isset($video))
{



    $params=array(
        'token' => $token,
        'to' => $to,
        'video' => $video,
        'caption' =>  $body,
       


        );

        $message_type=$message_type."video";







}
else{


    if(isset($doc)&&isset($filename)){


        $params=array(
            'token' => $token,
            'to' => $to,
            'filename' => $filename,
            'document' => $doc,
'caption' => $body
            );
    
            $message_type=$message_type."document";





        

    }
    else{


        //echo "no image";

        $params=array(
            'token' => $token,
            'to' => $to,
            'body' => $body
            );
    
            $message_type=$message_type."chat";


    }
 

}

      
    }


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $message_type,
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




}