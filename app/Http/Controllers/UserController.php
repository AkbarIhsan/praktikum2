<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($name){
        $mahasiswa = mahasiswa::getByName($name);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
