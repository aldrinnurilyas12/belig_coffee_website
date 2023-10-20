<html>

<head>
    <title>Cetak PDF</title>
    <style>
    .table {
        border-collapse: collapse;
        table-layout: fixed;
        width: 630px;
    }

    .table th {
        padding: 5px;
    }

    .table td {
        word-wrap: break-word;
        width: 20%;
        padding: 5px;
    }
    </style>
</head>

<body>
    <h4 style="margin-bottom: 5px;">Data Transaksi</h4>
    <?php echo $label ?>
    <table class="table" border="1" width="100%" style="margin-top: 10px;">
        <tr>

            <th scope="col">No Invoice</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Pelanggan</th>
            <th scope="col">Jumlah Menu</th>
            <th scope="col">Total Porsi</th>
            <th scope="col"> Total</th>
            <th scope="col">Status Order</th>



        </tr>
        <?php
        if (empty($tot_sales)) { // Jika data tidak ada
            echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
        } else { // Jika jumlah data lebih dari 0 (Berarti jika data ada)
            foreach ($tot_sales as $a) { // Looping hasil data transaksi

                echo "<tr>";
                echo "<td>" . $a['inv_no'] . "</td>";
                echo "<td>" . $a['inv_tanggal'] . "</td>";
                echo "<td>" . $a['inv_plg_nama'] . "</td>";
                echo "<td>" . $a['total_menu'] . "</td>";
                echo "<td>" . $a['total_porsi'] . "</td>";
                echo "<td>" . $a['total'] . "</td>";
                echo "<td>" .  $a['inv_status'] . "</td>";


                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>