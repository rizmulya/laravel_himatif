<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate(20);
        return view('berita.index',compact('beritas'))->with('i', (request()->input('page',1)-1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'judul_berita' => 'required',
            'deskripsi' => 'required',
            'foto_berita' => 'required',
            'tanggal_rilis' => 'required',
        ]);

        $file = $request->file('foto_berita');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);
        Berita::create([
            'judul_berita' => $request->judul_berita,
            'deskripsi' => $request->deskripsi,
            'tanggal_rilis' => $request->tanggal_rilis,
            'foto_berita' => $nama_file,
        ]);
        return redirect()->route('berita.index')
            ->with('success', 'Berita Berhasil Ditambahkan.');
    }
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $deleteBerita = DB::table('berita')->where('id_berita',$berita);
        return redirect()->route('berita.index')
                         ->with('success','Berita berhasil dihapus');
        
        // Storage::delete('data_file/' . $berita->foto_berita);
        // $berita->delete();
        // return redirect()->route('berita.index')
        //                 ->with('success','Berita berhasil dihapus');
    }
}
?>