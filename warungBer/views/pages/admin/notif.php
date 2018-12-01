<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" >WaBer.com</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="?controller=home&action=homeAdmin">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="?controller=registerAdmin&action=register">Daftarkan Petani</a></li>
          <li class="active"><a>Data Petani</a></li>
          <li><a href="?controller=registerAdmin&action=tampilProduk">Produk Petani</a></li>
                <li ><a href="?controller=keranjang&action=transaksiAdmin">Pembayaran</a></li>
          <li ><a >Harga Pasar</a></li>
          
        </ul>
        
        <ul class="nav navbar-nav navbar-right">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_user']; ?><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="container">

    <div class="row">
    
    <div class="col-md-6">
      <p><h1>Input Notifikasi</h1></p>
      <div class="form">
        <form method="POST">
          <input type="hidden" name="controller" value="registerAdmin">
          <input type="hidden" name="action" value="notifikasi">

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"></span>
            <input name="subject" type="text" class="form-control" placeholder="Masukkan Subject Notifikasi" aria-describedby="basic-addon1"
            required>
          </div>
          <br>

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"></span>
            <input name="notifikasi" type="text" class="form-control" placeholder="Notifikasi" aria-describedby="basic-addon1"
            required>
          </div>
          <br>
          
          <p align="right">
            <button type="submit" class="btn btn-success" style="margin-top:20px;">SUBMIT</button>
          </p>
        </form>
      </div>
    </div>
  </div>

    <div>
      
    </div>
</div>
</body>
</html>