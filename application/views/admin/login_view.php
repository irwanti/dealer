<!DOCTYPE html>
<html class="no-js"><head>
    <meta charset="utf-8">
    <title>Admin Dealer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
	
    <?php $this -> load -> helper('HTML');
	echo link_tag('asset/css/bootstrap.min.css');?>
    <?php $this -> load -> helper('HTML');
	echo link_tag('asset/css/font-awesome.min.css');?>
    
    <style type="text/css">

        body
        {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin
        {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #bbb;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox
        {
            margin-bottom: 10px;
        }

        .form-signin input[type="text"],
        .form-signin input[type="password"]
        {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 4px 9px;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="form-signin">
        <h2 class="form-signin-heading" align="center">Login Admin</h2> <hr>
		<?php echo validation_errors(); ?>
   		<?php echo form_open('verifylogin'); ?>
        <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
    </form>
</div>
</div>
<!-- /container -->

</body>
</html>