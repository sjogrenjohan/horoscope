<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){

        if (isset($_SESSION["horoskop"])) {
            echo json_encode(array($_SESSION["horoskop"]));
        } else {
            echo json_encode(array());
        }
    }
?>