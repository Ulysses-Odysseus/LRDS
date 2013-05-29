<?php
// $user = 'root';
// $pass = 'root';

// try {
//     $con = new PDO('mysql:host=localhost;dbname=lrds_news;charset=utf8', $user, $pass);
//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     echo 'ERROR: ' . $e->getMessage();
// }

$user = 'root';
$pass = 'root';

$con = new PDO('mysql:host=localhost;dbname=lrds_news;charset=utf8', $user, $pass);

?>