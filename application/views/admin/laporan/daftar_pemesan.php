  <div id="page-wrapper">

  <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data sparepart";
}
else {
?>

<h3> Laporan Daftar Pemesan </h3>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<thead>
    <th> Nama Pemesan </th>
    <th> Merek Mobil</th>
    <th> Warna </th>
    <th> Alamat </th>
    <th> Email </th>
    <th> No Hp </th>
</thead>
<?php
foreach ($hasil as $data):
?>
<tbody>
    <td> <?php echo $data->nama_pemesan; ?> </td>
    <td> <?php echo $data->merek; ?> </td>
    <td> <?php echo $data->warna; ?> </td>
    <td> <?php echo $data->alamat; ?> </td>
    <td> <?php echo $data->email; ?> </td>
    <td> <?php echo $data->no_hp; ?> </td>
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