<div class="navbar navbar-expand-lg navbar-dark navbar-static bg-transparent border-0">
    <div class="d-flex flex-1 d-lg-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-paragraph-justify3"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-transmission"></i>
        </button>
    </div>

    <div class="navbar-brand text-center text-lg-left">
        <a href="#!" class="d-inline-block">
            {{-- <span class="font-weight-bold text-dark h3 p-0">Đoàn luật sư Thành phố Đà Nẵng</span> --}}
        </a>
    </div>

    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">
        
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
                <img src="{{ asset(auth()->guard('web')->user()->profile_pic) }}" class="rounded-pill" height="45" alt="">
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('account.my-profile.index') }}" class="dropdown-item">
                    <i class="icon-user-plus"></i> 
                    Thông tin cá nhân
                </a>
                <a href="{{ route('account.credentials.index') }}" class="dropdown-item">
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
<!-- /main navbar -->