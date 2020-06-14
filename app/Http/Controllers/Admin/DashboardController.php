<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // dashboard
    public function dashbord_al(){
        return view('admin.dashbord');
    }
}
