@extends('admin.layouts.master')
@section('page_header','Dashboard')
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
<div class="row">
    <div class="col-sm-3 col-xs-6">
        <div class="tile-stats tile-blue">
            <a class="clear" href="#">
            <div class="icon"><i class="entypo-chart-setting"></i></div>
            <div class="num" data-start="0" data-end="{{$activities}}" data-postfix="" data-duration="1500" data-delay="0">0</div>
            <h3>Activities</h3>
            <p></p>
            </a>
        </div>

    </div>

    <div class="col-sm-3 col-xs-6">
        <div class="tile-stats tile-blue">
            <a class="clear" href="#">
            <div class="icon"><i class="entypo-chart-setting"></i></div>
            <div class="num" data-start="0" data-end="{{$activities}}" data-postfix="" data-duration="1500" data-delay="600">0</div>
            <h3>Activities</h3><br>
            <p></p>
            </a>
        </div>

    </div>

    <div class="col-sm-3 col-xs-6">
        <div class="tile-stats tile-black">
            <a class="clear" href="#">
            <div class="icon"><i class="entypo-chart-setting"></i></div>
            <div class="num" data-start="0" data-end="{{$sessions}}" data-postfix="" data-duration="1500" data-delay="600">0</div>
            <h3>Sessions</h3><br>
            <p></p>
            </a>
        </div>

    </div>
    
    <div class="clear visible-xs"></div>

    <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-aqua">
            <a class="clear" href="#">
            <div class="icon"><i class="fa fa-calerdar"></i></div>
            <div class="num" data-start="0" data-end="{{$participant}}" data-postfix="" data-duration="participant" data-delay="1200">0</div>

            <h3>Participant</h3><br>
            <p></p>
            </a>
        </div>

    </div>

    


</div>
@endsection
