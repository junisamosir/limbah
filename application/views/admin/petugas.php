<div class="container mb-5 pt-4" style="font-family: Montserrat;">

  	<div class="row pt-4 mt-5 mb-2">
  		<div class="col text-center">
  			<h2>Daftar Petugas</h2>
  		</div>
  	</div>

    <a class="btn btn-sm text-white mb-3" style="background-color: #568203;" href="<?= base_url('petugas_admin/tambah_petugas') ?>"> Tambah Petugas </a><br>

        <div class="container pb-5">
        <table class="table table-responsive-md table-bordered table-hover" id="dataTable">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Petugas</th>
            <th>No. Telepon</th>
            <th>Foto</th>
            <th>Tgl Daftar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        
        <tbody>
           <!-- Pesan -->
            <?= $this->session->flashdata('pesan')?>

          <?php
          $no=1;
              foreach ($petugas as $petugas) 
              {
                ?>
                  <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $petugas->nama_petugas ?></td>
                      <td><?= $petugas->phone_petugas?></td>
                      <td align="center"><img src="<?= base_url('assets/img/petugas/').$petugas->image_petugas?>" width="100"></td>
                      <td><?= $petugas->tgl_daftar; ?></td>
                      <td>
                        <a class="btn btn-success btn-sm" href="<?= base_url('petugas/edit/'. $petugas->id_petugas);?>">Ubah</a>
                        <a class="btn btn-danger btn-sm" href="<?= base_url('petugas/hapus/'.$petugas->id_petugas);?>">Hapus</a>
                      </td>
                      </tr>
              <?php }
          ?>
        </tbody>
      </table>
  </div>
</div>

	