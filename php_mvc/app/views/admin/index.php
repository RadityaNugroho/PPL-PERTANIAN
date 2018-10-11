<div class="container mt-5">

	<div class="row">
		<div class="col-md-5">
			<h3>DAFTAR PETANI</h3>
			
				<ul class="list-group">
				<?php foreach ($data['ptn'] as $ptn ): ?>
				<li class="list-group-item"><?= $ptn['nama']; ?>
				<a href="<?= BASEURL; ?>/petani/detail/<?= $ptn['id_user']; ?>" class ="badge badge-primary">detail</a>
				</li>
				<?php endforeach ?>
				</ul>	
		</div>
			<div>
			<a href="<?= BASEURL; ?>/petani/v_tambahPetani" class="badge badge-primary">Tambah Petani Baru +</a>
			</div>
	</div>
	
	
</div>