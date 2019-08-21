<?php
session_start();
include 'db.php';

if(isset($_POST['action']) == 'yes'){

	$query = $db->query("SELECT FLOOR(RAND() * COUNT(*)) AS `offset` FROM `project`");
	$rows = $query->fetchAll(PDO::FETCH_OBJ);
	foreach($rows as $row){
	   $offset = $row->offset;

	   $run = $db->query("SELECT * FROM `project` WHERE allocation = 0 LIMIT $offset, 1");
	   $result = $run->fetchAll(PDO::FETCH_OBJ);

	   if($result){
	   	 echo json_encode($result);
	   	}else{
	   	  $message = array('project_name:' => 'No project, Please create more project.','project_case:' => 'No project available');
	   	  echo json_encode($message);
	   	}

	  
	}

}