<?php

include "db_connection.php";

$sql = "SELECT * FROM apps ";
$apps = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics/styles/css/bootstrap.css">
    <link rel="stylesheet" href="statics/styles/crud.css">
    <title>crud</title>
</head>

<body>
    <?php include "header.php" ?>

    <div class=table>
        <P><a href="create.php" class="btn btn-success btn-end m-4">ADD_APP</a></P>
        <table class="table" style="padding:500px; margin:40px">
            <tr>
                <th>APP</th>
                <th>CATAGORY</th>
                <th>SIZE</th>
                <th>REQUIRMENT</th>
            </tr>
            <?php while ($app = mysqli_fetch_assoc($apps)) : ?>
                <tr>
                    <td><?php echo $app['NAME'] ?></td>
                    <td><?php echo $app['CATEGORY'] ?></td>
                    <td><?php echo $app['SIZE'] ?></td>
                    <td><?php echo $app['REQUIRMENT'] ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $app['ID'] ?>" class="btn btn-primary">EDIT</a>
                        <form action="delete.php" method="POST" style="display:inline-block;">
                            <input type="hidden" name="ID" value="<?php echo $app['ID'] ?>">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>

                </tr>
            <?php endwhile; ?>

        </table>
    </div>
    <?php include "footer.php" ?>
    <script src="statics/styles/js/bootstrap.js"></script>


</body>

</html>