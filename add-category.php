<?php
session_start();

if(!isset($_SESSION['admin_login'])){
	header('Location:login.php');
}
if(isset($_POST['logout'])) {
        unset($_SESSION['admin_login']);
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>

        <!-- Meta Tags -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Dashboard | Add category</title>
		<meta name="description" content="Bumpy shoppers">
		<meta name="keywords" content="Bumpy shoppers">
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

	<!-- Remove "header-side" if side menu isn't present | Remove "in" if you want the side-header closed by default -->

	<body class="header-side in">

		<!-- Page Loader -->

	<!-- 	<div class="loader">
			<div class="spinner"></div>
		</div> -->

		<!-- Page Content -->

		<div class="page-content">
            <header class="navigation">

                <!-- Header Wrapper -->

                <div class="main-nav dark-dropdown nav-icons-right header-icons header-right">
                    <div class="navbar navbar-default" role="navigation">
						<div class="container active">
							<div class="navbar-header">
                                <a href="form-tooltip-alerts.html#" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <ul class="bar-icon-wrapper">
                                        <li class="bar-icon"></li>
                                        <li class="bar-icon"></li>
                                        <li class="bar-icon"></li>
                                    </ul>
								</a>

								<!-- Logo -->

								<a class="logo" href="index.html">
									<img alt="image" src="images/bumpy-admin-logo.png" />
								</a><!-- End of Logo -->
							</div>

							<!-- Top Bar Icons -->

                            <div class="navbar-icons">

								<!-- Left aligned icons-->

                                <ul class="nav navbar-nav navbar-left">

									<!-- Sidebar Menu Trigger -->

                                    <li class="menu-icon">
                                        <a class="side-menu-trigger" href="form-tooltip-alerts.html#">
                                            <ul class="bar-icon-wrapper">
                                                <li class="bar-icon"></li>
                                                <li class="bar-icon"></li>
                                                <li class="bar-icon"></li>
                                            </ul>
                                        </a>
                                    </li><!-- End of Sidebar Menu Trigger -->

                                </ul><!-- End of Left Aligned Icons -->

								<!-- Right Aligned Icons -->
                <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
                <ul class="nav navbar-nav navbar-right">
                  <!-- Logout Button -->
                  <!-- <li> -->
                    <!-- <a  name="logout" type="submit"><i class="logout-icon pe-7s-power"></i></a> -->
                  <!-- </li>End of Logout Button -->


                  <input type="hidden" name="logout">
                  <button type="submit" class=" btn btn-primary logout-icon pe-7s-power">Logout</button>


                </ul><!-- End of Right Aligned Icons -->
              </form>
                            </div>
                        </div>
                    </div>

					<!-- Search panel -->

                    <div class="full-screen-search">
                        <div class="search-container">
                            <div class="search-holder">
                                <form id="searchForm" method="post" action="http://nucleus.amazyne.com/v2/search-results.html">
                                    <input type="text" name="search" class="search-field" placeholder="Type and Press Enter to Submit" />
                                    <input type="hidden" name="search" />
                                </form>
                            </div>
                        </div>
                    </div><!-- End of Search Panel -->

					<!-- Side Header | Remove "active" if you want side header closed by default -->

					<div class="side-header active">
            <div class="side-header-container">
              <div class="side-header-inner-container">
                <ul class="side-header-nav">
                  <li class="with-dropdown active">
                    <a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-presentation"></i>Dashboard</a>

                  </li>
                  <li class="menu-heading">Menu</li>
                  <li class="with-dropdown">
                    <a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-browser"></i>Categories <span class="dropdown-icon"></span></a>
                    <ul class="menu-dropdown collapse">
                      <li><a href="add-category.php">Add Categories</a></li>
                      <li><a href="product-category-list.php">List of Categories</a></li>

                    </ul>
                  </li>
                  <li class="with-dropdown">
                    <a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-browser"></i>Sub categories<span class="dropdown-icon"></span></a>
                    <ul class="menu-dropdown collapse">
                      <li><a href="add-sub-category.php">Add sub categories</a></li>
                      <li><a href="sub-category-list.php">List of sub categories</a></li>

                    </ul>
                  </li>
                  <li class="with-dropdown">
                    <a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-browser"></i>Products <span class="dropdown-icon"></span></a>
                    <ul class="menu-dropdown collapse">

                      <li><a href="add-product.php">Add Product </a></li>
                      <li><a href="product-list.php">List of Products </a></li>

                    </ul>
                  </li>

                  <li class="with-dropdown">
                    <a class="menu-dropdown-link with-badge" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-grid"></i>Orders<span class="dropdown-icon"></span><span class="menu-badge bg-orange">2</span></a>
                    <ul class="menu-dropdown collapse">
                      <li><a href="pending-orders.php">Pending orders</a></li>
                      <li><a href="processed-orders.php">processed orders</a></li>
                    </ul>
                  </li>


                </ul>
              </div>
            </div>
          </div>
				</div>
			</header> <!-- End of Header -->


			<!-- Page Header -->

			<section class="page-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 header-inline">
							<div class="header-inline-content">
								<h2 class="page-title">Add Category</h2>
							</div>
							<div class="header-inline-content">

							</div>
						</div>
					</div>
				</div>
			</section><!-- End of Page Header -->
			<div class="dv-notify"></div>
			<div class="dv-notify-success alert alert-success" style="display: none">Category saved successfully</div>
			<div class="dv-notify-failed alert alert-danger" style="display: none">Category failed to save</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div class="admin-content">
							<h4 class="text-center">Add Product categories</h4>
							<p class="mar-bot-30 text-center">This is where you add all categories for sub categories and products to be listed under</p>

							<!-- Form with Tooltip Alerts -->

							<form    class="dv-add-oneto:orders:category">
										<label class="control-label">Category Name</label>
										<input type="text" class="form-control" id="cat_name" name="name" placeholder="Please enter category name" />
										<label class="control-label" id="cat_image">Category Image</label>
              							<input type="file" class="form-control" name="image">
										<label class="control-label">Description</label>
										<textarea class="form-control" name="desc" id="cat_desc" rows="4" ></textarea>


                       					<br>
										<button type="submit" class="btn btn-default" >Submit</button>

							</form><!-- End of Form with Tooltip Alerts -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- End of Page Content -->


<script src="http://admin.bumpyshoppers.com/js/devless-sdk.js" class="devless-connection" devless-con-token="2d490ab1264453d3cb2718d699cdfd0a"></script>

        <!-- Loading Third Party Scripts -->

		<script src="third-party/jquery/jquery.min.js"></script>
		<script src="third-party/easing/js/jquery.easings.min.js"></script>
		<script src="third-party/bootstrap/js/bootstrap.min.js"></script>
		<script src="third-party/nivo-lightbox/js/nivo-lightbox.min.js"></script>
		<script src="third-party/owl/js/owl.carousel.js"></script>
		<script src="third-party/counter-up/js/jquery.counterup.min.js"></script>
		<script src="third-party/form-validation/js/formValidation.js"></script>
		<script src="third-party/form-validation/js/framework/bootstrap.min.js"></script>
		<script src="third-party/waypoint/js/waypoints.min.js"></script>
		<script src="third-party/wow/js/wow.min.js"></script>
		<script src="third-party/slimscroll/jquery.slimscroll.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>

		<!-- Loading Page's Scripts -->


        <script src="js/scripts.js"></script>
        <script src="js/custom.js"></script>

		<script>
			$(function(){
				$('.slim-scroll-div').slimscroll({
					height: 'auto'
				})
			});
		</script>

        <!-- Google Analytics Tracking -->

<script type="text/javascript">
	data = {};
	data['name'] = document.getElementById('cat_name').value;
	data['image'] = document.getElementById('cat_image').value;
	data['desc'] = document.getElementById('cat_desc').value;
	function addCategory(){
		SDK.addData('orders','category', data, function(){
			document.getElementsByClassName('dv-notify').value = 'Success';
		});
	}

</script>

    </body>
</html>
