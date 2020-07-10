<!-- Top Bar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-transparant shadow-sm p-3 mb-5 bg-white rounded">
  <div class="container ">
    <a class="navbar-brand font-weight-bold" href="<?= base_url('front'); ?>">Kedan Medan!</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('admin'); ?>">BERANDA <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('pengguna_admin'); ?>">PENGGUNA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('artikel_admin'); ?>">ARTIKEL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('petugas_admin'); ?>">PETUGAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('keluhan_admin'); ?>">DATA LAPORAN</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?= base_url('pesan_admin'); ?>">PESAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/logout'); ?>">LOGOUT</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>