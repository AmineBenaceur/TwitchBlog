<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index(){
        $title = 'Welcome to laravel :D !!!';
        //one way to pass in variables
          // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        //return view('pages.services');
        $data = array(
            'title' => 'services',
            'services' => ['Web Design', 'programing', 'Being a stud =D', 'Make good sex (  .  )(  .  )  ~~~~  <=======3 '] 
        );
        return view('pages.services')->with($data);
    }


}
