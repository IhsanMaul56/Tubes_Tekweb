<!DOCTYPE html>
<html>
<head>
    <title>Form Pembayaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>PEMBAYARAN</h2>
        <form action="pembayaran/proses_pembayaran" method="POST">
            <div class="form-group">
                <label for="cari_pesanan">Cari Pesanan:</label>
                <input type="text" name="cari_pesanan" id="cari_pesanan" class="form-control">
                <button type="submit" class="btn btn-primary mt-3">Cari</button>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Jenis Kelamin">Jenis Kelamin:</label>
                    <input type="text" name="Jenis Kelamin" id="Jenis Kelamin" class="form-control" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tanggal_masuk">Tanggal Masuk:</label>
                    <input type="text" name="tanggal_masuk" id="tanggal_masuk" class="form-control" placeholder="YYYY-MM-DD" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="durasi">Durasi:</label>
                    <input type="text" name="durasi" id="durasi" class="form-control" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jenis_villa">Jenis Villa:</label>
                    <input type="text" name="jenis_villa" id="jenis_villa" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tarif">Tarif:</label>
                    <input type="text" name="tarif" id="tarif" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="cara_pembayaran">Cara Pembayaran:</label>
                <select name="cara_pembayaran" id="cara_pembayaran" class="form-control" required>
                    <option value="">Pilih cara pembayaran</option>
                    <option value="Transfer Bank">Transfer Bank</option>
                    <option value="Kartu Kredit">Kartu Kredit</option>
                    <option value="E-Wallet">E-Wallet</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Bayar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
