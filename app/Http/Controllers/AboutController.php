<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::all();
        $count = About::count();
        return view('page', compact('data','count'));
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

        $data = new About();
        $data->kontak = $request->kontak;
        $data->tentang = $request->tentang;
        if ($request->image == '') {
            $data->gambar = 'noimage.jpg';
            $data->save();
            toast('Yay! ceritamu sudah berhasil ditambah','success');
            return redirect()->back();
        } else {
            $img = $request->file('image');
            $img_file = time()."_".$img->getClientOriginalName();
            $dir_img = 'img/about';
            $img->move($dir_img,$img_file);
            $data->gambar = $img_file;
            $data->save();
            toast('Yay! ceritamu sudah berhasil ditambah','success');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('page', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $data = About::find($about->id);
        $data->kontak = $request->kontak;
        $data->tentang = $request->tentang;
        if ($request->hasfile('image')) {
            if ($data->gambar != '' && $data->gambar != 'banner.jpg') {
                $img_prev = $request->img_prev;
                if (Storage::exists('img/about'.$img_prev)) {
                    unlink('img/about'.$img_prev);
                }
            }

            $img = $request->file('image');
            $img_file = time()."_".$img->getClientOriginalName();
            $dir_img = 'img/about';
            $img->move($dir_img,$img_file);

            $data->gambar = $img_file;
            $data->save();
            toast('Yay! ceritamu sudah berhasil diubah','success');
            return redirect()->back();

        }else{
            $data->save();
            toast('Yay! ceritamu sudah berhasil diubah','success');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
