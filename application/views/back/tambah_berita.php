<style>
    .button {
        padding-top: 1rem;
        float: left;
    }
</style>

<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
                Tambah Berita
            </div>
        </div>
        <div class="ibox-body">
            <form action="<?= base_url('berita/insert_berita') ?>" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <label>Judul Berita</label>
                        <input type="text" name="judul_berita" id="" placeholder="input judul" class="form-control">
                    </div>
                    <div class="col-lg-12">
                        <label style="padding-top: 1rem;">Isi Berita</label>
                        <textarea name="isi_berita" id="" cols="30" rows="10" class="form-control" maxlength="2000" placeholder="tulis disini..."></textarea>
                    </div>
                    <div class="button col-lg-12">
                        <input type="submit" name="submit" class="btn btn-success" value="Tambah Berita">
                        <a href={back} class="btn btn-warning">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('isi_berita');
</script>