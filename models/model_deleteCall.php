<?php

require_once "../config/connect.php";
$idMyCall = $_SESSION['chatON']['id'];

$sqlDeleteCall = "DELETE FROM calls WHERE id = $idMyCall";
$conn->query($sqlDeleteCall);
?>