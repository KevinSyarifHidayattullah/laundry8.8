<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Paket;
use App\Http\Requests\StorepaketRequest;
use App\Http\Requests\Updatepaket_cucianRequest;
use Illuminate\Http\Request;    

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['outlet'] = Outlet::all();
        $data['paket'] = Paket::all();
        return view('paket/index', ['paket'=>Paket::all()]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepaketRequest $request)
    {
        $validated = $request->validate([
            'id_outlet' => 'required',
            'jenis' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required',
        ]);

        $input = Paket::create($validated);

        if($input) return redirect('paket')->with('success', 'Data berhasil diiinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , Paket $paket ,$id) 
    {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tlp' => 'required',
        ]);
        // dd($validated);

        $update =$paket->find($id)->update($request->all());

        // $input = Member::where('id', $paket->id)
        //         ->update($validated);

        if($update) return redirect('paket')->with('success', 'Data berhasil DI Upadate');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = paket::find($id);
        $model->id_outlet = $request->id_outlet;
        $model->jenis = $request->jenis;
        $model->nama_paket = $request->nama_paket;
        $model->harga = $request->harga;
        $model->save();

        return redirect('paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paket::find($id)->delete();

        return redirect('paket')->with('success', 'paket deleted');
    }
}
