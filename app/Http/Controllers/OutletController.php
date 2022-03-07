<?php

namespace App\Http\Controllers;

use App\Models\outlet;
use App\Imports\OutletImport;
use App\Exports\OutletExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreoutletRequest;
use App\Http\Requests\UpdateoutletRequest;
use App\Http\Controllers\Controller;

// use Maatwebsite\Excel\Facades\Excel;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['outlet'] = Outlet::All();
        return view('outlet/index' , $data);
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
    public function store(StoreoutletRequest $request)
    {

        //validasi
         $validated = $request->validate([
             
            'nama' => 'required',
             'alamat' => 'required',
             'tlp' => 'required'
         ]);


         $input = Outlet::create($validated);

         if($input) return redirect(request()->segment(1).'/outlet')->with('success', 'Data berhasil diiinput');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(outlet $outlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(outlet $outlet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateoutletRequest  $request
     * @param  \App\Models\outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateoutletRequest $request, outlet $outlet)
    {
        $validatedData = $request->validate([

            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',

        ]);

        Outlet::where('id', $outlet->id)
            ->update($validatedData);

            return redirect(request()->segment(1).'/outlet')->with('success','Data Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(outlet $outlet)
    {
        outlet::destroy($outlet->id);
        $outlet->delete();
       return redirect(request()->segment(1).'/outlet')->with('success','Data Berhasil Di Hapus!');
    }

    public function importData(){
        Excel::import(new OutletImport, request()->file('import'));
        
        return redirect(request()->segment(1).'/outlet')->with('success', 'All good!');
    }

    public function exportData() 
    {
        $date = date('Y-m-d');
        return Excel::download(new OutletExport, $date. '_outlet.xlsx');
    }
}
