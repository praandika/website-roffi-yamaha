<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Spesification;
use Auth;
use Illuminate\Http\Request;

class SpesificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Spesification::all();
        return view('page', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::all();
        return view('page', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataMesin = [];
        for ($i=0; $i < count($request->mesin_title); $i++) { 
            $newDataMesin = [$request->mesin_title[$i] => $request->mesin_spec[$i]];
            $dataMesin += $newDataMesin;
        }

        $dataRangka = [];
        for ($i=0; $i < count($request->rangka_title); $i++) { 
            $newDataRangka = [$request->rangka_title[$i] => $request->rangka_spec[$i]];
            $dataRangka += $newDataRangka;
        }

        $dataDimensi = [];
        for ($i=0; $i < count($request->dimensi_title); $i++) { 
            $newDataDimensi = [$request->dimensi_title[$i] => $request->dimensi_spec[$i]];
            $dataDimensi += $newDataDimensi;
        }

        $dataKelistrikan = [];
        for ($i=0; $i < count($request->kelistrikan_title); $i++) { 
            $newDataKelistrikan = [$request->kelistrikan_title[$i] => $request->kelistrikan_spec[$i]];
            $dataKelistrikan += $newDataKelistrikan;
        }

        Spesification::insert([
            'model_name' => $request->model_name,
            'mesin' => json_encode($dataMesin),
            'rangka' => json_encode($dataRangka),
            'dimensi' => json_encode($dataDimensi),
            'kelistrikan' => json_encode($dataKelistrikan)
        ]);

        toast('Yay! spesifikasi produknya sudah berhasil ditambah','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Spesification $spesification)
    {
        $mesin = Spesification::where('model_name',str_replace('_', ' ', $spesification->model_name))->pluck('mesin');
        if (count($mesin) > 0) {
            $mesin = json_decode($mesin[0], true);
        }

        $rangka = Spesification::where('model_name',str_replace('_', ' ', $spesification->model_name))->pluck('rangka');
        if (count($rangka) > 0) {
            $rangka = json_decode($rangka[0], true);
        }

        $dimensi = Spesification::where('model_name',str_replace('_', ' ', $spesification->model_name))->pluck('dimensi');
        if (count($dimensi) > 0) {
            $dimensi = json_decode($dimensi[0], true);
        }

        $kelistrikan = Spesification::where('model_name',str_replace('_', ' ', $spesification->model_name))->pluck('kelistrikan');
        if (count($kelistrikan) > 0) {
            $kelistrikan = json_decode($kelistrikan[0], true);
        }
        return view('page', compact('specification','mesin','rangka','dimensi','kelistrikan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spesification $spesification)
    {
        return view('page', compact('spesification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spesification $spesification)
    {
        $data = Spesification::find($spesification->id);
        $data->mesin = $request->mesin;
        $data->rangka = $request->rangka;
        $data->dimensi = $request->dimensi;
        $data->kelistrikan = $request->kelistrikan;
        $data->update();
        toast('Yay! spesifikasi produknya sudah berhasil diubah','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spesification $spesification)
    {
        //
    }
}
