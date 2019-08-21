<?php
 require 'init.php';
 $std_name = $_POST['std_name'];
 $std_dept = $_POST['std_dept'];
 $std_no = $_POST['std_no'];
 $std_class = $_POST['std_class'];
 $date = date('Y-m-d');
 $project_id = $_POST['project_id'];

 $query = $db->query("INSERT INTO student(name,department,level,matric,date,project_id)VALUES('$std_name','$std_dept','$std_class','$std_no','$date','$project_id')");

 if($query){
 	$update = $db->query("UPDATE project SET allocation = 1 WHERE id = '$project_id' ");
 	echo 'true';

 }else{
 	echo 'false';
 }