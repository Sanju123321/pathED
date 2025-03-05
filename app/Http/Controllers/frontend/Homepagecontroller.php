<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ContentManagement;
use App\Models\ContentData;

class HomepageController extends Controller
{
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

        return view('frontend.index', compact('banner','get_about_us','get_about_us_type','coreCurriculam','ourProgram','pathToStart'));
    }

    public function about(){
        $get_about_us = ContentManagement::with('contentData')->Where('type','About-us')->first();
        $get_about_us_type = [];
        if(!empty($get_about_us['contentData'])){
            foreach($get_about_us['contentData'] as $key=>$content_data){
                $get_about_us_type[$key] = $content_data;
            }
        }
        return view('frontend.about',  compact('get_about_us','get_about_us_type'));
    }

    public function programs(){
        return view('frontend.programs');
    }

    public function contact(){
        return view('frontend.contact');
    }
    
}
