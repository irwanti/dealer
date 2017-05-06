<?php $this -> load -> helper('HTML');
	echo link_tag('css/bootstrap.min.css');?>
    <?php $this -> load -> helper('HTML');
	echo link_tag('css/freelancer.css');?>
    <!-- Fonts -->
    <?php $this -> load -> helper('HTML');
	echo link_tag('font-awesome/css/font-awesome.min.css');?>
<body id="beranda" class="index">
<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo img('./img/logo2.png');?>
                    <div class="intro-text">
                        <span class="name">PT. ASTOR INDONESIA</span>
                        <hr class="star-light">
                        <span class="skills">JUAL - SERVIS MOBIL (BERGARANSI)</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="<?php echo base_url();?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>js/classie.js"></script>
    <script src="<?php echo base_url();?>js/cbpAnimatedHeader.js"></script>
    <script src="<?php echo base_url();?>js/freelancer.js"></script>
</body>