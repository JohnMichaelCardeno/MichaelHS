<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function booking(){
    	return view('booking');
    }
    public function bookingv1(){
    	return view('bookingv1');
    }
}
