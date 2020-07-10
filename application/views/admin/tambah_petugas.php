   
  <div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="form-group mt-5 pt-5">

            <h1 class="h4  mb-4 mt-3 text-center">Tambah Petugas</h1>

            <?= form_open_multipart('petugas_admin/tambah_petugas') ;?>

             <div class="form-group">
             	<label for="nama_petugas">Nama Petugas</label>
              <input type="text" class="form-control form-control-sm form-control-user" id="nama_petugas" name="nama_petugas" value="<?= set_value('nama_petugas'); ?>">
              <!-- Pesan eror -->
              <?= form_error('nama_petugas', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

           <div class="form-group">
              <label for="phone_petugas">No. Telepon Petugas</label>
              <input type="text" class="form-control form-control-sm form-control-user" id="phone_petugas" name="phone_petugas" value="<?= set_value('phone_petugas'); ?>">
              <!-- Pesan eror -->
              <?= form_error('phone_petugas', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <label for="image_petugas">Foto Petugas</label><br>
              <input type="file" id="image_petugas" name="image_petugas" value="<?= set_value('image_petugas'); ?>"></input>
              <!-- Pesan eror -->
              <?= form_error('image_petugas', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <hr>
            <div class="float-right mb-5 pb-5">
              <button type="submit" class="btn btn-sm btn-user text-white" style="background-color: #568203;">
                Tambah
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <img src="<?= base_url('assets/'); ?>/img/users.png" class="float-right mt-5 pt-5" height="350">
        </div>
    </div>
  </div>
</form>