<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){

        return view('front-end.home.homepage');
    }


    public function team(){
        return view('front-end.team.index');
    }

    public function member_individual(){
        return view('front-end.team.each_member_info');
    }



    public function contact(){
        return view('front-end.contact.contact');
    }


    public function blog(){

         $blogs = DB::table('blogs')
                  ->get();

        return view('front-end.blog.index',compact('blogs'));
    }


    public function user_read_blog($blog_id){

         
         $blog = DB::table('blogs')
                  ->where('id',$blog_id)
                  ->first();

        // dd($blog);

        return view('front-end.blog.blog_description',compact('blog'));


    }


    public function term(){

        return view('front-end.terms_and_conditions.terms');

    }


      public function privacy(){

        return view('front-end.privacy_and_policies.privacy');

    }



}
