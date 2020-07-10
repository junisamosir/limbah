  
  <div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="form-group mt-5 pt-5">

            <h1 class="h4  mb-4 mt-3 text-center">Tambah Artikel</h1>

              <?= form_open_multipart('artikel_admin/tambah') ;?>

               <div class="form-group">
               	<label for="judul_artikel">Judul Artikel</label>
                <input type="text" class="form-control form-control-sm form-control-user" id="judul_artikel" name="judul_artikel" value="<?= set_value('judul_artikel'); ?>">
                <!-- Pesan eror -->
                <?= form_error('judul_artikel', '<small class="text-danger pl-3">',  '</small>'); ?>
              </div>

              <div class="form-group">
                <label for="isi_artikel">Isi Artikel</label>
                <textarea rows="6" type="text" class="form-control form-control-sm form-control-user" id="isi_artikel" name="isi_artikel" value="<?= set_value('isi_artikel'); ?>"></textarea>
                <!-- Pesan eror -->
                <?= form_error('isi_artikel', '<small class="text-danger pl-3">',  '</small>'); ?>
              </div>

              <div class="form-group">
                <label for="image_artikel">Gambar Artikel</label><br>
                <input type="file" id="image_artikel" name="image_artikel" value="<?= set_value('image_artikel'); ?>"></input>
                <!-- Pesan eror -->
                <?= form_error('image_artikel', '<small class="text-danger pl-3">',  '</small>'); ?>
              </div>

              <div class="form-group">
                <label for="tgl_artikel">Tanggal Artikel</label>
                <input type="date" class="form-control form-control-sm form-control-user" id="tgl_artikel" name="tgl_artikel" value="<?= set_value('tgl_artikel'); ?>">
                <!-- Pesan eror -->
                <?= form_error('tgl_artikel', '<small class="text-danger pl-3">',  '</small>'); ?>
              </div>

            <hr>
            <div class="float-right mb-4">
              <button type="submit" class="btn btn-sm btn-user text-white" style="background-color: #568203;">Tambah
              </button>

              <button type="reset" class="btn btn-sm btn-user text-white btn-secondary">
                Batal
              </button>
              </div>
          </div>
        </div>

        <div class="col-md-6">
          <img src="<?= base_url('assets/'); ?>/img/artikel.png" class="float-right mt-5 pt-5" height="450">
        </div>
    </div>
  </div>
</form>