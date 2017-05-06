  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data sparepart";
}
else {
?>
<h3> Input Cicilan Mobil</h3>
<?php echo anchor('c_input/tambahdata', '+ Tambah Data'); ?>
<table width="707">
<tr bgcolor="FF8844">
    <th width="90"> Id cicilan</th>
    <th width="139"> Id Data Penjualan</th>
    <th width="111"> Bayar_cicilan</th>
    <th width="114"> tgl_cicilan</th>
    <th width="129"> status</th>
    <th width="63"> Aksi </th>
</tr>
<?php
$no = 1;
foreach ($hasil as $data):
?>
<tr>
    <td> <?php echo $data->id_cicilan; ?> </td>
    <td> <?php echo $data->id_data_penjualan; ?> </td>
    <td> <?php echo $data->bayar_cicilan; ?> </td>
    <td> <?php echo $data->tgl_cicilan; ?> </td>
    <td> <?php echo $data->status; ?> </td>
    <td> <?php echo anchor("c_input/updatedata/$data->id_input",'Edit'); ?> | <?php echo anchor("c_input/deletedata/$data->id_input",'Hapus',array('onClick' => "return confirm('Anda yakin akan dihapus?')")); ?> </td>
</tr>
<?php
$no++;
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