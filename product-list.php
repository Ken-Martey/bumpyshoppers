<!DOCTYPE html>
<html lang="en">
	<head>

        <!-- Meta Tags -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Dashboard | Product list</title>
		<meta name="description" content="Bumpy shoppers">
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

		<!-- Loading Page's Style -->

		<link rel="stylesheet" type="text/css" href="third-party/datatables/media/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="third-party/datatables/media/css/dataTables.bootstrap.min.css">

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


		<div class="page-content">


            <header class="navigation">

                <!-- Header Wrapper -->

                <div class="main-nav dark-dropdown nav-icons-right header-icons header-right">
                    <div class="navbar navbar-default" role="navigation">
						<div class="container active">
							<div class="navbar-header">
                                <a href="tables-datatables.html#" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
                                        <a class="side-menu-trigger" href="tables-datatables.html#">
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
								<h2 class="page-title">Product List</h2>
							</div>
							<div class="header-inline-content">
								<ul class="breadcrumb">
									<li><a href="index.html"></a></li>
									<li class="active"></li>
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
										  <th>Name</th>
										  <th>Image</th>
										  <th>Short Desc</th>
										  <th>Long Desc</th>
										  <th>Club Price</th>
										  <th>Original Price</th>
										  <th>Category</th>
										  <th>Action</th>
										</tr>
									</thead>
									<tbody class="dv-get-all:orders:stock">
										<tr>
										  <td class="var-name">...</td>
										  <td><img src="" class="var-image" width="30" height="30"></td>
										  <td class="var-short_desc" >...</td>
										  <td class="var-long_des">...</td>
										  <td class="var-clubPrice">...</td>
										  <td class="var-origPrice">...</td>
										  <td class="var-category-name">...</td>
                       <td><a href="update-product.php" class="btn btn-theme dv-update"> Edit</a>
                       <button class="dv-delete btn btn-danger">Delete</button>
                       </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div><!-- End of Page Content -->
<!-- modal -->
                <div class="col-md-3">
                  <div class="modal centered fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="LoginPanel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content modal-background">
                        <div class="modal-body pad-top-50 pad-bot-50 pad-left-50 pad-right-50">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-12">
                                <h3 id="LoginPanel" class="no-margin-top mar-bot-10 text-uppercase text-center letter-spacing-1">update Product</h3>
                                <p class="no-margin text-center letter-spacing-1"><small>Product update form.</small></p>

                              <form class="dv-update-oneof:orders:stock">
                                  <label class="control-label">Select a Category</label>
                                   <select class="form-control cat" id="orders_category_id" >
                                    <div class="cat" >
                                      <option v-for="category in categories" v-bind:value="category.id">{{category.name}}</option>
                                    </div>
                                  </select>
                                  <label class="control-label">Product Name</label>
                                  <input type="text" class="form-control" id="name" name="name" />
                                  <input type="hidden" class="form-control" name="id" />
                                  <label class="control-label">Short description</label>
                                  <textarea class="form-control"  rows="4" id="short_desc" name="short_desc"></textarea>
                                  <label class="control-label">Long description</label>
                                  <textarea class="form-control" rows="4" id="long_desc" name="long_desc"></textarea>
                                  <label class="control-label">Club price</label>
                                  <input type="text" class="form-control" id="clubPrice" name="clubPrice" />

                                  <label class="control-label">Original price</label>
                                  <input type="text" class="form-control" id="origPrice" name="origPrice" />

                                   <!--  <label class="control-label">Image</label>
                                  <input type="file" class="form-control"  id="image_url" /> -->

                                  <label class="control-label">Mark as Special Offer</label>
                                   <select class="form-control cat" id="on_offer" name="on_offer">
                                      <option value="0">No</option>
                                      <option value="1">Yes</option>
                                  </select>
                                  <br>
                                    <button type="submit" onclick="updateProduct(event)" class="btn btn-theme">Update product</button>
                            </form><!-- End of Form with Tooltip Alerts -->

                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
<!-- end of modal  -->

        <!-- Loading Third Party Scripts -->

<script src="http://admin.bumpyshoppers.com/js/devless-sdk.js" class="devless-connection" devless-con-token="2d490ab1264453d3cb2718d699cdfd0a"></script>

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

		<script  src="third-party/datatables/media/js/jquery.dataTables.min.js"></script>
		<script  src="third-party/datatables/media/js/dataTables.bootstrap.min.js"></script>

		<!-- Export functionality -->
		<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
		<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
		<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
		<!-- End of Export functionality -->

		<script>
			$('#example1').DataTable();
			$('#example2').DataTable( {
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
		</script>

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
<script>
function setImage() {
  function getBase64(file) {
   var reader = new FileReader();
   reader.readAsDataURL(file);
     reader.addEventListener('load', function(){
          var image = reader.result;
          document.getElementById('image').value = image;
          console.log(image);

      }, false)
   reader.onerror = function (error) {
     console.log('Error: ', error);
   };
}

  var file = document.querySelector('#image_url').files[0];
  console.log("file", file);
  getBase64(file); // prints the base64 string


}

// document.getElementById("image_url").addEventListener("change", setImage);



  function updateProduct(event) {
    event.preventDefault();
    console.log(event)
    var data = {};
    var keys = ['orders_category_id', 'name', 'long_desc',
     'short_desc', 'clubPrice', 'origPrice', 'on_offer'];

    for(var i= 0; i < keys.length; i++) {
      data[keys[i]] = document.getElementById(keys[i]).value;
      console.log(data);
    }
    SDK.updateData('orders', 'stock', 'id', data, function(resp){
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
    </body>
</html>



<!-- dashboard is complete -->
