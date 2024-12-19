<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RequestsCar;

class RequestsCarController extends Controller
{
    public function index () {
        $Requests = RequestsCar::where('user_id', Auth::user()->id)->get();
        return view('dashboard', compact('dashboard'));
    }
}