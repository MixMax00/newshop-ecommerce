

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DotNetTec - Invoice html template bootstrap</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
</head>
<body style="font-size:10px">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Invoice
                <strong>01/01/2020</strong>
                <span class="float-right"> <strong>Status:</strong> Pending</span>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-5">
                        <h6 class="mb-3">Shipping Info</h6>
                        <p>Name: {{ $shipping->full_name }}</p>
                        <p>Phone: {{ $shipping->phone_number }}</p>
                        <p>Address: {{ $shipping->address }}</p>
                    </div>

                    <div class="col-sm-5">
                        <h6 class="mb-3">Billing Info</h6>
                        <p>Name: {{ $customer->first_name.' '.$customer->last_name }}</p>
                        <p>Phone: {{ $customer->phone_number }}</p>
                        <p>Address: {{ $customer->address }}</p>
                    </div>
                   
                </div>

                <div class="row mb-4">
                    <div class="col-md-8 col-sm-6">
                            <h3 class="text-danger">SupperShop</h3>
                            <p>Address: 31/25 Dhaka</p>
                            <p>Email: mdrabbihasan610@gmail.com</p>
    
                    </div>
                    <div class="col-md-4 col-sm-6">
                       <div class="card">
                           <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderd table-">
                                        <tr>
                                            <th>Invoice No:</th>
                                            <td>0000{{ $order->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Order Date:</th>
                                            <td>{{ $order->created_at->format('d-m-y') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Amount Due:</th>
                                            <td>{{ $order->order_total }} Tk.</td>
                                        </tr>
                                    </table>
                                </div>
                           </div>
                       </div>

                    </div>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th>Description</th>

                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                           @php( $sum = 0 )
                           @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td class="center">{{ $loop->index +1 }}</td>
                                <td class="left strong">{{ $orderDetail->product_name }}</td>
                                <td class="left">Extended License</td>

                                <td class="right">TK. {{ $orderDetail->product_price }}</td>
                                <td class="center">{{ $orderDetail->product_quantity }}</td>
                                <td class="right">{{ $total = $orderDetail->product_price*$orderDetail->product_quantity }}</td>
                            </tr>
                            @php($sum = $sum + $total )
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="right">TK. {{ $sum }}</td>
                                </tr>
                                <tr>
                        
                                <tr>
                                    <td class="left">
                                        <strong>VAT (5%)</strong>
                                    </td>
                                    <td class="right">{{ $vat = ($sum*5)/100 }}</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong>Tk. {{ $sum + $vat }} </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



