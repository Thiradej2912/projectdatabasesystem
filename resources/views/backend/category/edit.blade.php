@extends('layouts.master_backend')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-cart-outline"></i>
        </span> Edit Category
        </h3>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
        </nav>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title mb-4">Edit</h4>
            <form action="{{ url('admin/category/update/'.$cat->category_id) }}" method="post" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name = "name" placeholder="กรุณากรอกประเภทสินค้า" value="{{ $cat->name }}">
                </div>
                <input type="submit" class="btn btn-gradient-primary me-2" value="อัพเดต">
                <a href="{{ route('category.index') }}" class="btn btn-light">ย้อนกลับ</a>
            </form>
            </div>
        </div>
    </div>
@endsection