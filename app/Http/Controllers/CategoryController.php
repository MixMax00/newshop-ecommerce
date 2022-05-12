<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Category;
use Str;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $categories = Category::all();
          return view('Admin.Category.manageCategory',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.Category.addCategory');
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
        'category_name'=> 'required',
        'category_description'=> 'required',
      ]);
      $category_name = Str::upper($request->category_name);
      $category_description = $request->category_description;
      $publication_status = $request->publication_status;

      Category::insert([
          'category_name'        => $category_name,
          'category_description' =>$category_description,
          'publication_status'   => $publication_status,
          'added_by'             => auth::user()->id,
          'created_at'           => Carbon::now(),
      ]);

      return back()->with('errDone','Category Add Successfuly!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function showUnpublished($id)
    {
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();

        return back()->with('errUnPbStPub','Unpublished Successfuly!!!');
    }
    public function showPublished($id)
    {
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();

        return back()->with('errPbStPub','Published Successfuly!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = Category::find($id);
        return view('Admin.Category.editCategory' ,['category'=>$category]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $category = Category::find($request->category_id);

      $category->category_name = $request->category_name;
      $category->category_description = $request->category_description;
      $category->publication_status = $request->publication_status;
      $category->added_by = auth::user()->id;
      $category->updated_at = Carbon::now();
      $category->save();

      return redirect('/category/manageCategory')->with('errUpdate','Category Update Successfuly!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/category/manageCategory')->with('errDelete','Category Delete Successfuly!!!');





    }
}
