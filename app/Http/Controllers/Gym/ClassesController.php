<?php

namespace App\Http\Controllers\Gym;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index(){
        return view('gym.pages.classes');
    }
}
