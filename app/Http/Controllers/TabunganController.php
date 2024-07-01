<?php

namespace App\Http\Controllers;
use App\Models\Tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabungan = Tabungan::all();
        return view('tabungan.index', compact('tabungan'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tabungan = Tabungan::all();
        return view('tabungan.create', compact('tabungan'));
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabungan = new Tabungan;
        $tabungan ->jumlah = $request->jumlah;
        $tabungan ->tanggal = $request->tanggal;
        $tabungan->save();
        return redirect()->route('tabungan.index')->with('success', 'Data berhasil ditambahkan!');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        return view('tabungan.show', compact('tabungan'));
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        return view('tabungan.edit', compact('tabungan','brand'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tabungan = Tabungan::findOrFail($id);
        $tabungan->jumlah = $request->jumlah;
        $tabungan->tanggal = $request->tanggal;
        $tabungan->save();
        return redirect()->route('tabungan.index')->with('success', 'Data berhasil dirubah!');  
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        $tabungan->delete();
        return redirect()->route('tabungan.index')->with('success', 'Data berhasil dihapus!');
  
    }
}
