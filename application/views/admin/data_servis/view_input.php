  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data sparepart";
}
else {
?>
<h3> View Data Servis </h3>
<?php echo anchor('c_data_servis/tambahdata', '+ Tambah Data'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr bgcolor="FF8844">
    <th> No </th>
    <th> Nama Pelanggan</th>
    <th> Merk Mobil </th>
    <th> Plat </th>
    <th> Keluhan </th>
    <th> Tanggal Beli Mobil </th>
    <th> Batas Garansi </th>
    
</tr>
<?php $i=1;
foreach ($hasil as $dat):
?>
<tr>
    <td> <?php echo $i++; ?> </td>
    <td> <?php echo $dat->nama_pelanggan; ?> </td>
    <td> <?php echo $dat->merek_mobil; ?> </td>
    <td> <?php echo $dat->plat; ?> </td>
    <td> <?php echo $dat->keluhan; ?> </td>
    <td> <?php echo $dat->tgl_beli; ?> </td>
    <td> <?php echo $dat->batas_garansi; ?> </td>
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