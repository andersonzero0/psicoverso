<?php
    session_start();

    unset($_SESSION['chatON']);

    require_once "../config/connect.php";

    $sqlSearchCall = "SELECT * FROM calls WHERE call_status = 'pending'";
    $resultSearchCall = $conn->query($sqlSearchCall);

    if($resultSearchCall->num_rows > 0){

        $rowSearchCall = $resultSearchCall->fetch_assoc();

        $_SESSION['chatON'] = [
            "id" => $rowSearchCall['id'],
            "id_creatorFK" => $rowSearchCall['id_creatorFK'],
            "id_recieverFK" => $rowSearchCall['id_creatorFK'],
            "call_status" => $rowSearchCall['call_status']
        ];

        $idCall = $rowSearchCall['id'];

        $sqlSetCall = "INSERT INTO calls (id_recieverFK) VALUES ($idCall);
        UPDATE calls SET call_status = 'on' WHERE id = $idCall";

        echo "true";

    } else {

        echo "false";
        
    }
?>