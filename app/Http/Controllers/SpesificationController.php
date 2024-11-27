<?php

namespace App\Http\Controllers;

use App\Models\Spesification;
use Illuminate\Http\Request;

class SpesificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Spesification $spesification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spesification $spesification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spesification $spesification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spesification $spesification)
    {
        //
    }
}
