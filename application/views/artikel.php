<div class="container mb-5 pt-4" style="font-family: Montserrat;">
	<div class="row pt-4 mt-5 mb-4">
		<div class="col text-center mb-2">
			<h2>Artikel</h2>
			<span style="color: #568203;"> Mari membaca yuk! </span>
		</div>
	</div>
 
	<div class="pb-5">

	<div class="row">	
    	<?php foreach ($artikel as $artikel) : ?>	
			<div class="col-sm-12 col-lg-4">
				<article class="c-event u-p-zero">		
	 				 <div class="row mb-4">
						<div class="col-md">
							<div class="card" height=" 215">
				  <img src="<?= base_url('assets/img/artikel/').$artikel['image_artikel']?>" class="card-img" alt="...">
				  <div class="card-body">
				    <h5 class="card-title"> <?php echo $artikel['judul_artikel'] ?></h5>
				    <p class="card-text"><?php echo $artikel['isi_artikel'] ?></p>
				    <a href="<?= base_url('artikel_admin/edit') ?>" class="btn btn-sm text-white" style="background-color: #568203;">Baca</a>
				  </div>

				</div>
				
			</div>
			</article>

						</div>
                    <?php endforeach; ?>

					</div>
<!--
		<div class="col-md">
			<div class="card">
			  <img src="assets/img/front2.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-sm text-white" style="background-color: #568203;">Baca</a>
			  </div>
			</div>
		</div>

		<div class="col-md">
			<div class="card">
			  <img src="assets/img/front2.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-sm text-white" style="background-color: #568203;">Baca</a>
			  </div>
			</div>
		</div>
	</div>

	<!-- Baris Kedua
	<div class="row mb-4">
		<div class="col-md">
			<div class="card">
			  <img src="assets/img/front2.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-sm text-white" style="background-color: #568203;">Baca</a>
			  </div>
			</div>
		</div>

		<div class="col-md">
			<div class="card">
			  <img src="assets/img/front2.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-sm text-white" style="background-color: #568203;">Baca</a>
			  </div>
			</div>
		</div>

		<div class="col-md">
			<div class="card">
			  <img src="assets/img/front2.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-sm text-white" style="background-color: #568203;">Baca</a>
			  </div>
			</div>
		</div>
	</div>

	<!-- Baris Ketiga--
	<div class="row mb-5 pb-5">
		<div class="col-md">
			<div class="card">
			  <img src="assets/img/front2.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-sm text-white" style="background-color: #568203;">Baca</a>
			  </div>
			</div>
		</div>

		<div class="col-md">
			<div class="card">
			  <img src="assets/img/front2.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-sm text-white" style="background-color: #568203;">Baca</a>
			  </div>
			</div>
		</div>

		<div class="col-md">
			<div class="card">
			  <img src="assets/img/front2.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-sm text-white" style="background-color: #568203;">Baca</a>
			  </div>
			</div> -->
		</div>
	</div>

</div>