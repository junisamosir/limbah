    
  <div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="form-group mt-5 pt-5">

            <h1 class="h4  mb-4 mt-3 text-center">Keluhan</h1>

             <?= form_open_multipart('jadwal_user') ;?>

            <div class="form-group">
              <input type="text" class="form-control form-control-sm form-control-user" id="namabarang_keluhan" name="namabarang_keluhan" placeholder="Nama Limbah" value="<?= set_value('namabarang_keluhan'); ?>">
              <!-- Pesan eror -->
              <?= form_error('namabarang_keluhan', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <textarea rows="2"type="text" class="form-control form-control-sm form-control-user" id="alamat_keluhan"  name="alamat_keluhan" placeholder="Detail Lokasi" value="<?= set_value('alamat_keluhan'); ?>"></textarea>
              <!-- Pesan eror -->
              <?= form_error('alamat_keluhan', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <textarea rows="3"type="text" class="form-control form-control-sm form-control-user" id="keterangan_keluhan"  name="keterangan_keluhan" placeholder="Keterangan" value="<?= set_value('keterangan_keluhan'); ?>" value="<?= set_value('keterangan_keluhan'); ?>"></textarea>
              <!-- Pesan eror -->
              <?= form_error('keterangan_keluhan', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="file" id="image_keluhan"  name="image_keluhan" placeholder="Foto">
              <!-- Pesan eror -->
              <?= form_error('image_keluhan', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

        </div>

            <hr>
            <div class="float-right mb-5 pb-4">
              <button type="submit" class="btn btn-sm btn-user text-white" style="background-color: #568203;">Kirim</button>
            </div>

      </div>
      <div class="col-md-6">
          <img src="<?= base_url('assets/'); ?>/img/keluhan.png" class="float-right mt-5 pt-5" height="450">
      </div>
    </div> 
    </div>
  </div>
</form>