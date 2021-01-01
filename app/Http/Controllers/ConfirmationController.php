<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!session()->has('success_message')) {
            return redirect()->route('landing-page');
        }
        return view('shop.thank-you');
    }
}
