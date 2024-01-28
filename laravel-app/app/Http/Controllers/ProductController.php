<?php
namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $list = Product::all();
        return view('product_list',compact('list'));
    }
    function create(){
        return view('add_product');
    }
    function save(Request $r) {
        $pro=new Product();
        $pro->name=$r->name;
        $pro->price=$r->price;
        $pro->qty=$r->qty;
        $pro->details=$r->details;
        $pro->save();
        return redirect()->route('pro_list');
    }
    function edit($id) {
        $dt=Product::find($id);
        return view('edit_product',compact('dt'));
    }
    function delete(Request $r,$id){
        // dd($r);
        Product::find($id)->delete();
        return redirect()->route('pro_list'); 
    }
    function update(Request $r,$id){
        // dd($r);
        Product::find($id)->update($r->all());
        return redirect()->route('pro_list');
    }
}
