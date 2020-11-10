<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                   Form Tambah Data Karyawan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nip">
                            <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                            <select class="form-control" name="jabatan" id="jabatan">
                                    <option value="Staf Admin">Staf Admin</option>
                                    <option value="HRD">HRD</option>
                                    <option value="Bagian Kebersihan">Bagian Kebersihan</option>
                                    <option value="Bagian Keamanan">Bagian Keamanan</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>