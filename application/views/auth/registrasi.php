  
  <div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="form-group mt-4 pt-5">

            <h1 class="h4  mb-4 mt-3 text-center">DAFTAR</h1>

         <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
           <div class="form-group">
            <input type="text" class="form-control form-control-sm form-control-user" id="nama_user" name="nama_user" placeholder="Nama Lengkap" value="<?= set_value('nama_user'); ?>">
            <!-- Pesan eror -->
            <?= form_error('nama_user', '<small class="text-danger pl-3">',  '</small>'); ?>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-sm form-control-user" id="email_user"  name="email_user" placeholder="Email" value="<?= set_value('email_user'); ?>">
            <!-- Pesan eror -->
            <?= form_error('email_user', '<small class="text-danger pl-3">',  '</small>'); ?>
          </div>

           <div class="form-group">
            <input type="text" class="form-control form-control-sm form-control-user" id="phone_user"  name="phone_user" placeholder="No. Telepon" value="<?= set_value('phone_user'); ?>">
            <!-- Pesan eror -->
            <?= form_error('phone_user', '<small class="text-danger pl-3">',  '</small>'); ?>
          </div>

          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="password" class="form-control form-control-sm form-control-user" id="password1" name="password1" placeholder="Password min. 6 karakter">  
              <!-- Pesan eror -->
              <?= form_error('password1', '<small class="text-danger pl-3">',  '</small>'); ?>      
            </div>

          <div class="col-sm-6">
            <input type="password" class="form-control form-control-sm form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
          </div>

        </div>

          <button type="submit" class="btn btn-sm btn-user btn-block text-white" style="background-color: #568203;">
            Daftar Akun
          </button>
              
     <hr>
        <div class="text-center">
          <a class="small" style="color: #568203;" href="<?= base_url('auth'); ?>">Sudah punya akun? Masuk!</a>
        </div>

    </div>
    </div>

        <div class="col-md-6 mb-3 pb-4">
          <img src="<?= base_url('assets/'); ?>/img/registrasi.png" class="float-right mt-5 pt-5" height="450">
        </div>
</div>
</div>
</form>