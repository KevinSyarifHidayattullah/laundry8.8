<?php

namespace App\Http\Controllers;

use App\Models\paketCucian;
use App\Http\Requests\Storepaket_cucianRequest;
use App\Http\Requests\Updatepaket_cucianRequest;
use App\Models\outlet;
use App\Exports\PaketCucianExport;
use App\Imports\PaketCucianImport;
use Maatwebsite\Excel\Facades\Excel;

class PaketCucianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['paket_cucian'] = paketCucian::all();
        $outlet['outlet'] = outlet::all();
        return view('paket_cucian\index', $data, $outlet);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storepaket_cucianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepaket_cucianRequest $request)
    {
        $validated = $request->validate([
            'id_outlet' => 'required',
             'nama_paket' => 'required',
             'jenis' => 'required',
             'harga' => 'required'
        ]);

        $input = paketCucian::create($validated);

        if($input) return redirect(request()->segment(1).'/paket_cucian')->with('succes','Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paket_cucian  $paket_cucian
     * @return \Illuminate\Http\Response
     */
    public function show(paketCucian $paket_cucian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paket_cucian  $paket_cucian
     * @return \Illuminate\Http\Response
     */
    public function edit(paketCucian $paket_cucian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepaket_cucianRequest  $request
     * @param  \App\Models\paket_cucian  $paket_cucian
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepaket_cucianRequest $request, paketCucian $paket_cucian)
    {
        $ValidatedData = $request->validate([

            'id_outlet' => 'required',
            'nama_paket' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
        ]);


        paketCucian::where('id', $paket_cucian->id)
                ->update($ValidatedData);


                return redirect(request()->segment(1).'/paket_cucian')->with('success'.'Data Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paket_cucian  $paket_cucian
     * @return \Illuminate\Http\Response
     */
    public function destroy(paketCucian $paket_cucian)
    {
        PaketCucian::destroy($paket_cucian->id);
        return redirect(request()->segment(1).'/paket_cucian')->with('success'.'Data Has Been Deleted!');
    }

    public function exportData(){
        $date = date('Y-m-d');
        return Excel::download(new PaketCucianExport, $date. '_paketCucian.xlsx');
    }

    // public function importData(){
    //     Excel::import(new PaketCucianImport, request()->file('import'));

    //      return redirect(request()->segment(1).'/paket_cucian')->with('success', 'Import data berhasil');
    // }

    public function import(){
        request()->file('file')->move('temp', request()->file('file')->getClientOriginalName());
        Excel::import(new paketCucianImport, public_path('temp/' . request()->file('file')->getClientOriginalName()));

        return redirect()->back()->with('success', 'All good!');
    }
}
