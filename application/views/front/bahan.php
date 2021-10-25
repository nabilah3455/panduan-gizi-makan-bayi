<style>
    /* .breadcrumb {
        background-image: $banner;
    } */

    .judul h1 {
        text-align: center;
        padding-top: 2rem;
        font-size: 59px;
        /* text-decoration: underline; */
        font-weight: bold;
    }

    .blog_details .button-group-area {
        text-align: center;
    }

    .blog_item {
        box-shadow: 1px 1px 10px rgba(1, 1, 1, .1);
        width: 250px;

    }

    .modal-content {
        height: 70%;
    }

    .search .form-group {
        float: right;
    }

    .bahan {
        padding: 1rem;
    }

    .blog_details {
        height: 280px;
    }

    .blog_footer {
        text-align: center;
        padding-bottom: 1rem;
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

        .blog_details {
            height: 230px;
        }

        .bahan {
            width: 50%;
            height: 330px;
        }

        h3 {
            font-size: 18px;
        }

        .modal-content {
            height: 50%;
        }

        .modal-dialog {
            padding: 1rem;
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

<!--================Blog Area =================-->
<div class="judul">
    <h1>Bahan MPASI</h1>
</div>

<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="search col-lg-12">
                <form action="<?= base_url('user/bahan') ?>" method="POST">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" name="cari" class="form-control" placeholder='Cari Bahan/Kandungan Gizi' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari Bahan'" autocomplete="off" />
                            <div class="input-group-append">
                                <input class="btn btn-danger" type="submit" name="submit" value="Cari">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="row"> -->
            <?php if ($total == '0') {  ?>
                <div class="col-lg-12">
                    <div class="blog_left_sidebar null">
                        <img src="<?= $null; ?>" alt="" width="20%"><br>
                        <p>Tidak Ada Hasil</p>
                    </div>
                </div>
                <?php
            } else {
                foreach ($data_bahan as $d) {
                    $kandungan = character_limiter(nl2br($d->kandungan_bahan), 100); ?>
                    <div class="bahan">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_details">
                                    <h4><b><?= $d->nama_bahan; ?></b></h4>
                                    <p><?= nl2br($kandungan) ?></p>
                                </div>
                                <div class="blog_footer">
                                    <div class="button-group-area mt-10">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal<?= $d->id_bahan; ?>" class="genric-btn primary circle arrow">Lihat Detail</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
    <div class="blog-pagination justify-content-center d-flex">
        <?php echo $this->pagination->create_links(); ?>
    </div>
    <?php foreach ($data_bahan as $b) { ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?= $b->id_bahan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel"><b><?= $b->nama_bahan ?></b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= nl2br($b->kandungan_bahan) ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</section>

<!--================Blog Area =================-->