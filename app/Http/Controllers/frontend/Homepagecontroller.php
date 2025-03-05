<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomepageController extends Controller
{
    public function homepage(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function programs(){
        return view('frontend.programs');
    }

    public function contact(){
        return view('frontend.contact');
    }
    
}
