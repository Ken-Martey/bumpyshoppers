<!DOCTYPE html>
<html lang="en">
<?php
session_start();

include('devless.php');
$devless = new SDK("http://admin.bumpyshoppers.com", "2d490ab1264453d3cb2718d699cdfd0a");
$failed = null;
if(isset($_POST['email'])) {

  $response = $devless->call('devless','login',['email'=>$_POST['email'],'password'=>$_POST['password']]);
  if(isset($response['payload']['result']['token']) && $response['payload']['result']['profile']['role'] == 1) {
    $devless->setUserToken($response['payload']['result']['token']);
    $_SESSION['admin_login'] = $response['payload']['result']['token'];
    $failed = false;
    header('Location:/index.php');

  } else {
    $failed = true;
  }


}

if(isset($_POST['logout'])) {
    unset($_SESSION['admin_login']);
}


?>
<?php if($failed){?>
<div> Sorry you can't be logged in </div>
<?php } ?>
	<head>

		<!-- Meta Tags -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Bumpy Admin| Login</title>
		<meta name="description" content="Premium HTML5 Template">
		<meta name="keywords" content=" HTML5, Premium Template, Nucleus Theme">
		<meta name="author" content="Amazyne Themes">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Favicon -->

		<link rel="icon" href="bumpy.ico" type="image/x-icon">

		<!-- Loading Google Fonts -->

		<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>

		<!-- Loading Third Party Styles -->

		<link rel="stylesheet" href="third-party/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="third-party/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="third-party/et-line/css/style.css">
		<link rel="stylesheet" href="third-party/elegant-icons/css/style.css">
		<link rel="stylesheet" href="third-party/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" href="third-party/pe-icon-7-stroke/css/helper.css">
		<link rel="stylesheet" href="third-party/nivo-lightbox/css/nivo-lightbox.css" />
		<link rel="stylesheet" href="third-party/nivo-lightbox/themes/default/default.css"/>
		<link rel="stylesheet" href="third-party/animate/css/animate.css">
		<link rel="stylesheet" href="third-party/owl/css/owl.carousel.css">
		<link rel="stylesheet" href="third-party/owl/css/owl.theme.css">
		<link rel="stylesheet" href="third-party/form-validation/css/formValidation.min.css">

		<!-- Loading Theme's Styles -->

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/custom.css">

		<!-- Script for IE < 9 -->

		<!--[if lt IE 9]>
		<script src="third-party/respond/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- Page Loader -->
<!--
		<div class="loader">
			<div class="spinner"></div>
		</div> -->

		<!-- Page Content -->

		<div class="page-content">
			<div class="container-fluid mar-top-100 mar-bot-100">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="text-center">
							<div class="logo"><img alt="img" width="150" src="images/bumpy_logo.jpeg"></div>
							<div class="tab-theme">
								<div class="tab-content">
									<div id="tab1" class="tab-pane active">
										<div class="row">
											<div class="col-md-12">
												<!-- Main Form -->
												<div class="login-form-1">

													<form id="login-form" method="POST" action="<?= $_SERVER['PHP_SELF']?>" class="text-left">
														<div class="login-form-main-message"></div>
														<div class="main-login-form">
															<div class="login-group">
																<div class="form-group">
																	<label class="sr-only">Email</label>
																	<input type="email" class="form-control" name="email" id="lg_username" placeholder="Please enter your email here">
																</div>
																<div class="form-group">
																	<label class="sr-only">Password</label>
																	<input type="password" class="form-control" name="password" id="lg_password" placeholder="Password">
																</div>
																<!-- <div class="form-group form-group-remember no-margin no-padding login-group-checkbox"> -->
																	<!-- <input type="checkbox" id="lg_remember" name="lg_remember"> -->
																	<!-- <label for="lg_remember">Remember</label> -->
																<!-- </div> -->

															</div>
															<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
														</div>
														<!-- <div class="etc-login-form text-center text-main">
															<p class="mar-top-15"><b>Forgot your password?</b> <a href="login-register-1.html#tab2" data-toggle="tab">Click Here</a></p>
															<p><b>New user?</b> <a href="login-register-1.html#tab3" data-toggle="tab">Create New Account</a></p>
														</div> -->
													</form>
												</div>
												<!-- End of Main Form -->
											</div>
										</div>
									</div>

								</div>
							</div>
							<hr class="mar-top-25 mar-bot-25"/>
							<small class="weight-400">©2017 Bumpy shoppers</small>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End of Page Content -->

		<!-- Loading Third Party Scripts -->

		<script src="third-party/jquery/jquery.min.js"></script>
		<script src="third-party/easing/js/jquery.easings.min.js"></script>
		<script src="third-party/bootstrap/js/bootstrap.min.js"></script>
		<script src="third-party/nivo-lightbox/js/nivo-lightbox.min.js"></script>
		<script src="third-party/owl/js/owl.carousel.js"></script>
		<script src="http://nucleus.amazyne.com/v2/third-party/isotope/js/isotope.pkgd.min.js"></script>
		<script src="third-party/counter-up/js/jquery.counterup.min.js"></script>
		<script src="third-party/form-validation/js/formValidation.js"></script>
		<script src="third-party/form-validation/js/framework/bootstrap.min.js"></script>
		<script src="third-party/waypoint/js/waypoints.min.js"></script>
		<script src="third-party/wow/js/wow.min.js"></script>
		<script src="third-party/smooth-scroll/js/smoothScroll.js"></script>
		<script src="third-party/jquery-parallax/js/jquery.parallax.js"></script>
		<script src="third-party/jquery-parallax/js/jquery.localscroll.min.js"></script>
		<script src="third-party/jquery-parallax/js/jquery.scrollTo.js"></script>

		<!-- Loading Theme's Scripts -->

		<script src="js/scripts.js"></script>
		<script src="js/custom.js"></script>

		<!-- Google Analytics Tracking -->

		<script>

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-58677854-6', 'auto');
			ga('send', 'pageview');

		</script>

    </body>
</html>
