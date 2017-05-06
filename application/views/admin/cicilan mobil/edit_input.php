<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<h3> Edit Input Pelanggan</h3>
<?php echo form_open('c_input/updatedata/'.$hasil->id_input); ?>
<table>
<tr>
    <td width="200"> Id Cicilan</td>
    <td> <?php echo form_input('id_cicilan'); ?> </td>
</tr>
<tr>
    <td> Id Data Penjualan</td>
    <td> <?php echo form_input('id_data_penjualan'); ?> </td>
</tr>
<tr>
    <td>Bayar cicilan</td>
    <td> <?php echo form_input('bayar_cicilan'); ?> </td>
</tr>
<tr>
    <td> Tanggal cicilan (yyyy-mm-dd)</td>
    <td> <?php echo form_input('tgl_cicilan'); ?> </td>
</tr>
<tr>
    <td> Status</td>
    <td> <?php echo form_input('status'); ?> </td>
</tr>

    <td> </td>
    <td> <?php echo form_submit('submit', 'Ubah'); ?> </td>
</tr>
</table>
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