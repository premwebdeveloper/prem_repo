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

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                            <tr>
                                <th>Page Name</th>
                                <th>Page Description</th>
                                <th>Updated Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($web_pages as $web)

                                <tr class="gradeX">
                                    <td>{{ $web->page_title }}</td>
                                    <td>{{ $web->page_description }}</td>
                                    <td>{{ $web->updated_at }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('web_page_edit', ['id' => $web->id]) }}">
                                            Edit
                                        </a>
                                    </td>
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

@endsection