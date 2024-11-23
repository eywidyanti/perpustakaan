<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('anggota.index',['anggotas' => Anggota::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim' =>'required',
            'nama' =>'required',
            'prodi' =>'required',
            'jenis_kelamin' =>'required',
            'tanggal_lahir' =>'required',
            'telp' =>'required',
            'alamat' =>'required',
            ]);
            Anggota::create($validateData);
            return redirect('/anggotas')->with('pesan',"Anggota $request->nim berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        return view('anggota.show',compact('anggota'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        return view('anggota.edit',compact('anggota'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        $validateData = $request->validate([
            'nim' =>'required',
            'nama' =>'required',
            'prodi' =>'required',
            'jenis_kelamin' =>'required',
            'tanggal_lahir' =>'required',
            'telp' =>'required',
            'alamat' =>'required',
            ]);
            $anggota->update($validateData);
            return redirect('/anggotas')->with('pesan',"Anggota $anggota->nim berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();
        return redirect('/anggotas')->with('pesan',"Anggota $anggota->nim berhasil dihapus");

    }
}
