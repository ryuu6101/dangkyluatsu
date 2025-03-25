<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg" style="background-color: rgba(255,255,255,0.8)">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-section">
            <div class="sidebar-user-material" style="background-image:none">
                <div class="sidebar-section-body">
                    <div class="d-flex">
                        <div class="flex-1">
                        </div>
                        <a href="#" class="flex-1 text-center">
                            <img src="{{ asset(auth()->guard('web')->user()->profile_pic) }}" 
                            class="img-fluid rounded-circle shadow-sm" width="80" height="80" alt="">
                        </a>
                        <div class="flex-1 text-right">
                            <span type="button" class="text-dark sidebar-control sidebar-main-resize">
                                <i class="icon-transmission"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item">
                    <a href="#!" class="nav-link {{ request()->routeIs('dashboard.index') }}">
                        <i class="icon-home4"></i>
                        <span>Bảng tin</span>
                    </a>
                </li>

                <li class="nav-item nav-item-submenu {{ request()->routeIs('my-progress.detail.index') ? 'nav-item-open' : '' }}">
                    <a href="#!" class="nav-link">
                        <i class="icon-history"></i> 
                        <span>Quá trình của tôi</span>
                    </a>

                    <ul class="nav nav-group-sub" style="display: {{ request()->routeIs('my-progress.detail.index') ? 'block' : 'none' }};">
                        <li class="nav-item">
                            @foreach (auth()->user()->progresses->sortBy('progress_type_id') as $progress)
                            <a href="{{ route('my-progress.detail.index', ['slug' => $progress->type->slug]) }}" 
                            class="nav-link {{ request()->is('*/'.$progress->type->slug) ? 'active' : '' }}">
                                {{ $progress->type->name }}
                            </a>
                            @endforeach
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu {{ request()->routeIs('account.*.index') ? 'nav-item-open' : '' }}">
                    <a href="#!" class="nav-link">
                        <i class="icon-user"></i> 
                        <span>Quản lý tài khoản</span>
                    </a>

                    <ul class="nav nav-group-sub" style="display: {{ request()->routeIs('account.*.index') ? 'block' : 'none' }};">
                        <li class="nav-item">
                            <a href="{{ route('account.my-profile.index') }}" 
                            class="nav-link {{ request()->routeIs('account.my-profile.index') ? 'active' : '' }}">
                                Thông tin cá nhân
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('account.update-credentials.index') }}" 
                            class="nav-link {{ request()->routeIs('account.update-credentials.index') ? 'active' : '' }}">
                                Đổi tài khoản/mật khẩu
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>
<!-- /main sidebar -->