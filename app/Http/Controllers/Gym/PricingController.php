<?php

namespace App\Http\Controllers\Gym;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    public function index(){

        $packages = Package::all();
        return view('gym.pages.pricing', compact('packages'));
    }
}
