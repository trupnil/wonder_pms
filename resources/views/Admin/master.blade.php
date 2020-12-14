<!DOCTYPE html>

      <html>
        <head>
            <meta charset="utf-8" />
            <title>Wonder Property Management System</title>
            <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
            <meta name="description" content="Data Tables - Responsive Admin HTML Template">
            <meta name="author" content="Venmond">
            <!-- Set the viewport width to device width for mobile -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
           @include('Admin.common.link')
         </head>
         <body id="tables" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="tables "  data-smooth-scrolling="1">
                  <div class="vd_body">
                  @include('Admin.common.header')
                  <div class="content">
                  <div class="container">
                  @include('Admin.common.menu') 
                  @yield('main-section')
                  </div>
                  </div>
                  @include('Admin.common.footer')
              </div>
            <a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
            @include('Admin.common.script')
         </body>
      </html>
       