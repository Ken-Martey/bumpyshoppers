<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Meta Tags -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard | special offer list</title>
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
                      <li><a href="add-special-offers.php">Pending orders</a></li>
                      <li><a href="special-offers-list.php">processed orders</a></li>
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
                                <h2 class="page-title">Special Offer</h2>
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
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                      <th>Salary</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>Tiger Nixon</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                      <td><button type="" class="btn btn-theme">Item</button></td>
                                        </tr>

                                        <tr>
                                          <td>Bruno Nash</td>
                                          <td>Software Engineer</td>
                                          <td>London</td>
                                          <td>38</td>
                                          <td>2011/05/03</td>
                                          <td>$163,500</td>
                      <td><button type="" class="btn btn-theme">Item</button></td>
                                        </tr>
                                        <tr>
                                          <td>Sakura Yamamoto</td>
                                          <td>Support Engineer</td>
                                          <td>Tokyo</td>
                                          <td>37</td>
                                          <td>2009/08/19</td>
                                          <td>$139,575</td>
                      <td><button type="" class="btn btn-theme">Item</button></td>
                                        </tr>
                                        <tr>
                                          <td>Thor Walton</td>
                                          <td>Developer</td>
                                          <td>New York</td>
                                          <td>61</td>
                                          <td>2013/08/11</td>
                                          <td>$98,540</td>
                      <td><button type="" class="btn btn-theme">Item</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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


<script src="http://admin.bumpyshoppers.com/js/devless-sdk.js" class="devless-connection" devless-con-token="2d490ab1264453d3cb2718d699cdfd0a"></script>

    </body>
</html>
