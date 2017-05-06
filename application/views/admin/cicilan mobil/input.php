<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<base href="<?php echo base_url(); ?>" />

<h3>Tambah Data Cicilan Mobil</h3>
<?php echo form_open('c_input/tambahdata'); ?>
<table>
<tr>
    <td width="150"> Id Cicilan</td>
    <td width="181"> <?php echo form_input('id_cicilan'); ?> </td>
</tr>
<tr>
    <td width="150"> Id Data Penjualan</td>
    <td width="181"> <?php echo form_input('id_data_penjualan'); ?> </td>
</tr>
<tr>
    <td>Bayar cicilan</td>
    <td> <?php echo form_input('bayar_cicilan'); ?> </td>
</tr>
<tr>
    <td> Tanggal cicilan (yyyy-mm-dd)</td>
    <td> <input type="date" name="tgl_cicilan"> </td>
</tr>
<tr>
    <td> Status</td>
    <td> <?php echo form_input('status'); ?> </td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Tambah'); ?> </td>
</tr>
</table>
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