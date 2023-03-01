<?php






 ini_set('MAX_EXECUTION_TIME', 10000000);

 
 






 


















function add_contact($phn) {

    $host = 'localhost';
    $dbname = 'wsender';
    $username = 'root';
    $password = '';
    

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        //echo "Connected to $dbname at $host successfully.";
    } catch (PDOException $pe) {
        //die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
    
    







    $sql = "INSERT ignore INTO contacts(phn) VALUES (?)  ";
    $stmt= $conn->prepare($sql);
  $stmt->execute([$phn]);
  }

 
  
  
  
  
  




  
  
  
  
  
  
  
 

?>