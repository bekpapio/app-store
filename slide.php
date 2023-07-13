<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics/styles/css/bootstrap.css">
    <title>Document</title>
</head>

<body style="background-color: rgb(27, 27, 27);">
    <div class="mx-2 p-1">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height:400px">
                <div class="carousel-item active">
                    <img src="statics/images/backgrund.jpg" class="d-block w-100" alt="..." style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="statics/images/illustrator.png" class="d-block w-100" alt="..." style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="statics/images/pes.jpg" class="d-block w-100" alt="..." style=" object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <script src="statics/styles/js/bootstrap.js"></script>
</body>

</html>