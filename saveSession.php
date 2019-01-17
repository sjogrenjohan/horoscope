<?php

    function saveSession($horoskop) {
        $_SESSION["horoskop"] = $horoskop;

        if(isset($_SESSION["horoskop"])){
            return true;
        } else {
            return false; 
        }
    }

?>