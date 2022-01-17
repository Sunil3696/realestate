<?php

namespace App\Http\Controllers;

use App\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback_submit(Request $request){
//         dd($request->all());
        $feeds = new feedback();
        $feeds->name = $request->input('name');
        $feeds->email = $request->input('email');
        $feeds->subject = $request->input('subject');
        $feeds->message = $request->input('messages');
        $success = $feeds->save();
        if ($success){
            return redirect('/')->with('status','Thank you For your Feedback.');
        }

    }

    public function index(){
        $feeds = new feedback();
        $feeds= feedback::all();
        return view('admin.feedbacks')->with('feeds',$feeds);
    }

    public function destroy_feeds($id){
        $feeds = new feedback();
        $feeds = $feeds->find($id);
        if ($feeds){
            $feeds->delete($id);
            return redirect()->route('Feed_back')->with('status','FeedBack Deleted Succesfully');
        }else{
            return redirect()->route('Feed_back')->with('error','error occure oon deletion');
        }
    }
}
