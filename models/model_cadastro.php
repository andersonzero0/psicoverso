<?php
session_start();

if(isset($_SESSION['nome'])) {

    require_once "../config/connect.php";

    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];

    $sqlVerifUser = "SELECT * FROM users_tb WHERE email = '$email'";

    $resultVerifUser = $conn->query($sqlVerifUser);
    
    if($resultVerifUser->num_rows > 0) {

        session_destroy();
        header("location: ../cadastro.php");
        
    } else {

        $sqlCadastro = "INSERT INTO users_tb(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $resultCadastro = $conn->query($sqlCadastro);

        if(!$resultCadastro) {

            session_destroy();
            header('location: ../cadastro.php');
            
        } else {

            session_destroy();
            header("location: ../login.php");
            
        }
        
    }
    
}
?>