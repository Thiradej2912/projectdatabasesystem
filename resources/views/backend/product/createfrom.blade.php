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
            <form class="forms-sample">
            <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="ชื่อสินค้า">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPrice4">Price</label>
                        <input type="number" class="form-control" id="exampleInputPrice4" placeholder="ราคา">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputDescription4">Description</label>
                        <input type="number" class="form-control" id="exampleInputDescription4" placeholder="คำอธิบาย">
                      </div>
                      <div class="form-group">
                        <label>Img</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="รูปภาพ">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                <button type="submit" class="btn btn-gradient-primary me-2">บันทึก</button>
                <a href="{{ route('product.index') }}" class="btn btn-light">ย้อนกลับ</a>
            </form>
            </div>
        </div>
    </div>
@endsection