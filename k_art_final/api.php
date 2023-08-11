<?php
include "config/connection.php";

  $query="SELECT * from department ";
 $query_run=mysqli_query($con,$query);

 if(mysqli_num_rows($query_run)> 0){

while($row = mysqli_fetch_assoc($query_run)) {
echo $row["department_id"];

}

}
 
?>