@extends('layouts.master_backend')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-account"></i>
        </span> User
        </h3>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
        </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th> No </th>
                        <th> Username </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Phone </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($u as $user)
                            <tr>
                                <td> {{$user->id}} </td>
                                <td> {{$user->username}} </td>
                                <td> {{$user->name}}</td>
                                <td> {{$user->email}} </td>
                                <td> {{$user->phone}} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection