
<div class="container">
	<?php foreach ($data['produk'] as $produk): ?>
<div class="row">
	<div class="col-md-5">
		<div class="card" style="width: 18rem;">
		  <div class="card-body">
		  	<h5 class="card-title"><?= $produk['nama_produk']; ?></h5>
		    <h6 class="card-subtitle mb-2 text-muted"><?= $produk['kuantitas']; ?></h6>
		    <p class="card-text"><?= $produk['harga_produk']; ?></p>
		  </div>
		</div>
	</div>
</div>
<?php endforeach ?>
</div>
