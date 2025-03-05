<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\User;


class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function profile(){
        $user = Auth::user();      
        return view('admin.profile.index',compact('user')); 
    }

    public function homepage(){
        return view('admin.homepage.index'); 
    }

    public function updateProfile(Request $request){
        $user = Auth::user();

        // Validation
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
            'profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        dd($request);

        // Updating user details
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Handling profile image upload
        if ($request->hasFile('profile')) {
            $destinationPath = public_path('images/user');
            
            // Remove old image if exists
            if ($user->profile_image && file_exists(public_path($user->profile_image))) {
                unlink(public_path($user->profile_image));
            }
            
            // Store new image
            $file = $request->file('profile');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $fileName);
            
            $user->profile_image = 'images/user/' . $fileName;
        }

        $user->save();

        return redirect('admin/profile')->with('success', 'Profile updated successfully!');
    }
}
