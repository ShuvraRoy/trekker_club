@extends('admin.layouts.master')
@section('page_header','Users')
@section('page_links')
    <link rel="stylesheet" href="{{ asset('/admin_asset/js/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin_asset/js/select2/select2.css') }}">
    <style>
        .page-body .select2-drop {z-index: 10052;}
        .select2-drop-mask {z-index: 10052;}
        .datepicker.datepicker-dropdown{
            z-index: 10052 !important;
        }
    </style>
@section('page_breadcrumb')
    <ol class="breadcrumb bc-3" >
        <li>
            <a href="#"><i class="fa fa-home"></i>{{$main_menu}}</a>
        </li>
        <li class="active">
            <strong>{{$sub_menu}}</strong>
        </li>
    </ol>
@endsection
@section('page_content')
@include('error.errormsg')
    <div class="panel panel-primary" data-collapsed="0" style="border: 0px;">
        <div class="panel-body" style="padding:0px;">
            {{-- <div class="form-group" style="margin-bottom: 0px;">
                <button type="button" onclick="show_add_modal()" class="btn btn-primary btn-icon icon-left"><i class="entypo-plus"></i>Add New User</button>
            </div> --}}
            <table class="table compact table-bordered  table-striped datatable" id="user_table">
                <thead>
                <tr class="replace-inputs">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Phone Number</th>
                    <th>Emergency Phone Number</th>
                    <th>Medical Condition</th>
                    <th>Dietary Preference</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <div id="add_user" class="modal fade"
                 role="dialog" tabindex="-1">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <form action="{{url('users/store')}}" class="form-horizontal form-groups-bordered validate"
                          method="post" role="form" id="add_user_form">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align: center">Add New User</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">User Name <span style="color: red">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="text" name="name" id="name"
                                               class="form-control"
                                               data-validate="required"
                                               placeholder="Enter user name"
                                               onkeyup="check_user_name()"
                                        >
                                        <span id="title_err"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label"> Email  <span style="color: red">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="email" name="email" id="email"
                                               class="form-control"
                                               data-validate="required"
                                               placeholder="Enter email address"
                                               
                                        >
                                        {{-- <span id="slug_err"></span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Phone Number 1<span style="color: red">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="text" name="phone1" id="phone1"
                                               class="form-control"
                                               data-validate="required"
                                               placeholder=""
                                               
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Phone Number 2 </label>
                                    <div class="col-sm-7">
                                        <input type="tel" name="phone2" id="phone2"
                                               class="form-control"
                                               placeholder=""
                                               
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Password<span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="tel" name="password" id="password"
                                               class="form-control"
                                               data-validate="required"
                                               placeholder="Enter password"
                                               
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Confirm Password<span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="tel" name="password_confirmation" id="password_confirmation"
                                               class="form-control"
                                               data-validate="required"
                                               placeholder="Confirm password"
                                               
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Mailing Address</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="mailing_address" id="mailing_address"
                                               class="form-control"
\                                               placeholder="Enter mailing address"
                                               
                                        >
                                    </div>
                                </div>                        
                            </div>
                            <div class="modal-footer">
                                <div col-md-12 style="text-align: center">
                                <button type="button" class="btn btn-white"
                                        data-dismiss="modal">Cancel
                                <button type="submit" class="btn btn-success" id="add_btn">Save</button>
                                </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="edit_user" class="modal fade"
                 role="dialog" tabindex="-1">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <form action="{{url('users/update')}}" class="form-horizontal form-groups-bordered validate"
                          method="post" role="form" id="edit_user_form">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align: center">Edit Sub Category</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">User Name <span style="color: red">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="text" name="user_name" id="user_name"
                                               class="form-control"
                                               data-validate="required"
                                               placeholder="Ex: Desktop"
                                               onkeyup="check_user_name_availability()"
                                        >
                                        <span id="user_name_err"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label"> Email <span style="color: red">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="text" name="user_email" id="user_email"
                                               class="form-control"
                                               data-validate="required"
                                               placeholder="Ex: server-storage"
                                        >
                                        <span id="user_email_err"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-3 control-label">Address</label>

                                    <div class="col-sm-7">
                                        <textarea class="form-control autogrow" id="user_address" name="user_address" rows="2"
                                                  placeholder="Ex: This permission is for adding users"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Phone Number</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="phone_number" id="phone_number"
                                               class="form-control" 
                                               placeholder="Ex: Banani"
                                        >
                                    </div>
                                </div>
                                
                                <input type="hidden" id="user_id" name="user_id">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="edit_btn">Update</button>
                                <button type="button" class="btn btn-white"
                                        data-dismiss="modal">Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div id="delete_user" class="modal fade"
                 role="dialog" tabindex="-1">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <form action="{{url('users/destroy')}}" class="form-horizontal form-groups-bordered validate"
                          method="post" role="form" id="delete_user_form">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align: center; color: red" >Delete User</h4>
                            </div>
                            <div class="modal-body">
                                <div style="text-align: center">
                                    <span id="delete_user_name"></span> will be deleted. Are you sure?
                                </div>
                                <input type="hidden" id="delete_user_id" name="delete_user_id">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="delete_btn">Delete</button>
                                <button type="button" class="btn btn-white"
                                        data-dismiss="modal">Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}
            <div id="user_status" class="modal fade"
                 role="dialog" tabindex="-1">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <form action="{{url('users/change_user_status')}}" class="form-horizontal form-groups-bordered validate"
                          method="post" role="form" id="change_user_status_form">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align: center; color: red" >Change user Status</h4>
                            </div>
                            <div class="modal-body">
                                <div style="text-align: center">
                                    <span id="user_status_message"></span> Are you sure?
                                </div>
                                <input type="hidden" id="user_status_id" name="user_status_id">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="status_update_btn">Update</button>
                                <button type="button" class="btn btn-white"
                                        data-dismiss="modal">Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script src="{{ asset('/admin_asset/js/datatables/datatables.js') }}"></script>
    <script src="{{ asset('/admin_asset/js/select2/select2.min.js') }}"></script>
    <script src="{{ asset('/admin_asset/js/toastr.js') }}"></script>
    <script type="text/javascript">

        jQuery(document).ready(function ($) {
            initialise_table();
        });

        function initialise_table() {
            var user_table = jQuery("#user_table");

            user_table.DataTable({
                "bDestroy": true,

                order: [ [0, 'desc'] ],
                "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "bStateSave": false,
                "paging": false,
                "responsive": true,
                // dom: 'Bfrtip',
                dom: 'Bfrtp<"top"<"button-container">>tpi',
                "ajax": {
                    "type": 'POST',
                    "url": '{{url('admin/users/get_user_data')}}',
                    "data" : {
                        "_token": "{{ csrf_token() }}"
                    },
                },
                buttons: [
                  
                ],
            });
            // $("div.button-container").html('<button type="button" onclick="show_add_modal()" class="btn btn-primary btn-icon icon-left"><i class="entypo-plus"></i>Add New User</button>');

            // Initalize Select Dropdown after DataTables is created
            user_table.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        }

        
        function show_delete_modal(id, name) {
            var x = document.getElementById('delete_user_name');
            $.ajax({
            url: 'users/destroy',
            type: "POST",
            data : {
                    "_token":"{{ csrf_token() }}",
                    delete_user_id: id
                    },
            dataType: "json",
            success:function(data)
                {
                // alert(data);
                toastr.success(data);
                initialise_table();
                },
                error:function(response) {
                    toastr.error(response.responseJSON.errors.name);
                }
        });
            
        }
        
        
    </script>
@endsection



