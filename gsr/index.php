<?php
 


/*
 $a = new DateTime("10-9-2023 19:24:13");
 $b = new DateTime("10-9-2023 00:00:00");
 if ( $a>=$b){ 

    echo "yes";
 
     

} 

else{
    echo "no";
}
*/



 
 error_reporting(E_ERROR | E_WARNING | E_PARSE);
 error_reporting(E_ERROR | E_PARSE);
 

 //$today_date_and_time=  date('d/m/Y H:i:s');

 //echo $today_date_and_time."<br>";

 


 $defaults = array(
    CURLOPT_URL             => 'https://opensheet.elk.sh/1LH8h__qTQFidnO5OF4wohxeZ6Thz7B3GPnjqYmyzRJ8/Sheet1',
    CURLOPT_POST            => false,
    CURLOPT_HEADER          => false,
    CURLOPT_SSL_VERIFYPEER  => false,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_SSL_VERIFYHOST  => false,
);
$curl               = curl_init();
curl_setopt_array($curl, $defaults);
$curl_response      = curl_exec($curl);
$json_objekat       = json_decode($curl_response);

// DUMP THE CURL-ERROR INFORMATION:
//var_dump(curl_error($curl));
curl_close($curl);
$json_array=json_decode($curl_response, TRUE);
//echo $curl_response;

foreach($json_array as $item) { //foreach element in $arr
  

    try {
        $customer_name = $item['customer_name']; //etc
        $sheet_link = $item['sheet_link']; //etc
        if(empty($sheet_link)) {
            continue;
             
        }


        //echo $customer_name;
        //echo $sheet_link."<br>";
        $sheet_link_1 = explode("/d/", $sheet_link);
        //echo $sheet_link_1[1]."<br>";

        $sheet_link_2 = explode("/", $sheet_link_1[1]);
        //echo $sheet_link_2[0]."<br>";

        get_sheet_data($sheet_link_2[0],$customer_name);
        //break;
    
      }
      
      //catch exception
      catch(Exception $e) {

        //echo $e;
        continue;
      }







}
 



















function get_sheet_data($sheet_id,$customer_name) {



    
    try {
       //echo $sheet_id."<br>";







       $defaults = array(
        CURLOPT_URL             => 'https://opensheet.elk.sh/'.$sheet_id.'/Sheet1',
        CURLOPT_POST            => false,
        CURLOPT_HEADER          => false,
        CURLOPT_SSL_VERIFYPEER  => false,
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_SSL_VERIFYHOST  => false,
    );
    $curl               = curl_init();
    curl_setopt_array($curl, $defaults);
    $curl_response      = curl_exec($curl);
    $json_objekat       = json_decode($curl_response);
    
    // DUMP THE CURL-ERROR INFORMATION:
    //var_dump(curl_error($curl));
    curl_close($curl);
    $json_array=json_decode($curl_response, TRUE);
    //echo $curl_response."<br>";


    $today_date_and_time= date('j-n-Y');
    $today_date_and_time=$today_date_and_time." 00:00:00";
    


    $customers_counter=0;
    foreach($json_array as $item) { 

        $date_and_time = $item['date_and_time'];
         
        $date_and_time=str_replace('/', '-', $date_and_time);


        //echo $date_and_time."from sheet"."<br>";
        //echo  $today_date_and_time."today"."<br>";


        $a = new DateTime(".$date_and_time.");
        $b = new DateTime(".$today_date_and_time.");







        if (($a >= $b) ){

           // echo "ok";
    $customers_counter++;
             
        
        } 
        else{
           // echo "no";
continue;

        }













        
       
  

    }
    





   echo  $customer_name."---". $customers_counter."
   
   
   
                          
   
   "."<br>";

//echo "https://docs.google.com/spreadsheets/d/".$sheet_id."<br>";







    
      }
      
      //catch exception
      catch(Exception $e) {

        $customers_counter=0;
      }


     
  }

 
?>