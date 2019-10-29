<title>Risk D | Profile</title>
<main role="main" class="container pt-5">
	<h4>Hi <?= $_SESSION['user']['user_name'] ?>, </h4>
	
	<h5>Change your Password</h5>
	<div class="mt-4">
		<?= form_open(base_url('profile'), ''); ?>
		<div class="container">
		
			<div class="row">
				<label for="current">Current password</label>
				<?= form_password('current', '', "id='current' class='form-control ".(form_error("current") !=  ""? "is-invalid" : "")."'"); ?>
				<div id="error_current" style="color: red;font-size: smaller;margin: 0px 8px -10px 1px;">
					<?= form_error('current') ?></div>

			</div>
			<div class="row">
				<label for="password_1">New Password</label>
				<?= form_password('password_1', '', "id='password_1' class='form-control ".(form_error("password_1") !=  ""? "is-invalid" : "")."'"); ?>
				<div id="error_password_1" style="color: red;font-size: smaller;margin: 0px 8px -10px 1px;">
					<?= form_error('password_1') ?></div>

			</div>
			<div class="row pt-2">
				<label for="password_2">Confirm Password</label>
				<?= form_password('password_2', '', "id='password_2' class='form-control ".(form_error("password_2") !=  ""? "is-invalid" : "")."'"); ?>
				<div id="error_password_2" style="color: red;font-size: smaller;margin: 0px 8px -10px 1px;">
					<?= form_error('password_2') ?></div>

			</div>
		</div>
		<div class="py-2">
		<?= form_submit('submit', 'Update', 'Class="btn btn-primary"'); ?>
		<?= form_close(); ?>
		</div>
	</div>
</main>

<style>

footer {
    position: absolute;
    bottom: 0;
    width: 100%;
}

</style>
