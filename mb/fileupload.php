<html>
<head><title>File uploaded</title></head>
<body bgcolor="cyan" color="yellow">
<center>
<h3>File uploaded !! <h3>
<hr>
<?php

ini_set('max_execution_time', 0);
ini_set('memory_limit', '256M');
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
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];



  echo getcwd();
  $sender_email=$_POST['sender_email'];
  $sender_pass=$_POST['sender_pass'];

  $file_tmp = $_FILES['file']['tmp_name'];
  $file_name = $_FILES['file']['name'];
  $file_destination = getcwd() . "/files/". $file_name;

/*
  if (!is_dir(  $file_destination)) {    
    mkdir( $file_destination);   // line 63 (or maybe there should be Trade/upload, but suppose current working dir will be /home/my_username/public_html/Trade, so only upload/)
}
*/



  move_uploaded_file($file_tmp, $file_destination);

echo  "<br>".$file_name;




$reader = ReaderEntityFactory::createReaderFromFile($file_destination);

$reader->open($file_destination);

foreach ($reader->getSheetIterator() as $sheet) {
    foreach ($sheet->getRowIterator() as $row) {
        // do stuff with the row
        $cells = $row->getCells();
//echo $cells[0]. $cells[1];












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
echo $value."<br>";
//echo $sender_email."<br>";
//echo $sender_pass."<br>";
//echo $value."<br>";
echo send_mail($value,$sender_email,$sender_pass).$send_id."<br>";
$send_id=$send_id+1;
 sleep(2);
   
  }









  }
  
 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    continue;
  }
















}


























         
    }
}

$reader->close();



  }
?>
</center>
</body>
</html>