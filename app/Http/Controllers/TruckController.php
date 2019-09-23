<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckController extends Controller
{
    public function truck()
    {
        return view('admin.Truck');
    }
}
