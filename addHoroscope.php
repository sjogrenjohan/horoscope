<?php
    session_start();
    require "./horoscopeGenerator.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
        if (isset($_POST["personNumber"]) && (!isset($_SESSION["horoskop"]))){ 
            updateHoroscope($_POST["personNumber"], false);
            echo json_encode(array('success'=>true));
        } else {
            echo json_encode(array('success'=>false));
        }
    } else {
        echo json_encode(array('success'=>false));
    }
        
?>