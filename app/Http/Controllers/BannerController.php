<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Banner::all();
        return view('page', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        $data = new Banner();
        $data->title = $request->title;
        $data->link = $request->link;
        $data->status = 'on';
        if ($request->image == '') {
            $data->gambar = 'banner.jpg';
            $data->save();
            toast('Yay! bannermu sudah berhasil ditambah','success');
            return redirect()->back();
        } else {
            $img = $request->file('image');
            $img_file = time()."_".$img->getClientOriginalName();
            $dir_img = 'img/banner';
            $img->move($dir_img,$img_file);
            $data->gambar = $img_file;
            $data->save();
            toast('Yay! bannermu sudah berhasil ditambah','success');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('page', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $data = Banner::find($banner->id);
        $data->title = $request->title;
        $data->link = $request->link;
        $data->status = $request->status;
        if ($request->hasfile('image')) {
            if ($data->gambar != '' && $data->gambar != 'banner.jpg') {
                $img_prev = $request->img_prev;
                if (Storage::exists('img/banner'.$img_prev)) {
                    unlink('img/banner'.$img_prev);
                }
            }

            $img = $request->file('image');
            $img_file = time()."_".$img->getClientOriginalName();
            $dir_img = 'img/banner';
            $img->move($dir_img,$img_file);

            $data->gambar = $img_file;
            $data->save();
            toast('Yay! bannermu sudah berhasil diubah','success');
            return redirect()->back();

        }else{
            $data->save();
            toast('Yay! bannermu sudah berhasil diubah','success');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
