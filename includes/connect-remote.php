<?php
 $dsn = "mysql:host=localhost;dbname=zkzrrgus_portfolio;charset=utf8mb4";
 try {
 $connect = new PDO($dsn, 'zkzrrgus_general', 'guzwa4-Bujnuz-feqraz');
 } catch (Exception $e) {
   error_log($e->getMessage());
   exit('unable to connect');
 }
?>