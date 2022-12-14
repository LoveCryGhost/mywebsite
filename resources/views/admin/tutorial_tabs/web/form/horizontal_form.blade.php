<!-- Horizontal form options -->
<div class="row">
    <div class="col-lg-6">

        <!-- Basic layout-->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Basic layout</h5>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Name:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Eugene Kopyov">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Password:</label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Your state:</label>
                        <div class="col-lg-8">
                            <select class="form-control form-control-select2" data-fouc>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
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
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Gender:</label>
                        <div class="col-lg-8">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="gender" checked>
                                <span class="custom-control-label">Male</span>
                            </label>

                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="gender">
                                <span class="custom-control-label">Female</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Your avatar:</label>
                        <div class="col-lg-8">
                            <label class="custom-file">
                                <input type="file" class="custom-file-input">
                                <span class="custom-file-label">Choose file</span>
                            </label>
                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Tags:</label>
                        <div class="col-lg-8">
                            <select multiple="multiple" data-placeholder="Enter tags" class="form-control form-control-select2-icons" data-fouc>
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
                                    <option value="chrome" data-icon="chrome" selected>Chrome</option>
                                    <option value="firefox" data-icon="firefox" selected>Firefox</option>
                                    <option value="safari" data-icon="safari">Safari</option>
                                    <option value="opera" data-icon="opera">Opera</option>
                                    <option value="IE" data-icon="IE">IE</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Your message:</label>
                        <div class="col-lg-8">
                            <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>

    <div class="col-lg-6">

        <!-- Static mode -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Static mode</h5>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Name:</label>
                        <div class="col-lg-8">
                            <div class="form-control-plaintext">Eugene Kopyov</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Password:</label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" readonly value="********">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Your state:</label>
                        <div class="col-lg-8">
                            <select class="form-control form-control-select2" disabled data-fouc>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV" selected>Nevada</option>
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
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Gender:</label>
                        <div class="col-lg-8">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="gender-disabled" disabled checked>
                                <span class="custom-control-label">Male</span>
                            </label>

                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="gender-disabled" disabled>
                                <span class="custom-control-label">Female</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Your avatar:</label>
                        <div class="col-lg-8">
                            <div class="media mt-0">
                                <div class="mr-3">
                                    <a href="#">
                                        <img src="{{asset('template/limitless/global_assets/images/placeholders/placeholder.jpg')}}" width="60" height="60" class="rounded-pill" alt="">
                                    </a>
                                </div>

                                <div class="media-body">
                                    <label class="custom-file">
                                        <input type="file" class="custom-file-input" disabled>
                                        <span class="custom-file-label">Choose file</span>
                                    </label>
                                    <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Tags:</label>
                        <div class="col-lg-8">
                            <select multiple="multiple" disabled data-placeholder="Enter tags" class="form-control form-control-select2-icons" data-fouc>
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
                                    <option value="chrome" data-icon="chrome" selected>Chrome</option>
                                    <option value="firefox" data-icon="firefox" selected>Firefox</option>
                                    <option value="safari" data-icon="safari">Safari</option>
                                    <option value="opera" data-icon="opera">Opera</option>
                                    <option value="IE" data-icon="IE">IE</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Your message:</label>
                        <div class="col-lg-8">
                            <div class="form-control-plaintext">
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /static mode -->

    </div>
</div>
<!-- /vertical form options -->


<!-- Centered forms -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h5 class="card-title">Centered form</h5>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Enter your name:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Enter your password:</label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Select your state:</label>
                                <div class="col-lg-8">
                                    <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Attach screenshot:</label>
                                <div class="col-lg-8">
                                    <label class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <span class="custom-file-label">Choose file</span>
                                    </label>
                                    <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Your message:</label>
                                <div class="col-lg-8">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Centered card</h5>
                    </div>

                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Enter your name:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Enter your password:</label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Select your state:</label>
                                <div class="col-lg-8">
                                    <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
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
                                            <option value="ID">Idaho</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Attach screenshot:</label>
                                <div class="col-lg-8">
                                    <label class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <span class="custom-file-label">Choose file</span>
                                    </label>
                                    <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Your message:</label>
                                <div class="col-lg-8">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /form centered -->


