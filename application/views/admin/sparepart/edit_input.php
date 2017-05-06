<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<h3> Edit Pembelian Sparepart</h3>
<?php echo form_open('c_input/updatedata/'.$hasil->id_input); ?>
 <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr>
    <td width="200"> Tanggal Beli </td>
    <td> <?php echo form_input('tgl_beli_s', $hasil->tgl_beli_s); ?> </td>
</tr>
<tr>
    <td> Nama Sparepart </td>
    <td>
    <select name="id_sparepart">
    <option value="0"></option>
	<?php 
	foreach ($spare as $data):
	?>
    <option value="<?php echo $data->id_sparepart; ?>"><?php echo $data->nama_sparepart; ?></option>
    <?php endforeach; ?>
    </select>
    </td>
</tr>
<tr>
    <td> Suplier </td>
    <td> <?php echo form_input('suplier', $hasil->suplier); ?> </td>
</tr>
<tr>
    <td> Jumlah Beli </td>
    <td> <?php echo form_input('jml_beli', $hasil->jml_beli); ?> </td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Ubah'); ?> </td>
</tr>
</table>
</div>
<?php echo form_close(); ?>
          </div>
        </div><!-- /.row -->
	</div>
  </div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>