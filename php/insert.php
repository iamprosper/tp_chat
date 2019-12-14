<?php 
	
	include 'dbmanager.php';
	// include 'connexion.php';
	
	$dbmanager = new Manager();
	
	$message = $dbmanager->clearText($_POST['txtmessage']);
	
	$date_message = date('Y/m/d');
	
	$lu = false;
	
	$supprime = false;
	
	$user_id = 1;
	
	$query = "INSERT INTO messages(message,lu,date_message,supprime,user_id) VALUES('$message','$lu','$date_message','$supprime','$user_id')";
	
	$u_query = "INSERT INTO chat_users(login,user_password,connected) VALUES('lolo','lolo_pass','$date_message')";
	
	$other_query = "SELECT * FROM chat_users WHERE login='dela' AND user_password='cruz'";
	
	$result = $dbmanager->runQuery($query);
	// $dbmanager->runQuery($query);


	$query_result = $result[0];

	$num_rows = $result[1];

	$affected_rows = $result[2];

	$requestInfo = $result[3];

	$requestId = $result[4];

	
	// $ms = $result[1];
	// $result = $dbmanager->mysqli->affected_rows;
	// $result = $dbmanager->mysqli->info;	
	// $id = $dbmanager->lastInsertID();
	echo "Message : $message  \n Row affected: $affected_rows\nMysql info: $requestInfo";
	
	// include 'deconnexion.php';
?>