<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeeController extends Controller
{
    public function homee()
    {
        $users = Auth::user();
        return view('homee',['users'=>$users]);
    }
}
