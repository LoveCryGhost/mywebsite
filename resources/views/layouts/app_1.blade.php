
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('template/limitless/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('template/limitless/assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('template/limitless/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('template/limitless/global_assets/js/main/bootstrap.bundle.min.js')}})}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('template/limitless/global_assets/js/plugins/visualization/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('template/limitless/global_assets/js/plugins/maps/echarts/world.js')}}"></script>

    <script src="{{asset('template/limitless/assets/js/app.js')}}"></script>
    <script src="{{asset('template/limitless/global_assets/js/demo_charts/pages/dashboard_6/light/area_gradient.js')}}"></script>
    <script src="{{asset('template/limitless/global_assets/js/demo_charts/pages/dashboard_6/light/map_europe_effect.js')}}"></script>
    <script src="{{asset('template/limitless/global_assets/js/demo_charts/pages/dashboard_6/light/progress_sortable.js')}}"></script>
    <script src="{{asset('template/limitless/global_assets/js/demo_charts/pages/dashboard_6/light/bars_grouped.js')}}"></script>
    <script src="{{asset('template/limitless/global_assets/js/demo_charts/pages/dashboard_6/light/line_label_marks.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-xl navbar-light navbar-static px-0">
    <div class="d-flex flex-1 pl-3">
        <div class="navbar-brand wmin-0 mr-1">
            <a href="index.html" class="d-inline-block">
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
                <a href="index.html" class="navbar-nav-link">
                    <i class="icon-home4 mr-2"></i>
                    Home
                </a>
            </li>

            <li class="nav-item mega-menu-full nav-item-dropdown-xl">
                <a href="#" class="navbar-nav-link dropdown-toggle active" data-toggle="dropdown">
                    <i class="icon-make-group mr-2"></i>
                    Navigation
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="d-xl-flex">
                        <div class="d-flex flex-row flex-xl-column bg-light overflow-auto overflow-xl-visible rounded-top rounded-xl-top-0 rounded-xl-left">
                            <div class="dropdown-content-body flex-1 border-bottom border-bottom-xl-0 py-2 py-xl-3">
                                <div class="font-weight-semibold border-bottom d-none d-xl-block pb-2 mb-2">Navigation</div>
                                <div class="nav flex-xl-column flex-nowrap justify-content-center wmin-xl-300">
                                    <a href="#tab_page" class="list-group-item list-group-item-action rounded mr-2 mr-xl-0 active" data-toggle="tab">
                                        <i class="icon-stack2 position-static pr-1 mr-2"></i>
                                        Page
                                        <i class="icon-arrow-right8 position-static list-group-item-active-indicator d-none d-xl-inline-block ml-auto"></i>
                                    </a>
                                    <a href="#tab_navbars" class="list-group-item list-group-item-action rounded mr-2 mr-xl-0" data-toggle="tab">
                                        <i class="icon-paragraph-justify3 position-static pr-1 mr-2"></i>
                                        Navbars
                                        <i class="icon-arrow-right8 position-static list-group-item-active-indicator d-none d-xl-inline-block ml-auto"></i>
                                    </a>
                                    <a href="#tab_sidebar_types" class="list-group-item list-group-item-action rounded mr-2 mr-xl-0" data-toggle="tab">
                                        <i class="icon-list3 position-static pr-1 mr-2"></i>
                                        Sidebar types
                                        <i class="icon-arrow-right8 position-static list-group-item-active-indicator d-none d-xl-inline-block ml-auto"></i>
                                    </a>
                                    <a href="#tab_sidebar_content" class="list-group-item list-group-item-action rounded mr-2 mr-xl-0" data-toggle="tab">
                                        <i class="icon-menu6 position-static pr-1 mr-2"></i>
                                        Sidebar content
                                        <i class="icon-arrow-right8 position-static list-group-item-active-indicator d-none d-xl-inline-block ml-auto"></i>
                                    </a>
                                    <a href="#tab_navigation" class="list-group-item list-group-item-action rounded" data-toggle="tab">
                                        <i class="icon-transmission position-static pr-1 mr-2"></i>
                                        Navigation
                                        <i class="icon-arrow-right8 position-static list-group-item-active-indicator d-none d-xl-inline-block ml-auto"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content flex-xl-1">
                            <div class="tab-pane dropdown-content-body dropdown-scrollable-xl fade show active" id="tab_page">
                                <div class="row">
                                    <div class="col-lg-4 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Sections</div>
                                        <a href="layout_no_header.html" class="dropdown-item rounded">No header</a>
                                        <a href="layout_no_footer.html" class="dropdown-item rounded">No footer</a>
                                        <a href="layout_fixed_header.html" class="dropdown-item rounded">Fixed header</a>
                                        <a href="layout_fixed_footer.html" class="dropdown-item rounded">Fixed footer</a>
                                    </div>

                                    <div class="col-lg-4 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Sidebars</div>
                                        <a href="layout_2_sidebars_1_side.html" class="dropdown-item rounded">2 sidebars on 1 side</a>
                                        <a href="layout_2_sidebars_2_sides.html" class="dropdown-item rounded">2 sidebars on 2 sides</a>
                                        <a href="layout_3_sidebars.html" class="dropdown-item rounded active">3 sidebars</a>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Layout</div>
                                        <a href="layout_static.html" class="dropdown-item rounded">Static layout</a>
                                        <a href="layout_boxed_page.html" class="dropdown-item rounded">Boxed page</a>
                                        <a href="layout_liquid_content.html" class="dropdown-item rounded">Liquid content</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane dropdown-content-body dropdown-scrollable-xl fade" id="tab_navbars">
                                <div class="row">
                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Single</div>
                                        <a href="navbar_single_bottom_fixed.html" class="dropdown-item rounded">Bottom fixed</a>
                                        <a href="navbar_single_header_before.html" class="dropdown-item rounded">Before page header</a>
                                        <a href="navbar_single_header_before_fixed.html" class="dropdown-item rounded">Before page header fixed</a>
                                        <a href="navbar_single_header_after.html" class="dropdown-item rounded">After page header</a>
                                        <a href="navbar_single_header_after_sticky.html" class="dropdown-item rounded">After page header sticky</a>
                                    </div>

                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Multiple</div>
                                        <a href="navbar_multiple_top_static.html" class="dropdown-item rounded">Top static</a>
                                        <a href="navbar_multiple_top_fixed.html" class="dropdown-item rounded">Top fixed</a>
                                        <a href="navbar_multiple_bottom_static.html" class="dropdown-item rounded">Bottom static</a>
                                        <a href="navbar_multiple_bottom_fixed.html" class="dropdown-item rounded">Bottom fixed</a>
                                        <a href="navbar_multiple_top_bottom_fixed.html" class="dropdown-item rounded">Top and bottom fixed</a>
                                    </div>

                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Content</div>
                                        <a href="navbar_component_single.html" class="dropdown-item rounded">Single navbar</a>
                                        <a href="navbar_component_multiple.html" class="dropdown-item rounded">Multiple navbars</a>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Other</div>
                                        <a href="navbar_colors.html" class="dropdown-item rounded">Color options</a>
                                        <a href="navbar_sizes.html" class="dropdown-item rounded">Sizing options</a>
                                        <a href="navbar_components.html" class="dropdown-item rounded">Navbar components</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane dropdown-content-body dropdown-scrollable-xl fade" id="tab_sidebar_types">
                                <div class="row">
                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Main</div>
                                        <a href="sidebar_default_resizable.html" class="dropdown-item rounded">Resizable</a>
                                        <a href="sidebar_default_resized.html" class="dropdown-item rounded">Resized</a>
                                        <a href="sidebar_default_collapsible.html" class="dropdown-item rounded">Collapsible</a>
                                        <a href="sidebar_default_collapsed.html" class="dropdown-item rounded">Collapsed</a>
                                        <a href="sidebar_default_hideable.html" class="dropdown-item rounded">Hideable</a>
                                        <a href="sidebar_default_hidden.html" class="dropdown-item rounded">Hidden</a>
                                        <a href="sidebar_default_color_dark.html" class="dropdown-item rounded">Dark color</a>
                                    </div>

                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Secondary</div>
                                        <a href="sidebar_secondary_collapsible.html" class="dropdown-item rounded">Collapsible</a>
                                        <a href="sidebar_secondary_collapsed.html" class="dropdown-item rounded">Collapsed</a>
                                        <a href="sidebar_secondary_hideable.html" class="dropdown-item rounded">Hideable</a>
                                        <a href="sidebar_secondary_hidden.html" class="dropdown-item rounded">Hidden</a>
                                        <a href="sidebar_secondary_color_dark.html" class="dropdown-item rounded">Dark color</a>
                                    </div>

                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Right</div>
                                        <a href="sidebar_right_collapsible.html" class="dropdown-item rounded">Collapsible</a>
                                        <a href="sidebar_right_collapsed.html" class="dropdown-item rounded">Collapsed</a>
                                        <a href="sidebar_right_hideable.html" class="dropdown-item rounded">Hideable</a>
                                        <a href="sidebar_right_hidden.html" class="dropdown-item rounded">Hidden</a>
                                        <a href="sidebar_right_color_dark.html" class="dropdown-item rounded">Dark color</a>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Content</div>
                                        <a href="sidebar_content_left.html" class="dropdown-item rounded">Left aligned</a>
                                        <a href="sidebar_content_left_stretch.html" class="dropdown-item rounded">Left stretched</a>
                                        <a href="sidebar_content_left_sections.html" class="dropdown-item rounded">Left sectioned</a>
                                        <a href="sidebar_content_right.html" class="dropdown-item rounded">Right aligned</a>
                                        <a href="sidebar_content_right_stretch.html" class="dropdown-item rounded">Right stretched</a>
                                        <a href="sidebar_content_right_sections.html" class="dropdown-item rounded">Right sectioned</a>
                                        <a href="sidebar_content_color_dark.html" class="dropdown-item rounded">Dark color</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane dropdown-content-body dropdown-scrollable-xl fade" id="tab_sidebar_content">
                                <div class="row">
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Sticky areas</div>
                                        <a href="sidebar_sticky_header.html" class="dropdown-item rounded">Header</a>
                                        <a href="sidebar_sticky_footer.html" class="dropdown-item rounded">Footer</a>
                                        <a href="sidebar_sticky_header_footer.html" class="dropdown-item rounded">Header and footer</a>
                                        <a href="sidebar_sticky_custom.html" class="dropdown-item rounded">Custom elements</a>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Other</div>
                                        <a href="sidebar_components.html" class="dropdown-item rounded">Sidebar components</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane dropdown-content-body dropdown-scrollable-xl fade" id="tab_navigation">
                                <div class="row">
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Vertical</div>
                                        <a href="navigation_vertical_collapsible.html" class="dropdown-item rounded">Collapsible menu</a>
                                        <a href="navigation_vertical_accordion.html" class="dropdown-item rounded">Accordion menu</a>
                                        <a href="navigation_vertical_bordered.html" class="dropdown-item rounded">Bordered navigation</a>
                                        <a href="navigation_vertical_right_icons.html" class="dropdown-item rounded">Right icons</a>
                                        <a href="navigation_vertical_badges.html" class="dropdown-item rounded">Badges</a>
                                        <a href="navigation_vertical_disabled.html" class="dropdown-item rounded">Disabled items</a>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="font-weight-semibold border-bottom pb-2 mb-2">Horizontal</div>
                                        <a href="navigation_horizontal_click.html" class="dropdown-item rounded">Submenu on click</a>
                                        <a href="navigation_horizontal_hover.html" class="dropdown-item rounded">Submenu on hover</a>
                                        <a href="navigation_horizontal_elements.html" class="dropdown-item rounded">With custom elements</a>
                                        <a href="navigation_horizontal_tabs.html" class="dropdown-item rounded">Tabbed navigation</a>
                                        <a href="navigation_horizontal_disabled.html" class="dropdown-item rounded">Disabled navigation links</a>
                                        <a href="navigation_horizontal_mega.html" class="dropdown-item rounded">Horizontal mega menu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

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
        </ul>
    </div>

    <div class="d-flex flex-xl-1 justify-content-xl-end order-0 order-xl-1 pr-3">
        <ul class="navbar-nav navbar-nav-underline flex-row">
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
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-primary badge-pill ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-light sidebar-main sidebar-expand-xl sidebar-main-resized">

        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- Header -->
            <div class="sidebar-section sidebar-header">
                <div class="sidebar-section-body d-flex align-items-center justify-content-center py-2">
                    <h5 class="sidebar-resize-hide flex-1 mb-0">Navigation</h5>
                    <div class="my-1">
                        <button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-xl-inline-flex">
                            <i class="icon-transmission"></i>
                        </button>

                        <button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-xl-none">
                            <i class="icon-cross2"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- /header -->


            <!-- User menu -->
            <div class="sidebar-section sidebar-section-body user-menu-vertical text-center pt-0">
                <div class="card-img-actions d-inline-block">
                    <img class="img-fluid rounded-circle" src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="80" height="80" alt="">
                    <div class="card-img-actions-overlay card-img rounded-circle">
                        <a href="#" class="btn btn-white btn-icon btn-sm rounded-pill">
                            <i class="icon-pencil"></i>
                        </a>
                    </div>
                </div>

                <div class="sidebar-resize-hide mt-2">
                    <h6 class="font-weight-semibold mb-0">Hanna Dorman</h6>
                    <span class="text-muted">hanna@dorman.com</span>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="sidebar-section">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header pt-0"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            <i class="icon-home4"></i>
                            <span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
                        </a>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="../../../../layout_1/LTR/default/full/index.html" class="nav-link">Default layout</a></li>
                            <li class="nav-item"><a href="index.html" class="nav-link active">Layout 2</a></li>
                            <li class="nav-item"><a href="../../../../layout_3/LTR/default/full/index.html" class="nav-link">Layout 3</a></li>
                            <li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Layout 4</a></li>
                            <li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html" class="nav-link">Layout 5</a></li>
                            <li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link">Layout 6</a></li>
                            <li class="nav-item"><a href="../../../../layout_7/LTR/default/full/index.html" class="nav-link disabled">Layout 7 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Themes">
                            <li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
                            <li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Material</a></li>
                            <li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link">Dark</a></li>
                            <li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                            <li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
                            <li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>
                            <li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">2 sidebars</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
                                    <li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="sidebar_secondary_right.html" class="nav-link">3 sidebars</a></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Content sidebars</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="../seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
                                    <li class="nav-item"><a href="../seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
                            <li class="nav-item"><a href="../seed/layout_static.html" class="nav-link">Static layout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>
                    <!-- /main -->

                    <!-- Layout -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
                    <li class="nav-item nav-item-submenu nav-item-open nav-item-expanded">
                        <a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Page layouts">
                            <li class="nav-item"><a href="layout_static.html" class="nav-link">Static layout</a></li>
                            <li class="nav-item"><a href="layout_no_header.html" class="nav-link">No header</a></li>
                            <li class="nav-item"><a href="layout_no_footer.html" class="nav-link">No footer</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="layout_fixed_header.html" class="nav-link">Fixed header</a></li>
                            <li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="layout_2_sidebars_1_side.html" class="nav-link">2 sidebars on 1 side</a></li>
                            <li class="nav-item"><a href="layout_2_sidebars_2_sides.html" class="nav-link">2 sidebars on 2 sides</a></li>
                            <li class="nav-item"><a href="layout_3_sidebars.html" class="nav-link active">3 sidebars</a></li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="layout_boxed_page.html" class="nav-link">Boxed page</a></li>
                            <li class="nav-item"><a href="layout_liquid_content.html" class="nav-link">Liquid content</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Sidebars">
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Main sidebar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_default_resizable.html" class="nav-link">Resizable</a></li>
                                    <li class="nav-item"><a href="sidebar_default_resized.html" class="nav-link">Resized</a></li>
                                    <li class="nav-item"><a href="sidebar_default_collapsible.html" class="nav-link">Collapsible</a></li>
                                    <li class="nav-item"><a href="sidebar_default_collapsed.html" class="nav-link">Collapsed</a></li>
                                    <li class="nav-item"><a href="sidebar_default_hideable.html" class="nav-link">Hideable</a></li>
                                    <li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link">Hidden</a></li>
                                    <li class="nav-item-divider"></li>
                                    <li class="nav-item"><a href="sidebar_default_color_dark.html" class="nav-link">Dark color</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Secondary sidebar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_secondary_collapsible.html" class="nav-link">Collapsible</a></li>
                                    <li class="nav-item"><a href="sidebar_secondary_collapsed.html" class="nav-link">Collapsed</a></li>
                                    <li class="nav-item"><a href="sidebar_secondary_hideable.html" class="nav-link">Hideable</a></li>
                                    <li class="nav-item"><a href="sidebar_secondary_hidden.html" class="nav-link">Hidden</a></li>
                                    <li class="nav-item-divider"></li>
                                    <li class="nav-item"><a href="sidebar_secondary_color_dark.html" class="nav-link">Dark color</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Right sidebar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_right_collapsible.html" class="nav-link">Collapsible</a></li>
                                    <li class="nav-item"><a href="sidebar_right_collapsed.html" class="nav-link">Collapsed</a></li>
                                    <li class="nav-item"><a href="sidebar_right_hideable.html" class="nav-link">Hideable</a></li>
                                    <li class="nav-item"><a href="sidebar_right_hidden.html" class="nav-link">Hidden</a></li>
                                    <li class="nav-item-divider"></li>
                                    <li class="nav-item"><a href="sidebar_right_color_dark.html" class="nav-link">Dark color</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Content sidebar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_content_left.html" class="nav-link">Left aligned</a></li>
                                    <li class="nav-item"><a href="sidebar_content_left_stretch.html" class="nav-link">Left stretched</a></li>
                                    <li class="nav-item"><a href="sidebar_content_left_sections.html" class="nav-link">Left sectioned</a></li>
                                    <li class="nav-item"><a href="sidebar_content_right.html" class="nav-link">Right aligned</a></li>
                                    <li class="nav-item"><a href="sidebar_content_right_stretch.html" class="nav-link">Right stretched</a></li>
                                    <li class="nav-item"><a href="sidebar_content_right_sections.html" class="nav-link">Right sectioned</a></li>
                                    <li class="nav-item-divider"></li>
                                    <li class="nav-item"><a href="sidebar_content_color_dark.html" class="nav-link">Dark color</a></li>
                                </ul>
                            </li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Sticky areas</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="sidebar_sticky_header.html" class="nav-link">Header</a></li>
                                    <li class="nav-item"><a href="sidebar_sticky_footer.html" class="nav-link">Footer</a></li>
                                    <li class="nav-item"><a href="sidebar_sticky_header_footer.html" class="nav-link">Header and footer</a></li>
                                    <li class="nav-item"><a href="sidebar_sticky_custom.html" class="nav-link">Custom elements</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="sidebar_components.html" class="nav-link">Sidebar components</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Navbars</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Navbars">
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Single navbar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="navbar_single_bottom_fixed.html" class="nav-link">Bottom fixed</a></li>
                                    <li class="nav-item"><a href="navbar_single_header_before.html" class="nav-link">Before page header</a></li>
                                    <li class="nav-item"><a href="navbar_single_header_before_fixed.html" class="nav-link">Before page header fixed</a></li>
                                    <li class="nav-item"><a href="navbar_single_header_after.html" class="nav-link">After page header</a></li>
                                    <li class="nav-item"><a href="navbar_single_header_after_sticky.html" class="nav-link">After page header sticky</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Multiple navbars</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="navbar_multiple_top_static.html" class="nav-link">Top static</a></li>
                                    <li class="nav-item"><a href="navbar_multiple_top_fixed.html" class="nav-link">Top fixed</a></li>
                                    <li class="nav-item"><a href="navbar_multiple_bottom_static.html" class="nav-link">Bottom static</a></li>
                                    <li class="nav-item"><a href="navbar_multiple_bottom_fixed.html" class="nav-link">Bottom fixed</a></li>
                                    <li class="nav-item"><a href="navbar_multiple_top_bottom_fixed.html" class="nav-link">Top and bottom fixed</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Content navbar</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="navbar_component_single.html" class="nav-link">Single navbar</a></li>
                                    <li class="nav-item"><a href="navbar_component_multiple.html" class="nav-link">Multiple navbars</a></li>
                                </ul>
                            </li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="navbar_colors.html" class="nav-link">Color options</a></li>
                            <li class="nav-item"><a href="navbar_sizes.html" class="nav-link">Sizing options</a></li>
                            <li class="nav-item"><a href="navbar_components.html" class="nav-link">Navbar components</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
                            <li class="nav-item"><a href="navigation_vertical_collapsible.html" class="nav-link">Collapsible menu</a></li>
                            <li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link">Accordion menu</a></li>
                            <li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link">Bordered navigation</a></li>
                            <li class="nav-item"><a href="navigation_vertical_right_icons.html" class="nav-link">Right icons</a></li>
                            <li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link">Badges</a></li>
                            <li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link">Disabled items</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
                            <li class="nav-item"><a href="navigation_horizontal_click.html" class="nav-link">Submenu on click</a></li>
                            <li class="nav-item"><a href="navigation_horizontal_hover.html" class="nav-link">Submenu on hover</a></li>
                            <li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link">With custom elements</a></li>
                            <li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link">Tabbed navigation</a></li>
                            <li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link">Disabled navigation links</a></li>
                            <li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link">Horizontal mega menu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Menu levels">
                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
                                        <ul class="nav nav-group-sub">
                                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
                        </ul>
                    </li>
                    <!-- /layout -->

                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Secondary sidebar -->
    <div class="sidebar sidebar-light sidebar-secondary sidebar-expand-xl">

        <!-- Expand button -->
        <button type="button" class="btn btn-sidebar-expand sidebar-control sidebar-secondary-toggle">
            <i class="icon-arrow-right13"></i>
        </button>
        <!-- /expand button -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- Header -->
            <div class="sidebar-section sidebar-section-body d-flex align-items-center py-2">
                <h5 class="mb-0">Sidebar</h5>
                <div class="my-1 ml-auto">
                    <button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-secondary-toggle d-none d-xl-inline-flex">
                        <i class="icon-transmission"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-secondary-toggle d-xl-none">
                        <i class="icon-cross2"></i>
                    </button>
                </div>
            </div>
            <!-- /header -->


            <!-- Sidebar search -->
            <div class="sidebar-section">
                <div class="sidebar-section-header pt-1">
                    <span class="font-weight-semibold">Sidebar search</span>
                    <div class="list-icons ml-auto">
                        <a href="#sidebar-search" class="list-icons-item" data-toggle="collapse">
                            <i class="icon-arrow-down12"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="sidebar-search">
                    <form class="sidebar-section-body" action="#">
                        <div class="form-group-feedback form-group-feedback-right">
                            <input type="search" class="form-control" placeholder="Search">
                            <div class="form-control-feedback">
                                <i class="icon-search4 font-size-base text-muted"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /sidebar search -->


            <!-- Actions -->
            <div class="sidebar-section">
                <div class="sidebar-section-header">
                    <span class="font-weight-semibold">Actions</span>
                    <div class="list-icons ml-auto">
                        <a href="#sidebar-actions" class="list-icons-item" data-toggle="collapse">
                            <i class="icon-arrow-down12"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="sidebar-actions">
                    <div class="sidebar-section-body">
                        <div class="row row-tile no-gutters">
                            <div class="col-6">
                                <button type="button" class="btn btn-light btn-block btn-float m-0">
                                    <i class="icon-github4 icon-2x"></i>
                                    <span>Github</span>
                                </button>

                                <button type="button" class="btn btn-light btn-block btn-float m-0">
                                    <i class="icon-dropbox text-primary icon-2x"></i>
                                    <span>Dropbox</span>
                                </button>
                            </div>

                            <div class="col-6">
                                <button type="button" class="btn btn-light btn-block btn-float m-0">
                                    <i class="icon-dribbble3 text-pink icon-2x"></i>
                                    <span>Dribbble</span>
                                </button>

                                <button type="button" class="btn btn-light btn-block btn-float m-0">
                                    <i class="icon-google-drive text-success icon-2x"></i>
                                    <span>Google Drive</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /actions -->


            <!-- Sub navigation -->
            <div class="sidebar-section">
                <div class="sidebar-section-header">
                    <span class="font-weight-semibold">Navigation</span>
                    <div class="list-icons ml-auto">
                        <a href="#sidebar-navigation" class="list-icons-item" data-toggle="collapse">
                            <i class="icon-arrow-down12"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="sidebar-navigation">
                    <ul class="nav nav-sidebar my-2" data-nav-type="accordion">
                        <li class="nav-item-header">Actions</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="icon-googleplus5"></i> Create task</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="icon-portfolio"></i> Create project</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="icon-compose"></i> Edit task list</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-user-plus"></i>
                                Assign users
                                <span class="badge badge-primary badge-pill ml-auto">94 online</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="icon-collaboration"></i> Create team</a>
                        </li>
                        <li class="nav-item-header">Navigate</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="icon-files-empty"></i> All tasks</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-file-plus"></i>
                                Active tasks
                                <span class="badge badge-dark badge-pill ml-auto">28</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="icon-file-check"></i> Closed tasks</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-reading"></i>
                                Assigned to me
                                <span class="badge badge-info badge-pill ml-auto">86</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-make-group"></i>
                                Assigned to my team
                                <span class="badge badge-danger badge-pill ml-auto">47</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="icon-cog3"></i> Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /sub navigation -->


            <!-- Online users -->
            <div class="sidebar-section">
                <div class="sidebar-section-header">
                    <span class="font-weight-semibold">Users online</span>
                    <div class="list-icons ml-auto">
                        <a href="#sidebar-users" class="list-icons-item" data-toggle="collapse">
                            <i class="icon-arrow-down12"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="sidebar-users">
                    <div class="sidebar-section-body">
                        <ul class="media-list">
                            <li class="media">
                                <a href="#" class="mr-3">
                                    <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">James Alexander</a>
                                    <span class="font-size-xs text-muted d-block">Santa Ana, CA.</span>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <span class="badge badge-mark border-success"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="mr-3">
                                    <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jeremy Victorino</a>
                                    <span class="font-size-xs text-muted d-block">Dowagiac, MI.</span>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <span class="badge badge-mark border-danger"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="mr-3">
                                    <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Margo Baker</a>
                                    <span class="font-size-xs text-muted d-block">Kasaan, AK.</span>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <span class="badge badge-mark border-success"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="mr-3">
                                    <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Beatrix Diaz</a>
                                    <span class="font-size-xs text-muted d-block">Neenah, WI.</span>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <span class="badge badge-mark border-warning"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="mr-3">
                                    <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Richard Vango</a>
                                    <span class="font-size-xs text-muted d-block">Grapevine, TX.</span>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <span class="badge badge-mark border-secondary"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /online-users -->


            <!-- Quick settings -->
            <div class="sidebar-section">
                <div class="sidebar-section-header">
                    <span class="font-weight-semibold">Quick settings</span>
                    <div class="list-icons ml-auto">
                        <a href="#sidebar-filters" class="list-icons-item" data-toggle="collapse">
                            <i class="icon-arrow-down12"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="sidebar-filters">
                    <form class="sidebar-section-body" action="#">
                        <div class="form-group">
                            <label class="custom-control custom-switch custom-control-right mb-2">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-label position-static p-0">Desktop notifications</span>
                            </label>

                            <label class="custom-control custom-switch custom-control-right mb-2">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label position-static p-0">2 factor authentication</span>
                            </label>

                            <label class="custom-control custom-switch custom-control-right mb-2">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-label position-static p-0">Language detection</span>
                            </label>

                            <label class="custom-control custom-switch custom-control-right mb-2">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-label position-static p-0">System color theme</span>
                            </label>

                            <label class="custom-control custom-switch custom-control-right">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label position-static p-0">Extended user session</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /quick settings -->


            <!-- Latest updates -->
            <div class="sidebar-section">
                <div class="sidebar-section-header">
                    <span class="font-weight-semibold">Latest updates</span>
                    <div class="list-icons ml-auto">
                        <a href="#sidebar-updates" class="list-icons-item" data-toggle="collapse">
                            <i class="icon-arrow-down12"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="sidebar-updates">
                    <div class="sidebar-section-body">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-pill border-2 btn-icon">
                                        <i class="icon-git-pull-request"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                    <div class="text-muted font-size-sm">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-warning text-warning rounded-pill border-2 btn-icon">
                                        <i class="icon-git-commit"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    Add full font overrides for popovers and tooltips
                                    <div class="text-muted font-size-sm">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-info text-info rounded-pill border-2 btn-icon">
                                        <i class="icon-git-branch"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
                                    <div class="text-muted font-size-sm">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-success text-success rounded-pill border-2 btn-icon">
                                        <i class="icon-git-merge"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
                                    <div class="text-muted font-size-sm">Dec 18, 18:36</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-pill border-2 btn-icon">
                                        <i class="icon-git-pull-request"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    Have Carousel ignore keyboard events
                                    <div class="text-muted font-size-sm">Dec 12, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /latest updates -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /secondary sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content container header-elements-md-inline">
                    <div class="d-flex">
                        <div class="page-title">
                            <h4 class="font-weight-semibold">Dashboard</h4>
                            <div class="text-muted">Welcome back, Eugene!</div>
                        </div>
                        <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none py-0 mb-3 mb-md-0">
                        <button type="button" class="btn btn-light"><i class="icon-printer mr-2"></i> Print</button>
                        <button type="button" class="btn btn-pink ml-3"> <i class="icon-file-presentation mr-2"></i> Generate report</button>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content container pt-0">

                <!-- Blocks with chart -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header d-flex pb-1">
                                <div>
                                    <span class="card-title font-weight-semibold">Total visitors</span>
                                    <h2 class="font-weight-bold mb-0">5,274 <small class="text-success font-size-base ml-2">+ 3.6%</small></h2>
                                </div>

                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill"><i class="icon-more2"></i></a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                        <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                                    </div>
                                </div>
                            </div>

                            <div class="chart-container">
                                <div class="chart" id="area_gradient_blue" style="height: 100px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header d-flex pb-1">
                                <div>
                                    <span class="card-title font-weight-semibold">New opportunities</span>
                                    <h2 class="font-weight-bold mb-0">2,785 <small class="text-success font-size-base ml-2">+ 5.9%</small></h2>
                                </div>

                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill"><i class="icon-more2"></i></a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                        <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                                    </div>
                                </div>
                            </div>

                            <div class="chart-container">
                                <div class="chart" id="area_gradient_orange" style="height: 100px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header d-flex pb-1">
                                <div>
                                    <span class="card-title font-weight-semibold">New leads</span>
                                    <h2 class="font-weight-bold mb-0">1,589 <small class="text-danger font-size-base ml-2">- 1.8%</small></h2>
                                </div>

                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill"><i class="icon-more2"></i></a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                        <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                                    </div>
                                </div>
                            </div>

                            <div class="chart-container">
                                <div class="chart" id="area_gradient_green" style="height: 100px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /blocks with chart -->


                <!-- Sales by country -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title font-weight-semibold">Daily sales by country</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="map overflow-hidden rounded mb-3 mb-lg-0" id="map_europe_effect" style="height: 400px;"></div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-pink-100 text-pink line-height-1 rounded p-2 mr-3">
													<i class="icon-cart top-0"></i>
												</span>
                                            <div>
                                                <h6 class="font-weight-bold mb-0">1,890</h6>
                                                <span class="text-muted">Total sales</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-teal-100 text-teal line-height-1 rounded p-2 mr-3">
													<i class="icon-cash3 top-0"></i>
												</span>
                                            <div>
                                                <h6 class="font-weight-bold mb-0">???11,781</h6>
                                                <span class="text-muted">Total revenue</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="chart-container">
                                    <div class="chart" id="progress_bar_sorted" style="height: 333px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /sales by country -->


                <!-- Latest orders -->
                <div class="card">
                    <div class="card-header d-flex py-0">
                        <h6 class="card-title font-weight-semibold py-3">Latest orders</h6>

                        <div class="d-inline-flex align-items-center ml-auto">
                            <span class="badge badge-pink font-weight-semibold">+ 29 new</span>
                            <div class="dropdown ml-2">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                    <i class="icon-more2"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                    <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive border-top-0">
                        <table class="table text-nowrap">
                            <thead>
                            <tr>
                                <th>Company</th>
                                <th>Delivery date</th>
                                <th>Delivery method</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="mr-3">
                                            <img src="{{asset('template/limitless/global_assets/images/brands/klm.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                        </a>

                                        <div>
                                            <a href="#" class="text-body font-weight-semibold">KLM Royal Dutch Airlines</a>
                                            <div class="text-muted font-size-sm">May 21st</div>
                                        </div>
                                    </div>
                                </td>
                                <td>June 12th</td>
                                <td><img src="{{asset('template/limitless/global_assets/images/brands/ups.svg')}}" class="mr-1" width="20" alt=""> UPS Express</td>
                                <td><span class="badge badge-success-100 text-success">Delivered</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                            <i class="icon-menu7"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="mr-3">
                                            <img src="{{asset('template/limitless/global_assets/images/brands/amazon.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                        </a>

                                        <div>
                                            <a href="#" class="text-body font-weight-semibold">Amazon Inc.</a>
                                            <div class="text-muted font-size-sm">May 22nd</div>
                                        </div>
                                    </div>
                                </td>
                                <td>June 13th</td>
                                <td><img src="{{asset('template/limitless/global_assets/images/brands/deutsche-post.svg')}}" class="rounded-sm mr-1" width="20" alt=""> Deutsche post</td>
                                <td><span class="badge badge-danger-100 text-danger">Delayed</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                            <i class="icon-menu7"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="mr-3">
                                            <img src="{{asset('template/limitless/global_assets/images/brands/honda.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                        </a>

                                        <div>
                                            <a href="#" class="text-body font-weight-semibold">Honda Motor Company</a>
                                            <div class="text-muted font-size-sm">May 22nd</div>
                                        </div>
                                    </div>
                                </td>
                                <td>June 14th</td>
                                <td><img src="{{asset('template/limitless/global_assets/images/brands/postnl.svg')}}" class="mr-1" width="20" alt=""> PostNL</td>
                                <td><span class="badge badge-secondary-100 text-secondary">Processing</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                            <i class="icon-menu7"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="mr-3">
                                            <img src="{{asset('template/limitless/global_assets/images/brands/holiday-inn.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                        </a>

                                        <div>
                                            <a href="#" class="text-body font-weight-semibold">Holiday Inn Hotels</a>
                                            <div class="text-muted font-size-sm">May 23rd</div>
                                        </div>
                                    </div>
                                </td>
                                <td>June 15th</td>
                                <td><img src="{{asset('template/limitless/global_assets/images/brands/fedex.svg')}}" class="rounded-sm mr-1" width="20" alt=""> Fedex Express</td>
                                <td><span class="badge badge-success-100 text-success">Delivered</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                            <i class="icon-menu7"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="mr-3">
                                            <img src="{{asset('template/limitless/global_assets/images/brands/apple.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                        </a>

                                        <div>
                                            <a href="#" class="text-body font-weight-semibold">Apple Inc.</a>
                                            <div class="text-muted font-size-sm">May 23rd</div>
                                        </div>
                                    </div>
                                </td>
                                <td>June 16th</td>
                                <td><img src="{{asset('template/limitless/global_assets/images/brands/deutsche-post.svg')}}" class="rounded-sm mr-1" width="20" alt=""> Deutsche post</td>
                                <td><span class="badge badge-indigo-100 text-indigo">Dispatched</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                            <i class="icon-menu7"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="mr-3">
                                            <img src="{{asset('template/limitless/global_assets/images/brands/debijenkorf.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                        </a>

                                        <div>
                                            <a href="#" class="text-body font-weight-semibold">de Bijenkorf</a>
                                            <div class="text-muted font-size-sm">May 23rd</div>
                                        </div>
                                    </div>
                                </td>
                                <td>June 17th</td>
                                <td><img src="{{asset('template/limitless/global_assets/images/brands/tnt.svg')}}" class="rounded-sm mr-1" width="20" alt=""> TNT</td>
                                <td><span class="badge badge-indigo-100 text-indigo">Dispatched</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                            <i class="icon-menu7"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="mr-3">
                                            <img src="{{asset('template/limitless/global_assets/images/brands/texaco.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                        </a>

                                        <div>
                                            <a href="#" class="text-body font-weight-semibold">Texaco Inc.</a>
                                            <div class="text-muted font-size-sm">May 24th</div>
                                        </div>
                                    </div>
                                </td>
                                <td>June 18th</td>
                                <td><img src="{{asset('template/limitless/global_assets/images/brands/dpd.svg')}}" class="mr-1" width="20" alt=""> DPD</td>
                                <td><span class="badge badge-danger-100 text-danger">Delayed</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                            <i class="icon-menu7"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="mr-3">
                                            <img src="{{asset('template/limitless/global_assets/images/brands/shell.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                        </a>

                                        <div>
                                            <a href="#" class="text-body font-weight-semibold">Royal Dutch Shell</a>
                                            <div class="text-muted font-size-sm">May 25th</div>
                                        </div>
                                    </div>
                                </td>
                                <td>June 19th</td>
                                <td><img src="{{asset('template/limitless/global_assets/images/brands/ups.svg')}}" class="mr-1" width="20" alt=""> UPS Express</td>
                                <td><span class="badge badge-success-100 text-success">Delivered</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                            <i class="icon-menu7"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="mr-3">
                                            <img src="{{asset('template/limitless/global_assets/images/brands/tesla.svg')}}" class="rounded-circle" width="32" height="32" alt="">
                                        </a>

                                        <div>
                                            <a href="#" class="text-body font-weight-semibold">Tesla Inc.</a>
                                            <div class="text-muted font-size-sm">May 26th</div>
                                        </div>
                                    </div>
                                </td>
                                <td>June 21st</td>
                                <td><img src="{{asset('template/limitless/global_assets/images/brands/dpd.svg')}}" class="mr-1" width="20" alt=""> DPD</td>
                                <td><span class="badge badge-secondary-100 text-secondary">Processing</span></td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                            <i class="icon-menu7"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /latest orders -->


                <!-- Reports -->
                <div class="row">
                    <div class="col-lg-6">

                        <!-- Annual sales report -->
                        <div class="card">
                            <div class="card-header d-flex py-0">
                                <h6 class="card-title font-weight-semibold py-3">Annual sales report</h6>

                                <div class="dropdown align-self-center ml-auto">
                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill">
                                        <i class="icon-more2"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                        <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-primary-100 text-primary line-height-1 rounded p-2 mr-3">
													<i class="icon-stack3 top-0"></i>
												</span>
                                            <div>
                                                <h6 class="font-weight-bold mb-0">4,485</h6>
                                                <span class="text-muted">Campaigns</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-success-100 text-success line-height-1 rounded p-2 mr-3">
													<i class="icon-spinner11 top-0"></i>
												</span>
                                            <div>
                                                <h6 class="font-weight-bold mb-0">1,255</h6>
                                                <span class="text-muted">Leads</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="chart-container">
                                    <div class="chart" id="bars_grouped" style="height: 333px;"></div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Campaign</th>
                                        <th>Leads</th>
                                        <th>Rate</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                April campaign
                                                <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                            </div>
                                        </td>
                                        <td>4,890</td>
                                        <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 0.25%</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                Flash sale
                                                <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                            </div>
                                        </td>
                                        <td>1,896</td>
                                        <td><span class="text-danger"><i class="icon-arrow-down8 top-0 font-size-sm mr-1"></i> 1.2%</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                Up to 40% off
                                                <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                            </div>
                                        </td>
                                        <td>2,880</td>
                                        <td><span class="text-danger"><i class="icon-arrow-down8 top-0 font-size-sm mr-1"></i> 0.59%</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                Extended trial version
                                                <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                            </div>
                                        </td>
                                        <td>982</td>
                                        <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 1.05%</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                50% off second license
                                                <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                            </div>
                                        </td>
                                        <td>3,780</td>
                                        <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 0.58%</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                50% off second license
                                                <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                            </div>
                                        </td>
                                        <td>4,551</td>
                                        <td><span class="text-danger"><i class="icon-arrow-down8 top-0 font-size-sm mr-1"></i> 1.04%</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /annual sales report -->

                    </div>

                    <div class="col-lg-6">

                        <!-- Daily visitors report -->
                        <div class="card">
                            <div class="card-header d-flex py-0">
                                <h6 class="card-title font-weight-semibold py-3">Daily visitors report</h6>

                                <div class="dropdown align-self-center ml-auto">
                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill">
                                        <i class="icon-more2"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                        <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-indigo-100 text-indigo line-height-1 rounded p-2 mr-3">
													<i class="icon-user-plus top-0"></i>
												</span>
                                            <div>
                                                <h6 class="font-weight-bold mb-0">4,782</h6>
                                                <span class="text-muted">New users</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-indigo-100 text-indigo line-height-1 rounded p-2 mr-3">
													<i class="icon-user-check top-0"></i>
												</span>
                                            <div>
                                                <h6 class="font-weight-bold mb-0">6,478</h6>
                                                <span class="text-muted">Returned</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="chart-container">
                                    <div class="chart" id="line_label_marks" style="height: 333px;"></div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Browser</th>
                                        <th>Diff</th>
                                        <th>Count</th>
                                        <th>Share</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('template/limitless/global_assets/images/browsers/chrome.svg')}}" class="mr-2" alt=""
                                                     style="height: 32px;">
                                                Chrome
                                            </div>
                                        </td>
                                        <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 4.84%</span>
                                        </td>
                                        <td>728</td>
                                        <td>34.6%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('template/limitless/global_assets/images/browsers/firefox.svg')}}" class="mr-2" alt=""
                                                     style="height: 32px;">
                                                Firefox
                                            </div>
                                        </td>
                                        <td><span class="text-danger"><i class="icon-arrow-down8 top-0 font-size-sm mr-1"></i> 0.89%</span>
                                        </td>
                                        <td>550</td>
                                        <td>20.4%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('template/limitless/global_assets/images/browsers/edge.svg')}}" class="mr-2" alt=""
                                                     style="height: 32px;">
                                                Edge
                                            </div>
                                        </td>
                                        <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 2.86%</span>
                                        </td>
                                        <td>458</td>
                                        <td>15.5%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('template/limitless/global_assets/images/browsers/safari.svg')}}" class="mr-2" alt=""
                                                     style="height: 32px;">
                                                Safari
                                            </div>
                                        </td>
                                        <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 1.5%</span>
                                        </td>
                                        <td>690</td>
                                        <td>12.5%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('template/limitless/global_assets/images/browsers/opera.svg')}}" class="mr-2" alt=""
                                                     style="height: 32px;">
                                                Opera
                                            </div>
                                        </td>
                                        <td><span class="text-danger"><i class="icon-arrow-down8 top-0 font-size-sm mr-1"></i> 2.45%</span>
                                        </td>
                                        <td>886</td>
                                        <td>10.2%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /daily visitors report -->

                    </div>
                </div>
                <!-- /reports -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="https://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
						</span>

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                        <li class="nav-item"><a href="https://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                        <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->


    <!-- Right sidebar -->
    <div class="sidebar sidebar-light sidebar-right sidebar-expand-xl">

        <!-- Expand button -->
        <button type="button" class="btn btn-sidebar-expand sidebar-control sidebar-right-toggle">
            <i class="icon-arrow-left12"></i>
        </button>
        <!-- /expand button -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- Header -->
            <div class="sidebar-section sidebar-section-body d-flex align-items-start">
                <h5 class="font-weight-light mb-0">
                    Thursday
                    <span class="d-block">14<sup>th</sup> December</span>
                </h5>
                <div class="ml-auto">
                    <button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-right-toggle d-none d-xl-inline-flex">
                        <i class="icon-transmission"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-right-toggle d-xl-none">
                        <i class="icon-cross2"></i>
                    </button>
                </div>
            </div>
            <!-- /header -->


            <!-- Latest updates -->
            <div class="sidebar-section">
                <div class="sidebar-section-header">
                    <span class="font-weight-semibold">Latest updates</span>
                    <div class="list-icons ml-auto">
                        <a href="#sidebar-updates" class="list-icons-item" data-toggle="collapse">
                            <i class="icon-arrow-down12"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="sidebar-updates">
                    <div class="sidebar-section-body">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-pill border-2 btn-icon">
                                        <i class="icon-git-pull-request"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                    <div class="text-muted font-size-sm">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-warning text-warning rounded-pill border-2 btn-icon">
                                        <i class="icon-git-commit"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    Add full font overrides for popovers and tooltips
                                    <div class="text-muted font-size-sm">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-info text-info rounded-pill border-2 btn-icon">
                                        <i class="icon-git-branch"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
                                    <div class="text-muted font-size-sm">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-success text-success rounded-pill border-2 btn-icon">
                                        <i class="icon-git-merge"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
                                    <div class="text-muted font-size-sm">Dec 18, 18:36</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-pill border-2 btn-icon">
                                        <i class="icon-git-pull-request"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    Have Carousel ignore keyboard events
                                    <div class="text-muted font-size-sm">Dec 12, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /latest updates -->


            <!-- Quick settings -->
            <div class="sidebar-section">
                <div class="sidebar-section-header">
                    <span class="font-weight-semibold">Quick settings</span>
                    <div class="list-icons ml-auto">
                        <a href="#sidebar-filters" class="list-icons-item" data-toggle="collapse">
                            <i class="icon-arrow-down12"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="sidebar-filters">
                    <form class="sidebar-section-body" action="#">
                        <div class="form-group">
                            <label class="custom-control custom-switch custom-control-right mb-2">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-label position-static p-0">Desktop notifications</span>
                            </label>

                            <label class="custom-control custom-switch custom-control-right mb-2">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label position-static p-0">2 factor authentication</span>
                            </label>

                            <label class="custom-control custom-switch custom-control-right mb-2">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-label position-static p-0">Language detection</span>
                            </label>

                            <label class="custom-control custom-switch custom-control-right mb-2">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-label position-static p-0">System color theme</span>
                            </label>

                            <label class="custom-control custom-switch custom-control-right">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label position-static p-0">Extended user session</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /quick settings -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /right sidebar -->

