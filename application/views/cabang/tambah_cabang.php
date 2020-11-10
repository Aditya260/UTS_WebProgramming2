<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                   Form Tambah Data Cabang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nomor_cabang">Nomor Cabangg</label>
                            <input type="text" name="nomor_cabang" class="form-control" id="nomor_cabang">
                            <small class="form-text text-danger"><?= form_error('nomor_cabang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        
                        <button type="submit" name="tambah_cabang" class="btn btn-primary float-right">Tambah Data</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>