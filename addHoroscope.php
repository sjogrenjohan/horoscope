<?php
    session_start();
    require "./saveSession.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
        if (isset($_POST["personNummer"]) && (!isset($_SESSION["horoskop"]))){
            
            $personNummer = new DateTime($_POST["personNummer"]);
            
            $month = $personNummer->format('m');
            $day = $personNummer->format('d');
            
            if (($month == 1 && 20 <= $day) || ($month == 2 && 18 >= $day)){
                $success = saveSession("Vattumannen");
                echo json_encode(array('Vattumannen'=>$success));
                die;
            }
            else if (($month == 2 && 19 <= $day) || ($month == 3 && 20 >= $day)){
                $success = saveSession("Fiskarna");
                echo json_encode(array('Fiskarna'=>$success));
                die;
            }
            else if (($month == 3 && 21 <= $day) || ($month == 4 && 19 >=$day)){
                $success = saveSession("Väduren");
                echo json_encode(array('Väduren'=>$success));
                die;
            }
            else if (($month == 4 && 20 <= $day) || ($month == 5 && 21 >= $day)){
                $success = saveSession("Oxen");
                echo json_encode(array('Oxen'=>$success));
                die;
            }
            else if (($month == 5 && 22 <= $day) || ($month == 6 && 21 >= $day)){
                saveSession("Tvillingarna");
                echo json_encode(array('Tvillingarna'=>$success));
                die;
            }
            else if (($month == 6 && 22 <= $day) || ($month == 7 && 22 >= $day)){
                $success = saveSession("Kräftan");
                echo json_encode(array('Kräftan'=>$success));
                die;
            }
            else if (($month == 7 && 23 <= $day) || ($month == 8 && 22 >= $day)){
                $success = saveSession("Lejonet");
                echo json_encode(array('Lejonet'=>$success));
                die;
            }
            else if (($month == 8 && 23 <= $day) || ($month == 9 && 22 >= $day)){
                $success = saveSession("Jungfrun");
                echo json_encode(array('Jungfrun'=>$success));
                die;
            }
            else if (($month == 9 && 23 <= $day) || ($month == 10 && 22 >= $day)){
                $success = saveSession("Vågen");
                echo json_encode(array('Vågen'=>$success));
                die;
            }
            else if (($month == 10 && 23 <= $day) || ($month == 11 && 22 >= $day)){
                $success = saveSession("Skorpionen");
                echo json_encode(array('Skorpionen'=>$success));
                die;
            }
            else if (($month == 11 && 23 <= $day) || ($month == 12 && 21 >= $day)){
                $success = saveSession("Skytten");
                echo json_encode(array('Skytten'=>$success));
                die;
            }
            else if (($month == 12 && 22 <= $day) || ($month == 1 && 19 >= $day)){
                $success = saveSession("Stenbocken");
                echo json_encode(array('Stenbocken'=>$success));
                die;
            }
            else {
                echo json_encode(array('success'=>false));
                die;
            } 
            
        }
        echo json_encode(array('success'=>false));
    }
        
?>