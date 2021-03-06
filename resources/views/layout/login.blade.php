



<!doctype html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Datum | Login </title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/datum/html/assets/images/favicon.ico" />
      
      <link rel="stylesheet" href="assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="assets/css/backende209.css?v=1.0.0">  
</head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-md-5">
                  <div class="card">
                     <div class="card-body">

                        @if (session('status'))
                            
                        <button class="btn btn-warning" style="margin-left: 120px;">{{ session('status') }}</button>

                        @endif
                        <div class="auth-logo">
                           <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid rounded-normal" alt="logo">
                        </div>
                            
                        <h2 class="mb-2 text-center">Sign In</h2>
                        <p class="text-center">To Keep connected with us please login with your personal info.</p>
                        <form method="post" action="{{ Route('login') }}">
                            @csrf
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="uname" type="uname" placeholder="Enter Username">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" name='password' type="password"type="password" placeholder="********">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a>
                              </div>
                           </div>
                           <div class="d-flex justify-content-between align-items-center">
                              <span>Create an Account <a href="auth-sign-up.html" class="text-primary">Sign Up</a></span>
                              <button type="submit" class="btn btn-primary">Sign In</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/backend-bundle.min.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/customizer.js') }}"></script>
    
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    
    <!-- Flextree Javascript-->
    <script src="{{ asset('assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('assets/js/tree.js') }}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('assets/js/table-treeview.js') }}"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="{{ asset('assets/js/vector-map-custom.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/chart-custom.js') }}"></script>
    <script src="{{ asset('assets/js/charts/01.js') }}"></script>
    <script src="{{ asset('assets/js/charts/02.js') }}"></script>
    
    <!-- slider JavaScript -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    
    <!-- Emoji picker -->
    <script src="{{ asset('assets/vendor/emoji-picker-element/index.js') }}" type="module"></script>
    
    
    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/app.js') }}"></script>  
</body>


</html>