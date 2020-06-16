<?php
 //The code below shows headers about WHO can read this file and which type of content it will return
//In case, read.php file can read by anyone *
//return a data in JSON format
	
	//required header
	header ("Access-Control-Allow-Origin: *");
	header ("Content-Type: application/json; charset =UTF-8");

	//include database and object file
	include_once '../config/database.php';
	include_once '../object/team.php';

	//khởi tạo 
	$database = new Database();
	$db = $database -> getConnection();

	$team = new Team($db);


//$num: check if there are records found
//if $num > 0: add record to the $team_arr, set 200 OK and reponse to user in JSON format
	$stmt = $team -> read_all();
	$num = $stmt ->rowCount();

	if($num>0)
	{
		$team_arr = array();
		$team_arr["records"] = array();

		//fetch() is faster than fetchAll()
		while ($row = $stmt -> fetch(PDO::FETCH_ASSOC))
		{
			//trích xuất row
			extract($row);

			$team_item=array
			(
				"idteam" => $idteam,
				"teamname" => $teamname,
				"points" => $points,
				"idmember1" => $idmember1,
				"idmember2" => $idmember2,
				"idmember3" => $idmember3,
				"idmember4" => $idmember4,
				"idmember5" => $idmember5,
				
			);

			array_push($team_arr["records"], $team_item);
		}

		http_response_code(200);

		//show user in JSON
		echo json_encode($team_arr);
	}
	else
	{
		http_response_code(404);
		echo json_encode(
			array('message' => "No team found." )
		);
	}


?>