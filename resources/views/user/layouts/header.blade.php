<!-- Page header -->
<div class="page-header page-header-light bg-transparent shadow-none pt-2 pb-4 border-0">
    <div class="page-header-content header-elements-lg-inline">
        <div class="page-title d-flex py-0">
            <h3><span class="font-weight-bold">Đoàn luật sư Thành phố Đà Nẵng</span></h3>
        </div>

        <div class="d-flex justify-content-end align-items-center flex-1 flex-lg-0 order-1 order-lg-2">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <div class="text-center text-white">
                        <span>{{ now()->format('H:i') }}</span> <br>
                        <span>{{ today()->format('d/m/Y') }}</span>
                    </div>
                </li>

                <li class="nav-item ml-3">
                    <form action="{{ route('logout') }}" id="logout" method="post">@csrf</form>
                    <a href="javascript:void" onclick="document.getElementById('logout').submit()" class="text-white">
                        Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /page header -->