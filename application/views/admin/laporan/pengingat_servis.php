  <div id="page-wrapper">

  <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data sparepart";
}
else {
?>

<h3> Laporan Pengingatan Servis Per 6 Bulan </h3>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<thead>
    <th> Nama Pelanggan </th>
    <th> No Hp</th>
    <th> Waktu Servis </th>
</thead>
<?php
foreach ($hasil as $data):
?>
<tbody>
    <td> <?php echo $data->nama_pelanggan; ?> </td>
    <td> <?php echo $data->no_hp; ?> </td>
    <td> <?php echo $data->waktu_servis; ?> </td>
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