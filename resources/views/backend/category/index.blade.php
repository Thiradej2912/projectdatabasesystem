@extends('layouts.master_backend')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-cart-outline"></i>
        </span> Category
        </h3>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
        </nav>
    </div>
    <div class="mb-4">
        <a href="{{ route('category.createfrom') }}" type="button" class="btn btn-success btn-fw" style="font-size: 18px;">เพิ่มข้อมูล</a>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th> ID </th>
                        <th> NAME </th>
                        <th> CREATE_AT </th>
                        <th> UPDATE_AT </th>
                        <th> ACTION </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $cat)
                            <tr>
                                <td> {{ $category->firstItem() + $loop->index }} </td>
                                <td> {{ $cat -> name }}</td>
                                <td> {{ $cat -> created_at }}</td>
                                <td> {{ $cat -> updated_at }}</td>
                                <td> 
                                    <a href="{{ url('admin/category/edit/'.$cat -> category_id) }}"><i class="edit mdi mdi-table-edit"></i></a>
                                    <a href="{{ url('admin/category/delete/'.$cat -> category_id) }}"><i class="remove mdi mdi-close-circle-outline"></i></a>
                                </td>
                            <tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3 container">
                    {{ $category->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection