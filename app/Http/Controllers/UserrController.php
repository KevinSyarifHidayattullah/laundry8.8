<?php

namespace App\Http\Controllers;

use App\Models\Userr;
use Illuminate\Http\Request;

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
        return view('userr/index', ['userr'=>Userr::all()]);
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'id_outlet' => 'required',
            'role' => 'required',
        ]);

        $input = Userr::create($validated);

        if($input) return redirect('userr')->with('success', 'Data berhasil diiinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userr  $Userr
     * @return \Illuminate\Http\Response
     */
    public function show(Userr $Userr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userr  $Userr
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , Userr $userr ,$id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'id_outlet' => 'required',
            'role' => 'required',
        ]);
        // dd($validated);

        $update =$userr->find($id)->update($request->all());

        // $input = Member::where('id', $Userr->id)
        //         ->update($validated);

        if($update) return redirect('userr')->with('success', 'Data berhasil DI Upadate');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userr  $Userr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Userr::find($id);
        $model->nama = $request->nama;
        $model->username = $request->username;
        $model->password = $request->password;
        $model->id_outlet = $request->id_outlet;
        $model->role = $request->role;
        $model->save();

        return redirect('userr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Userr::find($id)->delete();

        return redirect('userr')->with('success', 'Userr deleted');
    }
}
