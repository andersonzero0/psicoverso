<?php
    session_start();
    $idMyCall = $_GET['idMyCall'];

    require_once "../config/connect.php";

    $sqlWaitLog = "SELECT * FROM calls WHERE id = $idMyCall AND call_status = 'on'";
    $resultWaitLog = $conn->query($sqlWaitLog);

    if($resultWaitLog->num_rows > 0) {

        $rowWaitLog = $resultWaitLog->fetch_assoc();

        $_SESSION['chatON']['call_status'] = [
            "id" => $rowWaitLog['id'],
            "id_creatorFK" => $rowWaitLog['id_creatorFK'],
            "id_recieverFK" => $rowWaitLog['id_recieverFK'],
            "call_status" => $rowWaitLog['call_status']
        ];
        echo "true";
        

    } else {

        echo "false";
        
    }
?>