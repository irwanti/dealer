  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data penjualan";
}
else {
?>
<h3> Input Data Penjualan </h3>
<?php echo anchor('c_input/tambahdata', '+ Tambah Data'); ?>
<table width="934">
<tr bgcolor="FF8844">
    <th width="81"> <div align="center">Id Data Penjualan</div></th>
    <th width="120"> <div align="center">Merek Mobil</div></th>
    <th width="153"> <div align="center">Nama Salesman</div></th>
    <th width="166"> <div align="center">Nama Pelanggan</div></th>
    <th width="106"> <div align="center">Lama Cicilan Per Bulan</div></th>
    <th width="112"> <div align="center">Tanggal Pesan</div></th>
    <th width="99"> <div align="center">Tanggal Jual</div></th>
    <th width="61"> <div align="center">Aksi </div></th>
</tr>
<?php
$no = 1;
foreach ($hasil as $data):
?>
<tr>
    <td> <div align="center"><?php echo $data->id_data_penjualan; ?> </div></td>
    <td> <div align="center"><?php echo $data->merek; ?> </div></td>
    <td> <div align="center"><?php echo $data->nama_salesman; ?> </div></td>
    <td> <div align="center"><?php echo $data->nama_pelanggan; ?> </div></td>
    <td> <div align="center"><?php echo $data->lama_cicilan_bulan; ?> </div></td>
    <td> <div align="center"><?php echo $data->tgl_pesan; ?> </div></td>
    <td> <div align="center"><?php echo $data->tgl_jual; ?> </div></td>
    <td> <div align="center"><?php echo anchor("c_input/updatedata/$data->id_input",'Edit'); ?> | <?php echo anchor("c_input/deletedata/$data->id_input",'Hapus',array('onClick' => "return confirm('Anda yakin akan dihapus?')")); ?> </div></td>
</tr>
<?php

endforeach;
?>
</table>
<?php
}
?>
          </div>
        </div><!-- /.row -->

  </div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>