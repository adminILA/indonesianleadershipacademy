<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li @if(Route::currentRouteName() == 'dashboard') class="active" @else class="" @endif>
                <a href="{{route('dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li @if(Route::currentRouteName() == 'blog-list') class="active" @else class="" @endif>
                <a href="{{route('blog-list')}}">
                <i class="fa fa-files-o"></i>
                    <span>Blog</span>
                </a>
            </li>
            <li @if(Route::currentRouteName() == 'gallery-list') class="active" @else class="" @endif>
                <a href="{{route('gallery-list')}}">
                    <i class="fa fa-th"></i> <span>Gallery</span>
                </a>
            </li>
            <!-- <li class="">
                <a href="{{route('quote-list')}}">
                    <i class="fa fa-quote-right"></i>
                    <span>Quotes</span>
                </a>
            </li> -->
            <!-- <li class="">
                <a href="{{route('web-info')}}">
                    <i class="fa fa-laptop"></i>
                    <span>Website Info</span>
                </a>
            </li> -->
        </ul>
    </section>
<!-- /.sidebar -->
</aside>