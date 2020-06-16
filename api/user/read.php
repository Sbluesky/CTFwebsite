<?php
 //The code below shows headers about WHO can read this file and which type of content it will return
//In case, read.php file can read by anyone *
//return a data in JSON format
	
	//required header
	header ("Access-Control-Allow-Origin: *");
	header ("Content-Type: application/json; charset =UTF-8");

	//include database and object file
	include_once '../config/database.php';
	include_once '../object/user.php';

	//khởi tạo 
	$database = new Database();
	$db = $database -> getConnection();

	$user = new User($db);

//used read() method of User class to read data from database.
//$num: check if there are records found
//if $num > 0: add record to the $user_arr, set 200 OK and reponse to user in JSON format
	$stmt = $user -> read_all();
	$num = $stmt ->rowCount();

	if($num>0)
	{
		$user_arr = array();
		$user_arr["records"] = array();

		//fetch() is faster than fetchAll()
		while ($row = $stmt -> fetch(PDO::FETCH_ASSOC))
		{
			//trích xuất row
			extract($row);

			$user_item=array(
				"id" => $id,
				"name" => $name,
				"gmail" => $gmail;
				//"gender" => $gender;
				//"bithday" => $bithday;
				//"country" => $country;
			);

			array_push($user_arr["records"], $user_item)
		}

		http_response_code(200);

		//show user in JSON
		echo json_encode($user_arr);
	}
	else
	{
		http_response_code(404);
		echo json_encode(
			array('message' => "No users found." )
		);
	}


?>