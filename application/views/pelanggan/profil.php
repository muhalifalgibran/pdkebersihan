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
                    <a class="nav-link" href="#">Edit Profil</a>
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

    <div class="container">
        <div class="atas-dikit">
        <div class="card">
            <h1 class="tengah">Data Perusahaan</h1>
            <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-8 formulir">

                    <?php echo form_open_multipart('pelanggan/Pelanggan/profil'); ?>
                    <div class="form-group">
                        <input type="text" class="form-cust" id="user" name="nama_pendaftar" placeholder="Nama Pendaftar" required>
                    </div>
                    <div class="form-group">
                        <textarea name="alamat" class="form-cust-textarea" placeholder="Alamat Perusahaan" id="exampletextarea1" ></textarea>

                    </div>


                    <div class="input-group mb-3 atas-dikit1">
                        <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" name="proposal" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn  btn-danger btn btn-outline-success btn-lg btn-block tombol-login">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>

    </div>



<script src="<?php echo base_url()?>assets/node_modules/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/node_modules/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/node_modules/4/bootstrap.min.js"></script>

</body>
</html>