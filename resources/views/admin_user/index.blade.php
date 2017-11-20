@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>All Users</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="active">
                    <strong>Users</strong>
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
                <h5>User Informations</h5>
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
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)

                                <tr class="gradeX">
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('userView', ['id' => $user->user_id]) }}">View</a>
                                        <a class="btn btn-success" href="{{ route('disableUser', ['id' => $user->user_id]) }}">
                                            Disable
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