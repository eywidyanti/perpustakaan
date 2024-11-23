<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('buku.index',['bukus' => Buku::all()]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('buku.create');
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
        'isbn' => 'required',
        'judul' => 'required',
        'pengarang' => '',
        'jumlahStok' => 'required',
        ]);
        Buku::create($validateData);
        return redirect('/bukus')->with('pesan',"Buku $request->judul berhasil ditambahkan");
    }

    /**
    * Display the specified resource.
    *
    * @param \App\Models\Buku $buku
    * @return \Illuminate\Http\Response
    */
    public function show(Buku $buku)
    {
        return view('buku.show',compact('buku'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param \App\Models\Buku $buku
    * @return \Illuminate\Http\Response
    */
    public function edit(Buku $buku)
    {
        return view('buku.edit',compact('buku'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Models\Buku $buku
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Buku $buku)
    {
        $validateData = $request->validate([
        'isbn' => 'required',
        'judul' => 'required',
        'pengarang' => '',
        'jumlahStok' => 'required',
        ]);
        $buku->update($validateData);
        return redirect('/bukus')->with('pesan',"Buku $buku->judul berhasil diupdate");
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param \App\Models\Buku $buku
    * @return \Illuminate\Http\Response
    */
    public function destroy(Buku $buku)
    {
    $buku->delete();
    return redirect('/bukus')->with('pesan',"Buku $buku->judul berhasil dihapus");
    }
}
