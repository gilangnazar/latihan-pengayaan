<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
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

  <!-- card menu -->
  <div class="container min-vh-100 d-flex flex-column justify-content-start align-items-center">
    <div class="card mb-3" style="width: 18rem;">
      <div class="card-header">Menu Form</div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <a href="#" class="text-decoration-none text-body">Data Peserta</a>
          </li>
          <li class="list-group-item">
            <a href="#" class="text-decoration-none text-body">Data Bidan</a>
          </li>
          <li class="list-group-item">
            <a href="#" class="text-decoration-none text-body">Data Poli</a>
          </li>
          <li class="list-group-item">
            <a href="<?= base_url('home/form') ?>" class="text-decoration-none text-body">Data Rekam Medis</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- card menu end -->

    <!-- card menu -->
    <div class="container min-vh-100 d-flex flex-column justify-content-start align-items-center">
      <div class="card mb-3" style="width: 18rem;">
        <div class="card-header">Laporan</div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <a href="#" class="text-decoration-none text-body">List Peserta</a>
            </li>
            <li class="list-group-item">
              <a href="#" class="text-decoration-none text-body">List Bidan</a>
            </li>
            <li class="list-group-item">
              <a href="<?= base_url('home/datarekammedis') ?>" class="text-decoration-none text-body">List Rekam Medis</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- card menu end -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>