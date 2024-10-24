@extends('admin.layouts.master')
@section('page_header','sessions')
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
          
            <table class="table compact table-bordered  table-striped datatable" id="session_table">
                <thead>
                <tr class="replace-inputs">
                    <th>Date / Time</th>
                    <th>Activity</th>
                    <th>Location</th>
                    <th>Duration</th>
                    <th>Fees</th>
                    <th>Total slots</th>
                    <th>Slots Available </th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <div id="add_session" class="modal fade"
                 role="dialog" tabindex="-1">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <form action="{{ url('/admin/sessions/store') }}" class="form-horizontal form-groups-bordered validate"
                        method="post" role="form" id="add_session_form">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align: center">Add New Session</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="activity_id" class="col-sm-3 control-label">Activity <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <select name="activity_id" id="activity_id" class="form-control" required>
                                            <option value="" disabled selected>Select an activity</option>
                                            @foreach($activities as $activity)
                                                <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                @if($activities->isEmpty())
                                    <div class="alert alert-warning">
                                        Please add an activity first before creating a session for that activity.
                                    </div>
                                @else
                                    <div id="sessionFields"> <!-- Show session fields only if activities are available -->
                                        <div class="form-group">
                                            <label for="date_time" class="col-sm-3 control-label">Date and Time <span style="color: red">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="datetime-local" name="date_time" id="date_time" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="slots" class="col-sm-3 control-label">Total Slots <span style="color: red">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="number" name="slots" id="slots" class="form-control" min="1" required placeholder="Enter total slots">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="duration" class="col-sm-3 control-label">Duration (in minutes) <span style="color: red">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="number" name="duration" id="duration" class="form-control" min="1" required placeholder="Enter duration in minutes">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="location" class="col-sm-3 control-label">Location <span style="color: red">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="text" name="location" id="location" class="form-control" required placeholder="Enter location">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fees" class="col-sm-3 control-label">Fees <span style="color: red">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="number" name="fees" id="fees" class="form-control" step="0.01" required placeholder="Enter fees">
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
            <div id="edit_session" class="modal fade"
                 role="dialog" tabindex="-1">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <form action="{{ url('/admin/sessions/update') }}" class="form-horizontal form-groups-bordered validate" method="post" role="form" id="edit_session_form">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="text-align: center">Update Session</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" id="session_id"> <!-- Hidden input to hold the session ID -->
                                
                                <div class="form-group">
                                    <label for="edit_activity_id" class="col-sm-3 control-label">Activity <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <select name="activity_id" id="edit_activity_id" class="form-control" required>
                                            <option value="" disabled>Select an activity</option>
                                            @foreach($activities as $activity)
                                                <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="edit_date_time" class="col-sm-3 control-label">Date and Time <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="datetime-local" name="date_time" id="edit_date_time" class="form-control" required>
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                    <label for="edit_slots" class="col-sm-3 control-label">Total Slots <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="number" name="slots" id="edit_slots" class="form-control" min="1" required placeholder="Enter total slots">
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                    <label for="edit_duration" class="col-sm-3 control-label">Duration (in minutes) <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="number" name="duration" id="edit_duration" class="form-control" min="1" required placeholder="Enter duration in minutes">
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                    <label for="edit_location" class="col-sm-3 control-label">Location <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" name="location" id="edit_location" class="form-control" required placeholder="Enter location">
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                    <label for="edit_fees" class="col-sm-3 control-label">Fees <span style="color: red">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="number" name="fees" id="edit_fees" class="form-control" step="0.01" required placeholder="Enter fees">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="edit_btn">Update</button>
                                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
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
            var session_table = jQuery("#session_table");

            session_table.DataTable({
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
                    "url": '{{url('/admin/sessions/get_session_data')}}',
                    "data" : {
                        "_token": "{{ csrf_token() }}"
                    },
                },
                buttons: [
                  
                ],
            });
            $("div.button-container").html('<button type="button" onclick="show_add_modal()" class="btn btn-primary btn-icon icon-left"><i class="entypo-plus"></i>Add New session</button>');

            // Initalize Select Dropdown after DataTables is created
            session_table.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        }

        function show_add_modal() {
            $('#add_session').modal('show');
        }

        function show_edit_modal(id, date_time, activity_id, location, duration, fees, slots) {
            $('#session_id').val(id);
            $('#edit_activity_id').val(activity_id);
            $('#edit_date_time').val(date_time); // Setting the datetime-local input
            $('#edit_slots').val(slots); // Setting the total slots
            $('#edit_duration').val(duration); // Setting the duration in minutes
            $('#edit_location').val(location); // Setting the location
            $('#edit_fees').val(fees); // Setting the fees
            $('#edit_session').modal('show');
        }
        
        function show_delete_modal(id, name) {
            var x = document.getElementById('delete_user_name');
            $.ajax({
            url: '/admin/sessions/destroy',
            type: "POST",
            data : {
                    "_token":"{{ csrf_token() }}",
                    delete_session_id: id
                    },
            dataType: "json",
            success:function(data)
                {
                // alert(data);
                toastr.success(data.success);
                initialise_table();
                },
                error:function(response) {
                    toastr.error(response.responseJSON.errors.name);
                }
        });
            
        }

        $('#add_session_form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    // Show success toastr notification
                    toastr.success(response.success || 'session added successfully.');
                    // Clear the form
                    $('#add_session_form')[0].reset();
                    $('#add_session').modal('hide');
                    
                },
                error: function(xhr) {
                    // Show error toastr notification
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function(key, error) {
                            toastr.error(error[0]);
                        });
                    } else {
                        toastr.error('session addition failed! Please try again.');
                    }
                }
            });
            initialise_table();
        });
        

        $('#edit_session_form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    // Show success toastr notification
                    toastr.success(response.success || 'session updated successfully.');
                    // Clear the form
                    $('#edit_session_form')[0].reset();
                    $('#edit_session').modal('hide');
                    
                },
                error: function(xhr) {
                    // Show error toastr notification
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function(key, error) {
                            toastr.error(error[0]);
                        });
                    } else {
                        toastr.error('session update failed! Please try again.');
                    }
                }
            });
            initialise_table();
        });
        
    </script>
@endsection



