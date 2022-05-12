@extends('layouts.master')


@section('title')
  Add Brand
@endsection



@section('admin')

<div class="container">
  <div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header bg-primary">
        <div class="card-title">
          <h3 class="text-center text-white">ADD Brand</h3>
        </div>
      </div>
      <div class="card-body">

         @if(session('msgDone'))
          <span class="text-success text-center">{{ session('msgDone') }}</span>
         @endif
          {!! Form::open(['route' => 'brand.store', 'method' =>'post']) !!}
            <div class="row mb-3">
              <label for="brand_name" class="col-md-3">Brand Name</label>
              <input type="text" name="brand_name" class="form-control col-md-9 mb-2">
              @error('brand_name')
              <span class="text-danger m-auto">{{ $message }}</span>
              @enderror
            </div>
            <div class="row mb-3">
              <label for="brand_description" class="col-md-3">Brand Description</label>
              <textarea name="brand_description" class="form-control col-md-9 mb-2"></textarea>
              @error('brand_description')
              <span class="text-danger m-auto">{{ $message }}</span>
              @enderror
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
                <input type="submit" name="btn" value="Save Brand" class="btn btn-primary col-md-9">
            </div>
          {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
</div>

@endsection
