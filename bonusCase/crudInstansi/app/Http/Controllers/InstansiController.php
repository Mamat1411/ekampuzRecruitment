<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index',[
            "title" => "Index",
            "instansi" => Instansi::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create',[
            "title" => "Add Company"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required'
        ]);

        Instansi::create($request->all());
        return redirect('/')->with('status', 'Data Instansi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Instansi $instansi)
    {
        return view('show', [
            "title" => Instansi::where('name', $instansi->name)->get(),
            'instansi' => $instansi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instansi $instansi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instansi $instansi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instansi $instansi)
    {
        Instansi::destroy($instansi->id);
        return redirect('/')->with('status', 'Data Instansi Berhasil Dihapus');
    }
}
