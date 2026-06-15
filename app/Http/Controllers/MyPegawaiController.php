<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
class MyPegawaiController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('mypegawai')->orderBy('kodepegawai')->get();
        return view('mypegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('mypegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|string|max:10|unique:mypegawai,kodepegawai',
            'namalengkap' => 'required|string|max:20',
            'divisi' => 'required|string|max:20',
            'departemen' => 'required|string|max:20',
        ]);

        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect()->route('mypegawai.index')->with('success', 'Data pegawai berhasil ditambahkan.');
    }

    public function view($kodepegawai){
        $pegawai = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->first();
        return view('mypegawai.view', compact('pegawai'));
    }

}
