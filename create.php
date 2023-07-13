<?php

include "db_connection.php";
if (isset($_POST['submit'])) {
    $NAME = $_POST['NAME'];
    $SIZE = $_POST['SIZE'];
    $CATEGORY = $_POST['CATEGORY'];
    $REQUIRMENT = $_POST['REQUIRMENT'];
    $OS_SYSTEM = $_POST['OS_SYSTEM'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    $DATE = date('Y-m-d H:i:s');
    $IMAGE = $_FILES['IMAGE']['name'];
    $TMP_IMAGE = $_FILES['IMAGE']['tmp_name'];
    $sql = "INSERT INTO `apps` (`ID`, `NAME`, `SIZE`, `CATEGORY`, `REQUIRMENT`, `OS_SYSTEM`, `DESCRIPTION`, `IMAGE`, `CREATED_DATE`) VALUES (NULL, '$NAME','$SIZE','$CATEGORY','$REQUIRMENT', '$OS_SYSTEM', '$DESCRIPTION','$IMAGE', '$DATE')";
    $result = mysqli_query($con, $sql);
    if ($result === true) {
        // echo 'data saved';
        move_uploaded_file($TMP_IMAGE, "statics/images/$IMAGE");
    } else {
        // echo 'failed';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics/styles/css/bootstrap.css">
    <title>create_app</title>
</head>

<body>
    <div style="height: 800px;">
        <?php include "header.php" ?>
        <a href="crud.php" class="btn btn-warning m-3">ADMIN PAGE</a>
        <form method="POST" enctype="multipart/form-data" class="m-5">
            <div class="form-group m-2">
                <label for="name"><b>APP NAME</b></label><br>
                <input type="text" placeholder="name" name="NAME" required>
            </div>
            <div class="form-group m-2 ">
                <label for="name"><b>SIZE</b> </label><br>
                <input type="text" placeholder="size" name="SIZE">
            </div>
            <div class="form-group m-2">
                <label for="name"><b>CATEGORY</b></label><br>
                <input type="text" placeholder="category" name="CATEGORY">
            </div>
            <div class="form-group m-2">
                <label for="name"><b>REQUIRMENT</b></label><br>
                <input type="text" placeholder="requirment" name="REQUIRMENT">
            </div>
            <div class="form-group m-2">
                <label for="name"><b>OS_SYSTEM</b></label><br>
                <input type="text" placeholder="os_system" name="OS_SYSTEM">
            </div>
            <div class="form-group m-2">
                <label for="name"><b>DESCRIPTION</b></label><br>
                <input type="textarea" placeholder="description" name="DESCRIPTION">
            </div>
            <div class="form-group m-2">
                <label for="name"><b>IMAGE</b></label><br>
                <input type="file" name="IMAGE" id="IMAGE">
            </div>
            <div class="form-group m-2">
                <button type="submit" name="submit" class="btn btn-primary" value="upload image">ADD</button>
            </div>


    </div>
    <?php include "footer.php" ?>
    </div>


    <script src="statics/styles/js/bootstrap.js"></script>
</body>

</html>