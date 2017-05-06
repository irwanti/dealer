<?php $this -> load -> helper('HTML');
	echo link_tag('css/bootstrap.min.css');?>
    <?php $this -> load -> helper('HTML');
	echo link_tag('css/freelancer.css');?>
    <!-- Fonts -->
    <?php $this -> load -> helper('HTML');
	echo link_tag('font-awesome/css/font-awesome.min.css');?>
    <body>
<section id="index">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>&nbsp;</h2>
                    <h2>Order Mobil</h2>
                    <hr class="star-primary">
              </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                <base href="<?php echo base_url(); ?>" />
                <?php echo form_open('web/c_pesan/tambahdata'); ?>
                        <div class="row">
                          <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="nama_pemesan">Nama</label>
                                <input class="form-control" type="text" name="nama_pemesan" placeholder="Nama Pemesan">
                          </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="merk_mobil">Merk Mobil</label>
                                <input class="form-control" type="text" name="merek" placeholder="Merek Mobil">
                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="warna">Warna</label>
                                <input class="form-control" type="text" name="warna" placeholder="Warna">
                            </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" placeholder="Alamat" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                         <div class="row">
                          <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Email">
                          </div>
                        </div>
                         <div class="row">
                          <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="no_hp">No Hp</label>
                                <input class="form-control" type="text" name="no_hp" placeholder="No HP">
                          </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" name="submit" class="btn btn-lg btn-success" <?php echo form_submit('submit', 'Tambah'); ?> Order Sekarang</button>
                            </div>
                        </div>
<?php echo form_close(); ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
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