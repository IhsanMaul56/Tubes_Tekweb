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
            <tbody>
            <?php
                foreach($pemesanan->result() as $row){
                    echo "<tr>";
                    echo "<td>$row->ID_Pesanan</td>";
                    echo "<td>$row->Nama</td>";
                    echo "<td>$row->tanggal_masuk</td>";
                    echo "<td>$row->Jenis_Kamar</td>";
                    echo "<td>$row->Durasi</td>";
                    echo "<td>$row->Tarif</td>";
                }
            ?>
            </tbody>
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
