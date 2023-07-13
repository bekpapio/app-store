<?php

include "db_connection.php";
if (isset($_POST['word'])) {
    $WORD = $_POST['word'];
    $sql = "SELECT * FROM `apps` WHERE `NAME` = '$WORD'";
    $apps = mysqli_query($con, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics/styles/style.css">
    <link rel="stylesheet" href="statics/styles/css/bootstrap.css">
    <title>Document</title>
</head>

<body style="background-color: rgb(27, 27, 27);">
    <?php include "header.php" ?>
    <div style="height: 700px;">
        <section class="bottom px-5 py-4 ">
            <div class='box-container'>
                <?php while ($app = mysqli_fetch_assoc($apps)) : ?>
                    <div class="box" style="box-shadow: 0 2px 3px black;transition: transform 1se;background-color: rgb(34, 31, 31);
                border-radius: 1rem;width: 325px;">
                        <img src="statics/images/<?php echo $app['IMAGE'] ?>" alt="" style="height: 200px;width:325px;object-fit: cover;padding: 
                    8px;border-radius: 1rem;">
                        <div class="content">
                            <h3 class="text-primary"><?php echo $app['NAME'] ?></h3>
                            <p>SIZE: <?php echo $app['SIZE'] ?> GB</p>
                        </div>
                        <a href="detail.php?id=<?php echo $app['ID'] ?>" class="btn btn-primary" style="margin-left:125px ;">VIEW</a>
                    </div>
                <?php endwhile;  ?>
            </div>

        </section>
    </div>
    <?php include "footer.php" ?>

    <script src="statics/styles/js/bootstrap.js"></script>
</body>

</html>