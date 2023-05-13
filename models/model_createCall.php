<?php
    session_start();

    if(!isset($_SESSION['chatON']) AND isset($_SESSION['authToken'])) {

        unset($_SESSION['chatON']);

        require_once "../config/connect.php";

        $id_creatorFK = $_SESSION['authToken']['id'];

        $sqlDeleteCalls = "DELETE FROM calls WHERE id_creatorFK = $id_creatorFK";
        $conn->query($sqlDeleteCalls);

        $sqlCreateCall = "INSERT INTO calls(id_creatorFK, dateCreation, call_status) VALUES ($id_creatorFK, NOW(), 'pending')";
        $queryCreateCall = $conn->query($sqlCreateCall);

        if(!$queryCreateCall) {

            header("location: ../index.php");
            
        } else {

            $sqlGetCall = "SELECT * FROM calls WHERE id_creatorFK = $id_creatorFK AND call_status = 'pending'";
            $resultGetCall = $conn->query($sqlGetCall);

            if($resultGetCall) {

                $rowGetCall = $resultGetCall->fetch_assoc();

                $idMyCall = $rowGetCall['id'];
                $statusCall = $rowGetCall['call_status'];

                $_SESSION['chatON'] = [
                    "id" => $idMyCall,
                    "call_status" => $statusCall
                ];

                header('location: ../chat.php');

            } else {

                header('location: ../index.php');
                
            }
            
        }
        
    } else {
        
        header("location: ../index.php");
        
    }
?>