<?php


echo "done";

 

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://clp.wmc-ksa.com/w_api/index.php?to=966568430828&&body=hi&&token=9be9kpvc9c70wx4g&&instance=instance64923');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);

echo $phoneList;



?>