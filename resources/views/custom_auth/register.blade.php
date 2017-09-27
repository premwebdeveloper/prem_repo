@extends('layouts.public_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register Here</div>

                <div class="panel-body">
					
					@if(count($errors) > 0)
						@foreach($errors->all() as $error)
							<div class="alert alert-danger">{{$error}}</div>
						@endforeach
					@endif
					
					@if(session('status'))
						<div class="alert alert-success"> {{ session('status') }} </div>
					@endif
									
                    <form class="form-horizontal" method="post" action="{{ route('registration') }}">
					  <fieldset>
						
						{{csrf_field()}}
						
						<div class="form-group">
						  <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
						  <div class="col-lg-10">
							<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="First Name">
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
						  <div class="col-lg-10">
							<input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name">
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="inputEmail" class="col-lg-2 control-label">Email</label>
						  <div class="col-lg-10">
							<input type="text" class="form-control" id="inputEmail" name="email" value="{{ old('email') }}" placeholder="Email">
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="inputPassword" class="col-lg-2 control-label">Password</label>
						  <div class="col-lg-10">
							<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="inputPassword" class="col-lg-2 control-label">Confirm Password</label>
						  <div class="col-lg-10">
							<input type="password" class="form-control" id="inputPassword" name="password_confirmation" placeholder="Confirm Password">
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="inputEmail" class="col-lg-2 control-label">Contact</label>
						  <div class="col-lg-10">
							<input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact') }}" placeholder="Contact Number">
						  </div>
						</div>
						
						<div class="form-group">
						  <div class="col-lg-10 col-lg-offset-2">
							<button type="submit" class="btn btn-primary btn btn-block">Register</button>
						  </div>
						</div>
						
					  </fieldset>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
