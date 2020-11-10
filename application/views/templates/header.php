<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title><?php echo $judul;?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">Data Karyawan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
          <a class="nav-link" href="<?=base_url();?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="<?= base_url();?>karyawan">Karyawan</a>
          <a class="nav-link" href="<?= base_url();?>tentang">Tentang</a>
      </div>
    </div>
    </div>
</nav> 
<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Home">...</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home"></a></li>
      <span class="sr-only">(current)</span></a>
      <li><a class="nav-link" href="<?= base_url();?>home">Home</a></li>
      <li><a class="nav-link" href="<?= base_url();?>karyawan">Karyawan</a></li>
      <li><a class="nav-link" href="<?= base_url();?>tentang">Tentang</a></li>
    </ul>
  </div>
</nav>
 -->