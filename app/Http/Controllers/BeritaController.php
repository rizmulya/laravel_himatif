<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
        return view('berita.index',compact('beritas'))->with('i', (request()->input('page',1)-1) * 2);
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
            'foto_berita' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'tanggal_rilis' => 'required|date',
        ]);

        $file = $request->file('foto_berita');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $tujuan_upload = 'data_file/berita';
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
    public function edit(Berita $beritum)
    {
        return view('berita.edit_berita',compact('beritum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $beritum)
    {
        $request->validate([
            'judul_berita' => 'required',
            'deskripsi' => 'required',
            'tanggal_rilis' => 'required|date',
        ]);
        $inputan = $request->all();
        if($foto = $request->file('foto_berita')){
            $tujuan = 'data_file/berita';
            $nama_file = time() . "_" . $foto->getClientOriginalName();
            $foto->move($tujuan, $nama_file);
            
            if(File::exists('data_file/berita/'. $beritum->foto_berita)){
               File::delete('data_file/berita/'. $beritum->foto_berita);
            }
            $inputan['foto_berita'] = "$nama_file";
        }

        $beritum->update($inputan);
        if($beritum){
            return redirect()->route('berita.index')
                            ->with('success','Berita berhasil di update');
        }
        // $foto = Storage::delete($beritum->foto_berita);
        // $file = $request->file('foto_berita');
        // $nama_file = time() . "_" . $file->getClientOriginalName();

        // $tujuan_upload = 'data_file';
        // $file->move($tujuan_upload, $nama_file);
        // $beritum->update([
        //     'judul_berita' => $request->judul_berita,
        //     'deskripsi' => $request->deskripsi,
        //     'tanggal_rilis' => $request->tanggal_rilis,
        //     'foto_berita' => $nama_file,
        // ]);
        // return redirect()->route('berita.index')
        //                 ->with('success','Berita berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $beritum)
    {
        // $deleted = DB::table('berita')->where('id_berita', $beritum)->delete();
        // return redirect()->route('berita.index')
        //                  ->with('success','Berita berhasil dihapus');

        Storage::delete('data_file/' . $beritum->foto_berita);
        $beritum->delete();
        return redirect()->route('berita.index')
                        ->with('success','Berita berhasil dihapus');
    }
}
?>