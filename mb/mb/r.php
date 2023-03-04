<?php 


require_once 'vendor/autoload.php';
error_reporting(E_ERROR | E_PARSE);

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

$reader = ReaderEntityFactory::createReaderFromFile('C:\wamp4\tmp\phpE2ED.tmp');

$reader->open('C:\wamp4\tmp\phpE2ED.tmp');

foreach ($reader->getSheetIterator() as $sheet) {
    foreach ($sheet->getRowIterator() as $row) {
        // do stuff with the row
        $cells = $row->getCells();
//echo $cells[0]. $cells[1];












foreach ( $cells as $value) {
 //echo "$value  <br>".is_numeric($value);
  //echo $value.length();
 






  try {
    
    
   




    if ($value != "" && strlen($value)>=9   ) {

        $result = strrev($value);
        $result2 =substr($result,0,9);
        $result3=strrev($result2);
        //echo $result3."<br>";
        $value= $result3;
        $number=number_format($value."",0, '.', '');
        echo $number."<br>";

     
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




 ?>