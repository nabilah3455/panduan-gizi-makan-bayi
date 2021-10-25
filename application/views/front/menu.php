<style>
    .judul h1 {
        text-align: center;
        padding-top: 2rem;
        font-size: 59px;
        /* text-decoration: underline; */
        font-weight: bold;
    }

    .search .form-group {
        float: right;
    }

    .blog_item {
        width: 250px;
        height: 20rem;
    }

    .blog_details {
        box-shadow: 1px 1px 10px rgba(1, 1, 1, .1);
        height: 150px;
        padding: 2rem;
    }

    .menu {
        padding: 1rem;
    }

    .null {
        margin: 0% auto;
        font-size: 20px;
        text-align: center;
    }

    @media screen and (max-width: 760px) {
        .blog_item {
            width: 100%;
        }

        .blog_item img {
            width: 300px;
            height: 150px;
        }

        .blog_details {
            height: 160px;
            padding: 1rem;
        }

        .menu {
            width: 50%;
            height: 18rem;
        }

        h3 {
            font-size: 18px;
        }

        .null p {
            font-size: 15px;
            text-align: center;
        }
    }
</style>

<!--::breadcrumb part start::-->
<section class="breadcrumb breadcrumb_bg" style="background-image:url('<?= $banner ?>')">
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
<div class="judul">
    <h1>Menu MPASI</h1>
</div>
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="search col-lg-12">
                <form action="<?= base_url('user/menu') ?>" method="POST">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" name="cari" class="form-control" placeholder='Cari Menu' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari Bahan'" autocomplete="off" />
                            <div class="input-group-append">
                                <input class="btn btn-danger" type="submit" name="submit" value="Cari">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php if ($total == '0') {  ?>
                <div class="col-lg-12">
                    <div class="blog_left_sidebar null">
                        <img src="<?= $null; ?>" alt="" width=20%;><br>
                        <p>Tidak Ada Hasil</p>
                    </div>
                </div>
                <?php
            } else {
                foreach ($data_menu as $d) {
                    $bahan = character_limiter(nl2br($d['bahan_menu']), 100); ?>
                    <div class="menu mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <a href="<?= base_url('user/detail_menu') ?>?id=<?= $d['id_menu']; ?>">
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <?php if ($d['foto'] != null) { ?>
                                            <img class="card-img rounded-0" src="<?= base_url('assets/') ?>img/menu/<?= $d['foto'] ?>" alt="" width="50px" height="200px">
                                        <?php } else { ?>
                                            <img class="card-img rounded-0" src="<?= base_url('assets/') ?>img/image.jpg" alt="" width="50px" height="200px">
                                        <?php } ?>
                                    </div>
                                    <div class=" blog_details">
                                        <h4><b><?= $d['judul_menu']; ?></b></h2>
                                            <label>Usia <?= $d['usia'] ?> Bulan</label>
                                    </div>
                                </article>
                        </div>
                    </div>
                    </a>
            <?php }
            } ?>
        </div>
        <div class="blog-pagination justify-content-center d-flex">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</section>
<!--================Blog Area =================-->