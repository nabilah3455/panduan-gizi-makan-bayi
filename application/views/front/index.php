<style>
    .banner_part {
        background-image: url('./assets/img/banner/apple.jpg');
    }

    .about_text label {
        font-style: italic;
        font-weight: bold;
    }

    .menu {
        font-size: 15px;
        margin: 0% auto;
        padding-top: 2rem;
    }
</style>

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-content-center">
            <div class="col-lg-7 col-xl-6">
                <div class="banner_text">
                    <!-- <h5>Selamat Datang!</h5> -->
                    <h1>Berikan Gizi Terbaik Untuk Si Kecil</h1>
                    <a href="<?= base_url('user/menu') ?>" class="btn_1">Lihat Menu</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- about part start-->

<section class="about_part section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <div class="about_img">
                    <img src="<?= base_url('assets/') ?>img/undraw_things_to_say_ewwb.png" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="about_text">
                    <h2>Apa Itu
                        MPASI?</h2>
                    <p style="font-size: 17px;">Makanan Pendamping ASI (MP-ASI) adalah makanan atau minuman selain ASI yang mengandung zat gizi yang diberikan kepada bayi selama periode penyapihan (complementary feeding) yaitu pada saat makanan/minuman lain diberikan bersama pemberian ASI.</p>
                    <label for="">Sumber : (WHO) (Asosiasi Dietisien Indonesia, 2014)</label>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part start-->

<!-- service part start-->
<section class="service_part section_padding services_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <h2>Berikan Menu MPASI Sesuai Dengan Usia Anak</h2>
                    <p>Pada enam bulan pertama hidupnya, sebaiknya bayi hanya mengonsumsi ASI. Setelah enam bulan, dia dapat mengonsumsi makanan pendamping ASI atau disebut MPASI.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <?php foreach ($menu1 as $m1) {
                        $bahan = character_limiter($m1['bahan_menu'], 100); ?>
                        <h4>Usia 6-7 Bulan</h4>
                        <img src="<?= base_url('assets/') ?>img/menu/<?= $m1['foto'] ?>" alt="#" width="250px">
                        <h3><?= $m1['judul_menu'] ?></h3>
                        <p><?= $bahan ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <?php foreach ($menu2 as $m2) {
                        $bahan = character_limiter($m2['bahan_menu'], 100); ?>
                        <h4>Usia 8 Bulan</h4>
                        <img src="<?= base_url('assets/') ?>img/menu/<?= $m2['foto'] ?>" alt="#" width="250px">
                        <h3><?= $m2['judul_menu'] ?></h3>
                        <p><?= $bahan ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <?php foreach ($menu3 as $m3) {
                        $bahan = character_limiter($m3['bahan_menu'], 100); ?>
                        <h4>Usia 9 Bulan</h4>
                        <img src="<?= base_url('assets/') ?>img/menu/<?= $m3['foto'] ?>" alt="#" width="250px">
                        <h3><?= $m3['judul_menu'] ?></h3>
                        <p><?= $bahan ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="menu">
                <a href="<?= base_url('user/menu') ?>" class="genric-btn danger-border circle">Lihat Menu Lainnya</a>
            </div>
        </div>
    </div>
</section>
<!-- service part end-->

<!-- counter adopt number here -->
<section class="abopt_number_counter section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-6">
                <div class="counter_text">
                    <h2>Pilihan Menu MPASI dan Bahan Yang Lengkap</h2>
                    <p>Kami menyediakan berbagai menu MPASI dari usia 6-18 bulan serta kandugan gizi yang ada di setiap bahannya.</p>
                    <div class="counter_number">
                        <div class="single_counter_number">
                            <img src="<?= base_url('assets/front/') ?>img/android-chrome-192x192(1).png" alt="#" width="50">

                            <h3><span class="count"><?= $total_menu; ?></span></h3>
                            <p>Jumlah Menu</p>
                        </div>
                        <div class="single_counter_number">
                            <img src="<?= base_url('assets/') ?>img/apple-touch-icon.png" alt="#" width="50">
                            <h3><span class="count"><?= $total_bahan ?></span></h3>

                            <p>Jumlah Bahan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="adopt_image">
                    <img src="<?= base_url('assets/') ?>img/undraw_diet_ghvw.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- counter adopt number end -->

<!-- client review part here -->
<!-- <section class="client_review">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="client_review_content owl-carousel">
                    <div class="singke_client_review">
                        <img src="<?= base_url('assets/front/') ?>img/review_img_1.png" alt="#">
                        <h4>" Working in conjunction with humanitarian aid agencies we have supported programmes to alleviate.</h4>
                        <p>- Jon Miller</p>
                    </div>
                    <div class="singke_client_review">
                        <img src="<?= base_url('assets/front/') ?>img/review_img_1.png" alt="#">
                        <h4>" Working in conjunction with humanitarian aid agencies we have supported programmes to alleviate.</h4>
                        <p>- Jon Miller</p>
                    </div>
                    <div class="singke_client_review">
                        <img src="<?= base_url('assets/front/') ?>img/review_img_1.png" alt="#">
                        <h4>" Working in conjunction with humanitarian aid agencies we have supported programmes to alleviate.</h4>
                        <p>- Jon Miller</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- client review part end -->

<!-- about part start-->
<section class="about_part section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <div class="about_img">
                    <img src="<?= base_url('assets/front/') ?>img/providence-doucet-5za6niH4qpw-unsplash.jpg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="about_text">
                    <!-- <img src="<?= base_url('assets/front/') ?>img/about_icon.png" class="about_icon" alt=""> -->
                    <h2>Tentang Kami</h2>
                    <p>Website Panduan Gizi Makan Bayi ini digunakan untuk membantu para orang tua dalam melihat perkembangan gizi anak setiap bulannya dari usia 6 - 18 bulan.
                        Disini juga disediakan berbagai menu sesuai dengan usia si kecil dan nilai informasi gizi yang terkandung dari setiap bahan yang digunakan. Jadi para orang tua tidak perlu kawatir
                        akan kandungan gizi yang terkandung dari setiap menu yang disediakan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end-->