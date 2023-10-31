<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="index.html">
                <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid logo" alt />
            </a>
            <a href="">
                <img src="{{ asset('assets/img/logo-small.png') }}" class="img-fluid logo-small" alt />
            </a>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="submenu">
                    <a href="{{ url('dashboard') }}"><i class="fe fe-home"></i> <span> Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="menu-title"><span>Details</span></li>
                <li>
                    <a href="{{ route('user-form') }}"><i class="fe fe-file"></i> <span>Form</span></a>
                </li>
                <li>
                    <a href="{{ route('user-list') }}"><i class="fe fe-user"></i> <span>Customers-List</span></a>
                </li>

            </ul>

        </div>
    </div>
</div>
