<style>
    .breadcrumb {
        background-image: url('../assets/img/banner/food.jpg')
    }

    .judul h1 {
        text-align: center;
        padding-top: 2rem;
        /* font-size: 59px; */
        /* text-decoration: underline; */
        font-weight: bold;
    }

    .blog_details .button-group-area {
        margin: 0 auto;
    }

    .detail_menu {
        padding-top: 3rem;
    }

    .data {
        font-size: 18px;
    }

    .garis_vertical {
        border-left: 3px #f05454 solid;
        border-radius: 100px;
        height: 0px auto;
        width: 0px;
    }

    .button-group-area .back {
        font-size: 15px;
        font-weight: bold;
        text-align: center;
        width: 100%;
        text-align: center;
    }

    .button-group-area {
        padding-bottom: 4rem;
        padding-top: 2rem;
    }

    @media screen and (max-width: 760px) {
        .judul h1 {
            font-size: 35px;
            padding: 1rem;
        }
    }
</style>

<!--::breadcrumb part start::-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <!-- <div class="breadcrumb_iner_item">
                        <h1>Menu MPASI</h1>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--::breadcrumb part start::-->

<!--================Blog Area =================-->
<?php foreach ($data_menu as $d) { ?>
    <div class="judul">
        <h1>Menu <?= $d['judul_menu'] ?></h1>
    </div>
    <section class="blog_area detail_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <?php if ($d['foto'] != null) { ?>
                                    <img class="card-img rounded-0" src="<?= base_url('assets/') ?>img/menu/<?= $d['foto'] ?>" alt="" width="50px" height="250px">
                                <?php } else { ?>
                                    <img class="card-img rounded-0" src="<?= base_url('assets/') ?>img/image.png" alt="" width="50px" height="250px">
                                <?php } ?>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="garis_vertical"></div>
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <a class="d-inline-block" href="single-blog.html">
                        <h2><b>Bahan</b></h2>
                    </a>
                    <p class="data"><?= nl2br($d['bahan_menu']) ?></p>
                    <br>
                    <a class="d-inline-block" href="single-blog.html">
                        <h2><b>Cara Membuat</b></h2>
                    </a>
                    <p class="data"><?= nl2br($d['resep_menu']) ?></p>
                </div>
            </div>
        <?php } ?>
        <div class="button-group-area">
            <a href="#" onclick="window.history.back();" class="genric-btn primary circle back">Kembali</a>
        </div>
        </div>
    </section>
    <!--================Blog Area =================-->