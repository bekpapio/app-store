<?php

include "db_connection.php";
$ID = $_GET['id'];
if (!$ID) {
    header('Location:crud.php');
    exit;
}
$sql = "SELECT * FROM apps WHERE ID=$ID ";
$apps = $con->query($sql);
$app = mysqli_fetch_assoc($apps);
$NAME = $app['NAME'];
// echo $NAME;
$SIZE = $app['SIZE'];
$CATEGORY = $app['CATEGORY'];
$REQUIRMENT = $app['REQUIRMENT'];
$OS_SYSTEM = $app['OS_SYSTEM'];
$DESCRIPTION = $app['DESCRIPTION'];


if (isset($_POST['submit'])) {
    $NAME = $_POST['NAME'];
    $SIZE = $_POST['SIZE'];
    $CATEGORY = $_POST['CATEGORY'];
    $REQUIRMENT = $_POST['REQUIRMENT'];
    $OS_SYSTEM = $_POST['OS_SYSTEM'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    $IMAGE = $_FILES['IMAGE']['name'];
    $TMP_IMAGE = $_FILES['IMAGE']['tmp_name'];
    $DATE = date('Y-m-d H:i:s');
    $sql = "UPDATE `apps` SET `NAME` = '$NAME', `SIZE` = '$SIZE', `CATEGORY` = '$CATEGORY', `REQUIRMENT` = '$REQUIRMENT', `OS_SYSTEM` = '$OS_SYSTEM', `DESCRIPTION` = '$DESCRIPTION', `IMAGE` = '$IMAGE'  WHERE `apps`.`ID` = $ID";
    $result = mysqli_query($con, $sql);
    if ($result === true) {
        // echo 'data updated';
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
        <a href=" crud.php" class="btn btn-warning m-3">ADMIN PAGE</a>

        <form action="" method="POST" enctype="multipart/form-data" class="m-5">
            <div class="form-group m-2">
                <label for="name"><b>APP NAME</b></label><br>
                <input type="text" value="<?php echo $NAME ?>" name="NAME" required>
            </div>
            <div class="form-group m-2 ">
                <label for="name"><b>SIZE</b> </label><br>
                <input type="text" value="<?php echo $SIZE ?>" name="SIZE">
            </div>
            <div class="form-group m-2">
                <label for="name"><b>CATEGORY</b></label><br>
                <input type="text" value="<?php echo $CATEGORY ?>" name="CATEGORY">
            </div>
            <div class="form-group m-2">
                <label for="name"><b>REQUIRMENT</b></label><br>
                <input type="text" value="<?php echo $REQUIRMENT ?>" name="REQUIRMENT">
            </div>
            <div class="form-group m-2">
                <label for="name"><b>OS_SYSTEM</b></label><br>
                <input type="text" value="<?php echo $OS_SYSTEM ?>" name="OS_SYSTEM">
            </div>
            <div class="form-group m-2">
                <label for="name"><b>DESCRIPTION</b></label><br>
                <input type="text" value="<?php echo $DESCRIPTION ?>" name="DESCRIPTION">
            </div>
            <div class="form-group m-2">
                <label for="name"><b>IMAGE</b></label><br>
                <input type="file" name="IMAGE">
            </div>
            <div class="form-group m-2">
                <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
            </div>


    </div>
    <script src="statics/styles/js/bootstrap.js"></script>
    <?php include "footer.php" ?>
    </div>

</body>

</html>