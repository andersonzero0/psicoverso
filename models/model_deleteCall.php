<?php
session_start();

require_once "../config/connect.php";
$idMyCall = $_SESSION['chatON']['idMyCall'];

$sqlDeleteCall = "DELETE FROM calls WHERE id = $idMyCall";
$conn->query($sqlDeleteCall);
?>