<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\SupplierModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\TransaksiModel;
use Symfony\Component\VarDumper\Cloner\Data;

class TransaksiController extends Controller
{

    public function brgmasuk()
    {
        $transaksi_masuk = TransaksiModel::all();
        return view('transaksi/brgmasuk', compact('transaksi_masuk'));
    }


    public function addmasuk()
    {
        $supplier = SupplierModel::all();
        $barang = Master::all();
        // $transaksi_masuk = TransaksiModel::all();
        return view('transaksi/addmasuk', compact('supplier', 'barang'));
    }

    public function addmasuk2(Request $request)
    {

        $kode = strtoupper(substr($request->tgl_transaksi, 0, 10));
        $check = count(TransaksiModel::where('no_transaksi', 'like', "%$kode%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $no_transaksi = "TM-" . $kode . "-" . $angka;

        $jumlah_data = count($request->nama_barang);
        for ($i = 0; $i < $jumlah_data; $i++) {

            TransaksiModel::create([
                'no_transaksi' => $no_transaksi,
                'tgl_transaksi' => $request->tgl_transaksi[$i],
                'jns_transaksi' => $request->jns_transaksi[$i],
                'nama_supplier' => $request->nama_supplier[$i],
                'nama_barang' => $request->nama_barang[$i],
                'jumlah' => $request->jumlah[$i],
                'kondisi' => $request->kondisi[$i],
                'pengirim' => $request->pengirim[$i],
                'penerima' => $request->penerima[$i],
            ]);
        }
        return redirect('brgmasuk');
    }

    public function brgkeluar()
    {
        return view('transaksi/brgkeluar');
    }
    public function addkeluar()
    {
        return view('transaksi/addkeluar');
    }
}
