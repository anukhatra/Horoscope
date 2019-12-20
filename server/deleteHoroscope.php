<?php
session_start();
require "./horoscopeList.php";
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
        unset($_SESSION["horoscope"]);
        echo json_encode(true);

};
?>