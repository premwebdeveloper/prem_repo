@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Search Users</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Search Users</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
    	<div class="col-lg-12">
	        <div class="ibox">
	            <div class="ibox-title">
	                <h5>Search Users</h5>
	            </div>
	            <!-- Search user form -->
	            <div class="ibox-content">
	                <form id="form" method="post" action="{{ route('searchUsers') }}" class="wizard-big">
	                    <div class="row">

							{{ csrf_field() }}

	                        <div class="col-lg-2">
	                            <div class="form-group">
	                                <label>State</label>
	                                <select id="state" name="state" class="form-control required">
	                                	<option value="">Select State</option>
	                                	@foreach($states as $state)
	                                		<option value="{{ $state->id }}">{{ $state->name }}</option>
	                                	@endforeach
	                                </select>
	                            </div>
	                        </div>

	                        <div class="col-lg-2">
	                            <div class="form-group">
	                                <label>District</label>
	                                <select id="district" name="district" class="form-control required" disabled="disabled">
	                                	<option value="">Select District</option>
	                                </select>
	                            </div>
	                        </div>

	                        <div class="col-lg-2">
	                            <div class="form-group">
	                                <label>Blood Broup:</label>
	                                <select id="blood_group" name="blood_group" class="form-control required">
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

	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label>Search By:</label>
	                                <select id="search_by" name="search_by" class="form-control required">
	                                	<option value="">Select One</option>
	                                	<option value="1">Consumer Forum का सदस्य बनना चाहते हैं</option>
	                                	<option value="2">Club का सदस्य बनना चाहते हैं</option>
	                                	<option value="3">ABC Club का सदस्य बनना चाहते हैं</option>
	                                	<option value="4">किसी प्रोजेक्ट समिति का सदस्य बनना चाहते हैं</option>
	                                	<option value="5">वैश्य पंचायत / वैश्य वाहिनी का सदस्य बनना चाहोगे</option>
	                                	<option value="6">मृत्यु होने पर ऑंखे दान/अंग दान/शरीर दान करना चाहेंगे</option>
	                                	<option value="7">समाज सेवा हेतु समय दान</option>
	                                	<option value="8">प्रतिवर्ष न्यूनतम आर्थिक सहयोग 100/- प्रति प्राणी के लिए सहमत हो</option>
	                                </select>
	                            </div>
	                        </div>

	                        <div class="col-lg-12">
	                            <div class="form-group text-right">
	                                <label>&nbsp;</label>
	                                <button class="btn btn-primary" id="search_users" name="search_users" type="submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search Users</button>
	                            </div>
	                        </div>

	                    </div>
	                </form>
	            </div>
	        </div>

	        <script type="text/javascript">
                $(document).ready(function(){
                	$(document).on("change", "#state", function(){
                		var state = $('#state').val();

	                    $.ajax({
	                        url : 'getDistrictByState',
	                        type:'POST',
	                        dataType: 'json',
	                        headers: {
	                            'X-CSRF-TOKEN': _token,
	                        },
	                        data:{state: state},
	                        success:function(response){

	                        	console.log(response);
	                            // Access the JSON response //
	                            /*var head_email = response.head_email;
	                            var temp = head_email.split('@');
	                            var email_first = temp[0];
	                            var email_second = temp[1];

	                            var email_start_chars = email_first.substr(0,4);

	                            var display_email = email_start_chars+'******@'+email_second;

	                            $('#head_email').text('This email is already registered with '+display_email);*/
	                        }
	                    });
                	});
                });
            </script>

			<!-- Search user result -->
			@if(!empty($search_users))
				<div class="ibox">
		            <div class="ibox-content">
						<div class="table-responsive">
		                    <table class="table table-striped table-bordered table-hover dataTables-example" >
		                        <thead>
		                            <tr>
		                                <th>Name</th>
		                                <th>Email</th>
		                                <th>Mobile</th>
		                                <th>Address</th>
		                                <th>Cast</th>
		                                <th>Action</th>
		                            </tr>
		                        </thead>
		                        <tbody>

		                            @foreach($search_users as $user)

		                                <tr class="gradeX">
		                                    <td>{{ $user->name }}</td>
		                                    <td>{{ $user->email }}</td>
		                                    <td>{{ $user->phone }}</td>
		                                    <td>{{ $user->residential_address }}</td>
		                                    <td>{{ $user->cast }}</td>
		                                    <td>
		                                    	@if(isset($user->user_id))
		                                        <a class="btn btn-success" href="{{ route('userView', ['id' => $user->user_id]) }}">View</a>
		                                        @else
		                                        <a class="btn btn-success" href="{{ route('familyMemberView', ['id' => $user->f_member_user_id]) }}">View</a>
		                                        @endif

		                                    </td>
		                                </tr>

		                            @endforeach

		                        </tbody>
		                    </table>
		                </div>
	                </div>
	        	</div>
	        @endif

        </div>
    </div>
</div>

@endsection