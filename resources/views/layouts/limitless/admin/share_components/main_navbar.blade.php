<!-- Main navbar -->
<div class="navbar navbar-expand-xl navbar-light navbar-static px-0 bg-warning">
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
                <a href="{{route('admin.dashboard.index')}}" class="navbar-nav-link">
                    <i class="icon-home4 mr-2"></i>
                    Admin
                </a>
            </li>

            <x-tutorial_tabs></x-tutorial_tabs>



            <li class="nav-item dropdown nav-item-dropdown-xl">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-strategy mr-2"></i>
                    Starter kit
                </a>

                <div class="dropdown-menu dropdown-scrollable-xl">
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">Sidebars</a>
                        <div class="dropdown-menu">
                            <a href="../seed/layout_2_sidebars_1_side.html" class="dropdown-item rounded">2 sidebars on 1 side</a>
                            <a href="../seed/layout_2_sidebars_2_sides.html" class="dropdown-item rounded">2 sidebars on 2 sides</a>
                            <a href="../seed/layout_3_sidebars.html" class="dropdown-item rounded">3 sidebars</a>
                        </div>
                    </div>
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">Sections</a>
                        <div class="dropdown-menu">
                            <a href="../seed/layout_no_header.html" class="dropdown-item rounded">No header</a>
                            <a href="../seed/layout_no_footer.html" class="dropdown-item rounded">No footer</a>
                            <a href="../seed/layout_fixed_header.html" class="dropdown-item rounded">Fixed header</a>
                            <a href="../seed/layout_fixed_footer.html" class="dropdown-item rounded">Fixed footer</a>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="../seed/layout_static.html" class="dropdown-item rounded">Static layout</a>
                    <a href="../seed/layout_boxed_page.html" class="dropdown-item rounded">Boxed page</a>
                    <a href="../seed/layout_liquid_content.html" class="dropdown-item rounded">Liquid content</a>
                </div>
            </li>

            <li class="nav-item dropdown nav-item-dropdown-xl">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-loop3 mr-2"></i>
                    Switch
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-scrollable-xl">
                    <div class="dropdown-header">Layouts &amp; themes</div>
                    <div class="dropdown-submenu dropdown-submenu-left">
                        <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-grid6"></i> Layouts</a>
                        <div class="dropdown-menu">
                            <a href="../../../../layout_1/LTR/default/full/index.html" class="dropdown-item">Default layout</a>
                            <a href="../../../../layout_2/LTR/default/full/index.html" class="dropdown-item">Layout 2</a>
                            <a href="../../../../layout_3/LTR/default/full/index.html" class="dropdown-item">Layout 3</a>
                            <a href="../../../../layout_4/LTR/default/full/index.html" class="dropdown-item">Layout 4</a>
                            <a href="../../../../layout_5/LTR/default/full/index.html" class="dropdown-item">Layout 5</a>
                            <a href="index.html" class="dropdown-item active">Layout 6</a>
                            <a href="../../../../layout_7/LTR/default/full/index.html" class="dropdown-item disabled">
                                Layout 7
                                <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown-submenu dropdown-submenu-left">
                        <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-droplet"></i> Themes</a>
                        <div class="dropdown-menu">
                            <a href="index.html" class="dropdown-item active">Default</a>
                            <a href="../../../LTR/material/full/index.html" class="dropdown-item">Material</a>
                            <a href="../../../LTR/dark/full/index.html" class="dropdown-item">Dark</a>
                            <a href="../../../LTR/clean/full/index.html" class="dropdown-item disabled">
                                Clean
                                <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown-header">Other</div>
                    <a href="../../../RTL/default/full/index.html" class="dropdown-item">
                        <i class="icon-width"></i>
                        RTL version
                    </a>
                </div>
            </li>

            <li class="nav-item mega-menu-full nav-item-dropdown-xl">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-make-group mr-2"></i>
                    Settings
                </a>
                <div class="dropdown-menu dropdown-content">
                    <div class="d-xl-flex">
                        <div class="d-flex flex-row flex-xl-column bg-light overflow-auto overflow-xl-visible rounded-top rounded-xl-top-0 rounded-xl-left">
                            <div class="dropdown-content-body flex-1 border-bottom border-bottom-xl-0 py-2 py-xl-3">
                                <div class="font-weight-semibold border-bottom d-none d-xl-block pb-2 mb-2">Items</div>
                                <div class="nav flex-xl-column flex-nowrap justify-content-center wmin-xl-300">
                                    <a href="#tab_initialize" class="list-group-item list-group-item-action rounded mr-2 mr-xl-0 active" data-toggle="tab">
                                        <i class="icon-stack2 position-static pr-1 mr-2"></i>
                                        Initialize
                                        <i class="icon-arrow-right8 position-static list-group-item-active-indicator d-none d-xl-inline-block ml-auto"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content flex-xl-1">
                            <div class="tab-pane dropdown-content-body dropdown-scrollable-xl fade show active" id="tab_initialize">
                                <div class="row">
                                    <div class="col-lg-4 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Initialize</div>
                                        <a href="{{route('admin.admin.index')}}" class="dropdown-item rounded">Admin</a>
{{--                                        <a href="{{route('settings.scheduling.load_google_data.tutorial_data')}}" class="dropdown-item rounded">Read Google</a>--}}
                                        <a href="layout_fixed_header.html" class="dropdown-item rounded">Fixed header</a>
                                        <a href="layout_fixed_footer.html" class="dropdown-item rounded">Fixed footer</a>
                                    </div>

                                    <div class="col-lg-4 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">xxxx</div>
                                        <a href="layout_2_sidebars_1_side.html" class="dropdown-item rounded">2 sidebars on 1 side</a>
                                        <a href="layout_2_sidebars_2_sides.html" class="dropdown-item rounded">2 sidebars on 2 sides</a>
                                        <a href="layout_3_sidebars.html" class="dropdown-item rounded active">3 sidebars</a>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Initialize All </div>
                                        <a href="#" class="dropdown-item">
                                            <form action="{{route('admin.settings.initialize_all_db_to_google_to_db')}}" method="POST" >
                                                @csrf
                                                <button type="submit" name="button"><i class="icon-switch2"></i>DB -> Google -> DB</button>
                                            </form>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <form action="{{route('admin.settings.initialize_all_google_to_db')}}" method="POST" >
                                                @csrf
                                                <button type="submit" name="button"><i class="icon-switch2"></i>Google -> DB</button>
                                            </form>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="d-flex flex-xl-1 justify-content-xl-end order-0 order-xl-1 pr-3">
        <ul class="navbar-nav navbar-nav-underline flex-row">
            <x-auth-switcher></x-auth-switcher>

            <li class="nav-item">
                <a href="#notifications" class="navbar-nav-link navbar-nav-link-toggler" data-toggle="modal">
                    <i class="icon-bell2"></i>
                    <span class="badge badge-mark border-pink bg-pink"></span>
                </a>
            </li>

            <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                <a href="#" class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100 dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" class="rounded-circle" height="38" alt="">
                    <span class="d-none d-xl-block ml-2">Hanna</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route('admin.admin.edit',['admin'=> Auth::guard('admin')->user()->id])}}" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-primary badge-pill ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="#" class="dropdown-item">
                        <form action="{{ route('admin.logout') }}" method="POST" onsubmit="return confirm('Admin 您确定要退出吗？');">
                            @csrf
                            <button type="submit" name="button"><i class="icon-switch2"></i> Admin Logout</button>
                        </form>
                    </a>

                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
