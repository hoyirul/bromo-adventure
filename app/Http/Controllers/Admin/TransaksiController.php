<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Transaksi';
        $tables = Transaksi::with('paket')
                    ->orderBy('created_at', 'DESC')->get();
        return view('admin.transaksi.index', compact([
            'title',
            'tables'
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Transaksi';
        $tables = Transaksi::where('id', $id)->first();
        return view('admin.transaksi.show', compact([
            'title',
            'tables'
        ]));
    }

    public function bayar($id)
    {
        $title = 'Transaksi';
        $tables = Transaksi::with('paket')->where('id', $id)->first();
        return view('admin.transaksi.bayar', compact([
            'title',
            'tables'
        ]));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'total' => 'required',
        ]);

        Transaksi::where('id', $id)->update([
            'user_id' => auth()->user()->id,
            'total' => $request->total,
            'tanggal_bayar' => Carbon::now(),
            'status' => 'paid'
        ]);

        return redirect('/admin/transaksi')->with('success', 'Data berhasil diubah!');
    }

    public function export()
    {
        $title = 'Transaksi';
        $tables = Transaksi::with('paket')
                    ->orderBy('created_at', 'DESC')->get();
        // return view('admin.transaksi.export', compact([
        //     'title',
        //     'tables'
        // ]));

        $pdf = PDF::loadview('admin.transaksi.export', compact('tables', 'title'));
        return $pdf->stream();
    }
}
