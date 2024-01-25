@extends('layouts.master_backend')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-cart-outline"></i>
        </span> Create Product
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
            <h4 class="card-title mb-4">Create</h4>
            <form action="{{ url('admin/product/insert') }}" method="post" enctype="multipart/form-data" class="forms-sample">
            @csrf
            <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="ชื่อสินค้า" name="name">
                      </div>
                      @error('name')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                      <div class="form-group">
                        <label for="exampleInputPrice4">Price</label>
                        <input type="number" class="form-control" id="exampleInputPrice4" placeholder="ราคา" name="price">
                      </div>
                      @error('price')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                      <div class="form-group">
                        <label for="exampleInputDescription4">Description</label>
                        <input type="text" class="form-control" id="exampleInputDescription4" placeholder="คำอธิบาย" name="description">
                      </div>
                      @error('description')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                      <div class="form-group">
                        <label for="exampleInputDescription4">Category</label>
                        <select type="number" class="form-control" id="exampleInputDescription4" name="category_id">
                            <option selected>กรุณาเลือกประเภทสินค้า</option>
                            @foreach($category as $cat)
                                <option value="{{ $cat->category_id }}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Img</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                      </div>
                      @error('image')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                <button type="submit" class="btn btn-gradient-primary me-2">บันทึก</button>
                <a href="{{ route('product.index') }}" class="btn btn-light">ย้อนกลับ</a>
            </form>
            </div>
        </div>
    </div>
@endsection