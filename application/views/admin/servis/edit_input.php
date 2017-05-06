<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<h3> Edit Transaksi Servis</h3>
<?php echo form_open('c_servis/updatedata/'.$hasil->id_servis); ?>
 
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr>
    <td width="200"> Plat </td>
    <td>
    <select name="id_data">
  <?php 
  foreach ($plat as $data):
  ?>
    <option value="<?php echo $data->id_data; ?>">  <?php echo $data->plat; ?></option>
    <?php endforeach; ?>
    </select> </td>
</tr>
<tr>
    <td width="250"> Nama Teknisi Ahli </td>
    <td>
    <select name="id_tim_teknisi">
  <?php 
  foreach ($tim as $data):
  ?>
    <option value="<?php echo $data->id_tim_teknisi; ?>">  <?php echo $data->nama_teknisi_ahli; ?></option>
    <?php endforeach; ?>
    </select> </td>
</tr>
<tr>
    <td> Id Pelanggan </td>
    <td>
    <select name="id_pelanggan">
  <?php 
  foreach ($id_pelanggan as $data):
  ?>
    <option value="<?php echo $data->id_pelanggan; ?>">  <?php echo $data->id_pelanggan; ?></option>
    <?php endforeach; ?>
    </select> </td>
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
    <td> Tanggal Servis (yyyy-mm-dd) </td>
    <td> <?php echo form_input('tgl_servis', $hasil->tgl_servis); ?> </td>
</tr>
<tr>
    <td> Tanggal Ambil (yyyy-mm-dd) </td>
    <td> <?php echo form_input('tgl_ambil', $hasil->tgl_ambil); ?> </td>
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