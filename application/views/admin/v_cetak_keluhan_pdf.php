<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Keluhan Report</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <h2 style="text-align: center"> Belig Coffee</h2>
    <h4 style="text-align: center"> Laporan Keluhan Pelanggan</h4>
    <p style="text-align: center">Periode : <?= $start_date ?> <span class="ml-4 mr-4">s/d</span> <?= $end_date ?></p>
    <table id="example1" class="table table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">kategori</th>
                <th scope="col">Keluhan</th>
                <th scope="col">Tanggapan</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal Kedatangan </th>
                <th scope="col"> Tanggal Keluhan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($keluhanData as $keluhan) { ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $keluhan['plg_nama']; ?></td>
                <td><?php echo $keluhan['kategori']; ?></td>
                <td><?php echo $keluhan['keluhan']; ?></td>
                <td><?php echo $keluhan['tanggapan']; ?></td>
                <td><?php echo $keluhan['kel_status']; ?></td>
                <td><?php echo $keluhan['tanggal_kedatangan']; ?></td>
                <td><?php echo $keluhan['tanggal_keluhan']; ?></td>
            </tr>
            <?php $no++; ?>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>