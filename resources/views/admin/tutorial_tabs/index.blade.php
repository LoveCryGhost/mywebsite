@extends('layouts.app')

@section('app-content')
    <!-- main navbar -->
    @include(config('template.admin.main_navbar'))
    <!-- /main navbar -->



    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
    @include(config('template.admin.main_sidebar'))
    <!-- /main sidebar -->


        <!-- Secondary sidebar -->
        <div class="sidebar sidebar-light sidebar-secondary sidebar-expand-xl">

            <div class="sidebar-content">
                @foreach($_this['adminTutorialTabs'] as $nav1 => $adminTutorialTab)
                <div class="sidebar-section">
                    <div class="sidebar-section-header">
                        <span class="font-weight-semibold">{{mb_strtoupper($nav1)}}</span>
                        <div class="list-icons ml-auto">
                            <a href="#{{str_replace(" ", "", $nav1)}}" class="list-icons-item" data-toggle="collapse">
                                <i class="icon-arrow-down12"></i>
                            </a>
                        </div>
                    </div>

                    <div class="collapse show" id="{{str_replace(" ", "", $nav1)}}">
                        <ul class="nav nav-sidebar my-2" data-nav-type="accordion">
                            @foreach($adminTutorialTab as $nav2 =>  $tabs)
                            <li class="nav-item {{$nav2 == request()->input('nav2')? "bg-primary":"" }}">
                                <a href="{{route('admin.tutorial_tabs@index', ['nav1' => $nav1,'nav2' => $nav2 ])}}" class="nav-link"><i class="icon-googleplus5"></i> {{$nav2}}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                @endforeach
            </div>

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
                                <h4 class="font-weight-semibold">{{mb_strtoupper(request()->input('nav1'))}}</h4>
                                <div class="text-muted">{{(request()->input('nav2'))}}</div>
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

                    <div class="row">
                        <div class="col-lg">
                            @if(request()->input('nav1') and request()->input('nav1'))

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-lg-flex">
                                                <ul class="nav nav-tabs nav-tabs-vertical flex-column mr-lg-3 wmin-lg-200 mb-lg-0 border-bottom-0">
                                                    @foreach($_this['adminTutorialTabs'][request()->input('nav1')][request()->input('nav2')] as $tab1 => $tabs)
                                                    <li class="nav-item"><a href="{{route('admin.tutorial_tabs@index', ['nav1' => request()->input('nav1'),'nav2' => request()->input('nav2'), 'tab1'=>$tab1 ])}}" class="nav-link

                                                            @if(request()->input('tab1')==null  and $loop->iteration == 1)
                                                                active
                                                            @elseif(request()->input('tab1') == $tab1)
                                                                active
                                                            @endif

                                                            "
                                                            {{--data-toggle="tab"--}}
                                                        ><i class="icon-menu7 mr-2"></i>
                                                        {{$tab1}}</a></li>
                                                    @endforeach
                                                </ul>

                                                <div class="tab-content flex-lg-fill">
                                                    @if(request()->input('tab1'))
                                                    @foreach($_this['adminTutorialTabs'][request()->input('nav1')][request()->input('nav2')][request()->input('tab1')] as $tab)
                                                        @php
                                                            $tab1= request()->input('tab1');
                                                        @endphp
                                                        <div class="tab-pane fade

                                                                    @if(request()->input('tab1')==null  and $loop->iteration == 1)
                                                                        show active
                                                                    @elseif(request()->input('tab1') == $tab1)
                                                                        show active
                                                                    @endif

                                                                    " id="{{str_replace(" ", "", $tab1)}}">

                                                            {{--看看檔案是否存在--}}
                                                            @php
                                                                $nav1 =  str_replace(" ", "_", request()->input('nav1'));
                                                                $nav2 =  str_replace(" ", "_", request()->input('nav2'));
                                                                    $base_path =  resource_path().'/views/admin/tutorial_tabs/';
                                                                    $path = mb_strtolower(str_replace(" ", "_", $base_path.$nav1));
                                                                    if(!File::exists($path)) {
                                                                        File::makeDirectory($path, 0777, true, true);
                                                                    }
                                                                   $path = mb_strtolower(str_replace(" ", "_", $base_path.$nav1.'/'.$nav2));
                                                                    if(!File::exists($path)) {
                                                                        File::makeDirectory($path, 0777, true, true);
                                                                    }

                                                                    $path_file = mb_strtolower(str_replace(" ", "_", $base_path.'/'.$nav1.'/'.$nav2.'/'.$tab1.'.blade.php'));
                                                                    if(!file_exists($path_file)){
                                                                        File::put($path_file,[]);
                                                                    }
                                                            @endphp

                                                            <div class="float-left">{{mb_strtoupper($tab1)}}</div>
                                                            <div class="float-right btn btn-light">
                                                                <a href="phpstorm://open?file={{$path_file}}"><i class="icon-embed2 mr-2"></i>Open Files</a>
                                                            </div>

                                                            <br>

                                                            @php
                                                                //$path_file = mb_strtolower(str_replace(" ", "_", $base_path.'/'.$nav1.'/'.$nav2.'/'.$tab1.'.blade.php'));
                                                                  $path_file = mb_strtolower(str_replace(" ", "_", 'admin/tutorial_tabs/'.$nav1.'/'.$nav2.'/'.$tab1));
                                                            @endphp

                                                            @if($tab[0]->code_method=="html")
                                                            <form  class="form-validate-jquery" method="post" action="{{route('admin.tutorial_tabs@tutorial_post', ['nav1' => request()->input('nav1'),'nav2' => request()->input('nav2'), 'tab1'=>$tab1 ])}}">
                                                                <button type="submit" class="form-control btn btn-primary ml-3">Submit  <i class="icon-paperplane ml-2"></i></button>

                                                                @include('admin.tutorial_tabs.token')
                                                                <br><br>


                                                                    @include($path_file)
                                                                        <button type="submit" class="form-control btn btn-primary ml-3">Submit  <i class="icon-paperplane ml-2"></i></button>
                                                                </form>
                                                            @else
                                                                <br><br>
                                                                <pre class="language-javascript">
                                                                    <code>
                                                                        //程式開始
                                                                        @php
                                                                            $path_file = mb_strtolower(str_replace(" ", "_", $base_path.'/'.$nav1.'/'.$nav2.'/'.$tab1.'.blade.php'));
                                                                            $content = File::get($path_file);
                                                                            $content = str_replace("<script>","",$content);
                                                                            $content = str_replace("</script>","",$content);
                                                                        @endphp
                                                                        {!! $content !!}
                                                                    </code>
                                                                </pre>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endif

                        </div>
                    </div>


                </div>
                <!-- /content area -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- main content -->



    </div>
    <!-- /page content -->


    <!-- Notifications -->
    @include(config('template.admin.notifications'))
    <!-- / Notifications -->
@endsection

@if(request()->has("_token"))
    var show_msg = "{{dd(request()->all(), request()->files)}}";
@endif
