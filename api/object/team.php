<?php

	class Team
	{
		private $conn;
		private $table_name = "team";
		//get data from api CTFtime
		//object properties Event (thuộc tính đối tượng)
		public $idteam;
		public $teamname;
		public $points;
		public $idmember1;
		public $idmember2;
		public $idmember3;
		public $idmember4;
		public $idmember5;
		
		//constructor with $db as database connection
		public function __construct($db)
		{
			$this -> conn = $db;
		}

		//read all_team in database
		public function read_all()
		{
			//select all users
			$query = "SELECT * FROM team";
			//prepare query statement
			$stmt = $this ->conn ->prepare($query);
			$stmt->execute();
			return $stmt;
		}



		// create team
		public function create()
		{
		 
		    // query to insert record
		    $query = "INSERT INTO
		                " . $this->table_name . "
		            SET
		                teamname=:teamname, points=:points, idmember1=:idmember1, idmember2=:idmember2, idmember3=:idmember3, idmember4=:idmember4, idmember5=:idmember5 ";
		 
		    // prepare query
		    $stmt = $this->conn->prepare($query);
		 
		    // sanitize
		    $this->teamname=htmlspecialchars(strip_tags($this->teamname));
		    $this->points=htmlspecialchars(strip_tags($this->points));
		    $this->idmember1=htmlspecialchars(strip_tags($this->idmember1));
		    $this->idmember2=htmlspecialchars(strip_tags($this->idmember2));
		    $this->idmember3=htmlspecialchars(strip_tags($this->idmember3));
		    $this->idmember4=htmlspecialchars(strip_tags($this->idmember4));
		 	$this->idmember5=htmlspecialchars(strip_tags($this->idmember5));
		    // bind values
		    $stmt->bindParam(":teamname", $this->teamname);
		    $stmt->bindParam(":points", $this->points);
		    $stmt->bindParam(":idmember1", $this->idmember1);
		    $stmt->bindParam(":idmember2", $this->idmember2);
		    $stmt->bindParam(":idmember3", $this->idmember3);
		 	$stmt->bindParam(":idmember4", $this->idmember4);
		 	$stmt->bindParam(":idmember5", $this->idmember5);
		    // execute query
		    if($stmt->execute()){
		        return true;
		    }
		 
		    return false;
		     
		}

	}
?>
