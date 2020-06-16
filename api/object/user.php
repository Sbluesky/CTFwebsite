<?php

	class User
	{

		private $conn;
		private $table_name = "user_info";

		//object properties (thuộc tính đối tượng)
		public $id;
		public $name;
		public $username;
		//public $gender;
		//public $bithday;
		//public $country;

		//constructor with $db as database connection
		public function __construct($db)
		{
			$this -> conn = $db;
		}

		//read user
		public function read_all()
		{
			//select all users
			$query = "SELECT * FROM user_info";
			//prepare query statement
			$stmt = $this ->conn ->prepare($query);
			$stmt->execute();
			return $stmt;
		}

	}
?>
