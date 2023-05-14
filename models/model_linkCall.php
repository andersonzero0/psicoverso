<?php
    require_once "../config/connect.php";

    $idMyCall = $_GET['idMyCall'];

    $sql = "SELECT * FROM call_links WHERE id_call = $idMyCall";

    $result = $conn->query($sql);

    if(!$result->num_rows > 0) {

        echo "false";
        
    } else {

        $row = $result->fetch_assoc();
        $link = $row['call_link'];

        echo $link;
        
    }
?>