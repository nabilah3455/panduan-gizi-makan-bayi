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
                Tambah Bahan MPASI
            </div>
        </div>
        <div class="ibox-body">
            <form action="<?= base_url('bahan/insert_bahan') ?>" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <label>Nama Bahan</label>
                        <input type="text" name="nama_bahan" id="" placeholder="input nama bahan" class="form-control" required>
                    </div>
                    <div class="col-lg-12">
                        <label style="padding-top: 1rem;">Kandungan Bahan</label>
                        <textarea name="kandungan_bahan" id="kandungan_bahan" cols="30" rows="10" class="form-control" maxlength="500" placeholder="tulis disini..." required></textarea>
                    </div>
                    <div class="button col-lg-12">
                        <input type="submit" name="submit" class="btn btn-success" value="Tambah Bahan MPASI">
                        <a href={back} class="btn btn-warning">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('kandungan_bahan');
</script>