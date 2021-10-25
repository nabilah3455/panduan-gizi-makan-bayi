<style>
    /* .breadcrumb {
        background-image: url('../assets/img/banner/jamie-coupaud-3fbI4ouy0Lw-unsplash.jpg')
    } */

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
        box-shadow: 1px 1px 10px rgba(1, 1, 1, .1);
        /* border: 1px solid #f05454; */
    }

    h4 {
        font-weight: bold;
    }

    .null {
        margin: 0% auto;
        font-size: 20px;
        text-align: center;
    }

    @media screen and (max-width: 760px) {
        .null p {
            font-size: 15px;
            text-align: center;
        }
    }
</style>

<!--::breadcrumb part start::-->
<section class="breadcrumb breadcrumb_bg" style="background-image: url('<?= $banner ?>')">
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
<!--================Blog Area =================-->
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php if ($total == '0') {  ?>
                        <div class="null">
                            <img src="<?= $null; ?>" alt="" width="20%"><br>
                            <p>Tidak Ada Hasil</p>
                        </div>
                        <?php
                    } else {
                        foreach ($data_berita as $b) {
                            $berita = character_limiter($b->isi_news, 300); ?>
                            <article class="blog_item">
                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2><?= $b->judul_news ?></h2>
                                    </a>
                                    <p><?= $berita ?></p>
                                    <div class="button-group-area read">
                                        <a href="<?= base_url('user/detail_berita') ?>?id=<?= $b->id_news ?>" class="genric-btn danger circle">Lihat Berita Selengkapnya ...</a>
                                    </div>
                                </div>
                            </article>
                    <?php }
                    } ?>
                    <nav class="blog-pagination justify-content-center d-flex">
                        <!-- <div class="blog-pagination justify-content-center d-flex"> -->
                        <?php echo $this->pagination->create_links(); ?>
                        <!-- </div> -->
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <h4>Cari Berita</h4>
                        <form action="<?= base_url('user/berita') ?>" method="POST">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="cari" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <input class="button rounded-0 primary-bg text-white w-100" type="submit" name="submit" value="Cari">
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->