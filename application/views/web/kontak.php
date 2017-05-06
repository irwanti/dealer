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
                    <h2>Contact Us</h2>
                    <hr class="star-primary">
              </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
<base href="<?php echo base_url(); ?>" />
<?php echo form_open('web/c_kontak/tambahdata'); ?>
                        <div class="row">
                          <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="namap" placeholder="Name">
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control" type="email" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="isi">Pesan</label>
                                <textarea name="isi" placeholder="Pesan" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" name="submit" class="btn btn-lg btn-success" <?php echo form_submit('submit', 'Tambah'); ?> Send</button>
                            </div>
                        </div>
<?php echo form_close(); ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
   <script src="<?php echo base_url(); ?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>js/classie.js"></script>
    <script src="<?php echo base_url(); ?>js/cbpAnimatedHeader.js"></script>
    <script src="<?php echo base_url(); ?>js/freelancer.js"></script>
    </body>