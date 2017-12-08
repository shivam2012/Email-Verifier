<?php
session_start();
include "db.php";
$email=$_SESSION['username'];
$password=$_SESSION['password'];
$sql="select first_name,last_name,email_id,password from users where email_id='$email'";
$a=mysqli_query($dbc,$sql);
$result=mysqli_fetch_array($a);
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Email Verifier</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">

</head>
<body class="fixed-navbar fixed-sidebar">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
            Homer Theme
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">HOMER APP</span>
        </div>
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder="Search something special" class="form-control" name="search">
            </div>
        </form>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="login.php">Login</a>
                    </li>
                    <li>
                        <a class="" href="logout.php">Logout</a>
                    </li>
                    <li>
                        <a class="" href="profile.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-speaker"></i>
                    </a>
                    <ul class="dropdown-menu hdropdown notification animated flipInX">
                        <li>
                            <a>
                                <span class="label label-success">NEW</span> It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-warning">WAR</span> There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-danger">ERR</span> Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See all notifications</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-keypad"></i>
                    </a>

                    <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="projects.html">
                                        <i class="pe pe-7s-portfolio text-info"></i>
                                        <h5>Projects</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="mailbox.html">
                                        <i class="pe pe-7s-mail text-warning"></i>
                                        <h5>Email</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="contacts.html">
                                        <i class="pe pe-7s-users text-success"></i>
                                        <h5>Contacts</h5>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="forum.html">
                                        <i class="pe pe-7s-comment text-info"></i>
                                        <h5>Forum</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="analytics.html">
                                        <i class="pe pe-7s-graph1 text-danger"></i>
                                        <h5>Analytics</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="file_manager.html">
                                        <i class="pe pe-7s-box1 text-success"></i>
                                        <h5>Files</h5>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu hdropdown animated flipInX">
                        <div class="title">
                            You have 4 new messages
                        </div>
                        <li>
                            <a>
                                It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                Lorem Ipsum is simply dummy.
                            </a>
                        </li>
                        <li>
                            <a>
                                Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" id="sidebar" class="right-sidebar-toggle">
                        <i class="pe-7s-upload pe-7s-news-paper"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="login.php">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index.php">
              <img src="myself.jpg" height="60" width="70">
              <!-- <script src="http://www.avatarapi.com/js.aspx?email=kmtilwani@gmail.com&size=76">
              </script> --->
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase"><?php echo $result[0]."&nbsp".$result[1] ?></span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">Developer<b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated flipInX m-t-xs">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li class="active">
                <a href="dashboard.php"> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li>
                <a href="verify.php"> <span class="nav-label">Verify</span></a>
            </li>

            <li>
                <a href="bulk.php"><span class="nav-label">Bulk</span></a>
            </li>
            <li>
                <a href="API.php"><span class="nav-label">API</span></a>
            </li>
        </ul>
    </div>
</aside>


<!-- Main Wrapper -->
<div id="wrapper">
    <div class="content animate-panel">
        <div class="content animate-panel">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <div class="signup-panel">
                          <div class="row">
                             <div class="col-lg-12">
                                <h2>My account</h2>
                                <form id="signup_form" class="simple_form user" action="update.php" accept-charset="UTF-8" method="post">

                                   <div class="row">
                                      <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="first-name-field">
                                            First name
                                            </label>
                                            <input autofocus="autofocus" class="form-control input-lg" id="first-name-field" name="fn" value="<?php echo $result[0]; ?>" required="required" type="text">
                                         </div>
                                      </div>
                                      <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="last-name-field">
                                            Last name
                                            </label>
                                            <input class="form-control input-lg" id="last-name-field" name="last_name" value="<?php echo $result[1]; ?>" required="required" type="text">
                                         </div>
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="email-field">
                                      Email
                                      </label>
                                      <input class="form-control input-lg" id="email-field" name="email" value="<?php echo $result[2]; ?>" required="required" type="email">
                                      <p class="help-block"><a href="#">Change my email address</a></p>
                                   </div>
                                   <div class="form-group">
                                      <label for="password-field">
                                      Password
                                      </label>
                                      <input class="form-control input-lg" id="password-field" name="password" value="<?php echo $result[3]; ?>" required="required" type="password">
                                      <p class="help-block">Leave it blank if you don't want to change it</p>
                                   </div>
                                   <div class="form-group">
                                      <label for="password-field">
                                      Current Password
                                      </label>
                                      <input class="form-control input-lg" id="password-field" name="c_password" value="<?php echo $result[3]; ?>" required="required" type="password">
                                   </div>
                                   </p>

                                   <button name="submit" class="btn-lg signup-btn btn-success " data-loading="Signing you up..." type="submit">Update</button>
                                </form>
                                <section class="delete-account">
                                    <h3>Delete my account</h3>
                                    <a class="del-btn" data-target="#destroy-modal" data-toggle="modal" id="delete-account">I wish to delete my account</a>
                                    <div class="modal fade hmodal-danger" id="destroy-modal" style="display: none;">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type="button">
                                    <span>
                                    ×
                                    </span>
                                    </button>
                                    <h2 class="modal-title">
                                    Delete my account
                                    </h2>
                                    </div>
                                    <form action="delete.php" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="delete"><input type="hidden" name="authenticity_token" value="pSeYXnspxdf0Cf0uthb0ojgUadVRENYHRNo8h4egzHVJrMotplxI9V+XNeCw8nVcWByZi7BZaI7cf7cclH4c1Q==">
                                    <div class="modal-body">
                                    <p>Once you delete your account, there is no going back. Your subscription is immediately cancelled and all your data is removed from our database.</p>
                                    <p>
                                    <strong>Are you absolutely sure you want to do this?</strong>
                                    </p>
                                    </div>
                                    <div class="modal-footer">
                                    <input class="btn white-btn btn-danger" type="submit" value="Yes, delete my account permanently">
                                    <button class="btn white-btn" data-dismiss="modal">
                                    Cancel
                                    </button>
                                    </div>
                                    </form>

                                    </div>
                                    </div>
                                    </div>

                                    </section>
                             </div>
                          </div>
                     </div>
                </div>
                <div class="col-lg-2">
                </div>

            </div>



        </div>
    </div>





</div>
































<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>
<script src="vendor/peity/jquery.peity.min.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>
<script src="scripts/charts.js"></script>

<!--
 You need to include this script on any page that has a Google Map.
 When using Google Maps on your own site you MUST signup for your own API key at:
 https://developers.google.com/maps/documentation/javascript/tutorial#api_key
 After your sign up replace the key in the URL below..
-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQTpXj82d8UpCi97wzo_nKXL7nYrd4G70"></script>


<script>

    // When the window has finished loading google map
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Options for Google map
        // More info see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions1 = {
            zoom: 14,
            center: new google.maps.LatLng(40.6700, -73.9400),
            // Style for Google Maps
            styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
        };

        // Get all html elements for map
        var mapElement1 = document.getElementById('map1');

        // Create the Google Map using elements
        var map1 = new google.maps.Map(mapElement1, mapOptions1);
    }

</script>
</body>
</html>
