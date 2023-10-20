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
    <h4 style="text-align: center"> Laporan Penjualan Menu Belig Coffee</h4>
    <p style="text-align: center">Periode : <?= $month ?></p>
    <table id="example1" class="table table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Harga Menu</th>
                <th scope="col">Total Terjual</th>
                <th scope="col">Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php $total = 0; ?>
            <?php foreach ($penjualanMenuData as $penjualan) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $penjualan['detail_menu_nama']; ?></td>
                    <td>Rp <?php echo number_format($penjualan['detail_harjul']); ?></td>
                    <td><?php echo $penjualan['total_terjual']; ?></td>
                    <td>Rp <?php echo number_format($penjualan['pendapatan']); ?></td>
                </tr>
                <?php $total = $total + ($penjualan['pendapatan']); ?>
                <?php $no++; ?>
            <?php } ?>
        <tfoot>
            <tr>
                <td style="text-align: center;font-weight:bold;" colspan="4">Total
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