<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\checkout;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\Payment;
use App\Models\OrderDetail;
use Cart;
use Carbon\Carbon;
use Session;
use Mail;

class CheckoutController extends Controller
{
    public function index()
    {
      return view('front-end.checkout.checkout-content');
    }

    public function customarSingup(Request $request)
    {
      $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email'     => 'required|unique:checkouts,email',
        'password'   => 'required',
        'phone_number' => 'required',
        'address' => 'required',
      ]);



   $customarId = checkout::insertGetId([
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
      'phone_number' => $request->phone_number,
      'address' => $request->address,
      'created_at' => Carbon::now(),
    ]);
    $customar = checkout::find($customarId);
    Session::put('customarId',$customarId);
    Session::put('customarName', $customar->first_name.' '.$customar->last_name);

      $data = $customar->toArray();

      Mail::send('front-end.mails.confirmation-mail', $data, function($message) use ($data){
          $message->to($data['email']);
          $message->subject('Confirmation Mail');
      });

      return redirect('/checkout-shipping');
    }
    public function shipping()
    {
        $customer = checkout::find(Session::get('customarId'));
      return view('front-end.checkout.checkout-shipping',[
        'customer' => $customer,
      ]);
    }




    public function customarLoginCheck(Request $request)
    {
        $customer_login = checkout::where('email',$request->email)->first();
        if (password_verify($request->password, $customer_login->password)) {
          Session::put('customarId',$customer_login->id);
          Session::put('customarName', $customer_login->first_name.' '.$customer_login->last_name);

          return redirect('/checkout-shipping');

        } else {
            return redirect('/checkout')->with('message', 'Baje Lok vlo Password De');
        }
    }

    public function newCustomerLogin()
    {
      return view('front-end.customer.customer-login');
    }


    public function customarLogout()
    {
      Session::forget('customarId');
      Session::forget('customarName');

      return redirect('/');
    }

    public function shippingSave(Request $request)
    {
      $request->validate([
        'full_name' => 'required',
        'email'     => 'required',
        'phone_number' => 'required',
        'address' => 'required',
      ]);
      $shippingId = Shipping::insertGetId([
        'full_name' => $request->full_name,
        'email'     => $request->email,
        'phone_number' => $request->phone_number,
        'address' => $request->address,
      ]);

      Session::put('shippingId', $shippingId);

      return redirect('/checkout/payment');
    }

    public function paymentForm()
    {
      return view('front-end.checkout.payment');
    }

    public function newOrder(Request $request)
    {
      $paymentType = $request->payment_type;
      if($paymentType == 'Cash'){

        $orderId = Order::insertGetId([
          'customer_id' =>Session::get('customarId'),
          'shipping_id' =>Session::get('shippingId'),
          'order_total' =>Session::get('orderTotal'),
          'created_at' =>Carbon::now(),
        ]);

        Payment::insert([
          'order_id' =>$orderId,
          'payment_type' =>$paymentType,
          'created_at' =>Carbon::now(),
        ]);

        $cartProducts = Cart::getContent();

        foreach ($cartProducts as $cartProduct) {
          OrderDetail::insert([
            'order_id' => $orderId,
            'product_id' => $cartProduct->id,
            'product_name' => $cartProduct->name,
            'product_price' => $cartProduct->price,
            'product_quantity' => $cartProduct->quantity,
          ]);
        }

        Cart::isEmpty();

        return redirect('/complate/order');

      }elseif ($paymentType == 'Paypal') {

      }elseif ($paymentType == 'Bkash') {

      }elseif ($paymentType == 'Nagad') {

      }
    }
    public function complate()
    {
      return view('front-end.complate.complate');
    }
}
