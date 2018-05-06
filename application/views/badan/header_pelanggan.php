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
    <nav class="nav3">
        <img src="<?php echo base_url()?>assets/res/logo2.png" class="logo-head" alt="">
        <ul class="nav2">
            <li>
                <a class="nav-link" href="<?=base_url()?>pelanggan-dashboard">Home</a>
            </li>
            <li>
                <a class="nav-link" href="<?=base_url()?>pelanggan-profil">Edit Profil</a>
            </li>
            <li>
                <a class="nav-link" href="<?=base_url()?>pelanggan-pesan_layanan">Pelayanan Khusus</a>
            </li>
            <li>
                <a class="nav-link" href="<?=base_url()?>pelanggan-inbox"">Inbox</a>
            </li>
            <p><a href="<?php echo base_url()?>Autentikasi/logout"><img  src="<?php echo base_url()?>assets/res/logout.png" class="logo-head2" alt=""></a></p>
        </ul>
    </nav>