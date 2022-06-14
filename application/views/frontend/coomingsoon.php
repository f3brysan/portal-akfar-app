<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Akademi Farmasi Surabaya adalah intitusi pendidikan tinggi Diploma-III Farmasi di Surabaya" />
    <meta name="keywords" content="academy, course, education, pharmacy," />
    <meta name="author" content="ThemeMascot" />
    <!-- Page Title -->
    <title>Akademi Farmasi Surabaya</title>
    <!-- Favicon and Touch Icons -->
    <link href="<?php echo base_url(); ?>assets/frontend/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="<?php echo base_url(); ?>assets/frontend/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo base_url(); ?>assets/frontend/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo base_url(); ?>assets/frontend/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php echo base_url(); ?>assets/frontend/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <!-- Stylesheet -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/frontend/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/frontend/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/frontend/css/css-plugin-collections.css" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="<?php echo base_url(); ?>assets/frontend/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    <!-- CSS | Theme Color -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-plugin-collection.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="">
    <div id="wrapper" class="clearfix">
      <!-- preloader -->
      <div id="preloader">
        <div id="spinner">
          <div class="preloader-dot-loading">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
          </div>
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
      </div>
      
      <!-- start main-content -->
      <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="bg-lightest fullscreen">
          <div class="display-table text-center">
            <div class="display-table-cell">
              <div class="container pt-0 pb-0"><div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <h1 class="text-theme-color-2 font-weight-100 font-64">Kami akan segera tayang</h1>
                  <div id="basic-coupon-clock" class="text-center font-36 pt-10 pb-10"></div>
                  <!-- Final Countdown Timer Script -->
                  <script type="text/javascript">
                  $(document).ready(function() {
                  $('#basic-coupon-clock').countdown('2021/03/04', function(event) {
                  $(this).html(event.strftime('%D <span class="font-16">Days</span> %H <span class="font-16">Hours</span> %M <span class="font-16"> Minutes</span> %S <span class="font-16"> Seconds</span>'));
                  });
                  });
                  </script>
                  
                  <!-- Mailchimp Subscription Form Validation-->              
                  <p class="font-14">Maaf, website sedang dalam perbaikan. <br> Kami akan segera tayang.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->
    
    <!-- Footer -->
    <footer id="footer" class="footer bg-black-333 text-center pt-20 pb-20">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2020 IT Akademi Farmasi Surabaya</p>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->
  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <script src="<?php echo base_url() ?>assets/frontend/js/custom.js"></script>
</body>
</html>