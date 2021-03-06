<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;
use App\Product;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductsController extends Controller
{
    public function Index(){
        //DB::table('products')->get();
        $product = Auth::user()->products;
        return view('products.index',compact('product'));
    }

    public function borrowItemList($id){
        $products = DB::table('products')->where('class_id','=',$id)->get();
        return view('frontend.borrowItemList',compact('products'));
    }


    public function Create(){

        $userId = auth()->user()->id;
        $selectedClass = Classes::with('classes')->where('user_id', $userId)->pluck('className', 'id');
        //dd($selectedClass);

        return view('products.create')->with([
            'classNames' => $selectedClass
        ]);
    }

    public function Store(Request $request){

        $data = array();
        $data['pro_name'] = $request->input('pro_name');
        $data['pro_code'] = $request->input('pro_code');
        $data['pro_price'] = $request->input('pro_price');
        $data['stock'] = $request->input('stock');
        $data['color'] = $request->input('color');
        $data['size_type'] = $request->input('size_type');
        $data['class_id'] = $request->input('class_id');
        $data['pro_info'] = $request->input('pro_info');
        $data['user_id'] = $request->input('user_id');

        $selectedClass = $request->input('class_id');
        //dd($selectedClass);


        $image = $request->file('image');
        if ($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $data['image'] = $image_url;
            $product = DB::table('products')->insert($data);
            return redirect()->route('products.index')
                ->with('success', 'Item Created Successfully');
        }
    }

    public function Edit($id){

        $classCategories = DB::table('classes')->where('user_id', auth()->user()->id)->pluck('className', 'id');

        $product = DB::table('products')
            ->join('classes', 'classes.id', '=', 'products.class_id')
            ->where('products.id',$id)->first();
        return view('products.edit',compact(['product', 'classCategories']));
    }


    public function Update(Request $request , $id){

        $rule = [
            'pro_name' => ['sometimes'] ,
            'pro_code' => ['sometimes', 'min:5', 'string', Rule::unique('products')->ignore($id)],
            'pro_price' => ['sometimes'],
            'stock' => ['sometimes'],
            'color' => ['sometimes'],
            'size_type' => ['sometimes'],
            'class_id' => ['sometimes'],
            'pro_info' => ['sometimes'],
            'image' => ['sometimes','image', 'mimes:jpg,png,jpeg,gif', 'max:2048']
        ];

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        //getting input from inputting form

        $pro_name = $request->input('pro_name');
        $pro_code = $request->input('pro_code');
        $pro_price = $request->input('pro_price');
        $stock = $request->input('stock');
        $color = $request->input('color');
        $size_type = $request->input('size_type');
        $class_id = $request->input('class_id');
        $pro_info = $request->input('pro_info');
        $old_image = $request->old_image;
        $updated_at = new DateTime;

        //Use Eloquent to grab the product record that we want to update,
        $product = Product::find($id);
        $image = $request->file('image');

        if ($image) {
            unlink($old_image);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $image = $image_url;
        }

        $product->pro_name = $pro_name ?: $product->pro_name;
        $product->pro_code = $pro_code ?: $product->pro_code;
        $product->pro_price = $pro_price ?: $product->pro_pice;
        $product->stock = $stock ?: $product->stock;
        $product->color = $color ?: $product->color;
        $product->size_type = $size_type ?: $product->size_type;
        $product->class_id = $class_id ?: $product->department_id;
        $product->pro_info = $pro_info ?: $product->pro_info;
        $product->image = $image ?: $product->image;
        $product->updated_at = $updated_at ?: $product->updated_at;


        $product->save();   //save into database
        return redirect()->route('products.index')->with('success', 'Item has been successfully updated');
    }


    public function Delete($id) {
        $data = DB::table('products')->where('id',$id)->first();
        $image = $data->image;
        unlink($image);
        $product = DB::table('products')->where('id',$id)->delete();
        return redirect()->route('products.index')
            ->with('success', 'Item has been successfully deleted!');
    }

    public function Show(Request $request, $id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('products.show',compact('product'));
    }
    public function ShowForUser(Request $request, $id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('frontend.borrowItemDetail',compact('product'));
    }

}
