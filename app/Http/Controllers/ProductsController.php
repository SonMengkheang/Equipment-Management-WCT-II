<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Product;
use DB;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductsController extends Controller
{
    public function Index(){
        $product = DB::table('products')->get();
        return view('products.index',compact('product'));
    }


    public function Create(){
        return view('products.create');
    }

    public function Store(Request $request){

        $data = array();
        $data['pro_name'] = $request->input('pro_name');
        $data['pro_code'] = $request->input('pro_code');
        $data['pro_price'] = $request->input('pro_price');
        $data['stock'] = $request->input('stock');
        $data['color'] = $request->input('color');
        $data['size_type'] = $request->input('size_type');
        $data['department_id'] = $request->input('department_id');
        $data['pro_info'] = $request->input('pro_info');

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
        $product = DB::table('products')->where('id',$id)->first();
        return view('products.edit',compact('product'));
    }


    public function Update(Request $request , $id){

        $rule = [
            'pro_name' => ['sometimes'] ,
            'pro_code' => ['sometimes', 'min:5', 'string', Rule::unique('products')->ignore($id)],
            'pro_price' => ['sometimes'],
            'stock' => ['sometimes'],
            'color' => ['sometimes'],
            'size_type' => ['sometimes'],
            'department_id' => ['sometimes'],
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
        $department_id = $request->input('department_id');
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
        $product->department_id = $department_id ?: $product->department_id;
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

}
