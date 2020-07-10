    
  <div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="form-group mt-5 pt-5">

            <h1 class="h4  mb-4 mt-3 text-center">Ubah Artikel</h1>

             <?php foreach ($artikel as $artikel) : ?>

             <form method="POST" action="<?= base_url('artikel_admin/edit') ?>" enctype="multipart/form-data">

            <div class="form-group">
              <input type="text" class="form-control form-control-sm form-control-user" id="judul_artikel" name="judul_artikel" placeholder="Judul Artikel" value="<?= $artikel->judul_artikel ?>">
              <!-- Pesan eror -->
              <?= form_error('judul_artikel', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <textarea rows="6" type="text" class="form-control form-control-sm form-control-user" id="isi_artikel"  name="isi_artikel" value="<?= $artikel->isi_artikel ?>"></textarea>
              <!-- Pesan eror -->
              <?= form_error('isi_artikel', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="file" id="image_artikel"  name="image_artikel" placeholder="Foto" value="<?= $artikel->image_artikel ?>">
              <!-- Pesan eror -->
              <?= form_error('image_artikel', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="date" class="form-control form-control-sm form-control-user" id="tgl_artikel"  name="tgl_artikel" value="<?= $artikel->tgl_artikel ?>" readonly>
              <!-- Pesan eror -->
              <?= form_error('tgl_artikel', '<small class="text-danger pl-3">',  '</small>'); ?>
            </div>

        </div>

            <hr>
            <div class="float-right mb-4">
              <button type="submit" class="btn btn-sm btn-user text-white" style="background-color: #568203;">
                Edit
              </button>
              <button type="reset" class="btn btn-sm btn-user text-white btn-secondary">
                Batal
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
<?php endforeach; ?>