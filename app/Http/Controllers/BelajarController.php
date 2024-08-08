<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Selamat Datang di Laravel";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Wellcome";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return "Ini adalah halaman edit dengan nama parameternya" . $id;
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
    public function destroy($id)
    {
        //
    }

    public function tambah()
    {
        $jumlah = 0;
        return view('tambah', compact('jumlah'));
    }
    public function storeTambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah'));
        // return "Jumlah adalah " . $jumlah;
    }

    public function kurang()
    {
        $jumlah = 0;
        return view('kurang', compact('jumlah'));
    }
    public function storeKurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 - $angka2;
        return view('tambah', compact('jumlah'));
        // return "Jumlah adalah " . $jumlah;
    }

    public function bagi()
    {
        $jumlah = 0;
        return view('bagi', compact('jumlah'));
    }
    public function storeBagi(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 / $angka2;
        return view('bagi', compact('jumlah'));
        // return "Jumlah adalah " . $jumlah;
    }

    public function kali()
    {
        $jumlah = 0;
        return view('kali', compact('jumlah'));
    }
    public function storeKali(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 * $angka2;
        return view('bagi', compact('jumlah'));
        // return "Jumlah adalah " . $jumlah;
    }
}
