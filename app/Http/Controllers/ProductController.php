<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $products = new Product();
        $products = Product::all();


        return view('admin.product-list')->with('product_info', $products);
    }


    public function submit(Request $request){
//        dd($request->all());
        $product = new Product();
        $product->title = $request->input('title');
        $product->category = $request->input('category');
        $product->location = $request->input('location');
        $product->price = $request->input('price');
        $product->short_desc = $request->input('short-desc');
        $product->special_offer = $request->input('special_offer');
        $product->description = $request->input('description');
        $product->area = $request->input('area');
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
        $product->status = $request->input('status');
        $product->images = $request->input('filepath');
        $product->added_by = $request->user()->id;

        $success  = $product->save();
        if ($success){
            return redirect()->route('product-list')->with('status','Product Added');
        }



    }

    public function destroy($id){
        $product = new Product();
        $product = $product->find($id);
        if ($product){
            $product->delete($id);
            return redirect()->route('product-list')->with('status','Product Deleted Succesfully');
        }else{
            return redirect()->route('product-list')->with('error','Product cannot be deleted');
        }
    }

    public function pedit($id){
        $product = new Product();
        $product = $product->find($id);
        if ($product){

            return view('admin.product-add')->with('edit_data',$product);
        }else{
            return redirect()->route('product-list')->with('error','Product cannot be edited');
        }
}

public function Update(Request $request, $id){
//        dd($request);
    $product = new Product();
    $product = $product->find($id);
    if ($product){
        $product->title = $request->input('title');
        $product->category = $request->input('category');
        $product->location = $request->input('location');
        $product->price = $request->input('price');
        $product->short_desc = $request->input('short-desc');
        $product->special_offer = $request->input('special_offer');
        $product->description = $request->input('description');
        $product->area = $request->input('area');
        $product->area = $request->input('area');
        if ($request->input('features') == ''){
            $product->features = 'NULL';
        }else{
            $feature = implode(',',$request->input('features'));
            $product->features = $feature;

        }

        $product->email = $request->input('email');
        $product->contact_no = $request->input('contact_no');
        $product->status = $request->input('status');
        $product->images = $request->input('filepath');
        $product->added_by = $request->user()->id;

        $success  = $product->save();
        if ($success){
            return redirect()->route('product-list')->with('status','Product Added');
        }



    }else{
        return redirect()->route('product-list')->with('error','Product cannot be updated');
    }


}



}
