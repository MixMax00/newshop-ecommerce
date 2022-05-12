@extends('layouts.master')

@section('admin')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="text-center text-info">Customer Info for this order</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Customer Name</th>
                                <td>{{  $customer->first_name.' '.$customer->last_name  }}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{ $customer->phone_number }}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{ $customer->email }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $customer->address }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="text-center text-info">Order Info for this order</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Order Id</th>
                                <td>{{  $order->id  }}</td>
                            </tr>
                            <tr>
                                <th>Order Total</th>
                                <td>{{ $order->order_total }}</td>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <td>{{ $order->order_status }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $order->created_at->format('d-m-y') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="text-center text-info">Shipping Info for this order</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td>{{ $shipping->full_name }}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{ $shipping->phone_number }}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{ $shipping->email }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $shipping->address }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="text-center text-info">Payment Info for this order</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Payment Type</th>
                                <td>{{ $payment->payment_type }}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{{ $payment->payment_status }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="text-center text-info">Product Info for this order</h3>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <th>Sl</th>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                        </thead>
                        <tbody>


                           <?php $sum = 0; ?>
                           @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $orderDetail->product_id }}</td>
                                <td>{{ $orderDetail->product_name }}</td>
                                <td>{{ $orderDetail->product_price }}</td>
                                <td>{{ $orderDetail->product_quantity }}</td>
                                <td>{{ $total = $orderDetail->product_price * $orderDetail->product_quantity }}</td>
                               
                            </tr>

                            <?php $sum = $sum + $total; ?>

                            @endforeach
                            
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>

        <div class="row mt-4">
           <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <button class="btn btn-primary">Grant Total</button>
                        <button class="btn btn-primary mr-auto">TK. {{ $sum }}</button>
                </div>
                </div>
            </div>
        </div>



    </div>

@endsection