<div class="row">

    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">

        <ul class="user-info pull-left pull-none-xsm">

            <!-- Profile Info -->
            <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('/admin_asset/images/profile_clip_art.jpg ')}}" alt="" class="img-circle" width="44" />
                    {{-- {{Auth::user()->name}} --}}
                   <span style="font-size:20px; color:#203764; font-weight: bold;"> Admin</span>
                </a>

                <ul class="dropdown-menu">

                    <!-- Reverse Caret -->
                    <li class="caret"></li>

                    <!-- Profile sub-links -->
                    <li>
                        <a href="{{url('user/change_password')}}">
                            <i class="fa fa-phone"></i>
                            Contact Information
                        </a>
                    </li>
                    <li>
                        <a href="{{url('user/change_password')}}">
                            <i class="fa fa-paypal"></i>
                          Payment Gateway
                        </a>
                    </li>
                    <li>
                        <a href="{{url('user/change_password')}}">
                            <i class="fa fa-history"></i>
                            History
                        </a>
                    </li>
                    <li>
                        <a href="{{url('user/change_password')}}">
                            <i class="fa fa-users"></i>
                            Guest Information
                        </a>
                    </li>
                    <li>
                        <a href="{{url('user/change_password')}}">
                            <i class="fa fa-pie-chart"></i>
                            Commission Rate 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}">
                            <i class="entypo-logout"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>


    <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">

        <ul class="list-inline links-list pull-right">

            <!-- Language Selector -->
            <li class="dropdown language-selector">


            </li>

            <li>
                <a href="{{ url('/logout') }}">
                    Log Out <i class="entypo-logout right"></i>
                </a>
            </li>
        </ul>

    </div>

</div>
