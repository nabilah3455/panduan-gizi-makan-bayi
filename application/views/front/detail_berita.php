<style>
    .breadcrumb {
        background-image: url('../assets/img/banner/jamie-coupaud-3fbI4ouy0Lw-unsplash.jpg')
    }

    .judul h1 {
        text-align: center;
        padding-top: 2rem;
        font-size: 59px;
        font-weight: bold;
    }

    .blog_details .button-group-area {
        margin: 0 auto;
    }

    .blog_item {
        /* background-color: aqua; */
        box-shadow: 0 0 1px black;
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

    h4 {
        font-weight: bold;
    }

    .blog_area {
        padding-top: 3rem;
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
<div class="judul">
    <h1>Berita MPASI</h1>
</div>
<section class="blog_area">
    <div class="container">
        <?php foreach ($data_berita as $b) { ?>
            <h2><b><?= $b['judul_news'] ?></b></h2>
            <p><?= nl2br($b['isi_news']) ?></p>
            <!-- <div class="button-group-area read">
                                    <a href="<?= base_url('user/detail_berita') ?>?id=<?= $b->id_news ?>" class="genric-btn danger circle">Lihat Berita Selengkapnya ...</a>
                                </div> -->
        <?php } ?>
        <div class="button-group-area">
            <a href="#" onclick="window.history.back();" class="genric-btn primary circle back">Kembali</a>
        </div>
    </div>
    </div>
</section>