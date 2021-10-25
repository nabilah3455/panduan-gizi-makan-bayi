<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Panduan Gizi Makanan Bayi</title>
    <link rel="icon" href="<?= base_url('assets/front/') ?>img/android-chrome-192x192.png">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?= base_url('assets/') ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?= base_url('assets/') ?>css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="<?= base_url('assets/') ?>css/pages/auth-light.css" rel="stylesheet" />
</head>

<style>
    body {
        padding: 0%;
        margin: 0% auto;
        overflow-x: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: url('../assets/img/banner/element5-digital-acrBf9BlfvE-unsplash.jpg');
        background-size: cover;
    }

    .login {
        /* display: flex; */
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-bottom: 1px;
        padding: 3rem;
        width: 600px;
    }

    @media screen and (max-width: 760px) {
        .menu {
            width: 95%;
        }

        .login {
            width: 100%;
        }

        .data-anak {
            font-size: 15px;
        }

        .submit {
            width: 10%;
        }
    }

    .menu {
        /* width: 50%; */
        box-shadow: 2px 10px 20px rgba(0, 0, 0, .1);
        border-radius: 20px;
        overflow: hidden;
        background-color: white;
    }

    sup {
        color: red;
        font-size: 10px;
    }

    .data-anak {
        padding: 1rem;
        width: 50%;
    }

    .submit {
        text-align: center;
        padding-top: 2rem;
        width: 100%;
    }

    .submit input,
    a {
        width: 30%;
    }

    .sign_in {
        font-size: 12px;
        text-align: center;
    }
</style>

<body>
    <div class="menu">
        <!-- <div class="row"> -->
        <div class="login">
            <h2 class="login-title">
                <b>Create Your Account</b></h2>
            <!-- <div class="sign_in">Input Data Anak Anda</div> -->
            <form action="<?= base_url('login_user/register') ?>" method="POST" id="form-sample-1" novalidate="novalidate">
                <div class="row">
                    <div class="data-anak">
                        Nama Anak <sup>*</sup>
                        <input type="text" name="nama_anak" placeholder="Input Nama Anak" value="<?= set_value('nama_anak'); ?>" class="form-control input-sm pass" autocomplete="false">
                    </div>
                    <div class="data-anak">
                        Jenis Kelamin <sup>*</sup>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="<?= set_value('nama_anak'); ?>"></option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-Laki</option>
                        </select>
                    </div>
                    <div class="data-anak">
                        Berat Badan(Kg)<sup>*</sup>
                        <input type="number" name="berat_badan_kelahiran" id="berat" placeholder="Berat Kelahiran" value="<?= set_value('berat_badan_kelahiran'); ?>" class="form-control input-sm berat" autocomplete="off" />
                        <!-- <sup>Ket : Berat Kelahiran</sup> -->
                    </div>
                    <div class="data-anak">
                        TInggi Badan(Cm)<sup>*</sup>
                        <input type="number" name="tinggi_badan_kelahiran" placeholder="Tinggi Kelahiran" value="<?= set_value('berat_badan_kelahiran'); ?>" class="form-control input-sm berat" autocomplete="false" required />
                        <!-- <sup>Ket : Tinggi Kelahiran</sup> -->
                    </div>
                    <div class="data-anak">
                        Tanggal Lahir <sup>*</sup>
                        <input type="date" name="tgl_lahir" value="<?= set_value('tgl_lahir'); ?>" id="tgl_lahir" placeholder="" class="form-control input-sm">
                    </div>
                    <div class="data-anak">
                        Username <sup>*</sup>
                        <input type="username" name="username" id="username" placeholder="Input Username" value="<?= set_value('username'); ?>" class="form-control input-sm pass username">
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="data-anak">
                        Password <sup>*</sup>
                        <input type="password" id="password" name="password" placeholder="Input Password" value="<?= set_value('password'); ?>" class="form-control input-sm pass" minlength="8">
                    </div>
                    <div class="data-anak">
                        Ulangi Password <sup>*</sup>
                        <input type="password" name="password_confirm" placeholder="Input Ulang Password" class="form-control input-sm pass">
                    </div>
                    <div class="submit">
                        <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-rounded">
                        <a href="#" onclick="window.history.back();" class="btn btn-danger btn-rounded">Kembali</a>
                    </div>
                </div>
                <!-- <div class="text-center">
                    Sudah Mempunyai Akun? <br> <a href="<?= base_url('login_user') ?>">Login</a>
                </div> -->
            </form>
        </div>
        <!-- <div class="col-lg-7 banner">
                <img src="<?= base_url('assets/') ?>img/banner/hector-farahani-jvXX_1OK-ik-unsplash.jpg" alt="" style="float: right;">
            </div> -->
    </div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="<?= base_url('assets/') ?>vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/') ?>vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/') ?>vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?= base_url('assets/') ?>vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?= base_url('assets/') ?>js/app.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        // #form-sample-1 di dapet dari tag form id=form-sampe-1
        $("#form-sample-1").validate({
            rules: {
                nama_anak: {
                    required: !0
                },
                jenis_kelamin: {
                    required: !0
                },
                tgl_lahir: {
                    required: !0
                },
                tinggi_badan_kelahiran: {
                    required: !0
                },
                berat_badan_kelahiran: {
                    required: !0
                },
                username: {
                    required: !0
                },
                password: {
                    required: !0
                },
                password_confirm: {
                    required: !0,
                    equalTo: "#password"
                }
            },
            errorClass: "help-block error",
            highlight: function(e) {
                $(e).closest(".pass.input-group-add-on").addClass("error")
            },
            unhighlight: function(e) {
                $(e).closest(".pass.input-group-add-on").removeClass("error")
            },
        });
    </script>
</body>

</html>