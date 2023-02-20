<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //KIRIM PESAN
    public function pesan_terkirim(){
        $pesan = Pesan::where('penerima_id', '!=', Auth::user()->id )
        ->where('pengirim_id', Auth::user()->id)
        ->get();
        $penerimas = User::where('role', 'admin')
        ->get();
        return view('user.pesan.terkirim', compact('pesan', 'penerimas'));
    }

    public function kirim_pesan(Request $request)
    {
        $pesan = Pesan::create($request->all());
        $admin = User::where('id', $request->penerima_id)->first();
        return redirect()
            ->back()
            ->with('status', 'success')
            ->with('message', "Berhasil mengirim pesan ke $admin->fullname");
    }   

    //MASUK PESAN
    public function pesan_masuk(Request $request)
    {
        $masuk = Pesan::where('pengirim_id', '!=', Auth::user()->id)
        ->where('penerima_id', Auth::user()->id)
        ->get();

        $notif = Pesan::where('id', $request->status)->first();
        if ($request->status == 'terkirim') {
            $notif->update([
                'terkirim'=> $notif->terkirim + 1
            ]);
        }

        return view('user.pesan.masuk', compact('masuk'));
    }

    public function ubah_status(Request $request)
    {
        $status = Pesan::where('id', $request->id)->first();
        $status->update([
            'status' => 'dibaca'
        ]);
        return redirect()->route('user.pesan_masuk');
    }

    public function index()
    {
        //
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
