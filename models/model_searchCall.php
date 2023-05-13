<?php
    session_start();

    unset($_SESSION['chatON']);

    require_once "../config/connect.php";

    $sqlSearchCall = "SELECT * FROM calls WHERE call_status = 'pending'";
    $resultSearchCall = $conn->query($sqlSearchCall);

    if($resultSearchCall->num_rows > 0){

        $idReceiver = $_SESSION['authToken']['id'];

        $rowSearchCall = $resultSearchCall->fetch_assoc();

        $idCall = $rowSearchCall['id'];

        $sqlSetCall = "UPDATE calls SET call_status = 'on', id_recieverFK = $idReceiver WHERE id = $idCall";

        $resultSetCall = $conn->query($sqlSetCall);

        if($resultSetCall) {
            $_SESSION['chatON'] = [
                "id" => $rowSearchCall['id'],
                "id_creatorFK" => $rowSearchCall['id_creatorFK'],
                "id_recieverFK" => $idReceiver,
                "call_status" => 'on'
            ];

            echo "true";
            
        } else {

            echo "false";
            
        }

    } else {

        echo "false";
        
    }
?>