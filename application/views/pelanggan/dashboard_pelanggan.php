<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/node_modules/bootstrap/dist/css/logo-nav.css">
    <title>Document</title>
</head>
<body>
    <div class="container-login100">
    <nav class="nav1">
            <img src="<?php echo base_url()?>assets/res/logo2.png" class="logo-head" alt="">
        <ul class="nav2">
            <li>
                <a class="nav-link" href="#">Profil</a>
            </li>
            <li>
                <a class="nav-link" href="#">Pelayanan Khusus</a>
            </li>
            <li>
                <a class="nav-link" href="#">Help</a>
            </li>
            <img src="<?php echo base_url()?>assets/res/logout.png" class="logo-head2" alt="">
        </ul>
    </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo base_url()?>assets/res/slide1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url()?>assets/res/slide2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url()?>assets/res/slide3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="help-text">
            <div class="text-center">
                <h1>Bantu Kami Membuat Bandung Bersih</h1>
            </div>
        </div>


    </div>
    <span class="border-cust">
            asd
    </span>


    <script src="<?php echo base_url()?>assets/node_modules/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/4/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
</body>
</html>

