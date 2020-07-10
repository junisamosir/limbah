   
  <div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="form-group mt-5 pt-5">

            <h1 class="h4  mb-4 mt-3 text-center">Edit Data</h1>

            <?php foreach ($users as $users): ?>

             <?= form_open_multipart('admin/edit') ;?>

             	<div class="form-group">
                <select name="id_level" class="form-control form-control-sm form-control-user">
                	 <option value="<?= $users->level ?>"><?= $users->level ?></option>
               		 <?php foreach ($level as $l) : ?>
               		 <option value="<?= $l['id_level']; ?>"><?= $l['level']; ?></option>
               		 <?php endforeach; ?>
           		</select>
           		<?= form_error('id_level', '<small class="text-danger pl-3">',  '</small>'); ?>
           		</div>

             <div class="form-group">
              <input type="text" class="form-control form-control-sm form-control-user" id="nama_user" name="nama_user" placeholder="Nama Lengkap" value="<?= $users->nama_user ?>">
              <!-- Pesan eror -->
              <?= form_error('nama_user', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="text" class="form-control form-control-sm form-control-user" id="email_user"  name="email_user" placeholder="Email" value="<?= $users->email_user ?>">
              <!-- Pesan eror -->
              <?= form_error('email_user', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

             <div class="form-group">
              <input type="number" class="form-control form-control-sm form-control-user" id="phone_user"  name="phone_user" placeholder="No. Telepon" value="<?= $users->phone_user ?>">
              <!-- Pesan eror -->
              <?= form_error('phone_user', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="file" id="image_user"  name="image_user" placeholder="Foto" value="<?= $users->image_user ?>">
              <!-- Pesan eror -->
              <?= form_error('image_user', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="date" class="form-control form-control-sm form-control-user" id="tgl_daftar"  name="tgl_daftar" value="<?= $users->tgl_daftar ?>" readonly>
              <!-- Pesan eror -->
              <?= form_error('tgl_daftar', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <br><hr>
            <div class="float-right mb-4 pb-5">
              <button type="submit" class="btn btn-sm btn-user text-white" style="background-color: #568203;">
                Ubah Akun
              </button>

              <button type="reset" class="btn btn-sm btn-user text-white btn-secondary">
                Batal
              </button>
            </div>

      </div>

      </form>
    <?php endforeach; ?>

    </div>

        <div class="col-md-6">
          <div class="form-group mt-5 pt-5">

               <h1 class="h4 mb-4 mt-4 text-center">Ubah Password</h1>

                  <?= $this->session->flashdata('pesan');?>
                  <form action="<?= base_url('pengguna_admin/edit_password'); ?>" method="post">

              <div class="form-group">
                      <label for="password_lama">Password Lama</label>
                      <input type="password" class="form-control form-control-sm form-control-user" id="password_lama" name="password_lama" value="<?= set_value('password_lama'); ?>">
                      <!-- Pesan eror -->
                      <?= form_error('password_lama', '<small class="text-danger pl-3">',  '</small>'); ?>
                    </div>

            <div class="form-group">
                      <label for="password_baru1">Password Baru</label>
                      <input type="password" class="form-control form-control-sm form-control-user" id="password_baru1" placeholder="*minimal 6 karakter" name="password_baru1" value="<?= set_value('password_baru1'); ?>">
                      <!-- Pesan eror -->
                      <?= form_error('password_baru1', '<small class="text-danger pl-3">',  '</small>'); ?>
                    </div>

            <div class="form-group">
                      <label for="password_baru2">Ulangi Password</label>
                      <input type="password" class="form-control form-control-sm form-control-user" id="password_baru2" name="password_baru2" value="<?= set_value('password_baru2'); ?>">
                      <!-- Pesan eror -->
                      <?= form_error('password_baru2', '<small class="text-danger pl-3">',  '</small>'); ?>
                    </div>

                    <br><hr>
                  <div class="float-right mb-4">
                    <button type="submit" class="btn btn-sm btn-user text-white" style="background-color: #568203;">Ubah Password
                    </button>
                    <button type="reset" class="btn btn-secondary btn-sm btn-user text-white">Batal
                    </button>
                  </div>
            </div>
          </div>
        </div>
      </div>
        </div>
    </div>
  </div>
