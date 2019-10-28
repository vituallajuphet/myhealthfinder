<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title> MyCureFinder | Login Account</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/custom/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

 <div class="container">

   <div class="login_div">
   <a class="a_logo" href="<?=base_url();?>"><figure><img src="<?=base_url();?>assets/images/main_logo.png" alt="MyCureFinder"></figure></a>

<div class="panel panel-default" style="max-width:400px;margin:30px auto;">
<div class="panel-heading"><i class="fa fa-user"></i> Login Account</div>
<div class="panel-body">
<form role="form" method="post" action="<?=base_url("user/validate_account");?>">
<div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" id="email">
</div>
<div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd">
</div>

<button type="submit" class="btn btn-default">Submit</button>
</form>

<?php

        echo $err;
?>

</div>
</div>
    </div>

    
 </div>

</body>
</html>