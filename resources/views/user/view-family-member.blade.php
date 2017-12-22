@extends('layouts.public_app')

@section('content')

<style type="text/css">
.form-group {
    margin-bottom: 15px !important;
}
</style>

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
					    				<h2 class="red">Family Member View</h2>
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

							   		<div class="col-md-9">
								   		<div class="col-md-4">
								   			<h4>परिजन का पूरा नाम</h4>
									    	<div class="form-group" style="margin-bottom: 30px;">
										      	<input type="text" class="form-control member_profile" placeholder="Name" name="name" id="name" readonly value="{{ $viewfamily->name }}">
										    </div>
										</div>

									    <div class="col-md-4">
							    	    	<h4>मुखिया से सम्बन्ध </h4>
									    	<div class="form-group">
										      <input type="tel" class="form-control member_profile" placeholder="मुखिया से सम्बन्ध" name="relation_to_head_member" id="relation_to_head_member" readonly value="{{ $viewfamily->relation_to_head_member }}">
								    		</div>
							    		</div>

						    		 	<div class="col-md-4">
									    	<h4>Gender / लिंग </h4>
										    <div class="form-group" style="margin-bottom:30px!important">
										    	@if($viewfamily->gender == 1)
									    			<input type="radio" class="member_radio" name="m_gender" value="1" checked="checked">&nbsp;&nbsp;Male
								   					<input type="radio" class="member_radio" name="m_gender" value="2">&nbsp;&nbsp;
								   				@else
								   					<input type="radio" class="member_radio" name="m_gender" value="1">&nbsp;&nbsp;Male
								   					<input type="radio" class="member_radio" name="m_gender" value="2" checked="checked">&nbsp;&nbsp;Female
								   				@endif
									   		</div>
								   		 </div>

										<div class="col-md-4">
									    	<h4>Mobile No./Whats app No.</h4>
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
									    	<h4>जन्म की तारीख</h4>
									    	<div class="form-group">
										      <input type="text" format="Y-m-d" class="form-control datepicker member_radio" placeholder="DOB" name="dob" id="dob" value="{{ $viewfamily->dob }}">
										    </div>
									    </div>

										<div class="col-md-4">
									    	<h4>Image</h4>
									    	<div class="form-group">
										      <input type="file" name="image" class="form-control personal_info member_radio">
										    </div>
									    </div>

										<div class="col-md-4">
									    	<h4>Marriage Date/ शादी की तारीख</h4>
									    	<div class="form-group">
										      <input type="text" format="Y-m-d" class="form-control datepicker member_radio" placeholder="Marriage Date" name="marriage_date" id="marriage_date" value="{{ $viewfamily->marriage_date }}">
										    </div>
									    </div>

									    <div class="col-md-4">
										    <h4>Education/Experience/शिक्षा </h4>
									    	<div class="form-group">
										      <input type="text" class="form-control member_profile" placeholder="Education/शिक्षा " name="education" id="education" readonly value="{{ $viewfamily->education }}">
										    </div>
									    </div>

									</div>

									<div class="col-md-3">
				                    	<img alt="image" class="img-responsive mt10" src="resources/uploads/profile_images/{{$viewfamily->image}}" style="width: 140px;height: 125px;margin-left: 10px;">
									</div>

								<div class="col-md-12">

										<div class="col-md-6">
											<h4>कार्यालय/व्यापार/व्यवसाय का पता</h4>
									    	<div class="form-group">
							      			<textarea class="form-control member_profile" rows="4" placeholder="कार्यालय/व्यापार/व्यवसाय का पता " name="occupation_address" id="occupation_address" readonly> {{ $viewfamily->occupation_address }}</textarea>
										    </div>

											<div class="col-md-4 mb30px">
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

											<div class="col-md-8">
											    <h4>समाज सेवा हेतु समय दान</h4>
												<div class="form-group ml0px">

										      		<input type="text" name="social_hours" class="form-control member_profile" style="width: 15%;" readonly value="{{ $viewfamily->social_hours }}"> &nbsp;&nbsp;&nbsp;घंटे &nbsp;&nbsp;

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
									    </div>

										<div class="col-md-6">
											<h4>निवास का पता (Residential Address)</h4>
									    	<div class="form-group">
							      			<textarea class="form-control member_profile" rows="4" placeholder="निवास का पता" name="residential_address" id="residential_address" readonly> {{ $viewfamily->residential_address }}</textarea>
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
											      <input type="text" class="form-control member_profile" placeholder="पिन कोड" name="residential_pincode" id="residential_pincode" readonly value="{{ $viewfamily->residential_pincode }}">
											    </div>
										    </div>
									    </div>

										<div class="col-md-8 mb40px">
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

				        		</div>
				        	</div>
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
@endsection