<?php

session_start();

include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = validate($_POST["name"]);
    $password = validate($_POST["password"]);

    if (empty($name)) {

        include "admin.php";
    } elseif (empty($password)) {
        include "admin.php";
    } else {
        $sql = "SELECT *FROM admins WHERE USER_NAME='$name' AND password= '$password'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row["USER_NAME"] == $name && $row["PASSWORD"] === $password) {

                include "crud.php";
            }
        } else {
            include "error.php";
            exit();
        }
    }
}
