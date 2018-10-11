<div class="container">
  <h1 style="text-align: center;">Memasukkan Harga Pasar</h1>

 <form class="form-horizontal" action="<?= BASEURL; ?>/hargaPasar/createHarga" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tanggal:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tanggal" placeholder="Masukan Nama Petani">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Harga Pasar:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="harga_pasar" placeholder="Masukan Email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Jenis:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="jenis" placeholder="Masukan Alamat">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
