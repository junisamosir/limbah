<div class="container mb-5 pt-4" style="font-family: Montserrat;">
  <div class="row pt-4 mt-5 mb-2">
		<div class="col text-center">
			<h2>Daftar Pengguna</h2>
		</div>
	</div>
 
	<a class="btn btn-sm text-white mb-3" style="background-color: #568203;" href="<?= base_url('pengguna_admin/tambah_pengguna') ?>"> Tambah Pengguna </a><br>

   <!-- Pesan -->
    <?= $this->session->flashdata('pesan')?>

    <div class="container pb-5">
    <table class="table table-responsive-md table-bordered table-hover" id="dataTable">
    <thead>
      <tr>
        <th>No.</th>
        <th>Level</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No. Telepon</th>
        <th>Tgl Daftar</th>
        <th>Foto</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>

    	<?php
      $no=1;
        foreach ($users as $users) :?> 

            <tr>
                <td><?= $no++ ?> </td>
                <td><?= $users->level ?> </td>
                <td><?= $users->nama_user ?> </td>
                <td><?= $users->email_user ?> </td>
                <td><?= $users->phone_user ?> </td>
                <td><?= $users->tgl_daftar ?> </td>
                <td align="center"><img src="<?= base_url('').'assets/img/'. $users->image_user?>"  width="60"></td>
                <td class="text-center">
                  <a class="btn btn-primary btn-sm" href="<?= base_url('pengguna_admin/detail/'. $users->id_user);?>">Detail</a>
                  <a class="btn btn-success btn-sm" href="<?= base_url('pengguna_admin/edit/'. $users->id_user);?>">Ubah</a>
                  <a class="btn btn-danger btn-sm" href="<?= base_url('pengguna_admin/hapus/'. $users->id_user);?>">Hapus</a>
                </td>
                </tr>
      <?php endforeach; ?>
    </tbody>
    </table>
  </div>
</div>