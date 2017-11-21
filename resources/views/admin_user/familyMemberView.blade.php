@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>All Users</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('users') }}">Users</a>
            </li>
            <li class="active">
                <strong>User Profile</strong>
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
                        <h5>
                            About me
                        </h5>
                        <p>
                            {{$memberView->bio}}
                        </p>
                    </div>
            </div>
        </div>
            </div>
        <div class="col-md-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Activites</h5>
                </div>
                <div class="ibox-content">
                    <div class="feed-activity-list">

                        <div class="ibox-title">
                            <h5>Optional Information</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection