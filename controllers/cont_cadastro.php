<?php
    if(isset($_POST['btnSubmit'])) {
        session_start();

        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha'];

        header('location: ../models/model_cadastro.php');
        
    } else {

        header("location: ../index.php");
        
    }
?>