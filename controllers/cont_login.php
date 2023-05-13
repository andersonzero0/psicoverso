<?php

    session_start();
    session_destroy();

    if(isset($_POST['btnSubmit'])) {
        session_start();

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha'];

        header('location: ../models/model_login.php');
        
    } else {

        header("location: ../index.php");
        
    }
?>