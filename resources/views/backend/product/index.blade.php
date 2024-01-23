@extends('layouts.master_backend')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-silverware-variant"></i>
        </span> Product
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
        <a href="{{ route('product.createfrom') }}" type="button" class="btn btn-success btn-fw" style="font-size: 18px;">เพิ่มข้อมูล</a>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th> ID </th>
                        <th> NAME </th>
                        <th> IMGES </th>
                        <th> PRICE </th>
                        <th> DESCRIPTION </th>
                        <th> CREATE_AT </th>
                        <th> UPDATE_AT </th>
                        <th> ACTION </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $pro)
                            <tr>
                                <td> {{ $products->firstItem() + $loop->index }} </td>
                                <td> {{ $pro->name }} </td>
                                <td> 
                                    <img src="{{ asset('backend/product/resize/'.$pro->image) }}">     
                                </td>
                                <td> {{ $pro->price }} </td>
                                <td> {{ $pro->description }} </td>
                                <td> {{ $pro->created_at }} </td>
                                <td> {{ $pro->updated_at }} </td>
                                <td> 
                                    <a href="{{ route('product.edit', $pro->product_id ) }}"><i class="edit mdi mdi-table-edit"></i></a>
                                    <a href="{{ route('product.delete', $pro->product_id ) }}"><i class="remove mdi mdi-close-circle-outline"></i></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection