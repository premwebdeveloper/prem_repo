@extends('layouts.public_app')

@section('content')

<style type="text/css">
.form-group {
    margin-bottom: 15px !important;
}
</style>

<script type="text/javascript">
	$(document).ready(function(){

		var page_url = window.location.href;

		var temp_param = page_url.split('#');
		var param = temp_param[1];

		if(param == 'family')
		{
			$('#head_member_tab').removeClass('active');
			$('#family_member_tab').addClass('active');
			$('#profile').removeClass('in active');
			$('#family').addClass('in active');
		}
	});
</script>

<div class="container">
    <div class="row">
        <div class="col-md-12">

                <div class="wrapper wrapper-content mt30px">
				    <div class="row animated fadeInRight">

				    	<!-- Profile update section start here-->
				        <div class="col-md-12">

				    	    <div class="with-nav-tabs">
				                <div class="panel-heading">
			                	  	<ul class="nav nav-tabs">
									    <li class="active" id="head_member_tab">
									    	<a href="#profile"><h1>Profile Information</h1></a>
									    </li>
									    <li id="family_member_tab">
									    	<a href="#family"><h1>Family Information</h1></a>
									    </li>
									    <!-- <li><a href="#jobportal">Job Portal</a></li> -->
									</ul>
				              	</div>

				               	<!-- Add member success message -->
				                	@if(session('member_email_exist'))
										<div class="alert alert-success">{{ session('member_email_exist') }}</div>
									@endif

									<!-- If member email is already exist -->
				                	@if(session('add_member'))
										<div class="alert alert-success">{{ session('add_member') }}</div>
									@endif

				                    <div class="tab-content">
