@extends('layouts.master')


@section('title')
Add Product
@endsection



@section('admin')


<div class="container">
  <div class="row">
  <div class="col-lg-8 m-auto">
    <div class="card">
      <div class="card-header bg-primary">
        <div class="card-title">
          <h3 class="text-center text-white">ADD PRODUCT</h3>
        </div>
      </div>
      <div class="card-body">

         @if(session('productDone'))
          <span class="text-success text-center">{{ session('productDone') }}</span>
         @endif


          {!! Form::open(['route' => 'product.saveProduct', 'method' =>'post', 'enctype' =>'multipart/form-data']) !!}
            <div class="row mb-3">
              <label for="category_name" class="col-md-3">Category Name</label>
              <select class="form-control col-md-9" id="category" name="category_name">
                  <option value="" disabled selected>-----Select Category-----</option>

                  @foreach($categories as $category)

                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                  @endforeach
              </select>
            </div>
            <div class="row mb-3">
              <label for="brand_name" class="col-md-3">Brand Name</label>
              <select class="form-control col-md-9" id="category" name="brand_name">
                  <option value="" disabled selected>-----Select Brand----</option>
                  @foreach($brands as $brand)
                  <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                  @endforeach
              </select>
            </div>
            <div class="row mb-3">
              <label for="product_name" class="col-md-3">Product Name</label>
              <input type="text" name="product_name" class="form-control col-md-9">
            </div>
            <div class="row mb-3">
              <label for="product_price" class="col-md-3">Product Price</label>
              <input type="number" name="product_price" class="form-control col-md-9">
            </div>
            <div class="row mb-3">
              <label for="product_quntity" class="col-md-3">Product Quntity</label>
              <input type="number" name="product_quntity" class="form-control col-md-9">
            </div>
            <div class="row mb-3">
              <label for="short_description" class="col-md-3">Short Description</label>
              <textarea name="short_description" class="form-control col-md-9 mb-2"></textarea>
              @error('short_description')
              <span class="text-danger m-auto">{{ $message }}</span>
              @enderror
            </div>
            <div class="row mb-3">
              <label for="long_description" class="col-md-3 label-control">Long Description</label>
              <textarea id="editor" name="long_description" class="form-control col-md-9 mb-2"></textarea>
              @error('long_description')
              <span class="text-danger m-auto">{{ $message }}</span>
              @enderror
            </div>
            <div class="row mb-3">
              <label for="product_image" class="col-md-3">Product Image</label>
              <input type="file" name="product_image" class="form-control col-md-9" accept="image/*">
            </div>
            <div class="row mb-3">
              <label for="publication_status" class="col-md-3">Publication Status</label>
              <div class="col-md-9">
                <input type="radio" name="publication_status" checked value="1"> Published
                <input type="radio" name="publication_status" value="0"> Unpublished
              </div>
            </div>
            <div class="row mb-3">
              <label for="" class="col-md-3"></label>
                <input type="submit" name="btn" value="Save Product Info" class="btn btn-primary col-md-9">
            </div>
          {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
</div>


@endsection
