<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class user_controller extends Controller
{

    public function index(){

        $service=DB::table('service')->take(3)->get();

        $data['service']=$service;

        $data['home']=DB::table('home')->get();

        return view('welcome',$data);
    }


    public function about(){

        $about_mission=DB::table('about_mission')->take(3)->get();

        $data['about_mission']=$about_mission;

        $about_image=DB::table('about_image')->get();

        $data['image']=$about_image[0]->image;

        $data['about_choose']=DB::table('about_choose')->get();

        $data['about_faq']=DB::table('about_faq')->get();

        $data['about_faq_des']=DB::table('about_faq_des')->get();

        return view('RR_about',$data);
    }

    public function team(){

        return view('RR_team');
    }

    public function gallary(){

        return view('RR_gallary');
    }

    public function service(){

        return view('RR_service');
    }

    public function career(){

        $career_position=DB::table('career_position')->take(4)->get();

        $data['career_position']=$career_position;

        return view('RR_career',$data);
    }

    public function enquiry(){

        return view('RR_enquiry');
    }

    public function contact(){

        return view('RR_contact');
    }
}
