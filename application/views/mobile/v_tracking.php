<div style="display: flex;" class="row gy-5">
    <?php
                            foreach ($data->result_array() as $a) {
                                $id = $a['menu_id'];
                                $nama = $a['menu_nama'];
                                $deskripsi = $a['menu_deskripsi'];
                                $harga_baru = $a['menu_harga_baru'];
                                $kat_id = $a['menu_kategori_id'];
                                $kat_nama = $a['menu_kategori_nama'];
                                $gambar = $a['menu_gambar'];

                            ?>


    <div style="width: 320px;" class="col-lg-4 menu-item">
        <a href="<?php echo base_url() . 'mobile/menu/detail_menu/' . $id; ?>">
            <div style="width: 300px;"
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img style="padding: 0px;" class="p-8 rounded-t-lg"
                        src="<?php echo base_url() . 'assets/gambar/' . $gambar; ?>" alt="product image" />
                </a>
                <div class="px-4 pb-4">
                    <a href="#">
                        <h5 style="text-align: start;margin-top:10px;"
                            class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            <?php echo $nama; ?></h5>
                    </a>

                    <div style="margin-top: 40px;" class="flex  justify-between">
                        <span style="font-size: 18px;" class="text-3xl font-medium text-gray-900 dark:text-white">
                            <?php echo number_format($a['menu_harga_baru']); ?></span>
                        <a style="width: 70px;height:40px;text-align:left;"
                            href="<?php echo base_url() . 'mobile/menu/add_to_cart/' . $a['menu_id']; ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                                                    focus:outline-none  font-medium rounded-lg text-sm 
                                                     py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                                                    dark:focus:ring-blue-800">Add</a>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <?php } ?>
</div>