<!-- Fieldset legend -->
<div class="row">
    <div class="col-lg-6">

        <!-- Basic legend -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Basic legend</h5>
            </div>

            <div class="card-body">
                <form action="#">
                    <fieldset>
                        <legend class="font-weight-semibold">Enter your information</legend>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Enter your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Enter your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Repeat password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Repeat password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="font-weight-semibold">Add personal details</legend>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Your country:</label>
                            <div class="col-lg-8">
                                <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
                                    <option value="USA">USA</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="...">...</option>
                                    <option value="Australia">Australia</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Select your state:</label>
                            <div class="col-lg-8">
                                <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
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
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Gender:</label>
                            <div class="col-lg-8">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="gender2" checked>
                                    <span class="custom-control-label">Male</span>
                                </label>

                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="gender2">
                                    <span class="custom-control-label">Female</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Your CV:</label>
                            <div class="col-lg-8">
                                <label class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <span class="custom-file-label">Choose file</span>
                                </label>
                                <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">About yourself:</label>
                            <div class="col-lg-8">
                                <textarea rows="5" cols="5" placeholder="Few words about yourself..." class="form-control"></textarea>
                            </div>
                        </div>
                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic legend -->

    </div>

    <div class="col-lg-6">

        <!-- Advanced legend -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Advanced legend</h5>
            </div>

            <div class="card-body">
                <form action="#">
                    <fieldset>
                        <legend class="font-weight-semibold">
                            <i class="icon-file-text2 mr-2"></i>
                            Enter your information
                            <a class="float-right text-body" data-toggle="collapse" data-target="#demo1">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse show" id="demo1">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Enter your name:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Enter your password:</label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Repeat password:</label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" placeholder="Repeat password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Your message:</label>
                                <div class="col-lg-8">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="font-weight-semibold">
                            <i class="icon-reading mr-2"></i>
                            Add personal details
                            <a class="float-right text-body" data-toggle="collapse" data-target="#demo2">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse show" id="demo2">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Your country:</label>
                                <div class="col-lg-8">
                                    <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
                                        <option value="USA">USA</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="...">...</option>
                                        <option value="Australia">Australia</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Select your state:</label>
                                <div class="col-lg-8">
                                    <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
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
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Gender:</label>
                                <div class="col-lg-8">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="gender3" checked>
                                        <span class="custom-control-label">Male</span>
                                    </label>

                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="gender3">
                                        <span class="custom-control-label">Female</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Your CV:</label>
                                <div class="col-lg-8">
                                    <label class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <span class="custom-file-label">Choose file</span>
                                    </label>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">About yourself:</label>
                                <div class="col-lg-8">
                                    <textarea rows="5" cols="5" placeholder="Few words about yourself..." class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /a legend -->

    </div>
</div>
<!-- /fieldset legend -->

<!-- 2 columns form -->
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Multiple columns</h5>
    </div>

    <div class="card-body">
        <form action="#">
            <div class="row">
                <div class="col-lg-6">
                    <fieldset>
                        <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Personal details</legend>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Enter your name:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Enter your password:</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Select your state:</label>
                            <div class="col-lg-8">
                                <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
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
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Attach screenshot:</label>
                            <div class="col-lg-8">
                                <label class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <span class="custom-file-label">Choose file</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Your message:</label>
                            <div class="col-lg-8">
                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="col-lg-6">
                    <fieldset>
                        <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Shipping details</legend>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Your name:</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="First name" class="form-control">
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Last name" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Email:</label>
                            <div class="col-lg-8">
                                <input type="text" placeholder="eugene@kopyov.com" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Phone #:</label>
                            <div class="col-lg-8">
                                <input type="text" placeholder="+99-99-9999-9999" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Location:</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">Canada</option>
                                                <option value="2">USA</option>
                                                <option value="3">Australia</option>
                                                <option value="4">Germany</option>
                                            </select>
                                        </div>

                                        <input type="text" placeholder="ZIP code" class="form-control">
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" placeholder="State/Province" class="form-control mb-3">
                                        <input type="text" placeholder="City" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Address:</label>
                            <div class="col-lg-8">
                                <input type="text" placeholder="Your address of living" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Additional message:</label>
                            <div class="col-lg-8">
                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- /2 columns form -->

<script>
    $(function(){
        // Basic example
        $('.form-control-select2').select2();

        // Format icon
        function iconFormat(icon) {
            var originalOption = icon.element;
            if (!icon.id) { return icon.text; }
            var $icon = "<i class='icon-" + $(icon.element).data('icon') + "'></i>" + icon.text;

            return $icon;
        }

        // Initialize with options
        $('.form-control-select2-icons').select2({
            templateResult: iconFormat,
            minimumResultsForSearch: Infinity,
            templateSelection: iconFormat,
            escapeMarkup: function(m) { return m; }
        });
    })
</script>
