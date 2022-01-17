<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function index(){
        $lists = new Advertisement();
        $lists = Advertisement::all();

        return view('admin.ads-list')->with('lists',$lists);

    }

    public function ads_submit(Request $request){
        $ads = new Advertisement();
//        dd($request->all());
        $ads->title = $request->input('title');
        $ads->link = $request->input('link');
        $ads->images = $request->input('filepath');
        $ads->status = $request->input('status');
        $success = $ads->save();
        if ($success){
            return redirect()->route('ads_list')->with('status','Ads Created Succesfully');
        }else{
            return redirect()->route('ads_list')->with('error','Ads cant be created');
        }


    }

    public function edit_ads($id){
        $ads = new Advertisement();
        $ads = $ads->find($id);
        if ($ads){
            return view('admin.ads-add')->with('ads_detail',$ads);
        }else{
            return redirect()->route('ads_list')->with('error','Ads cannot be Found');

        }
    }

    public function update_ads(Request $request, $id){
        $ads = new Advertisement();
        $ads = $ads->find($id);
        if ($ads){
            $ads->title = $request->input('title');
            $ads->link = $request->input('link');
            $ads->images = $request->input('filepath');
            $ads->status = $request->input('status');
            $success = $ads->save();
            if ($success){
                return redirect()->route('ads_list')->with('status','Ads Updated Complete');
            }

        }else{
            return redirect()->route('ads_list')->with('error','Ads cannot be updated');

        }

    }

    public function destroy($id){
        $ads= new Advertisement();
        $ads = $ads->find($id);
            if ($ads){
                $ads->delete($id);
                return redirect()->route('ads_list')->with('status','Ads Deleted');

            }else{
                return redirect()->route('ads_list')->with('error','Ads cannot be Deleted');

            }
        }


}
