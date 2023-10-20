<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Penjualan Report</title>
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
    <h4 style="text-align: center"> Laporan Pemesanan Belig Coffee</h4>
    <p style="text-align: center">Periode : <?= $start_date ?> <span class="ml-4 mr-4">s/d</span> <?= $end_date ?></p>
    <table id="example1" class="table table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No Invoice</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Pelanggan</th>
                <th scope="col">Jumlah Menu</th>
                <th scope="col">Total Porsi</th>
                <th scope="col">Total</th>
                <th scope="col">Status Order</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php $total = 0; ?>
            <?php foreach ($penjualanData as $penjualan) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $penjualan['inv_no']; ?></td>
                    <td><?php echo $penjualan['inv_tanggal']; ?></td>
                    <td><?php echo $penjualan['inv_plg_nama']; ?></td>
                    <td><?php echo $penjualan['total_menu']; ?></td>
                    <td><?php echo $penjualan['total_porsi']; ?></td>
                    <td>Rp <?php echo number_format($penjualan['total']); ?></td>
                    <td><?php echo $penjualan['inv_status']; ?></td>
                </tr>
                <?php $total = $total + ($penjualan['total']); ?>
                <?php $no++; ?>
            <?php } ?>
        <tfoot>
            <tr>
                <td style="text-align: center;font-weight:bold;" colspan="7">Total
                    Pendapatan
                </td>
                <td style="text-align: right;font-weight:bold;">
                    <p id="tot_pendapatan"><?php echo $total; ?></p>
                </td>
            </tr>
        </tfoot>
        </tbody>
    </table>
</body>

</html>