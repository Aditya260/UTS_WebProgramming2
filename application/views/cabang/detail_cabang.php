<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Cabang
                </div>

                <div class="card-body">
                    <h5 class="card-title"><?= $cabang['nama']; ?></h5> 
                    <h6 class="card-subtitle mb-2 text-muted"><?= $cabang['alamat']; ?></h6>
                    <p class="card-text"><?= $cabang['nomor_cabang']; ?></p>
                    <p class="card-text"><?= $cabang['alamat']; ?></p>
                    <a href="<?= base_url(); ?>/cabang" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
