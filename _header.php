<?php 

	
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="dist/img/low-temperature.png" sizes="96x96" /> 
    <title>Sensor - DEV</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <?php /*<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> */ ?>
    <script src="https://use.fontawesome.com/f57f8d59a6.js"></script>
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- v2.1 <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />  -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/_all-skins.css" rel="stylesheet" type="text/css" />
    <!-- v2.1 <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/green.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <!--  <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- ClockPicker -->
    <link href="plugins/clockpicker/clockpicker.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <?php /* <link href="plugins/select2/select2.css" media="all" rel="stylesheet" type="text/css" /> */ ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 2.1.3 --><?php /*
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/ ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  
       
    
    <script>
      /*$.widget.bridge('uibutton', $.ui.button);*/
		/*function isset(variable) {
			return typeof variable !== typeof undefined ? true : false;
		}*/
      var apertura = '';
    </script>
    <script src="plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
	
    <!-- Bootstrap 3.3.2 JS -->
    <script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     <!-- jQuery UI 1.11.2 -->
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<?php /*
	<script src="plugins/select2/select2.js" type="text/javascript"></script> */?>
    
	<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css' />
	<!--<script src='//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js'></script>-->
	<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
 <!-- Daterangepicker new version cdn -->
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<script src='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js'></script>

<!-- menu float scroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/floatthead/2.1.1/jquery.floatThead.min.js"></script>

<?php include_once './plugins/datepickercdn.php'; ?>
<!-- daterangepicker
    <script src="plugins/ndaterangepicker/daterangepicker.js" type="text/javascript"></script> -->




<style> 
.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    padding-right: 20px !important;
    padding-left: 20px !important;
}
.sidebar-collapse .user-panel {
	display : none;
}
.select2-container--default .select2-selection--single, .select2-selection .select2-selection--single {
	padding-left: 0px !important;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
	line-height: unset !important;
}
</style>

  </head>
  <body class="sidebar-mini skin-purple">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a class="logo" href=""><i class="fa fa-thermometer-half"></i><b> Sensor - DEV</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>