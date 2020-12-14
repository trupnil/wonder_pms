<!DOCTYPE html>
<html><!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Login Pages HTML Template - Responsive Multipurpose Admin Templates | Vendroid</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
    <meta name="description" content="Login Pages - Responsive Admin HTML Template">
    <meta name="author" content="Venmond">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">
    
    
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="{{asset('files')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('files')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="{{asset('files')}}/css/font-awesome-ie7.min.css"><![endif]-->
    <link href="{{asset('files')}}/css/font-entypo.css" rel="stylesheet" type="text/css">    

    <!-- Fonts CSS -->
    <link href="{{asset('files')}}/css/fonts.css"  rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="{{asset('files')}}/plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="{{asset('files')}}/plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="{{asset('files')}}/plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="{{asset('files')}}/plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
	<link href="{{asset('files')}}/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"> 
   
         
    <link href="{{asset('files')}}/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="{{asset('files')}}/plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="{{asset('files')}}/plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="{{asset('files')}}/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="{{asset('files')}}/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('files')}}/plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">            

	<!-- Specific CSS -->
	    
     
    <!-- Theme CSS -->
    <link href="{{asset('files')}}/css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="{{asset('files')}}/css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="{{asset('files')}}/css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
        	<link href="{{asset('files')}}/css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

	  
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
    <!-- Custom CSS -->
    <link href="{{asset('files')}}/custom/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="{{asset('files')}}/js/modernizr.js"></script> 
    <script type="text/javascript" src="{{asset('files')}}/js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="{{asset('files')}}/js/mobile-detect-modernizr.js"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->
    
</head>    

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->

<!-- Header Ends --> 
<div class="content">
  <div class="container"> 
    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_content-section clearfix">
            <div class="vd_login-page">
              <div class="heading clearfix">
                <div class="logo">
                  <h2 class="mgbt-xs-5"><img src="{{asset('files')}}/img/logo.png" alt="logo"></h2>
                </div>
                <h4 class="text-center font-semibold vd_grey">LOGIN TO YOUR ACCOUNT</h4>
                @if(Session::has('error'))
                               
                        <div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> <a href="#" class="alert-link">{{ Session::get('error') }}</a>  
                    
                       
              </div>
               @endif

              <div class="panel widget">
                <div class="panel-body">
                  <div class="login-icon entypo-icon"> <i class="icon-key"></i> </div>
                  <form class="form-horizontal" id="login-form" method="POST" action="{{route('admin-auth')}}" role="form">
                    @csrf
                  <div class="form-group  mgbt-xs-20">
                      <div class="col-md-12">
                        <div class="label-wrapper sr-only">
                          <label class="control-label" for="email">Email</label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <input type="email" placeholder="Email" id="email" name="email" class="required" required>
                        </div>
                        <div class="label-wrapper">
                          <label class="control-label sr-only" for="password">Password</label>
                        </div>
                        <div class="vd_input-wrapper" id="password-input-wrapper" > <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="Password" id="password" name="password" class="required" required>
                        </div>
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-green vd_white width-100" type="submit" >Login</button>
                      </div>
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-xs-6 text-right">
                            <div class=""> <a href="pages-forget-password.html">Forget Password? </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Panel Widget -->
             
            <!-- vd_login-page --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->

<!-- Footer Start -->
  <footer class="footer-2"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright text-center">
                  	Copyright &copy;2014 Venmond Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->

</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="{{asset('files')}}/js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="{{asset('files')}}/js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="{{asset('files')}}/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="{{asset('files')}}/plugins/jquery-ui/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="{{asset('files')}}/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="{{asset('files')}}/js/caroufredsel.js"></script> 
<script type="text/javascript" src="{{asset('files')}}/js/plugins.js"></script>

<script type="text/javascript" src="{{asset('files')}}/plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="{{asset('files')}}/plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{asset('files')}}/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="{{asset('files')}}/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="{{asset('files')}}/plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="{{asset('files')}}/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="{{asset('files')}}/plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="{{asset('files')}}/plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="{{asset('files')}}/js/theme.js"></script>
<script type="text/javascript" src="{{asset('files')}}/custom/custom.js"></script>

</body>
</html>