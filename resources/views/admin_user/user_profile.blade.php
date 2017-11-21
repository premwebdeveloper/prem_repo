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
                        <h4><strong>{{$userDetail->name}}</strong></h4>
                        <h5><strong>{{$userDetail->email}}</strong></h5>
                        <h5><strong>{{$userDetail->phone}}</strong></h5>
                        <p><i class="fa fa-map-marker"></i> {{$userDetail->residential_address}}, {{$userDetail->residential_district}}, {{$userDetail->residential_state}} - {{$userDetail->residential_pincode}} </p>
                        <h5>
                            About me
                        </h5>
                        <p>
                            {{$userDetail->bio}}
                        </p>
                        <!-- <div class="row m-t-lg">
                            <div class="col-md-4">
                                <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                <h5><strong>169</strong> Posts</h5>
                            </div>
                            <div class="col-md-4">
                                <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                <h5><strong>28</strong> Following</h5>
                            </div>
                            <div class="col-md-4">
                                <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                <h5><strong>240</strong> Followers</h5>
                            </div>
                        </div>
                        <div class="user-button">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                                </div>
                            </div>
                        </div> -->
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
                            <h5>Family Members</h5>
                        </div>

                        <div class="ibox-content">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Relation</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($userFamilyMembers as $member)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->email }}</td>
                                            <td>{{ $member->phone }}</td>
                                            <td>{{ $member->relation_to_head_member }}</td>
                                            <td>
                                                <a href="{{route('familyMemberView', ['id' => $member->f_member_user_id])}}" class="btn btn-info btn-xs">view</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection