<?php
session_start();

if(!isset($_SESSION['admin_login'])){
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>

        <!-- Meta Tags -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Dashboard | Bumpy Shoppers</title>
		<meta name="description" content="Bumpy shoppers">
		<meta name="keywords" content="Bumpy shoppers">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Favicon -->

		<link rel="icon" href="favicon.ico" type="image/x-icon">

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

		<!-- Loading Page's Styles -->

		<link rel="stylesheet" href="third-party/morris.js/morris.css">
		<link rel="stylesheet" href="third-party/dropzone/css/dropzone.min.css">
		<link rel="stylesheet" href="third-party/full-calendar/css/fullcalendar.min.css">


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
		<!-- <div class="loader">
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
                                <a href="#" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
                                        <a class="side-menu-trigger" href="#">
                                            <ul class="bar-icon-wrapper">
                                                <li class="bar-icon"></li>
                                                <li class="bar-icon"></li>
                                                <li class="bar-icon"></li>
                                            </ul>
                                        </a>
                                    </li><!-- End of Sidebar Menu Trigger -->



                                </ul><!-- End of Left Aligned Icons -->


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
										<a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-browser"></i>Categories<span class="dropdown-icon"></span></a>
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

			<div class="section-admin container-fluid">
				<div class="row admin text-center">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="admin-content bg-blue text-light text-left">
									<span class="counter-icon counter-icon-big icon_ribbon color-dark-blue"></span>
									<span class="counter-extend"></span><span class="counter">5</span>
									<h3>Categories</h3>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="admin-content bg-dark-blue text-light text-left">
									<span class="counter-icon counter-icon-big icon_tags"></span>
									<span class="counter">100</span>
									<h3>products</h3>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="admin-content bg-purple text-light text-left">
									<span class="counter-icon counter-icon-big icon_cart"></span>
									<span class="counter">10</span>
									<h3>Special Offers</h3>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="admin-content bg-dark-green text-light text-left">
									<span class="counter-icon counter-icon-big icon_chat color-green"></span>
									<span class="counter">80</span>
									<h3>pending Orders</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Page Header -->

      <section class="page-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 header-inline">
              <div class="header-inline-content">
                <h2 class="page-title">Pending Orders</h2>
              </div>
              <div class="header-inline-content">
                <ul class="breadcrumb">
                  <li><a href="">Home</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End of Page Header -->

       <!-- Flot Basic -->

      <div class="section-admin container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="admin-content">
              <div class="table-responsive">
                <table id="example1" class="table table-theme table-striped">
                  <thead>
                    <tr>
                      <th>Customer Name</th>
                      <th>Description</th>
                      <th>Ref Code</th>
                      <th>Order Note</th>
                      <th>Total payable</th>
                      <th>Contact</th>
                      <th>Items</th>
                    </tr>
                  </thead>
                  <tbody class="dv-get-all:orders:order_list">
                    <tr>
                      <td class="var-customer_name">...</td>
                      <td class="var-description">...</td>
                      <td class="var-reference_code">...</td>
                      <td class="var-order_note">...</td>
                      <td class="var-total_payable">...</td>
                      <td class="var-customer_contact">...</td>
                      <td><button type="" class="btn btn-theme">Item</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


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

		<!-- Loading Page's Script -->

		<script src="third-party/morris.js/morris.js"></script>
		<script src="pages/morris-charts.js"></script>

        <!-- Loading Theme's Scripts -->

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


<script src="http://admin.bumpyshoppers.com/js/devless-sdk.js" class="devless-connection" devless-con-token="2d490ab1264453d3cb2718d699cdfd0a"></script>

    </body>
</html>
