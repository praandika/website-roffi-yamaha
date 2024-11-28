<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
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

        $data = new Product;
        $data->model_name = $request->model_name;
        $data->kategori = $request->kategori;
        $data->warna = $request->warna;
        $data->harga = $request->harga;
        $data->status = 'show';
        if ($request->image == '') {
            $data->gambar = 'noimage.jpg';
            $data->save();
            toast('Yay! product mu sudah berhasil ditambah','success');
            return redirect()->back();
        } else {
            $img = $request->file('image');
            $img_file = time()."_".$img->getClientOriginalName();
            $dir_img = 'img';
            $img->move($dir_img,$img_file);
            $data->gambar = $img_file;
            $data->save();
            toast('Yay! product mu sudah berhasil ditambah','success');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('page', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = Product::find($product->id);
        $data->model_name = $request->model_name;
        $data->kategori = $request->kategori;
        $data->warna = $request->warna;
        $data->harga = $request->harga;
        $data->status = 'show';
        if ($request->hasfile('image')) {
            if ($data->gambar != '' && $data->gambar != 'noimage.jpg') {
                $img_prev = $request->img_prev;
                if (Storage::exists('img'.$img_prev)) {
                    unlink('img'.$img_prev);
                }
            }

            $img = $request->file('image');
            $img_file = time()."_".$img->getClientOriginalName();
            $dir_img = 'img';
            $img->move($dir_img,$img_file);

            $data->gambar = $img_file;
            $data->save();
            toast('Yay! product mu sudah berhasil diubah','success');
            return redirect()->back();

        }else{
            $data->save();
            toast('Yay! product mu sudah berhasil diubah','success');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
