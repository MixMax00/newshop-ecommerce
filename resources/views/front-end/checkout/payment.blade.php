@extends('front-end.master')


@section('title')

Cart

@endsection

@section('content')

  <div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Payment</span></h3>
			</div>
	</div>

  <div class="content">
    <div class="single-w13">
      <div class="container">
        <div class="row " style="margin:20px 0px;">
          <div class="col-md-12">
            <div class="well">
              <h3 class="text-center text-dark">Dear, {{ Session::get('customarName') }}. You Have to give us product shipping info to complate your valuable Order. If your billing info & Shipping are same than just press are shipping address button.</h3>
            </div>
          </div>

        </div>
        <div class="row" style="margin:20px 0px;">
          <div class="col-md-8 col-md-offset-2">

            <div class="well p-3">
              <div class="title" style="margin:20px 0px;">
                <h3 class="text-warning text-center">Payment goes here!!</h3>
              </div>
              {{ Form::Open(['route'=>'new-order','methode'=>'POST']) }}
               <table class="table">
                 <tr>
                   <th>Cash On Delivery</th>
                   <td><input type="radio" name="payment_type" value="Cash"> Cash On Delivery</td>
                 </tr>
                 <tr>
                   <th>Paypal</th>
                   <td><input type="radio" name="payment_type" value="Paypal"> Paypal</td>
                 </tr>
                 <tr>
                   <th>Bkash</th>
                   <td><input type="radio" name="payment_type" value="Bkash"> Bkash</td>
                 </tr>
                 <tr>
                   <th>Nagad</th>
                   <td><input type="radio" name="payment_type" value="Nagad"> Nagad</td>
                 </tr>
                 <tr>
                   <th></th>
                   <td><input type="submit" value="Confiam Payment"></td>
                 </tr>

               </table>
              {{ Form::close() }}
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


@endsection
