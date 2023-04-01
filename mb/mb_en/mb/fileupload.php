<html>
<head><title>Sending form</title>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>












</head>
<body bgcolor="cyan" color="yellow">
<center>
<h3>Sending Report<h3>
<hr>
<?php

ini_set('max_execution_time', 0);
ini_set('memory_limit', '256M');


$sender_email=$_POST['sender_email'];
$sender_pass=$_POST['sender_pass'];


$subject=$_POST['subject'];
$body=$_POST['body'];

$host=$_POST['host'];
$port=$_POST['port'];
$secure_type=$_POST['secure_type'];



$send_id=1;
require('insert_c.php');
require('phpmailer/index.php');
require_once 'vendor/autoload.php';
error_reporting(E_ERROR | E_PARSE);
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;


if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  //echo "Type: " . $_FILES["file"]["type"] . "<br />";
  //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Sender Eamil: " . $sender_email;
  echo "<br>";


  //echo getcwd();
 

  $file_tmp = $_FILES['file']['tmp_name'];
  $file_name = $_FILES['file']['name'];
  $file_destination = getcwd() . "/files/". $file_name;

/*
  if (!is_dir(  $file_destination)) {    
    mkdir( $file_destination);   // line 63 (or maybe there should be Trade/upload, but suppose current working dir will be /home/my_username/public_html/Trade, so only upload/)
}
*/



  move_uploaded_file($file_tmp, $file_destination);

//echo  "<br>".$file_name;




$reader = ReaderEntityFactory::createReaderFromFile($file_destination);

$reader->open($file_destination);






























































echo "


<table class='table'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Reciver Email </th>
      <th scope='col'>State</th>
      
    </tr>
  </thead>
  <tbody>











";







foreach ($reader->getSheetIterator() as $sheet) {


  
 if($send_id >=50){
  break;


 }

  
    foreach ($sheet->getRowIterator() as $row) {
        // do stuff with the row
        $cells = $row->getCells();
//echo $cells[0]. $cells[1];






if($send_id >=50){
  break;


 }






foreach ( $cells as $value) {
 //echo "$value  <br>".is_numeric($value);
  //echo $value.length();
 






  try {
    
    
   
//echo $value."<br>";
//send_mail();


/*
    if ($value != "" && strlen($value)>=9   ) {

        $result = strrev($value);
        $result2 =substr($result,0,9);
        $result3=strrev($result2);
        //echo $result3."<br>";
        $value= $result3;
        $number=number_format($value."",0, '.', '');
        echo $number."<br>";
        //add_contact($number);
        $value="";

     
    }

    */




    if ($value != "" && strpos($value,"@")   ) {
 
$value= trim($value);
//echo $value."<br>";
//echo $sender_email."<br>";
//echo $sender_pass."<br>";
//echo $value."<br>";
//echo $send_id;
//echo $value;
//echo send_mail($value,$sender_email,$sender_pass,$subject,$body,$host,$port,$secure_type);
$send_id=$send_id+1;
//echo "<br>";
 //sleep(3);



 if($send_id >=50){
  break;


 }



 echo "
 
 
 
 
 
 <tr>
 <th scope='row'>$send_id</th>
 <td>$value</td>
 <td>
 
 
  ".  send_mail($value,$sender_email,$sender_pass,$subject,$body,$host,$port,$secure_type)."
  

 
 
 </td>
  
</tr>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ";



 sleep(1);











   
  }









  }
  
 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    continue;
  }
















}



























         
    }
}




echo "


</tbody>
</table>






";




$reader->close();



  }
?>
</center>
</body>
</html>