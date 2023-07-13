<?php
include "db_connection.php";
$sql = "SELECT * FROM `apps` ORDER BY `apps`.`ID` DESC  ";
// $apps = $con->query($sql);
$apps = mysqli_query($con, $sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics/styles/style.css">
    <link rel="stylesheet" href="statics/styles/css/bootstrap.css">
    <title>A2B</title>
</head>

<body>
    <?php include "header.php" ?>
    <?php include "slide.php" ?>

    <section class="bottom px-5 py-4 ">
        <div class='box-container'>
            <?php while ($app = mysqli_fetch_assoc($apps)) : ?>
                <div class="box" style="box-shadow: 0 2px 3px black;transition: transform 1se;background-color: rgb(34, 31, 31);
                border-radius: 1rem;width: 325px;">
                    <img src="statics/images/<?php echo $app['IMAGE'] ?>" alt="" style="height: 200px;width:325px;object-fit: cover;padding: 
                    8px;border-radius: 1rem;">
                    <div class="content">
                        <h3 class="text-primary"><b><?php echo $app['NAME'] ?></b></h3>
                        <p><b>SIZE: <?php echo $app['SIZE'] ?> GB</p></b>
                    </div>
                    <!-- <form action="detail.php?id=<?php echo $app['ID'] ?>" method="POST" style="display:inline-block;">
                        <input type="hidden" name="ID" value="<?php echo $app['ID'] ?>">
                        <button type="submit" class="btn btn-danger">VIEW</button>
                    </form> -->
                    <a href="detail.php?id=<?php echo $app['ID'] ?>" class="btn btn-primary mb-2" style="margin-left:125px ;"><b>VIEW</b></a>
                </div>
            <?php endwhile;  ?>
        </div>

    </section>
    <?php include "footer.php" ?>
    <script src="statics/styles/js/bootstrap.js"></script>
</body>

</html>