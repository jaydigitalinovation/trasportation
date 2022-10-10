<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home_about(){

        $data['home_about']=DB::table('home_about')->get();

        return view('admin.home_about',$data);
    }
}
