  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Tidak ada data penjualan";
}
else {
?>
<h3> Input Data Teknisi </h3>
<?php echo anchor('c_teknisi/tambahdata', '+ Tambah Data'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<thead>
    <th width="40"> <div>Id Tim teknisi</div></th>
    <th width="50"> <div>Nama teknisi ahli</div></th>
    <th width="50"> <div>Nama teknisi pembantu</div></th>
    <th width="30"> <div>Aksi </div></th>
</thead>
<?php
foreach ($hasil as $data):
?>
<tbody>
    <td> <div><?php echo $data->id_tim_teknisi; ?> </div></td>
    <td> <div><?php echo $data->nama_teknisi_ahli; ?> </div></td>
    <td> <div><?php echo $data->nama_teknisi_pembantu; ?> </div></td>
    <td> <div><?php echo anchor("c_teknisi/updatedata/$data->id_tim_teknisi",'Edit'); ?> | <?php echo anchor("c_teknisi/deletedata/$data->id_tim_teknisi",'Hapus',array('onClick' => "return confirm('Anda yakin akan dihapus?')")); ?> </div></td>
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