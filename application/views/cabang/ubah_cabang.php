<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                   Form Ubah Data Cabang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $cabang['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $cabang['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nomor_cabang">Nomor Cabang</label>
                            <input type="text" name="nomor_cabang" class="form-control" id="nomor_cabang" value="<?= $cabang['nik']; ?>">
                            <small class="form-text text-danger"><?= form_error('nomor_cabang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $cabang['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <button type="submit" name="ubah_cabang" class="btn btn-primary float-right">Ubah Data</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>