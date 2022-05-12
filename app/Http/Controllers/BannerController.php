<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Banner;
use Auth;
use Carbon\Carbon;
use Image;

class BannerController extends Controller
{


    public function index(){

        $banners = Banner::all();
        return view('Admin.banner.manage-banner',[
            'banners' => $banners,
        ]);
    }
    public function create()
    {
        return view('Admin.banner.add_banner');
    }

    public function store(Request $request)
    {
        $request->validate([
            'banner_image'=>'required',
        ]);

        if($request->hasFile('banner_image')){
            $banner_image_name = $request->file('banner_image');
            $banner_image_extension = $banner_image_name->getClientOriginalExtension();

            $banner_name = time().'.'.$banner_image_extension;
            $imageUrl = 'uploads/banner/';

            Image::make($banner_image_name )->save($imageUrl.$banner_name);

            Banner::insert([
                'banner_image'=>$banner_name,
                'added_by'    =>auth::user()->id,
                'created_at'  =>Carbon::now(),
            ]);





        }


        return redirect('banner/view-banner')->with('success', 'Banner Insert Succcesfuly');
    }


    public function edit($id){
            

        $banners = Banner::find($id);
        return view('Admin.banner.edit',[
            'banners' =>$banners,
        ]);
    }

    public function update(Request $request)
    {
        if($request->hasFile('banner_image')){

        //    return Banner::find($request->banner_id);

           return public_path().'uploads/banner/'.Banner::find($request->banner_id) == 'banner_image';

        //    public_path()."/uploads/".$from_db->image_name;
        }
    }
}
