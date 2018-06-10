<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showAccount(Request $request)
    {
        
        if (Auth::guest()){
            return redirect()->back()->with('error', 'Vous devez etre connecté pour accèder a cette page');
        }
        
        return view('app.entities.auth.account');
    }
}
