<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ asset('index.html') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/uitmlogo-sm.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/uitmlogo.png') }}" alt="" height="50">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ asset('index.html') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/uitmlogo-sm.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/uitmlogo.png') }}" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarHome" >
                        <i class="ri-home-2-line"></i> <span data-key="t-home">Home</span>
                    </a>
                </li>

                
                <li class="menu-title"><i class="ri-more-fill"></i><span data-key="t-search">Search</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('students.job-list') }}" >
                        <i class="ri-briefcase-2-line"></i> <span data-key="t-jobs">Jobs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCompanies" >
                        <i class="ri-building-2-line"></i> <span data-key="t-companies">Companies</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>