<div class="container mt-5">
  <h1 style="text-align: center;">Daftarkan Produk Anda</h1>

 <form class="form-horizontal" action="<?= BASEURL; ?>/produk/input" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Nama Produk:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_produk" placeholder="Masukan Nama Produk">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Harga:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="harga_produk" placeholder="Masukan Harga Produk">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Stok:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="stok" placeholder="Masukan Stok Produk">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Deskripsi:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Produk">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Uplod Foto:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="gambar_p" placeholder="">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form> 
</div>