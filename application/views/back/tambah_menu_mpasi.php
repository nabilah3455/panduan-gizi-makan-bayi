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
            <?= form_open_multipart('menu/insert_menu');  ?>
            <div class="row">
                <div class="col-lg-6">
                    <label>Judul Menu</label>
                    <input type="text" name="judul_menu" id="" placeholder="input judul" class="form-control" required>
                </div>
                <div class="col-lg-6">
                    <label>Usia</label>
                    <select name="usia" id="" class="form-control" required>
                        <option value="">-- Pilih Usia --</option>
                        <option value="6-7">6-7 Bulan</option>
                        <option value="8">8 Bulan</option>
                        <option value="9">9 Bulan</option>
                        <option value="10">10 Bulan</option>
                        <option value="11">11 Bulan</option>
                        <option value="12">12-18 Bulan</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label style="padding-top: 1rem;">Bahan Menu</label>
                    <textarea name="bahan" id="" cols="30" rows="10" class="form-control" maxlength="2000" placeholder="tulis disini..." required></textarea>
                </div>
                <div class="col-lg-6">
                    <label style="padding-top: 1rem;">Resep Menu</label>
                    <textarea name="resep" id="" cols="30" rows="10" class="form-control" maxlength="2000" placeholder="tulis disini..." required></textarea>
                </div>
                <div class="col-lg-6">
                    <label style="padding-top: 1rem;">Foto Menu</label><br>
                    <input type="file" name="image" id="image">
                </div>
                <div class="button col-lg-12">
                    <input type="submit" name="submit" class="btn btn-success" value="Tambah Menu MPASI">
                    <a href={back} class="btn btn-warning">Cancel</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>