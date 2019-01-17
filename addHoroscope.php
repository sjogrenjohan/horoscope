<?php
    session_start();
    require "./horoscopeGenerator.php";
    require "./saveSession.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
        if (isset($_POST["personNummer"]) && (!isset($_SESSION["horoskop"]))){ 
        $personNummer = new DateTime($_POST["personNummer"]);
        $month = $personNummer->format('m');
        $day = $personNummer->format('d');    
        getHoroscope($month, $day);
        }
        echo json_encode(array('success'=>false));
    }
        
?>