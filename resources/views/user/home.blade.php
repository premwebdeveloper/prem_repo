@extends('layouts.public_app')

@section('content')

<style type="text/css">
    .form-group {
        margin-bottom: 15px !important;
    }
    .amit .active{
        background: #b60c31;
    }     
    .amit li{
        background: #5bc0de;
    }     
    .amit li h3{
        color: #fff;
        margin-top: 10px;
    }    
    .amit .active h3{
        color: #fff;
        margin-top: 10px;
    }
    .mb20px{
        margin-bottom: 20px!important
    }    
    .mb30px{
        margin-bottom: 30px!important
    }
    .box_size{
        background: #b60c31;
        height: 200px;
        margin-bottom: 20px;
        text-align: center;
        color: #fff;
    }
    .box_size h1{
        padding-top: 40px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrapper wrapper-content mt30px">
                <div class="row animated fadeInRight">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <a href="{{ route('profile') }}">
                                <div class="box_size">
                                    <h1>संस्था का सदस्य बनने हेतु</h1>
                                    <p>Click Here</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('vivah') }}">
                                <div class="box_size">
                                    <h1>विवाह का बायोडाटा डालने हेतु</h1>
                                    <p>Click Here</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('rojgar') }}">
                                <div class="box_size">
                                    <h1>रोजगार के लिए बायोडाटा डालने हेतु</h1>
                                    <p>Click Here</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('vacancy') }}">
                                <div class="box_size">
                                    <h1>रिक्तिया (Vacancies) Upload करने हेतु</h1>
                                    <p>Click Here</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection