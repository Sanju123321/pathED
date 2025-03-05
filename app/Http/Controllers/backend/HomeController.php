<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\ContentManagement;
use App\Models\ContentData;
use App\Models\WebsiteDetail;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function homepage(){
        $banner = ContentManagement::Where('type','Banner')->first();
        $get_about_us = ContentManagement::with('contentData')->Where('type','About-us')->first();
        $get_about_us_type = [];
        if(!empty($get_about_us['contentData'])){
            foreach($get_about_us['contentData'] as $key=>$content_data){
                $get_about_us_type[$key] = $content_data;
            }
        }

        $coreCurriculam = ContentManagement::where('type', 'Core-Curriculums')
        ->orderBy('id', 'asc')
        ->get()->toArray();

        $ourProgram = ContentManagement::where('type', 'Our-Programs')
        ->orderBy('id', 'asc')
        ->get()->toArray();

        $pathToStart = ContentManagement::where('type', 'Path-To-Start')
        ->orderBy('id', 'asc')
        ->get()->toArray();

        return view('admin.homepage.index', compact('banner','get_about_us','get_about_us_type','coreCurriculam','ourProgram','pathToStart')); 
    }

    public function saveHomepages(Request $request){
        $data = $request->all();
        $uploadPath = public_path('images/contentManagement/');
        if($data['type'] == 'Banner'){
            $get_banner = ContentManagement::Where('type','Banner')->first();
            if ($request->hasFile('image')) {
                // delete old image
                if(!empty($get_banner->image1)){
                    $old_image = $uploadPath.'/'.$get_banner->image1;
                    if (file_exists($old_image)) {
                        unlink($old_image);
                    }
                }
                // delete old image
                $image = $request->file('image');
                $originalName = $image->getClientOriginalName();
                $filenameWithoutExt = pathinfo($originalName, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                $image->move($uploadPath, $filename);
                $get_banner->image1 = $filename;
                $get_banner->save();
            }
        }elseif($data['type'] == 'About-us'){ 
            $get_about_us = ContentManagement::Where('type','About-us')->first();
            $get_about_us->description = $data['description'];
            $get_about_us->save();
            if(!empty($data['content_data'])){
                foreach($data['content_data'] as $key=>$arrayData){
                    $get_about_us = contentData::Where('id',$key)->update([
                        'heading' => $arrayData
                    ]);                    
                }
            }
        }elseif($data['type'] == 'Core-Curriculums') {
            foreach($data['heading'] as $key=>$heading){
                $description = $data['description'][$key];
                $image = @$data['images1'][$key];
                if (!empty($image)) {
                     // delete old image
                    $old_image = $uploadPath.'/'.$image;
                    if (file_exists($old_image)) {
                        unlink($old_image);
                    }
                    // delete old image
                    $originalName = $image->getClientOriginalName();
                    $filenameWithoutExt = pathinfo($originalName, PATHINFO_FILENAME);
                    $extension = $image->getClientOriginalExtension();
                    $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                    $image->move($uploadPath, $filename);
                }
                $core_curiculam = ContentManagement::Where('id',$key)->first();
                $core_curiculam->heading1 = $heading;
                $core_curiculam->description = $description;
                if(!empty($image)){
                    $core_curiculam->image1 = $filename;
                }
                $core_curiculam->save();
            }
        }elseif($data['type'] == 'Our-Programs'){
            foreach($data['heading'] as $key=>$heading){
                $heading2 = $data['heading2'][$key];
                $description = $data['description'][$key];
                $image = @$data['images1'][$key];
                if (!empty($image)) {
                     // delete old image
                    $old_image = $uploadPath.'/'.$image;
                    if (file_exists($old_image)) {
                        unlink($old_image);
                    }
                    // delete old image
                    $originalName = $image->getClientOriginalName();
                    $filenameWithoutExt = pathinfo($originalName, PATHINFO_FILENAME);
                    $extension = $image->getClientOriginalExtension();
                    $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                    $image->move($uploadPath, $filename);
                }
                $core_curiculam = ContentManagement::Where('id',$key)->first();
                $core_curiculam->heading1 = $heading;
                $core_curiculam->heading2 = $heading2;
                $core_curiculam->description = $description;
                if(!empty($image)){
                    $core_curiculam->image1 = $filename;
                }
                $core_curiculam->save();
            }
        }elseif($data['type'] == 'Path-To-Start'){
            foreach($data['heading'] as $key=>$heading){
                $description = $data['description'][$key];
                $image = @$data['images1'][$key];
                if (!empty($image)) {
                     // delete old image
                    $old_image = $uploadPath.'/'.$image;
                    if (file_exists($old_image)) {
                        unlink($old_image);
                    }
                    // delete old image
                    $originalName = $image->getClientOriginalName();
                    $filenameWithoutExt = pathinfo($originalName, PATHINFO_FILENAME);
                    $extension = $image->getClientOriginalExtension();
                    $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                    $image->move($uploadPath, $filename);
                }
                $core_curiculam = ContentManagement::Where('id',$key)->first();
                $core_curiculam->heading1 = $heading;
                $core_curiculam->description = $description;
                if(!empty($image)){
                    $core_curiculam->image1 = $filename;
                }
                $core_curiculam->save();
            }   
        }
        return redirect()->back()->with('success', 'Content added successfully!');
    }
    
    public function profile(){
        $user = Auth::user();      
        return view('admin.profile.index',compact('user')); 
    }

    public function updateProfile(Request $request){
        $user = Auth::user();
        dd($request->all());
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

    public function websiteDetails(){
        $websiteDetails = WebsiteDetail::Where('id', '1')->first();
        return view('admin.websiteDeatils.index', compact('websiteDetails'));
    }

    public function saveWebsiteDetails(Request $request){
        $data = $request->all();
        $websiteDetails = WebsiteDetail::Where('id', '1')->first();
        $uploadPath = public_path('images/contentManagement/');

        // delete old image
        if(!empty($websiteDetails->image)){
            $old_image = $uploadPath.'/'.$get_banner->image;
            if (file_exists($old_image)) {
                unlink($old_image);
            }
        }
        // delete old image
        $image = $request->file('image');
        if(!empty($image)){
            $originalName = $image->getClientOriginalName();
            $filenameWithoutExt = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
            $image->move($uploadPath, $filename);
            $websiteDetails->image = $filename;
    
        }

        $websiteDetails->name = $data['name'];
        $websiteDetails->email = $data['email'];
        $websiteDetails->address = $data['address'];
        $websiteDetails->phone_number = $data['phone_number'];
        $websiteDetails->facebook = $data['facebook'];
        $websiteDetails->instagram = $data['instagram'];
        $websiteDetails->description = $data['description'];
        if($websiteDetails->save()){
            return redirect()->back()->with('success', 'Login successful!');
        }else{
            return redirect()->back()->with('error', SERVER_ERROR);
        }
    }

}