<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tipe Paket';
        $tables = Tipe::withCount('paket')->get();
        return view('admin.tipe.index', compact([
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
        $title = 'Tipe Paket';
        return view('admin.tipe.create', compact([
            'title'
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
        $request->validate([
            'tipe' => 'required|string'
        ]);

        Tipe::create([
            'tipe' => $request->tipe
        ]);

        return redirect('/admin/tipe')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Tipe Paket';
        $tables = Tipe::where('id', $id)->first();
        return view('admin.tipe.show', compact([
            'title',
            'tables'
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
        $title = 'Tipe Paket';
        $tables = Tipe::where('id', $id)->first();
        return view('admin.tipe.edit', compact([
            'title',
            'tables'
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
        $request->validate([
            'tipe' => 'required|string'
        ]);

        Tipe::where('id', $id)->update([
            'tipe' => $request->tipe
        ]);

        return redirect('/admin/tipe')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tipe::where('id', $id)->delete();
        return redirect('/admin/tipe')->with('success', 'Data berhasil dihapus!');
    }
}
