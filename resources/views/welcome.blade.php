

<!doctype html>
<html lang="en" dir="ltr">
  
<!-- Mirrored from templates.iqonic.design/hope-ui/html/dist/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Sep 2021 19:45:11 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Inventory(Pos)</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/hope-ui/html/dist/assets/images/favicon.ico" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{asset('backend/assets/css/libs.min.css')}}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{asset('backend/assets/css/hope-ui0ff5.css?v=1.0.2')}}">  </head>
  <body class=" dark ">
      <div id="app">
    <!-- loader Start 
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
   loader END -->
    
    <aside class="sidebar sidebar-default navs-rounded-all" id="navbarid" style="display: none;" 
              v-show="$route.path === '/' || $route.path === '/register'  || $route.path === '/forgate' ? false : true ">
         
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="collapse navbar-collapse" id="sidebar">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu">
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Home</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        
                        <router-link class="nav-link active" aria-current="page" to="home">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#horizontal-menu" role="button" aria-expanded="false" aria-controls="horizontal-menu">
                            <i class="icon">
                                
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path>
                                    <path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path>
                                    <path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Employee</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="horizontal-menu" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <router-link  class="nav-link " to="/store-employee">
                                  <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                  <i class="sidenav-mini-icon"> H </i>
                                  <span class="item-name">Add Employee </span>
                                </router-link >
                                
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link " to="/employee">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> D </i>
                                    <span class="item-name">All Employee</span>
                                </router-link>
                            </li>
                            
                           
                        </ul>
                    </li>





                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#supplier-menu" role="button" aria-expanded="false" aria-controls="horizontal-menu">
                            <i class="icon">
                                
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path>
                                    <path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path>
                                    <path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Suppliers</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="supplier-menu" data-bs-parent="#supplier">
                            <li class="nav-item">
                                <router-link class="nav-link " to="/store-supplier">
                                  <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                  <i class="sidenav-mini-icon"> H </i>
                                  <span class="item-name"> Add Suppliers </span>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link " to="supplier">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> D </i>
                                    <span class="item-name">All Suppliers</span>
                                </router-link>
                            </li>
                            
                           
                        </ul>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#Category-menu" role="button" aria-expanded="false" aria-controls="horizontal-menu">
                          <i class="icon">
                              
                              <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path>
                                  <path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path>
                                  <path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path>
                                  <path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path>
                              </svg>
                          </i>
                          <span class="item-name">Category</span>
                          <i class="right-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                          </i>
                      </a>
                      <ul class="sub-nav collapse" id="Category-menu" data-bs-parent="#Category">
                          <li class="nav-item">
                              <router-link class="nav-link " to="/store-category">
                                <i class="icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                          <g>
                                          <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                          </g>
                                      </svg>
                                  </i>
                                <i class="sidenav-mini-icon"> H </i>
                                <span class="item-name"> Add Category </span>
                              </router-link>
                          </li>
                          <li class="nav-item">
                              <router-link class="nav-link " to="category">
                                  <i class="icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                          <g>
                                          <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                          </g>
                                      </svg>
                                  </i>
                                  <i class="sidenav-mini-icon"> D </i>
                                  <span class="item-name">All Category</span>
                              </router-link>
                          </li>
                          
                         
                      </ul>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#product-menu" role="button" aria-expanded="false" aria-controls="horizontal-menu">
                        <i class="icon">
                            
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path>
                                <path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path>
                                <path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Product</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="product-menu" data-bs-parent="#product">
                        <li class="nav-item">
                            <router-link class="nav-link " to="/store-product">
                              <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                              <i class="sidenav-mini-icon"> H </i>
                              <span class="item-name"> Add Product </span>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link " to="product">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> D </i>
                                <span class="item-name">All Product</span>
                            </router-link>
                        </li>
                        
                       
                    </ul>
                </li>












                     
                    
                    
                    











                    
                </ul>
                <!-- Sidebar Menu End -->        </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside> 
       <main class="main-content">
      <div class="position-relative" id="layoutSidenav_nav" style="display: none;" v-show="$route.path === '/' || $route.path === '/register' || $route.path === '/forgate' ? false : true ">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
          <div class="container-fluid navbar-inner">
            <a href="index-2.html" class="navbar-brand">
                <!--Logo start-->
                <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                    <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                    <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                    <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                </svg>
                <!--logo End-->        <h4 class="logo-title">Hope UI</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>
            <div class="input-group search-input">
              <span class="input-group-text" id="search-input">
                <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
              <input type="search" class="form-control" placeholder="Search...">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="navbar-toggler-bar bar1 mt-2"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto  navbar-list mb-2 mb-lg-0">
                 <li class="nav-item dropdown">
                    <a href="#" class="search-toggle nav-link" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('backend/assets/images/Flag/flag001.png ') }}" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                    <span class="bg-primary"></span>
                    </a>
                    <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="dropdownMenuButton2">
                        <div class="card shadow-none m-0 border-0">
                            <div class=" p-0 ">
                                <ul class="list-group list-group-flush p-0">
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{asset('backend/assets/images/Flag/flag-03.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Spanish</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{asset('backend/assets/images/Flag/flag-04.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Italian</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{asset('backend/assets/images/Flag/flag-02.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>French</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{asset('backend/assets/images/Flag/flag-05.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>German</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{asset('backend/assets/images/Flag/flag-06.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Japanese</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#"  class="nav-link" id="notification-drop" data-bs-toggle="dropdown" >
                      <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z" fill="currentColor"></path>
                        <path opacity="0.4" d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z" fill="currentColor"></path>
                      </svg>
                      <span class="bg-danger dots"></span>
                  </a>
                  <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="notification-drop">
                      <div class="card shadow-none m-0">
                        <div class="card-header d-flex justify-content-between bg-primary py-3">
                            <div class="header-title">
                              <h5 class="mb-0 text-white">All Notifications</h5>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('backend/assets/images/shapes/01.png') }}" alt="">
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">Emma Watson Bni</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">95 MB</p>
                                        <small class="float-end font-size-12">Just Now</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('backend/assets/images/shapes/02.png') }}" alt="">
                                  </div>
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">New customer is join</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Cyst Bni</p>
                                        <small class="float-end font-size-12">5 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('backend/assets/images/shapes/03.png') }} " alt="">
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">Two customer is left</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Cyst Bni</p>
                                        <small class="float-end font-size-12">2 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('backend/assets/images/shapes/04.png ')}} " alt="">
                                  <div class="w-100 ms-3">
                                    <h6 class="mb-0 ">New Mail from Fenny</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Cyst Bni</p>
                                        <small class="float-end font-size-12">3 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.4" d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z" fill="currentColor"></path>
                      <path d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z" fill="currentColor"></path>
                    </svg>
                    <span class="bg-primary count-mail"></span>
                  </a>
                  <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="mail-drop">
                      <div class="card shadow-none m-0">
                        <div class="card-header d-flex justify-content-between bg-primary py-3">
                            <div class="header-title">
                              <h5 class="mb-0 text-white">All Message</h5>
                            </div>
                        </div>
                        <div class="card-body p-0 ">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex  align-items-center">
                                  <div class="">
                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('backend/assets/images/shapes/01.png') }}" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Bni Emma Watson</h6>
                                    <small class="float-start font-size-12">13 Jun</small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('backend/assets/images/shapes/02.png') }}" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                    <small class="float-start font-size-12">20 Apr</small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('backend/assets/images/shapes/03.png') }}" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Why do we use it?</h6>
                                    <small class="float-start font-size-12">30 Jun</small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('backend/assets/images/shapes/04.png') }}" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Variations Passages</h6>
                                    <small class="float-start font-size-12">12 Sep</small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('backend/assets/images/shapes/05.png') }}" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                    <small class="float-start font-size-12">5 Dec</small>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('backend/assets/images/avatars/01.png')}}" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                    <div class="caption ms-3 d-none d-md-block ">
                        <h6 class="mb-0 caption-title">Austin Robertson</h6>
                        <p class="mb-0 caption-sub-title">Marketing Administrator</p>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="app/user-profile.html">Profile</a></li>
                    <li><a class="dropdown-item" href="app/user-privacy-setting.html">Privacy Setting</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li> <router-link class="dropdown-item" to="/logout">Logout</router-link></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>          <!-- Nav Header Component Start -->
                    <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
      </br></br></br></br></br></br>
        <router-view></router-view>
      </div>
    
      <!-- Footer Section Start -->
      <footer class="footer" id="footers" style="display: none;" v-show="$route.path === '/' || $route.path === '/register' || $route.path === '/forgate' ? false : true ">
          <div class="footer-body">
              <ul class="left-panel list-inline mb-0 p-0">
                  <li class="list-inline-item"><a href="extra/privacy-policy.html">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="extra/terms-of-service.html">Terms of Use</a></li>
              </ul>
              <div class="right-panel">
                 <!-- ©<script>document.write(new Date().getFullYear())</script> Hope UI, Made with -->
                 © 2021 Hope UI, Made with
                  <span class="text-gray">
                      
                  </span> by <a href="">Dipak Debnath</a>.
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->    </main>

    
    <!-- Wrapper End-->
    <!-- offcanvas start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title" id="offcanvasExampleLabel">Settings</h3>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body data-scrollbar">
        <div class="row">
          <div class="col-lg-12">
             <h5 class="mb-3">Scheme</h5>
            <div class="d-grid gap-x-3 grid-cols-3 mb-4">
              <div class="btn-border" data-setting="color-mode" data-name="color" data-value="auto">
                  <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
                  </svg>
                <span class="ms-2 "> Auto </span>
              </div>
               <div class="btn-border" data-setting="color-mode" data-name="color" data-value="dark">
                 <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor" d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
                  </svg>
                <span class="ms-2 "> Dark  </span>
              </div>
               <div class="btn-border active" data-setting="color-mode" data-name="color" data-value="light">
                  <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
                </svg>
                <span class="ms-2 "> Light</span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mb-3 mt-4">Scheme Direction</h5>
            <div class="d-grid gap-x-3 grid-cols-2 mb-4">
              <div class="text-center">
                <img src="{{asset('backend/assets/images/settings/dark/01.png')}}" alt="ltr" class="mode dark-img img-fluid btn-border p-0 flex-column active" data-setting="dir-mode" data-name="dir" data-value="ltr">
                <img src="{{asset('backend/assets/images/settings/light/01.png ')}}" alt="ltr" class="mode light-img img-fluid btn-border p-0 flex-column active" data-setting="dir-mode" data-name="dir" data-value="ltr">
                <span class=" mt-2"> LTR </span>
              </div>
               <div class="text-center">
                 <img src="{{asset('backend/assets/images/settings/dark/02.png ')}}" alt="" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="dir-mode" data-name="dir" data-value="rtl">
                  <img src="{{asset('backend/assets/images/settings/light/02.png ')}}" alt="" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="dir-mode" data-name="dir" data-value="rtl">
                  <span class="mt-2 "> RTL  </span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Color</h5>
            <div class="d-grid gap-x-3 grid-cols-2 mb-4">
              <div class="btn btn-border mb-4" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-dark">
                  <i class="text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> Dark </span>
              </div>
              <div class="btn btn-border mb-4" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-color">
                  <i class="text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> Color </span>
              </div>
              <div class="btn btn-border active" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-white">
                  <i class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="currentColor" stroke="black" stroke-width="3"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> White </span>
              </div>
              <div class="btn btn-border " data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-transparent">
                  <i class="text-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="#F5F6FA" stroke="black" stroke-width="3"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> Transparent </span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Types</h5>
            <div class="d-grid gap-x-3 grid-cols-3 mb-4">
              <div class="text-center">
                <img src="{{asset('backend/assets/images/settings/dark/03.png') }}" alt="mini" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-mini">
                <img src="{{asset('backend/assets/images/settings/light/03.png') }}" alt="mini" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-mini">
                <span class="mt-2">Mini</span>
              </div>
              <div class="text-center">
               <img src="{{asset('backend/assets/images/settings/dark/04.png') }}" alt="hover" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
               <img src="{{asset('backend/assets/images/settings/light/04.png') }}" alt="hover" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                <span class="mt-2">Hover</span>
              </div>
              <div class="text-center">
                 <img src="{{asset('backend/assets/images/settings/dark/05.png') }}" alt="boxed" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-boxed">
                 <img src="{{asset('backend/assets/images/settings/light/05.png') }}" alt="boxed" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-boxed">
                <span class="mt-2">Boxed</span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Active Style</h5>
            <div class="d-grid gap-x-3 grid-cols-2 mb-4">
              <div class="mb-4 text-center">
                <img src="{{asset('backend/assets/images/settings/dark/06.png') }}" alt="rounded-one-side" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded">
                <img src="{{asset('backend/assets/images/settings/light/06.png') }}" alt="rounded-one-side" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded">
                <span class="mt-2">Rounded One Side</span>
              </div>
              <div class="mb-4 text-center">
                <img src="{{asset('backend/assets/images/settings/dark/07.png') }}" alt="rounded-all" class="mode dark-img img-fluid btn-border p-0 flex-column active" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                <img src="{{asset('backend/assets/images/settings/light/07.png') }}" alt="rounded-all" class="mode light-img img-fluid btn-border p-0 flex-column active" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                <span class="mt-2">Rounded All</span>
              </div>
              <div class="mb-4 text-center">
                 <img src="{{asset('backend/assets/images/settings/dark/09.png') }}" alt="pill-one-side" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill">
                 <img src="{{asset('backend/assets/images/settings/light/09.png') }}" alt="pill-one-side" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill">
                <span class="mt-2">Pill One Side</span>
              </div>
              <div class="mb-4 text-center">
                 <img src="{{asset('backend/assets/images/settings/dark/08.png') }}" alt="pill-all" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill-all">
                 <img src="{{asset('backend/assets/images/settings/light/08.png') }}" alt="pill-all" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill-all">
                <span class="mt-2">Pill All</span>
              </div>
            </div>
            <hr class="hr-horizontal">
             <h5 class="mt-4 mb-3">Navbar Style</h5>
            <div class="d-grid gap-x-3 grid-cols-2">
              <div class="mb-4 text-center">
                <img src="{{asset('backend/assets/images/settings/dark/10.png') }}" alt="image" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                <img src="{{asset('backend/assets/images/settings/light/10.png') }}" alt="image" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                <span class="mt-2">Glass</span>
              </div>
              <div class="mb-4 text-center">
                 <img src="{{asset('backend/assets/images/settings/dark/11.png') }}" alt="color" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                 <img src="{{asset('backend/assets/images/settings/light/11.png') }}" alt="color" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                <span class="mt-2">Color</span>
              </div>
              <div class="mb-4 text-center">
                 <img src="{{asset('backend/assets/images/settings/dark/12.png') }}" alt="sticky" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                 <img src="{{asset('backend/assets/images/settings/light/12.png') }}" alt="sticky" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                <span class="mt-2">Sticky</span>
              </div>
              <div class="mb-4 text-center">
                  <img src="{{asset('backend/assets/images/settings/dark/12.png') }}" alt="transparent" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                  <img src="{{asset('backend/assets/images/settings/light/12.png') }}" alt="transparent" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                <span class="mt-2">Transparent</span>
              </div>
              <div class="btn btn-border active col-span-full" data-setting="navbar" data-name="navbar-default" data-value="default">
                  <i class="text-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="#F5F6FA" stroke="black" stroke-width="3"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> Default </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  

    <script src="{{asset('js/app.js')}}"></script>

    <script type="text/javascript">
            
            let token =localStorage.getItem('token');
            if (token) {
                $("#navbarid").css("display");
                $("#layoutSidenav_nav").css("display");
                $("#footers").css("display");
                

                

            }

        </script>
        
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('backend/assets/js/libs.min.js')}}"></script>
    
    <!-- widgetchart JavaScript -->
    <script src="{{asset('backend/assets/js/charts/widgetcharts.js')}}"></script>
    
    <!-- mapchart JavaScript -->
    <script src="{{asset('backend/assets/js/charts/vectore-chart.js')}}"></script>
    <script src="{{asset('backend/assets/js/charts/dashboard.js')}}"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="{{asset('backend/assets/js/fslightbox.js')}}"></script>
    
    <!-- settings JavaScript -->
    <script src="{{asset('backend/assets/js/setting.js')}}"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{asset('backend/assets/js/form-wizard.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
  </body>

<!-- Mirrored from templates.iqonic.design/hope-ui/html/dist/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Sep 2021 19:45:11 GMT -->
</html>