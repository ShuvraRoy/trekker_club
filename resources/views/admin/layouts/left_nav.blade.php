<div class="sidebar-menu">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="{{url('/admin')}}">
                    {{-- <img src="{{ asset('assets/images/tr_logo.png') }}" width="100"  alt="" /> --}}
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>


            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>


        <ul id="main-menu" class="main-menu">
        
            <li class="{{ 'home' == request()->path() ? 'active' : ''}}">
                <a href="{{url('/admin')}}">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                </a>
            <li class="{{ last(explode('/', request()->path())) == 'users' ? 'active' : '' }}">
                <a href="{{url('/admin/users')}}">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                </a>

            </li>
            <li class="{{ last(explode('/', request()->path())) == 'activities' ? 'active' : ''}}">
                <a href="{{url('/admin/activities')}}">
                    <i class="fa fa-list"></i>
                    <span class="title">Activities</span>
                </a>
            </li> 

            <li class="{{ last(explode('/', request()->path())) == 'sessions' ? 'active' : '' }}">
                <a href="{{url('/admin/sessions')}}">
                    <i class="fa fa-list"></i>
                    <span class="title">Sessions</span>
                </a>
            </li> 

            <li class="{{ last(explode('/', request()->path())) == 'participants' ? 'active' : '' }}">
                <a href="{{url('/admin/participants')}}">
                    <i class="fa fa-users"></i>
                    <span class="title">Participants</span>
                </a>

            </li>
            

    

        </ul>

    </div>

</div>
