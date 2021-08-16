@include('layout.head');

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <div class="iq-sidebar  sidebar-default  ">
          <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
               <a href="{{ Route('dashboard') }}" class="header-logo">
                  <img src="assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                  <img src="assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
                  <span>Datum</span>            
              </a>
              <div class="side-menu-bt-sidebar-1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                  </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="side-menu">
                      <li class="active sidebar-layout">
                          <a href="{{ Route('dashboard') }}" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                  </svg>
                              </i>
                              <span class="ml-2">Dashboard</span>
                              <p class="mb-0 w-10 badge badge-pill badge-primary"></p>
                          </a>
                      </li>
                      <li class="px-3 pt-3 pb-2 ">
                          <span class="text-uppercase small font-weight-bold">My Account</span>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="{{ route('profile') }}" class="svg-icon ">
                              <i class="">
                                <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                  {{-- <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                  </svg> --}}
                              </i>
                              <span class="ml-2">Edit Profile</span>
                          </a>
                      </li>
                      <li class="px-3 pt-3 pb-2 ">
                        <span class="text-uppercase small font-weight-bold">My Investment</span>
                    </li>   
                      <li class="sidebar-layout">
                          <a href="#app1" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                  </svg>
                              </i>
                              <span class="ml-2">Funding</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="{{ route('deposit') }}" class="svg-icon">
                                      <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                      </svg>
                                      </i><span class="">Deposit</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="{{ Route('deposithistory') }}" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                          </svg>
                                      </i><span class="">Deposit History</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="sidebar-layout">
                          <a href="#app6" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                  </svg>
                              </i>
                              <span class="ml-2">Withdrawal</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                          </a>
                          <ul id="app6" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class=" sidebar-layout">
                                  <a href="#" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Withdraw</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="#" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Withdrawal History</span>
                                  </a>
                              </li>
                              
                          </ul>
                      </li>
                      <li class=" sidebar-layout">
                        <a href="#" class="svg-icon ">
                            <i class="">
                              
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </i>
                            <span class="ml-2">Referral</span>
                        </a>
                    </li>
                      <li class="px-3 pt-3 pb-2 ">
                        <span class="text-uppercase small font-weight-bold">Communication</span>
                    </li>
                    <li class=" sidebar-layout">
                        <a href="#" class="svg-icon ">
                            <i class="">
                              <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg"
                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg> --}}
                            </i>
                            <span class="ml-2">Support</span>
                        </a>
                    </li>
                    <li class=" sidebar-layout">
                        <a href="#" class="svg-icon ">
                            <i class="">
                              
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </i>
                            <span class="ml-2">Logout</span>
                        </a>
                    </li>
                  </ul>
                  
              </nav>
              <div class="pt-5 pb-5"></div>
          </div>
      </div>
       <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="side-menu-bt-sidebar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                  </div>
                  <div class="d-flex align-items-center">
                      <div class="change-mode">
                          <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                              <div class="custom-switch-inner">
                                  <p class="mb-0"> </p>
                                  <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                  <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                      <span class="switch-icon-right">
                                          <svg xmlns="http://www.w3.org/2000/svg" id="h-moon" height="20" width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                          </svg>
                                      </span>
                                      <span class="switch-icon-left">
                                          <svg xmlns="http://www.w3.org/2000/svg" id="h-sun" height="20" width="20"  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                          </svg>
                                      </span>
                                  </label>
                              </div>
                          </div>
                      </div>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                          <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                          </svg>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                                  
                              <li class="nav-item nav-icon search-content">
                                  <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <svg class="svg-icon text-secondary" id="h-suns" height="25" width="25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                      </svg>
                                  </a>
                                  <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                      <form action="#" class="searchbox p-2">
                                          <div class="form-group mb-0 position-relative">
                                          <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                          <a href="#" class="search-link">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                              </svg>
                                          </a> 
                                          </div>
                                      </form>
                                  </div>
                              </li>
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                      <img src="{{ auth()->user()->photo }}" class="img-fluid avatar-rounded" alt="user">
                                      <span class="mb-0 ml-2 user-name">{{ auth()->user()->fname  }} {{ auth()->user()->lname  }}</span>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                          <a href="https://templates.iqonic.design/datum/html/app/user-profile.html">My Profile</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                          </svg>
                                          <a href="https://templates.iqonic.design/datum/html/app/user-profile-edit.html">Edit Profile</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-03-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                          </svg>
                                          <a href="https://templates.iqonic.design/datum/html/app/user-account-setting.html">Account Settings</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-04-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                          </svg>
                                          <a href="https://templates.iqonic.design/datum/html/app/user-privacy-setting.html">Privacy Settings</a>
                                      </li>
                                      <li class="dropdown-item  d-flex svg-icon border-top">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                          </svg>
                                          <a href="auth-sign-in.html">Logout</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>                     
                      </div> 
                  </div>
              </nav>
          </div>
      </div>
      
      <div class="content-page">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-md-12 mb-4 mt-1">
                        
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <h4 class="font-weight-bold">Investment</h4>
                            
                        </div>
                    </div>
                </div>
              
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                <div class="table-responsive pricing pt-2">
                                    <table id="my-table" class="table">
                                        <thead>
                                            <tr>
                                            
                                            <th class="text-center prc-wrap ">
                                                <div class="prc-box">
                                                    <div class="h4 pt-4">
                                                        <div>
                                                            <h6>Capital Range</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> $100 to $9, 900</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="h4 pt-2">
                                                        <div>
                                                            <h6>Monthly Interest</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> (7% Max)</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="h4">
                                                        <div>
                                                            <h6>Maximum Duration</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 30 Months</p>
                                                        </div>
                                                        
                                                    </div>
                                                    {{-- <div class="h4">
                                                        <div>
                                                            <h6>Interest Capping</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 160%</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="h4">
                                                        <div>
                                                            <h6>Principal Refund</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 40% </p>
                                                        </div>
                                                        
                                                    </div>                                                 --}}
                                                    <div class="h4">
                                                        <div>
                                                            <h6>Maximum Return</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 200%</p>
                                                        </div>
                                                    </div> <span class="type">Regular</span>
                                                </div>
                                            </th>
                                           
                                            
                                            </tr>
                                        </thead>
                                        
                                    </table>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                <div class="table-responsive pricing pt-2">
                                    <table id="my-table" class="table">
                                        <thead>
                                            <tr> 
                                            <th class="text-center prc-wrap">
                                                <div class="prc-box active">
                                                    <div class="h4 pt-4">
                                                        <div>
                                                            <h6>Capital Range</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> $10, 000 to $99, 900</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="h4 pt-2">
                                                        <div>
                                                            <h6>Monthly Interest</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> (8% Max)</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="h4">
                                                        <div>
                                                            <h6>Maximum Duration</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 30 Months</p>
                                                        </div>
                                                        
                                                    </div>
                                                    {{-- <div class="h4">
                                                        <div>
                                                            <h6>Interest Capping</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 160%</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="h4">
                                                        <div>
                                                            <h6>Principal Refund</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 40% </p>
                                                        </div>
                                                        
                                                    </div>                                                 --}}
                                                    <div class="h4">
                                                        <div>
                                                            <h6>Maximum Return</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 250%</p>
                                                        </div>
                                                    </div> <span class="type">Classic</span>
                                                </div>
                                            </th>
                                           
                                            
                                            </tr>
                                        </thead>
                                        
                                    </table>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                <div class="table-responsive pricing pt-2">
                                    <table id="my-table" class="table">
                                        <thead>
                                            <th class="text-center prc-wrap">
                                                <div class="prc-box">
                                                    <div class="h4 pt-4">
                                                        <div>
                                                            <h6>Capital Range</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> $100, 000 to $1, 999, 900</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="h4 pt-2">
                                                        <div>
                                                            <h6>Monthly Interest</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> (9% Max)</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="h4">
                                                        <div>
                                                            <h6>Maximum Duration</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 30 Months</p>
                                                        </div>
                                                        
                                                    </div>
                                                    {{-- <div class="h4">
                                                        <div>
                                                            <h6>Interest Capping</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 160%</p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="h4">
                                                        <div>
                                                            <h6>Principal Refund</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 40% </p>
                                                        </div>
                                                        
                                                    </div>                                                 --}}
                                                    <div class="h4">
                                                        <div>
                                                            <h6>Maximum Return</h6>
                                                        </div>
                                                        <div>
                                                            <p style="font-size: 12px;"> 300%</p>
                                                        </div>
                                                    </div> <span class="type">Premium</span>
                                                </div>
                                                
                                            </th>
                                        </thead>
                                        
                                    </table>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
             
                
                    <div class="col-md-6 mb-4 mt-1">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{ route('deposit') }}">
                                    @csrf
                                    <div class="d-flex flex-wrap mt-4 mb-4 justify-content-between align-items-center">
                                        <h5 class="font-weight-bold">Invest Here</h5>
                                    </div>
                                    <div class="form-group">
                                        <label>Package</label>
                                        <select class="form-control mb-3" name="package" id="package">

                                           <option selected="">Select Investment Package</option>
                                           @foreach ($data as $dat)
                                            <option value="{{ $dat['package_name'] }}">{{ $dat['package_name'] }}</option>
                                           @endforeach
                                        </select>
                                     </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword4">Amount ($)</label>
                                    <input type="text" name="amount" class="form-control" id="amount" value=""
                                        placeholder="Enter Amount">
                                    </div>
                                    <button type="submit" class="btn mb-4 btn-success w-100">Invest</button>
                                </form>
                            </div>
                        </div>
                      
                    </div>
                </div>
                
             
                
                <!-- Page end  -->
            </div>
      </div>
    </div>
    <!-- Wrapper End-->
    

@include('layout.footer');

