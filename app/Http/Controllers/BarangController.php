<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barang'] = Barang::All();
        return view('barang/index' , $data);
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
     * @param  \App\Http\Requests\StoreoutletRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBarangRequest $request)
    {

        //validasi
         $validated = $request->validate([
             
            'nama_barang' => 'required',
             'merk_barang' => 'required',
             'qty' => 'required',
             'kondisi' => 'required',
             'tanggal_pengadaan' => 'required'
         ]);


         $input = Barang::create($validated);

         if($input) return redirect('barang')->with('success', 'Data berhasil diiinput');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarangRequest  $request
     * @param  \App\Models\Barang  $Barang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBarangRequest $request, barang $barang)
    {
        $validatedData = $request->validate([

            'nama_barang' => 'required',
            'merk_barang' => 'required',
            'qty' => 'required',
            'kondisi' => 'required',
            'tanggal_pengadaan' => 'required'

        ]);

        Barang::where('id', $barang->id)
            ->update($validatedData);

            return redirect('barang')->with('succes'.'Data Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $Barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        Barang::destroy($barang->id);
        $barang->delete();
       return redirect('barang')->with('succes'.'Data Has Been Deleted!');
    }
}
