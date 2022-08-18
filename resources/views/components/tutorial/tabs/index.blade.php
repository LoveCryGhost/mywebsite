<li class="nav-item mega-menu-full nav-item-dropdown-xl">
    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
        <i class="icon-make-group mr-2"></i>
        Tutorial Tabszzzz
    </a>
    <div class="dropdown-menu dropdown-content">
        <div class="d-xl-flex">
            <div class="d-flex flex-row flex-xl-column bg-light overflow-auto overflow-xl-visible rounded-top rounded-xl-top-0 rounded-xl-left">
                <div class="dropdown-content-body flex-1 border-bottom border-bottom-xl-0 py-2 py-xl-3">
                    <div class="font-weight-semibold border-bottom d-none d-xl-block pb-2 mb-2">Items</div>
                    <div class="nav flex-xl-column flex-nowrap justify-content-center wmin-xl-300">
                        <a href="#tab_flow_chart" class="list-group-item list-group-item-action rounded mr-2 mr-xl-0 active" data-toggle="tab">
                            <i class="icon-stack2 position-static pr-1 mr-2"></i>
                            FlowChart
                            <i class="icon-arrow-right8 position-static list-group-item-active-indicator d-none d-xl-inline-block ml-auto"></i>
                        </a>
                        <a href="#tab_scheduling" class="list-group-item list-group-item-action rounded mr-2 mr-xl-0" data-toggle="tab">
                            <i class="icon-list3 position-static pr-1 mr-2"></i>
                            Scheduling
                            <i class="icon-arrow-right8 position-static list-group-item-active-indicator d-none d-xl-inline-block ml-auto"></i>
                        </a>

                        <a href="#tab_styling" class="list-group-item list-group-item-action rounded mr-2 mr-xl-0" data-toggle="tab">
                            <i class="icon-paragraph-justify3 position-static pr-1 mr-2"></i>
                            Styling
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
                <div class="tab-pane dropdown-content-body dropdown-scrollable-xl fade active show" id="tab_flow_chart">
                    <div class="row">
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <div class="font-weight-semibold border-bottom pb-2 mb-2">Sections</div>
                            <a href="{{route('admin.tutorial_tabs@index')}}" class="dropdown-item rounded">xx</a>
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

                <div class="tab-pane dropdown-content-body dropdown-scrollable-xl fade" id="tab_styling">
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

                <div class="tab-pane dropdown-content-body dropdown-scrollable-xl fade" id="tab_scheduling">
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
