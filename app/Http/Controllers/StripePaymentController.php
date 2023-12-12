<?php
    
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Session;
use Stripe;
     
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe($id)
    {
        $orderDetails = Order::where('id', $id)->first();
        return view('frontend.stripe', compact('orderDetails'));
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $orderId = $request->order_id;

        // Check if the order with the specified ID exists
        $order = Order::find($orderId);
    
        if (!$order) {
            return response()->json(['error' => 'Order not found'], 404);
        }

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $order->total * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment" 
        ]);

        // Update the payment status to 'Paid'
        $order->payment_status = 'Paid';
        $order->save();
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
}