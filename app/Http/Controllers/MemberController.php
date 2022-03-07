<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Export\MemberExport;
use Maatwebsite\Excel\Facades\Excel;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['member'] = Member::all();
        return view('member/index', [
            'member' => Member::all()
        ]);
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
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tlp' => 'required',
        ]);

        $input = Member::create($validated);

        if($input) return redirect(request()->segment(1).'/member')->with('success', 'Data berhasil diiinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @param  \Illuminate\Http\Request;
     * @return \Illuminate\Http\Response
     */
    // public function edit(Request $request , Member $member ,$id)
    // {
    //     $validated = $request->validate([
    //         'nama' => 'required',
    //         'alamat' => 'required',
    //         'jenis_kelamin' => 'required',
    //         'tlp' => 'required',
    //     ]);

    //     $update =$member->find($id)->update($request->all());

    //     return redirect(request()->segment(1).'/member')->with('succes'.'Data Has Been Updated!');
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = member::find($id);
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->tlp = $request->tlp;
        $model->save();

        return redirect(request()->segment(1).'/member')->with('success', 'Data berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        member::find($id)->delete();

        return redirect(request()->segment(1).'/member')->with('success', 'Member deleted');
    }

    public function exportData() 
    {
        $date = date('Y-m-d');
        return Excel::download(new MemberExport, $date. 'member.xlsx');
    }
}
