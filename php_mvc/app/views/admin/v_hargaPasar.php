<div class="container mt-5">
	
<hr>
  <div>
        <a href="<?= BASEURL; ?>/petani/v_tambahHarga" class="badge badge-primary">Tambah Harga +</a>
  </div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Harga Pasar</th>
        <th>Jenis</th>
        
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['h_pasar'] as $hrg ): ?>
      <tr>
        <th><?=$hrg['tanggal'];?></th>
        <th><?=$hrg['harga_pasar'];?></th>
        <th><?=$hrg['jenis'];?></th>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table> 
</div>