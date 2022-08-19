<li class="nav-item">
    <a href="{{route('admin.login')}}" class="navbar-nav-link navbar-nav-link-toggler pr-0">
        @if(Auth::guard("admin")->check())
            <span class="bg-success p-1 border-2 "> A-ok </span>
        @else
            <span class="bg-danger p-1 border-2 "> A-ok </span>
        @endif
    </a>
</li>

<li class="nav-item">
    <a href="{{route('user.login')}}" class="navbar-nav-link navbar-nav-link-toggler  pr-0">
        @if(Auth::guard("web")->check())
            <span class="bg-success p-1 border-2 "> U!t </span>
        @else
            <span class="bg-danger p-1 border-2 "> U!t </span>
        @endif

    </a>
</li>
{{--<li class="nav-item">--}}
{{--    <a href="#notifications" class="navbar-nav-link navbar-nav-link-toggler  pr-0">--}}
{{--        @if(Auth::guard("member")->check())--}}
{{--            <span class="bg-success p-1 border-2 "> M </span>--}}
{{--        @else--}}
{{--            <span class="bg-danger p-1 border-2 "> M </span>--}}
{{--        @endif--}}
{{--    </a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--    <a href="#notifications" class="navbar-nav-link navbar-nav-link-toggler  pr-0">--}}
{{--        @if(Auth::guard("staff")->check())--}}
{{--            <span class="bg-success p-1 border-2 "> S </span>--}}
{{--        @else--}}
{{--            <span class="bg-danger p-1 border-2 "> S </span>--}}
{{--        @endif--}}
{{--    </a>--}}
{{--</li>--}}
