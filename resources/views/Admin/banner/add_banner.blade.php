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

                @if(session('ssc'))
                <h3 class="text-center text-success">{{ session('ssc') }}</h3>

                @endif
                <div class="card-body">
                    {{ Form::open([ 'route' =>'store-banner',  'method' => 'POST',  'enctype' => 'multipart/form-data', ]) }}

 
                    <div class="row mb-3">
                      <div class="col-md-12">
                          <label for="" class="label-control">Banner Iamge</label>
                          <input type="file" class="form-control px-2" name="banner_image" accept="/*">
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
