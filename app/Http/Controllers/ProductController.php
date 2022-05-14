<?php

namespace App\Http\Controllers;

use App\Models\MeatPackage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MeatPackage::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new MeatPackage;
        $product->title = $request->title;
        $product->slug = $request->slug;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->about = $request->about;
        $product->save();

        return response()->json([
            'title' => $product->title,
            'slug' => $product->slug,
            'type' => $product->type,
            'price' => $product->price,
            'about' => $product->about,
            'result' => 'create data successfully'
        ]);
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
        $title = $request->title;
        $slug = $request->slug;
        $type = $request->type;
        $price = $request->price;
        $about = $request->about;

        $product = MeatPackage::find($id);
        $product->title = $title;
        $product->slug = $slug;
        $product->type = $type;
        $product->price = $price;
        $product->about = $about;
        $product->save();

        return response()->json([
            'title' => $product->title,
            'slug' => $product->slug,
            'type' => $product->type,
            'price' => $product->price,
            'about' => $product->about,
            'result' => 'data successfully updated!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = MeatPackage::Find($id);
        $product->delete();

        return 'data successfully deleted!';
    }
}
