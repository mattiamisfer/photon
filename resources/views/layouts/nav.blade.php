<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            {{-- <img src="{{ asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon"> --}}
        </div>
        <div>
            <h4 class="logo-text">PHOTON QPL</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="{{ route('home') }}"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
                </li>
                {{-- <li> <a href="{{ url('sales') }}"><i class="bx bx-right-arrow-alt"></i>Sales</a>
                </li>
                <li> <a href="{{ url('ecommerce') }}"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
                </li>
                <li> <a href="{{ url('alternate') }}"><i class="bx bx-right-arrow-alt"></i>Alternate</a>
                </li>
                <li> <a href="{{ url('hospitality') }}"><i class="bx bx-right-arrow-alt"></i>Hospitality</a>
                </li> --}}
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-spa' ></i>
                </div>
                <div class="menu-title">Students</div>
            </a>
            <ul>
                <li> <a href="{{ route('students.index') }}"><i class="bx bx-right-arrow-alt"></i>List</a>
                </li>

            </ul>
        </li>
























    </ul>
    <!--end navigation-->
</div>
