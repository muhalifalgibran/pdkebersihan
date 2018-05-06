<head>
    <title>PD KEBERSIHAN BANDUNG</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link href="<?=base_url()?>assets/b4/b4/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/b4/b4/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/rekrutment.motionlaboratory.id/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/b4/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/b4/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/b4/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/b4/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/b4/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/b4/css/main.css">
    <!--===============================================================================================-->

</head>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-20 p-b-30">
            <form action="<?php echo base_url().'Autentikasi/loginPegawai';?>" method="post" class="login100-form validate-form">
                <div class="login100-form-avatar">
                    <img src="<?php echo base_url().'assets/res/logo2.png';?>" alt="AVATAR">
                </div>

                <span class="login100-form-title p-t-20 p-b-45">
						Pegawai PD. Kebersihan
					</span>
                <?php echo $this->session->flashData('status')?>
                <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                </div>

                <div class="container-login100-form-btn p-t-10">
                    <button name="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
