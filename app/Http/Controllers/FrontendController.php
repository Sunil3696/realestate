<?php

namespace App\Http\Controllers;

use App\aboutus;
use App\Advertisement;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function index(){
      $datas = new Product();
      $ads= new Advertisement();
      $about = new aboutus();

      $ads = Advertisement::all()->random(1);
//      dd($ads);

      $rent_info = Product::where('category','House on Rent')
          ->orwhere('category','Land on Rent')->get()->where('status','active');
      $datas = Product::where('special_offer','YES')->get()->where('status','active');
        $sell_info = Product::where('category','House on Sell')
            ->orwhere('category','Land on Sell')->get()->where('status','active');
      return view('home.index')
          ->with('product_info',$datas)
          ->with('sell_info',$sell_info)
          ->with('ads_info',$ads)

          ->with('rent_info',$rent_info);

  }

  public function property_for_rent(){
      $rents = new Product();
      $rents = Product::
          Where('category','Land on Rent')
          ->orWhere('category','House on Rent')->get()->where('status','active');
//      dd($rents);
      return view('home.rent')->with('rents',$rents);
  }

  public function property_for_sell(){
      $sell = new Product();
      $sell = Product::
          Where('category','Land on Sell')
          ->orWhere('category','House on Sell')->get()->where('status','active');
//      dd($sell);
      return view('home.sell')->with('sell',$sell);
  }

  public function search(Request $request){
//      dd($request->all());
      $search_term  = $request->location;
      $min_amt = $request->min_amt;
      $max_amt = $request->max_amt;
//      dd($search_term);
    $search = new Product();
    $search = Product::
      Where('location', 'LIKE' ,"%{$search_term}%")
       ->whereBetween('price' , [$min_amt , $max_amt])
        ->get();
//        dd($search);
    return view('home.results')->with('search' , $search);

  }


  public function view_detail($id){
      $data = new Product();
      $data = $data->find($id);
      $populars = new Product();
      $populars = Product::where('special_offer','YES')->get()->random(3);
      if ($data){
          $similar = $data->category;
//          dd($similar);
          $similars = new Product();
          $similars = Product::Where('category',$similar)->get()->where('status','active');

            return view('home.view-detail')
                ->with('data', $data)
                ->with('similars',$similars)
                ->with('populars',$populars);
      }else{
          return view('home.index');
      }

  }

public function IndexAbout(){
      $contents = new aboutus();
      $contents = $contents->find(1);
//      dd($contents);
    if ($contents){
        return view('home.about-us')->with('about_info',$contents);
    }
}

public  function client_ads_submit(Request $request){

    $product = new Product();
    $product->title = $request->input('title');
    $product->category = $request->input('category');
    $product->location = $request->input('location');
    $product->price = $request->input('price');
    $product->short_desc = $request->input('short-desc');
    $product->special_offer = $request->input('special_offer');
    $product->description = $request->input('description');
    $product->area = $request->input('area');

    $product->maps = $request->input('maps');
    $product->video = $request->input('video');

    if ($request->input('features') == ''){
        $product->features = 'NULL';
    }else{
        $feature = implode(',',$request->input('features'));
        $product->features = $feature;

    }

    $product->email = $request->input('email');
    $product->contact_no = $request->input('contact_no');
    $sts = 'inactive';
    $product->status = $sts;
    $product->images = $request->input('filepath');
    $product->added_by = $request->user()->id;
    $product->save();

    if ($product){
        return view('home.req_status');
    }else{
        return redirect()->route('/vendor')->with('error','Your Request cannot process right now please try again later');
    }


}


}
