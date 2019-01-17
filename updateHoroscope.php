<?php
    parse_str(file_get_contents("php://input"), $_PUT);
    session_start();

    require "./addHoroscope.php";

    if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        
        if(isset($_SESSION["horoskop"])) {
            session_unset();
            $_SESSION["horoskop"] = $personNummer;
        }
    }

?>