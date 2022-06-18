<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use App\Models\Tipe;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Paket';
        $tables = Paket::with('tipe')
                        ->get();
        return view('admin.paket.index', compact([
            'title',
            'tables'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Paket';
        $tipes = Tipe::all();
        return view('admin.paket.create', compact([
            'title', 'tipes'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request->all());
        $request->validate([
            'tipe_id' => 'required',
            'deskripsi' => 'required',
            'mulai_harga' => 'required|string',
            'foto' => 'required',
        ]);
        // $foto = null;
        if($request->file('foto')){
            $foto = $request->file('foto')->store('paket', 'public');
        }

        Paket::create([
            'tipe_id' => $request->tipe_id,
            'deskripsi' => $request->deskripsi,
            'mulai_harga' => $request->mulai_harga,
            'foto' => $foto
        ]);

        return redirect()->to('/admin/paket')
                    ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Paket';
        $tipes = Tipe::all();
        $tables = Paket::where('id', $id)->first();
        return view('admin.paket.show', compact([
            'title',
            'tables',
            'tipes'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Paket';
        $tipes = Tipe::all();
        $tables = Paket::where('id', $id)->first();
        return view('admin.paket.edit', compact([
            'title', 'tables', 'tipes'
        ]));
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
        $row = Paket::where('id', $id)->first();
        $request->validate([
            'tipe_id' => 'required',
            'deskripsi' => 'required',
            'mulai_harga' => 'required|string',
            // 'foto' => 'required',
        ]);
        
        $foto = null;

        if($request->file('foto')){
            $foto = $request->file('foto')->store('paket', 'public');
        }

        Paket::where('id', $id)->update([
            'tipe_id' => $request->tipe_id,
            'deskripsi' => $request->deskripsi,
            'mulai_harga' => $request->mulai_harga,
            'foto' => ($foto == null) ? $row->foto : $foto
        ]);

        return redirect()->to('/admin/paket')
                    ->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paket::where('id', $id)->delete();
        return redirect('/admin/paket')->with('success', 'Data berhasil dihapus!');
    }
}
