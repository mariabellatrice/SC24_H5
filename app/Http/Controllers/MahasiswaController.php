<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view("mahasiswa.index", ["mahasiswa"=> $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("mahasiswa.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mahasiswa::create([
            "nim" => $request->nim,
            "nama" => $request->nama,
            "kelas" => $request->kelas,
            "des" => $request->des,
        ]);
        return redirect("/mahasiswa");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view("mahasiswa.edit", ["mahasiswa" => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Mahasiswa::find($id)->update([
            "nim" => $request->nim,
            "nama" => $request->nama,
            "kelas" => $request->kelas,
            "des" => $request->des,
        ]);
        return redirect("mahasiswa");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::find($id)->delete();
        return redirect("/kategori");
    }
}
