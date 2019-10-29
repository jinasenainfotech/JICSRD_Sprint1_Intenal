<title>Risk D | User Creation</title>
<h4 class="text-center py-3">User Creation</h4>
<div class="container-fluid">
<div class="row my-4">
	<div class="col-lg-4">
		<?= form_open(base_url('users'), 'class="user-creation-form p-md-3 py-3 shadow bg-white"'); ?>
		<?= form_input('hid', '0', 'id="hid" style="display:none;"'); ?>
		<div class="col">
			<div class="form-group">
				<label for="user_name">User Name</label>
				<input id="user_name" name="user_name"
					value="<?= (isset($input['user_name']))? $input['user_name'] : '' ?>" type="text"
					class="form-control <?= (form_error("user_name") !=  ""? "is-invalid" : "") ?>"
					placeholder="User Name">
				<div id="error_user_name" style="color: red;font-size: smaller;"><?= form_error('user_name') ?></div>
			</div>
		</div>
		<div class="d-flex user-creation-form-wrapper">
			<div class="col-md-6">
				<div class="form-group">
					<label for="first_name">First Name</label>
					<input id="first_name" name="first_name"
						value="<?= (isset($input['first_name']))? $input['first_name'] : '' ?>" type="text"
						class="form-control <?= (form_error("first_name") !=  ""? "is-invalid" : "") ?>"
						placeholder="First Name">
					<div id="error_first_name" style="color: red;font-size: smaller;"><?= form_error('first_name') ?>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="last_name">Last Name</label>
					<input id="last_name" name="last_name" type="text"
						value="<?= (isset($input['last_name']))? $input['last_name'] : ''?>"
						class="form-control <?= (form_error("last_name") !=  ""? "is-invalid" : "") ?>"
						placeholder="Last Name">
					<div id="error_last_name" style="color: red;font-size: smaller;"><?= form_error('last_name') ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="password">Password</label>
				<input id="password" name="password" type="password"
					class="form-control <?= (form_error("password") !=  ""? "is-invalid" : "") ?>"
					placeholder="Password">
				<div id="error_password" style="color: red;font-size: smaller;"><?= form_error('password') ?></div>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="confirm_password">Confirm Password</label>
				<input id="confirm_password" name="confirm_password" type="password"
					class="form-control <?= (form_error("confirm_password") !=  ""? "is-invalid" : "") ?>"
					placeholder="Confirm Password">
				<div id="error_confirm_password" style="color: red;font-size: smaller;">
					<?= form_error('confirm_password') ?></div>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="user_role">User Role</label>
				<select id="user_role" name="user_role"
					class="browser-default custom-select <?= (form_error("user_role") !=  ""? "is-invalid" : "") ?>">
					<option selected disabled>User Role</option>
					<option value="3">Analyst</option>
					<option value="1">Manager</option>
					<option value="2">Administrator</option>
				</select>
				<div id="error_user_role" style="color: red;font-size: smaller;"><?= form_error('user_role') ?></div>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="designation">Designation</label>
				<select id="designation" name="designation" class="browser-default custom-select">
					<option selected disabled>Designation</option>
					<option value="junior_analyst">Junior Analyst</option>
					<option value="senior_analyst">Senior Analyst</option>
				</select>
			</div>
		</div>


		<div class="col">
			<div class="form-group">
				<label for="address">Address</label>
				<input id="address" name="address" type="text"
					value="<?=(isset($input['address']))? $input['address'] : '' ?>"
					class="form-control <?= (form_error("address") !=  ""? "is-invalid" : "") ?>" placeholder="Address">
				<div id="error_address" style="color: red;font-size: smaller;"><?= form_error('address') ?></div>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="telephone">Telephone</label>
				<input id="telephone" name="telephone" type="text"
					value="<?=(isset($input['telephone']))? $input['telephone'] : ''?>"
					class="form-control <?= (form_error("telephone") !=  ""? "is-invalid" : "") ?>"
					placeholder="Telephone">
				<div id="error_telephone" style="color: red;font-size: smaller;"><?= form_error('telephone') ?></div>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="email">Email</label>
				<input id="email" name="email" type="email" value="<?=(isset($input['email']))? $input['email'] : ''?>"
					class="form-control <?= (form_error("email") !=  ""? "is-invalid" : "") ?>" placeholder="Email">
				<div id="error_email" style="color: red;font-size: smaller;"><?= form_error('email') ?></div>
			</div>
		</div>


		<div class="d-flex justify-content-center">
			<input type="submit" id="submit" name="submit" value="save" class="btn btn-primary mx-1">
			<input type="button" id="clear" name="clear" value="clear" class="btn btn-warning mx-1">
		</div>
		<?= form_close(); ?>
		<div class="clearfix"></div>

	</div>
	<div class="col-lg-8">

	<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">User Name</th>
						<th scope="col">First name</th>
						<!-- <th scope="col">Last name</th> -->
						<!-- <th scope="col">Email</th> -->
						<th scope="col">Designation</th>
						<th scope="col">User Role</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>

					<?php $x = 1; foreach ($table as $row) { ?>
					<tr>
						<th scope="row"><?= $x ?></th>
						<td><?= $row->user_name ?></td>
						<td><?= $row->firstname ?></td>
						<!-- <td><?= $row->lastname ?></td> -->
						<!-- <td style="
    						overflow-x: hidden;
							max-width: 200px;
    						white-space: nowrap;
    						text-overflow: ellipsis;
"><?= $row->email ?></td> -->
						<td><?= $row->designation ?></td>
						<td><?= ($row->permission_id == 1? 'Manager' : ($row->permission_id == 2? 'Admin' : 'Analyst' )) ?>
						</td>
						<td>
							<div class="btn-group" role="group" aria-label="Basic example">
								<button type="button" class="btn btn-primary"
									onclick="user_edit('<?= $row->user_id ?>')">Edit</button>
								<button type="button" class="btn btn-danger"
									onclick="user_delete('<?= $row->user_id ?>')">delete</button>
							</div>
						</td>
					</tr>
					<?php $x++; } ?>

				</tbody>
			</table>

	</div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function ($) {
		$('#clear').click(function (event) {
			$('#hid').val('');
			$('#user_name').val('');
			$('#first_name').val('');
			$('#last_name').val('');
			$('#address').val('');
			$('#telephone').val('');
			$('#email').val('');
			$('#telephone').val('');
			$('#user_role').val('');
			$('#designation').val('');
			$('#submit').val('save');
		});
	});


	function user_edit(user_id) {
		$.post("<?= base_url('main/edit_user')?>", {
			id: user_id,
		}, function (r) {

			if (r != 0) {
				$('#hid').val(user_id);
				$('#user_name').val(r.user_name);
				$('#first_name').val(r.firstname);
				$('#last_name').val(r.lastname);
				$('#address').val(r.address);
				$('#telephone').val(r.telephone);
				$('#email').val(r.email_id);
				$('#telephone').val(r.telephone);
				$('#user_role').val(r.user_role);
				$('#designation').val(r.designation);
				$('#submit').val('update');
			}
		}, "json");
	}

	function user_delete(user_id) {
		swal({
				title: "Warning",
				text: "Are you sure that you want to permanently delete the record?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.post("<?= base_url('main/delete_user')?>", {
						id: user_id,
					}, function (r) {
						swal("Record deleted successfully.", {
							icon: "success",
						}).then((value) => {
							location.reload();
						});
					}, "json");
				} else {}
			});

	}

</script>
<style>
	footer {
		bottom: 0;
		width: 100%;
	}

</style>
