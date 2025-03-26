<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-section sidebar-user my-1">
            <div class="sidebar-section-body">
                <div class="media">
                    <a href="#" class="mr-3">
                        <img src="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}" class="rounded-circle" alt="">
                    </a>

                    <div class="media-body">
                        @php($admin = auth()->guard('admin')->user())
                        <div class="font-weight-semibold">{{ $admin->username }}</div>
                        <div class="font-size-sm line-height-sm opacity-50">
                            {{ $admin->role->name }}
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <button type="button" class="btn btn-outline-light-100 text-dark border-transparent btn-icon 
                        rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                            <i class="icon-transmission"></i>
                        </button>

                        <button type="button" class="btn btn-outline-light-100 text-dark border-transparent btn-icon 
                        rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                            <i class="icon-cross2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                @php($route = Route::current()->getName())
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs mt-1">Menu</div> 
                    <i class="icon-menu" title="Main"></i>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.documents.index') }}" 
                    class="nav-link {{ $route == 'admin.documents.index' ? 'active' : '' }}">
                        <i class="icon-profile"></i>
                        <span>Hồ sơ đăng ký</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.accounts.index') }}" 
                    class="nav-link {{ $route == 'admin.accounts.index' ? 'active' : '' }}">
                        <i class="icon-wrench"></i>
                        <span>Quản trị viên</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.organizations.index') }}" 
                    class="nav-link {{ $route == 'admin.organizations.index' ? 'active' : '' }}">
                        <i class="icon-briefcase"></i>
                        <span>Tổ chức hành nghề</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.bank-accounts.index') }}" 
                    class="nav-link {{ $route == 'admin.bank-accounts.index' ? 'active' : '' }}">
                        <i class="icon-qrcode"></i>
                        <span>Tài khoản ngân hàng</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.mail-config.index') }}" 
                    class="nav-link {{ $route == 'admin.mail-config.index' ? 'active' : '' }}">
                        <i class="icon-mention"></i>
                        <span>Cấu hình gửi mail</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.site-config.index') }}" 
                    class="nav-link {{ $route == 'admin.site-config.index' ? 'active' : '' }}">
                        <i class="icon-sphere"></i>
                        <span>Cấu hình website</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>
<!-- /main sidebar -->