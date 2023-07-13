<?php
include "db_connection.php";
$ID = $_POST['ID'] ?? null;

if (!$ID) {
    header('Location:index.php');
    exit;
}

$sql = "DELETE FROM apps WHERE ID=$ID";
$result = mysqli_query($con, $sql);

header("Location:crud.php");
