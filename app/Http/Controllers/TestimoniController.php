<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonis = Testimoni::latest()->paginate(20);
        return view('testimoni.index_testimoni',compact('testimonis'))->with('i', (request()->input('page',1)-1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create_testimoni');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_alumni' => 'required',
            'keterangan_alumni' => 'required',
            'cerita' => 'required',
            'foto_alumni' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $file = $request->file('foto_alumni');
        $nama_file = time().date('YmdHis') . "_" . $file->getClientOriginalName();

        $tujuan_upload = 'data_file/testimoni';
        $file->move($tujuan_upload, $nama_file);
        Testimoni::create([
            'nama_alumni' => $request->nama_alumni,
            'keterangan_alumni' => $request->keterangan_alumni,
            'cerita' => $request->cerita,
            'foto_alumni' => $nama_file,
        ]);
        return redirect()->route('testimoni.index')
            ->with('success', 'Testimoni Berhasil Ditambahkan.');
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
    public function edit(Testimoni $testimoni)
    {
        return view('testimoni.edit_testimoni',compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'nama_alumni' => 'required',
            'keterangan_alumni' => 'required',
            'cerita' => 'required',
        ]);
        $inputan = $request->all();
        if($foto = $request->file('foto_alumni')){
            $tujuan = 'data_file/testimoni';
            $nama_file = time().date('YmdHis') . "_" . $foto->getClientOriginalName();
            $foto->move($tujuan, $nama_file);
            
            if(File::exists('data_file/testimoni/'. $testimoni->foto_alumni)){
               File::delete('data_file/testimoni/'. $testimoni->foto_alumni);
            }
            $inputan['foto_alumni'] = "$nama_file";
        }

        $testimoni->update($inputan);
        if($testimoni){
            return redirect()->route('testimoni.index')
                            ->with('success','Testimoni berhasil di update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        if(File::exists('data_file/testimoni/'. $testimoni->foto_alumni)){
            File::delete('data_file/testimoni/'. $testimoni->foto_alumni);
         }
        $testimoni->delete();
        return redirect()->route('testimoni.index')
                        ->with('success','Testimoni berhasil dihapus');
    }
    
    
}
