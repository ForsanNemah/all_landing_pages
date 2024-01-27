<?php

 
include "info.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$date = date('Y/m/d H:i:s');


echo $name.$phone;










$postParameter = array(
    'date_and_time' => $date,
    'name' => $name,
    'phone' => $phone
    
);

$curlHandle = curl_init($action_url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
$curlResponse = curl_exec($curlHandle);
curl_close($curlHandle);


//echo $curlResponse."";


echo '<script type="text/javascript">

   var msg="f20 كود الخصم الخاص بك هو \n يمكنك استخدامة  عند زيارتك لاحد فروعنا \n او عند الطلب من المتجر الالكتروني ";   



           
alert(msg);

window.history.go(-1);
 
</script>

';


















?>