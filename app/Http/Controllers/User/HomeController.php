<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $packets = Paket::with('tipe')->orderBy('id', 'DESC')->get();
        return view('user.home.index', compact([
            'packets'
        ]));
    }

    public function show($id){
        $packets = Paket::with('tipe')->where('id', $id)->first();
        return view('user.home.show', compact([
            'packets'
        ]));
    }

    public function status($id){
        $transaksi = Transaksi::with('paket')->where('id', $id)->first();
        // dd($transaksi);
        return view('user.home.inv', compact([
            'transaksi'
        ]));
    }

    public function checkout(Request $request){
        $request->validate([
            'paket_id' => 'required',
            'nama_pemesan' => 'required|string',
            'nomor_hp' => 'required|string',
            'tanggal_tour' => 'required',
        ]);
        
        $orderID = 'BRO'.time();

        Transaksi::create([
            'id' => $orderID,
            'paket_id' => $request->paket_id,
            'nama_pemesan' => $request->nama_pemesan,
            'nomor_hp' => $request->nomor_hp,
            'keterangan' => $request->keterangan,
            'tanggal_pesan' => Carbon::now(),
            'tanggal_tour' => $request->tanggal_tour,
            'status' => 'unpaid'
        ]);

        return redirect('/inv'.'/'.$orderID.'/status')
                ->with('success', 'Terima kasih telah memesan paket kami!');
    }
}
