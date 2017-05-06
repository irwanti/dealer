  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data sparepart";
}
else {
?>
<h3> View Pelanggan </h3>
<?php echo anchor('c_pelanggan/tambahdata', '+ Tambah Data'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<thead>
    <th> Id Pelanggan</th>
    <th> Nama Pelanggan </th>
    <th> Alamat </th>
    <th> Email </th>
    <th> No Hp </th>
    <th> Aksi </th>
</thead>
<?php
foreach ($hasil as $data):
?>
<tbody>
    <td> <?php echo $data->id_pelanggan; ?> </td>
    <td> <?php echo $data->nama_pelanggan; ?> </td>
    <td> <?php echo $data->alamat; ?> </td>
    <td> <?php echo $data->email; ?> </td>
    <td> <?php echo $data->no_hp; ?> </td>
    <td> <?php echo anchor("c_pelanggan/updatedata/$data->id_pelanggan",'Edit'); ?> | <?php echo anchor("c_pelanggan/deletedata/$data->id_pelanggan",'Hapus',array('onClick' => "return confirm('Anda yakin akan dihapus?')")); ?> </td>
</tbody>
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