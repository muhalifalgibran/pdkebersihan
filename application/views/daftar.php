<?php
/**
 * Created by PhpStorm.
 * User: Muh. Alif Al-Gibran
 * Date: 4/3/2018
 * Time: 11:19 PM
 */
?>
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
<div class="container-fluid">
    <div class="row gbr">
        <div class="col-lg-7">
            <div class="logo"></div>
            <div class="tulisan">
                <p class="judul">Pemesanan Jasa Layanan Khusus </p>
                <p class="motion">PD. Kebersihan Bandung</p>
                <p class="tahun"><?php echo date("Y");?></p>
                <div class="lbr_grs grs">
                </div>
            </div>
        </div>
        <div class="col-lg-5 form-login">
            <nav class="nav">
                <ul class="nav">
                    <li>
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Info</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="btn btn-outline-success">
                        <a href="<?php echo base_url('Autentikasi/login')?>">Login</a>
                    </li>
                </ul>
            </nav>
            <div class="row">
                <div class="col-lg-8 formulir">
                    <p class="signin">Sign Up</p>
                    <div class="grs_sign"></div>
                    <?php echo form_open('Autentikasi/daftar'); ?>
                    <div class="form-group">
                        <input type="text" class="form-cust" id="user" name="nama_perusahaan" placeholder="Nama Perusahaan" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-cust" id="user" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input  class="form-cust" type="password" id="user" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <a href="#" class="pull-right forgot"><?php echo $this->session->flashdata("status");?></a>
                    </div>
                    <button type="submit" name="submit" class="btn  btn-danger btn btn-outline-success btn-lg btn-block tombol-login">Sign Up</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
</body>
</html>
