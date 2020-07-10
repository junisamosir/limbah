<div class="container mb-5 pt-4" style="font-family: Montserrat;">
  <div class="row pt-4 mt-5 mb-4">
    <div class="col text-center mb-2">
      <h2>Selamat Datang </h2>
      <small style="color: #568203;">Panggil kami saja untuk jemput limbah kamu!</small>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">

      <a class="btn btn-sm text-white mb-3" style="background-color: #568203;" href="<?= base_url('riwayat') ?>"> Riwayat </a><br>
      
    <!-- Pesan -->
    <?= $this->session->flashdata('pesan')?>
    

        <div class="card bg-light mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?= base_url('assets/img/user/') . $users['image_user']; ?>" class="card-img" alt="...">
            </div>

              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold"> <?= $users['nama_user']; ?> </h5>
                  <p class="card-text"> <?= $users['email_user']; ?> <br> <?= $users['phone_user']; ?></p>
                  <p class="card-text"><small class="text-muted">Mendaftar sejak  <?= $users['tgl_daftar']; ?></small></p>
                  <a href="<?= base_url('user/edit'); ?>" class="btn btn-sm text-white" style="background-color: #568203;">Ubah</a>
                </div>
              </div>
            </div>
        </div>

        <br>
        <div>
          <hr><span>Menemukan limbah B3 tidak sesuai dengan tempatnya? <hr> Atau kamu punya limbah B3 penanganan COVID-19 tapi tidak tahu mau buang kemana? <hr> Cepat beritahu kami dengan cara klik</span><span class="font-weight-bold"> LAPOR</span> atau klik <a class="small font-weight-bold" style="color: #568203;" href="<?= base_url('keluhan'); ?>">disini!</a>
          <hr class="mb-5">
        </div>
  </div>

  <div class="col-md-5">
    <img src="<?= base_url('assets/'); ?>/img/welcome_admin.png" class="float-right" height="300">
  </div>

</div>
</div>