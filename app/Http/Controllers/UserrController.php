<?php

namespace App\Http\Controllers;

use App\Models\Userr;
use App\Http\Requests\StoreUserrRequest;
use App\Http\Requests\UpdateUserrRequest;
use App\Models\outlet;
use App\Imports\UserrImport;
use App\Export\UserrExport;
use Maatwebsite\Excel\Facades\Excel;

class UserrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['userr'] = Userr::all();
        $data['outlets'] = outlet::all();
        return view('userr/index', $data);
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
     * @param  \App\Http\Requests\StoreUserrRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserrRequest $request)
    {
        $validated = $request->validate([
             'name' => 'required',
             'email' => 'required',
             'password' => 'required',
             'id_outlet' => 'required',
             'role' => 'required'
         ]);

        $input = Userr::create($validated);
        if($input)return redirect(request()->segment(1).'/userr')->with('success','Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userr  $Userr
     * @return \Illuminate\Http\Response
     */
    public function show(Userr $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userr  $Userr
     * @return \Illuminate\Http\Response
     */
    public function edit(Userr $User)
    
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserrRequest  $request
     * @param  \App\Models\Userr  $Userr
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserrRequest $request, Userr $userr)
    {
        $ValidatedData = $request->validate([

            'name' => 'required',
            'email' => 'required',
            'id_outlet' => 'required',
            'role' => 'required'
        ]);


        Userr::where('id', $userr->id)
                ->update($ValidatedData);


        return redirect(request()->segment(1).'/userr')->with('succes'.'Data Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userr  $Userr
     * @return \Illuminate\Http\Response
     */
    public function destroy(userr $userr)
    {
        Userr::destroy($userr->id);
        return redirect(request()->segment(1).'/userr')->with('success'.'Data Has Been Deleted!');
    }

    public function exportData() 
    {
        $date = date('Y-m-d');
        return Excel::download(new UserrExport, $date. '_user.xlsx');
    }
}
