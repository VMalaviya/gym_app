<?php

namespace App\Http\Controllers\Gym;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainersController extends Controller
{
    public function index(){
        $trainers = User::where('role','Trainer')->get();
        return view('gym.pages.trainers', compact('trainers'));
    }
}
