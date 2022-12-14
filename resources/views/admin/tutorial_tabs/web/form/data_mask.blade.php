<div class="content">

    <!-- Typeahead -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Twitter typeahead</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Basic usage</h6>
                        <p class="mb-2">When initializing a typeahead, you pass the plugin method one or more datasets. The source of a dataset is responsible for computing a set of suggestions for a given query.</p>
                        <input type="text" class="form-control typeahead-basic" placeholder="States of USA">
                    </div>

                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Bloodhound engine</h6>
                        <p class="mb-2">For more advanced use cases, rather than implementing the source for your dataset yourself, you can take advantage of <code>Bloodhound</code>, the <code>typeahead.js</code> suggestion engine.</p>
                        <input type="text" class="form-control typeahead-bloodhound" placeholder="States of USA">
                    </div>

                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Prefetched data</h6>
                        <p class="mb-2">Prefetched data is fetched and processed on initialization. If the browser supports local storage, the processed data will be cached there to prevent additional network requests on subsequent page loads.</p>
                        <input type="text" class="form-control typeahead-prefetched" placeholder="Countries">
                    </div>

                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Remote data</h6>
                        <p class="mb-2">Remote data is only used when the data provided by local and prefetch is insufficient. In order to prevent an obscene number of requests being made to the remote endpoint, requests are rate-limited.</p>
                        <input type="text" class="form-control typeahead-remote" placeholder="Oscar winners for Best Picture">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Custom templates</h6>
                        <p class="mb-2">Custom templates give you full control over how suggestions get rendered making it easy to customize the look and feel of your typeahead. Requires <code>Handlebars.js</code> extension for compilation.</p>
                        <input type="text" class="form-control typeahead-custom-templates" placeholder="Oscar winners for Best Picture">
                    </div>

                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Multiple datasets</h6>
                        <p class="mb-2">Multiple datasets give you visually separated sets of data inside Dropdown menu with custom titles, managed in <code>templates</code> option. This looks like a <code>&lt;optgroup></code> titles in selects.</p>
                        <input type="text" class="form-control typeahead-multiple-datasets" placeholder="NBA and NHL teams">
                    </div>

                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Dropdown height</h6>
                        <p class="mb-2">To change the height of your dropdown menu, just wrap your input in some div with custom css styles and change necessary css properties or change it in css directly.</p>
                        <div class="typeahead-scrollable">
                            <input type="text" class="form-control typeahead-scrollable-menu" placeholder="Countries">
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="font-weight-semibold">RTL support</h6>
                        <p class="mb-2">Twitter Typeahead supports <code>RTL</code> direction. Wrap your input in any div with <code>text-align: right;</code> property and add <code>dir="rtl"</code> to your input, now your dropdown menu is right aligned.</p>
                        <input type="text" class="form-control typeahead-rtl-support" dir="rtl" placeholder="??????">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /typeahead -->


    <!-- Elastic textarea -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Elastic textarea</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Basic example</h6>
                        <p class="mb-3">Drop Autosize into any existing website and it should Just Work???. The source is short and well commented if you are curious to how it works.</p>

                        <div class="form-group">
                            <textarea rows="4" cols="4" class="form-control elastic" placeholder="Textarea"></textarea>
                        </div>

                        <button type="button" class="btn btn-primary">Submit form</button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Manual triggering</h6>
                        <p class="mb-3">When the value of a textarea has been changed through JavaScript, trigger the <code>autosize.resize</code> event immediately after to update the height.</p>

                        <div class="form-group">
                            <textarea rows="4" cols="4" class="form-control elastic elastic-manual" placeholder="Press 'Trigger Manually' button"></textarea>
                        </div>

                        <button type="button" class="btn btn-primary elastic-manual-trigger">Trigger manually</button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Removing autosize</h6>
                        <p class="mb-3">Trigger the <code>autosize.destroy</code> event to remove autosize from a textarea element. Once <code>destroy</code> button clicked, autosize will be removed.</p>

                        <div class="form-group">
                            <textarea rows="4" cols="4" class="form-control elastic elastic-destroy" placeholder="Press 'Destroy' button to remove autosize"></textarea>
                        </div>

                        <button type="button" class="btn btn-primary elastic-destroy-trigger">Destroy Autosize</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /elastic textarea -->


    <!-- Masked inputs -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Masked inputs</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Date: </label>
                        <input type="text" class="form-control" data-mask="99/99/9999" placeholder="Enter starting date">
                        <span class="form-text text-muted">99/99/9999</span>
                    </div>

                    <div class="form-group">
                        <label>Phone: </label>
                        <input type="text" class="form-control" data-mask="(999) 99999-9999" placeholder="Enter your phone #">
                        <span class="form-text text-muted">(999) 999-9999</span>
                    </div>

                    <div class="form-group">
                        <label>Phone + Ext: </label>
                        <input type="text" class="form-control" data-mask="(999) 999-9999 / x99999" placeholder="Enter your phone #">
                        <span class="form-text text-muted">(999) 999-9999 / x99999</span>
                    </div>

                    <div class="form-group">
                        <label>Currency: </label>
                        <input type="text" class="form-control" data-mask="$999" placeholder="Enter amount in USD">
                        <span class="form-text text-muted">$999</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label>International format: </label>
                        <input type="text" class="form-control" data-mask="+39 999 999 999" placeholder="Enter your phone in international format">
                        <span class="form-text text-muted">+39 999 999 999</span>
                    </div>

                    <div class="form-group">
                        <label>Tax ID: </label>
                        <input type="text" class="form-control" data-mask="99-9999999" placeholder="Enter your tax id">
                        <span class="form-text text-muted">99-9999999</span>
                    </div>

                    <div class="form-group">
                        <label>SSN: </label>
                        <input type="text" class="form-control" data-mask="999-99-9999" placeholder="Enter your social security number">
                        <span class="form-text text-muted">999-99-9999</span>
                    </div>

                    <div class="form-group">
                        <label>Credit card: </label>
                        <input type="text" class="form-control" data-mask="9999-9999-9999-9999" placeholder="Enter your credit card number">
                        <span class="form-text text-muted">9999-9999-9999-9999</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Product key: </label>
                        <input type="text" class="form-control" data-mask="a*-999-a999" placeholder="Enter your product key">
                        <span class="form-text text-muted">a*-999-a999</span>
                    </div>

                    <div class="form-group">
                        <label>Purchase order: </label>
                        <input type="text" class="form-control" data-mask="aaa-999-***" placeholder="Enter your order #">
                        <span class="form-text text-muted">aaa-999-***</span>
                    </div>

                    <div class="form-group">
                        <label>Percentage: </label>
                        <input type="text" class="form-control" data-mask="99%" placeholder="Enter value in %">
                        <span class="form-text text-muted">99%</span>
                    </div>

                    <div class="form-group">
                        <label>ISBN: </label>
                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="Enter your ISBN">
                        <span class="form-text text-muted">999-99-999-9999-9</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /masked inputs -->


    <!-- Input formatter -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Input formatter</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Date: </label>
                        <input type="text" class="form-control" name="format-date" placeholder="Enter starting date">
                        <span class="form-text text-muted">99/99/9999</span>
                    </div>

                    <div class="form-group">
                        <label>Phone number: </label>
                        <input type="text" class="form-control format-phone-number" placeholder="Enter your phone number">
                        <span class="form-text text-muted">(999) 999 - 9999</span>
                    </div>

                    <div class="form-group">
                        <label>Phone + Ext: </label>
                        <input type="text" class="form-control" name="format-phone-ext" placeholder="Enter your phone number">
                        <span class="form-text text-muted">(999) 999-9999 / a999</span>
                    </div>

                    <div class="form-group">
                        <label>Currency: </label>
                        <input type="text" class="form-control" name="format-currency" placeholder="Enter amount in USD">
                        <span class="form-text text-muted">$999.99</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label>International format: </label>
                        <input type="text" class="form-control" name="format-international-phone" placeholder="Enter your phone in international format">
                        <span class="form-text text-muted">+39 999 999 999</span>
                    </div>

                    <div class="form-group">
                        <label>Tax ID: </label>
                        <input type="text" class="form-control" name="format-tax-id" placeholder="Enter your tax id">
                        <span class="form-text text-muted">99 - 9999999</span>
                    </div>

                    <div class="form-group">
                        <label>SSN: </label>
                        <input type="text" class="form-control" name="format-ssn" placeholder="Enter your social security number">
                        <span class="form-text text-muted">999 - 99 - 9999</span>
                    </div>

                    <div class="form-group">
                        <label>Credit card: </label>
                        <input type="text" class="form-control" name="format-credit-card" placeholder="Enter your credit card number">
                        <span class="form-text text-muted">9999 - 9999 - 9999 - 9999</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Product key: </label>
                        <input type="text" class="form-control" name="format-product-key" placeholder="Enter your product key">
                        <span class="form-text text-muted">a* - 999 - a999</span>
                    </div>

                    <div class="form-group">
                        <label>Order number: </label>
                        <input type="text" class="form-control" name="format-order-number" placeholder="Enter your order #">
                        <span class="form-text text-muted">aaa - 999 - ***</span>
                    </div>

                    <div class="form-group">
                        <label>ISBN: </label>
                        <input type="text" class="form-control" name="format-isbn" placeholder="Enter your ISBN">
                        <span class="form-text text-muted">999 - 99 - 999 - 9999 - 9</span>
                    </div>

                    <div class="form-group">
                        <label>Visible formatted characters: </label>
                        <input type="text" class="form-control" name="format-persistent" placeholder="Enter your phone #">
                        <span class="form-text text-muted">+3 (999) 999-99-99</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /input formatter -->


    <!-- Password generator -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Password generator</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Checker inside badge</h6>
                        <p class="mb-3">Password checker is attached to the badge, which appears below the input field. Empty badge is hidden, if you add any text inside badge, it'll stay visible.</p>

                        <div class="form-group">
                            <div class="badge-indicator">
                                <input type="text" class="form-control" placeholder="Enter your password">
                                <span class="badge form-text password-indicator-badge"></span>
                            </div>
                        </div>

                        <button type="button" class="btn btn-info generate-badge">Generate 12 characters password</button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Label inside input</h6>
                        <p class="mb-3">Rules are the same as for password checker inside badge, but this one has absolute position and placed inside <code>form-group</code>. Empty badge is also hidden.</p>

                        <div class="form-group">
                            <div class="badge-indicator-absolute">
                                <input type="text" class="form-control" placeholder="Enter your password">
                                <span class="badge password-indicator-badge-absolute"></span>
                            </div>
                        </div>

                        <button type="button" class="btn btn-info generate-badge-absolute">Generate 10 characters password</button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Label inside addon</h6>
                        <p class="mb-3">In this example password checker appears as input group <code>text addon</code>. Can be left and/or right aligned, supports all input group styles. Styles can be adjusted in JS config.</p>

                        <div class="form-group">
                            <div class="input-group group-indicator">
                                <input type="text" class="form-control" placeholder="Enter your password">
                                <span class="input-group-append">
													<span class="input-group-text">No password</span>
												</span>
                            </div>
                        </div>

                        <button type="button" class="btn btn-info generate-group">Generate 8 characters password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /password generator -->


    <!-- Bootstrap maxlength -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Bootstrap maxlength</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Basic example</h6>
                        <p class="mb-2">Basic example of maxlength plugin. The badge will show up right below the input by default when the remaining chars are 10 or less. This is a default value and position.</p>
                        <div>
                            <input type="text" class="form-control maxlength" maxlength="20" placeholder="Type 10 characters...">
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Label position</h6>
                        <p class="mb-2">The field counter can be positioned at the top, bottom, left or right via <code>placement</code> option. You can also place the maxlength indicator on the corners: bottom-right, top-right, top-left, bottom-left and centered-right.</p>
                        <div>
                            <input type="text" class="form-control maxlength-badge-position pr-5" maxlength="20" placeholder="Centered right position">
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Full featured</h6>
                        <p class="mb-2">This is a complete example where all the options configured for the bootstrap-maxlength counter are setted. <strong>Please note:</strong> if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.</p>
                        <div>
                            <input type="text" class="form-control maxlength-options" maxlength="20" placeholder="Always visible with custom text">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Change the threshold value</h6>
                        <p class="mb-2">Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option. In this example badge appears when the remaining chars are <code>15</code> or less.</p>
                        <div>
                            <input type="text" class="form-control maxlength-threshold" maxlength="20" placeholder="Type 5 characters...">
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Custom options</h6>
                        <p class="mb-2">Example with custom options. All options can be mixed: here badge will show up after entering 10 characters, badge has different color and shows up after the limit is reached.</p>
                        <div>
                            <input type="text" class="form-control maxlength-custom" maxlength="20" placeholder="With Primary and Danger badges">
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Textarea example</h6>
                        <p class="mb-2">Bootstrap maxlength supports textarea as well as inputs. Even on old IE. Maxlength, attached to the textarea supports all available options and settings by default.</p>
                        <div>
                            <textarea rows="3" cols="3" maxlength="225" class="form-control maxlength-textarea" placeholder="This textarea has a limit of 225 chars."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bootstrap maxlength -->

</div>
