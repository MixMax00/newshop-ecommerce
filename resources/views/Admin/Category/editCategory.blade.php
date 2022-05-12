@extends('layouts.master')


@section('title')

 Edit Category

@endsection




@section('admin')


  <div class="container">
    <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header bg-primary">
          <div class="card-title">
            <h3 class="text-center text-white">EDIT CATEGORY</h3>
          </div>
        </div>
        <div class="card-body">

          @if(session('errIns'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('errIns') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          @if(session('errDone'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('errDone') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
            <form class="" action="{{ route('updateCategory') }}" method="post">
              @csrf
                <div class="form-group mb-3 row">
                   <label for="category_name" class="control-label col-md-4">Category Name</label>
                   <input type="text" name="category_name" class="form-control col-md-8" value="{{ $category->category_name }}">
                    <input type="hidden" name="category_id" class="form-control col-md-8" value="{{ $category->id }}">
                </div>
                <div class="form-group mb-3 row">
                   <label for="category_description" class="control-label col-md-4">Category Description</label>
                   <textarea name="category_description" class="form-control col-md-8">{{ $category->category_description }}</textarea>
                </div>
                <div class="form-group mb-3 row">
                   <label for="publication_status" class="control-label col-md-4">Publication Status</label>
                   <div class="col-md-8 radio">
                        <label class="control-label"><input type="radio"  name="publication_status" {{ $category->publication_status == 1 ? 'checked' : ' ' }} value="1"> Published</label>
                        <label class="control-label"><input type="radio" name="publication_status" {{ $category->publication_status == 0 ? 'checked' : ' ' }} value="0"> Unpublished</label>
                   </div>

                </div>
                <div class="form-group mb-3">
                  <div class="col-md-8 offset-4">
                    <input type="submit" name="btn" value="UPDATE CATEGORY INFO" class="btn btn-primary btn-block">
                  </div>
                </div>
            </form>
        </div>
      </div>
    </div>
    </div>
  </div>


@endsection
