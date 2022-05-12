@extends('layouts.master')

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
              <th>Customer Name</th>
              <th>Order Total</th>
              <th>Order Date</th>
              <th>Order Status</th>
              <th>Payment Type</th>
              <th>Payment Status</th>
              <th>Action</th>
            </thead>
            <tbody>

           @foreach($orders as $order)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $order->first_name.' '.$order->last_name }}</td>
                <td>{{ $order->order_total }}</td>
                <td>{{ $order->created_at}}</td>
                <td>{{ $order->order_status }}</td>
                <td>{{ $order->payment_type }}</td>
                <td>{{ $order->payment_status }}</td>
                <td>
                  
                  <a href="{{ route('view-order',['id'=>$order->id]) }}" class="btn btn-success btn-xs mb-2" title="Order Details">
                     <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
               
                  <a href="{{ route('view-order-invoice',['id'=>$order->id]) }}" class="btn btn-warning btn-xs mb-2" title="Order Invoice">
                     <i class="fa fa-search-minus" aria-hidden="true"></i>
                  </a>
                
                  <a href="{{ route('download-order-invoice',['id'=>$order->id]) }}" class="btn btn-info btn-xs mb-2" title="Invoice Download">
                    <i class="fa fa-download" aria-hidden="true"></i>
                  </a>

                  <a href="" class="btn btn-info btn-xs mb-2" title="Edit">
                     <i class="fa fa-edit" aria-hidden="true"></i>
                  </a>

                  <a href="" class="btn btn-danger btn-xs mb-2" title="Delete">
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