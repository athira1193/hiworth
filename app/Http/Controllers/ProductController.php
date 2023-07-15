<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Variant;
use Validator;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::latest()->with('variant')->get();

        return view('product_list',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('product_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  $request->all();
        $product = new Product();
        $product->name = $data["product_name"];
        $product->description = $data["product_description"];
        $product->save();
        $productID = $product->id;
        foreach ($data["size"] as $key => $size) {
            $variant = new Variant();
            $variant->product_id = $productID;
            $variant->size = $size;
            $variant->color = $data["color"][$key];
            $variant->price = $data["price"][$key];
            $variant->quantity = $data["quantity"][$key];
            $variant->save();
        }
        return response()->json(['success'=>'done']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
