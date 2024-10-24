@extends('admin.layouts.master')
@section('page_header','Activities')
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
            <table class="table compact table-bordered  table-striped datatable" id="activity_table">
                <thead>
                <tr class="replace-inputs">
                    <th>Name</th>
                    <th>Descriptions</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <div id="add_activity" class="modal fade"
                 role="dialog" tabindex="-1">
                <div class="modal-dialog" style="width: 65%;">

                    <!-- Modal content-->
                    <form action="{{ url('/admin/activities/store') }}" class="form-horizontal form-groups-bordered validate"
                        method="post" role="form" id="add_activity_form">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align: center">Add New Activity</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Activity Name <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" name="name" id="name" class="form-control" data-validate="required"
                                            placeholder="Enter activity name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-3 control-label">Description <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <textarea name="description" id="description" class="form-control" data-validate="required"
                                                placeholder="Enter activity description" rows="4" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div style="text-align: center">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success" id="add_btn">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="edit_activity" class="modal fade"
                 role="dialog" tabindex="-1">
                <div class="modal-dialog" style="width: 65%;">

                    <!-- Modal content-->
                    <form action="{{url('/admin/activities/update')}}" class="form-horizontal form-groups-bordered validate"
                          method="post" role="form" id="edit_activity_form">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align: center">Update Activity</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="edit_name" class="col-sm-3 control-label">Activity Name <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" name="edit_activity_name" id="edit_activity_name" class="form-control" data-validate="required"
                                            placeholder="Enter activity name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="edit_description" class="col-sm-3 control-label">Description <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <textarea name="edit_activity_description" id="edit_activity_description" class="form-control" data-validate="required"
                                            placeholder="Enter activity description" rows="4" required></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="activity_id"> <!-- Hidden input to hold the activity ID -->

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
            var activity_table = jQuery("#activity_table");

            activity_table.DataTable({
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
                    "url": '{{url('/admin/activities/get_activity_data')}}',
                    "data" : {
                        "_token": "{{ csrf_token() }}"
                    },
                },
                buttons: [
                  
                ],
            });
            $("div.button-container").html('<button type="button" onclick="show_add_modal()" class="btn btn-primary btn-icon icon-left"><i class="entypo-plus"></i>Add New Activity</button>');

            // Initalize Select Dropdown after DataTables is created
            activity_table.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        }

        function show_add_modal() {
            $('#add_activity').modal('show');
        }

        function show_edit_modal(id, name, description) {
            $('#activity_id').val(id);
            $('#edit_activity_name').val(name);
            $('#edit_activity_description').val(description);
            $('#edit_activity').modal('show');
        }
        
        function show_delete_modal(id, name) {
            var x = document.getElementById('delete_user_name');
            $.ajax({
            url: '/admin/activities/destroy',
            type: "POST",
            data : {
                    "_token":"{{ csrf_token() }}",
                    delete_activity_id: id
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

        $('#add_activity_form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    // Show success toastr notification
                    toastr.success(response.success || 'Activity added successfully.');
                    // Clear the form
                    $('#add_activity_form')[0].reset();
                    $('#add_activity').modal('hide');
                    
                },
                error: function(xhr) {
                    // Show error toastr notification
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function(key, error) {
                            toastr.error(error[0]);
                        });
                    } else {
                        toastr.error('Activity addition failed! Please try again.');
                    }
                }
            });
            initialise_table();
        });
        

        $('#edit_activity_form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    // Show success toastr notification
                    toastr.success(response.success || 'Activity updated successfully.');
                    // Clear the form
                    $('#edit_activity_form')[0].reset();
                    $('#edit_activity').modal('hide');
                    
                },
                error: function(xhr) {
                    // Show error toastr notification
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function(key, error) {
                            toastr.error(error[0]);
                        });
                    } else {
                        toastr.error('Activity update failed! Please try again.');
                    }
                }
            });
            initialise_table();
        });
        
    </script>
@endsection



