@extends('layouts.public_app')

@section('content')

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
									    <li class="active"><a href="#profile">Profile Information</a></li>
									    <li><a href="#family">Family Information</a></li>
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
										    			<h4>Information About Family Head परिवार के मुखिया के बारे में जानकारी </h4>
										    			<hr>
										    		</div>

										    		<div class="col-md-2 text-right">
										    			<h4>
										    				<a href="javascript:;" id="edit_profile" class="edit_profile">Edit Profile</a>
										    			</h4>
										    		</div>
									    		</div>

									    	<form class="form-inline" action="{{ route('updatePersonalInfo') }}" method="post">

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

													<div class="col-md-4">
												    	<h4>Mobile No.  मोबाइल नंबर(2)</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control personal_info" placeholder="+91-123456789" name="phone" id="phone" value="{{$user->phone}}" readonly required="required">
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Email Id</h4>
												    	<div class="form-group">
													      <input type="email" class="form-control" placeholder="+91-123456789" name="email" id="email" value="{{$user->email}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Religion/धर्म</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" name="religion" id="religion" value="हिन्दू" disabled>
													    </div>
												    </div>

													<div class="col-md-4">
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

											    	<div class="col-md-4">
											    		<h4>Cast / जाति </h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control personal_info" placeholder="जाति" name="cast" id="cast" value="{{$user->cast}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Sub Cast/उपजाति/घटक</h4>
													    <div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="उपजाति" name="sub_cast" id="sub_cast" value="{{$user->sub_cast}}" readonly>
													    </div>
												    </div>

											    	<div class="col-md-4">
											    		<h4>गौत्र (Gotre)</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control personal_info" placeholder="गौत्र" name="gotra" id="gotra" value="{{$user->gotra}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>बंक </h4>
													    <div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="बंक" name="bunk" id="bunk" value="{{$user->bunk}}" readonly>
													    </div>
												    </div>

													<div class="col-md-4 mb10px">
														<h4>मूल निवासी (Origin Place)</h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="1" placeholder="मूल निवासी(स्थान का नाम , जिला, राज्य दें) " name="origin_place" id="origin_place" readonly>{{$user->origin_place}}</textarea>
													    </div>
												    </div>

													<div class="col-md-4">
												    	<h4>Date of Birth / जन्म की तारीख</h4>
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control personal_info datepicker" placeholder="20-12-1990" name="dob" id="dob" value="{{$user->dob}}" readonly>
													    </div>
												    </div>

											   		<div class="col-md-4">
												    	<h4>Married / शादी-शुदा </h4>
													    <div class="form-group ">
													    	@if($user->married==2)
													    		<input type="radio" class="personal_radio personal_info" name="married" value="1"> Yes
												   				<input type="radio" class="personal_radio personal_info" name="married" value="2" checked="checked"> No
													    	@else
													    		<input type="radio" class="personal_radio personal_info" name="married" value="1" checked="checked"> Yes
												   				<input type="radio" class="personal_radio personal_info" name="married" value="2"> No
												   			@endif
												   		 </div>
												    </div>

													<div class="col-md-4">
												    	<h4>Marriage Date/ शादी की तारीख</h4>
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control personal_info datepicker" placeholder="20-12-1990" name="marriage_date" id="marriage_date" value="{{$user->marriage_date}}" readonly>
													    </div>
												    </div>

													<div class="col-md-4">
												    	<h4>Life Partner Name/ जीवन साथी का नाम</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="Life Partner Name" name="life_partner" id="life_partner" value="{{$user->life_partner_name}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>Education/शिक्षा </h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="Education/शिक्षा " name="education" id="education" value="{{$user->education}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>विशेष योग्यता(Special Qualification)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="विशेष योग्यता" name="special_qualification" id="special_qualification" value="{{$user->special_qualification}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>अनुभव क्षेत्र(Experience Field)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="अनुभव क्षेत्र" name="experience_field" id="experience_field" value="{{$user->experience_field}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>Occupation(काम-धंधा या व्यवसाय)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="Occupation(काम-धंधा या व्यवसाय)" name="occupation" id="occupation" value="{{$user->occupation}}" readonly>
													    </div>
												    </div>

													<div class="col-md-4 mb20px">
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

													<div class="col-md-6 mb20px">
														<h4>कार्यालय/व्यापार/व्यवसाय का पता</h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="1" placeholder="कार्यालय/व्यापार/व्यवसाय का पता " name="occupation_address" id="occupation_address" readonly>{{$user->occupation_address}}</textarea>
													    </div>

														<div class="col-md-4">
													    	<h4>पिन कोड</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="पिन कोड" name="occupation_pincode" id="occupation_pincode" value="{{$user->occupation_pincode}}" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
													    	<h4>जिला</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="जिला" name="occupation_district" id="occupation_district" value="{{$user->occupation_district}}" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
														    <h4>राज्य</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="राज्य" name="occupation_state" id="occupation_state" value="{{$user->occupation_state}}" readonly>
														    </div>
													    </div>
												    </div>

													<div class="col-md-6 mb20px">
														<h4>निवास का पता (Residential Address)</h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="1" placeholder="निवास का पता" name="residential_address" id="residential_address" readonly>{{$user->residential_address}}</textarea>
													    </div>

														<div class="col-md-4">
													    	<h4>पिन कोड</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="पिन कोड" name="residential_pincode" id="residential_pincode" value="{{$user->residential_pincode}}" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
													    	<h4>जिला</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="जिला" name="residential_district" id="residential_district" value="{{$user->residential_district}}" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
														    <h4>राज्य</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="राज्य" name="residential_state" id="residential_state" value="{{$user->residential_state}}" readonly>
														    </div>
													    </div>
												    </div>

													<div class="col-md-4 mb20px">
													    <h4>समाज सेवा हेतु समय दान व रूचि क्षेत्र </h4>
														<div class="form-group ml0px">
												      		<input type="text" name="social_hours" id="social_hours" class="personal_info form-control" style="width: 10%;" value="{{$user->social_hours}}" readonly>
													      		&nbsp;&nbsp;&nbsp;घंटे &nbsp;&nbsp;

													      	<input type="text" name="social_field" id="social_field" class="personal_info form-control" style="width: 50%;" value="{{$user->social_field}}" readonly>
													      		&nbsp;&nbsp;&nbsp;<br>

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

													<div class="col-md-8 mb20px">

													<h4>प्रतिवर्ष न्यूनतम आर्थिक सहयोग 100/- प्रति प्राणी  के लिए सहमत हो |</h4>
													<p style="color:blue">(100/- वार्षिक दाता इस संस्था का साधारण/प्रतिनधि/कार्यकारिणी सदस्य व पदाधकारी बन सकता हैं जिसे voting right भी होगा )</p>

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

													<div class="col-md-12 mb40px">
														<h4>स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें</h4>
												    	<div class="form-group">
										      				<textarea class="form-control personal_info" rows="5" placeholder="स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें" name="bio" id="bio" readonly>{{$user->bio}}</textarea>
													    </div>
												    </div>

												    <div class="col-md-12 update_personal_info text-right" style="display:none;">
														<input type="submit" class="btn btn-success personal_info" name="update_personal_info" id="update_personal_info" value="update personal info">
													</div>
												</div>
											</form>


<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->

											<div class="row">
												<div class="col-md-8">
									    			<h4>Optional Information / ऐच्छिक सूचनाएं </h4>
									    			<hr>
									    		</div>

									    		<div class="col-md-4 text-right">
									    			<h4>
								    					<a href="javascript:;" id="edit_optional_information" class="edit_optional_information">
								    						Edit Optional Information
								    					</a>
									    			</h4>
									    		</div>
								    		</div>

								    		<form class="form-inline" action="{{ route('updateOptionalInfo') }}" method="post">

												{{ csrf_field() }}

												<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

								    			<div class="row">
												    <div class="col-md-6">
												    	<h4>1. Blood Group / रक्त समूह</h4>
												    	<div class="form-group">
												    		<select class="form-control radio" required="" name="bloodgroup" id="bloodgroup">

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

												    <div class="col-md-6 mb20px">
									  					<h4>2. किसी को रक्त की जरूरत पड़ने पर सुचना प्राप्त करना चाहेंगे</h4>
													    <div class="form-group">

													    	@if($user_optional_details->blood_information==2)
													    		<input type="radio" name="blood_information" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="blood_information" class="radio" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="blood_information" class="radio" value="1" checked="checked">
													      		Yes
													      		<input type="radio" name="blood_information" class="radio" value="2">
													      		No
												   			@endif

													  	</div>
												    </div>

												    <div class="col-md-12 mb10px">

														<h4>3. आप उपभोक्ता संघ (Consumer Forum) का सदस्य बनना चाहते हैं
															<a href="javascript:;" style="color:blue;">see link</a>
														</h4>
													    <div class="form-group ml0px">

													    	@if($user_optional_details->consumer_forum==2)
													    		<input type="radio" name="consumer_forum" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="consumer_forum" class="radio" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="consumer_forum" class="radio" value="1" checked="checked">
													      		Yes
													      		<input type="radio" name="consumer_forum" class="radio" value="2">
													      		No
												   			@endif

													  	</div>

												  	</div>

												  	<div class="col-md-12 mb10px">
												    	<h4>4. May I Help You Club का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">

													    	@if($user_optional_details->club_member==2)
													    		<input type="radio" name="club_member" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="club_member" class="radio" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="club_member" class="radio" value="1" checked="checked">
													      		Yes
													      		<input type="radio" name="club_member" class="radio" value="2">
													      		No
												   			@endif

													 	</div>
												 	</div>

												 	<div class="col-md-12 mb10px">
												    	<h4>5. ABC Club का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">

													    	@if($user_optional_details->abc_club_member==2)
													    		<input type="radio" name="abc_club_member" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="abc_club_member" class="radio" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="abc_club_member" class="radio" value="1" checked="checked">
													      		Yes
													      		<input type="radio" name="abc_club_member" class="radio" value="2">
													      		No
												   			@endif

														</div>
													</div>

													<div class="col-md-12 mb10px">
												    	<h4>6. किसी प्रोजेक्ट समिति का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">

													    	@if($user_optional_details->project_community==2)
													    		<input type="radio" name="project_community" class="radio" value="1">
														      	Yes
														      	<input type="radio" name="project_community" class="radio" value="2" checked="checked">
														      	No
												   			@else
												   				<input type="radio" name="project_community" class="radio" value="1" checked="checked">
														      	Yes
														      	<input type="radio" name="project_community" class="radio" value="2">
														      	No
												   			@endif

													   	</div>
												   	</div>

												   	<div class="col-md-12 mb10px">
												    	<h4>7. वैश्य पंचायत / वैश्य वाहिनी का सदस्य बनना चाहोगे
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">

													    	@if($user_optional_details->vaishya_panchayat==2)
													    		<input type="radio" name="vaishya_panchayat" class="radio" value="1">
														      	Yes
													      		<input type="radio" name="vaishya_panchayat" class="radio" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="vaishya_panchayat" class="radio" value="1" checked="checked">
														      	Yes
													      		<input type="radio" name="vaishya_panchayat" class="radio" value="2">
													      		No
												   			@endif

														</div>
													</div>

													<div class="col-md-12 mb10px">
												     	<h4>8. मृत्यु होने पर ऑंखे दान/अंग दान/शरीर दान करना चाहेंगे</h4>

													    <div class="form-group ml0px">

													    	@if($user_optional_details->donate_body_parts==2)
													    		<input type="radio" name="donate_body_parts" class="radio" value="1">
													      		Yes
													      		<input type="radio" name="donate_body_parts" class="radio" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="donate_body_parts" class="radio" value="1" checked="checked">
													      		Yes
													      		<input type="radio" name="donate_body_parts" class="radio" value="2">
													      		No
												   			@endif

													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
												     	<h4>9. अपने समाज की किस संस्था से जुड़े हुए हैं |</h4>

													    <div class="form-group ml0px">
													      	<input type="text" name="samaj_sanstha" value="{{$user_optional_details->samaj_sanstha}}" class="form-control optional_info" readonly>
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
												     	<h4>10. समाज की किस पत्रिका के सदस्य हो | </h4>

													    <div class="form-group ml0px">
													      	<input type="text" name="samaj_patrika" value="{{$user_optional_details->samaj_patrika}}" class="form-control optional_info" readonly>
													    </div>
												    </div>


												    <div class="col-md-12 mb10px">
												     	<h4>11. आवास</h4>

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

												    <div class="col-md-12 mb10px">
													    <h4>12. अपना वाहन </h4>

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

												    <div class="col-md-12 mb10px">
													    <h4>13. परिवार में किसी सदस्य का पहचान पत्र,वोट कार्ड,राशन कार्ड,हेल्थ कार्ड,वरिष्ठ नागरिक कार्ड या विधवा पेंशन बनना है ?</h4>

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

												    <div class="col-md-12 mb10px">
													    <h4>14. PAN Card No.</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control optional_info" placeholder="Pan Card No" name="pan_card" id="pan_card" value="{{$user_optional_details->pan_card}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
													    <h4>15. Aadhar Card No.</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control optional_info" placeholder="Aadhar Card No." name="adhar_card" id="adhar_card" value="{{$user_optional_details->adhar_card}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
											    		<h4>16. परिवार की वार्षिक आय</h4>
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

												    		<select class="form-control radio" required="" name="annual_income">

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
													    <h4>17.<input type="checkbox" placeholder="Aadhar Card No." class="radio" name="agree"> उपरोक्त सभी सूचना सही हैं व मैंने अपनी इच्छा से दी हैं |</h4>

														<div class="col-md-12 update_optional_info text-right" style="display:none;">
															<input type="submit" class="btn btn-success" name="update_optional_info" id="update_optional_info" value="update optional info">
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
													@foreach($familymember as $member)
												  	<tr>
												      	<td>{{$member->name}}</td>
												      	<td>{{$member->email}}</td>
												      	<td>{{$member->phone}}</td>
												      	<td>{{$member->relation_to_head_member}}</td>
												      	<td>
												      		<a href="{{route('viewfamilymember', ['id' => $member->id])}}" class="btn btn-info btn-xs">view</a>
												       		<a href="{{route('deletefamilymember', ['id' => $member->id])}}" class="btn btn-danger btn-xs">delete</a>
											       		</td>
											     	 </tr>
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
				                        	<form class="form-inline" action="{{ route('add_member') }}" method="post">

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
										    			<h4>Add Family Members परिवार के सदस्यों को यहां जोड़ें</h4>
										    			<hr>
										    		</div>

									    		</div>

									    		<div class="row">
											   		<div class="col-md-4">
											   			<h4>परिजन का पूरा नाम</h4>
												    	<div class="form-group" style="margin-bottom: 30px;">
													      	<input type="text" class="form-control member_profile" placeholder="Name" name="name" id="name">
													    </div>
													    <div class="col-md-6">
											    	    	<h4>मुखिया से सम्बन्ध </h4>
													    	<div class="form-group">
														      <input type="tel" class="form-control member_profile" placeholder="मुखिया से सम्बन्ध" name="relation_to_head_member" id="relation_to_head_member">
												    		</div>
											    		</div>
										    		 	<div class="col-md-6">
													    	<h4>Gender / लिंग </h4>
														    <div class="form-group ">
													    		<input type="radio" class="" name="m_gender" value="1">&nbsp;&nbsp;Male
												   				<input type="radio" class="" name="m_gender" value="2">&nbsp;&nbsp;Female
													   		</div>
												   		 </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Father/Husband Name  पिता / पति का नाम </h4>
													    <div class="form-group" style="margin-bottom: 30px;">
													      <input type="text" class="form-control" placeholder="Last Name" name="father_husband_name" id="father_husband_name">
													    </div>

		    									    	<h4>Mobile/Whats app No.  मोबाइल नंबर</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control" placeholder="+91-123456789" name="whatsapp_mobile" id="whatsapp_mobile">
													    </div>
												    </div>

				    								<div class="col-md-2">
								                    	<img alt="image" class="img-responsive mt10" src="resources/uploads/profile_images/{{$user->image}}" style="width: 140px;height: 150px;margin-left: 10px;">
								                    	<p class="text-center">परिवार के मुखिया </p>
													</div>

													<div class="col-md-4">
												    	<h4>Mobile No.  मोबाइल नंबर(2)</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control" placeholder="+91-123456789" name="phone" id="phone">
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Email Id</h4>
												    	<div class="form-group">
													      <input type="email" class="form-control" placeholder="+91-123456789" name="email" id="email">
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Religion/धर्म</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" name="religion" id="religion" value="हिन्दू" disabled>
													    </div>
												    </div>

													<div class="col-md-4">
												    	<h4>मत/सम्प्रदाय </h4>
												    	<div class="form-group">
												    		<select class="form-control" required="" name="sampraday" id="sampraday">
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

											    	<div class="col-md-4">
											    		<h4>Cast / जाति </h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control" placeholder="जाति" name="cast">
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Sub Cast/उपजाति/घटक</h4>
													    <div class="form-group">
													      <input type="text" class="form-control" placeholder="उपजाति" name="sub_cast">
													    </div>
												    </div>

											    	<div class="col-md-4">
											    		<h4>गौत्र (Gotre)</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control" placeholder="गौत्र" name="gotra">
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>बंक </h4>
													    <div class="form-group">
													      <input type="text" class="form-control" placeholder="बंक" name="bunk">
													    </div>
												    </div>

													<div class="col-md-4 mb10px">
														<h4>मूल निवासी (Origin Place)</h4>
												    	<div class="form-group">
										      			<textarea class="form-control" rows="1" placeholder="मूल निवासी(स्थान का नाम , जिला, राज्य दें) " name="origin_place" id="origin_place"></textarea>
													    </div>
												    </div>

													<div class="col-md-4">
												    	<h4>Date of Birth / जन्म की तारीख</h4>
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control datepicker" placeholder="DOB" name="dob" id="dob">
													    </div>
												    </div>

											   		<div class="col-md-4">
												    	<h4>Married / शादी-शुदा </h4>
													    <div class="form-group ">
												    		<input type="radio" class="" name="married" value="1">Yes
											   				<input type="radio" class="" name="married" value="2">No
												   		 </div>
												    </div>

													<div class="col-md-4">
												    	<h4>Marriage Date/ शादी की तारीख</h4>
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control datepicker" placeholder="Marriage Date" name="marriage_date" id="marriage_date">
													    </div>
												    </div>

													<div class="col-md-4">
												    	<h4>Life Partner Name/ जीवन साथी का नाम</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" placeholder="Life Partner Name" name="life_partner_name" id="life_partner_name">
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>Education/शिक्षा </h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" placeholder="Education/शिक्षा " name="education" id="education">
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>विशेष योग्यता(Special Qualification)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" placeholder="विशेष योग्यता" name="special_qualification" id="special_qualification">
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>अनुभव क्षेत्र(Experience Field)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" placeholder="अनुभव क्षेत्र" name="experience_field" id="experience_field">
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>Occupation(काम-धंधा या व्यवसाय)</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control" placeholder="Occupation(काम-धंधा या व्यवसाय)" name="occupation" id="occupation">
													    </div>
												    </div>


													<div class="col-md-4 mb20px">
												    	<h4>सेवा निवृत हैं</h4>
													    <div class="form-group ">
												    		<input type="radio" class="" name="seva_nivrat" value="1">Yes
											   				<input type="radio" class="" name="seva_nivrat" value="2">No
												   		 </div>
												    </div>

													<div class="col-md-6 mb20px">
														<h4>कार्यालय/व्यापार/व्यवसाय का पता</h4>
												    	<div class="form-group">
										      			<textarea class="form-control" rows="1" placeholder="कार्यालय/व्यापार/व्यवसाय का पता " name="occupation_address" id="occupation_address"></textarea>
													    </div>

														<div class="col-md-4">
													    	<h4>पिन कोड</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control" placeholder="पिन कोड" name="occupation_pincode" id="occupation_pincode">
														    </div>
													    </div>

														<div class="col-md-4">
													    	<h4>जिला</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control" placeholder="जिला" name="occupation_district" id="occupation_district">
														    </div>
													    </div>

														<div class="col-md-4">
														    <h4>राज्य</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control" placeholder="राज्य" name="occupation_state" id="occupation_state">
														    </div>
													    </div>
												    </div>

													<div class="col-md-6 mb20px">
														<h4>निवास का पता (Residential Address)</h4>
												    	<div class="form-group">
										      			<textarea class="form-control" rows="1" placeholder="निवास का पता" name="residential_address" id="residential_address"></textarea>
													    </div>

														<div class="col-md-4">
													    	<h4>पिन कोड</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control" placeholder="पिन कोड" name="residential_pincode" id="residential_pincode">
														    </div>
													    </div>

														<div class="col-md-4">
													    	<h4>जिला</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control" placeholder="जिला" name="residential_district" id="residential_district">
														    </div>
													    </div>

														<div class="col-md-4">
														    <h4>राज्य</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control" placeholder="राज्य" name="residential_state" id="residential_state">
														    </div>
													    </div>
												    </div>

													<div class="col-md-4 mb20px">
													    <h4>समाज सेवा हेतु समय दान व रूचि क्षेत्र </h4>
														<div class="form-group ml0px">
												      		<input type="text" name="social_hours" class="form-control" style="width: 10%;"> &nbsp;&nbsp;&nbsp;घंटे &nbsp;&nbsp;

													      	<input type="text" name="social_field" style="width: 50%;" class="form-control">&nbsp;&nbsp;&nbsp;Place<br>

												      		<input type="radio" name="social_hours_according" class="" value="1">
													      		Daily
												      		<input type="radio" name="social_hours_according" class="" value="2">
													      		Weekly
												      		<input type="radio" name="social_hours_according" class="" value="3">
													      		Monthly
													    </div>
												    </div>

													<div class="col-md-8 mb20px">
														<h4>प्रतिवर्ष न्यूनतम आर्थिक सहयोग 100/- प्रति प्राणी  के लिए सहमत हो |</h4>
														<p style="color:blue">(100/- वार्षिक दाता इस संस्था का साधारण/प्रतिनधि/कार्यकारिणी सदस्य व पदाधकारी बन सकता हैं जिसे voting right भी होगा )</p>
													    <div class="form-group ml0px">
												      		<input type="radio" name="donate_hundred" class="" value="1">Yes
												      		<input type="radio" name="donate_hundred" class="" value="2">
													      		No
													    </div>
												    </div>

													<div class="col-md-12 mb40px">
														<h4>स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें</h4>
												    	<div class="form-group">
										      				<textarea class="form-control" rows="5" placeholder="स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें" name="bio" id="bio">
										      				</textarea>
													    </div>
												    </div>

												</div>

												<div class="row">
													<div class="col-md-8">
										    			<h4>Member Optional Information / ऐच्छिक सूचनाएं </h4>
										    			<hr>
										    		</div>
									    		</div>

								    			<div class="row">
												    <div class="col-md-6">
												    	<h4>1. Blood Group / रक्त समूह</h4>
												    	<div class="form-group">
												    		<select class="form-control" required="" name="blood_group">
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

												    <div class="col-md-6 mb20px">
									  					<h4>2. किसी को रक्त की जरूरत पड़ने पर सुचना प्राप्त करना चाहेंगे</h4>
													    <div class="form-group">
													    	<input type="radio" name="blood_information" class="" value="1">Yes
												      		<input type="radio" name="blood_information" class="" value="2">No
													  	</div>
												    </div>

												    <div class="col-md-12 mb10px">
														<h4>3. आप उपभोक्ता संघ (Consumer Forum) का सदस्य बनना चाहते हैं
															<a href="javascript:;" style="color:blue;">see link</a>
														</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="consumer_forum" class="" value="1">Yes
												      		<input type="radio" name="consumer_forum" class="" value="2">No
													  	</div>
												  	</div>

												  	<div class="col-md-12 mb10px">
												    	<h4>4. May I Help You Club का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="club_member" class="" value="1">Yes
												      		<input type="radio" name="club_member" class="" value="2">No
													 	</div>
												 	</div>

												 	<div class="col-md-12 mb10px">
												    	<h4>5. ABC Club का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="abc_club_member" class="" value="1">Yes
												      		<input type="radio" name="abc_club_member" class="" value="2">No
														</div>
													</div>

													<div class="col-md-12 mb10px">
												    	<h4>6. किसी प्रोजेक्ट समिति का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="project_community" class="" value="1">Yes
													      	<input type="radio" name="project_community" class="" value="2">No
													   	</div>
												   	</div>

												   	<div class="col-md-12 mb10px">
												    	<h4>7. वैश्य पंचायत / वैश्य वाहिनी का सदस्य बनना चाहोगे
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="vaishya_panchayat" class="" value="1">Yes
												      		<input type="radio" name="vaishya_panchayat" class="" value="2">No
														</div>
													</div>

													<div class="col-md-12 mb10px">
												     	<h4>8. मृत्यु होने पर ऑंखे दान/अंग दान/शरीर दान करना चाहेंगे</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="donate_body_parts" class="" value="1">Yes
												      		<input type="radio" name="donate_body_parts" class="" value="2">No
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
												     	<h4>9. अपने समाज की किस संस्था से जुड़े हुए हैं |</h4>
													    <div class="form-group ml0px">
													      	<input type="text" name="samaj_sanstha" class="form-control">
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
												     	<h4>10. समाज की किस पत्रिका के सदस्य हो | </h4>
													    <div class="form-group ml0px">
													      	<input type="text" name="samaj_patrika" class="form-control">
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
												     	<h4>11. आवास</h4>
													    <div class="form-group ml0px">
												      		<input type="radio" name="self_home" class="" value="1">अपना
												      		<input type="radio" name="self_home" class="" value="2">किराये का
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
													    <h4>12. अपना वाहन </h4>
													    <div class="form-group ml0px">
												      		<input type="checkbox" name="vehicle[]" class="" value="1" >Two Wheeler
												      		<input type="checkbox" name="vehicle[]" class="" value="2">Four Wheeler
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
													    <h4>14. PAN Card No.</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control" placeholder="Pan Card No" name="pan_card" id="pan_card">
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
													    <h4>15. Aadhar Card No.</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" placeholder="Aadhar Card No." name="adhar_card" id="adhar_card">
													    </div>
												    </div>

											    	<div class="col-md-12 mb10px">
													    <h4>17.<input type="checkbox" placeholder="Aadhar Card No." class="	" name="agree"> उपरोक्त सभी सूचना सही हैं व मैंने अपनी इच्छा से दी हैं |</h4>
													</div>

													<div class="col-md-12 text-right">
														<input type="submit" class="btn btn-success" name="add_member" id="add_member" value="Add Member">
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
@endsection