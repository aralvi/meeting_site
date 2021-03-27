<?php

namespace App\Http\Controllers;

use App\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;

class StripeController extends Controller
{
     public function checkout(Request $request)
    {
        // dd($request->all());
        $specialist = Specialist::findOrFail($request->specialist_id);
        // Enter Your Stripe Secret
        Stripe::setApiKey($specialist->stripe_secrete_key);

        $amount = $request->amount;
        $amount *= 100;
        $amount = (int) $amount;

        $payment_intent = \Stripe\PaymentIntent::create([
            'description' => 'Stripe Test Payment',
            'amount' => $amount,
            'currency' => 'USD',
            'description' => Auth::user()->username,
            'payment_method_types' => ['card'],
        ]);
        $intent = $payment_intent->client_secret;

        return view('checkout.credit-card', compact('intent', 'specialist'));
    }

    public function afterPayment()
    {
        echo 'Payment Has been Received';
    }
}