</div>
<!-- /page content -->


<!-- Notifications -->
<div id="notifications" class="modal modal-right fade" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-transparent border-0 align-items-center">
                <h5 class="modal-title font-weight-semibold">Notifications</h5>
                <button type="button" class="btn btn-icon btn-light btn-sm border-0 rounded-pill ml-auto" data-dismiss="modal"><i class="icon-cross2"></i></button>
            </div>

            <div class="modal-body p-0">
                <div class="bg-light text-muted py-2 px-3">New notifications</div>
                <div class="p-3">
                    <div class="d-flex mb-3">
                        <a href="#" class="mr-3">
                            <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                        </a>
                        <div class="flex-1">
                            <a href="#" class="font-weight-semibold">James</a> has completed the task <a href="#">Submit documents</a> from <a href="#">Onboarding</a> list

                            <div class="bg-light border rounded p-2 mt-2">
                                <label class="custom-control custom-checkbox custom-control-inline mx-1">
                                    <input type="checkbox" class="custom-control-input" checked disabled>
                                    <del class="custom-control-label">Submit personal documents</del>
                                </label>
                            </div>

                            <div class="font-size-sm text-muted mt-1">2 hours ago</div>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <a href="#" class="mr-3">
                            <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                        </a>
                        <div class="flex-1">
                            <a href="#" class="font-weight-semibold">Margo</a> was added to <span class="font-weight-semibold">Customer enablement</span> channel by <a href="#">William Whitney</a>

                            <div class="font-size-sm text-muted mt-1">3 hours ago</div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="mr-3">
                            <div class="bg-danger-100 text-danger rounded-pill">
                                <i class="icon-undo position-static p-2"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            Subscription <a href="#">#466573</a> from 10.12.2021 has been cancelled. Refund case <a href="#">#4492</a> created

                            <div class="font-size-sm text-muted mt-1">4 hours ago</div>
                        </div>
                    </div>
                </div>

                <div class="bg-light text-muted py-2 px-3">Older notifications</div>
                <div class="p-3">
                    <div class="d-flex mb-3">
                        <a href="#" class="mr-3">
                            <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                        </a>
                        <div class="flex-1">
                            <a href="#" class="font-weight-semibold">Christine</a> commented on your community <a href="#">post</a> from 10.12.2021

                            <div class="font-size-sm text-muted mt-1">2 days ago</div>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <a href="#" class="mr-3">
                            <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                        </a>
                        <div class="flex-1">
                            <a href="#" class="font-weight-semibold">Mike</a> added 1 new file(s) to <a href="#">Product management</a> project

                            <div class="bg-light rounded p-2 mt-2">
                                <div class="d-flex align-items-center mx-1">
                                    <div class="mr-2">
                                        <i class="icon-file-pdf text-danger icon-2x position-static"></i>
                                    </div>
                                    <div class="flex-1">
                                        new_contract.pdf
                                        <div class="font-size-sm text-muted">112KB</div>
                                    </div>
                                    <div class="ml-2">
                                        <a href="#" class="btn btn-dark-100 text-body btn-icon btn-sm border-transparent rounded-pill">
                                            <i class="icon-arrow-down8"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="font-size-sm text-muted mt-1">1 day ago</div>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="mr-3">
                            <div class="bg-success-100 text-success rounded-pill">
                                <i class="icon-calendar3 position-static p-2"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            All hands meeting will take place coming Thursday at 13:45. <a href="#">Add to calendar</a>

                            <div class="font-size-sm text-muted mt-1">2 days ago</div>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <a href="#" class="mr-3">
                            <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                        </a>
                        <div class="flex-1">
                            <a href="#" class="font-weight-semibold">Nick</a> requested your feedback and approval in support request <a href="#">#458</a>

                            <div class="font-size-sm text-muted mt-1">3 days ago</div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="mr-3">
                            <div class="bg-primary-100 text-primary rounded-pill">
                                <i class="icon-people position-static p-2"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <span class="font-weight-semibold">HR department</span> requested you to complete internal survey by Friday

                            <div class="font-size-sm text-muted mt-1">3 days ago</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /notifications -->

</body>
</html>
