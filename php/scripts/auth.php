<?php
    // include '../connexion.php';
    include '../dbmanager.php';

    $login = null;
    $query_info = null;
    $result = null;

    $dbmanager = new Manager();

    if ( 
    	!empty($_POST) 
    	&& isset($_POST["login"]) 
    	&& isset($_POST["password"]) 
    	&& !empty($_POST["login"]) 
    	&& !empty($_POST["password"]) 
    )
 	{
		
		$login = $_POST["login"];
		$password = $_POST["password"];


    	$result = $dbmanager->authenticate($login,$password);
        // $num_rows = $result[0];

    	// $result = $dbmanager->affectedRows();
	}

	else {
		$query_result = 0;
	}


    // if($query_result != 0 ){
    // }
    // var_dump($result);
    if ($result) {
        var_dump($result);
    	session_start();
		$_SESSION["login"] = $_POST["login"];
    }
    else{
        echo $result;
    }
?>