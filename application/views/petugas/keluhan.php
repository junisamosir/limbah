<div class="container mb-5 pt-4" style="font-family: Montserrat;">

    <div class="row pt-4 mt-5 mb-2">
      <div class="col text-center">
        <h2>Data Keluhan Masuk</h2>
      </div>
    </div>

        <div class="container pb-5">
        <table class="table table-responsive-md table-bordered table-hover" id="dataTable">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Limbah</th>
            <th>Gambar</th>
            <th>Alamat</th>
            <th>Keluhan</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        
        <tbody style="font-size: 14px;">
           <!-- Pesan -->
            <?= $this->session->flashdata('pesan')?>

          <?php
          $no=1;
              foreach ($keluhan as $keluhan) 
              {
                ?>
                  <tr>
                      <td><?= $no++ ?></td>
                      <td><?php echo $keluhan->nama_user ?></td>
                      <td><?php echo $keluhan->namabarang_keluhan ?></td>
                      <td align="center"><img src="<?= base_url('assets/img/keluhan/').$keluhan->image_keluhan?>" width="100"></td>
                      <td><?php echo $keluhan->alamat_keluhan ?></td>
                      <td><?php echo $keluhan->keterangan_keluhan ?></td>
                      <td><?= date('d-m-Y H:i:s', $keluhan->tgl_keluhan) ?></td>
                       <td><?php echo $keluhan->status_keluhan ?></td>
                      <td align="center">
                        <a class="btn btn-success btn-sm" href="">Angkut</a>
                      </td>
                      </tr>
              <?php }
          ?>
        </tbody>
      </table>
  </div>
</div>

  