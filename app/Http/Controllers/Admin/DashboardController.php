<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    const PATH_VIEW = 'admin.entities.';
    const CONTROLLER = 'Admin\DashboardController@';
    
    public function dashboard(Request $request)
    {
        return view(self::PATH_VIEW . 'dashboard')->with([
        
        ]);
    }
}
