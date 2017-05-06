  <div id="page-wrapper">

  <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data sparepart";
}
else {
?>

<h3> Laporan Data Servis  </h3>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<thead>
    <th> Nama Pelanggan </th>
    <th> Merek Mobil</th>
    <th> Plat </th>
    <th> Keluhan </th>
    <th> Nama Teknisi Ahli </th>
    <th> Nama Sparepart </th>
    <th> Qty </th>
    <th> Tanggal Servis </th>
</thead>
<?php
foreach ($hasil as $data):
?>
<tbody>
    <td> <?php echo $data->nama_pelanggan; ?> </td>
    <td> <?php echo $data->merek_mobil; ?> </td>
    <td> <?php echo $data->plat; ?> </td>
    <td> <?php echo $data->keluhan; ?> </td>
    <td> <?php echo $data->nama_teknisi_ahli; ?> </td>
    <td> <?php echo $data->nama_sparepart; ?> </td>
    <td> <?php echo $data->qty; ?> </td>
    <td> <?php echo $data->tgl_servis; ?> </td>
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