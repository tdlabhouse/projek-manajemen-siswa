<?php
 require 'init.php';
 $project_name = $_POST['project_name'];
 $project_level = $_POST['project_level'];
 $project_case = $_POST['project_case'];

 $query = $db->query("INSERT INTO project(project_name,project_level,project_case,allocation)VALUES('$project_name','$project_level','$project_case',0)");

 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }