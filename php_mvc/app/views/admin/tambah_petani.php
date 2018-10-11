<div class="container mt-5">
	<h1 style="text-align: center;">PENDAFTARAN PETANI</h1>

 <form class="form-horizontal" action="<?= BASEURL; ?>/petani/createPetani" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Nama:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Petani">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Masukan Email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Alamat:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Kecamatan:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kecamatan" placeholder="Masukan Kecamatan">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Kota:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kota" placeholder="Masukan Kota">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Nomor Hp:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="no_hp" placeholder="Masukan Nomor Hp">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Nomor KTP:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="no_ktp" placeholder="Masukan Nomor KTP">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="Buat Username untuk Petani">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="password" placeholder="Buat Password untuk Petani">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form> 
</div>