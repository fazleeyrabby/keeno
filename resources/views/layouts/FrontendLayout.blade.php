<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title')</title>
      <link rel="icon" href="{{ asset('/assets/admin/images/favicon.ico') }}" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('/assets/frontend_asset/css/bootstrap.min.css') }}">
      <link href="{{ asset('/assets/frontend_asset/css/font-awesome.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('/assets/frontend_asset/css/main.css') }}">
   </head>
   <body>
     @yield('content')
      <!-- Footer -->
      <footer class="page-footer font-small blue pt-4">
         <div class="container-fluid text-center text-md-left">
            <div class="row">
               <div class="col-md-4 mt-md-0 mt-3">
                  <img src="{{ asset('/assets/frontend_asset/images/logo.svg') }}" class="img-responsive" height="" width="100px" style="margin-left: 20px;">
                  <hr class="fooetr-hr" />
                  <p>1717 Harrison St, San Francisco,<br>CA 94, USA</p>
               </div>
               <div class="col-md-2 ">
                  <h5 class="text-uppercase">MAIN MENU</h5>
                  <ul class="list-unstyled">
                     <li>
                        <a href="#!">Home</a>
                     </li>
                     <li>
                        <a href="#!">About</a>
                     </li>
                     <li>
                        <a href="#!">Shop</a>
                     </li>
                     <li>
                        <a href="#!">Help</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-2">
                  <h5 class="text-uppercase">COMPANY</h5>
                  <ul class="list-unstyled">
                     <li>
                        <a href="#">The Comany</a>
                     </li>
                     <li>
                        <a href="#">Careers</a>
                     </li>
                     <li>
                        <a href="#">Press</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-2">
                  <h5 class="text-uppercase">Discover</h5>
                  <ul class="list-unstyled">
                     <li>
                        <a href="#">The Team</a>
                     </li>
                     <li>
                        <a href="#">Our History</a>
                     </li>
                     <li>
                        <a href="#">Brand Motto</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-2">
                  <h5 class="text-uppercase">FIND US ON</h5>
                  <ul class="list-unstyled">
                  <li>
                     <a href="#">Facebook</a>
                  </li>
                  <li>
                     <a href="#">Twitter</a>
                  </li>
                  <li>
                     <a href="#">Instagram</a>
                  </li>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer -->
      <hr class="hr2" />
      <div class="col-md-12">
         ©keenn.app
      </div>
      <!-- script -->
      <script src="{{ asset('/assets/frontend_asset/js/jquery-3.5.1.slim.min.js') }}"></script>
      <script src="{{ asset('/assets/frontend_asset/js/popper.min.js') }}" ></script>
      <script src="{{ asset('/assets/frontend_asset/js/bootstrap.min.js') }}" ></script>
  </body>
   </body>
</html>