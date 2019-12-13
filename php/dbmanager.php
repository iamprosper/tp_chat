<?php  
	/**
	 * 
	 */
	
	//Class responsible of handling the database managment
	class Manager
	{

		//connexion manager
		public $mysqli = null;
		

		//constructor
		public function __construct()
		{

			//Inclusion of the database settings
			include_once 'dbconfig.php';

			//Connexion processing
			$this->connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
		}



		//Method in charge of setting application connection to the database
		public function connect($server,$user,$password,$db)
		{

			//Instanciation of the connexion manager
			$this->mysqli = new mysqli($server, $user, $password, $db);

		    //In case of error
		    if ($this->mysqli->connect_error) {
		        die('Erreur de connexion (' . $this->mysqli->connect_errno . ') '
		                . $this->mysqli->connect_error);
		        exit();
		    }else {
		    	echo "Server: $server\n User: $user\n Password: $password\n Database: $db\n";
		    }

		    //Setting the default charset
		    $this->mysqli->set_charset("utf8");
		    
		}


		//When the object has done his work he die with the connexion
		public function __destruct()
		{
			$this->deconnect();
		}

		//Method in charge of closing the connexion
		public function deconnect()
		{
    		$this->mysqli->close();
		}

		//Method in charge of running a single query
		public function runQuery($query)
		{
			$result = $this->mysqli->query($query);
			return array($result,$this->mysqli);
		}

		// Method in charge of running multiple queries
		public function runMultipleQueries($queries){
			$result = $this->mysqli->multi_query($queries);
			return result;
		}

		// Method in charge of clearing safely the message
		public function clearText($text)
		{
			
			$text = trim($text);
			return $this->mysqli->real_escape_string($text);
		}

		public function countRows()
		{
			return $this->mysqli->num_rows;
		}

		public function affectedRows()
		{
			// return "Mouse"
			return $this->mysqli->affected_rows;
		}

		public function requestInfo()
		{
			return $this->mysqli->info;
		}

		//Methode returning the last id of the object inserted
		public function lastInsertID()
		{
			return $this->mysqli->insert_id;
		}

		// Method in charge of counting the number total of fields of a table
		public function totalCount($fieldname,$tablemame)
		{
			$query = "SELECT count(".$fieldname.") FROM" . $tablemame."";
			$result = runQuery($query);
			$count = 0;
			
			if($result){
				while($row = mysqli_fetch_array($result)){
					$count = $row[0];
				}
			}
			return $count;
		}
	}
?>