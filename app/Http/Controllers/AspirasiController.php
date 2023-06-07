<?php

namespace App\Http\Controllers;
use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirasis = Aspirasi::latest()->paginate(20);
        return view('aspirasi.index',compact('aspirasis'))->with('i', (request()->input('page',1)-1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aspirasi.create_aspirasi');
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
            'nama_penyalur' => 'required',
            'nim' => 'required',
            'aspirasi' => 'required',
        ]);
        Aspirasi::create($request->all());
        return redirect()->route('himatif.index')->with('success','Berhasil Menambahkan Aspirasi');
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
    public function edit(Aspirasi $aspirasi)
    {
        $aspirasis = Aspirasi::latest()->paginate(20);
        return view('aspirasi.edit',compact('aspirasis','aspirasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Aspirasi $aspirasi)
    {
        $request->validate([
            'nama_penyalur' => 'required',
            'nim' => 'required',
            'aspirasi' => 'required',
        ]);
        $aspirasi->update($request->all());
        return redirect()->route('aspirasi.index')
                        ->with('success','Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirasi $aspirasi)
    {
        $aspirasi->delete();
        return redirect()->route('aspirasi.index')
                        ->with('success','Data berhasil dihapus');
    }
}
