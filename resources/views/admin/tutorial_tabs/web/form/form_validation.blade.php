

<!-- Form validation -->
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Form validation</h5>
    </div>

    <div class="card-body">
        <p class="mb-4">Validate.js makes simple clientside form validation easy, whilst still offering plenty of customization options. The plugin comes bundled with a useful set of validation methods, including URL and email validation, while providing an API to write your own methods. All bundled methods come with default error messages in english and translations into 37 other languages. <strong>Note:</strong> <code>success</code> callback is configured for demo purposes only and can be removed in validation setup.</p>

{{--        <form class="form-validate-jquery" action="#">--}}
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold border-bottom">Basic inputs</legend>

                <!-- Basic text input -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Basic text input <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="basic" class="form-control" required placeholder="Text input validation">
                    </div>
                </div>
                <!-- /basic text input -->


                <!-- Input with icons -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Input with icon <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-group-feedback form-group-feedback-right">
                            <input type="text" name="with_icon" class="form-control" required placeholder="Text input with icon validation">
                            <div class="form-control-feedback">
                                <i class="icon-droplets"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input with icons -->


                <!-- Input group -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Input group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-mention"></i></span>
                            </div>
                            <input type="text" name="input_group" class="form-control" required placeholder="Input group validation">
                        </div>
                    </div>
                </div>
                <!-- /input group -->


                <!-- Password field -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Password field <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="password" name="password" id="password" class="form-control" required placeholder="Minimum 5 characters allowed">
                    </div>
                </div>
                <!-- /password field -->


                <!-- Repeat password -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Repeat password <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="password" name="repeat_password" class="form-control" required placeholder="Try different password">
                    </div>
                </div>
                <!-- /repeat password -->


                <!-- Email field -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Email field <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="email" name="email" class="form-control" id="email" required placeholder="Enter a valid email address">
                    </div>
                </div>
                <!-- /email field -->


                <!-- Repeat email -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Repeat email <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="email" name="repeat_email" class="form-control" required placeholder="Enter a valid email address">
                    </div>
                </div>
                <!-- /repeat email -->


                <!-- Minimum characters -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Minimum characters <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="minimum_characters" class="form-control" required placeholder="Enter at least 10 characters">
                    </div>
                </div>
                <!-- /minimum characters -->


                <!-- Maximum characters -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Maximum characters <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="maximum_characters" class="form-control" required placeholder="Enter 10 characters maximum">
                    </div>
                </div>
                <!-- /maximum characters -->


                <!-- Minimum number -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Minimum number <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="minimum_number" class="form-control" required placeholder="Enter a value greater than or equal to 10">
                    </div>
                </div>
                <!-- /minimum number -->


                <!-- Maximum number -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Maximum number <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="maximum_number" class="form-control" required placeholder="Please enter a value less than or equal to 10">
                    </div>
                </div>
                <!-- /maximum number -->


                <!-- Basic textarea -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Basic textarea <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <textarea rows="5" cols="5" name="textarea" class="form-control" required placeholder="Default textarea"></textarea>
                    </div>
                </div>
                <!-- /basic textarea -->

            </fieldset>

            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold border-bottom">Advanced inputs</legend>

                <!-- Number range -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Number range <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="number_range" class="form-control" required placeholder="Enter a value between 10 and 20">
                    </div>
                </div>
                <!-- /number range -->


                <!-- Touchspin spinners -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Touchspin spinner <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="touchspin" value="" required class="form-control touchspin-postfix" placeholder="Not valid if empty">
                    </div>
                </div>
                <!-- /touchspin spinners -->


                <!-- Custom message -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Custom message <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="custom" class="form-control" required placeholder="Custom error message">
                    </div>
                </div>
                <!-- /custom message -->


                <!-- URL validation -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">URL validation <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="url" class="form-control" required placeholder="Enter a valid URL address">
                    </div>
                </div>
                <!-- /url validation -->


                <!-- Date validation -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Date validation <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="date" class="form-control" required placeholder="April, 2014 or any other date format">
                    </div>
                </div>
                <!-- /date validation -->


                <!-- ISO date validation -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">ISO date validation <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="date_iso" class="form-control" required placeholder="YYYY/MM/DD or any other ISO date format">
                    </div>
                </div>
                <!-- /iso date validation -->


                <!-- Numbers only -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Numbers only <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="numbers" class="form-control" required placeholder="Enter decimal number only">
                    </div>
                </div>
                <!-- /numbers only -->


                <!-- Digits only -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Digits only <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="digits" class="form-control" required placeholder="Enter digits only">
                    </div>
                </div>
                <!-- /digits only -->


                <!-- Credit card validation -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Credit card validation <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="card" class="form-control" required placeholder="Enter credit card number. Try 446-667-651">
                    </div>
                </div>
                <!-- /credit card validation -->


                <!-- Basic file uploader -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Basic file uploader <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="file" name="unstyled_file" class="form-control h-auto" required>
                    </div>
                </div>
                <!-- /basic file uploader -->


                <!-- Styled file uploader -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Styled file uploader <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input required" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <!-- /styled file uploader -->


                <!-- Basic select -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Basic select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select name="default_select" class="form-control" required>
                            <option value="">Choose an option</option>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
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
                        </select>
                    </div>
                </div>
                <!-- /basic select -->


                <!-- Styled select -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Styled select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select name="styled_select" class="custom-select" required>
                            <option value="">Choose an option</option>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
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
                        </select>
                    </div>
                </div>
                <!-- /styled asic select -->


                <!-- Select2 select -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Select2 select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select name="select2" data-placeholder="Select a State..." class="form-control form-control-select2" required data-fouc>
                            <option></option>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <!-- /select2 select -->


                <!-- Multiple select -->
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">Multiple select <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select name="default_multiple_select" class="form-control" multiple required>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <!-- /multiple select -->

            </fieldset>

            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold border-bottom">Checkboxes and radios</legend>

                <!-- Basic single checkbox -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Basic single checkbox <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="single_basic_checkbox" required>
                                Accept our terms
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /basic singlecheckbox -->


                <!-- Basic checkbox group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Basic checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="basic_checkbox" required>
                                Duis eget nibh purus
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="basic_checkbox">
                                Maecenas non nulla ac nunc
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="basic_checkbox">
                                Maecenas egestas tristique
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /basic checkbox group -->


                <!-- Inline checkbox group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Basic inline checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="basic_inline_checkbox" required>
                                Duis eget nibh purus
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="basic_inline_checkbox">
                                Maecenas non nulla ac nunc
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /inline checkbox group -->


                <!-- Basic radio group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Basic radio group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="basic_radio" required>
                                Cras leo turpis malesuada eget
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="basic_radio">
                                Maecenas congue justo vel ipsum
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /basic radio group -->


                <!-- Basic inline radio group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Basic inline radio group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="basic_radio_group" required>
                                Cras leo turpis malesuada eget
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="basic_radio_group">
                                Maecenas congue justo vel ipsum
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /basic inline radio group -->


                <hr class="mb-4">


                <!-- Single styled checkbox -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Single styled checkbox <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="single_styled_checkbox" required>
                            <span class="custom-control-label">Accept our terms</span>
                        </label>
                    </div>
                </div>
                <!-- /single styled checkbox -->


                <!-- Styled checkbox group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Styled checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <label class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" name="styled_checkbox" required>
                            <span class="custom-control-label">Duis eget nibh purus</span>
                        </label>

                        <label class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" name="styled_checkbox" required>
                            <span class="custom-control-label">Maecenas non nulla ac nunc</span>
                        </label>

                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="styled_checkbox" required>
                            <span class="custom-control-label">Maecenas egestas tristique</span>
                        </label>
                    </div>
                </div>
                <!-- /styled checkbox group -->


                <!-- Inline checkbox group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Inline checkbox group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <label class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="styled_inline_checkbox" required>
                            <span class="custom-control-label">Duis eget nibh purus</span>
                        </label>

                        <label class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="styled_inline_checkbox">
                            <span class="custom-control-label">Maecenas non nulla ac nunc</span>
                        </label>
                    </div>
                </div>
                <!-- /inline checkbox group -->


                <!-- Styled radio group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Styled radio group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <label class="custom-control custom-radio mb-2">
                            <input type="radio" class="custom-control-input" name="styled_radio" required>
                            <span class="custom-control-label">Cras leo turpis malesuada eget</span>
                        </label>

                        <label class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="styled_radio">
                            <span class="custom-control-label">Maecenas congue justo vel ipsum</span>
                        </label>
                    </div>
                </div>
                <!-- /styled radio group -->


                <!-- Styled inline radio group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Styled inline radio group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="styled_inline_radio" required>
                            <span class="custom-control-label">Cras leo turpis malesuada eget</span>
                        </label>

                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="styled_inline_radio">
                            <span class="custom-control-label">Maecenas congue justo vel ipsum</span>
                        </label>
                    </div>
                </div>
                <!-- /styled inline radio group -->

            </fieldset>

            <fieldset>
                <legend class="text-uppercase font-size-sm font-weight-bold border-bottom">Switch components</legend>

                <!-- Switch single -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Swichery single <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <label class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" name="switch_single" required>
                            <span class="custom-control-label">Accept our terms</span>
                        </label>
                    </div>
                </div>
                <!-- /switch single -->


                <!-- Switch group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Swichery group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <label class="custom-control custom-switch mb-2">
                            <input type="checkbox" class="custom-control-input" name="switch_group" required>
                            <span class="custom-control-label">Duis eget nibh purus</span>
                        </label>

                        <label class="custom-control custom-switch mb-2">
                            <input type="checkbox" class="custom-control-input" name="switch_group">
                            <span class="custom-control-label">Maecenas non nulla ac nunc</span>
                        </label>

                        <label class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" name="switch_group">
                            <span class="custom-control-label">Maecenas egestas tristique</span>
                        </label>
                    </div>
                </div>
                <!-- /switch group -->


                <!-- Inline switch group -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label pt-0">Inline swichery group <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <label class="custom-control custom-switch custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="inline_switch_group" required>
                            <span class="custom-control-label">Duis eget nibh purus</span>
                        </label>

                        <label class="custom-control custom-switch custom-control-inline">
                            <input type="checkbox" class="custom-control-input" name="inline_switch_group">
                            <span class="custom-control-label">Maecenas egestas tristique</span>
                        </label>
                    </div>
                </div>
                <!-- /inline switch group -->

            </fieldset>

            <div class="d-flex justify-content-end align-items-center">
                <button type="reset" class="btn btn-light" id="reset">Reset <i class="icon-reload-alt ml-2"></i></button>
                <button type="submit" class="btn btn-primary ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
            </div>
{{--        </form>--}}
    </div>
</div>
<!-- /form validation -->
<script>
    $(function (){
    })
</script>
<script src="{{asset('template/limitless/global_assets/js/demo_pages/form_validation.js')}}"></script>
