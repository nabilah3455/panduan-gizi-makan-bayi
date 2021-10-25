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
                Edit Bahan MPASI
            </div>
        </div>
        <div class="ibox-body">
            <form action="<?= base_url('bahan/update_bahan') ?>" method="POST">
                <?php foreach($data_bahan as $b){?>
                <div class="row">
                        <input type="hidden" name="id_bahan" id="" placeholder="input id" value="<?= $b['id_bahan']?>" class="form-control" maxlength="5" />
                    <div class="col-lg-12">
                        <label>Nama Bahan</label>
                        <input type="text" name="nama_bahan" id="" value="<?= $b['nama_bahan']?>" placeholder="input nama bahan" class="form-control">
                    </div>
                    <div class="col-lg-12">
                        <label style="padding-top: 1rem;">Kandungan Bahan</label>
                        <textarea name="kandungan_bahan" id="kandungan_bahan" cols="30" rows="10" class="form-control" maxlength="500" placeholder="tulis disini..."><?= nl2br($b['kandungan_bahan']) ?></textarea>
                    </div>
                    <div class="button col-lg-12">
                        <input type="submit" name="submit" class="btn btn-success" value="Edit Bahan">
                        <a href={back} class="btn btn-warning">Cancel</a>
                    </div>
                </div>
                <?php } ?>
            </form>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('kandungan_bahan');
</script>