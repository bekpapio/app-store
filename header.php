<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics/styles/style.css">
    <link rel="stylesheet" href="statics/styles/css/bootstrap.css">
    <script src="statics/styles/js/bootstrap.js"></script>
    <title>A2B</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <h2><B><a href="index.php" class="navbar-brand">A <span class="text-success">2B</span></a></B></h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin.php" class="nav-link">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">HELP</a>
                    </li>
                    <li class="nav-item input-group p-1">
                        <form action="search.php" method="POST">
                            <input type="search" class="Form-control m-1 " placeholder="search" name='word'>
                            <button type="submit" class="btn btn-primary m-1 ">search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>