<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\support\facades\Auth;
use App\Models\Admin;
use Illuminate\support\MessageBag;
use Illuminate\Support\Facades\Mail;
use Illuminate\support\facades\Input;
use DB;
use Hash;

class AdminloginController extends Controller
{
        public function __construct(){

           $this->middleware('guest:admin')->except('logout');
        }

  
    protected function guard(){

        return Auth::guard('admin');

     }

     public function admin_login(){

        return view('admin.login');
    }
     

    protected $redirectTo ='/admin/home';

    public function authenticate(Request $request){
          
         $error=$request->validate([
 
           'email' => 'required|email',
            'password' => 'required|string',
           
        ]);
             
    
    
      $remember=($request->input('remember')) ? true : false;
      $login_atempt=Auth::guard('admin')->attempt([

        'email'=>$request->input('email'),
        'password'=>$request->input('password')

      ],$remember);

     if ($login_atempt) {
        
        $request->session()->regenerate();

        return redirect('/admin/home');

     }else{

         return redirect('/admin/admin_login')
        ->with('error','Your email or password are invalid.');

        /*$errors=new MessageBag(['password'=>['Email and / or password invalid.']]);

        return Redirect::back()->withError($errors);*/
     }

    } 

    public function logout(){

         Auth::guard('admin')->logout();

         return redirect('admin/login');
      }



}
