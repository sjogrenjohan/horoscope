<?php

    function saveSession($horoskop, $force) {
        
        if(!isset($_SESSION["horoskop"]) || $force){
            $_SESSION["horoskop"] = $horoskop;
            return "Success";
        }
        return "Fail";
    }

?>