  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data sparepart";
}
else {
?>
<h3> Input Pelanggan </h3>
<?php echo anchor('c_salesman/tambahdata', '+ Tambah Data'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr bgcolor="FF8844">
    <th width="90"> Id Salesman</th>
    <th width="139"> Nama Salesman</th>
    <th width="111"> Alamat</th>
    <th width="129"> No HP</th>
    <th width="63"> Aksi </th>
</tr>
<?php
foreach ($hasil as $data):
?>
<tr>
    <td> <?php echo $data->id_salesman; ?> </td>
    <td> <?php echo $data->nama_salesman; ?> </td>
    <td> <?php echo $data->alamat; ?> </td>
    <td> <?php echo $data->no_hp; ?> </td>
    <td> <?php echo anchor("c_salesman/updatedata/$data->id_salesman",'Edit'); ?> | <?php echo anchor("c_salesman/deletedata/$data->id_salesman",'Hapus',array('onClick' => "return confirm('Anda yakin akan dihapus?')")); ?> </td>
</tr>
<?php
endforeach;
?>
</table>
</div>
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