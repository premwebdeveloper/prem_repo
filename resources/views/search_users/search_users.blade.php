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

	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label>State</label>
	                                <select id="state" name="state" required="required" class="form-control required">
	                                	<option value="">Select State</option>
	                                	<option value="rajasthan">Rajasthan</option>
	                                	<option value="gujrat">Gujrat</option>
	                                </select>
	                            </div>
	                        </div>

	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label>District</label>
	                                <select id="district" name="district" required="required" class="form-control required">
	                                	<option value="">Select District</option>
	                                	<option value="jhunjhunu">Jhunjhunu</option>
	                                	<option value="jaipur">Jaipur</option>
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
		                                        <a class="btn btn-success" href="{{ route('userView', ['id' => $user->user_id]) }}">View</a>
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