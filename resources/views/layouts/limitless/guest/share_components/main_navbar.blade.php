<!-- Main navbar -->
<div class="navbar navbar-expand-xl navbar-light navbar-static px-0">
    <div class="d-flex flex-1 pl-3">
        <div class="navbar-brand wmin-0 mr-1">
            <a href="/" class="d-inline-block">
                <img src="{{asset('template/limitless/global_assets/images/logo_dark.png')}}" class="d-none d-sm-block" alt="">
                <img src="{{asset('template/limitless/global_assets/images/logo_icon_dark.png')}}" class="d-sm-none" alt="">
            </a>
        </div>

        <button type="button" class="navbar-toggler sidebar-mobile-main-toggle ml-2">
            <i class="icon-transmission"></i>
        </button>

        <button type="button" class="navbar-toggler sidebar-mobile-secondary-toggle">
            <i class="icon-arrow-left8"></i>
        </button>

        <button type="button" class="navbar-toggler sidebar-mobile-right-toggle">
            <i class="icon-arrow-right8"></i>
        </button>
    </div>

    <div class="d-flex w-100 w-xl-auto overflow-auto overflow-xl-visible scrollbar-hidden border-top border-top-xl-0 order-1 order-xl-0">
        <ul class="navbar-nav navbar-nav-underline flex-row text-nowrap mx-auto">
            <li class="nav-item">
                <a href="{{route('user.dashboard.index')}}" class="navbar-nav-link">
                    <i class="icon-home4 mr-2"></i>
                    Home
                </a>
            </li>


        </ul>
    </div>

    <div class="d-flex flex-xl-1 justify-content-xl-end order-0 order-xl-1 pr-3">
        <ul class="navbar-nav navbar-nav-underline flex-row">
            <x-auth-switcher></x-auth-switcher>
        </ul>
    </div>
</div>
<!-- /main navbar -->
