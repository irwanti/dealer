<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<base href="<?php echo base_url(); ?>" />

<h3>Tambah Data Salesman</h3>
<?php echo form_open('c_salesman/tambahdata'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr>
    <td width="200"> Id salesman</td>
    <td> <?php echo form_input('id_salesman'); ?> </td>
</tr>
<tr>
    <td width> Nama Salesman</td>
    <td width> <?php echo form_input('nama_salesman'); ?> </td>
</td>
</tr>
<tr>
    <td>Alamat</td>
    <td> <?php echo form_input('alamat'); ?> </td>
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
</div>
<?php echo form_close(); ?>
<?php echo anchor('c_salesman/index', '+ View Data'); ?>  
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