<?php
    session_start();

    if(isset($_SESSION['chatON'])) {

        if($_SESSION['chatON']['call_status'] == 'pending') {

            require "views/loading.php";
            
        } else if($_SESSION['chatON']['call_status'] == 'on') {

            require "views/openChat.php";
            
        } else {
            
            require "views/closedChat.php";
            
        }

    } else {

        header("location: index.php");
        
    }
?>