<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

  <!-- navbar -->
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Latihan pengayaan</span>
    </div>
  </nav>
  <!-- navbar end -->

  <div class="container min-vh-100 d-flex flex-column justify-content-start align-items-start">
    <div class="d-flex flex-row">
      <a href="<?= base_url('home/form') ?>" class="btn btn-primary m-2">Tambah Data</a>
      <a href="<?= base_url('home') ?>" class="btn btn-secondary m-2">Back To Menu</a>
    </div>

    <table class="table table-sm table-striped mt-2 text-center">
      <thead>
        <tr>
          <th scope="col">No Transaksi</th>
          <th scope="col">Kode Peserta</th>
          <th scope="col">Nama Peserta</th>
          <th scope="col">Usia</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Keluhan</th>
          <th scope="col">Nama Poli</th>
          <th scope="col">Nama Bidan</th>
          <th scope="col">Biaya Administrasi</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datarekammedis as $d): ?>
          <tr>
            <td><?= $d['no_transaksi'] ?></td>
            <td><?= $d['kode_peserta'] ?></td>
            <td><?= $d['nama_peserta'] ?></td>
            <td>
              <?php
              $tanggallahir = new DateTime($d['tanggal_lahir']);
              $now = new DateTime();
              $usia = $now->diff($tanggallahir)->y;
              echo $usia . ' tahun';
              ?>
            </td>
            <td><?= $d['jenis_kelamin'] ?></td>
            <td><?= $d['keluhan'] ?></td>
            <td><?= $d['nama_poli'] ?></td>
            <td><?= $d['nama_bidan'] ?></td>
            <td><?= $d['biaya_admin'] ?></td>
            <td>
              <a href="#" class="btn btn-warning">Edit</a>
              <a href="<?= base_url('home/hapus/' . $d['no_transaksi']) ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>