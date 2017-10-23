@extends('layouts.public_app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-default">
                <div class="wrapper wrapper-content mt30px">
				    <div class="row animated fadeInRight">
				        <div class="col-md-5">
				            <div class="ibox float-e-margins">

								<!-- Image update code -->
								<div class="col-md-4">
			                    	<img alt="image" class="img-circle img-responsive mt10" src="resources/uploads/profile_images/{{$user->image}}">
									<input type="submit" name="updateProfileImage" value="Update Profile Image" class="btn btn-info btn-xs mt10 Profie_image">
									<form action="{{ route('updateProfileImage') }}" method="post" enctype="multipart/form-data" class="primage" style="display:none">
										{{ csrf_field() }}
										<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

										<input type="file" name="image" class="mt10">

										<input type="submit" name="updateProfileImage" value="Update Image" class="btn btn-success btn-xs mt10">
									</form>
								</div>
			                	<!-- Image update code -->

								<!-- Show Personal Info -->
			                    <div class="col-md-8">
				                    <div class="ibox-content profile-content">
				                        <h4><strong>{{$user->name ." ". $user->lastname}}</strong></h4>
				                        <p><i class="fa fa-envelope"></i> {{ $user->email }}</p>
				                        <p><i class="fa fa-phone"></i> {{$user->phone}} </p>

									</div>
			                    </div>
								<div class="col-md-12">

									<!-- Profile image success message show -->
									@if(session('status'))
										<div class="alert alert-success"> {{ session('status') }} </div>
									@endif

			                		<h5> Biography / जीवनी </h5>
			                        <p class="text-justify">
			                           {{$user->bio}}
			                        </p>
			                    </div>

			                    <!-- Show Personal Info -->

				        	</div>
				    	</div>

				    	<!-- Profile update section start here-->
				        <div class="col-md-7">

				    	    <div class="with-nav-tabs">
				                <div class="panel-heading">
				                        <ul class="nav nav-tabs">
				                            <li  id="profile_info" class="active"><a href="#profile" data-toggle="tab">Profile Information</a></li>
				                            <li id="family_info"><a href="#family" data-toggle="tab">Family Information</a></li>
				                            <li  id="job_portal"><a href="#jobportal" data-toggle="tab">Job Portal</a></li>
				                       </ul>
				                </div>
				                <div class="panel-body">

									<!-- Add member success message -->
				                	@if(session('member_email_exist'))
										<div class="alert alert-success">{{ session('member_email_exist') }}</div>

									@endif

									<!-- If member email is already exist -->
				                	@if(session('add_member'))
										<div class="alert alert-success">{{ session('add_member') }}</div>
									@endif

				                    <div class="tab-content">
				                    	<!-- Presonal Information -->
				                        <div class="tab-pane fade in active" id="profile">
				                        	<!-- Update Personal Info -->
				                        	<form class="form-inline" action="{{ route('updatePersonalInfo') }}" method="post">

												{{ csrf_field() }}

												<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

													<div class="row mb10px">
														<div class="col-md-12">
															<!-- personal_status -->
															@if(session('personal_status'))
															<div class="alert alert-success">{{ session('personal_status') }}</div>
															@endif
															<!-- personal_status -->

															<!-- religion_status -->
															@if(session('religion_status'))
															<div class="alert alert-success">{{ session('religion_status') }}</div>
															@endif
															<!-- religion_status -->

															<!-- extra_status -->
															@if(session('extra_status'))
															<div class="alert alert-success">{{ session('extra_status') }}</div>
															@endif
															<!-- extra_status -->

														 	<!-- Update member success message -->
										                	@if(session('update_member'))
																<div class="alert alert-success">{{ session('update_member') }}</div>
															@endif
															<!-- Update member success message -->

														 	<!-- Delete member success message -->
										                	@if(session('delete_member'))
																<div class="alert alert-success">{{ session('delete_member') }}</div>
															@endif
															<!-- Delete member success message -->
														</div>
														<div class="col-md-6">
											    			<h4>Personal Information</h4>
											    			<hr>
											    		</div>

											    		<div class="col-md-6 text-right">
											    			<h4>
											    				<a href="javascript:;" id="edit_profile" class="edit_profile">Edit Profile</a>
											    			</h4>
											    		</div>
										    		</div>

											   		<div class="col-md-6">
											   			<h4>First Name / पहला नाम</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control personal_info" placeholder="First Name" name="fname" id="fname" value="{{$user->name}}" readonly>
													    </div>
												    </div>

												    <div class="col-md-6">
												    	<h4>Last Name / अंतिम नाम</h4>
													    <div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="Last Name" name="lname" id="lname" value="{{$user->lastname}}" readonly>
													    </div>
												    </div>

											   		<div class="col-md-6">
												    	<h4>Your Gender / तुम्हारा लिंग </h4>
													    <div class="form-group ml0px">
													    	@if($user->gender==2)
													    		<input type="radio" class="radio" name="gender" value="1">
												      			&nbsp;&nbsp;Male
												   				<input type="radio" class="radio" name="gender" value="2" checked="checked">
													      		&nbsp;&nbsp;Female
													    	@else
													    	<input type="radio" class="radio" name="gender" value="1" checked="checked">
												      			&nbsp;&nbsp;Male
												   				<input type="radio" class="radio" name="gender" value="2">
													      		&nbsp;&nbsp;Female
												   			@endif
												   		 </div>
												    </div>
													<div class="col-md-6 mb10px">
												    	<h4>Mobile Number / मोबाइल नंबर</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control personal_info" placeholder="+91-123456789" name="phone" id="phone" value="{{$user->phone}}" readonly>
													    </div>
												    </div>

													<div class="col-md-6 mb10px">
												    	<h4>Date of Birth / जन्म की तारीख</h4>
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control personal_info datepicker" placeholder="20-12-1990" name="dob" id="dob" value="{{$user->dob}}" readonly>
													    </div>
												    </div>
													<div class="col-md-6 mb10px">
												    	<h4>Blood Group / रक्त समूह</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="AB+" name="bloodgroup" id="bloodgroup" value="{{$user->blood_group}}" readonly>
													    </div>
												    </div>

													<div class="col-md-6 mb10px">
														<h4>Permanent Address / स्थाई पता</h4>
												    	<div class="form-group">
										      	<textarea class="form-control personal_info" rows="5" placeholder="Address" name="address" id="address" readonly>{{$user->address}}</textarea>
													    </div>
												    </div>

													<div class="col-md-6 mb10px">
												    	<h4>Pin Code / पिन कोड</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="333516" name="pincode" id="pincode" value="{{$user->pin_code}}" readonly>
													    </div>
												    </div>

											    	<div class="col-md-6 mb10px">
												    	<h4>District / जिला</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="Jaipur" name="district" id="district" value="{{$user->district}}" readonly>
													    </div>
												    </div>

													<div class="col-md-6 mb10px">
														<h4>Residential/Office Address / आवासीय / कार्यालय पता</h4>
												    	<div class="form-group">
										      	<textarea class="form-control personal_info" rows="4" placeholder="Address" name="address" id="address" readonly>{{$user->address}}</textarea>
													    </div>
												    </div>

													<div class="col-md-6 mb10px">
													    <h4>State / राज्य</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="Rajasthan" name="state" id="state" value="{{$user->state}}" readonly>
													    </div>
												    </div>

													<div class="col-md-6 mb10px">
													    <h4>Country / देश</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control personal_info" placeholder="India" name="country" id="country" value="{{$user->country}}" readonly>
													    </div>
												    </div>

													<div class="col-md-12 mb10px update_per_info" style="display:none;">
														<h4>Biography / जीवनी</h4>
												    	<div class="form-group">
										      				<textarea class="form-control personal_info" rows="6" placeholder="Biography" name="bio" id="bio" readonly>{{$user->bio}}</textarea>
													    </div>
												    </div>
												    <div class="col-md-12 update_per_info" style="display:none;">
														<input type="submit" class="btn btn-success personal_info" name="update_personal_info" id="update_personal_info" value="update personal info">
													</div>

												</form>
												<!-- Update Personal Info -->

												<!-- Update Email Info-->
												<form class="form-inline" action="" method="post">
													{{ csrf_field() }}
													<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">
													<div class="row">
														<div class="col-md-6">
											    			<h4>Email Id Information</h4>
											    			<hr>
											    		</div>

											    		<div class="col-md-6 text-right">
											    			<h4>
									    				<a href="javascript:;" id="edit_email" class="edit_email">Edit Email Id</a>
											    			</h4>
											    		</div>
										    		</div>
											   		<div class="col-md-12 mb10px">
												    	<h4>Email Address</h4>
												    	<div class="form-group">
													      <input type="email" class="form-control email_info" placeholder="Example@gmail.com" name="email" readonly>
													    </div>
												    </div>
												    <div class="col-md-12 update_email" style="display:none;">
														<input type="submit" class="btn btn-success" name="update_personal_info" id="update_personal_info" value="update email info">
													</div>
										    	</form>
										    	<!-- Update Email Info-->

										    	<!-- Update Religion Info -->
												<form class="form-inline" action="{{ route('updateReligionInfo') }}" method="post">
													{{ csrf_field() }}
													<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">
													<div class="row">
														<div class="col-md-6">
											    			<h4>Religion Information</h4>
											    			<hr>
											    		</div>

											    		<div class="col-md-6 text-right">
										    				<h4>
											    				<a href="javascript:;" id="edit_religion" class="edit_religion">
											    					Edit Religion
											    				</a>
											    			</h4>
											    		</div>
										    		</div>
											    	<div class="col-md-6 mb10px">
											    		<h4>Cast / जाति </h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control religion_info" placeholder="जाति" name="cast" value="{{ $religion->cast }}" readonly>
													    </div>
												    </div>

												    <div class="col-md-6 mb10px">
												    	<h4>Sub Cast / उपजाति </h4>
													    <div class="form-group">
													      <input type="text" class="form-control religion_info" placeholder="उपजाति" name="sub_cast" value="{{ $religion->sub_cast }}" readonly>
													    </div>
												    </div>

											    	<div class="col-md-6 mb10px">
											    		<h4>घटक </h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control religion_info" placeholder="घटक" name="ghatak" value="{{ $religion->ghatak }}" readonly>
													    </div>
												    </div>

												    <div class="col-md-6 mb10px">
												    	<h4>उपघटक </h4>
													    <div class="form-group">
													      <input type="text" class="form-control religion_info" placeholder="उपघटक" name="sub_ghatak" value="{{ $religion->sub_ghatak }}" readonly>
													    </div>
												    </div>

											    	<div class="col-md-6 mb10px">
											    		<h4>गौत्र </h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control religion_info" placeholder="गौत्र" name="gotra" value="{{ $religion->gotra }}" readonly>
													    </div>
												    </div>

												    <div class="col-md-6 mb10px">
												    	<h4>उपगौत्र </h4>
													    <div class="form-group">
													      <input type="text" class="form-control religion_info" placeholder="उपगौत्र" name="sub_gotra" value="{{ $religion->sub_gotra }}" readonly>
													    </div>
												    </div>
												    <div class="col-md-12 update_religion" style="display:none;">
														<input type="submit" class="btn btn-success" name="update_religion_info" id="update_religion_info" value="update religion info">
													</div>
												</form>
												<!-- Update Religion Info -->
												<!-- Update Extra Info -->
												<form class="form-inline" action="{{ route('updateExtraInfo') }}" method="post">
													{{ csrf_field() }}
													<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">
													<div class="row">
														<div class="col-md-6">
											    			<h4>Extra Information</h4>
											    			<hr>
											    		</div>

											    		<div class="col-md-6 text-right">
											    			<h4>
									    				<a href="javascript:;" id="edit_extra" class="edit_extra">
									    				Edit Extra Info
									    			</a>
											    			</h4>
											    		</div>
										    		</div>
													<div class="col-md-12 mb10px">
											    	<h4>मरने पर अंग दान करना चाहेंगे</h4>

												    <div class="form-group ml0px">
												    	@if($extra->donate_body_part == 1)
												      		<input type="radio" name="donate_body_part" class="radio" value="1" checked="checked">
												      		&nbsp;&nbsp;Yes
												      		<input type="radio" name="donate_body_part" class="radio" value="2">
												      		&nbsp;&nbsp;No
												      	@else
												      		<input type="radio" name="donate_body_part" class="radio" value="1">
												      		&nbsp;&nbsp;Yes
												      		<input type="radio" name="donate_body_part" class="radio" value="2" checked="checked">
												      		&nbsp;&nbsp;No
												      	@endif

												    </div>

											    	<h4>आप को उपभोक्ता फोरम का सदस्य बना दिया जाये </h4>
												    <div class="form-group ml0px">
												    	@if($extra->farm_member==1)
												      		<input type="radio" name="farm_member" class="radio" value="1" checked="checked">
												      		&nbsp;&nbsp;Yes
												      		<input type="radio" name="farm_member" class="radio" value="2">
												      		&nbsp;&nbsp;No
											   			@else
											   				<input type="radio" name="farm_member" class="radio" value="1">
												      		&nbsp;&nbsp;Yes
												      		<input type="radio" name="farm_member" class="radio" value="2" checked="checked">
												      		&nbsp;&nbsp;No
												      	@endif
												  	</div>

											    	<h4>May I Help You Club का सदस्य बनना चाहते हैं </h4>
												    <div class="form-group ml0px">
												    	@if($extra->club_member==1)
												      		<input type="radio" name="club_member" class="radio" value="1" checked="checked">
												      		&nbsp;&nbsp;Yes
												      		<input type="radio" name="club_member" class="radio" value="2">
												      		&nbsp;&nbsp;No
												      	@else

												   			<input type="radio" name="club_member" class="radio" value="1">
													      	&nbsp;&nbsp;Yes
													      	<input type="radio" name="club_member" class="radio" value="2" checked="checked">
													      	&nbsp;&nbsp;No
												      	@endif
												 </div>

											    	<h4>ABC Club का सदस्य बनना चाहते हैं </h4>
												    <div class="form-group ml0px">
												    	@if($extra->abc_club_member==1)
												      		<input type="radio" name="abc_club_member" class="radio" value="1" checked="checked">
												      		&nbsp;&nbsp;Yes
												      		<input type="radio" name="abc_club_member" class="radio" value="2">
												      		&nbsp;&nbsp;No
												      	@else
												      		<input type="radio" name="abc_club_member" class="radio" value="1">
												      		&nbsp;&nbsp;Yes
												      	   	<input type="radio" name="abc_club_member" class="radio" value="2" checked="checked">
												      		&nbsp;&nbsp;No
												      	@endif
													</div>

											    	<h4>किसी प्रोजेक्ट समिति का सदस्य बनना चाहते हैं </h4>
												    <div class="form-group ml0px">
												    	@if($extra->project_committee==1)
													      	<input type="radio" name="project_committee" class="radio" value="1" checked="checked">
													      	&nbsp;&nbsp;Yes
													      	<input type="radio" name="project_committee" class="radio" value="2">
													      	&nbsp;&nbsp;No
												      	@else
													      	<input type="radio" name="project_committee" class="radio" value="1">
													      	&nbsp;&nbsp;Yes
													      	<input type="radio" name="project_committee" class="radio" value="2" checked="checked">
													      	&nbsp;&nbsp;No
												      	@endif
												   </div>

											    	<h4>जरुरत में Blood Donate करने की सुचना चाहोगे </h4>
												    <div class="form-group ml0px">
												    	@if($extra->blood_donate==1)
													      	<input type="radio" name="blood_donate" class="radio" value="1" checked="checked">
													      	&nbsp;&nbsp;Yes
													      	<input type="radio" name="blood_donate" class="radio" value="2">
													      	&nbsp;&nbsp;No
												      	@else
													      	<input type="radio" name="blood_donate" class="radio" value="1">
													      	&nbsp;&nbsp;Yes
													      	<input type="radio" name="blood_donate" class="radio" value="2" checked="checked">
													      	&nbsp;&nbsp;No
												      	@endif
												 	</div>

											    	<h4>वैश्य पंचायत / वैश्य वाहिनी का सदस्य बनना चाहोगे </h4>
												    <div class="form-group ml0px">
												    	@if($extra->vaishya_vahini==1)
													      	<input type="radio" name="vaishya_vahini" class="radio" value="1" checked="checked">
													      	&nbsp;&nbsp;Yes
												      		<input type="radio" name="vaishya_vahini" class="radio" value="2">
												      		&nbsp;&nbsp;No
												      	@else
													      	<input type="radio" name="vaishya_vahini" class="radio" value="1">
													      	&nbsp;&nbsp;Yes
													      	<input type="radio" name="vaishya_vahini" class="radio" value="2" checked="checked">
													      	&nbsp;&nbsp;No
												      	@endif
													</div>

											    	<h4>वार्षिक कैलेंडर पहुंच गया </h4>
												    <div class="form-group ml0px">
												    	@if($extra->year_calendar==1)
													      	<input type="radio" name="year_calendar" class="radio" value="1" checked="checked">
													      	&nbsp;&nbsp;Yes
													      	<input type="radio" name="year_calendar" class="radio" value="2">
													      	&nbsp;&nbsp;No
												      	@else
													      	<input type="radio" name="year_calendar" class="radio" value="1">
													      	&nbsp;&nbsp;Yes
													      	<input type="radio" name="year_calendar" class="radio" value="2" checked="checked">
													      	&nbsp;&nbsp;No
												      	@endif
												    </div>
											    </div>
											    <div class="col-md-12 update_extra" style="display:none;">
													<input type="submit" class="btn btn-success" name="update_extra_info" id="update_extra_info" value="update extra info">
												</div>
											</form>
											<!-- Update Extra Info -->
				                        </div>

				                        <div class="row" id="family_add_show_btn">
					                        <div class="col-md-6">
					                        	<a class="btn btn-info mb10px" id="addmember">
													<i class="fa fa-plus" aria-hidden="true"></i> Add Member
												</a>
											</div>
											 <div class="col-md-6 text-right">
					                        	<a class="btn btn-info mb10px" id="show_family_members">
													<i class="fa fa-plus" aria-hidden="true"></i> Show Members
												</a>
					                        </div>
				                        </div>

				                        <!-- Family Member -->
										<div class="tab-pane fade" id="family">


											<table class="table table-striped">
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
												  	@php ($i=1)
												  	@if(count($familymember)>0)

												  	@foreach($familymember as $family)
												  	<tr>
												      	<th scope="row">{{ $i }}</th>
												      	<td>{{ $family->fname }}</td>
												      	<td>{{ $family->lname }}</td>
												      	<td>{{ $family->email }}</td>
												      	<td>{{ $family->mobile }}</td>
												      	<td>
												      		<a href="{{ url('viewfamilymember'.$family->id) }}" class="btn btn-info btn-xs">view</a>
												       		<a href="{{ url('deletefamilymember'.$family->id) }}" class="btn btn-danger btn-xs">delete</a>
											       		</td>
											     	 </tr>
											     	 @php $i++ @endphp
											     	@endforeach

											     	@endif
										     	</tbody>
											</table>

				                        </div>

				                        @if(session('member_email_exist'))

											<script type="text/javascript">
												$("#profile_info").removeClass('active');
												$("#family_info").addClass('active');
												$("#profile").removeClass('active in');
												$("#family").removeClass('active in');
												$("#add_member_form_div").addClass('active in');
												$("#add_member_form_div").css({
													'display' : 'block'
												});
												$("#addmember").show('');
											</script>
										@else
											<script>
												$('#family_info').removeClass('active');
										        $('#profile_info').addClass('active');
										        $('#profile').addClass('active in');
											</script>
										@endif

				                        <div class="row" id="add_member_form_div" style="display:none;">
				                        	<form class="form-inline" method="post" action="{{ route('add_member') }}">

										   		<div class="col-md-12 mb10px member" style="display:none;">
											    	<div class="form-group ml0px">
												      	<input type="radio" name="family" checked="checked" value="1" class="member_type"> Male
												      	<input type="radio" name="family" value="2" class="member_type"> Female
												      	<input type="radio" name="family" value="3" class="member_type"> Child
												    </div>
											    </div>

												<!--MaleMemberForm  -->
												<div id="MemberMale" class="user_family">

													{{ csrf_field() }}

													<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

											   		<div class="col-md-6 mb10px">
											    		<h4>First name</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control" placeholder="First Name" name="fname" required="">
													    </div>
												    </div>
												    <div class="col-md-6 mb10px">
												    	<h4>Last Name</h4>
													    <div class="form-group">
													      <input type="text" class="form-control" placeholder="Last Name" name="lname" required="">
													    </div>
												    </div>
											   		<div class="col-md-6 mb10px">
												    	<h4>Your Gender</h4>
													    <div class="form-group ml0px">
													      	<input type="radio" placeholder="First Name" name="gender" value="1" checked="checked">
													      	&nbsp;&nbsp;Male
												   			&nbsp;&nbsp;&nbsp;&nbsp;
													      	<input type="radio" placeholder="Last Name" name="gender" value="2">
													      	&nbsp;&nbsp;Female
													    </div>
												    </div>
											   		<div class="col-md-6 mb10px">
												    	<h4>Photo</h4>
												    	<div class="form-group">
													      <input type="file" class="form-control" name="image">
													    </div>
												    </div>
											   		<div class="col-md-6 mb10px">
												    	<h4>Email Address</h4>
												    	<div class="form-group">
													      <input type="email" class="form-control" placeholder="Example@gmail.com" name="email" required="">
													    </div>
												    </div>
													<div class="col-md-6 mb10px">
												    	<h4>Mobile Number</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" placeholder="+91-123456789" name="mobile" required="">
													    </div>
												    </div>
													<div class="col-md-6 mb10px">
												    	<h4>Date of Birth</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control datepicker" placeholder="20-12-1990" name="dob" required="">
													    </div>
												    </div>
													<div class="col-md-6 mb10px">
												    	<h4>Blood Group</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" placeholder="AB+" name="bloodgroup">
													    </div>
												    </div>

											   		<div class="col-md-6 mb10px">
												    	<h4>Married</h4>
													    <div class="form-group ml0px">
													      	<input type="radio" class="marry" name="married" checked="checked" value="1">
													      	&nbsp;&nbsp;Yes
												   			<input type="radio" class="marry" name="married" value="2">
													      	&nbsp;&nbsp;No
													    </div>
												    </div>

											    	<div class="col-md-6 mb10px unmarried">
												    	<h4>विवाह की तिथि </h4>
												    	<div class="form-group">
													      <input type="text" class="form-control datepicker" placeholder="विवाह की तिथि " name="marriage_date">
													    </div>
												    </div>

											    	<div class="col-md-6 mb10px formarried" style="display:none;">
												    	<h4>Marriageable / विवाह योग्य</h4>
													    <div class="form-group ml0px">
													      	<input type="radio" value="1" name="mariageable">
													      	&nbsp;&nbsp;Yes
												   			<input type="radio" name="mariageable" value="2" checked="checked">
													      	&nbsp;&nbsp;No
													    </div>
												    </div>

											   		<div class="col-md-6 mb10px">
												    	<h4>मांगलिक</h4>
													    <div class="form-group ml0px">
													      	<input type="radio" value="1" name="mang" checked="checked">
													      	&nbsp;&nbsp;Yes
												   			<input type="radio" name="mang" value="2">
													      	&nbsp;&nbsp;No
													    </div>
												    </div>

													<div class="col-md-6 mb10px">
												    	<h4>P.H.दिव्यांगता </h4>
													    <div class="form-group ml0px">
													      	<input type="radio"  value="1" name="ph">
													      	&nbsp;&nbsp;Yes
												   			<input type="radio" value="2" name="ph" checked="checked">
													      	&nbsp;&nbsp;No
													    </div>
												    </div>

													<div class="col-md-6 mb10px">
												    	<h4>Job/Business</h4>
													    <div class="form-group ml0px">
													      	<input type="radio" name="job_busi" value="1" checked="checked">
													      	&nbsp;&nbsp;Job
												   			<input type="radio" name="job_busi" value="2" >
													      	&nbsp;&nbsp;Businesss
													    </div>
												    </div>


													<div class="col-md-6 mb10px">
													    <h4>Any Exeprience</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control" placeholder="Any Experience" name="experience">
													    </div>
												    </div>

													<div class="col-md-12 mb10px">
													    <div class="form-group ml0px">
													      	<input type="submit" name="add_member" class="btn btn-success" value="Add Member">
													    </div>
												    </div>

												</div><!--MaleMemberForm  -->

											</form>
				                        </div>
				                         <!-- Family Member -->
				                        <div class="tab-pane fade" id="jobportal">Default 3</div>

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

@endsection