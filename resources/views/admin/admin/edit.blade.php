@extends('layouts.limitless.admin.admin_template')

@section('admin_template-content')
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

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Basic layout</h5>
        </div>

        <div class="card-body">
            <form method="post" action="{{route('admin.admin.update',['admin'=>Auth::guard('admin')->user()->id])}}">
                {{method_field('put')}}
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" placeholder="Your strong password">
                </div>

                <div class="form-group">
                    <label>Your state:</label>
                    <select class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK" data-select2-id="3">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="KY">Kentucky</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                        </optgroup>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-9wpz-container"><span class="select2-selection__rendered" id="select2-9wpz-container" role="textbox" aria-readonly="true" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>

                <div class="form-group">
                    <label class="d-block">Gender:</label>

                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="gender" checked="">
                        <span class="custom-control-label">Male</span>
                    </label>

                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="gender">
                        <span class="custom-control-label">Female</span>
                    </label>
                </div>

                <div class="form-group">
                    <label>Your avatar:</label>
                    <label class="custom-file">
                        <input type="file" class="custom-file-input">
                        <span class="custom-file-label">Choose file</span>
                    </label>
                    <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                </div>

                <div class="form-group">
                    <label>Tags:</label>
                    <select multiple="" data-placeholder="Enter tags" class="form-control form-control-select2-icons select2-hidden-accessible" data-fouc="" data-select2-id="31" tabindex="-1" aria-hidden="true">
                        <optgroup label="Services">
                            <option value="wordpress2" data-icon="wordpress2">Wordpress</option>
                            <option value="tumblr2" data-icon="tumblr2">Tumblr</option>
                            <option value="stumbleupon" data-icon="stumbleupon">Stumble upon</option>
                            <option value="pinterest2" data-icon="pinterest2">Pinterest</option>
                            <option value="lastfm2" data-icon="lastfm2">Lastfm</option>
                        </optgroup>
                        <optgroup label="File types">
                            <option value="pdf" data-icon="file-pdf">PDF</option>
                            <option value="word" data-icon="file-word">Word</option>
                            <option value="excel" data-icon="file-excel">Excel</option>
                            <option value="openoffice" data-icon="file-openoffice">Open office</option>
                        </optgroup>
                        <optgroup label="Browsers">
                            <option value="chrome" data-icon="chrome" selected="" data-select2-id="33">Chrome</option>
                            <option value="firefox" data-icon="firefox" selected="" data-select2-id="34">Firefox</option>
                            <option value="safari" data-icon="safari">Safari</option>
                            <option value="opera" data-icon="opera">Opera</option>
                            <option value="IE" data-icon="IE">IE</option>
                        </optgroup>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="32" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Chrome" data-select2-id="35"><span class="select2-selection__choice__remove" role="presentation">×</span><i class="icon-chrome"></i>Chrome</li><li class="select2-selection__choice" title="Firefox" data-select2-id="36"><span class="select2-selection__choice__remove" role="presentation">×</span><i class="icon-firefox"></i>Firefox</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>

                <div class="form-group">
                    <label>Your message:</label>
                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
