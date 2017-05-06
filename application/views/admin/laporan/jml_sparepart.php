  <div id="page-wrapper">

  <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data sparepart";
}
else {
?>

<h3> Ketersediaan Sparepart  </h3>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<thead>
    <th> Nama Sparepart </th>
    <th> Jumlah Sparepart</th>
</thead>
<?php
foreach ($hasil as $data):
?>
<tbody>
    <td> <?php echo $data->nama_sparepart; ?> </td>
    <td> <?php echo $data->sisa; ?> </td>
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