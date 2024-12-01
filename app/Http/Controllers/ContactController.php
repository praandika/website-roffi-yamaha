<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contact::all();
        $count = Contact::count();
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
        $data = new Contact;
        $data->phone = $request->phone;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->save();
        toast('Yay! kontakmu sudah berhasil ditambah','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('page', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $data = Contact::find($contact->id);
        $data->phone = $request->phone;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->update();
        toast('Yay! kontakmu sudah berhasil diubah','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        Contact::destroy($contact->id);
        toast('Hiks! kontakmu terhapus','success');
        return redirect()->back();
    }
}
