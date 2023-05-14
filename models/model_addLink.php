<?php
    require_once "../config/connect.php";

    $idMyCall = $_GET['idMyCall'];

    $link = $_GET['link'];

    $sql = "UPDATE call_links SET call_link = '$link' WHERE id_call = $idMyCall";

    $conn->query($sql);
?>