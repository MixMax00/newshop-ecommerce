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

  <div class="content">
    <div class="single-w13">
      <div class="container">
        <div class="row " style="margin:20px 0px;">
          <div class="col-md-12">
            <div class="well">
              <h3 class="text-center text-dark">Dear, {{ Session::get('customarName') }}. You Have to give us product Payment Methods</h3>
            </div>
          </div>

          @if(session('cusScc'))

          <h3 class="text-center text-primary">{{ session('cusScc') }}</h3>

          @endif
        </div>
        <div class="row" style="margin:20px 0px;">
          <div class="col-md-8 col-md-offset-2">

            <div class="well p-3">
              <div class="title" style="margin:20px 0px;">
                <h3 class="text-warning">Shipping Address goes here!!</h3>
              </div>
              {{ Form::Open(['route'=>'new-shipping','methode'=>'POST']) }}
              <div class="form-group">
                <label for="" class="label-control">Full Name</label>
                <input type="text" name="full_name" value="{{ $customer->first_name.' '.$customer->last_name }}" class="form-control">
              </div>

              <div class="form-group">
                <label for="" class="label-control">Email</label>
                <input type="email" name="email" value="{{ $customer->email }}" class="form-control">
              </div>

              <div class="form-group">
                <label for="" class="label-controll">Phone Number</label>
                <input type="number" name="phone_number" value="{{ $customer->phone_number }}" class="form-control">
              </div>
              <div class="form-group">
                <label for="" class="label-controll">Address</label>
                <textarea name="address" class="form-control">{{ $customer->address }}</textarea>
              </div>

              <div class="form-group">
                <input type="submit" name="btn" value="Shipping Address" class="btn btn-primary btn-block">
              </div>
              {{ Form::close() }}
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


@endsection
