<?php

//required headers
header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/database.php';
 
// instantiate product object
include_once '../object/team.php';
 
$database = new Database();
$db = $database->getConnection();
 
$team = new Team($db);
$teamname = $_POST["team_name"];
$points = $_POST["team_points"];
$idmember1 = $_POST["userid"];
$idmember2 = -1;
$idmember3 = -1;
$idmember4 = -1;
$idmember5 = -1;

//$team_string = '{"teamname":"'.$teamname.'", "points":"'.$points.'", "idmember1":'.$idmember1.', "idmember2" : -1, "idmember3": -1, "idmember4": -1, "idmember5": -1}';

$data=array
            (
                "teamname" => $teamname,
                "points" => $points,
                "idmember1" => $idmember1,
                "idmember2" => $idmember2,
                "idmember3" => $idmember3,
                "idmember4" => $idmember4,
                "idmember5" => $idmember5,
                
            );


//$infoteam = json_encode($team_string);
 
// get posted data
//$data = json_decode($infoteam);
//print_r($data);
// make sure data is not empty 
if(
    !empty($data['teamname']) &&
    !empty($data['points']) &&
    !empty($data['idmember1']) &&
    !empty($data['idmember2']) &&
    !empty($data['idmember3']) &&
    !empty($data['idmember4']) &&
    !empty($data['idmember5'])
){
 
    // set team property values
    $team->teamname = $data['teamname'];
    $team->points = $data['points'];
    $team->idmember1 = $data['idmember1'];
    $team->idmember2 = $data['idmember2'];
    $team->idmember3 = $data['idmember3'];
    $team->idmember4 = $data['idmember4'];
    $team->idmember5 = $data['idmember5'];
    //$product->created = date('Y-m-d H:i:s');
 

    // create the team
    if($team->create()){
 
        // set response code - 201 created
        http_response_code(201);
        
        // tell the user
        //echo json_encode(array("message" => "Team was created."));
        echo "Team was created!";
        echo "<!doctype html><html> <body> <a href='../../team_action/teampage.php'>Click here to continue! </a> </body></html>";
        //header('Location:../../team_action/teampage.php');
    }
 
    // if unable to create the team, tell the user
    else{
 
        // set response code - 503 service unavailable
        http_response_code(503);
 
        // tell the user
        echo json_encode(array("message" => "Unable to create team."));
    }
}
 
// tell the user data is incomplete
else{
 
    // set response code - 400 bad request
    http_response_code(400);
 
    // tell the user
    echo json_encode(array("message" => "Unable to create team. Data is incomplete."));
}

?>