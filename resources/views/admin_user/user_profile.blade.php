@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>User Profile</h2>
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
                        <img alt="image" class="img-responsive" src="resources/uploads/profile_images/{{$userDetail->image}}">
                    </div>
                    <div class="ibox-content profile-content">
                        <h4><strong>{{$userDetail->name}}</strong></h4>
                        <h5><strong>{{$userDetail->email}}</strong></h5>
                        <h5><strong>{{$userDetail->phone}}</strong></h5>
                        <p><i class="fa fa-map-marker"></i> {{$userDetail->residential_address}}, {{$userDetail->residential_district}}, {{$userDetail->residential_state}} - {{$userDetail->residential_pincode}} </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <h5>User Informations</h5>
                </div>

                <div class="ibox-content">
                    <div class="feed-activity-list">

                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> Personal Information</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Optional Information</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3">Family Members</a></li>
                            </ul>
                            <div class="tab-content">

                                <!-- User personal information -->
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <strong>Biography</strong>

                                        <p> {{$userDetail->bio}} </p>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td><b>पिता / पति का नाम</b></td><td> {{$userDetail->father_husband_name}} </td>
                                                    <td><b> Whatsapp Mobile </b></td><td> {{$userDetail->whatsapp_mobile}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> मत/सम्प्रदाय </b></td><td> {{$userDetail->sampraday}} </td>
                                                    <td><b> जाति </b></td><td> {{$userDetail->cast}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> Sub Cast </b></td><td> {{$userDetail->sub_cast}} </td>
                                                    <td><b> Gotra </b></td><td> {{$userDetail->gotra}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> बंक </b></td><td> {{$userDetail->bunk}} </td>
                                                    <td><b> Origin Place </b></td><td> {{$userDetail->origin_place}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> Married </b></td>
                                                    <td>
                                                        @if($userDetail->married == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                    <td><b> Marriage Date </b></td><td> {{$userDetail->marriage_date}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> Life Partner Name </b></td><td> {{$userDetail->life_partner_name}} </td>
                                                    <td><b> Education </b></td><td> {{$userDetail->education}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> Special Qualification </b></td><td> {{$userDetail->special_qualification}} </td>
                                                    <td><b> Experience </b></td><td> {{$userDetail->experience_field}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> Occupation </b></td><td> {{$userDetail->occupation}} </td>
                                                    <td><b> सेवा निवृत हैं </b></td>
                                                    <td>
                                                        @if($userDetail->seva_nivrat == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> Gender </b></td>
                                                    <td>
                                                        @if($userDetail->gender == 1)
                                                            <span>Male</span>
                                                        @else
                                                            <span>Female</span>
                                                        @endif
                                                    </td>
                                                    <td><b> DOB </b></td><td> {{$userDetail->dob}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> व्यवसाय का पता </b></td><td> {{$userDetail->occupation_address}} </td>
                                                    <td><b> Pin Code </b></td><td> {{$userDetail->occupation_pincode}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> District </b></td><td> {{$userDetail->occupation_district}} </td>
                                                    <td><b> State </b></td><td> {{$userDetail->occupation_state}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> समाज सेवा हेतु समय दान </b></td><td> {{$userDetail->social_hours}} Hrs. </td>
                                                    <td><b> रूचि क्षेत्र </b></td><td> {{$userDetail->social_field}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> Daily / Weekly / Monthly </b></td>
                                                    <td>
                                                        @if($userDetail->social_hours_according == 1)
                                                            <span>Daily</span>
                                                        @elseif($userDetail->social_hours_according == 2)
                                                            <span>Weekly</span>
                                                        @else
                                                            <span>Monthly</span>
                                                        @endif
                                                    </td>
                                                    <td><b> सहयोग 100/- प्रति प्राणी </b></td>
                                                    <td>
                                                        @if($userDetail->donate_hundred == 1)
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

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td><b>Blood Group</b></td><td> {{$userOptionalDetail->blood_group}} </td>
                                                    <td><b> Blood Information </b></td>
                                                    <td>
                                                        @if($userOptionalDetail->blood_information == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> Consumer Forum </b></td>
                                                    <td>
                                                        @if($userOptionalDetail->consumer_forum == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                    <td><b> Club member </b></td>
                                                    <td>
                                                        @if($userOptionalDetail->club_member == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>ABC Club Member</b></td>
                                                    <td>
                                                        @if($userOptionalDetail->abc_club_member == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                    <td><b> प्रोजेक्ट समिति </b></td>
                                                    <td>
                                                        @if($userOptionalDetail->project_community == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> वैश्य वाहिनी </b></td>
                                                    <td>
                                                        @if($userOptionalDetail->vaishya_panchayat == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                    <td><b> Donate Body Parts </b></td>
                                                    <td>
                                                        @if($userOptionalDetail->donate_body_parts == 1)
                                                            <span>Yes</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Samaj Sanstha</b></td><td> {{$userOptionalDetail->samaj_sanstha}} </td>
                                                    <td><b> Samaj Patrika </b></td><td> {{$userOptionalDetail->samaj_patrika}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> आवास </b></td>
                                                    <td>
                                                        @if($userOptionalDetail->self_home == 1)
                                                            <span>अपना </span>
                                                        @else
                                                            <span>किराये का </span>
                                                        @endif
                                                    </td>
                                                    <td><b> Vehicle </b></td>
                                                    <td>
                                                        @if($userOptionalDetail->vehicle == 1)
                                                            <span>Two Wheeler</span>
                                                        @elseif($userOptionalDetail->vehicle == 2)
                                                            <span>Four Wheeler</span>
                                                        @else
                                                            <span> Two Wheeler / Four Wheeler</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Family Cards</b></td><td> {{$userOptionalDetail->family_cards}} </td>
                                                    <td><b> Pan Card </b></td><td> {{$userOptionalDetail->pan_card}} </td>
                                                </tr>
                                                <tr>
                                                    <td><b> Adhar Card </b></td><td> {{$userOptionalDetail->adhar_card}} </td>
                                                    <td><b> Annual Income </b></td>
                                                    <td>
                                                        @if($userOptionalDetail->annual_income == 2)
                                                            <span>2 लाख तक</span>
                                                        @elseif($userOptionalDetail->annual_income == "2-10")
                                                            <span>2 लाख से 10 लाख तक</span>
                                                        @elseif($userOptionalDetail->annual_income == "10-50")
                                                            <span>10 लाख से 50 लाख तक</span>
                                                        @else
                                                            <span>50 लाख से ऊपर</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <!-- User family members -->
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">
                                        <strong>&nbsp;</strong>

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
        </div>
    </div>
</div>

@endsection