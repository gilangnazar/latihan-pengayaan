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

  <div class="container min-vh-100 d-flex flex-column justify-content-start align-items-center">
    <form method="POST" action="<?= base_url('home/simpan') ?>">
      <div class="mb-3">
        <label for="no_transaksi" class="form-label">No Transaksi</label>
        <input type="text" class="form-control" name="no_transaksi">
      </div>
      <div class="mb-3">
        <label class="form-label">Nama Peserta</label>
        <select class="form-select" name="kode_peserta">
          <?php foreach ($peserta as $p) : ?>
            <option value="<?= $p['kode_peserta'] ?>"> <?= $p['nama_peserta'] ?> </option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="mb-3">
        <div class="row">
          <div class="col">
            <label class="form-label">Tanggal Berobat</label>
            <select class="form-select" name="tanggal_berobat">
              <?php foreach ($tanggal as $t) : ?>
                <option value="<?= $t ?>"> <?= $t ?> </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col">
            <label class="form-label">Bulan Berobat</label>
            <select class="form-select" name="bulan_berobat">
              <?php foreach ($bulan as $b) : ?>
                <option value="<?= $b ?>"> <?= $b ?> </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col">
            <label class="form-label">Tahun Berobat</label>
            <input type="text" class="form-control" name="tahun_berobat">
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Nama Bidan</label>
        <select class="form-select" name="kode_bidan">
          <?php foreach ($bidan as $b) : ?>
            <option value="<?= $b['kode_bidan'] ?>"> <?= $b['nama_bidan'] ?> </option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="keluhan" class="form-label">Keluhan</label>
        <input type="text" class="form-control" name="keluhan">
      </div>
      <div class="mb-3">
        <label for="biaya_admin" class="form-label">Biaya Admin</label>
        <input type="text" class="form-control" name="biaya_admin">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>