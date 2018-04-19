<?php
try{
  $pdo = new PDO("mysql:host=localhost;dbname=cms","root","root123");
}catch(PDOException $e){
  exit("Database Error.");
}
?>
