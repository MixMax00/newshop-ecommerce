@extends('layouts.master')

@section('admin')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between">
                     <h3>Banner View</h3>
                     <a href="{{ route('add_banner') }}" class="btn btn-primary btn-sm">Add Banner</a>
                   </div>
                </div>
                <div class="card-body">
                  <div class="row">
                      <div class="col-lg-12">
                        <table class="table table-bordered">
                            <thead>
                                <th>Sl</th>
                                <th>Banner Image</th>
                                <th>Added By</th>
                                <th>Banner Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($banners as $banner)
                               <tr>
                                    <td>{{ $loop->index +1 }}</td>
                                    <td><img src="{{ asset('uploads/banner') }}/{{ $banner->banner_image }}" alt="" width="200px" height="100px"></td>
                                    <td>{{ $banner->added_by }}</td>
                                    <td>{{ $banner->banner_status = 1 ? 'Active' : 'Deactive' }}</td>
                                    <td>{{ $banner->created_at->format('d-m-y') }}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">View</a>
                                        <a href="{{ route('edit', ['id'=>$banner->id])  }}" class="btn btn-info btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
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
    </div>
</div>

@endsection








@section('backend_script')

<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
      
      <strong class="mr-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      {{ session('success') }}
    </div>
  </div>
</div>




@endsection
