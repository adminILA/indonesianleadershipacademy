<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">ILA</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">ILA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs">Super Admin</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li>
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </li>
            </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i> Settings</a>
            </li>
        </ul>
        </div>
    </nav>
</header>