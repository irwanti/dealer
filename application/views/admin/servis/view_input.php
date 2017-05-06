  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data sparepart";
}
else {
?>
<h3> Transaksi Servis </h3>
<?php echo anchor('c_servis/tambahdata', '+ Tambah Data'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<thead>
    <th> No </th>
    <th> Tanggal Servis </th>
    <th> Nama Pelanggan </th>
    <th> Merek Mobil </th>
    <th> Plat </th>
    <th> Nama Teknisi Ahli </th>
    <th> Bayar Sparepart </th>
    <th> Bayar Jasa Teknisi </th>
    <th> Total Bayar </th>
</thead>
<?php $i=1;
foreach ($hasil as $a): {
?>
<tbody>
    <td> <?php echo $i++; ?> </td>
    <td> <?php echo $a->tgl_servis; ?> </td>
    <td> <?php echo $a->nama_pelanggan; ?> </td>
    <td> <?php echo $a->merek_mobil; ?> </td>
    <td> <?php echo $a->plat; ?> </td>
    <td> <?php echo $a->nama_teknisi_ahli; ?> </td>
    <td> <?php echo $a->bayar_sparepart; ?> </td>
    <td> <?php echo $a->bayar_teknisi; ?> </td>
    <td> <?php echo $a->total; ?> </td>
</tbody>
<?php
}
endforeach;?>
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