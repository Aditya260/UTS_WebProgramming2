<div class="container">

<?php if( $this->session->flashdata('flash') ) : ?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show"
        role="alert">
            Data cabang <strong>berhasil</strong> <?= 
            $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert"
            aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url();?>cabang/tambah_cabang" class ="btn btn-primary">Tambah Data Cabang</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari data cabang.." name="keyword">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
            </div>
        </div>
        </form>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <h3>Daftar Cabang</h3>
        <?php if(empty($cabang)): ?>
            <div class="alert alert-danger" role="alert">
            Data Cabang tidak ditemukan.
            </div>
        <?php endif; ?>
        <ul class="list-group">
        <?php foreach ($cabang as $cabang) :?>
            <li class="list-group-item">
                <?= $cabang['nama']; ?>
                <a href="<?= base_url(); ?>cabang/hapus_cabang/<?= $cabang['id']; ?>
                " class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                <a href="<?= base_url(); ?>cabang/ubah_cabang/<?= $cabang['id']; ?>
                " class="badge badge-success float-right" >ubah</a>
                <a href="<?= base_url(); ?>cabang/detail_cabang/<?= $cabang['id']; ?>
                " class="badge badge-primary float-right" >detail</a>
            </li>
        <?php endforeach;?>
        </ul>
    </div>
</div>

</div>