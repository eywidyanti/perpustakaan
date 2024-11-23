<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('user.index',['users' =>User::all()]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    //
        return view('user.create');
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
    //
        $validateData = $request->validate([
            'nip' =>'required',
            'nama' =>'required',
            'jenis_kelamin' =>'required',
            'tanggal_lahir' =>'required',
            'telp' =>'required',
            'alamat' =>'required',
        ]);
        User::create($validateData);
        return redirect('/users')->with('pesan',"user $request->nip berhasil ditambahkan");
    }
    /**
    * Display the specified resource.
    *
    * @param \App\Models\user $user
    * @return \Illuminate\Http\Response
    */
    public function show(User $user)
    {
    //
        return view('user.show',compact('user'));
    }
    /**
    * Show the form for editing the specified resource.
    *
    * @param \App\Models\user $user
    * @return \Illuminate\Http\Response
    */
    public function edit(User $user)
    {
    //
        return view('user.edit',compact('user'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Models\user $user
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, User $user)
    {
    //
        $validateData = $request->validate([
        'nip' =>'required',
        'nama' =>'required',
        'jenis_kelamin' =>'required',
        'tanggal_lahir' =>'required',
        'telp' =>'required',
        'alamat' =>'required',
        ]);
        $user->update($validateData);
        return redirect('/users')->with('pesan',"user $user->nip berhasil diupdate");
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param \App\Models\user $user
    * @return \Illuminate\Http\Response
    */
    public function destroy(user $user)
    {
    //
        $user->delete();
        return redirect('/users')->with('pesan',"user $user->nip berhasil dihapus");
    }
}