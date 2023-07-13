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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="statics/styles/detail.css"> -->
    <link rel="stylesheet" href="statics/styles/css/bootstrap.css">
    <title>Document</title>
</head>

<body style="background-color: rgb(27, 27, 27);
  opacity: 12;">
    <?php include "header.php" ?>
    <div>
        <section class="p-5">
            <div class="container card card-custom container p-5 mt-4 " style="background-color: rgb(27, 27, 27);
  opacity: 12;">
                <div class="row text-strat">
                    <div class="col-md">
                        <div class="box" style=" box-shadow: 0 2px 3px black;background-color: rgb(34, 31, 31);border-radius: 1rem;width: 325px;">
                            <img class="p-3" style=" height: 370px; width: 325px;border-radius: 2rem" src="statics/images/<?php echo $app['IMAGE'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="dscription">
                            <div class="text-white">
                                <h1 class="text-center text-primary"><b><?php echo $NAME ?></b></h1>
                                <div class="text-primary ">
                                    <h4><b>SIZE:</b></h4>
                                </div>
                                <p><?php echo $SIZE ?> GB</p>
                                <div class="text-primary ">
                                    <h4><b>CATEGORY:</b></h4>
                                </div>
                                <p><?php echo $CATEGORY ?></p>
                                <div class="text-primary ">
                                    <h4><b>REQUIRMENT:</b></h4>
                                </div>
                                <p><?php echo $REQUIRMENT ?></p>
                                <div class="text-primary">
                                    <h4><b>OS_SYSTEM:</b></h4>
                                </div>
                                <p><?php echo $OS_SYSTEM ?></p>
                                <div class="text-primary">
                                    <h4><b>DESCRIPTION:</b></h4>
                                </div>
                                <p><?php echo $DESCRIPTION ?></p>
                            </div>
                            <div class="download">
                                <button class=" btn btn-md btn-success">DOWNLOAD</button>
                            </div>

                        </div>

                    </div>

                </div>

        </section>
    </div>


    <?php include "footer.php" ?>
    <script src="statics/styles/js/bootstrap.js"></script>
</body>

</html>