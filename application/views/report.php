<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan Transaksi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>LAPORAN TRANSAKSI</h1>
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Nama</th>
                    <th>Tanggal Masuk</th>
                    <th>Jenis Kamar</th>
                    <th>Durasi</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            <?php foreach ($pemesanan as $row): ?>
                <tbody>
                    <tr>
                        <td><?php echo $row->ID_Pesanan; ?></td>
                        <td><?php echo $row->Nama; ?></td>
                        <td><?php echo $row->tanggal_masuk; ?></td>
                        <td><?php echo $row->Jenis_Kamar; ?></td>
                        <td><?php echo $row->Durasi; ?></td>
                        <td><?php echo $row->Tarif; ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>
