<?php
session_start();
require "./horoscopeList.php";

if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(isset($_SESSION["horoscope"])){
           
            $horoscope = unserialize($_SESSION["horoscope"]);   
            echo json_encode($horoscope);     
            $_SESSION["horoscope"];
        } else {
            echo json_encode(false);     
        }
    }
}
?>