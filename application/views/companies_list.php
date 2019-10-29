<head>
	<title>Risk D | Companies List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/select2.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/main.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/login.css')?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


	<!-- js -->
<!-- 	<script src="<?= base_url('assets/js/cb38aea1cb.js')?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/jquery-3.3.1.slim.min.js')?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/popper.min.js')?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/select2.full.min.js')?>" crossorigin="anonymous"></script> -->
</head>

<div class="d-flex col-md-12">
	<h4 class="p-3 col-md-9">Companies List</h4>	
	<div class="col-md-3 justify-content-end my-4 text-right">
		<a href="<?= base_url('companies')?>"class="btn btn-primary" >Add New Company</a>
	</div>
</div>

<div class="m-3">
	<div class="shadow bg-white p-3">
		<table id="companies" class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Entity Name</th>
					<th scope="col">ABN</th>
					<th scope="col">ACN</th>
					<th class="text-center" scope="col" width="118px">Action</th>
				</tr>
			</thead>
			<?php $x = 1; foreach ($table as $row) { ?>
				<tr>
					<th scope="row"><?= $x ?></th>
					<!-- <td><?= $country_list[$row->country] ?></td> -->
					<td><?= $row->entity_name ?></td>
					<td><?= $row->abn ?></td>
					<td><?= $row->acn ?></td>
					<!-- <td><?= $row->rbn ?></td> -->
					<!-- <td><?= $row->equity ?></td> -->
					<!-- <td><?= $row->date_established ?></td> -->
					<!-- <td><?= $row->confidentiality ?></td> -->
					<!-- <td><?= ($row->portfolio == "1")? 'Include' : 'Not include' ?></td> -->
					<!-- <td><?= $row->unit_no ?></td> -->
					<!-- <td><?= $row->street_no ?></td> -->
					<!-- <td><?= $row->street_name ?></td> -->
					<!-- <td><?= $row->suburb ?></td> -->
					<!-- <td><?= $row->state ?></td> -->
					<!-- <td><?= $row->pose_code ?></td> -->
					<!-- <td><?= $row->contact_type_1 ?></td> -->
					<!-- <td><?= $row->contact_type_2 ?></td> -->
					<td class="text-center">
						<div class="btn-group" role="group" aria-label="Basic example">
							<a class="btn btn-primary" href="<?= base_url('companies')?>?id=<?= $row->id ?>">Edit</a>
							<button type="button" class="btn ml-2 btn-danger" onclick="delete_recode('<?= $row->id ?>')">delete</button>
						</div>
					</td>
				</tr>
				<?php $x++; } ?>
			</table>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#companies').DataTable();
		} );

		function edit_recode(id){

			alert(id);
		}

		function delete_recode(id){

			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this imaginary file!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.post("<?= base_url('main/delet_com') ?>",{
						id:id,
					},function(D){
						swal("Poof! Your imaginary file has been deleted!", {
							icon: "success",
						});
						location.href = '<?= base_url('main/companieslist')?>';
					},"text");
				} else {
					
				}
			});






		}


	</script>
	<style>

		footer {
			bottom: 0;
			width: 100%;
		}
	</style>