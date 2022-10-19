<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function Vendordashboard(){

        return view('vendor.index');

    } // End Mehtod
}
