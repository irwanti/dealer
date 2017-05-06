<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<h3> Edit Data Servis</h3>
<?php echo form_open('c_data_servis/updatedata/'.$hasil->id_data); ?>
 
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
    <td>Plat</td>
    <td> <?php echo form_input('plat', $hasil->id_data); ?> </td>
</td>
</tr>
<tr>
    <td>Merk Mobil</td>
    <td> <?php echo form_input('merek_mobil', $hasil->merek_mobil); ?> </td>
</tr>
<tr>
    <td> Tanggal Beli Mobil </td>
    <td> <?php echo form_input('tgl_beli', $hasil->tgl_beli); ?> (yyyy-mm-dd) </td>
</tr>
<tr>
    <td> Keluhan </td>
    <td> <textarea name="keluhan"></textarea></td>
</tr>
<tr>
    <td> Tim Teknisi </td>
    <td> <select name="id_tim_teknisi">
  <?php 
  foreach ($tim as $data):
  ?>
    <option value="<?php echo $data->id_tim_teknisi; ?>">  <?php echo $data->id_tim_teknisi; ?></option>
    <?php endforeach; ?>
    </select>
    <?php 
    foreach ($id_tim as $data):
      echo $data->id_tim_teknisi;
    endforeach;
    ?></td>
</tr>
<tr>
    <td> Jenis Kerusakan </td>
    <td>
    <select name="id_jasa_teknisi">
  <?php 
  foreach ($kerusakan as $data):
  ?>
    <option value="<?php echo $data->id_jasa_teknisi; ?>">  <?php echo $data->jenis_kerusakan; ?></option>
    <?php endforeach; ?>
    </select> </td>
</tr>
<tr>
    <td> Tanggal Servis </td>
    <td> <?php echo form_input('tgl_servis', $hasil->tgl_servis); ?> (yyyy-mm-dd) </td>
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