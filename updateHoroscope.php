<?php

    //parse_str(file_get_contents("php://input"), $_PUT);
    session_start();
    require "./horoscopeGenerator.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST) ){
        
        
        if(isset($_SESSION["horoskop"]) && isset($_POST["personNumber"])) {
            $result = updateHoroscope($_POST["personNumber"], true);
            echo json_encode(array("success"=>$result));
            
        } else {
            echo json_encode(array("success"=>"FAIL", "session"=>$_SESSION["horoskop"], "input"=>$_POST["personNumber"]));
        }
    } else {
        echo json_encode(array('success'=>false));
    }

?>