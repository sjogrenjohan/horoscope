<?php

require "./saveSession.php";

function updateHoroscope($personNumber, $force) {

    $dateOfBirth = new DateTime($personNumber);   
    $month = $dateOfBirth->format('m');
    $day = $dateOfBirth->format('d');
    
    if (($month == 1 && 20 <= $day) || ($month == 2 && 18 >= $day)){
        saveSession("Vattumannen", $force);
        die;
    }
    else if (($month == 2 && 19 <= $day) || ($month == 3 && 20 >= $day)){
        saveSession("Fiskarna", $force);
        die;
    }
    else if (($month == 3 && 21 <= $day) || ($month == 4 && 19 >=$day)){
        saveSession("Väduren", $force);
        die;
    }
    else if (($month == 4 && 20 <= $day) || ($month == 5 && 21 >= $day)){
        saveSession("Oxen", $force);
        die;
    }
    else if (($month == 5 && 22 <= $day) || ($month == 6 && 21 >= $day)){
        saveSession("Tvillingarna", $force);
        die;
    }
    else if (($month == 6 && 22 <= $day) || ($month == 7 && 22 >= $day)){
        saveSession("Kräftan", $force);
        die;
    }
    else if (($month == 7 && 23 <= $day) || ($month == 8 && 22 >= $day)){
        saveSession("Lejonet", $force);
        die;
    }
    else if (($month == 8 && 23 <= $day) || ($month == 9 && 22 >= $day)){
        saveSession("Jungfrun", $force);
        die;
    }
    else if (($month == 9 && 23 <= $day) || ($month == 10 && 22 >= $day)){
        saveSession("Vågen", $force);
        die;
    }
    else if (($month == 10 && 23 <= $day) || ($month == 11 && 22 >= $day)){
        saveSession("Skorpionen", $force);
        die;
    }
    else if (($month == 11 && 23 <= $day) || ($month == 12 && 21 >= $day)){
        saveSession("Skytten", $force);
        die;
    }
    else if (($month == 12 && 22 <= $day) || ($month == 1 && 19 >= $day)){
        saveSession("Stenbocken", $force);
        die;
    }
}

    
?>