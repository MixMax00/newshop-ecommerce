@extends('front-end.master')


@section('title')

Cart

@endsection

@section('content')

<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Checkout</span></h3>
			</div>
		</div>
<div class="container">

  <div class="row" style="margin-top:50px; margin-left:50px; margin-right:50px;">
    <div class="card">
      <div class="card-header">
        <div class="card-title" style="margin-bottom:50px;">
          <h3 class="text-center text-danger" style="font-size:35px;">Show Cart Page</h3>
        </div>
      </div>
      <div class="card-body mt-5">
        <table class="table table-bordered">
          <thead class="bg-primary">
            <th>Sl</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price TK.</th>
            <th>Quantity</th>
            <th>Total Tk.</th>
            <th>Action</th>
          </thead>
          <tbody>
						@php($sum= 0)
            @foreach($cart_items as $cart_item)
            <tr>
              <td>{{ $loop->index +1 }}</td>
              <td>{{ $cart_item->name }}</td>
              <td>
                <img src="{{ asset($cart_item->attributes->image) }}" alt="" width="50px" height="50">
              </td>
              <td>{{ $cart_item->price }}</td>
              <td>
								{{ Form::open(['route'=>'update-cart','method' => 'post']) }}
								<input type="number" name="quantity" value="{{ $cart_item->quantity }}">
								<input type="hidden" name="id" value="{{ $cart_item->id}}">
								<input type="submit" name="btn" value="Update">

								{{ Form::close() }}

							</td>
              <td>{{ $total = $cart_item->price * $cart_item->quantity }}</td>
              <td>
								<a href="{{ route('delete',['id' =>$cart_item->id]) }}" class="btn btn-danger btn-xs">
									<span>
										<i class="glyphicon glyphicon-trash"></i>
									</span>
								</a>
							</td>
            </tr>

						<?php $sum  = $sum + $total; ?>
            @endforeach
          </tbody>
        </table>
				<hr>

				<table class="table table-bordered">
					<tr>
						<th>Item Total (TK.)</th>
						<td>{{ $sum }}</td>
					</tr>
					<tr>
						<th>Vat Total (TK.)</th>
						<td>{{ $vat = 0 }}</th>
					</tr>
					<tr>
						<th>Grant Total (TK.)</th>
						<td>{{ $orderTotal = $sum+$vat }}</td>
						<?php
						  Session::put('orderTotal',$orderTotal);
						 ?>
					</tr>
				</table>

      </div>
    </div>
  </div>

	<div class="row" style="margin:15px 37px;">
		<div class="col-md-12">
			@if(Session('customarId') && Session('shippingId'))
			<a href="{{ route('payment') }}" class="btn btn-warning pull-right">Checkout</a>

			@elseif(Session('customarId'))
			<a href="{{ route('checkout-shipping') }}" class="btn btn-warning pull-right">Checkout</a>
			@else
			<a href="{{ route('checkout') }}" class="btn btn-warning pull-right">Checkout</a>
			@endif
			<a href="#" class="btn btn-primary">Continue Shopping</a>
		</div>
	</div>

</div>

@endsection
