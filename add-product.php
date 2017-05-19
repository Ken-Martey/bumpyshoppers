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
		<title>Dashboard | Add product</title>
		<meta name="description" content="Premium HTML5 Template">
		<meta name="keywords" content=" HTML5, Premium Template, Nucleus Theme">
		<meta name="author" content="Amazyne Themes">
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

            <!-- Header - Add "light" for light menu | "nav-dark-blue" for dark-blue accent | "nav-blue" for blue accent | "nav-blue-grey" for blue-grey accent |
				 "nav-green" for green accent | "nav-dark-green" for dark-green accent | "nav-purple" for purple accent | "nav-red" for red accent |
				  "nav-Orange" for Orange accent | "nav-yellow" for yellow accent -->

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

									</li><!-- AEnd of Task Dropdown -->
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
                    <a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-browser"></i>Categories <span class="dropdown-icon"></span></a>
                    <ul class="menu-dropdown collapse">
                      <li><a href="add-category.html">Add Categories</a></li>
                      <li><a href="product-category-list.html">List of Categories</a></li>

                    </ul>
                  </li>
                   <li class="with-dropdown">
                    <a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-browser"></i>Sub categories<span class="dropdown-icon"></span></a>
                    <ul class="menu-dropdown collapse">
                      <li><a href="add-sub-category.html">Add sub categories</a></li>
                      <li><a href="sub-category-list.html">List of sub categories</a></li>

                    </ul>
                  </li>
                  <li class="with-dropdown">
                    <a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-browser"></i>Products <span class="dropdown-icon"></span></a>
                    <ul class="menu-dropdown collapse">

                      <li><a href="add-product.html">Add Product </a></li>
                      <li><a href="product-list.html">List of Products </a></li>

                    </ul>
                  </li>
                  <li class="with-dropdown">
                    <a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-linegraph"></i>Special offers <span class="dropdown-icon"></span></a>
                    <ul class="menu-dropdown collapse">
                      <li><a href="add-special-offers.html">Add special offer</a></li>
                      <li><a href="special-offers-list.html">List of Special offers </a></li>
                    </ul>
                  </li>

                  <li class="with-dropdown">
                    <a class="menu-dropdown-link with-badge" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-grid"></i>Orders<span class="dropdown-icon"></span><span class="menu-badge bg-orange">2</span></a>
                    <ul class="menu-dropdown collapse">
                      <li><a href="pending-orders.html">Pending orders</a></li>
                      <li><a href="processed-orders.html">processed orders</a></li>
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
								<h2 class="page-title">Add products</h2>
							</div>
							<div class="header-inline-content">
								<ul class="breadcrumb">
									<li><a href="index.html"></a></li>
									<li></li>
									<li class="active"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section><!-- End of Page Header -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div class="admin-content">
							<div class="dv-notify-success alert alert-success">Product added successfully</div>
							<div class="dv-notify-failed alert alert-danger">Product could not be added</div>
							<h4 class="text-center">Add products to category</h4>
							<p class="mar-bot-30 text-center">The folloring form outputs the validation errors in a tooltip</p>

							<!-- Form with Tooltip Alerts -->

							<form class=" dv-add-oneto:orders:stock">
										<label class="control-label">Select a Category</label>
                     <select class="form-control cat" id="orders_category_id">
                     	<div id="cat">
                        <option v-for="category in categories" v-bind:value="category.id">{{category.name}}</option>
                     	</div>
                    </select>
										<label class="control-label">Product Name</label>
										<input type="text" class="form-control" id="name"/>
										<label class="control-label">Short description</label>
                    <textarea class="form-control" id="short_desc" rows="4" ></textarea>
										<label class="control-label">Long description</label>
                    <textarea class="form-control" id="long_desc" rows="4" ></textarea>
										<label class="control-label">Club price</label>
                    <input type="number" class="form-control"  id="clubPrice" />

                    <label class="control-label">Original price</label>
                    <input type="number" class="form-control"  id="origPrice" />

                      <label class="control-label">Image</label>
                    <input type="file" class="form-control"  id="image" />

                    <label class="control-label">Mark as Special Offer</label>	
                     <select class="form-control cat" id="on_offer">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                    <br>
                   				<button type="submit" onclick="addProduct(event)" class="btn btn-theme">Submit</button>
							</form><!-- End of Form with Tooltip Alerts -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- End of Page Content -->



        <!-- Loading Third Party Scripts -->

<script src="http://admin.bumpyshoppersclub.com/js/devless-sdk.js" class="devless-connection" devless-con-token="2d490ab1264453d3cb2718d699cdfd0a"></script>

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

		<script src="pages/formsValidator.min.js"></script>

        <!-- Loading Theme's Scripts -->

        <script src="js/scripts.js"></script>
        <script src="js/custom.js"></script>



<script>
function setImage() {
	function getBase64(file) {
   var reader = new FileReader();
   reader.readAsDataURL(file);
   reader.onload = function () {
     var image = reader.result;
     console.log(image);
   };
   reader.onerror = function (error) {
     console.log('Error: ', error);
   };
}

	var file = document.querySelector('#image').files[0];
	console.log("file", file);
	getBase64(file); // prints the base64 string
  
  
}

document.getElementById("image").addEventListener("change", setImage);



	function addProduct(event) {
		event.preventDefault();
		var data = {};
		var keys = ['orders_category_id', 'name', 'long_desc',
		 'short_desc', 'clubPrice', 'origPrice', 'image', 'on_offer'];

		for(var i= 0; i < keys.length; i++) {
			data[keys[i]] = document.getElementById(keys[i]).value;
		}
		SDK.addData('orders', 'stock', data, function(resp){
			if(resp.status_code == 609 )
			{
				for(var i= 0; i < keys.length; i++) {
					 document.getElementById(keys[i]).value ="";
				}
					document.getElementsByClassName('dv-notify-success')[0].style.display = 'block';
					document.getElementsByClassName('dv-notify-success')[0].value = "Product added successfully";
			} else {
					document.getElementsByClassName('dv-notify-failed')[0].style.display = 'block';
					document.getElementsByClassName('dv-notify-failed')[0].value = "Product Could not be added";
			}
		});
	}
	console.log($);
</script>
<script src="https://unpkg.com/vue"></script>
<script>
	new Vue({
		"el":".cat",
		data:{"categories":[]},
		mounted(){
			var vueObj = this;
			SDK.queryData('orders', 'category', {}, function(resp){
				if(resp.payload.results.length > 0){
					var cats = resp.payload.results;
					for(var i=0; i<cats.length; i++) {
						vueObj.categories.push(resp.payload.results[i]);
					}
				}
				
			})
		}

	})
</script>
    </body>
</html>
