<div class="container" style="font-family: Montserrat;">
    <div class="row justify-content-center">
       <div class="col-md-5">
          <div class="form-group mt-5 pt-5">

               <h1 class="h4 mb-4 mt-4 text-center">Ubah Profil Petugas </h1>

    			<div class="row">
    				<div class="col">
		
						<?= form_open_multipart('_petugas/edit') ;?>

						<div class="form-group">
			               	<label for="email_user">Email</label>
			                <input type="text" class="form-control form-control-sm form-control-user" id="email_user" name="email_user" value="<?= $users['email_user']; ?>" readonly>
			                <!-- Pesan eror -->
			                <?= form_error('email_user', '<small class="text-danger pl-3">',  '</small>'); ?>
		                </div>

						<div class="form-group">
			               	<label for="nama_user">Nama Lengkap</label>
			                <input type="text" class="form-control form-control-sm form-control-user" id="nama_user" name="nama_user" value="<?= $users['nama_user']; ?>">
			                <!-- Pesan eror -->
			                <?= form_error('nama_user', '<small class="text-danger pl-3">',  '</small>'); ?>
		                </div>

						<div class="form-group">
							<label for="nama_user">Foto</label>
							<div class="col-sm-10">
							<div class="row">
								<div class="col-sm-5">
									<img src="<?= base_url('assets/img/user/'). $users['image_user']; ?>" class="img-thumbnail">
								</div>
							<div class="col-sm-9 mt-2">
								 <div class="form-group">
								    <label for="image_user"></label>
								    <input type="file" class="form-control-file" id="image_user" name="image_user">
								  </div>
							</div>
							</div>
							</div>
						</div>
					 	
					 	<hr>
			            <div class="float-right mb-4">
			              <button type="submit" class="btn btn-sm btn-user text-white" style="background-color: #568203;">Ubah Profil
			              </button>
			            </div>

					</form>

   					 </div>
				</div>
			</div>
		</div>
		<div class="col-md-5">
            <div class="form-group mt-5 pt-5">

               <h1 class="h4 mb-4 mt-4 text-center">Ubah Password</h1>

               		<?= $this->session->flashdata('pesan');?>
               		<form action="<?= base_url('_petugas/ubah_password'); ?>" method="post">

    					<div class="form-group">
			               	<label for="password_lama">Password Lama</label>
			                <input type="password" class="form-control form-control-sm form-control-user" id="password_lama" name="password_lama" value="<?= set_value('password_lama'); ?>">
			                <!-- Pesan eror -->
			                <?= form_error('password_lama', '<small class="text-danger pl-3">',  '</small>'); ?>
		                </div>

						<div class="form-group">
			               	<label for="password_baru1">Password Baru</label>
			                <input type="password" class="form-control form-control-sm form-control-user" id="password_baru1" placeholder="*minimal 6 karakter" name="password_baru1" value="<?= set_value('password_baru1'); ?>">
			                <!-- Pesan eror -->
			                <?= form_error('password_baru1', '<small class="text-danger pl-3">',  '</small>'); ?>
		                </div>

						<div class="form-group">
			               	<label for="password_baru2">Ulangi Password</label>
			                <input type="password" class="form-control form-control-sm form-control-user" id="password_baru2" name="password_baru2" value="<?= set_value('password_baru2'); ?>">
			                <!-- Pesan eror -->
			                <?= form_error('password_baru2', '<small class="text-danger pl-3">',  '</small>'); ?>
		                </div>

		                <br><hr>
			            <div class="float-right mb-4">
			              <button type="submit" class="btn btn-sm btn-user text-white" style="background-color: #568203;">Ubah Password
			              </button>
			            </div>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>

