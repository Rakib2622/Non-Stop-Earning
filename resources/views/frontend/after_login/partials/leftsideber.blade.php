<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('courses') }}">
                        <span data-key="t-course">Courses</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('references') }}">
                        <span data-key="t-dashboard">References</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('product') }}">
                        <span data-key="t-dashboard">Product</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('affiliate') }}">
                        <span data-key="t-dashboard">Affiliate</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span data-key="t-user">User</span>
                    </a> 
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('showprofile') }}">
                                <span data-key="t-profile">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}">
                                <span data-key="t-edit-profile">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('change_password') }}">
                                <span data-key="t-change-password">Change Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('withdrawal') }}">
                                <span data-key="t-withdrawal">Withdrawal</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
