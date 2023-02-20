<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Identitas;
use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identitas = Identitas::first();

        return view('admin.identitas', compact('identitas'));
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
     * @param  \App\Models\Identitas  $identitas
     * @return \Illuminate\Http\Response
     */
    public function show(Identitas $identitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Identitas  $identitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Identitas $identitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Identitas  $identitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Identitas $identitas)
    {
        if($request->gambar){

            $img = $request->file('gambar');
            $filename = $img->getClientOriginalName();

            if ($request->hasFile('gambar')) {
                $request->file('gambar')->storeAs('/identitas',$filename);
            }
            $gambar = $request->file('gambar')->getClientOriginalName();
            $result = '/storage/identitas/'.$gambar;
        }else{  
            $result = null;
        }
        Identitas::find($id)->update([
            'gambar' => $result,
            'nama_app' => $request->nama_app,
            'email_app' => $request->email_app,
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Identitas  $identitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Identitas $identitas)
    {
        //
    }
}
