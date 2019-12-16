<?php 
	include 'dbmanager.php';

	//dbmanager responsible of the connexion with the database
	$dbmanager = new Manager();


	//We fetch the users in the database
	$result = $dbmanager->get_users();

	//Check if the request passed
	if ($result) {

		//Getting the information about our query
		$query_result = $result[0];
		
		//Checking multiple rows affected by the request
		if($query_result->num_rows > 1){

			//list of all the rows
			$rows = array();

			//index of each row in the list of rows
			$i = 0;


			// We fetch the rows selected
			while ($row = mysqli_fetch_assoc($query_result) ){
				
				//list of one's row data
				$cleaned_row = array();

				// We push datas of a row in a list
				array_push($cleaned_row, $row["user_id"], $row["login"], $row["user_password"], $row["connected"]); 

				// We push a row in the list of the rows
				$rows[$i] = $cleaned_row;

				//We update the index
				$i++;
			}

			//We print list of the rows
			var_dump($rows);
		}
		// var_dump($result);
	}else{
		echo $result;
	}
?>