<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\checkout;
use App\Models\Shipping;
use App\Models\OrderDetail;
use App\Models\Payment;
use DB;
use PDF;


class OrderController extends Controller
{
    public function index()
    {

       $orders = DB::table('orders')
            ->join('checkouts', 'orders.customer_id' , '=' , 'checkouts.id')
            ->join('payments', 'orders.id' , '=' , 'payments.order_id')
            ->select('orders.*','checkouts.first_name','checkouts.last_name','payments.payment_type','payments.payment_status')
            ->get();

        return view('Admin.order.manage-order', [
            'orders' => $orders,
        ]);
    }

    public function viewOrderInfo($id)
    {
        
        $order = Order::find($id);
        $customer = checkout::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->id)->first();
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();

        return view('Admin.order.view-order-details',[
            'order'  => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'payment' => $payment,
            'orderDetails' => $orderDetails,
        ]);
    }


    public function viewOrderInvoice($id)
    {

        
        $order = Order::find($id);
        $customer = checkout::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        return view('Admin.order.order-invoice',[
            'order'  => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'orderDetails' => $orderDetails,
        ]);
    }

    public function downloadOrderInvoice($id)
    {
        $order = Order::find($id);
        $customer = checkout::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        $pdf = PDF::loadView('Admin.order.download-invoice',[
            'order'  => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'orderDetails' => $orderDetails,
        ]);
    
        return $pdf->stream('itsolutionstuff.pdf');
    }
}
