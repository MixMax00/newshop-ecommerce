@extends('layouts.master')

@section('admin')





<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header" style="background-color:orange">
                <div class="d-flex justify-content-between">
                     <h3>Add Banner</h3>
                     <a href="{{ route('view-banner') }}" class="btn btn-primary btn-sm">Banner View</a>
                   </div>
                </div>
                <div class="card-body">
                    {{ Form::open([ 'route' =>'update',  'method' => 'POST',  'enctype' => 'multipart/form-data', ]) }}

 
                    <div class="row mb-3">
                      <div class="col-md-12">
                          <label for="" class="label-control">Banner Iamge</label>
                          <input type="hidden" class="form-control px-2" name="banner_id" value="{{ $banners->id }}" accept="/*">
                          <input type="file" class="form-control px-2" name="banner_image" accept="/*">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-md-12">
                          <label for="" class="label-control">Privious Iamge</label>
                         <img src="{{ asset('uploads/banner') }}/{{ $banners->banner_image }}" alt="" width="200px" height="100px">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary w-100" value="Add banner">
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

 

@endsection
