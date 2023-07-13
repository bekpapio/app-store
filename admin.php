<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="statics/styles/css/bootstrap.css">
    <title>admin</title>
</head>

<body style="background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7))">
    <?php include "header.php" ?>
    <div style="height: 900px;">
        <div class="global-container" style="width:100%;height:50%;display:flex;align-items:center;justify-content:center">
            <div class="card login-form m-5 p-5">
                <div class="card-body ">
                    <h1 class="card-title text-center text-primary p-2">ADMIN LOGIN PAGE</h1>
                    <div class="card-text p-2">
                        <form action="admin_validator.php" method="post">
                            <div class="form-group p-2 ">

                                <label for="name"><b>User Name</b></label>
                                <input type="text" class="form-control form-control-md p-2" id="name" name="name" required>
                            </div>
                            <div class="form-group p-2">
                                <label for="name "><b>Password</b></label>
                                <input type="password" class="form-control form-control-md p-2" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn-primary btn-block py-2 px-3 mx-2">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include "footer.php" ?>

    <script src="statics/styles/js/bootstrap.js"></script>
</body>

</html>