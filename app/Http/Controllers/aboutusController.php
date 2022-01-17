<?php

namespace App\Http\Controllers;

use App\aboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class aboutusController extends Controller
{
    public function index(){
        $about = new aboutus();
        $about = aboutus::all();
        return view('admin.about')->with('about',$about);
    }

    public function update(Request $request){
//        dd($request->all());
        $about = new aboutus();
        $about = $about->find(1);
        $about->title = $request->input('title');
        $about->content = $request->input('content');
        $about->added_by = Auth::user()->id;
//        dd($about);
        $success = $about->save();
        if ($success){
            return redirect()->route('about')->with('status','Pages Updated done refresh the page to see updates');
        }

    }
}
