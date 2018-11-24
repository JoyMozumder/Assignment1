<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\post;

class HomeController extends Controller
{
    public function home()
    {
    	return view('frontend.pages.home');
    }
    public function about()
    {
    	return view('frontend.pages.about');
    }
    public function service()
    {
    	return view('frontend.pages.service');
    }


    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }
     public function addpost()
    {
        return view('backend.pages.addpost');
    }
    public function store(Request $req)
    {
        $obj = new post();
        $obj->tittle = $req->tittle;
        $obj->description = $req->description;
        if($obj->save())
        {
            return redirect('allpost');
        }
    }
    public function allpost()
    {
        $obj = post::all();
        return view('backend.pages.allpost', ['data'=>$obj]);
    }
}
