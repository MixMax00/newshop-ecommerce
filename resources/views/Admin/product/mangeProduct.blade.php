@extends('layouts.master')


@section('title')
Manage Product
@endsection



@section('admin')



<div class="container">
  <div class="row">
    <div class="col-lg-12">
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
          <table class="table table-bordered table-responsive">
            <thead class="bg-dark text-white">
              <th>Sl</th>
              <th>Category</th>
              <th>Brand</th>
              <th>Product Name</th>
              <th>Image</th>
              <th>Price</th>
              <th>Quntity</th>
              <th>Status</th>
              <th>Action</th>
            </thead>
            <tbody>

              @foreach($products as $product)
              <tr>
                <td>{{ $loop->index + 1}}</td>
                <td>{{ $product->modelTocategory->category_name }}</td>
                <td>{{ $product->modelTobrand->brand_name }}</td>
                <td>{{ $product->product_name }}</td>
                <td><img src="{{ asset($product->product_image) }}" alt="" width="100" height="100"></td>
                <td>{{ $product->product_price }}</td>
                <td>{{ $product->product_quntity }}</td>
                <!-- <td>{{Carbon\Carbon::parse($product['created_at'])->diffForHumans() }}</td> -->
                <td>
                  {{ $product->publication_status == 1 ? 'Published' : 'Unpublished' }}
                </td>
                <td>

                    <a href="#" class="btn btn-info btn-sm mb-3">edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
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
