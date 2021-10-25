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
        background-image: url('assets/img/banner/element5-digital-acrBf9BlfvE-unsplash.jpg');
        background-size: cover;
    }

    .login {
        display: flex;
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

        .alert {
            font-size: 15px;
        }
    }

    .register {
        padding-top: 2rem;
        text-align: center;
    }

    h3 {
        text-align: center;
        font-weight: bold;
    }

    .sign_in {
        font-size: 12px;
        text-align: center;
    }

    .menu {
        /* width: 25%; */
        box-shadow: 2px 10px 20px rgba(0, 0, 0, .1);
        border-radius: 20px;
        overflow: hidden;
        background-color: white;
    }
</style>

<body>
    <div class="menu">
        <!-- <div class="row"> -->
        <div class="login">
            <form action="<?= base_url('login') ?>" method="post" id="login-form">
                <h2 class="login-title">
                    <b>Panduan Gizi Makanan <br> Bayi</b></h2>
                <!-- <h3>Welcome ! <br>Sign In To Your Account</h3> -->
                <div class="sign_in">Sign in to your account !</div>
                <div class="col-lg-12 alert">
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="form-group">
                    <div class="input-group-icon left">
                        <div class="input-icon"><i class="fa fa-user"></i></div>
                        <input class="form-control" type="text" name="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group-icon left">
                        <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>

                </div>
                <div class="">
                    <button class="btn btn-info btn-block" type="submit">Login</button>
                </div>
                <!-- <div class="text-center">Not a member?
                <a class="color-blue" href="register.html">Create accaunt</a>
            </div> -->
            </form>
            <div class="register">
                <p>Belum Mempunyai Akun? 
                    <a href="<?= base_url('login/register') ?>">Sign Up</a></p>
            </div>
        </div>
        <!-- <div class="col-lg-7 banner">
                <img src="<?= base_url('assets/') ?>img/banner/hector-farahani-jvXX_1OK-ik-unsplash.jpg" alt="" style="float: right;">
            </div> -->
    </div>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
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
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>