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

<!-- 			                    	<ul>
			                    		<li><a href="{{ route('profile') }}">View Profile</a></li>
			                    		@if(count($familymember)>0)
			                    		<li><a href="{{ route('familymember') }}">View Family Members</a></li>
			                    		@endif
			                    	</ul> -->
			                     </div>
			                    <!-- Show Personal Info -->

				        	</div>
				    	</div>

				    	<!-- Profile update section start here-->
				        <div class="col-md-7">
				        	<!-- Update member success message -->
				                	@if(session('update_member'))
										<div class="alert alert-success">{{ session('update_member') }}</div>
									@endif
							<!-- Update member success message -->
				            <div class="with-nav-tabs">
				                <div class="panel-heading">
				                        <ul class="nav nav-tabs">
				                            <li class="active"><a href="#profile" data-toggle="tab">Family Member List</a></li>
				                        </ul>
				                </div>
				               
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
								  	@foreach($familymember as $family)
								  	<tr>
								      <th scope="row">{{ $i }}</th>
								      <td>{{ $family->fname }}</td>
								      <td>{{ $family->lname }}</td>
								      <td>{{ $family->email }}</td>
								      <td>{{ $family->mobile }}</td>
								      <td><a href="{{ url('viewfamilymember'.$family->id) }}" class="btn btn-info btn-xs">view</a>  <a href="" class="btn btn-danger btn-xs">delete</a></td>
							     	 </tr>
							     	 @php $i++ @endphp
							     	@endforeach
							     </tbody>
								</table>
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