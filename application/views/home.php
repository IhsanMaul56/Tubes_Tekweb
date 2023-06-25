<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Penyewaan Villa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin-top: 50px;
            text-align: center;
        }
        .welcome-message {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .dashboard-card {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            text-align: center;
        }
        .card-icon {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
        }
        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .card-description {
            color: #666;
        }
    </style>   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Villa Rental</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('villa/booking'); ?>">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('villa/payment'); ?>">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('villa/report'); ?>">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('villa/About'); ?>">About</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo site_url('home/logout'); ?>">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h3 class="welcome-message">Selamat datang di Dashboard Penyewaan Villa!</h3>

        <div class="row">
            <div class="col-md-4">
                <div class="dashboard-card">
                    <span class="card-icon">&#128451;</span>
                    <h4 class="card-title">Pemesanan</h4>
                    <p class="card-description">Kelola pemesanan villa yang telah masuk</p>
                    <a href="<?php echo site_url('villa/booking'); ?>" class="btn btn-primary">Pesanan</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-card">
                    <span class="card-icon">&#128181;</span>
                    <h4 class="card-title">Pembayaran</h4>
                    <p class="card-description">Cek status pembayaran dari pelanggan</p>
                    <a href="<?php echo site_url('villa/payment'); ?>" class="btn btn-primary">Bayar</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-card">
                    <span class="card-icon">&#128202;</span>
                    <h4 class="card-title">Laporan</h4>
                    <p class="card-description">Buat laporan tentang aktivitas penyewaan</p>
                    <a href="<?php echo site_url('villa/report'); ?>" class="btn btn-primary">Laporan</a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>