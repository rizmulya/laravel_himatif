<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penguruss = Pengurus::latest()->paginate(20);
        return view('pengurus.index',compact('penguruss'))->with('i', (request()->input('page',1)-1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('akun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pengurus' => 'required',
            'jabatan' => 'required',
            'katakata' => 'required',
        ]);
        Pengurus::create($request->all());
        return redirect()->route('pengurus.index')->with('success','Berhasil Menambahkan Aspirasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengurus $pengurus)
    {
        $penguruss = Pengurus::latest()->paginate(20);
        return view('pengurus.edit',compact('penguruss','pengurus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pengurus $pengurus)
    {
        $request->validate([
            'nama_pengurus' => 'required',
            'jabatan' => 'required',
            'katakata' => 'required',
        ]);

        $pengurus->update($request->all());
        return redirect()->route('pengurus.index')
                        ->with('success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengurus $pengurus)
    {
        $pengurus->delete();
        return redirect()->route('pengurus.index')
                        ->with('success','Data berhasil dihapus');
    }
}
