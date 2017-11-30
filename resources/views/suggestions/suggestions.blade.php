@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Suggestions</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Suggestions</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
    	<div class="col-lg-12">
	        <div class="ibox">
	            <div class="ibox-title">
	                <h5>Suggestions</h5>
	            </div>	            

				<div class="ibox">
		            <div class="ibox-content">
						<div class="table-responsive">
		                    <table class="table table-striped table-bordered table-hover dataTables-example">
		                        <thead>
		                            <tr>
		                                <th>Name</th>
		                                <th>Email</th>
		                                <th>Mobile</th>
		                                <th>Suggestion</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                        	@foreach($suggestions as $sugges)
									<tr class="gradeX">
										<td>{{$sugges->name}}</td>
										<td>{{$sugges->email}}</td>
										<td>{{$sugges->mobile}}</td>
										<td>{{$sugges->suggestion}}</td>
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