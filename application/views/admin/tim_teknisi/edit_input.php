<div id="page-wrapper">

  <div class="row">
  <div class="col-lg-12">
  <div class="form-group">
            
<h3> Edit Input Tim teknisi</h3>
<?php echo form_open('c_teknisi/updatedata/'.$hasil->id_tim_teknisi); ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped tablesorter">
<tr>
    <td width="200"> Nama teknisi Ahli</td>
    <td> <?php echo form_input('nama_teknisi_ahli', $hasil->nama_teknisi_ahli); ?> </td>
</tr>
<tr>
    <td>Nama teknisi Pembantu</td>
    <td> <?php echo form_input('nama_teknisi_pembantu', $hasil->nama_teknisi_pembantu); ?> </td>
</tr>

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