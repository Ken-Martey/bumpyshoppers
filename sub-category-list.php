
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
        <title>Dashboard | sub category list</title>
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

            <!-- Sliding Chat : add "chat-light" along with "chat-slide" for light chat window-->

            <div class="chat-slide">
                <a href="tables-datatables.html#" class="chat-trigger"><i class="arrow_right"></i></a>

                <!-- Tabs -->
                <ul class="nav tab-theme tab-underline tab-light">
                    <li class="active">
                        <a href="tables-datatables.html#tab-chat" data-toggle="tab"><i class="pe-7s-chat"></i></a>
                    </li>
                    <li>
                        <a href="tables-datatables.html#tab-settings" data-toggle="tab"><i class="pe-7s-config"></i></a>
                    </li>
                </ul>
                <div class="tab-theme">
                    <div class="tab-content">
                        <div id="tab-chat" class="tab-pane active">
                            <div class="list-pane">
                                <div class="chat-top container-fluid">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <h5>Friends List</h5>
                                        </div>
                                        <div class="col-xs-2 chat-top-icon">
                                            <a href="tables-datatables.html#"><i class="icon_plus"></i></a>
                                        </div>
                                        <div class="col-xs-2 chat-top-icon">
                                            <a href="tables-datatables.html#"><i class="pe-7s-more"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Search -->

                                <div class="form-theme form-search">
                                    <div class="input-group">
                                        <input class="form-control" name="search" id="search" type="text">
                                        <span class="input-group-btn">
                                            <a class="btn" href="tables-datatables.html#"><i class="icon_search"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="slim-scroll-content-friends">
                                    <div class="slim-scroll-div">

                                        <!-- Friend List -->

                                        <ul class="friend-list">
                                            <li class="unread">
                                                <a class="message-trigger" href="tables-datatables.html#">
                                                    <div class="media">
                                                        <div class="media-left friend-online">
                                                            <img alt="img" class="media-object" src="images/team/woman-test.jpg">
                                                            <i></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Jane Doe</h4>
                                                            <small>Nulla vel metus</small>
                                                        </div>
                                                    </div>
                                                    <span class="badge">1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="message-trigger" href="tables-datatables.html#">
                                                    <div class="media">
                                                        <div class="media-left friend-busy">
                                                            <img alt="img" class="media-object" src="images/team/3-square.jpg">
                                                            <i></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">John Doe</h4>
                                                            <small>Nulla vel metus</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="unread">
                                                <a class="message-trigger" href="tables-datatables.html#">
                                                    <div class="media">
                                                        <div class="media-left friend-online">
                                                            <img alt="img" class="media-object" src="images/team/man-test-2.jpg">
                                                            <i></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">James Doe</h4>
                                                            <small>Nulla vel metus</small>
                                                        </div>
                                                    </div>
                                                    <span class="badge">3</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="message-trigger" href="tables-datatables.html#">
                                                    <div class="media">
                                                        <div class="media-left friend-away">
                                                            <img alt="img" class="media-object" src="images/team/2-square.jpg">
                                                            <i></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">June Doe</h4>
                                                            <small>Nulla vel metus</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="message-trigger" href="tables-datatables.html#">
                                                    <div class="media">
                                                        <div class="media-left friend-busy">
                                                            <img alt="img" class="media-object" src="images/team/man-test.jpg">
                                                            <i></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Jack Doe</h4>
                                                            <small>Nulla vel metus</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="message-pane">
                                <div class="container-fluid message-top">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <a href="tables-datatables.html#" class="message-trigger"><i class="arrow_left"></i></a>
                                        </div>
                                        <div class="col-xs-8 name">
                                            John
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="tables-datatables.html#" class="message-trigger"><i class="pe-7s-more"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="slim-scroll-content-messages">
                                    <div class="slim-scroll-div">

                                        <!-- Messages -->

                                        <ul class="message-list">
                                            <li>
                                                <div class="message-body">
                                                    <p class="message">Hi, how are you?</p>
                                                    <p class="message">Could you give me a detailed report on the project we had discussed asap?</p>
                                                </div>
                                                <img alt="img" class="message-img" src="images/team/woman-test.jpg">
                                            </li>
                                            <li class="message-right">
                                                <div class="message-body">
                                                    <p class="message">Sure, I'll send it to you in a few minutes.</p>
                                                </div>
                                                <img alt="img" class="message-img" src="images/team/man-test.jpg">
                                            </li>
                                            <li>
                                                <div class="message-body">
                                                    <p class="message">Thanks.</p>
                                                </div>
                                                <img alt="img" class="message-img" src="images/team/woman-test.jpg">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-theme form-big">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="icon_plus"></i></button>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Enter message">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-settings" class="tab-pane">
                            <h4>General Settings</h4>
                            <div class="slim-scroll-content-settings">
                                <div class="slim-scroll-div">
                                    <ul class="settings-list">
                                        <li>
                                            <label class="setting-option">Notifications</label>
                                            <div class="toggle">
                                                <input type="checkbox" name="toggle" class="toggle-checkbox" id="set-toggle-1" checked>
                                                <label class="toggle-label" for="set-toggle-1"></label>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </li>
                                        <li>
                                            <label class="setting-option">Emails</label>
                                            <div class="toggle">
                                                <input type="checkbox" name="toggle" class="toggle-checkbox" id="set-toggle-2">
                                                <label class="toggle-label" for="set-toggle-2"></label>
                                            </div>
                                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </li>
                                        <li>
                                            <label class="setting-option">Enable SMS Alerts</label>
                                            <div class="toggle">
                                                <input type="checkbox" name="toggle" class="toggle-checkbox" id="set-toggle-3">
                                                <label class="toggle-label" for="set-toggle-3"></label>
                                            </div>
                                            <p>Consectetur adipisicing elit.</p>
                                        </li>
                                        <li>
                                            <label class="setting-option">Show Tasks</label>
                                            <div class="toggle">
                                                <input type="checkbox" name="toggle" class="toggle-checkbox" id="set-toggle-4" checked>
                                                <label class="toggle-label" for="set-toggle-4"></label>
                                            </div>
                                            <p>Leiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- End of Tabs -->
                </div>
            </div><!-- End of Chat -->

            <!-- Page Header -->

            <section class="page-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 header-inline">
                            <div class="header-inline-content">
                                <h2 class="page-title">Sub category list</h2>
                            </div>
                            <div class="header-inline-content">
                                <ul class="breadcrumb">
                                    <li><a href=""></a></li>
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
                                          <th>Desc</th>
                                          <th>Image</th>
                                          <th>Category</th>
                                        </tr>
                                    </thead>
                                    <tbody class="dv-get-all:orders:sub_category">
                                        <tr>
                                          <td class="var-name">...</td>
                                          <td class="var-desc">...</td>
                                          <td><img src="" class="var-image" width="30" height="30"></td>
                                          <td class="var-category-name">...</td>
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

        <!-- Google Analytics Tracking -->

<script src="http://admin.bumpyshoppers.com/js/devless-sdk.js" class="devless-connection" devless-con-token="2d490ab1264453d3cb2718d699cdfd0a"></script>

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
