@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Website Pages</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Website Pages</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Website Pages Information</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>

                </div>
            </div>
            <div class="ibox-content">

                @if(session('disable_user'))
                   <div class="alert alert-success">{{ session('disable_user') }}</div>
                @endif

<div class="row">

            <div class="col-lg-12">

                <div class="ibox float-e-margins">

                  	<div class="ibox-content">

                        <form action="{{ route('web_page_update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            
                            {{ csrf_field() }}

                            <input type="hidden" value="{{ $edit_web_page->id }}" name="id">

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Page Name</label>

								<div class="col-sm-10">

                                    <input type="text" name="name" value="{{ $edit_web_page->page_title }}" class="form-control" readonly>

                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group"><label class="col-sm-2 control-label">Description</label>

								<div class="col-sm-10">

									<textarea placeholder="description" class="form-control summernote" name="content">{{ $edit_web_page->page_description }}</textarea>
                                 

								</div>

                            </div>

    

                            <div class="form-group">

                                <div class="col-sm-4 col-sm-offset-2">

                                    <button class="btn btn-white" type="submit">Cancel</button>

                                    <input type="submit" value="Save changes" name="submit" class="btn btn-primary">

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


@endsection