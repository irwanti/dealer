<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<base href="<?php echo base_url(); ?>" />

<h3>Tambah Data Pelanggan</h3>
<?php echo form_open('c_pelanggan/tambahdata'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr>
    <td>Id Pelanggan</td>
    <td> <?php echo form_input('id_pelanggan'); ?>
    <?php 
    foreach ($pelanggan as $data):
      echo $data->id_pelanggan;
    endforeach;
    ?>
    </td>
</tr>
<tr>
<tr>
    <td width="200"> Nama Pelanggan</td>
    <td> <?php echo form_input('nama_pelanggan'); ?> </td>
</td>
</tr>
<tr>
    <td>Alamat</td>
    <td> <?php echo form_input('alamat'); ?> </td>
</tr>
<tr>
    <td> Email</td>
    <td> <?php echo form_input('email'); ?> </td>
</tr>
<tr>
    <td> No.HP</td>
    <td> <?php echo form_input('no_hp'); ?> </td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Tambah'); ?> </td>
</tr>
</table>
</tr>
<?php echo form_close(); ?>
<?php echo anchor('c_pelanggan/index', '+ View Data'); ?>  
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