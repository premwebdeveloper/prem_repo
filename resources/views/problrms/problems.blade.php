@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Problems</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Problems</strong>
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

				<div class="ibox">
		            <div class="ibox-content">
						<div class="table-responsive">
		                    <table class="table table-striped table-bordered table-hover dataTables-example" >
		                        <thead>
		                            <tr>
		                                <th>Name</th>
		                                <th>Email</th>
		                                <th>Mobile</th>
		                                <th>Problems</th>
		                            </tr>
		                        </thead>
		                        <tbody>

		                        	@foreach($problems as $problem)
									<tr class="gradeX">
										<td>{{$problem->name}}</td>
										<td>{{$problem->email}}</td>
										<td>{{$problem->mobile}}</td>
										<td>{{$problem->problem}}</td>
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

@endsection