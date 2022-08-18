<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <label>Basic select no Grouping With Placeholder</label>
                <label class="float-right">
                    data-placeholder="Select a State..." & [option] [/option]<br>
                </label>
                <select data-placeholder="Select a State..." class="form-control select" data-fouc
                        name="Basic-select-no-Grouping-With-Placeholder"
                >
                    <option></option>
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="WY">Wyoming</option>
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                </select>
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                <label>Basic select no Grouping</label>
                <select class="form-control select" data-fouc
                        name="Basic-select-no-Grouping"
                >
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                    </optgroup>
                </select>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <label>Basic select with Grouping</label>
                <label class="float-right">Select event => get-value</label>
                <select class="form-control select select2-access-get-value" data-fouc
                        name="Basic-select-with-Grouping">
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                    </optgroup>
                </select>
            </div>
        </div>

    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <label>Multiple select no Grouping Disabled</label>
                <label class="float-right">
                    Disable & Enable => select.disabled
                    <button type="button" class="btn btn-danger access-disable">Disable</button>
                    <button type="button" class="btn btn-danger access-enable">Enable</button>
                </label>
                <select multiple="multiple" class="form-control select select-access-enable" disabled data-fouc
                        name="Multiple-select-no-Grouping-Disabled">
                    <option value="AZ" selected>Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="WY">Wyoming</option>
                    <option value="AL">Alabama</option>
                    <option value="IA" selected>Iowa</option>
                    <option value="KS" selected>Kansas</option>
                    <option value="KY">Kentucky</option>
                </select>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <label>Multiple select with Grouping & select-multiple-drag</label>
                <label class="float-right">name="NAME[ ]"</label>
                <select multiple="multiple" class="form-control select select-multiple-drag" data-fouc
                        name="Multiple-select-with-Grouping-select-multiple-drag[]">
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ" selected>Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="IA" selected>Iowa</option>
                        <option value="KS" selected>Kansas</option>
                        <option value="KY">Kentucky</option>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <label>Select with search & select-multiple-drag</label>
                <select class="form-control select-search " data-fouc>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <label>Select with Loading</label>
                <select class="form-control select-remote-data" data-fouc>
                    <option value="3620194" selected>select2/select2</option>
                </select>
            </div>
        </div>

    </div>


</div>


<hr>




<script>
    $(function (){

        //Disable & Enable
        $('.access-disable').on('click', function () { $('.select-access-enable').prop('disabled', true); });
        $('.access-enable').on('click', function () { $('.select-access-enable').prop('disabled', false); });

        $('.select2-access-get-value').on('change', function () { alert('Selected value is: '+$('.select2-access-get-value').val()); });
        $('.select2-access-set-value').on('change', function () { alert('Selected value is: '+$('.select2-access-set-value').val()); });
    })
</script>

