<div class="container mb-5 pt-4" style="font-family: Montserrat;">
 
	<div class="row pt-4 mt-5 mb-2">
		<div class="col text-center">
			<h2>Artikel</h2>
		</div>
	</div>

<div class="pb-4">
	<a class="btn btn-sm text-white mb-3" style="background-color: #568203;" href="<?= base_url('artikel_admin/tambah') ?>"> Tambah Artikel </a> <br> <br>
 
	<!-- Pesan -->
    <?= $this->session->flashdata('pesan')?>
	<?= form_open_multipart('artikel/admin') ;?>

	<div class="container pb-4">
    <table class="table table-responsive-md table-bordered table-hover" id="dataTable">
    <thead>
      <tr>
        <th>No.</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Foto</th>
        <th>Tgl Upload</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>

    	<?php
      $no=1;
        foreach ($artikel as $artikel) :?> 

            <tr>
                <td><?= $no++ ?> </td>
                <td><?= $artikel->judul_artikel ?> </td>
                <td><?= $artikel->isi_artikel ?> </td>
                <td align="center"><img src="<?= base_url('').'assets/img/'. $artikel->image_artikel?>"  width="60"></td>
                <td><?= $artikel->tgl_artikel ?> </td>
                <td class="text-center">
                  <a class="btn btn-primary btn-sm" href="<?= base_url('artikel_admin/detail/'. $artikel->id_artikel);?>">Detail</a>
                  <a class="btn btn-success btn-sm" href="<?= base_url('artikel_admin/edit/'. $artikel->id_artikel);?>">Ubah</a>
                  <a class="btn btn-danger btn-sm" href="<?= base_url('artikel_admin/hapus/'. $artikel->id_artikel);?>">Hapus</a>
                </td>
                </tr>
      <?php endforeach; ?>
    </tbody>
    </table>
  </div>
</div>

