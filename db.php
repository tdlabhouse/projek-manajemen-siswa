<?php
try{
  $db = new PDO('mysql:host=localhost;dbname=allocate','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die('<h4 style="color: #e4e4e4">Error connecting to the database. Please check app init file</h4>');
}
