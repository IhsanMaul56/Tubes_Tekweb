<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Pemesanan Villa</title>
</head>
<body>
  <div class="container">
    <h1>Pemesanan Villa</h1>
    <form action="submit_pemesanan" method="post">
      <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" class="form-control" id="id" name="id" placeholder="Masukkan ID Anda">
      </div>
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda">
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="nama">Alamat:</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
      </div>
      <div class="form-group">
        <label for="tanggal_masuk">Tanggal Masuk:</label>
        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
      </div>
      <div class="form-group">
        <label for="durasi">Durasi Menginap:</label>
        <input type="number" class="form-control" id="durasi" name="durasi" placeholder="Masukkan jumlah malam">
      </div>
      <div class="form-group">
        <label for="jenis_kamar">Jenis Kamar:</label>
        <select class="form-control" id="jenis_kamar" name="jenis_kamar">
          <option value="Standard">Standard</option>
          <option value="Deluxe">Deluxe</option>
          <option value="Suite">Suite</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tarif">Tarif:</label>
        <input type="number" class="form-control" id="tarif" name="tarif" placeholder="Masukkan tarif">
      </div>
      <button type="submit" class="btn btn-primary">Pesan</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
