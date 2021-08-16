


<!doctype html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Datum | Register </title>
      
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
                  <div class="card p-3">
                     <div class="card-body">
                        <div class="auth-logo">
                           <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
                           <img src="{{ asset('assets/images/logo-dark.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">
                        </div>
                        <h3 class="mb-3 font-weight-bold text-center">Getting Started</h3>
                        
                        <form action="{{ Route('register') }}" method="POST">
                            @csrf
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label class="text-secondary">First Name</label>
                                    <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter First Name">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                   <label class="text-secondary">Last Name</label>
                                   <input class="form-control" type="text" name="lname" id="lname" placeholder="Enter Last Name">
                                </div>
                             </div>
                             <div class="col-lg-12">
                                <div class="form-group">
                                   <label class="text-secondary">Username</label>
                                   <input class="form-control" type="text" id="uname"  name="uname" placeholder="Enter Username">
                                </div>
                             </div>
                             <div class="col-lg-12">
                                <div class="form-group">
                                   <label class="text-secondary">Email</label>
                                   <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email">
                                </div>
                             </div>
                             <div class="col-lg-12">
                                <div class="form-group">
                                   <label class="text-secondary">Referral</label>
                                   <input class="form-control" type="text" name="referral" id="referral" value="{{ $referral }}" placeholder="Enter Referral (Optional)">
                                </div>
                             </div>
                              <div class="col-lg-12 mt-2">
                                 <div class="form-group">
                                    <label class="text-secondary">Phone Number</label>
                                    <input class="form-control" type="text" id="phone" name="phone" placeholder="Enter Password">
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-2">
                                <div class="form-group">
                                   <label class="text-secondary">Password</label>
                                   <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password">
                                </div>
                             </div>
                             <div class="col-lg-12 mt-2">
                                <div class="form-group">
                                   <label class="text-secondary">Confirm Password</label>
                                   <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter Password">
                                </div>
                             </div>
                              <div class="col-lg-12 mt-2">
                                    <div class="form-check form-check-inline">
                                       <div class="custom-control custom-checkbox custom-control-inline mb-3">
                                          <input type="checkbox" name="inlineCheckbox1" class="custom-control-input m-0" id="inlineCheckbox1">
                                          <label class="custom-control-label pl-2" for="inlineCheckbox1">I agree to the <a href="terms-of-service.html">Terms of Service </a> and <a href="privacy-policy.html">Privacy Policy</a></label>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary btn-block mt-2">Create Account</button>
                           <div class="col-lg-12 mt-3">
                                <p class="mb-0 text-center">Do you have an account? <a href="auth-login.html">Sign In</a></p>
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