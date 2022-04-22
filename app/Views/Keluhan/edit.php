<form method="POST" action="<?= base_url('Keluhan/editproses'); ?>">
    <div class="row">
        <div class="col-lg-2">
            <label style="position:relative; top:7px;">Pelanggan:</label>
        </div>
        <div class="col-lg-10">
            <!--ambil data pelanggan-->
            <?= dd($edit); ?>
            <select id="idpelanggan" name="idpelanggan" class="form-control">
                <option value="<?= $edit['idpelanggan']; ?>"><?= $edit['nama_pelanggan']; ?></option>

            </select>
        </div>
    </div>
    <div style="height:10px;"></div>
    <div class="row">
        <div class="col-lg-2">
            <label style="position:relative; top:7px;">Keluhan:</label>
        </div>
        <div class="col-lg-10">
            <input type="text" name="keluhan" class="form-control" value="Produk tidak berjalan dengan baik">
        </div>
    </div>
    <div style="height:10px;"></div>
    <div class="row">
        <div class="col-lg-2">
            <label style="position:relative; top:7px;">Penyebab:</label>
        </div>
        <div class="col-lg-10">
            <input type="text" name="penyebab" class="form-control" value="Kelistrikan tidak stabil">
        </div>
    </div>
    <div style="height:10px;"></div>
    <div class="row">
        <div class="col-lg-2">
            <label style="position:relative; top:7px;">Tindakan:</label>
        </div>
        <div class="col-lg-10">
            <input type="text" name="tindakan" class="form-control" value="survei">
        </div>
    </div>
    <div style="height:10px;"></div>
    <div class="row">
        <div class="col-lg-2">
            <label style="position:relative; top:7px;">Tgl Keluhan:</label>
        </div>
        <div class="col-lg-10">
            <input type="date" name="tgl_keluhan" class="form-control" value="2018-11-15">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label style="position:relative; top:7px;">Tgl Perbaikan:</label>
        </div>
        <div class="col-lg-10">
            <input type="date" name="tgl_perbaikan" class="form-control" value="2018-12-05">
        </div>
    </div>
    <div style="height:10px;"></div>
    <div class="row">
        <div class="col-lg-2">
            <label style="position:relative; top:7px;">Teknisi:</label>
        </div>
        <div class="col-lg-10">
            <select id="idteknisi" name="idteknisi" class="form-control">
                <option value="">-Pilih Teknisi-</option>
                <option value='11'>Dimas</option>
                <option value='8'>Eka Rizky Febrian</option>
                <option value='10'>Iqbal Ramadhan</option>
                <option selected value='9'>Rifqi Hermawan</option>
                <option value='12'>Rivai Abustam</option>
            </select>
        </div>
    </div>
    </div>