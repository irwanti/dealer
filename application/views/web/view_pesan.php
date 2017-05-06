  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
if (empty($hasil)) {
    echo "Lakukan Pemesanan Ulang !";
}
else {
?>
<h3> Pemesanan </h3>
<?php echo anchor('c_input/tambahdata', '+ Tambah Data'); ?>
<table>
<tr bgcolor="FF8844">
    <th> No </th>
    <th> Nama Pemesan</th>
    <th> Merk Mobil</th>
    <th> Warna </th>
    <th> Email </th>
    <th> No Hp </th>
</tr>
<?php
$no = 1;
foreach ($hasil as $data):
?>
<tr>
    <td> <?php echo $no; ?> </td>
    <td> <?php echo $data->nama_pemesan; ?> </td>
    <td> <?php echo $data->merk_mobil; ?> </td>
    <td> <?php echo $data->warna; ?> </td>
    <td> <?php echo $data->email; ?> </td>
    <td> <?php echo $data->no_hp; ?> </td>
</tr>
<?php
$no++;
endforeach;
?>
</table>
<?php
}
?>
          </div>
        </div><!-- /.row -->

  </div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

    <!-- JavaScript -->
    <?php $this -> load -> helper('HTML');
	echo link_tag('js/jquery-1.10.2.js');?>
    <?php $this -> load -> helper('HTML');
	echo link_tag('js/bootstrap.min.js');?>
     <?php $this -> load -> helper('HTML');
	echo link_tag('js/classie.js');?>
    <?php $this -> load -> helper('HTML');
	echo link_tag('js/cbpAnimatedHeader.js');?>
    <?php $this -> load -> helper('HTML');
	echo link_tag('js/freelancer.js');?>
    <?php $this -> load -> helper('HTML');
	echo link_tag('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');?>

  </body>
</html>