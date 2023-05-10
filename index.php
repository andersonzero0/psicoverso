<?php
    session_start();

    if (isset($_SESSION['authToken'])) {

        include "views/painel.php";

    } else {

        include "views/home.php";
        
    }
?>