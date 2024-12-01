<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Spesification;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $contact = Contact::all();
        $banners = Banner::where('status','on')->get();
        $product = Product::where('status','show')
        ->groupBy('model_name')
        ->get();
        return view('website.pages.home', compact('contact','banners','product'));
    }

    public function product(){
        $contact = Contact::all();
        $product = Product::where('status','show')
        ->get();
        return view('website.pages.product', compact('contact','product')); 
    }

    public function about(){
        $contact = Contact::all();
        $product = Product::where('status','show')
        ->get();
        return view('website.pages.about', compact('contact','product')); 
    }

    public function category($param){
        $contact = Contact::all();
        $product = Product::where('status','show')
        ->where('kategori', $param)
        ->get();
        $param = strtoupper($param);
        return view('website.pages.category', compact('contact','product','param')); 
    }

    public function contact(){
        $contact = Contact::all();
        $product = Product::where('status','show')
        ->get();
        $about = About::all();
        return view('website.pages.contact', compact('contact','product','about')); 
    }

    public function detail($param){
        $param = str_replace('_', ' ', $param);
        $contact = Contact::all();
        $product = Product::where('status','show')
        ->where('model_name',$param)
        ->get();

        $mesin = Spesification::where('model_name',$param)->pluck('mesin');
        if (count($mesin) > 0) {
            $mesin = json_decode($mesin[0], true);
        }

        $rangka = Spesification::where('model_name',$param)->pluck('rangka');
        if (count($rangka) > 0) {
            $rangka = json_decode($rangka[0], true);
        }

        $dimensi = Spesification::where('model_name',$param)->pluck('dimensi');
        if (count($dimensi) > 0) {
            $dimensi = json_decode($dimensi[0], true);
        }

        $kelistrikan = Spesification::where('model_name',$param)->pluck('kelistrikan');
        if (count($kelistrikan) > 0) {
            $kelistrikan = json_decode($kelistrikan[0], true);
        }
        
        return view('website.pages.detail', compact('contact','product','param','mesin','rangka','dimensi','kelistrikan'));
    }

    public function search(Request $request){
        $contact = Contact::all();
        $product = Product::where('status','show')
        ->where('model_name', 'like', '%'.$request->model_name.'%')
        ->get();
        $param = $request->model_name;
        return view('website.pages.search', compact('contact','product','param')); 
    }
}
