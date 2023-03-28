<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->foto->extension();  
   
        $request->foto->move(public_path('images'), $imageName);

        $user = Auth::user();
        $user->foto = $imageName;
        $user->save();

        return redirect('/users')->with('success', 'Image uploaded successfully.');
    }
}
