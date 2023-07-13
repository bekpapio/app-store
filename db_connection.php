<?php
$con = new mysqli('localhost', 'root', '', 'app_store');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
