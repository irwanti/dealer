<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<h3> Edit Pelanggan</h3>
<?php echo form_open('c_pelanggan/updatedata/'.$hasil->id_pelanggan); ?>
 
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr>
    <td width="200"> Nama Pelanggan </td>
    <td> <?php echo form_input('nama_pelanggan', $hasil->nama_pelanggan); ?></td>
</tr>
<tr>
    <td> Alamat </td>
    <td> <?php echo form_input('alamat', $hasil->alamat); ?> </td>
</tr>
<tr>
    <td> Email </td>
    <td> <?php echo form_input('email', $hasil->email); ?> </td>
</tr>
<tr>
    <td> No Hp </td>
    <td> <?php echo form_input('no_hp', $hasil->no_hp); ?> </td>
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