<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>/css/bootstrap.min.css" >
    <!-- Link CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>/style.css">
    <!-- MY FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- DATA TABLES-->
    <link href="<?= base_url('assets/');?>datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Top Bar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-transparant shadow-sm p-2 mb-5 bg-white rounded">
  <div class="container ">
    <a class="navbar-brand font-weight-bold" href="<?= base_url('front'); ?>">Kedan Medan!</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('front'); ?>">BERANDA <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('tentang'); ?>">TENTANG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('artikel'); ?>">ARTIKEL</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?= base_url('kontak'); ?>">KONTAK</a>
        </li>
         <li class="nav-item">
          <a class="nav-link"  href="<?= base_url('auth'); ?>">MASUK</a>
        </li>
      </ul>
    </div>
  </div>
</nav>