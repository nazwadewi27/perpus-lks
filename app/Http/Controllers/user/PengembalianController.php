<?php

namespace App\Http\Controllers\user;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembalian = Peminjaman::where('user_id', Auth::user()->id)->where('tanggal_pengembalian', '!=', null)->get();

        return view('user.pengembalian.index', compact('pengembalian'));
    }

    public function form()
    {
        $judulBuku =  Peminjaman::where('user_id' , Auth::user()->id)->where('tanggal_pengembalian' , null)->get();
        
        return view('user.pengembalian.form', compact('judulBuku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kondisi_buku_saat_dikembalikan' => 'required',
            'buku_id' => 'required',
            'tanggal_pengembalian' => 'required'
        ]);

        $cek = Peminjaman::where('user_id', Auth::user()->id)
            ->where('buku_id', $request->buku_id)
            ->where('tanggal_pengembalian', null)
            ->first();

        $cek->update([
            'tanggal_pengembalian'  => $request->tanggal_pengembalian,
            'kondisi_buku_saat_dikembalikan' => $request->kondisi_buku_saat_dikembalikan
        ]);

        $buku = Buku::where('id', $request->buku_id)->first();

        if ($request->kondisi_buku_saat_dikembalikan == 'baik' && $cek->kondisi_buku_saat_dipinjam == "baik") {

            $buku->update([
                'j_buku_baik' => $buku->j_buku_baik + 1

            ]);

            $cek->update([
                'denda' => 0
            ]);
        }

        if ($request->kondisi_buku_saat_dikembalikan == 'rusak' && $cek->kondisi_buku_saat_dipinjam == 'baik') {

            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak + 1

            ]);

            $cek->update([
                'denda' => 20000
            ]);
        }

        if ($request->kondisi_buku_saat_dikembalikan == 'rusak' && $cek->kondisi_buku_saat_dipinjam == 'rusak') {

            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak + 1

            ]);

            $cek->update([
                'denda' => 0
            ]);
        }

        if ($request->kondisi_buku_saat_dikembalikan == 'hilang') {
            $cek->update([
                'denda' => 50000
            ]);
        }

        if (!$cek) {
            return redirect()->back();
        }
        return redirect()->route('user.pengembalian.index');
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
        //
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
}
