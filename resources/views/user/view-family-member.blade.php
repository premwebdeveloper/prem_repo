@extends('layouts.public_app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-default">
                <div class="wrapper wrapper-content mt30px">
				    <div class="row animated fadeInRight">
				        <div class="col-md-12">
				            <div class="ibox float-e-margins">

								<div class="row mb10px">

									<div class="col-md-12">
									 	<!-- Update member success message -->
					                	@if(session('update_member'))
											<div class="alert alert-success">{{ session('update_member') }}</div>
										@endif

									 	<!-- Delete member success message -->
					                	@if(session('delete_member'))
											<div class="alert alert-success">{{ session('delete_member') }}</div>
										@endif
									</div>

									<div class="col-md-6">
					    				<h4>Family Member View</h4>
					    			</div>

									<div class="col-md-6 text-right">
					    				<h4><a href="javascript:;" id="edit_member_profile">Edit Personal Info</a></h4>
					    			</div>

					    		</div>

					    		<hr>

								<form class="form-inline" action="{{ route('updateMemberPersonalInfo') }}" method="post" enctype="multipart/form-data">

									{{ csrf_field() }}

									<input type="hidden" name="member_id" value="{{ $viewfamily->id }}">
									<input type="hidden" name="f_member_user_id" value="{{ $viewfamily->f_member_user_id }}">

						    		<div class="row">
								   		<div class="col-md-4">
								   			<h4>परिजन का पूरा नाम</h4>
									    	<div class="form-group" style="margin-bottom: 30px;">
										      	<input type="text" class="form-control member_profile" placeholder="Name" name="name" id="name" readonly value="{{ $viewfamily->name }}">
										    </div>
										    <div class="col-md-6">
								    	    	<h4>मुखिया से सम्बन्ध </h4>
										    	<div class="form-group">
											      <input type="tel" class="form-control member_profile" placeholder="मुखिया से सम्बन्ध" name="relation_to_head_member" id="relation_to_head_member" readonly value="{{ $viewfamily->relation_to_head_member }}">
									    		</div>
								    		</div>
							    		 	<div class="col-md-6">
										    	<h4>Gender / लिंग </h4>
											    <div class="form-group ">
											    	@if($viewfamily->gender == 1)
										    			<input type="radio" class="member_radio" name="m_gender" value="1" checked="checked">&nbsp;&nbsp;Male
									   					<input type="radio" class="member_radio" name="m_gender" value="2">&nbsp;&nbsp;
									   				@else
									   					<input type="radio" class="member_radio" name="m_gender" value="1">&nbsp;&nbsp;Male
									   					<input type="radio" class="member_radio" name="m_gender" value="2" checked="checked">&nbsp;&nbsp;Female
									   				@endif
										   		</div>
									   		 </div>
									    </div>

									    <div class="col-md-4">
									    	<h4>Father/Husband Name  पिता / पति का नाम </h4>
										    <div class="form-group" style="margin-bottom: 30px;">
										      <input type="text" class="form-control member_profile" placeholder="Father / Husband Name" name="father_husband_name" id="father_husband_name" readonly value="{{ $viewfamily->father_husband_name }}">
										    </div>

									    	<h4>Mobile/Whats app No.  मोबाइल नंबर</h4>
									    	<div class="form-group">
										      <input type="tel" class="form-control member_profile" placeholder="+91-123456789" name="whatsapp_mobile" id="whatsapp_mobile" readonly value="{{ $viewfamily->whatsapp_mobile }}">
										    </div>
									    </div>

	    								<div class="col-md-4">
					                    	<img alt="image" class="img-responsive mt10" src="resources/uploads/profile_images/{{$viewfamily->image}}" style="width: 140px;height: 115px;margin-left: 10px;">
					                    	<p>&nbsp;</p>
					                    	<input type="file" name="image" class="form-control personal_info member_radio">
										</div>

										<div class="col-md-4">
									    	<h4>Mobile No.  मोबाइल नंबर(2)</h4>
									    	<div class="form-group">
										      <input type="tel" class="form-control member_profile" placeholder="+91-123456789" name="phone" id="phone" readonly value="{{ $viewfamily->phone }}">
										    </div>
									    </div>

									    <div class="col-md-4">
									    	<h4>Email Id</h4>
									    	<div class="form-group">
										      <input type="email" class="form-control member_profile" placeholder="Email" name="email" id="email" readonly value="{{ $viewfamily->email }}">
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
									    		<select class="form-control member_radio" required="" name="sampraday" id="sampraday">

													@if($viewfamily->sampraday != '')
									    				<option value="{{ $viewfamily->sampraday }}" selected="selected">{{ $viewfamily->sampraday }}</option>
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
										      	<input type="text" class="form-control member_profile" placeholder="जाति" name="cast" readonly value="{{ $viewfamily->name }}">
										    </div>
									    </div>

									    <div class="col-md-4">
									    	<h4>Sub Cast/उपजाति/घटक</h4>
										    <div class="form-group">
										      <input type="text" class="form-control member_profile" placeholder="उपजाति" name="sub_cast" readonly value="{{ $viewfamily->sub_cast }}">
										    </div>
									    </div>

								    	<div class="col-md-4">
								    		<h4>गौत्र (Gotre)</h4>
									    	<div class="form-group">
										      	<input type="text" class="form-control member_profile" placeholder="गौत्र" name="gotra" readonly value="{{ $viewfamily->gotra }}">
										    </div>
									    </div>

									    <div class="col-md-4">
									    	<h4>बंक </h4>
										    <div class="form-group">
										      <input type="text" class="form-control member_profile" placeholder="बंक" name="bunk" readonly value="{{ $viewfamily->bunk }}">
										    </div>
									    </div>

										<div class="col-md-4 mb10px">
											<h4>मूल निवासी (Origin Place)</h4>
									    	<div class="form-group">
							      			<textarea class="form-control member_profile" rows="1" placeholder="मूल निवासी(स्थान का नाम , जिला, राज्य दें) " name="origin_place" id="origin_place" readonly>{{ $viewfamily->origin_place }}</textarea>
										    </div>
									    </div>

										<div class="col-md-4">
									    	<h4>Date of Birth / जन्म की तारीख</h4>
									    	<div class="form-group">
										      <input type="text" format="Y-m-d" class="form-control datepicker member_radio" placeholder="DOB" name="dob" id="dob" value="{{ $viewfamily->dob }}">
										    </div>
									    </div>

								   		<div class="col-md-4">
									    	<h4>Married / शादी-शुदा </h4>
										    <div class="form-group ">
										    	@if($viewfamily->married == 1)
										    		<input type="radio" class="member_radio" name="married" value="1" checked="checked">Yes
								   					<input type="radio" class="member_radio" name="married" value="2">No
								   				@else
								   					<input type="radio" class="member_radio" name="married" value="1">Yes
								   					<input type="radio" class="member_radio" name="married" value="2" checked="checked">No
								   				@endif
									   		 </div>
									    </div>

										<div class="col-md-4">
									    	<h4>Marriage Date/ शादी की तारीख</h4>
									    	<div class="form-group">
										      <input type="text" format="Y-m-d" class="form-control datepicker member_radio" placeholder="Marriage Date" name="marriage_date" id="marriage_date" value="{{ $viewfamily->marriage_date }}">
										    </div>
									    </div>

										<div class="col-md-4">
									    	<h4>Life Partner Name/ जीवन साथी का नाम</h4>
									    	<div class="form-group">
										      <input type="text" class="form-control member_profile" placeholder="Life Partner Name" name="life_partner_name" id="life_partner_name" readonly value="{{ $viewfamily->life_partner_name }}">
										    </div>
									    </div>

									    <div class="col-md-4">
										    <h4>Education/शिक्षा </h4>
									    	<div class="form-group">
										      <input type="text" class="form-control member_profile" placeholder="Education/शिक्षा " name="education" id="education" readonly value="{{ $viewfamily->education }}">
										    </div>
									    </div>

									    <div class="col-md-4">
										    <h4>विशेष योग्यता(Special Qualification)</h4>
									    	<div class="form-group">
										      <input type="text" class="form-control member_profile" placeholder="विशेष योग्यता" name="special_qualification" id="special_qualification" readonly value="{{ $viewfamily->special_qualification }}">
										    </div>
									    </div>

									    <div class="col-md-4">
										    <h4>अनुभव क्षेत्र(Experience Field)</h4>
									    	<div class="form-group">
										      <input type="text" class="form-control member_profile" placeholder="अनुभव क्षेत्र" name="experience_field" id="experience_field" readonly value="{{ $viewfamily->experience_field }}">
										    </div>
									    </div>

									    <div class="col-md-4">
										    <h4>Occupation(काम-धंधा या व्यवसाय)</h4>
									    	<div class="form-group">
										      	<input type="text" class="form-control member_profile" placeholder="Occupation(काम-धंधा या व्यवसाय)" name="occupation" id="occupation" readonly value="{{ $viewfamily->occupation }}">
										    </div>
									    </div>

										<div class="col-md-4 mb20px">
									    	<h4>सेवा निवृत हैं</h4>
										    <div class="form-group ">
										    	@if($viewfamily->seva_nivrat == 1)
										    		<input type="radio" class="member_radio" name="seva_nivrat" value="1" checked="checked">Yes
								   					<input type="radio" class="member_radio" name="seva_nivrat" value="2">No
								   				@else
								   					<input type="radio" class="member_radio" name="seva_nivrat" value="1" checked="checked">Yes
								   					<input type="radio" class="member_radio" name="seva_nivrat" value="2" checked="checked">No
								   				@endif
									   		 </div>
									    </div>

										<div class="col-md-6 mb20px">
											<h4>कार्यालय/व्यापार/व्यवसाय का पता</h4>
									    	<div class="form-group">
							      			<textarea class="form-control member_profile" rows="1" placeholder="कार्यालय/व्यापार/व्यवसाय का पता " name="occupation_address" id="occupation_address" readonly> {{ $viewfamily->occupation_address }}</textarea>
										    </div>

											<div class="col-md-4">
										    	<h4>पिन कोड</h4>
										    	<div class="form-group">
											      <input type="text" class="form-control member_profile" placeholder="पिन कोड" name="occupation_pincode" id="occupation_pincode" readonly value="{{ $viewfamily->occupation_pincode }}">
											    </div>
										    </div>

											<div class="col-md-4">
										    	<h4>जिला</h4>
										    	<div class="form-group">
											      <input type="text" class="form-control member_profile" placeholder="जिला" name="occupation_district" id="occupation_district" readonly value="{{ $viewfamily->occupation_district }}">
											    </div>
										    </div>

											<div class="col-md-4">
											    <h4>राज्य</h4>
										    	<div class="form-group">
											      <input type="text" class="form-control member_profile" placeholder="राज्य" name="occupation_state" id="occupation_state" readonly value="{{ $viewfamily->occupation_state }}">
											    </div>
										    </div>
									    </div>

										<div class="col-md-6 mb20px">
											<h4>निवास का पता (Residential Address)</h4>
									    	<div class="form-group">
							      			<textarea class="form-control member_profile" rows="1" placeholder="निवास का पता" name="residential_address" id="residential_address" readonly> {{ $viewfamily->residential_address }}</textarea>
										    </div>

											<div class="col-md-4">
										    	<h4>पिन कोड</h4>
										    	<div class="form-group">
											      <input type="text" class="form-control member_profile" placeholder="पिन कोड" name="residential_pincode" id="residential_pincode" readonly value="{{ $viewfamily->residential_pincode }}">
											    </div>
										    </div>

											<div class="col-md-4">
										    	<h4>जिला</h4>
										    	<div class="form-group">
											      <input type="text" class="form-control member_profile" placeholder="जिला" name="residential_district" id="residential_district" readonly value="{{ $viewfamily->residential_district }}">
											    </div>
										    </div>

											<div class="col-md-4">
											    <h4>राज्य</h4>
										    	<div class="form-group">
											      <input type="text" class="form-control member_profile" placeholder="राज्य" name="residential_state" id="residential_state" readonly value="{{ $viewfamily->residential_state }}">
											    </div>
										    </div>
									    </div>

										<div class="col-md-4 mb20px">
										    <h4>समाज सेवा हेतु समय दान व रूचि क्षेत्र </h4>
											<div class="form-group ml0px">

									      		<input type="text" name="social_hours" class="form-control member_profile" style="width: 10%;" readonly value="{{ $viewfamily->social_hours }}"> &nbsp;&nbsp;&nbsp;घंटे &nbsp;&nbsp;

										      	<input type="text" name="social_field" style="width: 50%;" class="form-control member_profile" readonly value="{{ $viewfamily->social_field }}">&nbsp;&nbsp;&nbsp;Place<br>

												@if($viewfamily->social_hours_according == 1)
										    		<input type="radio" name="social_hours_according" class="member_radio" value="1" checked="checked">
										      		Daily
									      			<input type="radio" name="social_hours_according" class="member_radio" value="2" checked="checked">
										      		Weekly
									      			<input type="radio" name="social_hours_according" class="member_radio" value="3">
										      		Monthly
								   				@elseif($viewfamily->social_hours_according == 2)
								   					<input type="radio" name="social_hours_according" class="member_radio" value="1">
										      		Daily
									      			<input type="radio" name="social_hours_according" class="member_radio" value="2" checked="checked">
										      		Weekly
									      			<input type="radio" name="social_hours_according" class="member_radio" value="3">
										      		Monthly
								   				@else
								   					<input type="radio" name="social_hours_according" class="member_radio" value="1">
										      		Daily
									      			<input type="radio" name="social_hours_according" class="member_radio" value="2">
										      		Weekly
									      			<input type="radio" name="social_hours_according" class="member_radio" value="3" checked="checked">
										      		Monthly
								   				@endif
										    </div>
									    </div>

										<div class="col-md-8 mb20px">
											<h4>प्रतिवर्ष न्यूनतम आर्थिक सहयोग 100/- प्रति प्राणी  के लिए सहमत हो |</h4>
											<p style="color:blue">(100/- वार्षिक दाता इस संस्था का साधारण/प्रतिनधि/कार्यकारिणी सदस्य व पदाधकारी बन सकता हैं जिसे voting right भी होगा )</p>
										    <div class="form-group ml0px">
										    	@if($viewfamily->donate_hundred == 1)
										    		<input type="radio" name="donate_hundred" class="member_radio" value="1" checked="checked">Yes
									      			<input type="radio" name="donate_hundred" class="member_radio" value="2">No
								   				@else
								   					<input type="radio" name="donate_hundred" class="member_radio" value="1">Yes
									      			<input type="radio" name="donate_hundred" class="member_radio" value="2" checked="checked">No
								   				@endif
										    </div>
									    </div>

										<div class="col-md-12 mb40px">
											<h4>स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें</h4>
									    	<div class="form-group">
							      				<textarea class="form-control member_profile" rows="5" placeholder="स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें" name="bio" id="bio" readonly>{{ $viewfamily->bio }}
							      				</textarea>
										    </div>
									    </div>

									    <div class="col-md-12 update_member_profile text-left">
											<input type="submit" class="btn btn-success " name="update_member_personal_information" id="update_member_personal_information" value="Update Personal Information">
										</div>

									</div>

								</form>

								<form class="form-inline" action="{{ route('updateMemberOptionalInfo') }}" method="post">

									{{ csrf_field() }}

									<input type="hidden" name="member_optional_id" value="{{ $family_member_optional->id }}">

									<div class="row">
							    		<div class="col-md-6">
						    				<h4>Member Optional Information / ऐच्छिक सूचनाएं </h4>
						    			</div>

										<div class="col-md-6 text-right">
						    				<h4><a href="javascript:;" id="edit_member_optional">Edit Optional Info</a></h4>
						    			</div>
						    		</div>

						    		<hr>

					    			<div class="row">
									    <div class="col-md-6">
									    	<h4>1. Blood Group / रक्त समूह</h4>
									    	<div class="form-group">
									    		<select class="form-control member_optional_radio" required="" name="blood_group">

													@if($family_member_optional->blood_group)
														<option value="{{$family_member_optional->blood_group}}" selected>{{$family_member_optional->blood_group}}</option>
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
										    	@if($family_member_optional->blood_information==2)
										    		<input type="radio" name="blood_information" class="member_optional_radio" value="1">
										      		Yes
										      		<input type="radio" name="blood_information" class="member_optional_radio" value="2" checked="checked">
										      		No
									   			@else
									   				<input type="radio" name="blood_information" class="member_optional_radio" value="1" checked="checked">
										      		Yes
										      		<input type="radio" name="blood_information" class="member_optional_radio" value="2">
										      		No
									   			@endif
										  	</div>
									    </div>

									    <div class="col-md-12 mb10px">
											<h4>3. आप उपभोक्ता संघ (Consumer Forum) का सदस्य बनना चाहते हैं
												<a href="javascript:;" style="color:blue;">see link</a>
											</h4>
										    <div class="form-group ml0px">

										    	@if($family_member_optional->consumer_forum==2)
										    		<input type="radio" name="consumer_forum" class="member_optional_radio" value="1">
										      		Yes
										      		<input type="radio" name="consumer_forum" class="member_optional_radio" value="2" checked="checked">
										      		No
									   			@else
									   				<input type="radio" name="consumer_forum" class="member_optional_radio" value="1" checked="checked">
										      		Yes
										      		<input type="radio" name="consumer_forum" class="member_optional_radio" value="2">
										      		No
									   			@endif

										  	</div>
									  	</div>

									  	<div class="col-md-12 mb10px">
									    	<h4>4. May I Help You Club का सदस्य बनना चाहते हैं
									    		<a href="javascript:;" style="color:blue;">see link</a>
									    	</h4>
										    <div class="form-group ml0px">
										    	@if($family_member_optional->club_member==2)
										    		<input type="radio" name="club_member" class="member_optional_radio" value="1">
										      		Yes
										      		<input type="radio" name="club_member" class="member_optional_radio" value="2" checked="checked">
										      		No
									   			@else
									   				<input type="radio" name="club_member" class="member_optional_radio" value="1" checked="checked">
										      		Yes
										      		<input type="radio" name="club_member" class="member_optional_radio" value="2">
										      		No
									   			@endif

										 	</div>
									 	</div>

									 	<div class="col-md-12 mb10px">
									    	<h4>5. ABC Club का सदस्य बनना चाहते हैं
									    		<a href="javascript:;" style="color:blue;">see link</a>
									    	</h4>
										    <div class="form-group ml0px">
										    	@if($family_member_optional->abc_club_member==2)
										    		<input type="radio" name="abc_club_member" class="member_optional_radio" value="1">
										      		Yes
										      		<input type="radio" name="abc_club_member" class="member_optional_radio" value="2" checked="checked">
										      		No
									   			@else
									   				<input type="radio" name="abc_club_member" class="member_optional_radio" value="1" checked="checked">
										      		Yes
										      		<input type="radio" name="abc_club_member" class="member_optional_radio" value="2">
										      		No
									   			@endif

											</div>
										</div>

										<div class="col-md-12 mb10px">
									    	<h4>6. किसी प्रोजेक्ट समिति का सदस्य बनना चाहते हैं
									    		<a href="javascript:;" style="color:blue;">see link</a>
									    	</h4>
										    <div class="form-group ml0px">
										    	@if($family_member_optional->project_community==2)
										    		<input type="radio" name="project_community" class="member_optional_radio" value="1">
											      	Yes
											      	<input type="radio" name="project_community" class="member_optional_radio" value="2" checked="checked">
											      	No
									   			@else
									   				<input type="radio" name="project_community" class="member_optional_radio" value="1" checked="checked">
											      	Yes
											      	<input type="radio" name="project_community" class="member_optional_radio" value="2">
											      	No
									   			@endif

										   	</div>
									   	</div>

									   	<div class="col-md-12 mb10px">
									    	<h4>7. वैश्य पंचायत / वैश्य वाहिनी का सदस्य बनना चाहोगे
									    		<a href="javascript:;" style="color:blue;">see link</a>
									    	</h4>
										    <div class="form-group ml0px">
										    	@if($family_member_optional->vaishya_panchayat==2)
										    		<input type="radio" name="vaishya_panchayat" class="member_optional_radio" value="1">
											      	Yes
										      		<input type="radio" name="vaishya_panchayat" class="member_optional_radio" value="2" checked="checked">
										      		No
									   			@else
									   				<input type="radio" name="vaishya_panchayat" class="member_optional_radio" value="1" checked="checked">
											      	Yes
										      		<input type="radio" name="vaishya_panchayat" class="member_optional_radio" value="2">
										      		No
									   			@endif

											</div>
										</div>

										<div class="col-md-12 mb10px">
									     	<h4>8. मृत्यु होने पर ऑंखे दान/अंग दान/शरीर दान करना चाहेंगे</h4>
										    <div class="form-group ml0px">
										    	@if($family_member_optional->donate_body_parts==2)
										    		<input type="radio" name="donate_body_parts" class="member_optional_radio" value="1">
										      		Yes
										      		<input type="radio" name="donate_body_parts" class="member_optional_radio" value="2" checked="checked">
										      		No
									   			@else
									   				<input type="radio" name="donate_body_parts" class="member_optional_radio" value="1" checked="checked">
										      		Yes
										      		<input type="radio" name="donate_body_parts" class="member_optional_radio" value="2">
										      		No
									   			@endif
										    </div>
									    </div>

									    <div class="col-md-12 mb10px">
									     	<h4>9. अपने समाज की किस संस्था से जुड़े हुए हैं |</h4>
										    <div class="form-group ml0px">
										      	<input type="text" name="samaj_sanstha" class="form-control member_optional" readonly value="{{ $family_member_optional->samaj_sanstha }}">
										    </div>
									    </div>

									    <div class="col-md-12 mb10px">
									     	<h4>10. समाज की किस पत्रिका के सदस्य हो | </h4>
										    <div class="form-group ml0px">
										      	<input type="text" name="samaj_patrika" class="form-control member_optional" readonly value="{{ $family_member_optional->samaj_patrika }}">
										    </div>
									    </div>

									    <div class="col-md-12 mb10px">
									     	<h4>11. आवास</h4>
										    <div class="form-group ml0px">
										    	@if($family_member_optional->self_home==2)
										    		<input type="radio" name="self_home" class="member_optional_radio" value="1""> अपना
									      			<input type="radio" name="self_home" class="member_optional_radio" value="2" checked="checked"> किराये का
									   			@else
									   				<input type="radio" name="self_home" class="member_optional_radio" value="1" checked="checked"> अपना
									      			<input type="radio" name="self_home" class="member_optional_radio" value="2"> किराये का
									   			@endif
										    </div>
									    </div>

									    <div class="col-md-12 mb10px">
										    <h4>12. अपना वाहन </h4>
										    <div class="form-group ml0px">
										    	<?php
													$vehicle = $family_member_optional->vehicle;
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
									      		<input type="checkbox" name="vehicle[]" class="member_optional_radio" value="1" <?= $vehicle1; ?>>
										      		Two Wheeler
									      		<input type="checkbox" name="vehicle[]" class="member_optional_radio" value="2" <?= $vehicle2; ?>>
										      		Four Wheeler

										    </div>
									    </div>

									    <div class="col-md-12 mb10px">
										    <h4>14. PAN Card No.</h4>
									    	<div class="form-group">
										      	<input type="text" class="form-control member_optional" placeholder="Pan Card No" name="pan_card" id="pan_card" readonly value="{{ $family_member_optional->pan_card }}">
										    </div>
									    </div>

									    <div class="col-md-12 mb10px">
										    <h4>15. Aadhar Card No.</h4>
									    	<div class="form-group">
										      <input type="text" class="form-control member_optional" placeholder="Aadhar Card No." name="adhar_card" id="adhar_card" readonly value="{{ $family_member_optional->adhar_card }}">
										    </div>
									    </div>

								    	<div class="col-md-12 mb10px">
										    <h4>17.<input type="checkbox" placeholder="Aadhar Card No." class="member_optional_radio" name="agree" required=""> उपरोक्त सभी सूचना सही हैं व मैंने अपनी इच्छा से दी हैं |</h4>
										</div>

										<div class="col-md-12 update_member_optional text-right">
											<input type="submit" class="btn btn-success" name="update_member_optional_information" id="update_member_optional_information" value="Update Optional Information">
										</div>

									</form>

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