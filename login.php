<?php
    require 'init.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = $db->query("SELECT * from auth WHERE username = '$username' AND password = '$password' ");

	if($query->rowCount() > 0){
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		foreach($result as $data){
           $id = $data->id;
           $user = $data->username;

           $_SESSION['id'] = $id;
           $_SESSION['user'] = $user;
           
		}
        echo 'true';
	}else{
        echo 'false';
	}
