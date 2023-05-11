 
<?php

ini_set('max_execution_time', 0);
ini_set('memory_limit', '256M');


 
require_once 'vendor/autoload.php';
error_reporting(E_ERROR | E_PARSE);
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;


 
 $file_name="1.xlsx";
 
  $file_path = getcwd() . "/". $file_name;

 



 

 




$reader = ReaderEntityFactory::createReaderFromFile($file_path);

$reader->open($file_path);



























































 






foreach ($reader->getSheetIterator() as $sheet) {


  /*
 if($send_id >=50){
  break;


 }

  */
    foreach ($sheet->getRowIterator() as $row) {
        // do stuff with the row
        $cells = $row->getCells();
//echo $cells[0]. $cells[1];





 





foreach ( $cells as $value) {
 
 






  try {
    
    
 




   echo $value."<br>";








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
 
 
 