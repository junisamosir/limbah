  
  <div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
      <div class="col-md-5">
          <div class="form-group mt-5 pt-5">

            <h1 class="h4  mb-4 mt-3 text-center">Detail Artikel</h1><hr>

               <div class="form-group">
               
                  <?php foreach($detail as $detail) : ?>
                    <div class="table">
                      <tr>
                        <td>Judul Artikel : </td>
                        <td><?= $detail->judul_artikel?></td>
                      </tr><br><br>
                      <tr>
                        <td>Isi Artikel : </td>
                        <td><?= $detail->isi_artikel?></td>
                      </tr><br><br>
                      <tr>
                        <td>Tgl Upload : </td>
                        <td><?= $detail->tgl_artikel?></td>
                      </tr>
                    </div>
                  </div>
            
          </div>
        </div>

        <div class="col-md-6 mb-5 pb-5">
          <img src="<?= base_url(). 'assets/img/'.$detail->image_artikel?>" class="float-right mt-5 pt-5" height="400">
        </div>
    </div>
  </div>
<?php endforeach; ?>
</form>

          
                  
               