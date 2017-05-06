<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<base href="<?php echo base_url(); ?>" />

<h3>Tambah Transaksi Servis</h3>
<?php echo form_open('c_servis/tambahdata'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr>
    <td width="200"> Id Data Servis </td>
    <td> <?php echo form_input('id_servis'); ?>
    <?php 
    foreach ($data_ser as $data):
      echo $data->id_servis;
    endforeach;
    ?>
    </td>
</tr>
<tr>
    <td> Sparepart </td>
    <td>
    <select name="id_sparepart">
    <option value="0">-</option>
	<?php 
	foreach ($spar as $data):
	?>
    <option value="<?php echo $data->id_sparepart; ?>">  <?php echo $data->nama_sparepart; ?></option>
    <?php endforeach; ?>
    </select> </td>
</tr>
<tr>
    <td> Qty </td>
    <td> <?php echo form_input('qty'); ?></td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Tambah'); ?> </td>
</tr>
</table>
</div>
<?php echo form_close(); ?>
<?php echo anchor('c_servis/index', '+ View Data'); ?> <br>
<?php echo anchor('c_servis/tambahdata', '+ Tambah Data'); ?>  
</form>
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