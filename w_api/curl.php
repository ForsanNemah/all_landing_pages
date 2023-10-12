<?php

  

 
send_w_app_msg("966568430828","سلام كيفك حياك الله ");















    function send_w_app_msg($number,$msg) {
        
$number=str_replace('+', '', $number);
$number=str_replace(' ', '', $number);
$msg=str_replace(' ', '%20', $msg);



//echo $number;
//echo $msg;
 
        $ch = curl_init();
        $url = "http://clp.wmc-ksa.com/w_api/index.php?to=".$number."&&body=".$msg."&&token=9be9kpvc9c70wx4g&&instance=instance64923";
     
      
    /*
        $dataArray = ['page' => 2];
        $data = http_build_query($dataArray);
        $getUrl = $url."?".$data;
    
        */
    
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    
        curl_setopt($ch, CURLOPT_URL, $url);
    
        curl_setopt($ch, CURLOPT_TIMEOUT, 80);
    
           
    
        $response = curl_exec($ch);
    
            
    
        if(curl_error($ch)){
    
            echo 'Request Error:' . curl_error($ch);
    
        }else{
    
            echo $response;
    
        }
    
           
    
        curl_close($ch);
    
    
         
      }

  

?>