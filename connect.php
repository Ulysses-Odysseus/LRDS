<?php

//Setup User and Password
$user = 'fatcatadmin';
$pass = 'F@TC@T';


//Attempt a connection to DB and catch the error if any
try {

	$con = new PDO('mysql:host=mysql.fatcatonline.net;dbname=lrds;charset=utf8', $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

    echo 'ERROR: ' . $e->getMessage();
    
}
?>