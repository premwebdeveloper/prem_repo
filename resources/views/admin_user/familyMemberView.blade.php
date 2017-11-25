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

                                        <p>{{$memberView->bio}}</p>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Name</td><td>{{$memberView->name}}</td>
                                                    <td>Father / Husband Name</td><td>{{$memberView->father_husband_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Relation to Head</td><td>{{$memberView->relation_to_head_member}}</td>
                                                    <td>Email</td><td>{{$memberView->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td><td>{{$memberView->phone}}</td>
                                                    <td>Whatsapp Mobile</td><td>{{$memberView->whatsapp_mobile}}</td>
                                                </tr>
                                                <tr>
                                                    <td>sampraday</td><td>{{$memberView->sampraday}}</td>
                                                    <td>Cast</td><td>{{$memberView->cast}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Sub Cast</td><td>{{$memberView->sub_cast}}</td>
                                                    <td>Gotra</td><td>{{$memberView->gotra}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Bunk</td><td>{{$memberView->bunk}}</td>
                                                    <td>Origin Place</td><td>{{$memberView->origin_place}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Married</td>
                                                    <td>
                                                        @if($memberView->married == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                    <td>Marriage Date</td><td>{{$memberView->marriage_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Life Partner Name</td><td>{{$memberView->life_partner_name}}</td>
                                                    <td>Education</td><td>{{$memberView->education}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Special Qualification</td><td>{{$memberView->special_qualification}}</td>
                                                    <td>Experience Field</td><td>{{$memberView->experience_field}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Occupation</td><td>{{$memberView->occupation}}</td>
                                                    <td>Seva Nivrat</td>
                                                    <td>
                                                        @if($memberView->seva_nivrat == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td>
                                                        @if($memberView->gender == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                    <td>DOB</td><td>{{$memberView->dob}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Residential Address</td><td>{{$memberView->residential_address}}</td>
                                                    <td>Residential Pincode</td><td>{{$memberView->residential_pincode}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Residential District</td><td>{{$memberView->residential_district}}</td>
                                                    <td>Residential State</td><td>{{$memberView->residential_state}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Occupation Address</td><td>{{$memberView->occupation_address}}</td>
                                                    <td>Occupation Pincode</td><td>{{$memberView->occupation_pincode}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Occupation District</td><td>{{$memberView->occupation_district}}</td>
                                                    <td>Occupation State</td><td>{{$memberView->occupation_state}}</td>
                                                </tr>
                                                <tr>
                                                    <td>समाज सेवा हेतु समय दान</td><td>{{$memberView->social_hours}}</td>
                                                    <td>रूचि क्षेत्र</td><td>{{$memberView->social_field}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Daily / Weekly / Monthly</td>
                                                    <td>
                                                        @if($memberView->social_hours_according == 1)
                                                            <span>Daily</span>
                                                        @elseif($memberView->social_hours_according == 2)
                                                            <span>Weekly</span>
                                                        @else
                                                            <span>Monthly</span>
                                                        @endif
                                                    </td>
                                                    <td>सहयोग 100/- प्रति प्राणी</td>
                                                    <td>
                                                        @if($memberView->donate_hundred == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <!-- User optional information -->
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">
                                        <p>&nbsp;</p>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Blood Group</td><td>{{$memberOptionalView->blood_group}}</td>
                                                    <td>Blood Information</td>
                                                    <td>
                                                        @if($memberOptionalView->blood_information == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Consumer Forum</td>
                                                    <td>
                                                        @if($memberOptionalView->consumer_forum == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                    <td>Club member</td>
                                                    <td>
                                                        @if($memberOptionalView->club_member == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ABC Club Member</td>
                                                    <td>
                                                        @if($memberOptionalView->abc_club_member == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                    <td>प्रोजेक्ट समिति</td>
                                                    <td>
                                                        @if($memberOptionalView->project_community == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>वैश्य वाहिनी</td>
                                                    <td>
                                                        @if($memberOptionalView->vaishya_panchayat == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                    <td>Donate Body Parts</td>
                                                    <td>
                                                        @if($memberOptionalView->donate_body_parts == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Samaj Sanstha</td><td>{{$memberOptionalView->samaj_sanstha}}</td>
                                                    <td>Samaj Patrika</td><td>{{$memberOptionalView->samaj_patrika}}</td>
                                                </tr>
                                                <tr>
                                                    <td>आवास</td>
                                                    <td>
                                                        @if($memberOptionalView->self_home == 1)
                                                            <span>अपना </span>
                                                        @else
                                                            <span>किराये का </span>
                                                        @endif

                                                    </td>
                                                    <td>Vehicle</td>
                                                    <td>
                                                        @if($memberOptionalView->vehicle == 1)
                                                            <span>Two Wheeler</span>
                                                        @elseif($memberOptionalView->vehicle == 2)
                                                            <span>Four Wheeler</span>
                                                        @else
                                                            <span> Two Wheeler / Four Wheeler</span>
                                                        @endif

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pan Card</td><td>{{$memberOptionalView->pan_card}}</td>
                                                    <td>Adhar Card</td><td>{{$memberOptionalView->adhar_card}}</td>
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