<?php
    session_start();
    require "./addHoroscope.php";

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){

        if (isset($_SESSION["horoskop"])) {
            echo json_encode(array($_SESSION["horoskop"]));
        }
    }
?>