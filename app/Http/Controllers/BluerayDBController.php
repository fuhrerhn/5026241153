<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BluerayDBController extends Controller
{
    // Menampilkan seluruh data blueray
    public function index()
    {
        $blueray = DB::table('blueray')->paginate(10);

        return view('blueray', ['blueray' => $blueray]);
    }

    // Menampilkan form tambah blueray
    public function addBlueray()
    {
        return view('addBlueray');
    }

    // Menyimpan data blueray baru
    public function storeBlueray(Request $request)
    {
        DB::table('blueray')->insert([
            'merkblueray' => $request->merkblueray,
            'stockblueray' => $request->stockblueray,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/blueray');
    }

    // Menampilkan form edit blueray
    public function editBlueray($id)
    {
        $blueray = DB::table('blueray')
                    ->where('kodeblueray', $id)
                    ->get();

        return view('editBlueray', ['blueray' => $blueray]);
    }

    // Mengupdate data blueray
    public function updateBlueray(Request $request)
    {
        DB::table('blueray')
            ->where('kodeblueray', $request->kodeblueray)
            ->update([
                'merkblueray' => $request->merkblueray,
                'stockblueray' => $request->stockblueray,
                'tersedia' => $request->tersedia
            ]);

        return redirect('/blueray');
    }

    // Menghapus data blueray
    public function deleteBlueray($id)
    {
        DB::table('blueray')
            ->where('kodeblueray', $id)
            ->delete();

        return redirect('/blueray');
    }

    // Mencari data blueray
    public function searchBlueray(Request $request)
    {
        $cari = $request->cari;

        $blueray = DB::table('blueray')
                    ->where('merkblueray', 'like', "%" . $cari . "%")
                    ->paginate();

        return view('blueray', ['blueray' => $blueray]);
    }
}
