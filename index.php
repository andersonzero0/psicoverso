<?php
    session_start();

    if(isset($_SESSION['authToken'])) {

        if($_SESSION['authToken'] == "admin") {

            include "views/admin_view.php";
            
        } else if($_SESSION['authToken'] == "client") {

            include "views/client_view.php";

        } else if($_SESSION['authToken'] == "client_prof") {

            include "views/client_prof_view.php";
            
        } else {

            echo "error 000";
            
        }

    } else {

        include "views/home.php";
        
    }
?>