<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->
				                    	<!-- Presonal Information -->
				                        <div class="tab-pane fade in active" id="profile">
				                        	<!-- Update Personal Info -->

												<div class="row mb10px">
													<div class="col-md-12">
														<!-- personal_status -->
														@if(session('personal_status'))
														<div class="alert alert-success">{{ session('personal_status') }}</div>
														@endif

														<!-- religion_status -->
														@if(session('religion_status'))
														<div class="alert alert-success">{{ session('religion_status') }}</div>
														@endif

													 	<!-- Update member success message -->
									                	@if(session('update_member'))
															<div class="alert alert-success">{{ session('update_member') }}</div>
														@endif

													 	<!-- Delete member success message -->
									                	@if(session('delete_member'))
															<div class="alert alert-success">{{ session('delete_member') }}</div>
														@endif
													</div>
													<div class="col-md-10">
										    		<h2 class="red">Information About Family Head परिवार के मुखिया के बारे में जानकारी </h2>
										    			<hr>
										    		</div>

										    		<div class="col-md-2 text-right">
										    			<h4>
										    				<a href="javascript:;" id="edit_profile" class="edit_profile btn btn-info">Edit Profile</a>
										    			</h4>
										    		</div>
									    		</div>

									    	<form class="form-inline" action="{{ route('updatePersonalInfo') }}" method="post" enctype="multipart/form-data">

												{{ csrf_field() }}

												<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

									    		<div class="row">
											   		<div class="col-md-4">
											   			<h4>मुखिया का पूरा नाम</h4>

												    	<div class="form-group" style="margin-bottom: 30px;">
													      	<input type="text" class="form-control personal_info" placeholder="Full Name" name="name" id="name" value="{{$user->name}}" readonly required="required">
													    </div>

												    	<h4>Gender / लिंग </h4>
													    <div class="form-group ">
													    	@if($user->gender==2)
													    		<input type="radio" class="personal_radio personal_info" name="gender" value="1">
												      			&nbsp;&nbsp;Male
												   				<input type="radio" class="personal_radio personal_info" name="gender" value="2" checked="checked"> &nbsp;&nbsp;Female
													    	@else
													    		<input type="radio" class="personal_radio personal_info" name="gender" value="1" checked="checked"> &nbsp;&nbsp;Male
												   				<input type="radio" class="personal_radio personal_info" name="gender" value="2"> &nbsp;&nbsp;Female
												   			@endif
												   		 </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Father/Husband Name  पिता / पति का नाम </h4>
													    <div class="form-group" style="margin-bottom: 30px;">
													      <input type="text" class="form-control personal_info" placeholder="Father / Husband Name" name="father_husband_name" id="father_husband_name" value="{{$user->father_husband_name}}" readonly>
													    </div>

		    									    	<h4>Mobile/Whats app No.  मोबाइल नंबर</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control personal_info" placeholder="+91-123456789" name="whatsapp" id="whatsapp" value="{{$user->whatsapp_mobile}}" readonly>
													    </div>
												    </div>

				    								<div class="col-md-4">
				    									<div class="row">
								                    		<img alt="image" class="img-responsive " src="resources/uploads/profile_images/{{$user->image}}" style="width: 120px;height: 103px;">
								                    		<p class="r">परिवार के मुखिया </p>
														</div>
														<div class="row">
								                    		<input type="file" name="image" class="form-control personal_info" disabled>
														</div>
													</div>

													<div class="col-md-3">
												    	<h4>Mobile No.  मोबाइल नंबर(2)</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control personal_info" placeholder="+91-123456789" name="phone" id="phone" value="{{$user->phone}}" readonly required="required">
													    </div>
												    </div>

												    <div class="col-md-3">
												    	<h4>Email Id</h4>
												    	<div class="form-group">
													      <input type="email" class="form-control" placeholder="+91-123456789" name="email" id="email" value="{{$user->email}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-3">
												    	<h4>Religion/धर्म</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" name="religion" id="religion" value="हिन्दू" disabled>
													    </div>
												    </div>

													<div class="col-md-3">
												    	<h4>मत/सम्प्रदाय </h4>
												    	<div class="form-group">
												    		<select class="form-control personal_radio personal_info" required="" name="sampraday" id="sampraday">

												    			@if($user->sampraday)
																	<option value="{{$user->sampraday}}" selected>{{$user->sampraday}}</option>
												    			@endif

												    			<option value="">Select मत/सम्प्रदाय </option>
												    			<option value="सनातनी">सनातनी</option>
												    			<option value="जैन">जैन</option>
												    			<option value="बौद्ध">बौद्ध</option>
												    			<option value="आर्य">आर्य</option>
												    			<option value="सिख">सिख</option>
												    			<option value="राधास्वामी">राधास्वामी</option>
												    			<option value="अन्य ">अन्य </option>
												    		</select>
													    </div>
												    </div>

											    	<div class="col-md-3">
											    		<h4>Cast / जाति </h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control personal_info" placeholder="जाति" name="cast" id="cast" value="{{$user->cast}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-3">
												    	<h4>Sub Cast/उपजाति/घटक</h4>
													    <div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="उपजाति" name="sub_cast" id="sub_cast" value="{{$user->sub_cast}}" readonly>
													    </div>
												    </div>

											    	<div class="col-md-3">
											    		<h4>गौत्र (Gotre)</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control personal_info" placeholder="गौत्र" name="gotra" id="gotra" value="{{$user->gotra}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-3">
												    	<h4>बंक </h4>
													    <div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="बंक" name="bunk" id="bunk" value="{{$user->bunk}}" readonly>
													    </div>
												    </div>

													<div class="col-md-3">
														<h4>मूल निवासी (Origin Place)</h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="1" placeholder="मूल निवासी(स्थान का नाम , जिला, राज्य दें) " name="origin_place" id="origin_place" readonly>{{$user->origin_place}}</textarea>
													    </div>
												    </div>

													<div class="col-md-3">
												    	<h4>Date of Birth / जन्म की तारीख</h4>
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control personal_info datepicker" placeholder="20-12-1990" name="dob" id="dob" value="{{$user->dob}}" readonly>
													    </div>
												    </div>

													<div class="col-md-3">
												    	<h4>Marriage Date/ शादी की तारीख</h4>
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control personal_info datepicker" placeholder="20-12-1990" name="marriage_date" id="marriage_date" value="{{$user->marriage_date}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-3">
													    <h4>Education/Experience/शिक्षा </h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="Education/शिक्षा " name="education" id="education" value="{{$user->education}}" readonly>
													    </div>
												    </div>

													<div class="col-md-3 mb20px">
												    	<h4>सेवा निवृत हैं</h4>
													    <div class="form-group ">
													    	@if($user->seva_nivrat==2)
													    		<input type="radio" class="personal_radio personal_info" name="seva_nivrat" value="1"> Yes
												   				<input type="radio" class="personal_radio personal_info" name="seva_nivrat" value="2" checked="checked"> No
													    	@else
													    	<input type="radio" class="personal_radio personal_info" name="seva_nivrat" value="1" checked="checked"> Yes
												   				<input type="radio" class="personal_radio personal_info" name="seva_nivrat" value="2"> No
												   			@endif
												   		 </div>
												    </div>

												    <div class="col-md-4 mb20px">
													    <h4>समाज सेवा हेतु समय दान </h4>
														<div class="form-group ml0px">
												      		<input type="text" name="social_hours" id="social_hours" class="personal_info form-control" style="width: 20%;" value="{{$user->social_hours}}" readonly>
													      		&nbsp;&nbsp;&nbsp;घंटे &nbsp;&nbsp;

															@if($user->social_hours_according==2)
													    		<input type="radio" name="social_hours_according" class="personal_radio personal_info" value="1"> Daily
													      		<input type="radio" name="social_hours_according" class="personal_radio personal_info" value="2" checked="checked"> Weekly
													      		<input type="radio" name="social_hours_according" class="personal_radio personal_info" value="3"> Monthly
													    	@elseif($user->social_hours_according==3)
													    		<input type="radio" name="social_hours_according" class="personal_radio personal_info" value="1"> Daily
													      		<input type="radio" name="social_hours_according" class="personal_radio personal_info" value="2"> Weekly
													      		<input type="radio" name="social_hours_according" class="personal_radio personal_info" value="3" checked="checked"> Monthly
												   			@else
												   				<input type="radio" name="social_hours_according" class="personal_radio personal_info" value="1" checked="checked"> Daily
													      		<input type="radio" name="social_hours_according" class="personal_radio personal_info" value="2"> Weekly
													      		<input type="radio" name="social_hours_according" class="personal_radio personal_info" value="3"> Monthly
												   			@endif

													    </div>
												    </div>

													<div class="col-md-5 mb20px">
														<h4>कार्यालय/व्यापार/व्यवसाय का पता</h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="1" placeholder="कार्यालय/व्यापार/व्यवसाय का पता " name="occupation_address" id="occupation_address" readonly>{{$user->occupation_address}}</textarea>
													    </div>
												    </div>

													<div class="col-md-6 mb20px">
														<h4>निवास का पता (Residential Address)</h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="1" placeholder="निवास का पता" name="residential_address" id="residential_address" readonly>{{$user->residential_address}}</textarea>
													    </div>

						    	                        <div class="col-lg-4">
								                            <div class="form-group">
								                                <h4>State</h4>
								                                <select id="state" name="residential_state" class="form-control required personal_info" >
								                                	@if(!empty($state_details->id))
								                                		<option value="{{$state_details->id}}">{{$state_details->name}}</option>
						                                		  		<option value="">Select State</option>
									                                	@foreach($states as $state)
									                                		<option value="{{ $state->id }}">{{ $state->name }}</option>
									                                	@endforeach
								                                	@else
								                                		<option value="">Select State</option>
								                                	@foreach($states as $state)
								                                		<option value="{{ $state->id }}">{{ $state->name }}</option>
								                                	@endforeach
								                                	@endif
								                                </select>
								                            </div>
								                        </div>
	                        	                        <div class="col-lg-4">
								                            <div class="form-group">
								                                <h4>District</h4>
								                                <select id="district" name="residential_district" class="form-control required" disabled="disabled">
								                                	@if(!empty($city_details->id))
								                                	<option value="{{$city_details->id}}">{{$city_details->name}}</option>
								                                	@else
								                                	<option value="">Select District</option>
								                                	@endif
								                                </select>
								                            </div>
								                        </div>
														<div class="col-md-4">
													    	<h4>पिन कोड</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="पिन कोड" name="residential_pincode" id="residential_pincode" value="{{$user->residential_pincode}}" readonly>
														    </div>
													    </div>

												    </div>

												    <div class="col-md-6 mb40px">
														<h4>स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें</h4>
												    	<div class="form-group">
										      				<textarea class="form-control personal_info" rows="5" placeholder="स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें" name="bio" id="bio" readonly>{{$user->bio}}</textarea>
													    </div>
												    </div>

													<div class="col-md-5 mb20px">
														<h4>प्रतिवर्ष न्यूनतम आर्थिक सहयोग 100/- प्रति प्राणी  के लिए सहमत हो |</h4>
														<p style="color:blue">(100/- वार्षिक दाता इस संस्था का पदाधकारी बन सकता हैं जिसे voting right होगा )</p>
												    </div>

													<div class="col-md-2 mb20px">
													    <div class="form-group ml0px">

													    	@if($user->donate_hundred==2)
													    		<input type="radio" name="donate_hundred" class="personal_radio personal_info" value="1"> Yes
												      			<input type="radio" name="donate_hundred" class="personal_radio personal_info" value="2" checked="checked"> No
												   			@else
												   				<input type="radio" name="donate_hundred" class="personal_radio personal_info" value="1" checked="checked"> Yes
												      			<input type="radio" name="donate_hundred" class="personal_radio personal_info" value="2"> No
												   			@endif

													    </div>
												    </div>

												    <div class="col-md-12 update_personal_info text-left" style="display:none;">
														<input type="submit" class="btn btn-danger btn-block personal_info" name="update_personal_info" id="update_personal_info" value="update personal info">
													</div>
												</div>
											</form>

<!-- ##################################################################################################################### -->
<!-- ##################################################################################################################### -->

											<br />
											<br />
											<div class="row">
												<div class="col-md-8">
									    			<h2 class="red">Optional Information / ऐच्छिक सूचनाएं </h2>
									    			<hr>
									    		</div>

									    		<div class="col-md-4 text-right">
									    			<h4>
								    					<a href="javascript:;" id="edit_optional_information" class="edit_optional_information btn btn-info">
								    						Edit Optional Information
								    					</a>
									    			</h4>
									    		</div>
								    		</div>

								    		<form class="form-inline" action="{{ route('updateOptionalInfo') }}" method="post">

												{{ csrf_field() }}

												<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

								    			<div class="row">
												    <div class="col-md-3">
												    	<h4>1. Blood Group / रक्त समूह</h4>
												    	<div class="form-group">
												    		<select class="form-control radio" name="bloodgroup" id="bloodgroup">

												    			@if($user_optional_details->blood_group)
																	<option value="{{$user_optional_details->blood_group}}" selected>{{$user_optional_details->blood_group}}</option>
												    			@endif

												    			<option value="">Select Blood Group</option>
												    			<option value="A+">A+</option>
												    			<option value="A-">A-</option>
												    			<option value="B+">B+</option>
												    			<option value="B-">B-</option>
												    			<option value="AB+">AB+</option>
												    			<option value="AB-">AB-</option>
												    			<option value="O+">O+</option>
												    			<option value="O-">O-</option>
												    		</select>
													    </div>
												    </div>

												  	<div class="col-md-6 mb10px">
												    	<h4>2. May I Help You Club का सदस्य बनना चाहते हैं
												    		<a href="{{ route('may_i_help_you') }}" target="_blank" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">

													    	@if($user_optional_details->club_member==2)
													    		<input type="radio" name="club_member" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="club_member" class="radio" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="club_member" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="club_member" class="radio" value="2" checked="checked">
													      		No
												   			@endif

													 	</div>
												 	</div>

												 	<div class="col-md-3 mb10px">
												    	<h4>3. ABC Club का सदस्य बनना चाहते हैं
												    		<a href="{{ route('abc_club') }}" target="_blank" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">

													    	@if($user_optional_details->abc_club_member==2)
													    		<input type="radio" name="abc_club_member" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="abc_club_member" class="radio" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="abc_club_member" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="abc_club_member" class="radio" value="2" checked="checked">
													      		No
												   			@endif

														</div>
													</div>

												   	<div class="col-md-6 mb10px">
												    	<h4>4. वैश्य पंचायत / वैश्य वाहिनी का सदस्य बनना चाहोगे
												    		<a href="{{ route('vaish_panchayat') }}" target="_blank" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">

													    	@if($user_optional_details->vaishya_panchayat==2)
													    		<input type="radio" name="vaishya_panchayat" class="radio" value="1">
														      	Yes
													      		<input type="radio" name="vaishya_panchayat" class="radio" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="vaishya_panchayat" class="radio" value="1">
														      	Yes
													      		<input type="radio" name="vaishya_panchayat" class="radio" value="2" checked="checked">
													      		No
												   			@endif

														</div>
													</div>

													<div class="col-md-6 mb10px">
												     	<h4>5. मृत्यु होने पर ऑंखे दान/अंग दान/शरीर दान करना चाहेंगे</h4>

													    <div class="form-group ml0px">

													    	@if($user_optional_details->donate_body_parts==2)
													    		<input type="radio" name="donate_body_parts" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="donate_body_parts" class="radio" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="donate_body_parts" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="donate_body_parts" class="radio" value="2" checked="checked">
													      		No
												   			@endif

													    </div>
												    </div>

												    <div class="col-md-2 mb10px">
												     	<h4>6. आवास</h4>

													    <div class="form-group ml0px">

													    	@if($user_optional_details->self_home==2)
													    		<input type="radio" name="self_home" class="radio" value="1""> अपना
												      			<input type="radio" name="self_home" class="radio" value="2" checked="checked"> किराये का
												   			@else
												   				<input type="radio" name="self_home" class="radio" value="1" checked="checked"> अपना
												      			<input type="radio" name="self_home" class="radio" value="2"> किराये का
												   			@endif

													    </div>
												    </div>

												    <div class="col-md-3 mb10px">
													    <h4>7. अपना वाहन </h4>

													    <div class="form-group ml0px">
															<?php
															$vehicle = $user_optional_details->vehicle;
													    	$vehicle = explode("-", $vehicle);
													    	$vehicle1 = '';
													    	$vehicle2 = '';
													    	if(in_array('1', $vehicle))
													    	{
													    		$vehicle1 = 'checked="checked"';
													    	}
													    	if(in_array('2', $vehicle))
													    	{
													    		$vehicle2 = 'checked="checked"';
													    	}
													    	?>
												      		<input type="checkbox" name="vehicle[]" class="radio" value="1" <?= $vehicle1; ?>>
													      		Two Wheeler
												      		<input type="checkbox" name="vehicle[]" class="radio" value="2" <?= $vehicle2; ?>>
													      		Four Wheeler

													    </div>

												    </div>

												    <div class="col-md-7 mb10px">
													    <h4>8. परिवार में किसी सदस्य का पहचान पत्र,वोट कार्ड,राशन कार्ड,हेल्थ कार्ड,वरिष्ठ नागरिक कार्ड या विधवा पेंशन बनना है ?</h4>

													    <div class="form-group ml0px">

													    	<?php
													    	$cards = $user_optional_details->family_cards;
													    	$cards = explode("-", $cards);
													    	$card1 = '';
													    	$card2 = '';
													    	$card3 = '';
													    	$card4 = '';
													    	$card5 = '';
													    	$card6 = '';
													    	if(in_array('1', $cards))
													    	{
													    		$card1 = 'checked="checked"';
													    	}
													    	if(in_array('2', $cards))
													    	{
													    		$card2 = 'checked="checked"';
													    	}
													    	if(in_array('3', $cards))
													    	{
													    		$card3 = 'checked="checked"';
													    	}
													    	if(in_array('4', $cards))
													    	{
													    		$card4 = 'checked="checked"';
													    	}
													    	if(in_array('5', $cards))
													    	{
													    		$card5 = 'checked="checked"';
													    	}
													    	if(in_array('6', $cards))
													    	{
													    		$card6 = 'checked="checked"';
													    	}
													    	?>

												      		<input type="checkbox" name="family_cards[]" class="radio" value="1" <?= $card1; ?>>
													      		पहचान पत्र
													      	<input type="checkbox" name="family_cards[]" class="radio" value="2" <?= $card2; ?>>
													      		वोट कार्ड
												      		<input type="checkbox" name="family_cards[]" class="radio" value="3" <?= $card3; ?>>
													      		राशन कार्ड
												      		<input type="checkbox" name="family_cards[]" class="radio" value="4" <?= $card4; ?>>
													      		हेल्थ कार्ड
												      		<input type="checkbox" name="family_cards[]" class="radio" value="5" <?= $card5; ?>>
													      		वरिष्ठ नागरिक
												      		<input type="checkbox" name="family_cards[]" class="radio" value="6" <?= $card6; ?>>
													      		विधवा पेंशन
													    </div>
												    </div>

												    <div class="col-md-4 mb10px">
											    		<h4>9. परिवार की वार्षिक आय</h4>
												    	<div class="form-group">

															<?php

												    		if($user_optional_details->annual_income == '2')
												    		{
																$income = '2 लाख तक';
												    		}
											    			if($user_optional_details->annual_income == '2-10')
											    			{
																$income = '2 लाख से 10 लाख तक';
											    			}
											    			if($user_optional_details->annual_income == '10-50')
											    			{
																$income = '10 लाख से 50 लाख तक';
											    			}
											    			if($user_optional_details->annual_income == '50up')
											    			{
																$income = '50 लाख से ऊपर';
											    			}

											    			?>

												    		<select class="form-control radio" name="annual_income">

																@if($user_optional_details->annual_income)
																	<option value="{{$user_optional_details->annual_income}}" selected>{{$income}}</option>
											    				@endif

												    			<option value="">Select Income</option>
												    			<option value="2">2 लाख तक</option>
												    			<option value="2-10">2 लाख से 10 लाख तक</option>
												    			<option value="10-50">10 लाख से 50 लाख तक</option>
												    			<option value="50up">50 लाख से ऊपर</option>
												    		</select>
													    </div>
												    </div>

											    	<div class="col-md-12 mb10px">
													    <h4>10. उपरोक्त सभी सूचना सही हैं व मैंने अपनी इच्छा से दी हैं |
													    	<input type="checkbox" placeholder="Aadhar Card No." class="radio" name="agree" required="" style="width: 25px;height: 25px;">

													    	<i class="fa fa-check" aria-hidden="true"></i> in the box</h4>

														<div class="col-md-12 update_optional_info text-left" style="display:none;">
															<input type="submit" class="btn btn-danger btn-block" name="update_optional_info" id="update_optional_info" value="update optional info">
														</div>
													</div>

												</form>
											</div>
										</div>

<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->

				                        <!-- Family Member -->
										<div class="tab-pane fade" id="family" >

											<div class="row" id="family_add_show_btn">
						                        <div class="col-md-12 text-right">
						                        	<a class="btn btn-info mb10px" id="addmember">
														<i class="fa fa-plus" aria-hidden="true"></i> Add Family Member
													</a>
												</div>

											</div>

											<table class="table table-striped" id="family_info_trable">
											  	<thead>
												    <tr>
												      <th>Full Name</th>
												      <th>Email</th>
												      <th>Phone</th>
												      <th>Relation With Family Head</th>
												      <th>Action</th>
												    </tr>
											  	</thead>
											  	<tbody>
												  	<tr>
												      	<td>{{$user->name}}</td>
												      	<td>{{$user->email}}</td>
												      	<td>{{$user->phone}}</td>
												      	<td>परिवार के मुखिया</td>
												      	<td>
												      		<a href="{{ route ('profile') }}" class="btn btn-info btn-xs">view</a>
											       		</td>
											     	 </tr>
													@foreach($familymember as $member)
												  	<tr>
												      	<td>{{$member->name}}</td>
												      	<td>{{$member->email}}</td>
												      	<td>{{$member->phone}}</td>
												      	<td>{{$member->relation_to_head_member}}</td>
												      	<td>
												      		<a href="{{route('viewfamilymember', ['id' => $member->id])}}" class="btn btn-info btn-xs">view</a>

												       		<a href="#{{$member->id}}" class="btn btn-danger btn-xs" data-toggle="modal">delete</a>
											       		</td>
											     	</tr>
	 												<div id="{{$member->id}}" class="modal fade" role="dialog">
														<div class="modal-dialog">

															<!-- Modal content-->
															<div class="modal-content">
															  <div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"><i class="fa fa-trash"></i> Delete Category</h4>
															  </div>
															  <div class="modal-body">
																<p>Are you sure you want to Delete ?</p>
															  </div>
															  <div class="modal-footer">
																<form method="post" action="{{route('deletefamilymember')}}">

																	{{ csrf_field() }}

																	<input type="hidden" id="delt" name="delete_family_member" value="{{$member->id}}">

																	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																	<button class="btn btn-danger" type="submit" name="delete" value="{{$member->id}}">Delete</button>
																</form>
															  </div>
															</div>

														</div>
													</div>
											     	 @endforeach

										     	</tbody>
											</table>

										<div class="row" id="add_member_form_div" style="display:none;">
											<div class="row" id="family_add_show_btn">

												 <div class="col-md-12 text-right">
						                        	<a class="btn btn-info mb10px show_family_members" id="show_family_members">
														<i class="fa fa-plus" aria-hidden="true"></i> Show Family Members
													</a>
						                        </div>
					                        </div>
				                        	<form class="form-inline" action="{{ route('add_member') }}" method="post" enctype="multipart/form-data">

												{{ csrf_field() }}

												<input type="hidden" name="user_id" value="{{ $user->user_id }}">

												<div class="row mb10px">
													<div class="col-md-12">
														<!-- personal_status -->
														@if(session('personal_status'))
														<div class="alert alert-success">{{ session('personal_status') }}</div>
														@endif

														<!-- religion_status -->
														@if(session('religion_status'))
														<div class="alert alert-success">{{ session('religion_status') }}</div>
														@endif

													 	<!-- Update member success message -->
									                	@if(session('update_member'))
															<div class="alert alert-success">{{ session('update_member') }}</div>
														@endif

													 	<!-- Delete member success message -->
									                	@if(session('delete_member'))
															<div class="alert alert-success">{{ session('delete_member') }}</div>
														@endif
													</div>

													<div class="col-md-12">
										    			<h2 class="red">Add Family Members परिवार के सदस्यों को यहां जोड़ें</h2>
										    			<hr>
										    		</div>

									    		</div>

									    		<div class="row">
											   		<div class="col-md-3">
												    	<div class="form-group" style="margin-bottom: 30px;">
													      	<input type="text" class="form-control member_profile" placeholder="Name" name="name" id="name" required="required">
													    </div>
													</div>

													<div class="col-md-3">
												    	<div class="form-group">
													      <input type="text" class="form-control member_profile" placeholder="मुखिया से सम्बन्ध" name="relation_to_head_member" id="relation_to_head_member">
											    		</div>
										    		</div>

									    		 	<div class="col-md-3">
													    <div class="form-group ">
												    		<input type="radio" class="" name="m_gender" value="1">&nbsp;&nbsp;Male
											   				<input type="radio" class="" name="m_gender" value="2">&nbsp;&nbsp;Female
												   		</div>
											   		 </div>

				    								<div class="col-md-3">
								                    	<div class="form-group">
													    	<input type="file" name="image" class="form-control personal_info" placeholder="Image">
													    </div>
													</div>

													<div class="col-md-3">
												    	<div class="form-group">
													      <input type="tel" class="form-control" name="phone" id="phone" required="required" placeholder="Mobile/Whatsapp">
													    </div>
												    </div>

												    <div class="col-md-3">
												    	<div class="form-group">
													      <input type="email" class="form-control" placeholder="Email Id" name="email" id="email" required="required">
													    </div>
												    </div>

													<div class="col-md-3">
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control datepicker" placeholder="Date Of Birth" name="dob" id="dob">
													    </div>
												    </div>

													<div class="col-md-3">
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control datepicker" placeholder="Marriage Date" name="marriage_date" id="marriage_date">
													    </div>
												    </div>



												    <div class="col-md-6 mb20px">
												    	<div class="form-group">
										      				<textarea class="form-control" rows="3" placeholder="कार्यालय/व्यापार/व्यवसाय का पता " name="occupation_address" id="occupation_address"></textarea>
													    </div>
												    </div>

													<div class="col-md-2 mb20px">
												    	<h4>सेवा निवृत हैं</h4>
													    <div class="form-group ">
												    		<input type="radio" class="" name="seva_nivrat" value="1">Yes
											   				<input type="radio" class="" name="seva_nivrat" value="2">No
												   		 </div>
												    </div>

												    <div class="col-md-4 mb20px">
													    <h4>समाज सेवा हेतु समय दान </h4>
														<div class="form-group ml0px">
												      		<input type="text" name="social_hours" class="form-control" style="width: 30%;"> &nbsp;&nbsp;&nbsp;घंटे &nbsp;&nbsp;

												      		<input type="radio" name="social_hours_according" class="" value="1">
													      		Daily
												      		<input type="radio" name="social_hours_according" class="" value="2">
													      		Weekly
												      		<input type="radio" name="social_hours_according" class="" value="3">
													      		Monthly
													    </div>
												    </div>

													<div class="col-md-6 mb20px">
												    	<div class="form-group">
										      				<textarea class="form-control" rows="3" placeholder="निवास का पता" name="residential_address" id="residential_address"></textarea>
													    </div>
													</div>

													<div class="col-md-6 mb40px">
												    	<div class="form-group">
										      				<textarea class="form-control" rows="3" placeholder="स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें" name="bio" id="bio" placeholder="BIO"></textarea>
													    </div>
												    </div>

					    	                        <div class="col-lg-2">
							                            <div class="form-group">
							                                <select id="state1" name="residential_state" class="form-control required personal_info" >

							                                	<option value="">Select State</option>
							                                	@foreach($states as $state)
							                                		<option value="{{ $state->id }}">{{ $state->name }}</option>
							                                	@endforeach

							                                </select>
							                            </div>
							                        </div>

                        	                        <div class="col-lg-2">
							                            <div class="form-group">
							                                <select id="district1" name="residential_district" class="form-control required" disabled="disabled">
							                                	<option value="">Select District</option>
							                                </select>
							                            </div>
							                        </div>

													<div class="col-md-2">
												    	<div class="form-group">
													      <input type="text" class="form-control" placeholder="पिन कोड" name="residential_pincode" id="residential_pincode">
													    </div>
												    </div>

												    <div class="col-md-6">
												    	<div class="form-group">
												      		<input type="text" class="form-control" placeholder="Education/Experience " name="education" id="education">
												    	</div>
												    </div>

												</div>

													<div class="col-md-6 mb10px">
													    <h4>17. उपरोक्त सभी सूचना सही हैं व मैंने अपनी इच्छा से दी हैं |<input type="checkbox" placeholder="Aadhar Card No." class="" name="agree" required="required" style="width: 25px;height: 25px;margin-bottom: 0px;vertical-align: middle;"> <i class="fa fa-check" aria-hidden="true"></i> in the box
													    </h4>
													</div>

													<div class="col-md-6 text-right">
														<input type="submit" class="btn btn-danger btn-block" name="add_member" id="add_member" value="Add Member">
													</div>
												</form>
				                        	</div>

				                        </div>
				                     </div>
				       			</div>
							<br/>
				        </div>
				    </div>
				</div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    $(".show_family_members").on('click', function(){
    	/*$("#family").css({
    		'display':'block'
    	});
    	$("#add_member_form_div").css({
    		'display':'none'
    	});*/
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
    	$(document).on("change", "#state", function(){
    		var state = $('#state').val();

    		if(state == '')
    		{
    			$("#district").html('');
    			$("#district").html('<option value="">Select District</option>');
    			$("#district").attr('disabled', 'disabled');
    		}
    		else
    		{
    			$.ajax({
				    method: 'post',
				    url: 'getDistrictByStateForUser',
				    data: {"_token": "{{ csrf_token() }}", 'state' : state},
				    async: true,
				    success: function(response){

				    	console.log(response);

				        var cities = '';
				        $.each(response, function(i, item) {
						    cities += '<option value="'+item.id+'">'+item.name+'</option>';
						})

						$("#district").html('');
						$("#district").html(cities);
						$("#district").removeAttr('disabled');
				    },
				    error: function(data){
				        console.log(data);
				    },
				});
    		}

    	});
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
    	$(document).on("change", "#state1", function(){
    		var state = $('#state1').val();

    		if(state == '')
    		{
    			$("#district1").html('');
    			$("#district1").html('<option value="">Select District</option>');
    			$("#district1").attr('disabled', 'disabled');
    		}
    		else
    		{
    			$.ajax({
				    method: 'post',
				    url: 'getDistrictByStateForUser',
				    data: {"_token": "{{ csrf_token() }}", 'state' : state},
				    async: true,
				    success: function(response){

				    	console.log(response);

				        var cities = '';
				        $.each(response, function(i, item) {
						    cities += '<option value="'+item.id+'">'+item.name+'</option>';
						})

						$("#district1").html('');
						$("#district1").html(cities);
						$("#district1").removeAttr('disabled');
				    },
				    error: function(data){
				        console.log(data);
				    },
				});
    		}

    	});
    });
</script>
@endsection