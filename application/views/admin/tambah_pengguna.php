   
  <div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="form-group mt-5 pt-5">

            <h1 class="h4  mb-4 mt-3 text-center">TAMBAH PENGGUNA</h1>

             <form method="POST" action="<?= base_url('pengguna_admin/tambah_pengguna') ?>" enctype="multipart/form-data">

             	<div class="form-group">
                <select name="id_level" class="form-control form-control-sm form-control-user">
                	 <option value="">Pilih level pengguna</option>
               		 <?php foreach ($level as $l) : ?>
               		 <option value="<?= $l['id_level']; ?>"><?= $l['level']; ?></option>
               		 <?php endforeach; ?>
           		</select>
           		<?= form_error('id_level', '<small class="text-danger pl-3">',  '</small>'); ?>
           		</div>

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
              <input type="number" class="form-control form-control-sm form-control-user" id="phone_user"  name="phone_user" placeholder="No. Telepon" value="<?= set_value('phone_user'); ?>">
              <!-- Pesan eror -->
              <?= form_error('phone_user', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="file" id="image_user"  name="image_user" placeholder="Foto">
              <!-- Pesan eror -->
              <?= form_error('image_user', '<small class="text-danger pl-3">',  '</small>'); ?>
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

              <div class="form-group">
              <input type="date" class="form-control form-control-sm form-control-user" id="tgl_daftar"  name="tgl_daftar" value="<?= date("d-M-Y") ?>">
              <!-- Pesan eror -->
              <?= form_error('tgl_daftar', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <br><hr>
            <div class="float-right mb-4 pb-5">
              <button type="submit" class="btn btn-sm btn-user text-white" style="background-color: #568203;">
                Daftar Akun
              </button>

              <button type="reset" class="btn btn-sm btn-user text-white btn-secondary">
                Batal
              </button>
            </div>

      </div>

      </form>

    </div>

        <div class="col-md-6">
          <img src="<?= base_url('assets/'); ?>/img/pengguna.png" class="float-right mt-5 pt-5" height="450">
        </div>
    </div>
  </div>
