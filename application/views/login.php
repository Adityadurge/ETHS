<!doctype html>
<html lang="en" dir="ltr">
  <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- TITLE -->
        <title><?=@$title;?></title>	<!-- DASHBOARD CSS -->
		<link href="<?=base_url();?>template/assets/css/dashboard.css" rel="stylesheet"/>

		<!-- SIDE-MENU CSS -->
		<link href="<?=base_url();?>template/assets/plugins/toggle-menu/sidemenu.css" rel="stylesheet">

		<!-- SINGLE-PAGE CSS -->
		<link href="<?=base_url();?>template/assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

		<!--C3.JS CHARTS PLUGIN -->
		<link href="<?=base_url();?>template/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="<?=base_url();?>template/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="<?=base_url();?>template/assets/css/icons.css" rel="stylesheet"/>

	</head>
	<body>

		<!-- BACKGROUND-IMAGE -->
		<div class="login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="<?=base_url();?>template/assets/images/loader.svg" class="loader-img" alt="Loader">
			</div>

			<div class="page">
				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<div class="text-center">
							<img src="<?=base_url();?>template/logo.jpeg" class="" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
							<form class="login100-form validate-form" method="post" action="<?=base_url();?>Welcome/Login">
                            <?php echo validation_errors(); ?>  
								<span class="login100-form-title">
									Login
								</span>
								<?=@$this->session->flashdata('result');?>
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="contact" placeholder="Contact Number">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-email" aria-hidden="true"></i>
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Password is required">
									<input class="input100" type="password" name="pwd" placeholder="Password">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-lock" aria-hidden="true"></i>
									</span>
								</div>
								<div class="text-right pt-1">
									<p class="mb-0"><a href="forgot-password.html" class="text-primary ml-1">Forgot Password?</a></p>
								</div>
								<div class="container-login100-form-btn">
									<button name="login" class="login100-form-btn btn-primary">
										Login
                                        </button>
								</div>
								
							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY SCRIPTS -->
		<script src="<?=base_url();?>template/assets/js/vendors/jquery-3.2.1.min.js"></script>

		<!-- BOOTSTRAP SCRIPTS -->
		<script src="<?=base_url();?>template/assets/js/vendors/bootstrap.bundle.min.js"></script>

		<!-- SPARKLINE -->
		<script src="<?=base_url();?>template/assets/js/vendors/jquery.sparkline.min.js"></script>

		<!-- CHART-CIRCLE -->
		<script src="<?=base_url();?>template/assets/js/vendors/circle-progress.min.js"></script>

		<!-- RATING STAR -->
		<script src="<?=base_url();?>template/assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- INPUT MASK PLUGIN-->
		<script src="<?=base_url();?>template/assets/plugins/input-mask/jquery.mask.min.js"></script>

		<!-- CUSTOM SCROLL BAR JS-->
		<script src="<?=base_url();?>template/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- CUSTOM JS-->
		<script src="<?=base_url();?>template/assets/js/custom.js"></script>

	</body>
</html>
