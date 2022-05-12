@extends('front-end.master')


@section('title')

Login/Registation

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

          @if(session('cusScc'))

          <h3 class="text-center text-primary">{{ session('cusScc') }}</h3>

          @endif


        </div>
        <div class="row" style="margin:20px 0px;">
          <div class="col-md-6">

            <div class="well p-3">
              <div class="title" style="margin:20px 0px;">
                <h3 class="text-warning">Register If you are not registered before!!</h3>
                @error('email')

                <h3 class="text-center text-primary">{{ $message }}</h3>

                @enderror

              </div>
              {{ Form::Open(['route'=>'customar-singup','methode'=>'POST']) }}
              <div class="form-group">
                <label for="" class="label-control">Fist Name</label>
                <input type="text" name="first_name" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="" class="label-control">Last Name</label>
                <input type="text" name="last_name" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="" class="label-control">Email</label>
                <input type="email" name="email" value="" class="form-control">

              </div>
              <div class="form-group">
                <label for="" class="label-control">Password</label>
                <input type="password" name="password" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="" class="label-controll">Phone Number</label>
                <input type="number" name="phone_number" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="" class="label-controll">Address</label>
                <textarea name="address" class="form-control"></textarea>
              </div>
              <!-- <div class="form-group">
                <label for="" class="label-controll">Country</label>
                <select class="form-control" name="country">
                  <option value="">-Select Your Country-</option>
                  <option value="1">Bangladesh</option>
                  <option value="2">India</option>
                  <option value="3">Sri Lanka</option>
                  <option value="4">Pakistan</option>
                </select>
              </div> -->
              <div class="form-group">
                <input type="submit" name="btn" value="Register" class="btn btn-primary btn-block">
              </div>
              {{ Form::close() }}
            </div>
          </div>

          <div class="col-md-6">
            <div class="well">
              <div class="title" style="margin:20px 0px;">
                <h3 class="text-success text-center mb-3">Allready registered? Please Login here !!</h3>
                <br>
                <h3 class="text-danger text-center">{{ Session::get('message') }}</h3>
              </div>
              {{ Form::open(['route'=>'customarLoginCheck','method' => 'POST']) }}
              <div class="form-group">
                <label for="email" class="label-control">Email</label>
                <input type="email" name="email" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="label-control">Password</label>
                <input type="password" name="password" value="" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" name="btn" value="Login" class="btn btn-primary btn-block">
              </div>
              {{ Form::close() }}
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


@endsection
