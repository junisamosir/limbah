    
  <div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="form-group mt-5 pt-5">

            <h1 class="h4  mb-4 mt-3 text-center">Ubah Petugas</h1>

             <?= form_open_multipart('admin/petugas/edit') ;?>

            <div class="form-group">
              <input type="text" class="form-control form-control-sm form-control-user" id="nama_petugas" name="nama_petugas" placeholder="Nama Petugas" value="">
              <!-- Pesan eror -->
              <?= form_error('nama_petugas', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="text" class="form-control form-control-sm form-control-user" id="phone_petugas" name="phone_petugas" placeholder="No. Telepon Petugas" value="">
              <!-- Pesan eror -->
              <?= form_error('phone_petugas', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <label for="image_artikel">Foto</label><br>
              <input type="file" id="image_artikel"  name="image_artikel" placeholder="Foto">
              <!-- Pesan eror -->
              <?= form_error('image_artikel', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

        </div>

            <hr>
            <div class="float-right mb-4">
              <button type="submit" class="btn btn-sm btn-user text-white" style="background-color: #568203;">
                Edit
              </button>
            </div>

      </div>
      <div class="col-md-6 mb-4 pb-4">
          <img src="<?= base_url('assets/'); ?>/img/artikel.png" class="float-right mt-5 pt-5" height="450">
      </div>
    </div> 
    </div>
  </div>
</form>