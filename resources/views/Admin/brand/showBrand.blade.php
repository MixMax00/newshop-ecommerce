@extends('layouts.master')

@section('title')

  Manage Category

@endsection

@section('admin')



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-primary">
          <div class="card-title">
            <h3 class="text-center text-white">Manage Category</h3>
          </div>
        </div>
        <div class="card-body">
          @if(session('errUnPbStPub'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('errUnPbStPub') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>


          @endif
          @if(session('errPbStPub'))
          <div id="close" class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('errPbStPub') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          @if(session('errUpdate'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('errUpdate') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          @if(session('errDelete'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('errDelete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <table class="table table-bordered">
            <thead class="bg-dark text-white">
              <th>Sl</th>
              <th>Brand Name</th>
              <th>Brand Description</th>
              <th>Added By</th>
              <th>Create At</th>
              <th>Status</th>
              <th>Action</th>
            </thead>
            <tbody>

              @foreach($brands as $brand)
              <tr>
                <td>{{ $loop->index + 1}}</td>
                <td>{{ $brand->brand_name }}</td>
                <td>{{ $brand->brand_description }}</td>
                <td>{{ $brand->brandTouser->name }}</td>
                <td>{{ $brand->created_at->format('d-m-y') }}</td>
                <td>

                  {{ $brand->publication_status == 1 ? 'Published' : 'Unpublished' }}
                </td>
                <td>
                  @if($brand->publication_status == 1)
                  <a href="{{ route('unpublishedCategory' , ['id'=>$brand->id]) }}" class="btn btn-success btn-xs mb-2">
                     <i class="fa fa-arrow-up" aria-hidden="true"></i>
                  </a>
                  @else
                  <a href="{{ route('publishedCategory' , ['id'=>$brand->id]) }}" class="btn btn-warning btn-xs mb-2">
                     <i class="fa fa-arrow-down" aria-hidden="true"></i>
                  </a>
                  @endif
                  <a href="#" class="btn btn-info btn-xs mb-2">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </a>

                  <a href="{{ route('editCategory' , ['id'=>$brand->id]) }}" class="btn btn-info btn-xs mb-2">
                     <i class="fa fa-edit" aria-hidden="true"></i>
                  </a>

                  <a href="{{ route('deleteCategory' , ['id'=>$brand->id]) }}" class="btn btn-danger btn-xs mb-2">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                  </a>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>






@endsection
