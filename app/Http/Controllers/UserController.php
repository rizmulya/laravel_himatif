<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akuns = User::latest()->paginate(20);
        return view('akun.index',compact('akuns'))->with('i', (request()->input('page',1)-1) * 20);
    }
    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return view('backendnew');
        }
        return back()->with('Login Error','Login Gagal');
    }
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
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' =>password_hash($request->password,PASSWORD_BCRYPT),
        ]);
        return view('login')->with('Berhasil','Anda telah berhasil melakukan penambahan akun');
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
    public function destroy(User $akun)
    {
        $akun->delete();
        return redirect()->route('akun.index')
                        ->with('success','Data berhasil dihapus');
    }
    public function logout(Request $request)
    {
        Auth::logout();
		request()->session()->invalidate();
		return redirect('/admin');
    }
}
