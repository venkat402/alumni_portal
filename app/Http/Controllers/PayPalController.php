<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayPalController extends Controller
{
    //
    public function postNotify(Request $request){
        $provider = new AdaptivePayments();

        $request->merge(['cmd' => '_notify-validate']);
        $post = $request->all();

        $response = (string) $provider->verifyIPN($post);

        if ($response === 'VERIFIED') {
            // Your code goes here ...
        }

    }
}
