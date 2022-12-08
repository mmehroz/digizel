<?php

namespace App\Http\Controllers;

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
    public function paynow(Request $request)
    {
        $price = $request->hdnamount;
        $packagename = $request->hdnpackagename;
        $packagedetails = $request->hdnpackagedetails;
        return view('stripe',['price' => $price, 'name' => $packagename, 'details' => $packagedetails]);
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        // dd($request);
        if ($request->hdnprice == '') {
            Session::flash('success', 'Select Package Before Payment');
            return back();
        }
        $price = $request->hdnprice*100;
        Stripe\Stripe::setApiKey('sk_test_51Jrlb4K6PNVoxDYrKqlN8Sq1A9Sso5VaE0l2tws2dcwCr6uvu87TiRNIJkYvO8dWyUvElJ7XSl9hNqbedjlWCkhV00rat80RfD');
        Stripe\Charge::create ([
                "amount" => $price,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "digizel.com." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}
