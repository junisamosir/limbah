
  <div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
       <div class="col-md-5">
          <div class="form-group mt-5 pt-5">

               <h1 class="h4 mb-4 mt-4 text-center">MASUK</h1>

                <!-- Menampilkan pesan -->
                <?= $this->session->flashdata('pesan'); ?>

               <form class="user" method="post" action="<?= base_url('auth'); ?>">
                <!-- Pesan eror -->
                 <?= form_error('email_user','<small class="text-danger pl-3">','</small>'); ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm form-control-user form-control" id="email_user" name="email_user" placeholder="Email" value="<?= set_value('email_user'); ?>">
                </div>

             <!-- Pesan eror -->
                 <?= form_error('password', '<small class="text-danger pl-3">',  '</small>'); ?>
                <div class="form-group">
                  <input type="password" class="form-control form-control-sm form-control-user " id="password" name="password" placeholder="Password">
                </div>

                 <button class="btn btn-user btn-sm text-white" type="submit" style="background-color: #568203;">
                  Masuk
                </button>

               <hr>
               <div class="text-center">
                 <a class="small" style="color: #568203;" href="<?= base_url('auth/registrasi'); ?>">Buat Akun!</a>
               </div>

          </div>
         </div>

          <div class="col-md-7 mb-3 pb-4">
            <img src="<?= base_url('assets/'); ?>/img/login.png" class="float-right mt-5 pt-5" height="450">
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
