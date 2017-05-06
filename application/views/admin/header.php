<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dealer</title>

    <!-- Bootstrap core CSS -->
<?php $this -> load -> helper('HTML');
echo link_tag('asset/css/bootstrap.css');?>
<?php $this -> load -> helper('HTML');
echo link_tag('asset/css/sb-admin.css');?>
<?php $this -> load -> helper('HTML');
echo link_tag('asset/font-awesome/css/font-awesome.min.css');?>

  
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <div class="navbar-brand"><?php echo anchor('home','Admin Dealer') ; ?></div>
        </div>
        <ul class="nav navbar-nav navbar-right navbar-user">
          		
          		<li><a href="home/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
        </ul>
            