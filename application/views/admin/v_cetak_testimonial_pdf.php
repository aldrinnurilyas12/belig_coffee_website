<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Testimonial Report</title>
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
    <h4 style="text-align: center"> Laporan Testimoni Pelanggan</h4>
    <p style="text-align: center">Periode : <?= $start_date ?> <span class="ml-4 mr-4">s/d</span> <?= $end_date ?></p>
    <table id="example1" class="table table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Rating</th>
                <th>Testimonial</th>
                <th>Balasan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($testimonialData as $testimonial) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $testimonial['plg_nama']; ?></td>
                    <td><?php echo $testimonial['rating']; ?></td>
                    <td><?php echo $testimonial['isi_testimonial']; ?></td>
                    <td><?php echo $testimonial['balasan']; ?></td>
                    <td><?php echo $testimonial['tgl_testimonial']; ?></td>
                </tr>
                <?php $no++;?>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>