

<h3>INFO DETAIL PETANI</h3>


  <div class="container">
            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kecamatan</th>
        <th>Kota</th>
        <th>Nomor Hp</th>
        <th>Nomor KTP</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $data['ptn']['nama']; ?></td>
        <td><?= $data['ptn']['email']; ?></td>
        <td><?= $data['ptn']['alamat']; ?></td>
        <td><?= $data['ptn']['kecamatan']; ?></td>
        <td><?= $data['ptn']['kota']; ?></td>
        <td><?= $data['ptn']['no_hp']; ?></td>
        <td><?= $data['ptn']['no_ktp']; ?></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
