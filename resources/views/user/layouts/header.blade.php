<!-- Page header -->
<div class="page-header page-header-light bg-transparent shadow-none pb-4 border-0">
    <div class="page-header-content header-elements-lg-inline">
        <div class="page-title d-flex py-0">
            <h3><span class="font-weight-bold">Đoàn luật sư Thành phố Đà Nẵng</span></h3>
        </div>

        <ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
            <li class="nav-item pr-3">
                <div class="text-center text-white">
                    <span>{{ now()->format('H:i') }}</span> <br>
                    <span>{{ today()->format('d/m/Y') }}</span>
                </div>
            </li>

            @livewire('notifications.notification-list')

			<li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
				<a href="#!" class="navbar-nav-link navbar-nav-link-toggler d-inline-flex align-items-center h-100" 
                data-toggle="dropdown" aria-expanded="false">
					<img src="{{ asset(auth()->guard('web')->user()->profile_pic) }}" class="rounded-pill mr-lg-2" height="45" alt="">
				</a>

				<div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ route('account.my-profile.index') }}" class="dropdown-item">
                        <i class="icon-user-plus"></i> 
                        Thông tin cá nhân
                    </a>
                    <a href="{{ route('account.update-credentials.index') }}" class="dropdown-item">
                        <i class="icon-key"></i> 
                        Đổi mật khẩu
                    </a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" id="logout" method="post">@csrf</form>
					<a href="javascript:void" class="dropdown-item" onclick="document.getElementById('logout').submit()">
                        <i class="icon-switch2"></i> 
                        Đăng xuất
                    </a>
				</div>
			</li>
		</ul>
    </div>
</div>
<!-- /page header -->