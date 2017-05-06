<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<base href="<?php echo base_url(); ?>" />

<h3>Tambah Data Penjualan</h3>
<?php echo form_open('c_input/tambahdata'); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr>
    <td width="200"> Id Data Penjualan</td>
    <td> <?php echo form_input('id_data_penjualan'); ?> </td>
</tr>
<tr>
    <td> Merek Mobil</td>
    <td> <?php echo form_input('merek'); ?> </td>
</tr>
<tr>
    <td>Nama Salesman</td>
    <td> <?php echo form_input('nama_salesman'); ?> </td>
</tr>
<tr>
    <td> Nama Pelanggan</td>
    <td> <?php echo form_input('nama_pelanggan'); ?> </td>
</tr>
<tr>
    <td> Lama Cicilan Per bulan</td>
    <td> <?php echo form_input('lama_cicilan_bulan'); ?> </td>
</tr>
<tr>
    <td> Tanggal Pesan (yyyy-mm-dd)</td>
    <td> <input type="date" name="tgl_cicilan"> </td>
</tr>
<tr>
    <td> Tanggal Jual (yyyy-mm-dd)</td>
    <td> <?php echo form_input('tgl_jual'); ?> </td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Tambah'); ?> </td>
</tr>
</table>
</div>
<?php echo form_close(); ?>
 
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