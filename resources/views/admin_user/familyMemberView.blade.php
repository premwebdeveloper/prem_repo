@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Family Member Information</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('users') }}">Users</a>
            </li>
            <li>
                <a href="{{ route('users') }}">Family Head</a>
            </li>
            <li class="active">
                <strong>Family Member Profile</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">

        <div class="col-md-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Profile Detail</h5>
                </div>
                <div>
                    <div class="ibox-content no-padding border-left-right">
                        <img alt="image" class="img-responsive" src="resources/assets/img/profile_big.jpg">
                    </div>
                    <div class="ibox-content profile-content">
                        <h4><strong>{{$memberView->name}}</strong></h4>
                        <h5><strong>{{$memberView->email}}</strong></h5>
                        <h5><strong>{{$memberView->phone}}</strong></h5>
                        <p><i class="fa fa-map-marker"></i> {{$memberView->residential_address}}, {{$memberView->residential_district}}, {{$memberView->residential_state}} - {{$memberView->residential_pincode}} </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <h5>Family Member Informations</h5>
                </div>

                <div class="ibox-content">
                    <div class="feed-activity-list">

                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> Personal Information</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Optional Information</a></li>
                            </ul>
                            <div class="tab-content">

                                <!-- User personal information -->
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                        <p>&nbsp;</p>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <!-- User optional information -->
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">
                                        <strong>Donec quam felis</strong>

                                        <p>&nbsp;</p>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection