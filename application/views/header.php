</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?= base_url()?>"><img src="<?= base_url('assets/img/logo.png')?>" alt="" style="height:50px">  </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active mx-2">
					<a class="nav-link" href="<?= base_url()?>"> Home <span class="sr-only">(current)</span></a>
				</li>
				<?php if($admin){?>
				<li class="nav-item mx-2">
					<a class="nav-link" href="<?= base_url('main/companieslist')?>">Companies</a>
				</li>

					<li class="nav-item mx-2">
						<a class="nav-link" href="<?= base_url('users')?>">Users</a>
					</li>
				<?php } ?>

				<li class="nav-item mx-2">
						<a class="nav-link" href="<?= base_url('main/report_list')?>">Pending Reports</a>
					</li>

				<li class="nav-item dropdown mx-2">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-user"></i> Welcome <?= $user_name?>
					</a>
					<div class="dropdown-menu">
						<a href="<?= base_url('profile')?>" class="dropdown-item">
							<i class="fas fa-user-circle"></i> Profile
						</a>
						<!-- <a href="<?= base_url('settings')?>" class="dropdown-item">
							<i class="fas fa-cog"></i> Settings
						</a> -->
						<a href="<?= base_url('logout')?>" class="dropdown-item">
							<i class="fa fa-sign-out"></i> Logout
						</a>
					</div>
				</li>
			</ul>
		</div>
		</div>
	</nav>


<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script> -->
	<script>
		$(document).ready(function($) {
			// $('.is-invalid').keyup(function(event) {
				$(".is-invalid").on('keyup change', function (){
					/* Act on the event */
 				// console.log($(this).attr('id'));
 				$(this).removeClass('is-invalid');
 				$('#error_'+$(this).attr('id')).remove();
 			});
			});

			function notificationme(){
				toastr.options = {
					"closeButton": false,
					"debug": false,
					"newestOnTop": true,
					"progressBar": false,
					"positionClass": "toast-top-right",
					"preventDuplicates": false,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				}
			}
			function todecimal(number){
			return parseInt(Math.round(number * 100) / 100).toFixed(2) || 0;
		}
		</script>


		<?php if(isset($success)){
			if(isset($success['head'])){?>
				<script type="text/javascript">	$(document).ready(function($){ toastr.success('<?= $success["body"] ?>','<?= $success["head"] ?>'); }); </script>
			<?php }else{ ?>
				<script type="text/javascript">	$(document).ready(function($){ toastr.success('<?= $success["body"] ?>'); }); </script>
			<?php }
		}elseif (isset($error)){
			if(isset($error['head'])){?>
				<script type="text/javascript">	$(document).ready(function($){ toastr.error('<?= $error["body"] ?>','<?= $error["head"] ?>'); }); </script>
			<?php }else{ ?>
				<script type="text/javascript">	$(document).ready(function($){ toastr.error('<?= $error["body"] ?>'); }); </script>
			<?php }
		}elseif(isset($warning)){
			if(isset($warning['head'])){?>
				<script type="text/javascript">	$(document).ready(function($){ toastr.warning('<?= $warning["body"] ?>','<?= $warning["head"] ?>'); }); </script>
			<?php }else{?>
				<script type="text/javascript">	$(document).ready(function($){ toastr.warning('<?= $warning["body"] ?>'); }); </script>
			<?php }
		}elseif(isset($info)){
			if(isset($info['head'])){?>
				<script type="text/javascript">	$(document).ready(function($){ toastr.info('<?= $info["body"] ?>','<?= $info["head"] ?>'); }); </script>
			<?php }else{?>
				<script type="text/javascript">	$(document).ready(function($){ toastr.info('<?= $info["body"] ?>'); }); </script>
			<?php }
		}
		?>

		<!-- System Alets are come here.-->
		<?php// (isset($success)? $success : '') ?> <!-- System massages -->
		<?php// (isset($error)? $error : '') ?>		<!-- Syatem errors -->
		<?php// (isset($warning)? $warning : '') ?>	<!-- System warning -->
		<?php// (isset($info)? $info : '') ?>		<!-- System Info -->
