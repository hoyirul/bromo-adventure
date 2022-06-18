<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        $title = 'Destinasi';
        $tables = Destinasi::orderBy('id', 'DESC')->get();
        return view('admin.destinasi.index', compact([
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
        $title = 'Destinasi';
        return view('admin.destinasi.create', compact([
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
            'destinasi' => 'required|string'
        ]);

        Destinasi::create([
            'destinasi' => $request->destinasi
        ]);

        return redirect('/admin/destinasi')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Destinasi';
        $tables = Destinasi::where('id', $id)->first();
        return view('admin.destinasi.show', compact([
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
        $title = 'Destinasi';
        $tables = Destinasi::where('id', $id)->first();
        return view('admin.destinasi.edit', compact([
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
            'destinasi' => 'required|string'
        ]);

        Destinasi::where('id', $id)->update([
            'destinasi' => $request->destinasi
        ]);

        return redirect('/admin/destinasi')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Destinasi::where('id', $id)->delete();
        return redirect('/admin/destinasi')->with('success', 'Data berhasil dihapus!');
    }
}
