<nav class="navbar has-shadow o-navbar--dark manager-header" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="{{@asset('images/logo.png')}}">
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
               data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasic" class="navbar-menu">
            <div class="navbar-start">
{{--                <a class="navbar-item">--}}
{{--                    Home--}}
{{--                </a>--}}
            </div>

            <div class="navbar-end">
                @if(Auth::user())
                    <div class="navbar-item">
                        <div class="avatar">
                            <img src="{{@asset('images/avatar.jpg')}}" alt="">
                        </div>
                        <div class="dropdown is-active buttons m-l-15">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                    <span>{{Auth::user()->name}}</span>
                                    <span class="icon is-small">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        <span class="icon is-small">
                                            <i class="m-r-10 fa fa-user" aria-hidden="true"></i>
                                        </span>
                                        Profile
                                    </a>
                                    <a class="dropdown-item">
                                        <span class="icon is-small">
                                            <i class="m-r-10 fa fa-bell" aria-hidden="true"></i>
                                        </span>
                                        Notifications
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span class="icon is-small">
                                            <i class="m-r-10 fa fa-cog" aria-hidden="true"></i>
                                        </span>
                                        Settings
                                    </a>
                                    <hr class="dropdown-divider">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit()" class="dropdown-item">
                                        <span class="icon is-small">
                                            <i class="m-r-10 fa fa-sign-out" aria-hidden="true"></i>
                                        </span>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

</nav>