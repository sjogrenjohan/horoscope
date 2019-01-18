<?php
    parse_str(file_get_contents("php://input"), $_PUT);
    session_start();
    require "./horoscopeGenerator.php";

    if($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_PUT)) {
        if(isset($_SESSION["horoskop"]) && isset($_PUT["personNumber"])) {
            updateHoroscope($_PUT["personNumber"], true);
            echo json_encode(array("success"=>true));
        } else {
            echo json_encode(false);
        }
    } else {
        echo json_encode(array('success'=>false));
    }

?>