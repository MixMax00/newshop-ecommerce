<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Str;
use Carbon\Carbon;
use Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('Admin.brand.showBrand', ['brands' =>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.brand.addBrand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'brand_name'=>'required|regex:/^[\pL\s\-]+$/u|min:5|max:10',
          'brand_description'=>'required',
          'publication_status'=>'required'
        ]);
        $brand_name = Str::upper($request->brand_name);
        $brand_description = $request->brand_description;
        $publication_status = $request->publication_status;

        Brand::insert([
          'brand_name' => $brand_name,
          'brand_description' =>$brand_description,
          'publication_status' => $publication_status,
          'Added_by' =>auth::user()->id,
          'created_at' =>Carbon::now(),
        ]);
        return back()->with('msgDone','Brand Insert Successfuly!!!');
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
