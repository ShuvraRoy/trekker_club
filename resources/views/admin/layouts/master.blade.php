<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.header_links')
    @yield('page_links')
</head>
<body class="page-body page-fade-only-init" data-url="navedev.com">
<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
    @include('admin.layouts.left_nav')
    <div class="main-content">
        @include('admin.layouts.top_header')
        <hr id="hr1" />
        <div class="row" id = "page_header_section">
            <div class="col-md-12">
                <div class="panel panel-primary" data-collapsed="0">
                    <div class="panel-heading">
                        <div class="uk-panel-header" style="float: left; margin-left: 3%">
                            <h3>@yield('page_header')</h3>
                        </div>
                        <div class="panel-title" style="float: right; margin-right: 3%">
                            @yield('page_breadcrumb')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('page_content')
        <!-- Footer -->
        @include('admin.layouts.footer')
    </div>
</div>
@yield('page_scripts')
@include('admin.layouts.footer_links')
</body>
</html>
