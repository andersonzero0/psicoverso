<?php

    session_start();

    require "../models/model_deleteCall.php";
    
    unset($_SESSION['chatON']); 
    header("location: ../index.php");

?>