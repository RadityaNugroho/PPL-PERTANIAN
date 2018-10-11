<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container mt-5">
  <h1 style="text-align: center;">REGISTRASI</h1>

 <form class="form-horizontal" action="<?= BASEURL; ?>/user/run" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form> 
</div>