<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<base href="<?php echo base_url(); ?>" />

<h3>Tambah Data Teknisi</h3>
<?php echo form_open('c_teknisi/tambahdata'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr>
    <td width="200"> Id Tim teknisi</td>
    <td> <?php echo form_input('id_tim_teknisi'); ?> </td>
</tr>
<tr>
    <td> Nama  teknisi Ahli</td>
    <td> <?php echo form_input('nama_teknisi_ahli'); ?> </td>
</tr>
<tr>
    <td>Nama teknisi Pembantu</td>
    <td> <?php echo form_input('nama_teknisi_pembantu'); ?> </td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Tambah'); ?> </td>
</tr>
</table>
</div>
<?php echo form_close(); ?>
<?php echo anchor('c_teknisi/index', '+ View Data'); ?>  
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