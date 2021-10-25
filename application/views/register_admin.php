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
    }

    @media screen and (max-width: 760px) {
        .menu {
            width: 90%;
        }

        tr {
            font-size: 12px;
        }

        h2 {
            font-size: 25px;
        }
    }

    .register {
        padding-top: 3rem;
        text-align: center;
    }

    .login-title {
        padding-bottom: 2rem;
    }

    h5 {
        text-align: center;
        padding-bottom: 1rem;
        font-weight: bold;
    }

    label {
        color: red;
        font-size: 13px;
    }

    .menu {
        /* width: 30%; */
        box-shadow: 2px 10px 20px rgba(0, 0, 0, .1);
        border-radius: 20px;
        /* overflow: hidden; */
        background-color: white;
    }

    tr {
        padding-top: 2rem;
    }

    .button {
        text-align: center;
        padding-top: 1rem;
    }
</style>

<body>
    <div class="menu">
        <div class="login">
            <h2 class="login-title">
                <b>Panduan Gizi Makanan Bayi</b></h2>
            <h5>Register Akun Admin</h5>
            <form action="<?= base_url('login/register') ?>" method="post" id="form-register">
                <table width="80%" style="margin: 0% auto;">
                    <tr valign="top">
                        <td width="40%">Username <label for=""><sup>*</sup></label></td>
                        <td width="1%" align="center">:</td>
                        <td>
                            <div class="data-admin">
                                <input type="text" name="username" class="form-control" id="username" placeholder="Input Username" value="<?= set_value('username'); ?>">
                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>Password <label for=""><sup>*</sup></label></td>
                        <td width="5%" align="center">:</td>
                        <td>
                            <div class="pass">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Input Password" value="<?= set_value('username'); ?>" minlength="8">
                            </div>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>Ulangi Password <label for=""><sup>*</sup></label></td>
                        <td align="center">:</td>
                        <td>
                            <div class="pass">
                                <input type="password" name="password_confirm" id="password_confirm" placeholder="Input Ulang Password" class="form-control input-sm pass">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="3" class="button">
                            <input type="submit" name="submit" value="Buat Akun" class="btn btn-success btn-rounded btn-block">
                            <!-- <a href="#" onclick="window.history.back();" class="btn btn-danger btn-rounded">Kembali</a> -->
                        </th>
                    </tr>
                </table>
            </form>
            <div class="register" style="text-align:center;">
                <p>Sudah Mempunyai Akun?
                    <a href="<?= base_url('login') ?>">Login</a></p>
            </div>
        </div>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <!-- <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div> -->
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="<?= base_url('assets/') ?>vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/') ?>vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/') ?>vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="<?= base_url('assets/') ?>vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        // $(function() {
        $("#form-register").validate({
            // errorClass: "help-block",
            rules: {
                username: {
                    required: !0
                },
                password: {
                    required: !0,
                },
                password_confirm: {
                    required: !0,
                    equalTo: "#password"
                }
            },
            errorClass: "help-block error",
            highlight: function(e) {
                $(e).closest(".pass").addClass("error")
            },
            unhighlight: function(e) {
                $(e).closest(".pass").removeClass("error")
            },
        });

        function validation() {
            var validasiHuruf = /^[a-zA-Z ]+$/;
            var nama = document.getElementById("username");
            if (nama.value.match(validasiHuruf)) {
                alert("Nama Anda adalah " + nama.value);
            } else {
                alert("Masukkan nama Anda!\nFormat wajib huruf!");
                nama.value = "";
                nama.focus();
                return false;
            }
        }
        // });
    </script>
</body>

</html>