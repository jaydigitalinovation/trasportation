<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use DB;


class AboutusController extends Controller
{
    public function add_about_image_info($id){

        $about_image=DB::table('about_image')->where('id',$id)->get();

        $data['image']=$about_image[0]->image;
        $data['id']=$about_image[0]->id;

        return view('admin.add_about_image_info',$data);
    }

    public function store_add_about_image_info(Request $request,$id){

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

            DB::table('about_image')->where('id',$id)->update(['image'=>$imagename]);
        }


        return redirect('/admin/about_mission')->with('error','data updated successfully');
    }





    public function about_choose(){

        $about_choose=DB::table('about_choose')->get();

        $data['about_choose']=$about_choose;

        return view('admin.about_choose',$data);
    }

    public function add_about_choose_data($id){

        if($id==0){

            

                $data['image']='';
                $data['title']='';
                $data['description']='';
                $data['id']=0;

              }else{

                $about_choose=DB::table('about_choose')->where('id',$id)->get();

                $data['image']=$about_choose[0]->image;
                $data['title']=$about_choose[0]->title;

                $data['description']=$about_choose[0]->description;

                $data['id']=$about_choose[0]->id;

              } 

           return view('admin.add_about_choose_data',$data);
    }

    public function store_add_about_choose_data(Request $request,$id){


        if($id==0){

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $file=$request->file('image');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('about_choose')->insert(['image'=>$imagename,'title'=>$title,'description'=>$description,]);

            return redirect('/admin/about_choose')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

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

                DB::table('about_choose')->where('id',$id)->update(['image'=>$imagename,]);
            }

            DB::table('about_choose')->where('id',$id)->update(['title'=>$title,'description'=>$description]);

            return redirect('/admin/about_choose')->with('error','data updated successfully!!!');
        }
    }





    public function about_faq(){

        $about_faq=DB::table('about_faq')->get();

        $data['about_faq']=$about_faq;

        $about_faq_des=DB::table('about_faq_des')->get();

        $data['about_faq_des']=$about_faq_des;

        return view('admin.about_faq',$data);
    }




    public function add_about_faq_des_data($id){

        if($id==0){
            $data['title']='';
                $data['description']='';
                $data['id']=0;

              }else{

                $about_faq_des=DB::table('about_faq_des')->where('id',$id)->get();
                $data['title']=$about_faq_des[0]->title;

                $data['description']=$about_faq_des[0]->description;

                $data['id']=$about_faq_des[0]->id;

              } 

           return view('admin.add_about_faq_des_data',$data);
    }

    public function store_add_about_faq_des_data(Request $request,$id){


        if($id==0){

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('about_faq_des')->insert(['title'=>$title,'description'=>$description,]);

            return redirect('/admin/about_faq_des')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('about_faq_des')->where('id',$id)->update(['title'=>$title,'description'=>$description]);

            return redirect('/admin/about_faq')->with('error','data updated successfully!!!');
        }
    }





    public function add_about_faq_data($id){

        if($id==0){
                $data['question']='';
                $data['answer']='';
                $data['id']=0;

              }else{

                $about_faq=DB::table('about_faq')->where('id',$id)->get();
                $data['question']=$about_faq[0]->question;

                $data['answer']=$about_faq[0]->answer;

                $data['id']=$about_faq[0]->id;

              } 

           return view('admin.add_about_faq_data',$data);
    }

    public function store_add_about_faq_data(Request $request,$id){


        if($id==0){

            $validated=$request->validate([
                'question'=>'required',
                'answer'=>'required',
            ]);

            $question=$request->input('question');

            $answer=$request->input('answer');

            DB::table('about_faq')->insert(['question'=>$question,'answer'=>$answer,]);

            return redirect('/admin/about_faq')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'question'=>'required',
                'answer'=>'required',
            ]);

            $question=$request->input('question');

            $answer=$request->input('answer');

            DB::table('about_faq')->where('id',$id)->update(['question'=>$question,'answer'=>$answer]);

            return redirect('/admin/about_faq')->with('error','data updated successfully!!!');
        }
    }
}
