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

			                    <!-- add family memeber list -->
			                    <div class="col-md-12">
			                    	<h4>Family Member List</h4>
			                    	<ul>
			                    		<li><a href="{{ route('profile') }}">View Profile</a></li>
			                    		@if(count($familymember)>0)
			                    		<li><a href="{{ route('familymember') }}">View Family Members</a></li>
			                    		@endif
			                    	</ul>
			                     </div>
			                    <!-- Show Personal Info -->

				        	</div>
				    	</div>

				    	<!-- Profile update section start here-->
				        <div class="col-md-7">

				    	    <div class="with-nav-tabs">
				               <div class="panel-body">

										<!-- View Family Member -->
										<div class="tab-pane fade in active">
											<form class="form-inline" method="post" action="{{ route('updatefamilymember') }}" enctype="multipart/form-data">
												{{ csrf_field() }}

												<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">
												<input type="hidden" name="id" id="id" value="{{ $viewfamily->id }}">
												<input type="hidden" name="f_member_user_id" id="f_member_user_id" value="{{ $viewfamily->f_member_user_id }}">

													<div class="row mb10px">
														<div class="col-md-12">
															<!-- extra_status -->
															@if(session('extra_status'))
															<div class="alert alert-success">{{ session('extra_status') }}</div>
															@endif
															<!-- extra_status -->
														</div>
														<div class="col-md-6">
											    			<h4>Family Member ({{ $viewfamily->fname }})</h4>
											    			<hr>
											    		</div>

											    		<div class="col-md-6 text-right">
											    			<h4>
											    				<a href="javascript:;" id="edit_member" class="edit_member">Edit Member</a>
											    			</h4>
											    		</div>
										    		</div>
												<!--MaleMemberForm  -->
												<div id="MemberMale" class="user_family">

													<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

											   		<div class="col-md-6 mb10px">
											    		<h4>First name</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control view_member_info" placeholder="First Name" value="{{ $viewfamily->fname }}" name="fname" readonly>
													    </div>
												    </div>
												    <div class="col-md-6 mb10px">
												    	<h4>Last Name</h4>
													    <div class="form-group">
													      <input type="text" class="form-control view_member_info" placeholder="Last Name" value="{{ $viewfamily->lname }}" name="lname" readonly>
													    </div>
												    </div>
											   		<div class="col-md-6 mb10px">
												    	<h4>Your Gender</h4>
													    <div class="form-group ml0px">
													    	@if($viewfamily->gender==2)
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
												    	<h4>Photo</h4>
												    	<div class="form-group">
													      <input type="file" class="form-control" name="image">
													    </div>
												    </div>
											   		<div class="col-md-6 mb10px">
												    	<h4>Email Address</h4>
												    	<div class="form-group">
													      <input type="email" class="form-control view_member_info" placeholder="Example@gmail.com" value="{{ $viewfamily->email }}" name="email" readonly>
													    </div>
												    </div>
													<div class="col-md-6 mb10px">
												    	<h4>Mobile Number</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control view_member_info" placeholder="+91-123456789" value="{{ $viewfamily->mobile }}" name="mobile" readonly>
													    </div>
												    </div>
													<div class="col-md-6 mb10px">
												    	<h4>Date of Birth</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control view_member_info datepicker" placeholder="20-12-1990" value="{{ $viewfamily->dob }}" name="dob" readonly>
													    </div>
												    </div>
													<div class="col-md-6 mb10px">
												    	<h4>Blood Group</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control view_member_info" placeholder="AB+" value="{{ $viewfamily->blood_group }}" name="bloodgroup" readonly>
													    </div>
												    </div>

											   		<div class="col-md-6 mb10px">
												    	<h4>मांगलिक</h4>
													    <div class="form-group ml0px">
													    	@if($viewfamily->manglik==1)
													      	<input type="radio" class="radio" value="1" name="mang" checked="checked">
													      	&nbsp;&nbsp;Yes
												   			<input type="radio" class="radio" name="mang" value="2">
													      	&nbsp;&nbsp;No
													      	@else
													      	<input type="radio" class="radio" value="1" name="mang">
													      	&nbsp;&nbsp;Yes
												   			<input type="radio" class="radio" name="mang" value="2" checked="checked">
													      	&nbsp;&nbsp;No
													      	@endif
													    </div>
												    </div>

											   		<div class="col-md-6 mb10px">
												    	<h4>Married</h4>
													    <div class="form-group ml0px">
													    	@if($viewfamily->married==1)
													      	<input type="radio" class="radio" name="married" checked="checked" value="1">
													      	&nbsp;&nbsp;Yes
												   			<input type="radio" class="radio" name="married" value="2">
													      	&nbsp;&nbsp;No
													      	@else
													      	<input type="radio" class="radio" name="married" value="1">
													      	&nbsp;&nbsp;Yes
												   			<input type="radio" class="radio" name="married" value="2" checked="checked" >
													      	&nbsp;&nbsp;No
													      	@endif
													    </div>
												    </div>

											    	<div class="col-md-6 mb10px">
												    	<h4>विवाह की तिथि </h4>
												    	<div class="form-group">
													      <input type="text" class="form-control view_member_info" placeholder="विवाह की तिथि" value="{{ $viewfamily->marriage_date }}" name="marriage_date" readonly>
													    </div>
												    </div>

													<div class="col-md-6 mb10px">
													    <h4>Any Exeprience</h4>
												    	<div class="form-group">
													      <input type="text" class="form-control view_member_info" placeholder="Any Experience" value="{{ $viewfamily->experience }}" name="experience" readonly>
													    </div>
												    </div>

											   		<div class="col-md-6 mb10px">
												    	<h4>P.H.दिव्यांगता </h4>
													    <div class="form-group ml0px">
													    	@if($viewfamily->ph_Divyangata==1)
													      	<input type="radio" class="radio" value="1" name="ph" checked="checked">
													      	&nbsp;&nbsp;Yes
												   			<input type="radio" class="radio" value="2" name="ph">
													      	&nbsp;&nbsp;No
													      	@else
												      	 	<input type="radio" class="radio" value="1" name="ph">
													      	&nbsp;&nbsp;Yes
												   			<input type="radio" class="radio" value="2" name="ph" checked="checked">
													      	&nbsp;&nbsp;No
													      	@endif
													    </div>
												    </div>

													<div class="col-md-6 mb10px">
												    	<h4>Job/Business</h4>
													    <div class="form-group ml0px">
													    	@if($viewfamily->profession==1)
													      	<input type="radio" class="radio" name="job_busi" value="1" checked="checked">
													      	&nbsp;&nbsp;Job
												   			<input type="radio" class="radio" name="job_busi" value="2" >
													      	&nbsp;&nbsp;Businesss
													      	@else
													      	<input type="radio" class="radio" name="job_busi" value="1" checked="checked">
													      	&nbsp;&nbsp;Job
												   			<input type="radio" class="radio" name="job_busi" value="2" >
													      	&nbsp;&nbsp;Businesss
													      	@endif
													    </div>
												    </div>

													<div class="col-md-12 mb10px update_member_info" style="display:none;">
													    <div class="form-group ml0px">
													      	<input type="submit" class="btn btn-success" name="update_member" value="Update Member">
													    </div>
												    </div>

												</div><!--MaleMemberForm  -->

											</form>

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

@endsection