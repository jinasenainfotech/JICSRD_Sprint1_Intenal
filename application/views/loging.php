<!DOCTYPE html>
<html>
<head>
	<title>Risk D | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/select2.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/main.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/login.css')?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- js -->
	<script src="<?= base_url('assets/js/cb38aea1cb.js')?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/jquery-3.3.1.slim.min.js')?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/popper.min.js')?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/select2.full.min.js')?>" crossorigin="anonymous"></script>
</head>
<body>








<div class="form-wrapper">


		<div class="form-signin">

		<div class="text-center mb-4">
				<img class="mb-4" src="assets/img/logo.png" alt="" width="250">
			</div>


		  <!-- This php tags shows Form validation errors  and all other validation errors-->
<?= (isset($error)? '<div class="alert alert-warning alert-dismissible fade show">'.$error.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button></div>' : '') ?>

		<!-- This php tag shows form Susses massages  -->
		<?= (isset($massage)? '<div class="alert alert-success alert-dismissible fade show">'.$massage.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button></div>' : '') ?>


<div class="alert alert-success" role="alert" id="copied-alert" style="display:none">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Your new password reset key has been copied</div>

<!--Admin forget password -> resert Key View in this php tag  -->
<?= (isset($forget_key)? '<div class="form-inline gray-box"><p><b>NEW RESET KEY</b><br>Your recovery key is a safety net - keep your recovery key somewhere very secure, like a password manager.</p><input class="form-control col " id="restcode" type="text" value="'.$forget_key.'"><div class="btn btn-primary ml-1" id="resetcodeCopybtn">Copy to clipboard</div></div>' : '') ?>





		<?php if(isset($first_loging) and $first_loging == True){ ?>
		

<?= form_open(base_url('first_loging')); ?>
<?= form_input('hid', (isset($hid)? $hid : ''), 'id="hid"'); ?>
<?= form_label('New Password', 'password_1' , 'class="col-form-label"') ?>
<?= form_password('password_1', '','class="form-control"'); ?>
<?= form_label('Confirm Password', 'password_2' , 'class="mt-2 col-form-label"') ?>
<?= form_password('password_2', '','class="form-control"'); ?>
<?= form_submit('submit', 'Update','classs="btn btn-primary"'); ?>
<?= form_close()?>


<?php	}elseif(isset($first_name) and isset($last_name)){?>

<!-- if admin user enter recovery code as password this div is shown -->
<div>
	<h4 class="text-center">Hey, <?= $first_name?> <?= $last_name?></h4>
	<p class="text-center">We received a request to reset your password for your account. Please enter your new password below.</p>	
</div>
<a href="<?= base_url()?>"><i class="fas fa-arrow-left"> </i> Back to login </a>
<div >
	<div class="gray-box form-group row">
	<?= form_open('Authentication/password_recovery' , 'class="col-md-12 mb-3"');?>
	<?= form_input('hid', (isset($hid)? $hid : ''), 'id="hid" style="display:none"'); ?>
	<?= form_label('Enter new passowrd', 'password_1', 'class="col-form-label mt-2"'); ?>
	<?= form_password('password_1', '', 'class="form-control" placeholder="New password"'); ?>
	<?= form_label('Confirm new password', 'password_2', 'class="col-form-label"'); ?>
	<?= form_password('password_2', '', 'class="form-control" placeholder="Confirm password"'); ?>
	</div>
	<?= form_submit('submit', 'Change Password', 'class="col-md-12 btn btn-primary"'); ?>
	<?= form_close()?>
</div>
<?php }else{ ?>
<!-- Always Show this Div-->

<div>



		
		


		




	<?= form_open('login');?>
	
</div>
	<?= form_label('Username', 'username', 'class="form-label-group"'); ?>
	<?= form_input('username', '', 'class="form-control" placeholder="Username"'); ?>
	<?= form_label('Password', 'password', 'class="form-label-group mt-2"'); ?>
	<?= form_password('password', '', 'class="form-control" placeholder="Password"'); ?>
	<?= form_submit('submit', 'Login', 'class="btn btn-lg btn-primary btn-block mt-3"'); ?>
	<?= form_close()?>			

</div>	

<?php } ?>


		</div>
	</div>
	<footer class="bg-dark text-center text-white py-2">
Copyright © 2019 - Risk D. Most Rights Reserved.
</footer>
</body>

<script>



$(document).ready(function(){
    $('#resetcodeCopybtn').click(function(){
  	var copyText = document.getElementById("restcode");
		copyText.select();
		copyText.setSelectionRange(0, 99999); 
		document.execCommand("copy");

	/* Alert the copied text */
        $('#copied-alert').show()
    }) ;

});


</script>