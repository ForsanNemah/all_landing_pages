<?php
 
 $from_date=$_POST['from'];
 $to_date=$_POST['to'];

 echo  $from_date."<br>";
 echo  $to_date;



$a0="30-10-2023 00:00:00";

 $a = new DateTime(".$a0.");
 $b = new DateTime(".$from_date.");
 $c = new DateTime(".$to_date.");




 if($b>$c){

    //echo "a>c";

 }


 if($c>$b){

    //echo "c>b";

 }


 if($a>=$b and $a<=$c){

    echo "between";

 }







 ?>