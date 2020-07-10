<div class="container mb-5 pt-4" style="font-family: Montserrat;">
	<div class="row pt-4 mt-5 mb-4">
		<div class="col text-center mb-2 ">
			<h2>Kontak Kami</h2>
			<small style="color: #568203;">Beri tahu kami pesan dan kesan terbaik anda bersama kami!</small>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-md-5">

			<div class="card border-success mb-3 text-center">
  				<div class="card-header">Lokasi Kami</div>
				  <div class="card-body text-success">
				    <div class="embed-responsive embed-responsive-16by9">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.0456059474932!2d98.65146392278825!3d3.5664791592742806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fdb9bbb0b39%3A0xb7571f05d5bc5225!2sJl.%20Pembangunan%20No.3%2C%20Padang%20Bulan%20Selayang%20I%2C%20Kec.%20Medan%20Selayang%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020153!5e0!3m2!1sen!2sid!4v1590938051821!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				    <p class="card-text mt-3">Jl. Pembangunan USU No. 3</p>
				  </div>
				</div>
			</div>

			<div class="col-md-6">
				<form class="user" method="post" action="<?= base_url('kontak'); ?>">
					
         			 <!-- Menampilkan pesan -->
     				 <?= $this->session->flashdata('pesan'); ?>

     			  <p class="text-center" style="color: #568203; word-spacing: 5px;">Email: <span class="font-weight-bold">kedanmedan@gmail.com</span> Telepon: <span class="font-weight-bold">+62852-7222-2222</p>

				  <div class="form-group">
				    <label for="nama_kontak">Nama</label>
				    <input type="text" class="form-control form-control-sm form-control-user" id="nama_kontak" name="nama_kontak" value="<?= set_value('nama_kontak'); ?>">
				    <!-- Pesan eror -->
            		<?= form_error('nama_kontak', '<small class="text-danger pl-3">',  '</small>'); ?>
				  </div>

				  <div class="form-group">
				    <label for="email_kontak">Email</label>
				    <input type="text" class="form-control form-control-sm form-control-user" id="email_kontak" name="email_kontak" value="<?= set_value('email_kontak'); ?>">
				    <!-- Pesan eror -->
            		<?= form_error('email_kontak', '<small class="text-danger pl-3">',  '</small>'); ?>
				  </div>

				  <div class="form-group">
				    <label for="phone_kontak">No. Telepon</label>
				    <input type="text" class="form-control form-control-sm form-control-user" id="phone_kontak" name="phone_kontak" value="<?= set_value('phone_kontak'); ?>">
				    <!-- Pesan eror -->
            		<?= form_error('phone_kontak', '<small class="text-danger pl-3">',  '</small>'); ?>
				  </div>

				  <div class="form-group">
				    <label for="pesan_kontak">Pesan</label>
				    <textarea type="text" class="form-control form-control-sm form-control-user" id="pesan_kontak" name="pesan_kontak" value="<?= set_value('pesan_kontak'); ?>"></textarea>
				    <!-- Pesan eror -->
            		<?= form_error('pesan_kontak', '<small class="text-danger pl-3">',  '</small>'); ?>
				  </div>
				  <hr>
				  <div class="form-group float-right">
				  	 <button type="submit" style="background-color: #568203;" class="btn btn-sm btn-user btn-sm text-white">Kirim
         			 </button>
				  </div>

				</form>
			</div>
			</div>
		</div>
	</div>