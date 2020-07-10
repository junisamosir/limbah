<div class="container mb-5 pt-4" style="font-family: Montserrat;">

  	<div class="row pt-4 mt-5 mb-2">
  		<div class="col text-center">
  			<h2>Pesan Masuk</h2>
  		</div>
  	</div><br>

      <div class="container mb-5 pb-5">
      <table class="table table-responsive-md table-bordered table-hover" id="dataTable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama Kontak</th>
          <th>Email</th>
          <th>No. Telp</th>
          <th>Pesan</th>
          <th>Waktu</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      <!-- Pesan -->
          <?= $this->session->flashdata('pesan')?>
        
        <?php
        $no=1;
            foreach ($kontak as $kontak) 
            {
              ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $kontak->nama_kontak ?></td>
                    <td><?= $kontak->email_kontak ?></td>
                    <td><?= $kontak->phone_kontak ?></td>
                    <td><?= $kontak->pesan_kontak ?></td>
                    <td><?= $kontak->tgl_kontak ?></td>
                    <td>
                      <a class="btn btn-danger btn-sm" href="<?= base_url('pesan/hapus/'.$kontak->id_kontak);?>">Hapus</a></td>
                    </td>
                    </tr>
            <?php }
        ?>
      </tbody>
      </table>
      </div>
</div>

	
