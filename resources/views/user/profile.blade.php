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
													      	<input type="text" class="form-control personal_info" placeholder="Full Name" name="fname" id="fname" value="{{$user->name}}" readonly>
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
													      <input type="text" class="form-control personal_info" placeholder="Father / Husband Name" name="lname" id="lname" value="" readonly>
													    </div>
		    									    	<h4>Mobile/Whats app No.  मोबाइल नंबर</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control personal_info" placeholder="+91-123456789" name="phone" id="phone" value="{{$user->phone}}" readonly>
													    </div>
												    </div>


				    								<div class="col-md-2">

								                    	<img alt="image" class="img-responsive mt10" src="resources/uploads/profile_images/{{$user->image}}" style="width: 140px;height: 150px;margin-left: 10px;">
								                    	<p class="text-center">परिवार के मुखिया </p>

													</div>

													<div class="col-md-4">
												    	<h4>Mobile No.  मोबाइल नंबर(2)</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control personal_info" placeholder="+91-123456789" name="phone" id="phone" value="{{$user->phone}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Email Id</h4>
												    	<div class="form-group">
													      <input type="email" class="form-control personal_info" placeholder="+91-123456789" name="email" id="phone" value="{{$user->email}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Religion/धर्म</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" name="email" id="phone" value="हिन्दू" disabled>
													    </div>
												    </div>

													<div class="col-md-4">
												    	<h4>मत/सम्प्रदाय </h4>
												    	<div class="form-group">
												    		<select class="form-control personal_radio personal_info" required="" name="bloodgroup" id="bloodgroup">
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
													      	<input type="text" class="form-control personal_info" placeholder="जाति" name="cast" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Sub Cast/उपजाति/घटक</h4>
													    <div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="उपजाति" name="sub_cast" value="" readonly>
													    </div>
												    </div>


											    	<div class="col-md-4">
											    		<h4>गौत्र (Gotre)</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control personal_info" placeholder="गौत्र" name="gotra" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>बंक </h4>
													    <div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="बंक" name="sub_gotra" value="" readonly>
													    </div>
												    </div>


													<div class="col-md-4 mb10px">
														<h4>मूल निवासी (Origin Place)</h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="1" placeholder="मूल निवासी(स्थान का नाम , जिला, राज्य दें) " name="address" id="address" readonly></textarea>
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
													    	@if($user->gender==2)
													    		<input type="radio" class="personal_radio personal_info" name="gender" value="1"> Yes
												   				<input type="radio" class="personal_radio personal_info" name="gender" value="2" checked="checked"> No
													    	@else
													    		<input type="radio" class="personal_radio personal_info" name="gender" value="1" checked="checked"> Yes
												   				<input type="radio" class="personal_radio personal_info" name="gender" value="2"> No
												   			@endif
												   		 </div>
												    </div>

													<div class="col-md-4">
												    	<h4>Marriage Date/ शादी की तारीख</h4>
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control personal_info datepicker" placeholder="20-12-1990" name="dob" id="dob" value="" readonly>
													    </div>
												    </div>

													<div class="col-md-4">
												    	<h4>Life Partner Name/ जीवन साथी का नाम</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info datepicker" placeholder="Life Partner Name" name="life_partner" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>Education/शिक्षा </h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="Education/शिक्षा " name="country" id="country" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>विशेष योग्यता(Special Qualification)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="विशेष योग्यता" name="country" id="country" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>अनुभव क्षेत्र(Experience Field)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="अनुभव क्षेत्र" name="country" id="country" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>Occupation(काम-धंधा या व्यवसाय)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="Occupation(काम-धंधा या व्यवसाय)" name="country" id="country" value="" readonly>
													    </div>
												    </div>

													<div class="col-md-4 mb20px">
												    	<h4>सेवा निवृत हैं</h4>
													    <div class="form-group ">
													    	@if($user->gender==2)
													    		<input type="radio" class="personal_radio personal_info" name="gender" value="1"> Yes
												   				<input type="radio" class="personal_radio personal_info" name="gender" value="2" checked="checked"> No
													    	@else
													    	<input type="radio" class="personal_radio personal_info" name="gender" value="1" checked="checked"> Yes
												   				<input type="radio" class="personal_radio personal_info" name="gender" value="2"> No
												   			@endif
												   		 </div>
												    </div>

													<div class="col-md-6 mb20px">
														<h4>कार्यालय/व्यापार/व्यवसाय का पता</h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="1" placeholder="कार्यालय/व्यापार/व्यवसाय का पता " name="address" id="address" readonly></textarea>
													    </div>

														<div class="col-md-4">
													    	<h4>पिन कोड</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="पिन कोड" name="district" id="district" value="" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
													    	<h4>जिला</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="जिला" name="district" id="district" value="" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
														    <h4>राज्य</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="राज्य" name="state" id="state" value="" readonly>
														    </div>
													    </div>
												    </div>

													<div class="col-md-6 mb20px">
														<h4>निवास का पता (Residential Address)</h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="1" placeholder="निवास का पता" name="address" id="address" readonly></textarea>
													    </div>

														<div class="col-md-4">
													    	<h4>पिन कोड</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="पिन कोड" name="district" id="district" value="" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
													    	<h4>जिला</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="जिला" name="district" id="district" value="" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
														    <h4>राज्य</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="राज्य" name="state" id="state" value="" readonly>
														    </div>
													    </div>
												    </div>

													<div class="col-md-4 mb20px">
													    <h4>समाज सेवा हेतु समय दान व रूचि क्षेत्र </h4>
														<div class="form-group ml0px">

												      		<input type="text" name="donate_body_part" class="personal_info form-control" style="width: 10%;" readonly>
													      		&nbsp;&nbsp;&nbsp;घंटे &nbsp;&nbsp;
													      	<input type="text" name="donate_body_part" class="personal_info form-control" style="width: 50%;" readonly>
													      		&nbsp;&nbsp;&nbsp;<br>
												      		<input type="radio" name="donate_body_part" class="personal_radio personal_info " value="2"> Daily
												      		<input type="radio" name="donate_body_part" class="personal_radio personal_info" value="2"> Weekly
												      		<input type="radio" name="donate_body_part" class="personal_radio personal_info" value="2"> Monthly
													    </div>
												    </div>

													<div class="col-md-8 mb20px">

														<h4>प्रतिवर्ष न्यूनतम आर्थिक सहयोग 100/- प्रति प्राणी  के लिए सहमत हो |</h4>
														<p style="color:blue">(100/- वार्षिक दाता इस संस्था का साधारण/प्रतिनधि/कार्यकारिणी सदस्य व पदाधकारी बन सकता हैं जिसे voting right भी होगा )</p>
													    <div class="form-group ml0px">

												      		<input type="radio" name="donate_body_part" class="personal_radio personal_info" value="1" checked="checked"> Yes
												      		<input type="radio" name="donate_body_part" class="personal_radio personal_info" value="2"> No
													    </div>
												    </div>

													<div class="col-md-12 mb40px">
														<h4>स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें</h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="5" placeholder="स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें" name="address" id="address" readonly></textarea>
													    </div>
												    </div>

												    <div class="col-md-12 update_personal_info text-right" style="display:none;">
														<input type="submit" class="btn btn-success personal_info" name="update_personal_info" id="update_personal_info" value="update personal info">
													</div>
												</div>
											</form>


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
												    			@if($user->blood_group)
												    			<option value="{{$user->blood_group}}">{{$user->blood_group}}</option>
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
													    	<input type="radio" name="farm_member" class="radio" value="1" checked="checked">
												      		Yes
												      		<input type="radio" name="farm_member" class="radio" value="2">
												      		No
													  	</div>
												    </div>

												    <div class="col-md-12 mb10px">

														<h4>3. आप उपभोक्ता संघ (Consumer Forum) का सदस्य बनना चाहते हैं
															<a href="javascript:;" style="color:blue;">see link</a>
														</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="farm_member" class="radio" value="1" checked="checked">
												      		Yes
												      		<input type="radio" name="farm_member" class="radio" value="2">
												      		No
													  	</div>

												  	</div>

												  	<div class="col-md-12 mb10px">
												    	<h4>4. May I Help You Club का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="club_member" class="radio" value="1" checked="checked">
												      		Yes
												      		<input type="radio" name="club_member" class="radio" value="2">
												      		No
													 	</div>
												 	</div>

												 	<div class="col-md-12 mb10px">
												    	<h4>5. ABC Club का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="abc_club_member" class="radio" value="1" checked="checked">
												      		Yes
												      		<input type="radio" name="abc_club_member" class="radio" value="2">
												      		No
														</div>
													</div>

													<div class="col-md-12 mb10px">
												    	<h4>6. किसी प्रोजेक्ट समिति का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="project_committee" class="radio" value="1" checked="checked">
													      	Yes
													      	<input type="radio" name="project_committee" class="radio" value="2">
													      	No
													   	</div>
												   	</div>

												   	<div class="col-md-12 mb10px">
												    	<h4>7. वैश्य पंचायत / वैश्य वाहिनी का सदस्य बनना चाहोगे
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="vaishya_vahini" class="radio" value="1" checked="checked">
													      	Yes
												      		<input type="radio" name="vaishya_vahini" class="radio" value="2">
												      		No
														</div>
													</div>

													<div class="col-md-12 mb10px">
												     	<h4>8. मृत्यु होने पर ऑंखे दान/अंग दान/शरीर दान करना चाहेंगे</h4>

													    <div class="form-group ml0px">
													    	<input type="radio" name="donate_body" class="radio" value="1">
												      		Yes
												      		<input type="radio" name="donate_body" class="radio" value="2" checked="checked">
												      		No
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
												     	<h4>9. अपने समाज की किस संस्था से जुड़े हुए हैं |</h4>

													    <div class="form-group ml0px">
													      	<input type="text" name="donate_body_part" class="form-control optional_info" readonly>
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
												     	<h4>10. समाज की किस पत्रिका के सदस्य हो | </h4>

													    <div class="form-group ml0px">
													      	<input type="text" name="donate_body_part" class="form-control optional_info" readonly>
													    </div>
												    </div>


												    <div class="col-md-12 mb10px">
												     	<h4>11. आवास</h4>

													    <div class="form-group ml0px">

												      		<input type="radio" name="donate_body_part" class="radio" value="1" checked="checked">
													      		अपना
												      		<input type="radio" name="donate_body_part" class="radio" value="2">
													      		किराये का
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
													    <h4>12. अपना वाहन </h4>

													    <div class="form-group ml0px">
												      		<input type="checkbox" name="donate_body_part" class="radio" value="1" >
													      		Two Wheeler
												      		<input type="checkbox" name="donate_body_part" class="radio" value="2">
													      		Four Wheeler
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
													    <h4>13. परिवार में किसी सदस्य का पहचान पत्र,वोट कार्ड,राशन कार्ड,हेल्थ कार्ड,वरिष्ठ नागरिक कार्ड या विधवा पेंशन बनना है ?</h4>

													    <div class="form-group ml0px">

												      		<input type="checkbox" name="donate_body_part" class="radio" value="1" >
													      		पहचान पत्र
													      	<input type="checkbox" name="donate_body_part" class="radio" value="1" >
													      		वोट कार्ड
												      		<input type="checkbox" name="donate_body_part" class="radio" value="2">
													      		राशन कार्ड
												      		<input type="checkbox" name="donate_body_part" class="radio" value="2">
													      		हेल्थ कार्ड
												      		<input type="checkbox" name="donate_body_part" class="radio" value="2">
													      		वरिष्ठ नागरिक
												      		<input type="checkbox" name="donate_body_part" class="radio" value="2">
													      		विधवा पेंशन
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
													    <h4>14. PAN Card No.</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control optional_info" placeholder="Pan Card No" name="country" id="country" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
													    <h4>15. Aadhar Card No.</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control optional_info" placeholder="Aadhar Card No." name="country" id="country" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
											    		<h4>16. परिवार की वार्षिक आय</h4>
												    	<div class="form-group">
												    		<select class="form-control radio" required="" name="bloodgroup">
												    			<option value="">Select Income</option>
												    			<option value="2 लाख तक">2 लाख तक</option>
												    			<option value="2 से 10 लाख तक">2 लाख से 10 लाख तक</option>
												    			<option value="10 से 50 लाख तक">10 लाख से 50 लाख तक</option>
												    			<option value="50 से ऊपर">50 लाख से ऊपर</option>
												    		</select>
													    </div>
												    </div>

											    	<div class="col-md-12 mb10px">
													    <h4>17.<input type="checkbox" placeholder="Aadhar Card No." class="radio"> उपरोक्त सभी सूचना सही हैं व मैंने अपनी इच्छा से दी हैं |</h4>

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
												      <th>#</th>
												      <th>First Name</th>
												      <th>Last Name</th>
												      <th>Email Id</th>
												      <th>Phone No.</th>
												      <th>Action</th>
												    </tr>
											  	</thead>
											  	<tbody>

												  	<tr>
												      	<th scope="row"></th>
												      	<td>qw</td>
												      	<td>qw</td>
												      	<td>qw</td>
												      	<td>qw</td>
												      	<td>
												      		<a href="#" class="btn btn-info btn-xs">view</a>
												       		<a href="#" class="btn btn-danger btn-xs">delete</a>
											       		</td>
											     	 </tr>

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
				                        	<form class="form-inline" action="{{ route('updateMemberPersonalInfo') }}" method="post">

												{{ csrf_field() }}

												<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

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
										    			<h4>Add Family Members परिवार के सदस्यों को यहां जोड़ें</h4>
										    			<hr>
										    		</div>


										    		<div class="col-md-2 text-right">
										    			<h4>
										    				<a href="javascript:;" id="edit_member_profile" class="edit_member_profile">Edit Member Profile</a>
										    			</h4>
										    		</div>
									    		</div>

									    		<div class="row">
											   		<div class="col-md-4">
											   			<h4>परिजन का पूरा नाम</h4>
												    	<div class="form-group" style="margin-bottom: 30px;">
													      	<input type="text" class="form-control member_profile" placeholder="First Name" name="fname" id="fname" value="" readonly>
													    </div>
													    <div class="col-md-6">
											    	    	<h4>मुखिया से सम्बन्ध </h4>
													    	<div class="form-group">
														      <input type="tel" class="form-control member_profile" placeholder="मुखिया से सम्बन्ध" name="phone" id="phone" value="" readonly>
												    		</div>
											    		</div>
										    		 	<div class="col-md-6">
													    	<h4>Gender / लिंग </h4>
														    <div class="form-group ">
														    	@if($user->gender==2)
														    		<input type="radio" class="member_radio" name="gender" value="1">
													      			&nbsp;&nbsp;Male
													   				<input type="radio" class="member_radio" name="gender" value="2" checked="checked">
														      		&nbsp;&nbsp;Female
														    	@else
														    	<input type="radio" class="member_radio" name="gender" value="1" checked="checked">
													      			&nbsp;&nbsp;Male
													   				<input type="radio" class="member_radio" name="gender" value="2">
														      		&nbsp;&nbsp;Female
													   			@endif
													   		 </div>
												   		 </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Father/Husband Name  पिता / पति का नाम </h4>
													    <div class="form-group" style="margin-bottom: 30px;">
													      <input type="text" class="form-control member_profile" placeholder="Last Name" name="lname" id="lname" value="{{$user->lastname}}" readonly>
													    </div>
		    									    	<h4>Mobile/Whats app No.  मोबाइल नंबर</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control member_profile" placeholder="+91-123456789" name="phone" id="phone" value="{{$user->phone}}" readonly>
													    </div>
												    </div>


				    								<div class="col-md-2">

								                    	<img alt="image" class="img-responsive mt10" src="resources/uploads/profile_images/{{$user->image}}" style="width: 140px;height: 150px;margin-left: 10px;">
								                    	<p class="text-center">परिवार के मुखिया </p>

													</div>

													<div class="col-md-4">
												    	<h4>Mobile No.  मोबाइल नंबर(2)</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control member_profile" placeholder="+91-123456789" name="phone" id="phone" value="{{$user->phone}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Email Id</h4>
												    	<div class="form-group">
													      <input type="email" class="form-control member_profile" placeholder="+91-123456789" name="email" id="phone" value="{{$user->email}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Religion/धर्म</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control member_profile" name="email" id="phone" value="हिन्दू" disabled>
													    </div>
												    </div>

													<div class="col-md-4">
												    	<h4>मत/सम्प्रदाय </h4>
												    	<div class="form-group">
												    		<select class="form-control member_radio" required="" name="bloodgroup" id="bloodgroup">
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
													      	<input type="text" class="form-control member_profile" placeholder="जाति" name="cast" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>Sub Cast/उपजाति/घटक</h4>
													    <div class="form-group">
													      <input type="text" class="form-control member_profile" placeholder="उपजाति" name="sub_cast" value="" readonly>
													    </div>
												    </div>


											    	<div class="col-md-4">
											    		<h4>गौत्र (Gotre)</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control member_profile" placeholder="गौत्र" name="gotra" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
												    	<h4>बंक </h4>
													    <div class="form-group">
													      <input type="text" class="form-control member_profile" placeholder="बंक" name="sub_gotra" value="" readonly>
													    </div>
												    </div>


													<div class="col-md-4 mb10px">
														<h4>मूल निवासी (Origin Place)</h4>
												    	<div class="form-group">
										      			<textarea class="form-control member_profile" rows="1" placeholder="मूल निवासी(स्थान का नाम , जिला, राज्य दें) " name="address" id="address" readonly></textarea>
													    </div>
												    </div>


													<div class="col-md-4">
												    	<h4>Date of Birth / जन्म की तारीख</h4>
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control member_profile datepicker" placeholder="20-12-1990" name="dob" id="dob" value="" readonly>
													    </div>
												    </div>


											   		<div class="col-md-4">
												    	<h4>Married / शादी-शुदा </h4>
													    <div class="form-group ">
													    	@if($user->gender==2)
													    		<input type="radio" class="member_radio" name="gender" value="1">
												      			Yes
												   				<input type="radio" class="member_radio" name="gender" value="2" checked="checked">
													      		No
													    	@else
													    	<input type="radio" class="member_radio" name="gender" value="1" checked="checked">
												      			Yes
												   				<input type="radio" class="member_radio" name="gender" value="2">
													      		No
												   			@endif
												   		 </div>
												    </div>


													<div class="col-md-4">
												    	<h4>Marriage Date/ शादी की तारीख</h4>
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control member_profile datepicker" placeholder="20-12-1990" name="dob" id="dob" value="" readonly>
													    </div>
												    </div>

													<div class="col-md-4">
												    	<h4>Life Partner Name/ जीवन साथी का नाम</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control member_profile" placeholder="Life Partner Name" name="life_partner" id="life_partner" value="" readonly>
													    </div>
												    </div>


												    <div class="col-md-4">
													    <h4>Education/शिक्षा </h4>
												    	<div class="form-group">
													      <input type="text" class="form-control member_profile" placeholder="Education/शिक्षा " name="country" id="country" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>विशेष योग्यता(Special Qualification)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control member_profile" placeholder="विशेष योग्यता" name="country" id="country" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>अनुभव क्षेत्र(Experience Field)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control member_profile" placeholder="अनुभव क्षेत्र" name="country" id="country" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-4">
													    <h4>Occupation(काम-धंधा या व्यवसाय)</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control member_profile" placeholder="Occupation(काम-धंधा या व्यवसाय)" name="country" id="country" value="" readonly>
													    </div>
												    </div>


													<div class="col-md-4 mb20px">
												    	<h4>सेवा निवृत हैं</h4>
													    <div class="form-group ">
													    	@if($user->gender==2)
													    		<input type="radio" class="member_radio" name="gender" value="1">
												      			Yes
												   				<input type="radio" class="member_radio" name="gender" value="2" checked="checked">
													      		No
													    	@else
													    	<input type="radio" class="member_radio" name="gender" value="1" checked="checked">
												      			Yes
												   				<input type="radio" class="member_radio" name="gender" value="2">
													      		No
												   			@endif
												   		 </div>
												    </div>

													<div class="col-md-6 mb20px">
														<h4>कार्यालय/व्यापार/व्यवसाय का पता</h4>
												    	<div class="form-group">
										      			<textarea class="form-control member_profile" rows="1" placeholder="कार्यालय/व्यापार/व्यवसाय का पता " name="address" id="address" readonly></textarea>
													    </div>

														<div class="col-md-4">
													    	<h4>पिन कोड</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control member_profile" placeholder="पिन कोड" name="district" id="district" value="" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
													    	<h4>जिला</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control member_profile" placeholder="जिला" name="district" id="district" value="" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
														    <h4>राज्य</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control member_profile" placeholder="राज्य" name="state" id="state" value="" readonly>
														    </div>
													    </div>
												    </div>

													<div class="col-md-6 mb20px">
														<h4>निवास का पता (Residential Address)</h4>
												    	<div class="form-group">
										      			<textarea class="form-control member_profile" rows="1" placeholder="निवास का पता" name="address" id="address" readonly></textarea>
													    </div>

														<div class="col-md-4">
													    	<h4>पिन कोड</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control member_profile" placeholder="पिन कोड" name="district" id="district" value="" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
													    	<h4>जिला</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control member_profile" placeholder="जिला" name="district" id="district" value="" readonly>
														    </div>
													    </div>

														<div class="col-md-4">
														    <h4>राज्य</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control member_profile" placeholder="राज्य" name="state" id="state" value="" readonly>
														    </div>
													    </div>
												    </div>

													<div class="col-md-4 mb20px">
													    <h4>समाज सेवा हेतु समय दान व रूचि क्षेत्र </h4>
														<div class="form-group ml0px">

												      		<input type="text" name="donate_body_part" class="form-control member_profile" style="width: 10%;" readonly>
													      		&nbsp;&nbsp;&nbsp;घंटे &nbsp;&nbsp;<input type="text" name="donate_body_part" style="width: 50%;" class="form-control member_profile" readonly>
													      		&nbsp;&nbsp;&nbsp;<br>
												      		<input type="radio" name="donate_body_part" class="member_radio" value="2">
													      		Daily
												      		<input type="radio" name="donate_body_part" class="member_radio" value="2">
													      		Weekly
												      		<input type="radio" name="donate_body_part" class="member_radio" value="2">
													      		Monthly
													    </div>
												    </div>

													<div class="col-md-8 mb20px">

														<h4>प्रतिवर्ष न्यूनतम आर्थिक सहयोग 100/- प्रति प्राणी  के लिए सहमत हो |</h4>
														<p style="color:blue">(100/- वार्षिक दाता इस संस्था का साधारण/प्रतिनधि/कार्यकारिणी सदस्य व पदाधकारी बन सकता हैं जिसे voting right भी होगा )</p>
													    <div class="form-group ml0px">

												      		<input type="radio" name="donate_body_part" class="member_radio" value="1" checked="checked">
													      		Yes
												      		<input type="radio" name="donate_body_part" class="member_radio" value="2">
													      		No
													    </div>
												    </div>

													<div class="col-md-12 mb40px">
														<h4>स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें</h4>
												    	<div class="form-group">
										      			<textarea class="form-control member_profile" rows="5" placeholder="स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें" name="address" id="address" readonly></textarea>
													    </div>
												    </div>

													<div class="col-md-12 update_member_profile text-right" style="display:none;">
														<input type="submit" class="btn btn-success" name="update_optional_info" id="update_member_profile" value="update member info">
													</div>
												</div>
											</form>


											<div class="row">
												<div class="col-md-8">
									    			<h4>Member Optional Information / ऐच्छिक सूचनाएं </h4>
									    			<hr>
									    		</div>

									    		<div class="col-md-4 text-right">
									    			<h4>
							    					<a href="javascript:;" id="edit_member_optional" class="edit_member_optional">Edit Member Optional Information</a>
									    			</h4>
									    		</div>
								    		</div>


								    		<div class="row">
							    				<form class="form-inline" action="" method="post">
												    <div class="col-md-6">
												    	<h4>1. Blood Group / रक्त समूह</h4>
												    	<div class="form-group">
												    		<select class="form-control member_optional_radio" required="" name="bloodgroup">
												    		<!-- 	@if($user->blood_group)
												    			<option value="{{$user->blood_group}}">{{$user->blood_group}}</option>
												    			@endif -->
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
													    	<input type="radio" name="farm_member" class="member_optional_radio" value="1" checked="checked">
												      		Yes
												      		<input type="radio" name="farm_member" class="member_optional_radio" value="2">
												      		No
													  	</div>
												    </div>

												    <div class="col-md-12 mb10px">

														<h4>3. आप उपभोक्ता संघ (Consumer Forum) का सदस्य बनना चाहते हैं
															<a href="javascript:;" style="color:blue;">see link</a>
														</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="farm_member" class="member_optional_radio" value="1" checked="checked">
												      		Yes
												      		<input type="radio" name="farm_member" class="member_optional_radio" value="2">
												      		No
													  	</div>

												  	</div>

												  	<div class="col-md-12 mb10px">
												    	<h4>4. May I Help You Club का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="club_member" class="member_optional_radio" value="1" checked="checked">
												      		Yes
												      		<input type="radio" name="club_member" class="member_optional_radio" value="2">
												      		No
													 	</div>
												 	</div>

												 	<div class="col-md-12 mb10px">
												    	<h4>5. ABC Club का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="abc_club_member" class="member_optional_radio" value="1" checked="checked">
												      		Yes
												      		<input type="radio" name="abc_club_member" class="member_optional_radio" value="2">
												      		No
														</div>
													</div>

													<div class="col-md-12 mb10px">
												    	<h4>6. किसी प्रोजेक्ट समिति का सदस्य बनना चाहते हैं
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="project_committee" class="member_optional_radio" value="1" checked="checked">
													      	Yes
													      	<input type="radio" name="project_committee" class="member_optional_radio" value="2">
													      	No
													   	</div>
												   	</div>

												   	<div class="col-md-12 mb10px">
												    	<h4>7. वैश्य पंचायत / वैश्य वाहिनी का सदस्य बनना चाहोगे
												    		<a href="javascript:;" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group ml0px">
													    	<input type="radio" name="vaishya_vahini" class="member_optional_radio" value="1" checked="checked">
													      	Yes
												      		<input type="radio" name="vaishya_vahini" class="member_optional_radio" value="2">
												      		No
														</div>
													</div>

													<div class="col-md-12 mb10px">
												     	<h4>8. मृत्यु होने पर ऑंखे दान/अंग दान/शरीर दान करना चाहेंगे</h4>

													    <div class="form-group ml0px">
													    	<input type="radio" name="donate_body" class="member_optional_radio" value="1">
												      		Yes
												      		<input type="radio" name="donate_body" class="member_optional_radio" value="2" checked="checked">
												      		No

													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
												     	<h4>9. अपने समाज की किस संस्था से जुड़े हुए हैं |</h4>

													    <div class="form-group ml0px">

													      	<input type="text" name="donate_body_part" class="form-control member_optional" readonly>

													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
												     	<h4>10. समाज की किस पत्रिका के सदस्य हो | </h4>

													    <div class="form-group ml0px">

													      	<input type="text" name="donate_body_part" class="form-control member_optional" readonly>

													    </div>
												    </div>


												    <div class="col-md-12 mb10px">
												     	<h4>11. आवास</h4>

													    <div class="form-group ml0px">

												      		<input type="radio" name="donate_body_part" class="member_optional_radio" value="1" checked="checked">
													      		अपना
												      		<input type="radio" name="donate_body_part" class="member_optional_radio" value="2">
													      		किराये का
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
													    <h4>12. अपना वाहन </h4>

													    <div class="form-group ml0px">

												      		<input type="checkbox" name="donate_body_part" class="member_optional_radio" value="1" >
													      		Two Wheeler
												      		<input type="checkbox" name="donate_body_part" class="member_optional_radio" value="2">
													      		Four Wheeler
													    </div>
												    </div>


												    <div class="col-md-12 mb10px">
													    <h4>14. PAN Card No.</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control member_optional" placeholder="Pan Card No" name="country" id="country" value="" readonly>
													    </div>
												    </div>

												    <div class="col-md-12 mb10px">
													    <h4>15. Aadhar Card No.</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control member_optional" placeholder="Aadhar Card No." name="country" id="country" value="" readonly>
													    </div>
												    </div>

											    	<div class="col-md-12 mb10px">
													    <h4>17.<input type="checkbox" placeholder="Aadhar Card No." class="member_optional_radio"> उपरोक्त सभी सूचना सही हैं व मैंने अपनी इच्छा से दी हैं |</h4>

													</div>

													<div class="col-md-12 update_member_optional text-right" style="display:none;">
														<input type="submit" class="btn btn-success" name="update_optional_info" id="update_member_profile" value="update member optional info">
													</div>
												</form>
				                        	</div>

				                        </div>


				                         <!-- Family Member -->

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