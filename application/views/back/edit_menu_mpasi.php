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
                Tambah Menu MPASI
            </div>
        </div>
        <div class="ibox-body">
            <form action="<?= base_url('menu/update_menu') ?>" method="POST">
                {data_menu}
                <div class="row">
                    <input type="hidden" name="id_menu" id="" placeholder="input id" value="{id_menu}" class="form-control" maxlength="5" readonly />
                    <div class="col-lg-6">
                        <label>Judul Menu</label>
                        <input type="text" name="judul_menu" value="{judul_menu}" id="" placeholder="input judul" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Usia</label>
                        <select name="usia" id="" class="form-control" required>
                            <option value="{usia}">{usia} Bulan</option>
                            <option value="6-7">6-7 Bulan</option>
                            <option value="8">8 Bulan</option>
                            <option value="9">9 Bulan</option>
                            <option value="10">10 Bulan</option>
                            <option value="11">11 Bulan</option>
                            <option value="12">12 Bulan</option>
                            <option value="13">13 Bulan</option>
                            <option value="14">14 Bulan</option>
                            <option value="15">15 Bulan</option>
                            <option value="16">16 Bulan</option>
                            <option value="17">17 Bulan</option>
                            <option value="18">18 Bulan</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label style="padding-top: 1rem;">Bahan Menu</label>
                        <textarea name="bahan" id="" cols="30" rows="10" class="form-control" maxlength="2000" placeholder="tulis disini...">{bahan_menu}</textarea>
                    </div>
                    <div class="col-lg-6">
                        <label style="padding-top: 1rem;">Resep Menu</label>
                        <textarea name="resep" id="" cols="30" rows="10" class="form-control" maxlength="2000" placeholder="tulis disini...">{resep_menu}</textarea>
                    </div>
                    <div class="col-lg-6">
                        <label style="padding-top: 1rem;">Foto Menu</label><br>
                        <img src="<?= base_url('assets/img/menu/') ?>{foto}" alt="" width="150px">
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="button col-lg-12">
                        <input type="submit" name="submit" class="btn btn-success" value="Edit Menu">
                        <a href={back} class="btn btn-warning">Cancel</a>
                    </div>
                </div>
                {/data_menu}
            </form>
        </div>
    </div>
</div>