<?php

namespace App\Http\Controllers\Gym;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    public function index(){
        return view('gym.pages.trainers');
    }
}
