<?php
    session_start();

    if(isset($_SESSION['email'])) {

        require_once "../config/connect.php";

        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];

        $sqlLogin = "SELECT * FROM users_tb WHERE email = '$email' AND senha = '$senha'";

        $resultLogin = $conn->query($sqlLogin);

        if($resultLogin->num_rows == 1) {

            $rowLogin = $resultLogin->fetch_assoc();

            $_SESSION['authToken'] = [
                "id" => $rowLogin['id'],
                "nome" => $rowLogin['nome'],
                "email" => $rowLogin['email']
            ];

            header("location: ../index.php");
            
        } else {

            header('location: ../login.php');
            
        }
        
    } else {

        header('location: ../index.php');
        
    }
?>