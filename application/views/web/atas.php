<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT. ASTOR Indonesia</title>
	
    <?php $this -> load -> helper('HTML');
	echo link_tag('css/bootstrap.min.css');?>
    <?php $this -> load -> helper('HTML');
	echo link_tag('css/freelancer.css');?>
    <!-- Fonts -->
    <?php $this -> load -> helper('HTML');
	echo link_tag('font-awesome/css/font-awesome.min.css');?>
   
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>index.php">PT. Astor (Cabang SEMARANG)</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        
                    </li>
                    <li class="page-scroll">
                       <a href="<?php echo base_url();?>index.php/web/c_produk">Produk</a>
                    </li>
					<li class="page-scroll">
                    <a href="<?php echo base_url();?>index.php/web/c_about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url();?>index.php/web/c_kontak">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url();?>index.php/web/c_pesan">Order</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <script src="<?php echo base_url();?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>js/classie.js"></script>
    <script src="<?php echo base_url();?>js/cbpAnimatedHeader.js"></script>
    <script src="<?php echo base_url();?>js/freelancer.js"></script></body></html>