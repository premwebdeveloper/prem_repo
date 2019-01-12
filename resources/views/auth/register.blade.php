@extends('layouts.public_app')

@section('content')

<script>
$(document).ready(function(){

    $('#verifyButton').prop('disabled', true);

    // OTP verification on keyUP
    $(document).on('keyup', '#otp', function(){

        var otp_length = $('#otp').val().length;
        
        if(otp_length == 6){

            $('#otpMatched').hide();

            var otp = $('#otp').val();
            var exist_phone = $('#exist_phone').val();
            
            $.ajax({
                method : 'post',
                url: "{{ route('otpVerification') }}",
                async : true,
                data : {"_token": "{{ csrf_token() }}", 'otp' : otp, 'exist_phone' : exist_phone},
                success:function(response){

                    console.log(response);

                    if(response == 0)
                    {
                        $('#verifyButton').prop('disabled', true);
                    }
                    else if(response == 1)
                    {
                        $('#verifyButton').prop('disabled', false);
                    }
                    else if(response == 2)
                    {
                        $('#otpMatched').html('');
                        $('#otpMatched').html('OTP did not match!');
                        $('#otpMatched').show();

                        $('#verifyButton').prop('disabled', true);
                    }
                },
                error: function(data){
                    console.log(data);
                },
            });

        }
        else{

            $('#verifyButton').prop('disabled', true);
            $('#otpMatched').show();
        }
    });

});  
</script>

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <br>
            @if(session('mobile_exist'))
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        {{ session('mobile_exist') }}
                    </div>
                </div>
            @endif
            <div class="panel panel-default">
                <!-- <div class="panel-heading text-center">नि:शुल्क सदस्य बनें हमसे जुड़ें (Register)</div> -->

                <div class="panel-body">
                    @if(isset($otp))

                        <div class="alert alert-warning" style="display: none;" id="otpMatched">Enter 6 digit OTP !</div>

                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            {{ csrf_field() }}
                    
                            <div class="form-group row">
                                <label for="otp" class="col-sm-4 col-form-label text-md-right">Enter 6 digit OTP code sent to your mobile number</label>
                                <div class="col-md-6">
                                    <input id="otp" type="tel" class="form-control{{ $errors->has('otp') ? ' is-invalid' : '' }}" name="otp" value="{{ old('otp') }}" placeholder="OTP" required autofocus>
                            
                                    @if ($errors->has('otp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('otp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <input id="exist_phone" type="hidden" value="{{ $exist_phone }}" name="phone" required>
                            <input id="password" type="hidden" value="123456" name="password" required>

                            <div class="form-group row mb-0">
                                <div class="col-sm-4"></div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary" id="verifyButton">
                                        {{ __('Verify OTP') }}
                                    </button>
                                </div>
                            </div>

                        </form>

                    @else
                    <form class="form-horizontal" method="POST" action="{{ route('verifyRegisterOtp') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Full Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>


                                @if ($errors->has('email'))

                                    <input type="hidden" name="csrf" id="csrf" value="{{ csrf_token() }}">

                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            var email = $('#email').val();
                                            var csrf = $('#csrf').val();

                                            $.ajax({
                                                url : 'get_exist_user_details',
                                                type:'POST',
                                                dataType: 'json',
                                                headers: {
                                                    'X-CSRF-TOKEN': csrf
                                                },
                                                data:{email: email},
                                                success:function(response){
                                                    // Access the JSON response //
                                                    var head_email = response.head_email;
                                                    var temp = head_email.split('@');
                                                    var email_first = temp[0];
                                                    var email_second = temp[1];

                                                    var email_start_chars = email_first.substr(0,4);

                                                    var display_email = email_start_chars+'******@'+email_second;

                                                    $('#head_email').text('This email is already registered with '+display_email);
                                                }
                                            });

                                        });
                                    </script>

                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    <span class="help-block" id="head_email"></span>
                                @endif
                            </div>
                        </div>-->

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

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
                                    Register
                                </button>
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
