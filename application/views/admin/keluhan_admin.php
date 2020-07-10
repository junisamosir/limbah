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
            <th>Alamat</th>
            <th>Keluhan</th>
            <th>Tanggal</th>
            <th>Petugas</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        
        <tbody style="font-size: 14px;">
           <!-- Pesan -->
            <?= $this->session->flashdata('pesan')?>

          <?php
          $no=1;
              foreach ($keluhan_admin as $keluhan) 
              {
                ?>
                  <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $keluhan->nama_user ?></td>
                      <td><?= $keluhan->namabarang_keluhan ?></td>
                      <td><?= $keluhan->alamat_keluhan ?></td>
                      <td><?= $keluhan->keterangan_keluhan ?></td>
                      <td><?= date('d-m-Y H:i:s', $keluhan->tgl_keluhan) ?></td>
                      <td><?= $keluhan->nama_petugas ?>  </td>
                      <td><?= $keluhan->konfirmasi_keluhan ?> </td>
                      <td>
                        <div class=" btn-sm btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn-sm btn btn-primary">
                          <input type="radio" name="options" id="option3">Detail
                        </label>
                        <label class="btn-sm btn btn-danger">
                          <input type="radio" name="hapus" id="option3" href="">Hapus
                        </label>
                      </div>
                      </td>
                      </tr>
              <?php }
          ?>
        </tbody>
      </table>
  </div>
</div>

	