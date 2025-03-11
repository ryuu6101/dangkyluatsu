<!-- Page header -->
<div class="page-header page-header-light bg-transparent shadow-none pt-2 pb-4">
    <div class="page-header-content header-elements-lg-inline">
        <div class="page-title d-flex py-0">
            <h3><span class="font-weight-bold">Đoàn luật sư Thành phố Đà Nẵng</span></h3>
        </div>

        <div class="d-flex justify-content-end align-items-center flex-1 flex-lg-0 order-1 order-lg-2">
            <ul class="navbar-nav flex-row">
                {{-- <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
                    <span href="#" class="navbar-nav-link navbar-nav-link-toggler d-inline-flex align-items-center h-100" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}" class="rounded-pill" height="40" alt="">
                    </span>
    
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                        <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                        <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-primary badge-pill ml-auto">58</span></a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                        <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li> --}}

                <li class="nav-item">
                    <div class="text-center text-white">
                        <span>{{ now()->format('H:i') }}</span> <br>
                        <span>{{ today()->format('d/m/Y') }}</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /page header -->