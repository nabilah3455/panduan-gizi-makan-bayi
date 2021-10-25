<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Panduan Gizi Makan Balita</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?= base_url('assets/'); ?>tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets') ?>/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="<?= base_url('assets') ?>/css/delete.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <!-- PLUGINS STYLES-->
    <link href="<?= base_url('assets') ?>/vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="<?= base_url('assets') ?>/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets') ?>/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />

    <!-- THEME STYLES-->
    <link href="<?= base_url('assets') ?>/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <?= $header ?>
        <?= $sidebar ?>
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <!-- <div class="page-content"> -->
            <?= $content ?>
            <!-- END PAGE CONTENT-->
            <!-- </div> -->
        </div>


        <!-- BEGIN PAGA BACKDROPS-->
        <div class="sidenav-backdrop backdrop"></div>
        <div class="preloader-backdrop">
            <!-- <div class="page-preloader">Loading</div> -->
        </div>
        <!-- END PAGA BACKDROPS-->


        <!-- CORE PLUGINS-->

        <script src="<?= base_url('assets') ?>/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <script src="<?= base_url('assets') ?>/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
        <!-- CORE SCRIPTS-->
        <script src="<?= base_url('assets') ?>/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/') ?>js/app.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>tables/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/'); ?>tables/js/datatable/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url('assets/'); ?>tables/js/datatable-init/datatable-basic.min.js"></script>

        <script type="text/javascript">
            $(function() {
                $('#summernote').summernote();
                $('#summernote_air').summernote({
                    airMode: true
                });
            });
        </script>
</body>

</html>