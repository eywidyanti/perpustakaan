<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('pinjam.index',['pinjams' => Pinjam::all()]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('pinjam.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id_buku' =>'required',
            'id_anggota' =>'required',
            'id_petugas' =>'required',
            'tgl_pinjam' =>'required',
            'tgl_kembali' =>'required',
            'jumlah' =>'required',
            'status' =>'required',
        ]);
        Pinjam::create($validateData);
        return redirect('/pinjams')->with('pesan',"Pinjam $request->id berhasil ditambahkan");
    }

    /**
    * Display the specified resource.
    *
    * @param \App\Models\Pinjam $pinjam
    * @return \Illuminate\Http\Response
    */
    public function show(Pinjam $pinjam)
    {
        return view('pinjam.show',compact('pinjam'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param \App\Models\Pinjam $pinjam
    * @return \Illuminate\Http\Response
    */
    public function edit(Pinjam $pinjam)
    {
        return view('pinjam.edit',compact('pinjam'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Models\Pinjam $pinjam
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Pinjam $pinjam)
    {
        $validateData = $request->validate([
            'id_buku' =>'required',
            'id_anggota' =>'required',
            'id_petugas' =>'required',
            'tgl_pinjam' =>'required',
            'tgl_kembali' =>'required',
            'jumlah' =>'required',
            'tgl_setor' =>'required',
            'denda' => 'required',
            'status' =>'required',
        ]);
        $pinjam->update($validateData);
        return redirect('/pinjams')->with('pesan',"Pinjam $pinjam->id berhasil dikembalikan");
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param \App\Models\Pinjam $pinjam
    * @return \Illuminate\Http\Response
    */
    public function destroy(Pinjam $pinjam)
    {
        $pinjam->delete();
        return redirect('/pinjams')->with('pesan',"Pinjam $pinjam->nip berhasil dihapus");
    }
}
