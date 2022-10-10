<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\Models\Admin;

use DB;

use Hash;

class Admin_controller extends Controller
{
    public function home(){

        $userdata=DB::table('home')->get();

        $data['userdata']=$userdata;

        return view('admin.home',$data);
    }

    public function forget_password(){

        return view('admin.email');
    }

    public function send_mail(Request $request){

        $validated=$request->validate([
            'email'=>'required|email',
        ]);

        $email=$request->input('email');

        $admin=Admin::where('email',$email)->count();

        if($admin){

            $admin_data=Admin::where('email',$email)->get();

            $admin_id=$admin_data[0]->id;

            $string=$this->generateRandomString(4);

            $meta["FROM_EMAIL"]="jayp38942@gmail.com";
            $meta["email"]=$email;
            $meta["subject"]="reset password mail";
            $meta["id"]=$admin_id;

            $meta["token"]=$string;

            Mail::send('admin.email.token', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'reset password mail');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
                });

            $already_store=DB::table('password_resets')->where('admin_id',$admin_id)->count();

            if($already_store){

                DB::table('password_resets')->where('admin_id',$admin_id)->update(['token'=>$string]);
            }else{

                DB::table('password_resets')->insert(['token'=>$string,'admin_id'=>$admin_id]);
            }
            return redirect('admin/confirm_otp/'.$admin_id)->with('error','otp send on email!!');
        
        }else{

            return redirect('admin/admin_login')->with('error','user not registered!!!');
        }
    }

    public function confirm_otp($id){

        $data['id']=$id;

        return view('admin.otp',$data);
    }

    public function verify_otp(Request $request,$id){

        $validated =$request->validate([
            'otp'=>'required',
        ]);

        $otp=$request->input('otp');

        $admin_data=DB::table('password_resets')->where('admin_id',$id)->get();

        $token=$admin_data[0]->token;

        if($otp==$token){

            DB::table('password_resets')->where('admin_id',$id)->delete();

            return redirect('/admin/reset_password/'.$id);
        }else{

            return redirect('admin/confirm_otp/'.$id)->with('error','otp is invalid!!');
        }
    }


    public function reset_password($id){

        $data['id']=$id;

        return view('admin.reset_password',$data);
    }

    public function store_password(Request $request,$id){

        $validated=$request->validate([
            'password'=>'required|min:6',
            'c_password'=>'required|min:6|same:password',
        ]);

        Admin::where('id',$id)->update(['password'=>Hash::make($request->password),]);

        return redirect('admin/admin_login')->with('error','Password changed sccessfully!!!');
    }
    

    public function add_home_info(){

        return view('admin.add_home_info');
    }

    public function store_add_home_info(Request $request){

        $validator = Validator::make($request->all(), [

            'title1'=>'required',
            'title2'=>'required',
        ]);

        if($validator->fails())
        {

            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{

        $title1=$request->title1;
        $title2=$request->title2;

        $file=$request->file('image');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);
        }

        DB::table('home')->insert(['title1'=>$title1 ,'title2'=>$title2 ,'image'=>$imagename]);

        return response()->json([
                'status'=>200,
                'message'=>'Added successfully',
            ]);
        }
    }

    public function delete_home_data($id){

        $user_data=DB::table('home')->where('id',$id)->get();

        $image=$user_data[0]->image;

        if($image){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('home')->where('id',$id)->delete();

        return response()->json([
            'status'=>200,
            'message'=>'deleted successfully',
        ]);
    }

    public function update_home_data($id){

        $userdata=DB::table('home')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;
        $data['title1']=$userdata[0]->title1;
        $data['title2']=$userdata[0]->title2;
        $data['image']=$userdata[0]->image;

        return view('admin.update_home',$data);
    }

    public function store_update_home_data(Request $request,$id){

        $validated = $request->validate([
            'title1'=>'required',
            'title2'=>'required',
        ]);

        $title1=$request->input('title1');

        $title2=$request->input('title2');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        if($file){

            $imagename='';

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage !=''){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('home')->where('id',$id)->update(['image'=>$imagename,]);
        }

        DB::table('home')->where('id',$id)->update(['title1'=>$title1,'title2'=>$title2]);

        return redirect('/admin/home')->with('error','data updated successfully!!');
    }


    public function gallary_image(){

        $userdata=DB::table('gallary')->get();

        $data['userdata']=$userdata;

        return view('admin.gallary',$data);
    }

    public function add_gallary_info(){

        return view('admin.add_gallary_info');
    }

    public function store_add_gallary_info(Request $request){

        $file=$request->file('file');

        foreach($file as $key=>$f){

            if($f){

                $imagename='';

                $destination_path='uploads';

                $imagename=time().'_'.$f->getClientOriginalName();

                $f->move($destination_path,$imagename);

                DB::table('gallary')->insert(['image'=>$imagename]);
            }
        }

        return redirect('/admin/gallary_image')->with('error','data submited successfully');
    }

    public function update_gallary_data($id){

        $user_data=DB::table('gallary')->where('id',$id)->get();

        $data['image']=$user_data[0]->image;
        $data['id']=$user_data[0]->id;

        return view('admin.update_gallary',$data);
    }

    public function store_update_gallary_data(Request $request,$id){

        $file=$request->file('image');
        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file !=''){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage !=''){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('gallary')->where('id',$id)->update(['image'=>$imagename]);
        }


        return redirect('/admin/gallary_image')->with('error','data updated successfully');
    }


    public function delete_gallary_data($id){

        $userdata=DB::table('gallary')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('gallary')->where('id',$id)->delete();
        
        return redirect('/admin/gallary_image')->with('error','data deleted successfully');
    }


    public function service(){

        $userdata=DB::table('service')->get();

        $data['userdata']=$userdata;

        return view('admin.service',$data);
    }

    public function add_service_info(){

        return view('admin.add_service_info');
    }


    public function store_add_service_info(Request $request){

        $validated=$request->validate([
            'icon'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $icon=$request->input('icon');

        $title=$request->input('title');

        $description=$request->input('description');


        DB::table('service')->insert(['icon'=>$icon,'title'=>$title,'description'=>$description,]);

        return redirect('/admin/service')->with('error','data submitted successfully!!');
    }


    public function update_service_data($id){

        $userdata=DB::table('service')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;
        $data['icon']=$userdata[0]->icon;
        $data['title']=$userdata[0]->title;
        $data['description']=$userdata[0]->description;

        return view('admin.update_service',$data);
    }


    public function store_update_service_data(Request $request,$id){

        $validated=$request->validate([
            'icon'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $icon=$request->input('icon');
        $title=$request->input('title');
        $description=$request->input('description');

        DB::table('service')->where('id',$id)->update(['icon'=>$icon,'title'=>$title,'description'=>$description,]);

        return redirect('/admin/service')->with('error','data updated successfully!!');
    }

    public function delete_service_data($id){

        DB::table('service')->where('id',$id)->delete();

        return redirect('/admin/service')->with('error','data deleted successfully!!');
    }


    public function about(){

        $userdata = DB::table('state')->join('country', 'state.country_id', '=', 'country.id')
                    ->join('city', 'city.state_id', '=', 'state.city_id')
                    ->get(['country.country_name', 'state.state_name', 'city.city_name']);

        $data['userdata']=$userdata;

        return view('admin.about',$data);
    }


    public function about_mission(){

        $userdata=DB::table('about_mission')->get();

        $data['userdata']=$userdata;

        $data['about_image']=DB::table('about_image')->get();

        return view('admin.about_mission',$data);
    }

    public function add_about_mission_info(){

        return view('admin.add_about_mission_info');
    }

    public function store_add_about_mission_info(Request $request){

        $validated=$request->validate([

            'title'=>'required',
            'description'=>'required',
        ]);

        $title=$request->input('title');

        $description=$request->input('description');

        DB::table('about_mission')->insert(['title'=>$title,'description'=>$description]);

        return redirect('/admin/about_mission')->with('error','data submitted successfully!!');
    }

    public function update_about_mission_data($id){

        $userdata=DB::table('about_mission')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['title']=$userdata[0]->title;

        $data['description']=$userdata[0]->description;

        return view('admin.update_about_mission',$data);

    }

    public function store_update_about_mission_data(Request $request,$id){

        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        $title=$request->input('title');

        $description=$request->input('description');

        DB::table('about_mission')->where('id',$id)->update(['title'=>$title,'description'=>$description]);

        return redirect('/admin/about_mission')->with('error','data updated successfully!!');
    }

    public function delete_about_mission_data($id){

        $userdata=DB::table('about_mission')->where('id',$id)->delete();

        return redirect('/admin/about_mission')->with('error','data deleted successfully!!');
    }

    public function career_position(){

        $userdata=DB::table('career_position')->get();

        $data['userdata']=$userdata;

        return view('admin.career_position',$data);
    }

    public function add_career_position_info(){

        return view('admin.add_career_position_info');
    }

    public function store_add_career_position_info(Request $request){

        $validated=$request->validate([
            'question'=>'required',
            'answer'=>'required',
        ]);

        $question=$request->input('question');

        $answer=$request->input('answer');

        DB::table('career_position')->insert(['question'=>$question,'answer'=>$answer,]);

        return redirect('/admin/career_position')->with('error','data submitted successfully!!');
    }

    public function delete_career_position_data($id){

        DB::table('career_position')->where('id',$id)->delete();

        return redirect('/admin/career_position')->with('error','data deleted successfully!!');
    }

    public function update_career_position_data($id){

        $userdata=DB::table('career_position')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['question']=$userdata[0]->question;

        $data['answer']=$userdata[0]->answer;

        return view('admin.update_career_position',$data);
    }


    public function store_update_career_position_data(Request $request,$id){

        $validated=$request->validate([
            'question'=>'required',
            'answer'=>'required',
        ]);

        $question=$request->input('question');

        $answer=$request->input('answer');

        DB::table('career_position')->where('id',$id)->update(['question'=>$question,'answer'=>$answer,]);

        return redirect('/admin/career_position')->with('error','data updated successfully!!');
    }



    public function service_tab(){

        $userdata=DB::table('service_tab')->get();

        $data['userdata']=$userdata;

        return view('admin.service_tab',$data);
    }


    public function add_service_tab_info(){

        return view('admin.add_service_tab_info');
    }















    function generateRandomString($length = 4) {
           $characters = '0123456789';
           $charactersLength = strlen($characters);
           $randomString = '';
           for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
           }
         return $randomString;
      }
}
