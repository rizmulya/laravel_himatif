<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        return view('pengurus.create');
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
            'foto_pengurus'=> 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $file = $request->file('foto_pengurus');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $tujuan_upload = 'data_file/pengurus';
        $file->move($tujuan_upload, $nama_file);
        Pengurus::create([
            'nama_pengurus' => $request->nama_pengurus,
            'jabatan' => $request->jabatan,
            'katakata' => $request->katakata,
            'foto_pengurus' => $nama_file,
        ]);
        return redirect()->route('pengurus.index')->with('success','Berhasil Menambahkan Pengurus');
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
    public function edit(Pengurus $penguru)
    {
        return view('pengurus.edit',compact('penguru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pengurus $penguru)
    {
        $request->validate([
            'nama_pengurus' => 'required',
            'jabatan' => 'required',
            'katakata' => 'required',
        ]);
        $inputan = $request->all();
        if($foto = $request->file('foto_pengurus')){
            $tujuan = 'data_file/pengurus';
            $nama_file = time() . "_" . $foto->getClientOriginalName();
            $foto->move($tujuan, $nama_file);
            
            if(File::exists('data_file/pengurus/'. $penguru->foto_pengurus)){
               File::delete('data_file/pengurus/'. $penguru->foto_pengurus);
            }
            $inputan['foto_pengurus'] = "$nama_file";
        }

        $penguru->update($inputan);
        if($penguru){
            return redirect()->route('pengurus.index')
                            ->with('success','Pengurus berhasil di update');
        }else{
            return redirect()->route('pengurus.index')
                            ->with('success','Pengurus gagal di update');
        }
    }

    public function destroy(Pengurus $penguru)
    {  
        if(File::exists('data_file/pengurus/'. $penguru->foto_pengurus)){
            File::delete('data_file/pengurus/'. $penguru->foto_pengurus);
         }
        $penguru->delete();
        return redirect()->route('pengurus.index')
                        ->with('success','Pengurus berhasil dihapus');
    }
}
