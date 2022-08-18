(function($){
    $.fn.crud_indexList = function(options){
        //建立一些預設值
        var defaultSettings = {
            page_records : 10,
            crud_buttons : ['multiEdit', 'multiCreate', 'multiDelete', 'multiPrint'],
            multiCRUDButtons:['.multiCRUDButtons_modalMultiEdit',
                '.multiCRUDButtons_modalMultiDestroy', '.multiCRUDButtons_modalMultiPrint'],
            multiCRUDButtons_always_show:[
                '.multiCRUDButtons_modalMultiCreate',
                '.multiCRUDButtons_modalCreate'
            ],
            routes : {},
            _token : "",

            initialize : function( options ) {
                //console.log(settings.routes);
                table = $(this);
                //重新編號
                settings.reorderTableNo.call(this);

                var forms = document.querySelectorAll('.needs-validation');
                settings.formValidation.call(this, forms);
            },

            reorderTableNo: function (){

                index=1;
                table.children().find('tbody tr').each(function (){
                    $(this).children('td:eq(0)').html(index);
                    index=index+1;
                });
            },
            reorderModalTableNo: function (){
                _table = $('#modal_full').children().find('table.crud-table');
                index=1;
                _table.children('tbody').find('tr').each(function (){
                    console.log(index);
                    $(this).children('td:eq(0)').html(index);
                    index=index+1;
                });
            },
            initMultiSelect: function( options ) {
                //selectAll checked
                table.find('.indexList_selectAll').click(function (){
                    if($(this).is(':checked')){
                        table.children().find('.indexList_select').prop('checked',true);
                    }else{
                        table.children().find('.indexList_select').prop('checked',false);
                    }
                })
                //select check and uncheck
                table.children().find('.indexList_select').unbind().click(function (){
                    select_items = table.children().find('.indexList_select').length;
                    select_items_selected = table.children().find('.indexList_select:checked').length;
                    if(select_items===select_items_selected){
                        table.find('.indexList_selectAll').prop('checked',true);
                    }else{
                        table.find('.indexList_selectAll').prop('checked',false);
                    }
                })

            },
            clearAllSelect: function (){
                table.children().find('.indexList_selectAll').prop('checked',false);
                table.children().find('.indexList_select').prop('checked',false);
                $.each(settings.multiCRUDButtons, function( id, _class ) {
                    $(_class).hide();
                })
                $.each(settings.multiCRUDButtons_always_show, function( id, _class ) {
                    $(_class).show();
                })
            },
            initZebraTr: function( options ) {
                $('.table-row').hover(function() {
                    $(this).addClass('current-row');
                }, function() {
                    $(this).removeClass('current-row');
                });

                $("th").hover(function() {
                    //Mouse In
                    var index = $(this).index();
                    $("th.table-header, td").filter(":nth-child(" + (index+1) + ")").addClass("current-col");
                    $("th.table-header").filter(":nth-child(" + (index+1) + ")").css("background-color","#6B6B6B")
                }, function() {
                    //Mouse Out
                    var index = $(this).index();
                    $("th.table-header, td").removeClass("current-col");
                    $("th.table-header").filter(":nth-child(" + (index+1) + ")").css("background-color","#D3D3D3FF")
                });
            },

            flashIt:function (row_id, times, _class, delay) {
                for (var i = 0; i < times; i++) {
                    setTimeout(function () {
                        table.children().find('tbody tr[data-id='+row_id+']').toggleClass(_class);
                    }, delay + (300 * i));
                }
            },

            formValidation:function(forms){
                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }
                            form.classList.add('was-validated')
                        }, false)
                    })
            },
            mutliCRUDButtonsSwitcher: function (){
                $('.indexList_select, .indexList_selectAll').click(function (){
                    select_items = table.children().find('.indexList_select').length;
                    select_items_selected = table.children().find('.indexList_select:checked').length;
                    if(select_items_selected>0){
                        $.each(settings.multiCRUDButtons, function( id, _class ) {
                            $(_class).show();
                        })
                    }else{
                        $.each(settings.multiCRUDButtons, function( id, _class ) {
                            $(_class).hide();
                        })
                        $.each(settings.multiCRUDButtons_always_show, function( id, _class ) {
                            $(_class).show();
                        })

                    }
                })
            },

            addModalAndButtonBindToModal:function (){
                //要先引入Modal
                // @include('components.crud.modal')

                //綁定Modal
                $(".multiCRUDButtons").attr("data-toggle", "modal").attr("data-target", "#modal_full");
                $(".multiCRUDButtons_modalMultiDestroy").removeAttr("data-toggle").removeAttr("data-target");

                //multiCRUDButtons Submit
                $(".multiCRUDButtons_modalMultiEdit").click(function (){
                    settings.multiCRUDButtons_modalMultiEdit.call(this);
                })
                $(".multiCRUDButtons_modalMultiCreate").click(function (){
                    settings.multiCRUDButtons_modalMultiCreate.call(this);
                })
                $(".multiCRUDButtons_modalMultiDestroy").click(function (){
                    settings.multiCRUDButtons_modalMultiDestroy.call(this);
                })
                $(".multiCRUDButtons_modalCreate").click(function (){
                    settings.multiCRUDButtons_modalCreate.call(this);
                })

            },

            cleanModalContent:function (){
                modal_title = modalObj.children().find('.modal-title');
                modal_body = modalObj.children().find('.modal-body');
                modal_title.html("");
                modal_body.html("");
            },

            multiCRUDButtons_modalMultiEdit:function (){


                modalObj = $('#modal_full')
                settings.cleanModalContent.call(this);

                form_serialize_data = $('#crud_form_indexList').serialize();
                form_serializeArray_data = $('#crud_form_indexList').serializeArray()

                var  form_data_combine = new FormData();
                $.each(form_serializeArray_data, function(i, obj) {
                    form_data_combine[obj.name] = obj.value;
                });

                //加入其他 value
                route = settings.routes.modalMultiEdit;
                var _post_form = {
                    processData: false, // important
                    contentType: false, // important
                    _token: settings._token,
                    _method: "post",
                    form_serialize_data: form_serialize_data,
                    form_serializeArray_data: form_serializeArray_data,
                    form_data_combine: form_data_combine,
                };
                axios.post(route, _post_form)
                    .then(function (response) {
                        modal_title.html("Multi Edit");
                        modal_body.html(response.data.view);
                        $('.multiCRUDButtons_save').unbind().click(function (){
                            $('#form_modal_full').addClass('was-validated');
                            if ($("#form_modal_full")[0].checkValidity() === false) {
                                event.stopPropagation();
                            } else {
                                settings.multiCRUDButtons_modalMultiUpdate.call(this);
                            }
                            $('#form_modal_full').addClass('was-validated');
                        })
                    }, function (error) {

                    });
            },

            multiCRUDButtons_modalMultiUpdate:function (){

                form_serializeArray_data = $('#form_modal_full').serializeArray()

                var form_data_combine = new FormData();
                $.each(form_serializeArray_data, function (i, obj) {
                    form_data_combine[obj.name] = obj.value;
                });

                //加入其他 value
                route = settings.routes.modalMultiUpdate;
                var _post_form = {
                    processData: false, // important
                    contentType: false, // important
                    _token: settings._token,
                    _method: "post",
                    form_serializeArray_data: form_serializeArray_data,
                    form_data_combine: form_data_combine,
                };
                axios.post(route, _post_form)
                    .then(function (response) {
                        modalObj = $('#modal_full');
                        modalObj.modal('hide');
                        settings.cleanModalContent.call(this);

                        //更新 table tbody tr
                        $.each(response.data.view, function (id, view) {
                            row_id = id;
                            tr_old = table.children().find('tbody tr[data-id=' + row_id + ']');
                            $(view).insertAfter(tr_old);
                            tr_old.remove();

                            settings.flashIt.call(this, row_id, times = 10, _class = 'tr_after_crud', delay = 1000);
                            settings.initMultiSelect.call(this);
                            settings.initZebraTr.call(this);
                            settings.mutliCRUDButtonsSwitcher.call(this);
                            settings.clearAllSelect.call(this);
                        });
                        settings.reorderTableNo.call(this);
                    }, function (error) {

                });
            },

            multiCRUDButtons_modalMultiCreate: function (){
                modalObj = $('#modal_full')
                settings.cleanModalContent.call(this);

                form_serializeArray_data = $('#crud_form_indexList').serializeArray()

                var  form_data_combine = new FormData();
                $.each(form_serializeArray_data, function(i, obj) {
                    form_data_combine[obj.name] = obj.value;
                });

                //加入其他 value
                route = settings.routes.modalMultiCreate;
                var _post_form = {
                    processData: false, // important
                    contentType: false, // important
                    _token: settings._token,
                    _method: "post",
                    form_serializeArray_data: form_serializeArray_data,
                    form_data_combine: form_data_combine,
                };
                axios.post(route, _post_form)
                    .then(function (response) {
                        modal_title.html("Multi Create");
                        modal_body.html(response.data.view);

                        //crud action buttons init
                        settings.multiCRUDButtons_modalMultiCreate_init.call(this);

                        $('.multiCRUDButtons_save').unbind().click(function (){
                            $('#form_modal_full').addClass('was-validated');
                            if ($("#form_modal_full")[0].checkValidity({
                                ignore: ":hidden"
                            }) === false) {
                                event.stopPropagation();
                            } else {
                                settings.multiCRUDButtons_modalMultiStore.call(this);
                            }
                            $('#form_modal_full').addClass('was-validated');
                        })
                    }, function (error) {

                    });
            },

            multiCRUDButtons_modalMultiCreate_init: function (){
                //insert
                $('#modal_full .crud-insert').unbind().click(function (){
                    trInsert = $('#modal_full .tr-clone').clone();
                    trInsert.find('.hidden').each(function (){
                        alert();
                        $(this).removeClass('hidden');
                    })
                    trInsert.removeClass('tr-clone');
                    table_tbody = $('#modal_full table tbody');
                    table_tbody.append(trInsert);
                    settings.reorderModalTableNo.call(this);
                });
                $('#modal_full .crud-copy').unbind().click(function (){
                    alert();
                });
                $('#modal_full .crud-delete').unbind().click(function (){
                    alert();
                });
            },

            multiCRUDButtons_modalMultiStore: function (){
                form_serializeArray_data = $('#form_modal_full').serializeArray()

                var  form_data_combine = new FormData();
                $.each(form_serializeArray_data, function(i, obj) {
                    form_data_combine[obj.name] = obj.value;
                });

                //加入其他 value
                route = settings.routes.modalMultiStore;
                var _post_form = {
                    processData: false, // important
                    contentType: false, // important
                    _token: settings._token,
                    _method: "post",
                    form_serializeArray_data: form_serializeArray_data,
                    form_data_combine: form_data_combine,
                };
                axios.post(route, _post_form)
                    .then(function (response) {
                        modalObj = $('#modal_full');
                        modalObj.modal('hide');
                        settings.cleanModalContent.call(this);

                        //更新 table tbody tr
                        $.each(response.data.view, function (id, view) {
                            row_id = id;
                            tr_old = table.children().find('tbody tr[data-id=' + row_id + ']');
                            $(view).insertAfter(tr_old);
                            tr_old.remove();

                            settings.flashIt.call(this, row_id, times = 10, _class = 'tr_after_crud', delay = 1000);
                            settings.initMultiSelect.call(this);
                            settings.initZebraTr.call(this);
                            settings.mutliCRUDButtonsSwitcher.call(this);
                            settings.clearAllSelect.call(this);

                        });

                    }, function (error) {

                    });
            },

            multiCRUDButtons_modalMultiDestroy: function (){
                form_serializeArray_data = $('#crud_form_indexList').serializeArray();

                var  form_data_combine = new FormData();
                $.each(form_serializeArray_data, function(i, obj) {
                    form_data_combine[obj.name] = obj.value;
                });

                //加入其他 value
                route = settings.routes.modalMultiDestroy;
                var _post_form = {
                    processData: false, // important
                    contentType: false, // important
                    _token: settings._token,
                    _method: "post",
                    form_serializeArray_data: form_serializeArray_data,
                    form_data_combine: form_data_combine,
                };
                axios.post(route, _post_form)
                    .then(function (response) {
                        //console.log(response.data);

                        //移除 table tbody tr
                        $.each( response.data.tableTrData.tr_selected, function( key, value ) {
                            row_id = value;
                            table.children().find('tbody tr[data-id='+row_id+']').remove();
                            settings.reorderTableNo.call(this);
                        });

                    }, function (error) {

                    });
            },

            multiCRUDButtons_modalCreate: function (){

            }
        };






        var settings = $.extend(defaultSettings, options);
        return this.each(function(){

            settings.initialize.call(this);
            settings.initMultiSelect.call(this);
            settings.initZebraTr.call(this);
            settings.mutliCRUDButtonsSwitcher.call(this);
            settings.addModalAndButtonBindToModal.call(this);

            settings.clearAllSelect.call(this);

            // $.isFunction(settings.initMultiSelect()){
            //     settings.init.call(this);
            // }
        });
    }
})(jQuery);

