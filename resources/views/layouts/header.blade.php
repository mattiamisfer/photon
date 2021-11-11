<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="top-menu-left d-none d-lg-block">
                {{-- <ul class="nav">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('app-emailbox') }}"><i class='bx bx-envelope'></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('app-chat-box')}}"><i class='bx bx-message'></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('app-fullcalender')}}"><i class='bx bx-calendar'></i></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url('app-to-do')}}"><i class='bx bx-check-square'></i></a>
                      </li>
                  </ul> --}}
             </div>
            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                    <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                    <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                </div>
            </div>
            <div class="top-menu ms-auto">

            </div>
            <div class="user-box dropdown border-light-2">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- <img src="{{ asset('assets/images/logo-icon.png') }}" class="user-img" alt="user avatar"> --}}
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">Admin</p>
                        {{-- <p class="designattion mb-0">Web Designer</p> --}}
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    {{-- <li><a class="dropdown-item" href="{{ url('user-profile') }}"><i class="bx bx-user"></i><span>Profile</span></a>
                    </li>
                    <li><a class="dropdown-item" href="{{ url('ecommerce-orders') }}"><i class="bx bx-cog"></i><span>Orders</span></a>
                    </li>
                    <li><a class="dropdown-item" href="{{ url('index') }}"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
                    </li>
                    <li><a class="dropdown-item" href="{{ url('earnings') }}"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
                    </li>
                    <li><a class="dropdown-item" href="{{ url('downloads') }}"><i class='bx bx-download'></i><span>Downloads</span></a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li> --}}
                    <li><a class="dropdown-item" href="{{ url('logout') }}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
