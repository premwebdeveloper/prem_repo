@extends('layouts.public_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br>
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{$errors->first()}}
                </div>
            @endif
            <div class="panel panel-default">
                
                <!-- <div class="panel-heading text-center">Login</div> -->

                <div class="panel-body">

                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                        @if(isset($otp))

                            <div class="alert alert-warning" style="display: none;" id="otpMatched">Enter 6 digit OTP !</div>

                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                {{ csrf_field() }}
                        
                                <div class="form-group row">
                                    <label for="otp" class="col-sm-4 col-form-label text-md-right">Enter 6 digit OTP code sent to your mobile number</label>
                                
                                    <div class="col-md-6">
                                        <input id="otp" type="number" class="form-control{{ $errors->has('otp') ? ' is-invalid' : '' }}" name="otp" value="{{ old('otp') }}" placeholder="OTP" required autofocus>
                                
                                        @if ($errors->has('otp'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('otp') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <input id="exist_phone" type="hidden" value="{{ $exist_phone }}" name="phone" required>
                                <input id="password" type="hidden" value="123456" name="password" required>

                                <div class="form-group">
                                    <div class="col-sm-4"></div>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary" id="verifyButton">
                                            {{ __('Verify OTP') }}
                                        </button>
                                    </div>
                                </div>

                            </form>

                        @else

                            <form method="POST" action="{{ route('verifyOtp') }}" aria-label="{{ __('Login') }}" class="form-horizontal">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="phone" class="col-sm-4 control-label">{{ __('Phone') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" placeholder="Mobile Number" value="{{ old('phone') }}" required autofocus>

                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        <a class="btn btn-link" href="{{ route('register') }}">
                                            New User? Join Us.
                                        </a>
                                    </div>
                                </div>
                            </form>
                        @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
