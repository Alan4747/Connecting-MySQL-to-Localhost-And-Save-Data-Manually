<?php
$user = "root"; 
$password = "";
$db   = "Your database name";

$db = new PDO ('mysql:host=localhost;dbname=Your database name',"root","") or die ("Could not connect: " . mysql_error());
$result = $db->query("Select * from your database table name "); 
$values = $result->fetchAll();

#to take all recorded data from mysql
foreach($values as  $value) {  
    echo  '{ <br/>';

        // region where the data is obtained
        
        echo '"user_id":'.$value['user_id'].',<br/>';    
        echo '"username":"'.$value['username'].'",<br/>';
        echo '"password":"'.$value['password'].'",<br/>'; 
        echo '"name":"'.$value['name'].'",<br/>';         
        echo '"email":"'.$value['email'].'",<br/>';  

	echo  '},<br/> ';
}
	

#to manually save to the database
$db->query("Insert into users (user_id, username, password, name, email) values (user_id,'username', 'password','name','email')"); 


?>
