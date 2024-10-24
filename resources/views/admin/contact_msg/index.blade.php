@extends('admin.layouts.master')
@section('page_header','Contact Messages')
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
@include('admin.error.errormsg')
    <div class="panel panel-primary" data-collapsed="0" style="border: 0px;">
        <div class="panel-body" style="padding:0px;">

            <table class="table compact table-bordered  table-striped datatable" id="contact_table">
                <thead>
                <tr class="replace-inputs">
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    {{-- <th>Status</th> --}}
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
                    
            
        
        </div>
    </div>
@endsection
@section('page_scripts')
    <script src="{{ asset('/admin_asset/js/datatables/datatables.js') }}"></script>
    <script src="{{ asset('admin_asset/js/select2/select2.min.js') }}"></script>
    <script src="admin_asset/js/toastr.js"></script>
    <script type="admin_asset/javascript">
        jQuery(document).ready(function ($) {
            initialise_table();
            $('#contact_table_wrapper').css({
                'border': '0',
                'box-shadow': 'none'
            });

        });

        function initialise_table() {
            var contact_table = jQuery("#contact_table");

            contact_table.DataTable({
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
                    "url": '{{url('users/get_user_data')}}',
                    "data" : {
                        "_token": "{{ csrf_token() }}"
                    },
                },
                buttons: [
                  
                ],
            });
            $("div.button-container").html('<button type="button" onclick="show_add_modal()" class="btn btn-primary btn-icon icon-left"><i class="entypo-plus"></i>Add New User</button>');

            // Initalize Select Dropdown after DataTables is created
            contact_table.closest('.dataTables_wrapper').find('select').select2({
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
            // x.innerHTML = name;
            // $('#delete_user_id').val(id);
            // $('#delete_user').modal('show');
        }
        
        
    </script>
@endsection