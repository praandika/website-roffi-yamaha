<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contact;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $contact = Contact::all();
        $banners = Banner::where('status','on')->get();
        return view('landing', compact('contact','banners'));
    }
}
