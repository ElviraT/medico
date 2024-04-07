 <div class="header header-one">
     <a href="#"
         class="d-inline-flex d-sm-inline-flex align-items-center d-md-inline-flex d-lg-none align-items-center device-logo">
         <img src="assets/img/logo.png" class="img-fluid logo2" alt="Logo">
     </a>
     <div class="main-logo d-inline float-start d-lg-flex align-items-center d-none d-sm-none d-md-none">
         <div class="logo-white">
             <a href="#">
                 <img src="assets/img/logo-full-white.png" class="img-fluid logo-blue" alt="Logo">
             </a>
             <a href="#">
                 <img src="assets/img/logo-small-white.png" class="img-fluid logo-small" alt="Logo">
             </a>
         </div>
         <div class="logo-color">
             <a href="#">
                 <img src="assets/img/logo.png" class="img-fluid logo-blue" alt="Logo">
             </a>
             <a href="#">
                 <img src="assets/img/logo-small.png" class="img-fluid logo-small" alt="Logo">
             </a>
         </div>
     </div>

     <a href="javascript:void(0);" id="toggle_btn">
         <span class="toggle-bars">
             <span class="bar-icons"></span>
             <span class="bar-icons"></span>
             <span class="bar-icons"></span>
             <span class="bar-icons"></span>
         </span>
     </a>

     <a class="mobile_btn" id="mobile_btn">
         <i class="fas fa-bars"></i>
     </a>

     <ul class="nav nav-tabs user-menu">
         <li class="nav-item dropdown has-arrow flag-nav">
             <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                 <img src="assets/img/flags/{{ Session::get('language') == 'es' ? 'es.png' : 'us.png' }}" width='20%'
                     alt="flag">
                 <span>
                     {{ Session::get('language') == 'es' ? 'Español' : 'English' }}
                 </span>
             </a>
             <div class="dropdown-menu dropdown-menu-end">
                 <a href="{{ route('language', 'en') }}" class="dropdown-item">
                     <img src="{{ asset('assets/img/flags/us.png') }}" width='20%'
                         alt="flag"><span>English</span>
                 </a>
                 <a href="{{ route('language', 'es') }}" class="dropdown-item">
                     <img src="{{ asset('assets/img/flags/es.png') }}" width='20%'
                         alt="flag"><span>Spanish</span>
                 </a>
             </div>
         </li>
         <li class="nav-item  has-arrow dropdown-heads ">
             <a href="javascript:void(0);" class="win-maximize">
                 <i class="fe fe-maximize"></i>
             </a>
         </li>
         <li class="nav-item dropdown">
             <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
                 <span class="user-img">
                     <img src="assets/img/avatar.png" alt="img" class="profilesidebar">
                     <span class="animate-circle"></span>
                 </span>
                 <span class="user-content">
                     <span class="user-details">{{ Auth::user()->name }}</span>
                     <span class="user-name">{{ auth()->user()->rol->role->name }}</span>
                 </span>
             </a>
             <div class="dropdown-menu menu-drop-user">
                 <div class="profilemenu">
                     <div class="subscription-menu">
                         <ul>
                             <li>
                                 <a class="dropdown-item" href="profile.html">@lang('Profile')</a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="settings.html">Settings</a>
                             </li>
                         </ul>
                     </div>
                     <div class="subscription-logout">
                         <ul>
                             <li class="pb-0">
                                 <a class="dropdown-item" href="login.html">Log Out</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </li>

     </ul>

 </div>
