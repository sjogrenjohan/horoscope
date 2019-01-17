<?php

function getHoroscope($month, $day) {
    
    if (($month == 1 && 20 <= $day) || ($month == 2 && 18 >= $day)){
        $success = saveSession("Vattumannen");
        return array('Vattumannen'=>$success);
        die;
    }
    else if (($month == 2 && 19 <= $day) || ($month == 3 && 20 >= $day)){
        $success = saveSession("Fiskarna");
        return array('Fiskarna'=>$success);
        die;
    }
    else if (($month == 3 && 21 <= $day) || ($month == 4 && 19 >=$day)){
        $success = saveSession("Väduren");
        return array('Väduren'=>$success);
        die;
    }
    else if (($month == 4 && 20 <= $day) || ($month == 5 && 21 >= $day)){
        $success = saveSession("Oxen");
        return array('Oxen'=>$success);
        die;
    }
    else if (($month == 5 && 22 <= $day) || ($month == 6 && 21 >= $day)){
        saveSession("Tvillingarna");
        return array('Tvillingarna'=>$success);
        die;
    }
    else if (($month == 6 && 22 <= $day) || ($month == 7 && 22 >= $day)){
        $success = saveSession("Kräftan");
        return array('Kräftan'=>$success);
        die;
    }
    else if (($month == 7 && 23 <= $day) || ($month == 8 && 22 >= $day)){
        $success = saveSession("Lejonet");
        return array('Lejonet'=>$success);
        die;
    }
    else if (($month == 8 && 23 <= $day) || ($month == 9 && 22 >= $day)){
        $success = saveSession("Jungfrun");
        return array('Jungfrun'=>$success);
        die;
    }
    else if (($month == 9 && 23 <= $day) || ($month == 10 && 22 >= $day)){
        $success = saveSession("Vågen");
        return array('Vågen'=>$success);
        die;
    }
    else if (($month == 10 && 23 <= $day) || ($month == 11 && 22 >= $day)){
        $success = saveSession("Skorpionen");
        return array('Skorpionen'=>$success);
        die;
    }
    else if (($month == 11 && 23 <= $day) || ($month == 12 && 21 >= $day)){
        $success = saveSession("Skytten");
        return array('Skytten'=>$success);
        die;
    }
    else if (($month == 12 && 22 <= $day) || ($month == 1 && 19 >= $day)){
        $success = saveSession("Stenbocken");
        return array('Stenbocken'=>$success);
        die;
    }
    else {
        return array('success'=>false);
        die;
    }
}
    
    ?>