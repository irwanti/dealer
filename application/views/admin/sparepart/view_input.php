  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data sparepart";
}
else {
?>
<h3> View Pembelian Sparepart </h3>
<?php echo anchor('c_input/tambahdata', '+ Tambah Data'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<thead>
    <th> No </th>
    <th> Tanggal Beli</th>
    <th> Id Sparepart </th>
    <th> Suplier </th>
    <th> Jumlah Beli </th>
    <th> Aksi </th>
</thead>
<?php
$no = 1;
foreach ($hasil as $data):
?>
<tbody>
    <td> <?php echo $no; ?> </td>
    <td> <?php echo $data->tgl_beli_s; ?> </td>
    <td> <?php echo $data->id_sparepart; ?> </td>
    <td> <?php echo $data->suplier; ?> </td>
    <td> <?php echo $data->jml_beli; ?> </td>
    <td> <?php echo anchor("c_input/updatedata/$data->id_input",'Edit'); ?> | <?php echo anchor("c_input/deletedata/$data->id_input",'Hapus',array('onClick' => "return confirm('Anda yakin akan dihapus?')")); ?> </td>
</tbody>
<?php
$no++;
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